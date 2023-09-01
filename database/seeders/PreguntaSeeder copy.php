<?php

namespace Database\Seeders;

use App\Models\Alternativa;
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3757')->value('id'); 
        $preguntas = [ 
            ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  
        ]; 
        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3912')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];




        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
            $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3957')->value('id'); 
                    $preguntas = [ 
                        ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
                        ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
                        ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
                        ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
                        ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
                        ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
                        ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
                        ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
                        ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
                        ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
                        ],  ];


        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
            $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4003')->value('id'); 
                    $preguntas = [ 
                        ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
                        ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
                        ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
                        ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
                        ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
                        ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
                        ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
                        ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
                        ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
                        ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
                        ],  ];



        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4006')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];


        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4222')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];


        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4000')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];



        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3101')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];


        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4220')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];

        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4217')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];


        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4225')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];

        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 2980')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];

        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4218')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];

        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4215')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];

        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 2971')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];

        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4216')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];

        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4226')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];

        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }
$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4221')->value('id'); 
        $preguntas = [ 
              ['descripcion' => 'EL PADECIMIENTO QUE PUEDE ASOCIARSE CON LA FIBROSIS QUISTICA ES', 'respuesta' => 'EL ILEO MECONIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL ILEO MECONIAL','LA ENTEROCOLITIS NECROSANTE','LA ENFERMEDAD DE HIRSCHPRUNG','EL HIPOTIROIDISMO','LA ATRESIA DEL ILEON', ]
            ],    ['descripcion' => 'EL MECANISMO INMUNOLOGICO DE DAÑO EN EL LUPUS ERITEMATOSO GENERALIZADO MAS IMPORTANTE ES', 'respuesta' => 'EL DEPOSITO DE COMPLEJOS INMUNES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ANAFILAXIA','LA CITOTOXICIDAD MEDIADA POR ANTICUERPOS ','EL DEPOSITO DE COMPLEJOS INMUNES','LA HIPERSENSIBILIDAD RETARDADA','EL DAÑO TISULAR MEDIADO POR CELULAS', ]
            ],    ['descripcion' => 'PACIENTE MASCULINO DE 37 AÑOS DE EDAD QUE ACUDE A URGENCIAS POR FIEBRE, DOLOR ABDOMINAL DIFUSO, A LA EXPLORACIÓN FISICA SE ENCUENTRA GIORDANO BILATERAL. EGO: LEUCOCITOS 10 X CAMPO, BACTERIAS ++, RX DE ABDOMEN CON SILUETA RENAL, PRESENCIA DE AIRE DE FORMA BILATERAL. CON ESTOS DATOS ESTABLECE EL DX. DE:', 'respuesta' => 'PIELONEFRITIS ENFISEMATOSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LITIASIS URINARIA','INFECCIÓN DE VIAS URINARIAS BAJAS','PIELONEFRITIS ENFISEMATOSA','CISTITIS','POROSTATITIS', ]
            ],    ['descripcion' => 'ESTRUCTURA QUE FRECUENTEMENTE LESIONAN LAS FRACTURAS DEL HUMERO LOCALIZADAS EN LA UNIÓN DEL TERCIO MEDIO CON EL DISTAL', 'respuesta' => 'NERVIO RADIAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NERVIO CUBITAL','NERVIO RADIAL','NERVIO MEDIANO','ARTERIA HUMERAL','VENA HUMERAL', ]
            ],    ['descripcion' => 'LA CAUSA MAS FRECUENTE DE MUERTE POSTERIOR A UN INFARTO A UN INFARTO DEL MIOCARDIO ES LA PRESENTACIÓN DE:', 'respuesta' => 'TAQUIARRITMIAS VENTRICULARES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'UN NUEVO INFARTO DEL MIOCARDIO','INSUFIENCIA CARDIACA PROGRESIVA','TAQUIARRITMIAS VENTRICULARES','BLOQUEO AURICULOVENTRICULAR COMPLETO','ANEURISMA VENTRICULAR', ]
            ],    ['descripcion' => 'A UN RECIEN NACIDO QUE AL MINUTO PRESENTA LLANTO DEBIL, FRECUENCIA LLANTO DEBIL, FRECUENCIA CARDIACA DE 120 POR MINUTO, LIGERA FLEXIÓN DE LAS EXTREMIDADES, REACCIÓN DISCRETA A LOS ESTIMULOS Y ACROCIANOSIS. LE CORRESPONDE UNA CALIFICACIÓN DE APGAR DE:', 'respuesta' => '6', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '2','4','6','8','10', ]
            ],    ['descripcion' => 'LA INTOLERANCIA A LA LACTOSA EN LOS NIÑOS ES DEBIDA A LA ALTERACIÓN DE:', 'respuesta' => 'LAS MICROVELLOSIDADES INTESTINALES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ABSORCIÓN DE LIQUIDOS EN EL COLON','LA ABSORCIÓN INTESTINAL','LAS MICROVELLOSIDADES INTESTINALES','LA MUCOSA COLONICA','LA SUBMUCOSA INTESTINAL', ]
            ],    ['descripcion' => '¿EN CAPA DE LA PIEL LOS MELANOCITOS Y COMPLEJOS MELANOPROTEINICO ALCANZAN SU MAXIMA CONCENTRACIÓN?', 'respuesta' => 'BASAL', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESPINOSA','GRANULOSA','BASAL','DERMIS','CORNEA', ]
            ],    ['descripcion' => 'SE DENOMINA (       ) A TODA ENFERMERDAD INFECCIOSA QUE AFECTA A UN PORCENTAJE ELEVADO DE LA POBLACIÓN EN DOS O MÁS PAISES  DE UNA REGIÓN EPIDEMIOLOGICA:', 'respuesta' => 'PANDEMIA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PANDEMIA','EPIDEMIA','BROTE','ENDEMIA','HIPERENDEMIA', ]
            ],    ['descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
            ],  ];



            
        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate(
                [
                    'descripcion' => $menuData['descripcion'], 
                    'respuesta' => $menuData['respuesta'], 
                    'examen_id' => $menuData['examen_id'], 
                    'punto' => $menuData['punto'],
                ]
            );
            foreach($menuData['alternativas'] as $alternativa){
                $reg = Alternativa::firstOrCreate([
                    'pregunta_id'   => $pregunta->id,
                    'descripcion'   => $alternativa
                ]);
            }
        }





        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4227')->value('id'); 
        $preguntas = [ 
            [  'descripcion' => 'El agente etiológico del DENGUE es un:', 'respuesta' => 'Virus', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bacteria','Virus','Parásito','Protozoario','NA', ]
            ],  [  'descripcion' => 'Los hemoglobinómetros miden la concentración de hemoglobina en:', 'respuesta' => 'Sólo sangre venosa', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Sólo sangre arterial','Sangre capilar, sangre venosa y sangre arterial','b) y c)','Sólo sangre venosa','NA', ]
            ],  [  'descripcion' => 'La notificación epidemiológica diaria se realiza a través de:', 'respuesta' => 'Vigilancia epidemiológica activa', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NA','Vigilancia epidemiológica activa','Notificación diaria de casos','Notificación de enfermedades infecciosas','VEA vigilancia epidemiológica pasiva', ]
            ],  [  'descripcion' => 'Se considera sintomático respiratorio a:', 'respuesta' => 'Persona con tos por más de 15 días', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Persona con tos por más de 1 mes','Persona con tos por más de 10 días','Persona con tos por más de 07 días','NA','Persona con tos por más de 15 días', ]
            ],  [  'descripcion' => 'Las vacunas en el nivel operativo deben conservarse a una T° de:', 'respuesta' => '2 a  8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '2 a  8°C','12 °C','0 a 10°C','0 a 5°C','NA', ]
            ],  [  'descripcion' => 'Que vacunas se Utilizaron en el Perú, para la vacunación contra la COVID-19', 'respuesta' => 'Astrazeneca, Pfizer, Sinopharm, Moderna', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Astrazeneca, Pfizer, Sputnik V, Jhonson&Jhonson','Astrazeneca, Moderna, Jhonson&Jhonson','Astrazeneca, Pfizer, Sinopharm, Moderna','NA','Astrazeneca. Pfizer, Sputnik V y Moderna', ]
            ],  [  'descripcion' => 'El efecto de la vacuna BCG se produce después de:', 'respuesta' => '4 semanas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '2 semanas','4 semanas','3 semanas','NA','7 días', ]
            ],  [  'descripcion' => 'Los hemoglobinómetros miden la concentración de hemoglobina en:', 'respuesta' => 'Sólo sangre venosa', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Sólo sangre arterial','Sangre capilar, sangre venosa y sangre arterial','Sólo sangre venosa','b) y c)','NA', ]
            ],  [  'descripcion' => 'Es objetivo de la higiene del paciente', 'respuesta' => 'Todas las respuestas son correctas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Contribuir al bienestar físico y psíquico del enfermo','Estimular la circulación sanguínea','Todas las respuestas son correctas','Conservar la integridad de la piel','NA', ]
            ],  [  'descripcion' => 'Quien es el director ejecutivo de la unidad ejecutora 404 Red de Salud Huanuco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'Wilmer Espinoza Torres','Rolling Cruz Mlaprtida','Miguel Angel Paco Fernandez','Yuri Troncos Taquio','NA', ]
            ],  ]; 
            foreach ($preguntas as $menuData) {
                $pregunta = Pregunta::firstOrCreate(
                    [
                        'descripcion' => $menuData['descripcion'], 
                        'respuesta' => $menuData['respuesta'], 
                        'examen_id' => $menuData['examen_id'], 
                        'punto' => $menuData['punto'],
                    ]
                );
                foreach($menuData['alternativas'] as $alternativa){
                    $reg = Alternativa::firstOrCreate([
                        'pregunta_id'   => $pregunta->id,
                        'descripcion'   => $alternativa
                    ]);
                }
            }


