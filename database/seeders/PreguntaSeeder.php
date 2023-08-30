<?php

namespace Database\Seeders;

use App\Models\Examen;
use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id= Examen::where('titulo', 'EXAMEN DE CONVOCATORIA NRO 1')->value('id');
        $preguntas = [
            ['descripcion' => 'ESTUDIO METODOLÓGICO O CIENTÍFICO DE LAS COMPUTADORAS PARA EL MANEJO DE LA INFORMACIÓN AUTOMÁTICA.', 'respuesta' => 'COMPUTACION', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'APLICACION ENCARGADA DE REDACCION DE DOCUMENTOS CON FINES DE UNA OFICINA', 'respuesta' => 'MICROSOFT WORD', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'ES EL CONJUNTO DE COMPONENTES O TAMBIÉN LLAMADOS DISPOSITIVOS FÍSICOS O TANGIBLES QUE INTERVIENEN EN UN SISTEMA COMPUTACIONAL', 'respuesta' => 'HARDWARE', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'MARGEN', 'respuesta' => 'DISTANCIA QUE EXISTE ENTRE EL BORDE (SUPERIOR, INFERIOR, IZQUIERDA Y DERECHA) DE LA PAGINA DE UN DOCUMENTO Y EL CONTENIDO DEL MISMO', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'SIRVE PARA ESTABLECER UN FORMATO DETERMINADO A LA SELECCION DE TEXTO Y NUMEROS EN UN DOCUMENTO', 'respuesta' => 'FUENTE', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'SIRVE PARA ESTABLECER UN RESALTE O ENGROSAR EL TEXTO SELECCIONADO', 'respuesta' => 'NEGRITA', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'ESTABLECE UN COLOR AL TEXTO, DONDE EL USUARIO SELECCIONA EL COLOR QUE REQUIERA EN LA PALETA.', 'respuesta' => 'COLOR DE FUENTE', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'ES EL MENSAJE QUE SE MOSTRARA REPETIDAMENTE EN TODAS LAS PAGINAS DEL DOCUMENTO EN LA PARTE SUPERIOR', 'respuesta' => 'ENCABEZADO', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'ES EL MENSAJE QUE SE MOSTRARA REPETIDAMENTE EN TODAS LAS PAGINAS DEL DOCUMENTO EN LA PARTE INFERIOR', 'respuesta' => 'PIE DE PAGINA', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'ES LA HERRAMIENTA DE MICROSOFT WORD PARA PODER ACERCAR O ALEJAR LA VISIBILIDAD DEL DOCUMENTO', 'respuesta' => 'ZOOM', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'EN UN DOCUMENTO DE TEXTO EXISTE UNA BARRITA VERTICAL INTERMITENTE', 'respuesta' => 'CURSOR', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'BOTON DEL MOUSE PARA ABRIR UN MENU CONTEXTUAL', 'respuesta' => 'CLICK DERECHO', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'EL BOTON DEL MOUSE PARA SELECCIONAR, ABRIR O ARRASTRAR', 'respuesta' => 'CLICK', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'ES LA UNIDAD DE FORMATO DE TEXTO MÁS IMPORTANTE, ADMITE FORMATOS DE ALINEACIÓN, SANGRÍAS, ESPACIADO, INTERLINEADOS, BORDES, ETC. PUEDE SER UNA LINEA O VARIAS LINEAS DE TEXTO, SE CREA CADA VEZ QUE PULSAMOS LA TECLA ENTER', 'respuesta' => 'PARRAFO', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'ES UN ESPACIO ADICIONAL O MENOR AL MARGEN EN LA POSICION IZQUIERDA O DERECHA DEL PARRAFO DEL DOCUMENTO', 'respuesta' => 'SANGRIA', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'ES EL TAMAÑO DE LETRAS QUE SE ESTABLECEN AL TEXTO SELECCIONADO', 'respuesta' => 'TAMAÑO DE FUENTE', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'TECLA QUE SIRVE PARA TERMINAR UN PARRAFO EN WORD', 'respuesta' => 'INTRO', 'examen_id' => $id, 'punto' => 2],
            ['descripcion' => 'TECLA QUE REALIZA UN ESPACIO UN POCO MAS GRANDE QUE LA BARRA ESPACIADORA', 'respuesta' => 'TAB', 'examen_id' => $id, 'punto' => 2],
        ];
        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate($menuData);
        }
    }
}
