<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alternativa;
class AlternativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id= Pregunta::where('descripcion', 'ESTUDIO METODOLÓGICO O CIENTÍFICO DE LAS COMPUTADORAS PARA EL MANEJO DE LA INFORMACIÓN AUTOMÁTICA.')->value('id');

        $alternativas = [
            'COMPUTACION',
            'COMPUTADORA',
            'INFORMATICA',
            'OFIMATICA',
            'AUTOMATICO',
            'MICROSOFT WORD',
            'MICROSOFT WORK',
            'MICROSOFT EXCEL',
            'OFIMATICA',
            'DOCUMENTO',
            'HARDWARE',
            'SOFTWARE',
            'COMPUTADORA',
            'MICROSOFT',
            'CPU',
            'DISTANCIA QUE EXISTE ENTRE EL BORDE (SUPERIOR, INFERIOR, IZQUIERDA Y DERECHA) DE LA PAGINA DE UN DOCUMENTO Y EL CONTENIDO DEL MISMO',
            'CONJUNTO DE INTERLINEADOS ENTRE CADA PARRAFO EN UN DOCUMENTO',
            'DISTANCIA QUE EXISTE ENTRE LA PARTE IZQUIERDA Y LOS PARRAFOS DEL DOCUMENTO',
            'ESPACIO ENTRE CADA LINEA DEL PARRAFO DEL DOCUMENTO',
            'NINGUNA DE LAS ANTERIORES',
            'FUENTE',
            'TAMAÑO DE FUENTE',
            'INTERLINEADO',
            'ESTILO',
            'COLOR DE FUENTE',
            'FUENTE',
            'TAMAÑO DE FUENTE',
            'INTERLINEADO',
            'ESTILO',
            'NEGRITA',
            'COLOR DE FUENTE',
            'FUENTE',
            'RELLENO',
            'BORDE',
            'PARRAFO',
            'ENCABEZADO',
            'NRO DE PAGINA',
            'MARGEN',
            'PIE DE PAGINA',
            'PARRAFO',
            'ENCABEZADO',
            'NRO DE PAGINA',
            'MARGEN',
            'PIE DE PAGINA',
            'PARRAFO',
            'COPIAR',
            'ZOOM',
            'BARRA DE DESPLAZAMIENTO',
            'PIE DE PAGINA',
            'PEGAR',
            'CURSOR',
            'PUNTERO',
            'MOUSE',
            'CLICK',
            'SELECCION',
            'CLICK DERECHO',
            'CLICK',
            'MOUSE',
            'SCROLL',
            'SELECCION',
            'CLICK DERECHO',
            'CLICK',
            'MOUSE',
            'SCROLL',
            'SELECCION',
            'PARRAFO',
            'SANGRIA',
            'CONTENIDO',
            'PIE DE PAGINA',
            'LINEA DE TEXTO',
            'PARRAFO',
            'SANGRIA',
            'CONTENIDO',
            'PIE DE PAGINA',
            'LINEA DE TEXTO',
            'TAMAÑO DE FUENTE',
            'ZOOM',
            'NEGRITA',
            'ARIAL',
            'AUMENTAR',
            'INTRO',
            'TAB',
            'NUM',
            'MAYUS',
            'BACKSPACE',
            'INTRO',
            'TAB',
            'NUM',
            'MAYUS',
            'BACKSPACE',
        ];


        foreach ($alternativas as $item) {
            $alternativa = Alternativa::firstOrCreate([
                'pregunta_id'   => $id,
                'descripcion'   => $item
            ]);
            if($alternativa->id%5==0){
                $id++;
            }
            if($id==309){
                continue;
            }
        }
    }
}