$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4228')->value('id'); 
        $preguntas = [ 
            [  'descripcion' => 'El agente etiológico del DENGUE es un:', 'respuesta' => 'Virus', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bacteria','Virus','Parásito','Protozoario','NA', ]
            ],  [  'descripcion' => 'Los hemoglobinómetros miden la concentración de hemoglobina en:', 'respuesta' => 'Sólo sangre venosa', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Sólo sangre arterial','Sangre capilar, sangre venosa y sangre arterial','b) y c)','Sólo sangre venosa','NA', ]
            ],  [  'descripcion' => 'La notificación epidemiológica diaria se realiza a través de:', 'respuesta' => 'Vigilancia epidemiológica activa', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NA','Vigilancia epidemiológica activa','Notificación diaria de casos','Notificación de enfermedades infecciosas','VEA vigilancia epidemiológica pasiva', ]
            ],  [  'descripcion' => 'Se considera sintomático respiratorio a:', 'respuesta' => 'Persona con tos por más de 15 días', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Persona con tos por más de 1 mes','Persona con tos por más de 10 días','Persona con tos por más de 07 días','NA','Persona con tos por más de 15 días', ]
            ],  [  'descripcion' => 'Las vacunas en el nivel operativo deben conservarse a una T° de:', 'respuesta' => '2 a  8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '2 a  8°C','12 °C','0 a 10°C','0 a 5°C','NA', ]
            ],  [  'descripcion' => 'Que vacunas se Utilizaron en el Perú, para la vacunación contra la COVID-19', 'respuesta' => 'Astrazeneca, Pfizer, Sinopharm, Moderna', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Astrazeneca, Pfizer, Sputnik V, Jhonson&Jhonson','Astrazeneca, Moderna, Jhonson&Jhonson','Astrazeneca, Pfizer, Sinopharm, Moderna','NA','Astrazeneca. Pfizer, Sputnik V y Moderna', ]
            ],  [  'descripcion' => 'El efecto de la vacuna BCG se produce después de:', 'respuesta' => '4 semanas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '2 semanas','4 semanas','3 semanas','NA','7 días', ]
            ],  [  'descripcion' => 'Los hemoglobinómetros miden la concentración de hemoglobina en:', 'respuesta' => 'Sólo sangre venosa', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Sólo sangre arterial','Sangre capilar, sangre venosa y sangre arterial','Sólo sangre venosa','b) y c)','NA', ]
            ],  [  'descripcion' => 'Es objetivo de la higiene del paciente', 'respuesta' => 'Todas las respuestas son correctas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Contribuir al bienestar físico y psíquico del enfermo','Estimular la circulación sanguínea','Todas las respuestas son correctas','Conservar la integridad de la piel','NA', ]
            ],  [  'descripcion' => 'Quien es el director ejecutivo de la unidad ejecutora 404 Red de Salud Huanuco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'Wilmer Espinoza Torres','Rolling Cruz Mlaprtida','Miguel Angel Paco Fernandez','Yuri Troncos Taquio','NA', ]
            ],  ]; 

            foreach ($preguntas as $menuData) {
                $pregunta = Pregunta::firstOrCreate(
                    [
                        'descripcion' => $menuData['descripcion'], 
                        'respuesta' => $menuData['respuesta'], 
                        'examen_id' => $menuData['examen_id'], 
                        'punto' => $menuData['punto'],
                    ]
                );
                foreach($menuData['alternativas'] as $alternativa){
                    $reg = Alternativa::firstOrCreate([
                        'pregunta_id'   => $pregunta->id,
                        'descripcion'   => $alternativa
                    ]);
                }
            }

