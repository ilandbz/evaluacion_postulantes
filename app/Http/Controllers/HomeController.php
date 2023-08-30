<?php

namespace App\Http\Controllers;

use App\Models\AlternativaMarcada;
use App\Models\Postulante;
use App\Models\Examen;
use App\Models\ExamenPostulante;
use App\Models\Pregunta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $postulante=Postulante::with('cargo')->find(Auth::user()->postulante_id);
		$fechaHoraActual = Carbon::now();
		$data['fechaHoraActual'] = $fechaHoraActual;
        $data['postulante'] = $postulante;
        $examen=Examen::where('cargo_id', $postulante->cargo_id)->first();
		$data['examen']=$examen;
		$examenpostulante = ExamenPostulante::where('postulante_id', $postulante->id)->where('examen_id', $examen->id)->first();
		if($examenpostulante){
			$data['mensaje']='YA RINDIO EL EXAMEN';
		}else if($fechaHoraActual->format('Y-m-d H:i:s')>$examen->fecha.' '.$examen->hora_inicio && 
			$fechaHoraActual->format('Y-m-d H:i:s')<$examen->fecha.' '.$examen->hora_fin){
			$data['mensaje']='SUCCESS';
		}else{
			$data['mensaje']='NO SE ENCUENTRA EN LA FECHA Y HORA ESTABLECIDA, NO CORRESPONDE';
		}
        return view('app', $data);
    }
    public function examen(){
        $postulante=Postulante::find(Auth::user()->postulante_id);
        $data['postulante'] = $postulante;
        $examen=Examen::where('cargo_id', $postulante->cargo_id)->first();
        $data['examen']=$examen;
        $data['preguntas']=Pregunta::where('examen_id', $examen->id)->inRandomOrder()->limit(10)->get();
        return view('paginas/examen', $data);
    }
    function resolver(Request $request){
		$preguntas= $request->pregunta_marcacion;
		$puntajetotal = 0; 
		$incorrectas =0;
		$miarreglo=null;
		foreach ($preguntas as $fila) {
			$marcado = $fila['marcado'] ?? "NINGUNO";

			$row['punto']=0;
			$pregunta = Pregunta::find($fila['idpregunta']);
			if($pregunta['respuesta']==$marcado){
				$puntajetotal+=2;
				$row['punto']=$pregunta['punto'];
			}else{
				$incorrectas++;
			}
			$row['descripcion']=$pregunta['descripcion'];
			$row['marcado']=$marcado;
			$row['respuesta']=$pregunta['respuesta'];
			$miarreglo[]=$row;
		}
		$examenpostulante = ExamenPostulante::create([
			'postulante_id' => $request->postulante_id,
			'examen_id' => $request->idexamen,
			'tiempo_rendido' => $request->tiempo_rendicion,
			'fecha_hora'	=> date('Y-m-d'),
			'totalincorrectas' => $incorrectas,
			'nota' => $puntajetotal,
			'estado' => $puntajetotal>13 ? 'APROBADO' : 'DESAPROBADO',
		]);
		foreach($miarreglo as $fila){
			AlternativaMarcada::firstOrCreate([
				'examen_postulante_id' => $examenpostulante->id,
				'pregunta' => $fila['descripcion'],
				'respuesta' => $fila['respuesta'],
				'marco' => $fila['marcado'],
				'puntos'	=> $fila['punto']
			]);
		}
		return redirect('examen-resuelto?id='.$examenpostulante->id);
	}
	function examen_resuelto(Request $request){
		$data['examenpostulante']=ExamenPostulante::with('alternativasMarcadas', 'postulante:id,nombres,apellido_paterno,apellido_materno')
		->where('id', $request->id)->first();
		$data['registros']=AlternativaMarcada::where('examen_postulante_id', $request->id)->get();
		return view('paginas/resultado', $data);		
	}

}