$id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4229')->value('id'); 
        $preguntas = [ 
            [  'descripcion' => 'El agente etiológico del DENGUE es un:', 'respuesta' => 'Virus', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bacteria','Virus','Parásito','Protozoario','NA', ]
            ],  [  'descripcion' => 'Los hemoglobinómetros miden la concentración de hemoglobina en:', 'respuesta' => 'Sólo sangre venosa', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Sólo sangre arterial','Sangre capilar, sangre venosa y sangre arterial','b) y c)','Sólo sangre venosa','NA', ]
            ],  [  'descripcion' => 'La notificación epidemiológica diaria se realiza a través de:', 'respuesta' => 'Vigilancia epidemiológica activa', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'NA','Vigilancia epidemiológica activa','Notificación diaria de casos','Notificación de enfermedades infecciosas','VEA vigilancia epidemiológica pasiva', ]
            ],  [  'descripcion' => 'Se considera sintomático respiratorio a:', 'respuesta' => 'Persona con tos por más de 15 días', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Persona con tos por más de 1 mes','Persona con tos por más de 10 días','Persona con tos por más de 07 días','NA','Persona con tos por más de 15 días', ]
            ],  [  'descripcion' => 'Las vacunas en el nivel operativo deben conservarse a una T° de:', 'respuesta' => '2 a  8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '2 a  8°C','12 °C','0 a 10°C','0 a 5°C','NA', ]
            ],  [  'descripcion' => 'Que vacunas se Utilizaron en el Perú, para la vacunación contra la COVID-19', 'respuesta' => 'Astrazeneca, Pfizer, Sinopharm, Moderna', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Astrazeneca, Pfizer, Sputnik V, Jhonson&Jhonson','Astrazeneca, Moderna, Jhonson&Jhonson','Astrazeneca, Pfizer, Sinopharm, Moderna','NA','Astrazeneca. Pfizer, Sputnik V y Moderna', ]
            ],  [  'descripcion' => 'El efecto de la vacuna BCG se produce después de:', 'respuesta' => '4 semanas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '2 semanas','4 semanas','3 semanas','NA','7 días', ]
            ],  [  'descripcion' => 'Los hemoglobinómetros miden la concentración de hemoglobina en:', 'respuesta' => 'Sólo sangre venosa', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Sólo sangre arterial','Sangre capilar, sangre venosa y sangre arterial','Sólo sangre venosa','b) y c)','NA', ]
            ],  [  'descripcion' => 'Es objetivo de la higiene del paciente', 'respuesta' => 'Todas las respuestas son correctas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Contribuir al bienestar físico y psíquico del enfermo','Estimular la circulación sanguínea','Todas las respuestas son correctas','Conservar la integridad de la piel','NA', ]
            ],  [  'descripcion' => 'Quien es el director ejecutivo de la unidad ejecutora 404 Red de Salud Huanuco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'Wilmer Espinoza Torres','Rolling Cruz Mlaprtida','Miguel Angel Paco Fernandez','Yuri Troncos Taquio','NA', ]
            ],  ]; 


            foreach ($preguntas as $menuData) {
                $pregunta = Pregunta::firstOrCreate(
                    [
                        'descripcion' => $menuData['descripcion'], 
                        'respuesta' => $menuData['respuesta'], 
                        'examen_id' => $menuData['examen_id'], 
                        'punto' => $menuData['punto'],
                    ]
                );
                foreach($menuData['alternativas'] as $alternativa){
                    $reg = Alternativa::firstOrCreate([
                        'pregunta_id'   => $pregunta->id,
                        'descripcion'   => $alternativa
                    ]);
                }
            }


            $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4209')->value('id'); 
            $preguntas = [ 
                [  'descripcion' => '¿Cuál es la ley de Ética de la Función Pública?', 'respuesta' => 'LEY N° 27815.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' LEY N° 27815.',' LEY N° 27818.','LEY N° 27830',' LEY N° 27816',' LEY N° 27817', ]
                ],  [  'descripcion' => ' ¿Cuál es la ley del procedimiento Administrativo General?', 'respuesta' => ' LEY N° 27444', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LEY N° 27830','LEY N° 27453',' LEY N° 27444','LEY N° 27443','LEY N° 27450', ]
                ],  [  'descripcion' => '¿El término para la interposición de los recursos de reconsideración es de:', 'respuesta' => ' 15 días', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' 15 días','16 dias','20 dias','07 dias','19 dias', ]
                ],  [  'descripcion' => '¿Qué es la verosimilitud en el derecho?', 'respuesta' => 'provabilidad de que el resultado del proceso sea favorable al actor', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'provabilidad de que el resultado del proceso sea favorable al actor','conpetencia de juzgados de paz letrados laborales','iniciar un proceso contencioso administrativo','estan destinados a producir efectos juridicos','N.A', ]
                ],  [  'descripcion' => 'con que ley se derogo la participacion del ministerio publico', 'respuesta' => 'LEY N° 30914', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LEY N° 30914','LEY N° 30923','LEY N° 27916','LEY N° 30546','N.A', ]
                ],  [  'descripcion' => 'de que se trata la ley nº 29497', 'respuesta' => 'sobre la nueva ley procesal de trabajo', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'sobre la nueva ley procesal de trabajo','procesos contenciosos administrativos','trata de establecer la sertesa de existencia de derecho','desplasamiento simultaneo entre dos servidores','N.A', ]
                ],  [  'descripcion' => 'Principios de un servidor publico', 'respuesta' => 'respecto, providad,eficiencia', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'respecto, providad,eficiencia','desplasamiento simultaneo entre dos servidores','derecho, efectos juridicos','intereses,obligaciones','N.A', ]
                ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'Miguel Angel Paco Fernandez','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','N.A', ]
                ],  [  'descripcion' => 'Plazo para elevar recurso de apelacion a la instancia superior según  LEY N° 27444', 'respuesta' => 'En el dia', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'En el dia','10 dias','5 dias','2 dias','N.A', ]
                ],  [  'descripcion' => 'Hasta cuantos dias se puede otorgar licencias sin goce de haber por motivos particulares', 'respuesta' => '90 dias', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '90 dias','10 dias','12 dias','9 dias','N.A', ]
                ],  ]; 
    
                foreach ($preguntas as $menuData) {
                    $pregunta = Pregunta::firstOrCreate(
                        [
                            'descripcion' => $menuData['descripcion'], 
                            'respuesta' => $menuData['respuesta'], 
                            'examen_id' => $menuData['examen_id'], 
                            'punto' => $menuData['punto'],
                        ]
                    );
                    foreach($menuData['alternativas'] as $alternativa){
                        $reg = Alternativa::firstOrCreate([
                            'pregunta_id'   => $pregunta->id,
                            'descripcion'   => $alternativa
                        ]);
                    }
                }

                $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4213')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => 'Así como en la prevención de la transmisión del SARS-Cov-2 durante la pandemia que acabamos de cursar, cual es la primera medida de contingencia para evitar la contaminación por Mycobacterium tuberculosis en la realización de la baciloscopia:', 'respuesta' => 'Evitar la generación de aerosoles', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Cabina de flujo laminar','Mascarilla N100','Protector facial ','Mascarilla simple','Evitar la generación de aerosoles', ]
                    ],  [  'descripcion' => 'Responda, según el orden adecuado, el tratamiento de un derrame de líquidos biológicos en el laboratorio:', 'respuesta' => 'Cubrir con un papel absorbente, embeber el área de derrame con hipoclorito de sodio al 5%, dejar accionar y eliminar en el contenedor rojo.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Embeber el área de derrame con hipoclorito de sodio al 5%, cubrir con un papel absorbente, dejar accionar y eliminar en el contenedor rojo.','Cubrir con un papel absorbente, llamar al personal de limpieza.','Limpiar con gasa, cubrir con un papel absorbente y Embeber el área de derrame con hipoclorito de sodio al 5%','Informar inmediatamente al coordinador del laboratorio.','Cubrir con un papel absorbente, embeber el área de derrame con hipoclorito de sodio al 5%, dejar accionar y eliminar en el contenedor rojo.', ]
                    ],  [  'descripcion' => 'Respecto a la toma de muestra de sangre venosa y recolección de orina, marque lo correcto:', 'respuesta' => 'Todas las muestras de orina deben ser procesadas dentro de las 2 horas de recolectadas y la sangre citratada dentro de las 4 horas luego de la toma de muestra', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es imperativamente necesario que los pacientes estén en ayunas para cualquier tipo de análisis.','Se pueden recepcionar orinas del día anterior para el área de urocultivos.','Es posible aceptar tubos citratados con coágulos para pruebas de hemostasia.','Todas las muestras de orina deben ser procesadas dentro de las 2 horas de recolectadas y la sangre citratada dentro de las 4 horas luego de la toma de muestra','No existen criterios específicos para la toma de muestra de sangre venosa', ]
                    ],  [  'descripcion' => 'Cuáles son los marcadores para el diagnóstico de preeclampsia en un laboratorio de rutina, según las guías clínicas peruanas:', 'respuesta' => 'Proteinuria, trombocitopenia y elevación de transaminasas.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Leucocitosis y proteinuria','Inositol fosfoglican tipo P','Elevación del LDH y Dímero D','Proteinuria, trombocitopenia y elevación de transaminasas.','Elevación de transaminasas.', ]
                    ],  [  'descripcion' => 'En referencia a Leucocitosis y Linfocitosis en los recién nacidos:', 'respuesta' => 'Menor de 12 000 x mm3 no representa signo de alarma / es fisiológica en los neonatos.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Menor de 12 000 x mm3 no representa signo de alarma / es fisiológica en los neonatos.','Menor de 12 000 x mm3 representa sepsis neonatal / infección viral.','Debe descartarse mononucleosis infecciosa.','Debe sospechar de cáncer linfático y realizar un frotis de sangre periférica.','Todas las anteriores.', ]
                    ],  [  'descripcion' => 'Cuál de estos insumos no pertenecen a la coloración H-E (Hematoxilina – Eosina) en el laboratorio de anatomía patológica:', 'respuesta' => 'Acetona', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Hematoxilina de Harris','Alcohol absoluto','Acetona','Eosina ','Xilol', ]
                    ],  [  'descripcion' => 'Que significa el acrónimo BLEE:', 'respuesta' => 'Betalactamasas de espectro extendido', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bacilos lábiles en etanol','Bacilos libres escherichia coli','Betalactámicos extendidos','Betalactamasas de espectro extendido','Bacilos productores de enzimas.', ]
                    ],  [  'descripcion' => 'Respecto al control de calidad interno en el área de bioquímica. Según las Reglas de Westgard, es factible procesar todas las muestra con una alarma:', 'respuesta' => '1-2s', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '2-2s.','1-2s','1-3s','R-4x','Es necesario un control de tercera opinión.', ]
                    ],  [  'descripcion' => 'Que pruebas si pueden ser realizadas en casos de hemolisis:', 'respuesta' => 'Proteína C reactiva cuantitativa', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Glucosa','Electrolitos','Proteína C reactiva cuantitativa','LDH','Transaminasas', ]
                    ],  [  'descripcion' => 'QUIEN ES EL DIRECTOR EJECUTIVO ACTUAL DE LA U.E 404 RED DE SALUD HUANUCO', 'respuesta' => 'MIGUEL ANGEL PACO FERNANDEZ', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'MIGUEL ANGEL PACO FERNANDEZ','WILMER ESPINOZA TORRES ','ROLIN CRUZ MALPARTIDA ','YURI TRONCOS TAQUIO','N.A', ]
                    ],  ]; 
                    foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }

        
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4209')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
            $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4200')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
            
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
            $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4202')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
            $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4194')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4210')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4203')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4199')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4208')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4195')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4196')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4204')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4197')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4198')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 
            
                                foreach ($preguntas as $menuData) {
                        $pregunta = Pregunta::firstOrCreate(
                            [
                                'descripcion' => $menuData['descripcion'], 
                                'respuesta' => $menuData['respuesta'], 
                                'examen_id' => $menuData['examen_id'], 
                                'punto' => $menuData['punto'],
                            ]
                        );
                        foreach($menuData['alternativas'] as $alternativa){
                            $reg = Alternativa::firstOrCreate([
                                'pregunta_id'   => $pregunta->id,
                                'descripcion'   => $alternativa
                            ]);
                        }
                    }
                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4201')->value('id'); 
                    $preguntas = [ 
                        [  'descripcion' => 'Los documentos de gestión son', 'respuesta' => 'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Son los documentos técnico-normativos que formalizan la estructura orgánica o funcional de una entidad. ','Son documentos temporales de la institución','Han sido derogados',' Se aprueban por el Congreso','N.A', ]
                        ],  [  'descripcion' => 'Quienes conforman el Servicio Civil peruano', 'respuesta' => 'Todas las personas que trabajan al servicio del Estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Presidente de la República y los congresistas','Todas las personas que trabajan al servicio del Estado.','Los gerentes públicos',' Los profesionales de la salud','N.A', ]
                        ],  [  'descripcion' => ' Cuantos Gobiernos Regionales existen en el Perú', 'respuesta' => '25', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Ninguna de las anteriores ','26','27','30','25', ]
                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'N.A','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','Miguel Angel Paco Fernandez', ]
                        ],  [  'descripcion' => 'Quien controla los gobiernos regionales', 'respuesta' => 'El Consejo Regional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' El Procurador Público Regional','La Contraloría General der la república','El Consejo Regional','La Municipalidad Provincial','N.A', ]
                        ],  [  'descripcion' => 'Principios de la Función Pública (Ley 27815)', 'respuesta' => 'Respeto, probidad, eficiencia, idoneidad, lealtad', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Respeto, neutralidad, responsabilidad, eficiencia','Lealtad y obediencia; uso adecuado de los bienes del Estado','Respeto, probidad, eficiencia, idoneidad, lealtad','Transparencia, discreción, responsabilidad, veracidad','N.A', ]
                        ],  [  'descripcion' => 'A qué se denomina PLAME', 'respuesta' => ' A la Planilla Mensual de Pagos', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' A la Planilla Mensual de Pagos',' Al Plan Mensual Estratégico','Al  Plan de Medios Electrónicos','Planilla de movilidad loca ',' N.A', ]
                        ],  [  'descripcion' => 'Principio de legalidad en la administración pública, significa que:', 'respuesta' => 'Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','Los gobiernos regionales y los directores regionales deben actuar dentro de las facultades que le estén atribuidas',' Las autoridades judiciales deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas.','Todas las anteriores','Las autoridades administrativas deben actuar con respeto a la Constitución, la ley y al derecho, dentro de las facultades que le estén atribuidas', ]
                        ],  [  'descripcion' => ' Qué miden los indicadores de desempeño', 'respuesta' => 'Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  ' Proporcionan información cuantitativa sobre el desenvolvimiento y logros de una institución',' El impacto de la ejecución del gasto durante un semestre','El avance de la ejecución del gasto durante un ejercicio fiscal','Mide la calidad de los procesos que se están desarrollando','N.A', ]
                        ],  [  'descripcion' => 'Que es el PIA', 'respuesta' => 'presupuesto inicial de apertura', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Presupuesto inicial de ejecucion','presupuesto inicial de apertura','presupuesto institucional de apertura','presupuesto inicial modificado','N.A', ]
                        ],  ]; 

                        foreach ($preguntas as $menuData) {
                            $pregunta = Pregunta::firstOrCreate(
                                [
                                    'descripcion' => $menuData['descripcion'], 
                                    'respuesta' => $menuData['respuesta'], 
                                    'examen_id' => $menuData['examen_id'], 
                                    'punto' => $menuData['punto'],
                                ]
                            );
                            foreach($menuData['alternativas'] as $alternativa){
                                $reg = Alternativa::firstOrCreate([
                                    'pregunta_id'   => $pregunta->id,
                                    'descripcion'   => $alternativa
                                ]);
                            }
                        }


                        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3961')->value('id'); 
                        $preguntas = [ 
                            [  'descripcion' => 'que es una berma', 'respuesta' => 'es una linea o franja de una calzada ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'es una linea o franja de una calzada','espacio que queda entre dos lineas ','camino angosto fortmado comunmente por el transito de peatones y ganados ','via de una poblacion que generalmente queda limitado a ambos lados por bloques o filas de edificios ','NA', ]
                            ],  [  'descripcion' => 'cuantos sonidos tiene la sirena de ambulancia ', 'respuesta' => 'largo, corto, intermitente', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'largo, corto, intermitente','corto, intermedio, largo','reducido, extenso, medio ','medio, escaso, largo ','NA', ]
                            ],  [  'descripcion' => 'el color ambar o amarillo del semafoto significa que:', 'respuesta' => 'los vehiculos deben deterse  antes de ingresar a la interseccion si su velocidad y ubicación le permite, de los contrario deben cruzar  y despejar la iterseccion ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'los vehiculos deben deterse  antes de ingresar a la interseccion si su velocidad y ubicación le permite, de los contrario deben cruzar  y despejar la iterseccion','los vehiculos deben avanzar ','los vehiculos deben detenerse ','los vehiculos deben acelerar la marcha ','NA', ]
                            ],  [  'descripcion' => 'en caso de accidentes, el soat cubre daños que sufren:', 'respuesta' => 'los ocupantes y terceros no ocupantes del vehiculo ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'los ocupantes y terceros no ocupantes del vehiculo ','solo los ocupantes del vehiculo','solo terceros afectados ','solo conductores del vehiculo ','NA', ]
                            ],  [  'descripcion' => 'el objetivo de los primeros auxilios es: ', 'respuesta' => 'conservar la vida ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'conservar la vida','preservar el bienestar fisico ','manejo de enfermedades','tratamiento de lesiones ','NA', ]
                            ],  [  'descripcion' => 'no se debe conducir un vehiculo ', 'respuesta' => 'todas son correctas ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'todas son correctas ','si no cuenta con el soat ','en retroceso, salvo las excepciones que establece la norma ','si no se cuenta la licencia para el tipo de vehiculo que se quiere conducir ','NA', ]
                            ],  [  'descripcion' => 'que es una acera ', 'respuesta' => 'es una parte de la via destinado para uso peatonal ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'es una parte de la via destinado para uso peatonal ','es una calzada ','espacio urbano  lineal ','todas son correctas ','NA', ]
                            ],  [  'descripcion' => 'se entiende por carril:', 'respuesta' => 'parte de la calzada destinada al transito de una fila de vehiculos ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'parte de la calzada destinada al transito de una fila de vehiculos ','parte de la via destinada a la circulacion de peatones ','via rural destinada a la circulacion de peatones y animales ','todas son correctas ','NA', ]
                            ],  [  'descripcion' => 'que es primeros auxilios ', 'respuesta' => 'todas son correctas ', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'todas son correctas ','es la atencion inmediata que se brinda  a la persona accidentada hasta que llege la atencion profesional ','son aquellas medidas  inmediatas que se toaman a una persona lesionada, inconsciente, o subitamente enferma ','conjunto de actuaciones y tecnicas  que permiten la atencion inmediata de una persona accidentada hasta que llegue la asistencia medica ','NA', ]
                            ],  [  'descripcion' => 'quien es el Director Ejecutivo actual de la Red de Salud Huanuco ', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'Miguel Angel Paco Fernandez','Wilmer Espinoza Torres ','Rollin Cruz Malpartida ','Yuri  Troncos Taquio','NA', ]
                            ],  ]; 

                            foreach ($preguntas as $menuData) {
                                $pregunta = Pregunta::firstOrCreate(
                                    [
                                        'descripcion' => $menuData['descripcion'], 
                                        'respuesta' => $menuData['respuesta'], 
                                        'examen_id' => $menuData['examen_id'], 
                                        'punto' => $menuData['punto'],
                                    ]
                                );
                                foreach($menuData['alternativas'] as $alternativa){
                                    $reg = Alternativa::firstOrCreate([
                                        'pregunta_id'   => $pregunta->id,
                                        'descripcion'   => $alternativa
                                    ]);
                                }
                            }

    }

}
