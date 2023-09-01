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
            $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 2991')->value('id'); 
            $preguntas = [ 
                [  'descripcion' => 'Cuantas direciones tine la red de salud huanuco', 'respuesta' => 'todas las anteriores', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'todas las anteriores','Direcion Ejecutiva','Direcion administrativo','Direcion de Desarrollo institucional','Direcion de Planeamiento', ]
                ],  [  'descripcion' => 'Que es el sgd', 'respuesta' => 'sistema de gestion digital', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'sistema de gestion digital','sistema integrado de gestion administrativa','sistema de administracion financiera','sistema de tramite','N.A', ]
                ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'Miguel Angel Paco Fernandez','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','N.A', ]
                ],  [  'descripcion' => 'para que sirve el cuadro de nesecidades ', 'respuesta' => 'para el cumplimiento de cada actividad establecido en el poi', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'para el cumplimiento de cada actividad establecido en el poi','es un consolidado de bienes y servicios','es un consolidados que realizan los programas presupuestales','permite la gestion para la ejecucion y control','N.A', ]
                ],  [  'descripcion' => 'cual es el aplicativo informativo que utiliza la entidad para registrar informacion de planes y poi', 'respuesta' => 'ceplan', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ceplan','siaf','siga','sgd','N.A', ]
                ],  [  'descripcion' => 'cuales son los instrumentos de gestion a nivel de sector salud', 'respuesta' => 'mop, rof,cap,tusne', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'mop, rof,cap,tusne','ofico, carta, memorandums, informe','siga,siaf,sgd,his minsa','mof,siaf,carta, his minsa','N.A', ]
                ],  [  'descripcion' => 'que es el siga y para que sirve', 'respuesta' => 'es una herramienta del mef, que permite la gestion para la programcion, ejecucion y control de procesos administrativos en una entidad del estado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'es una herramienta del mef, que permite la gestion para la programcion, ejecucion y control de procesos administrativos en una entidad del estado','es un documento de gestion publica','es un sistema de tramites documentarios','Es un istrumento de control','N.A', ]
                ],  [  'descripcion' => 'cuales son las fases del siaf', 'respuesta' => 'compromiso, devengado, girado y pagado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'compromiso, devengado, girado y pagado','evaluacion, programacion, ejecucion,pagado','pagado, devengado, ejecutado,evaluacion','compromiso, tramite, girado y pagado','N.A', ]
                ],  [  'descripcion' => 'el establecimiento carlos showing ferrari  esta considerado como:', 'respuesta' => 'hopsital materno', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'unidad ejecutora','hospital materno ','microred','centro de salud','N.A', ]
                ],  [  'descripcion' => 'dentro del organigrama estructural o funcional cuales son los organos de asesoria', 'respuesta' => 'oficina de asesoria legal', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'oficina de asesoria legal','oficina de planeamiento estartegico','oficina de proceso administrativo diciplinario','oficina de asesoria procesal','N.A', ]
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
                $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4211')->value('id'); 
                $preguntas = [ 
                        [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4219')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 2997')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3005')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3055')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 2994')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3027')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4186')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3934')->value('id'); 
                $preguntas = [
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3987')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3990')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3991')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3995')->value('id'); 
                $preguntas = [ 
                    [  'descripcion' => '¿Cuándo se considera ruptura de cadena de frio?', 'respuesta' => 'Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Cuando el Valor de la temperatura ha sobrepasado - 2 grados centígrados','Cuando el valor de la temperatura osicla entre los 0 grados y + 8 °C','Cuando la temperatura se encuentra por debajo de los 0°C y encima de +8°C','Cuando el valor de la temperatura se haya entre los 2 y 8 grados centígrados','NA', ]
                    ],  [  'descripcion' => 'La Promoción de la Salud consiste en proporcionar: ', 'respuesta' => 'Medios para mejorar la salud y ejercer un mayor control sobre la misma ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Bienestar físico, mental y social identificando aspiraciones y necesidades','Medios necesarios para evitar el progreso de las enfermedades','NA','Medios para mejorar la salud y ejercer un mayor control sobre la misma ','Bienestar físico, mental y social en el proceso de recuperación de la enfermedad', ]
                    ],  [  'descripcion' => '¿Por qué se recomienda no aplicar inmunobiológicos intramusculares en la región glútea?', 'respuesta' => 'Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Por la absorción lenta de inmunobiologicos','Porque la región glútea tiene abundante tejido adiposo (grasa subcutánea); que pueden interferir con la respuesta inmunológica; además existe la posibilidad de daño al nervio ciático.','Porque no se debe administrar concentraciones menores a 5 ml','Porque es dolorosa, produce reacciones más serias que dificulta la movilidad de los niños','NA', ]
                    ],  [  'descripcion' => 'Una persona que trabaja durante la pandemia por COVID-19 en un local cerrado y con poca ventilación junto a más personas, nos solicita asesoramiento sobre una mascarilla que ha adquirido tras consejo médico. ¿Qué información le daremos acerca de esta?', 'respuesta' => 'Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Puede utilizarla con seguridad durante un periodo no superior a 8 horas, realizando un descanso al menos cada 4 horas','No debería utilizarla puesto que no cumple la normativa vigente','NA','Puede utilizarla con seguridad, ya que se ha demostrado que esta mascarilla es la que mayor protección proporciona en espacios cerrados y con poca ventilación','No debe utilizarse debido a que es un dispositivo de protección destinado exclusivamente a personal sanitario en contacto estrecho con pacientes contagiados por COVID-19', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','B y C','NA', ]
                    ],  [  'descripcion' => '¿Cuáles son los métodos de profilaxis del recién nacido en la sala de AIRN?', 'respuesta' => 'Ocular, umbilical, vitamina K', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Baño, aspiración, vitamina K','Baño, aspiración, umbilical','Aspiración, umbilical, ocular','NA','Ocular, umbilical, vitamina K', ]
                    ],  [  'descripcion' => 'En un programa de salud se evalúa', 'respuesta' => 'Estructura, proceso y resultado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'El alcance del resultado previsto ','Como se desarrolló el proceso','La estructura del programa','Estructura, proceso y resultado','NA', ]
                    ],  [  'descripcion' => 'El Kit del buen crecimiento infantil: (Puede marcar más de una respuesta)', 'respuesta' => 'B y C', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Es un material para ser utilizado solamente por el personal de salud durante las visitas domiciliarias','Es un material educativo que guía al personal de salud y facilita la consejería durante la atención a los niños(a)','Contribuye a mejorar la nutrición de los niños en su primer año de vida, promoviendo cambio de comportamientos','NA','B y C', ]
                    ],  [  'descripcion' => '¿Son funciones esenciales de la Salud Publica lo siguiente?', 'respuesta' => 'Promoción de la Salud, participación social y empoderamiento', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'NA','Promoción de la Salud, participación social y empoderamiento','Desarrollo de políticas, planes y capacidad de gestión','Monitoreo, evaluación y análisis de la situación de salud','La recuperación y rehabilitación de la salud', ]
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
                        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4207')->value('id'); 
                        $preguntas = [ 
                            [  'descripcion' => 'Cual es el Reglamento de la Ley de Gestión Integral de Residuos Sólidos Hospitalarios?', 'respuesta' => 'D.S.014-2017-MINAM', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'R.M 1295/2018-MINSA','D.L. 1551','D.S. 02-2022-MINAM','D.S.014-2017-MINAM','NA', ]
                            ],  [  'descripcion' => 'El Ministerio de Salud a través de la Dirección General de Salud Ambiental e Inocuidad Alimentaria (DIGESA) es la autoridad competente para:', 'respuesta' => 'solo a y b son correctas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Normar el manejo de los residuos sólidos de establecimientos de salud y servicios médicos de apoyo, así como de los generadores en campañas sanitarias',' Controlar los riesgos sanitarios generados por el manejo inadecuado de los residuos sólidos de establecimientos de salud y servicios médicos de apoyo','Determinar las medidas de seguridad, sancionado, clausurando y multando a los establecimientos de salud que incumplan con el manejo de residuos sólidos hospitalarios','solo a y b son correctas','Supervisar y fiscalizar y multar a todos los establecimientos públicos y privados en materia de Residuos Sólidos', ]
                            ],  [  'descripcion' => 'Cual es la Normativa que refiere que la DIGESA es la autoridad competente para Normar, controlar, Determinar la aplicación de medidas de seguridad, supervisar y fiscalizar la gestión de residuos sólidos de establecimientos de salud generados en campañas sanitarias', 'respuesta' => 'DL. Nro. 1501', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'DL. Nro. 1278','RM. Nro. 1218','D.S. Nro. 014','DL. Nro. 1501','NA', ]
                            ],  [  'descripcion' => 'Cuáles son las autoridades competentes para la supervisión, fiscalización y sanción en materia de residuos sólidos', 'respuesta' => 'Las Autoridades Sectoriales y los Gobiernos Regionales, en su calidad de EFA nacional y regional, respectivamente.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Las Autoridades Ministeriales, Sectoriales, Gobiernos Regionales y Gobiernos Locales. En su calidad de EFA Nacional y regional','Las Autoridades Sectoriales y los Gobiernos Regionales, en su calidad de EFA nacional y regional, respectivamente.','Las Autoridades Locales, Sectoriales, Gobiernos Regionales y MINSA, en su calidad de EFA Nacional y regional','solo a y c son las respuestas correctas','NA', ]
                            ],  [  'descripcion' => 'Ley 29783 ( RM- 031-2023-MINSA)- El Servicio de Seguridad y Salud en el Trabajo: Sobre el profesional de Salud del Servicios de Seguridad y Salud en el Trabajo', 'respuesta' => 'Tipo 5. De 101 a 500 trabajadores Un Médico Ocupacional', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Tipo 5. De 101 a 500 trabajadores Un Médico Ocupacional','Tipo 1. De 5 a 20 trabajadores debe ser un Médico','Tipo 3. De 21 a 50 trabajadores debe ser por un Licenciado en Enfermería','Tipo 2. Hasta 20 trabajadores.  Técnico en Enfermería','Tipo 4. De 51 a 100 trabajadores. Un Médico Ocupacional', ]
                            ],  [  'descripcion' => 'Cual es la Ley de Seguridad y Salud en el trabajo', 'respuesta' => 'Ley Nro. 29783', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Ley Nro. 26842','Ley Nro. 27444','Ley Nro. 27314','Ley Nro. 29783','Ley 25298', ]
                            ],  [  'descripcion' => 'Sobre los métodos de Disposición final según la NTS – 144-MINSA-2018', 'respuesta' => 'Incineración, Autoclave, Productos Químicos, Empresa Operadora', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Autoclave, Incineración, productos químicos','Incineración, Empresa Operadora, Disposición en Relleno Sanitario','Incineración, Productos Químicos, Empresa Operadora, Relleno Sanitario','Incineración, Autoclave, Productos Químicos, Empresa Operadora','Autoclave, Incineración, Productos Químicos y Relleno Sanitario', ]
                            ],  [  'descripcion' => 'Cual es la capacidad como característica en las especificaciones de los recipientes para residuos punzocortantes biocontaminados', 'respuesta' => 'capacidad de rango entre 0.5 y 20 litros', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'capacidad de Rango entre 0.8 a 20 litros','capacidad de rango entre 0.5 y 20 litros','capacidad de rango entre 1 y 20 litros','capacidad de rango entre 1.5 y 15 litros','capacidad de rango entre 5 y 25 litros', ]
                            ],  [  'descripcion' => 'Cual es la RM que aprueba el Plan Nacional de Vacunación contra el COVID19- Actualizado según RM Nro. 488-2021/MINSA', 'respuesta' => 'RM Nro. 848-2020-MINSA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'RM Nro. 031-2023-MINSA','RM Nro. 039-2023-MINSA','RM Nro. 1275-2018-MINSA','RM Nro. 848-2020-MINSA','No existe RM solo directiva administrativa', ]
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
                            $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4206')->value('id'); 
                            $preguntas = [ 
                                [  'descripcion' => '¿QUE ES UN EQUIPO BIOMEDICO?', 'respuesta' => 'ES EL EQUIPO QUE ESTA DIRECTAMENTE ACTUANDO CON EL PACIENTE COMO: BOMBA DE INFUSION, MAQUINA DE ANESTESIA, VENTILADOR VOLUMETRICO, ETC', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'ES EL EQUIPO QUE ESTA DIRECTAMENTE ACTUANDO CON EL PACIENTE COMO: BOMBA DE INFUSION, MAQUINA DE ANESTESIA, VENTILADOR VOLUMETRICO, ETC','ES UN INSTRUMENTAL DE LOS MEDICOS: ESTETOSCOPIO','ES UN INSTRUMENTAL DE LOS TECNICO EN ENFERMERÍA: TERMOMETRO','NINGUNA DE LAS ANTERIORES','SON EQUIPOS QUE AYUDAN A DIAGNOSTICAR', ]
                                ],  [  'descripcion' => '¿QUE ES UN EQUIPO ELECTRICO?', 'respuesta' => 'ES EL EQUIPO QUE PRINCIPALMENTE  ACTUA CON LA ELECTRICIDAD COMO: TABLEROS ELECTRICOS, LUMINARIAS, TOMACORRIENTES, UPS, ESTABILIZADORES, INTERRUPTORES, INTERRUPTORES TERMOMAGNETICOS, INTERRUPTORES DIFERENCIALES, LAMPARA CUELLO DE GANZO, ETC', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ES EL EQUIPO QUE PRINCIPALMENTE  ACTUA CON LA ELECTRICIDAD COMO: TABLEROS ELECTRICOS, LUMINARIAS, TOMACORRIENTES, UPS, ESTABILIZADORES, INTERRUPTORES, INTERRUPTORES TERMOMAGNETICOS, INTERRUPTORES DIFERENCIALES, LAMPARA CUELLO DE GANZO, ETC','ES EL EQUIPO QUE ESTA DIRECTAMENTE ACTUANDO CON EL PACIENTE COMO: BOMBA DE INFUSION, MAQUINA DE ANESTESIA, VENTILADOR VOLUMETRICO, ETC','NINGUNA DE LAS ANTERIORES','SON TRES MANTENIMIENTOS: MANTENIMIENTO PREVENTIVO, MANTENIMIENTO REACTIVO O CORRECTIVO Y MANTENIMIENTO PREDICTIVO','SON EQUIPOS QUE SE USAN EN EL SERVICIO DE DIAGNOSTICO POR IMÁGENES, PARA ADQUIRIR IMÁGENES DE PACIENTES DE TODA LAS PARTES BLANDAS MEDIANTE ULTRASONIDO', ]
                                ],  [  'descripcion' => '¿QUE ES UN EQUIPO ELECTROMECANICO?', 'respuesta' => 'SON EQUIPOS QUE COMBINAN LA PARTE ELECTRICA Y MECANICA Y ESTOS PRINCIPALMENTE GENERAN: FUERZA MECANICA, CALOR, FRIO, AIRE, OXIGENO, PRESION Y ESTOS PUEDE SER COMO:  INYECTORES DE AIRE, EXTRACTORES DE AIRE, AUTOCLAVES A VAPOR, EQUIPOS DE AIRE ACONDICIONADO, REFRIGERADORAS,  GENERADORES DE OXIGENO, BOMBAS DE AGUAS, COMPRESORES DE AIRE, ESTERILIZADORES A CALOR SECO, TALADRO NEUMATICO, CORTADOR DE YESO, LAVADORA DE CHATAS, ASCENSORES, ETC', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'SON EQUIPOS QUE COMBINAN LA PARTE ELECTRICA Y MECANICA Y ESTOS PRINCIPALMENTE GENERAN: FUERZA MECANICA, CALOR, FRIO, AIRE, OXIGENO, PRESION Y ESTOS PUEDE SER COMO:  INYECTORES DE AIRE, EXTRACTORES DE AIRE, AUTOCLAVES A VAPOR, EQUIPOS DE AIRE ACONDICIONADO, REFRIGERADORAS,  GENERADORES DE OXIGENO, BOMBAS DE AGUAS, COMPRESORES DE AIRE, ESTERILIZADORES A CALOR SECO, TALADRO NEUMATICO, CORTADOR DE YESO, LAVADORA DE CHATAS, ASCENSORES, ETC','SON EQUIPOS QUE SE USAN EN EL SERVICIO DE DIAGNOSTICO POR IMÁGENES, PARA ADQUIRIR IMÁGENES DE PACIENTES DE TODA LAS PARTES BLANDAS MEDIANTE ULTRASONIDO','ES EL EQUIPO QUE ESTA DIRECTAMENTE ACTUANDO CON EL PACIENTE COMO: BOMBA DE INFUSION, MAQUINA DE ANESTESIA, VENTILADOR VOLUMETRICO, ETC','ES EL EQUIPO QUE PRINCIPALMENTE  ACTUA CON LA ELECTRICIDAD COMO: TABLEROS ELECTRICOS, LUMINARIAS, TOMACORRIENTES, UPS, ESTABILIZADORES, INTERRUPTORES, INTERRUPTORES TERMOMAGNETICOS, INTERRUPTORES DIFERENCIALES, LAMPARA CUELLO DE GANZO, ETC','NINGUNA DE LAS ANTERIORES', ]
                                ],  [  'descripcion' => '¿QUE ES UN PLAN DE MANTENIMIENTO?', 'respuesta' => 'EL PLAN DE MANTENIMIENTO  SE DEFINE COMO EL PROCESO QUE INTEGRA UN CONJUNTO DE PROCEDIMIENTOS TÉCNICOS Y ADMINISTRATIVOS DISEÑADOS PARA PREVENIR: AVERÍAS, MANTENER, MEJORAR Y RESTABLECER LA INFRAESTRUCTURA Y EL EQUIPAMIENTO MEDICO EN UN ESTADO NORMAL DE FUNCIONAMIENTO.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL PLAN DE MANTENIMIENTO  SE DEFINE COMO EL PROCESO QUE INTEGRA UN CONJUNTO DE PROCEDIMIENTOS TÉCNICOS Y ADMINISTRATIVOS DISEÑADOS PARA PREVENIR: AVERÍAS, MANTENER, MEJORAR Y RESTABLECER LA INFRAESTRUCTURA Y EL EQUIPAMIENTO MEDICO EN UN ESTADO NORMAL DE FUNCIONAMIENTO.','ES EL EQUIPO QUE PRINCIPALMENTE  ACTUA CON LA ELECTRICIDAD COMO: TABLEROS ELECTRICOS, LUMINARIAS, TOMACORRIENTES, UPS, ESTABILIZADORES, INTERRUPTORES, INTERRUPTORES TERMOMAGNETICOS, INTERRUPTORES DIFERENCIALES, LAMPARA CUELLO DE GANZO, ETC','ES EL EQUIPO QUE ESTA DIRECTAMENTE ACTUANDO CON EL PACIENTE COMO: BOMBA DE INFUSION, MAQUINA DE ANESTESIA, VENTILADOR VOLUMETRICO, ETC','NINGUNA DE LAS ANTERIORES','SON TRES MANTENIMIENTOS: MANTENIMIENTO PREVENTIVO, MANTENIMIENTO REACTIVO O CORRECTIVO Y MANTENIMIENTO PREDICTIVO', ]
                                ],  [  'descripcion' => '¿QUE ES UN PROGRAMA DE MANTENIMIENTO?', 'respuesta' => 'EL PROGRAMA DE MANTENIMIENTO TIENE COMO FINALIDAD EJECUTAR ACTIVIDADES ESTABLECIDAS PARA REALIZARLE EL MANTENIMIENTO PREVENTIVO Y CORRECTIVO A TODO EL EQUIPAMIENTO MEDICO, CON EL FIN DE EVITAR PARALIZACIONES Y/O AVERIAS DE DICHOS EQUIPOS.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'EL PROGRAMA DE MANTENIMIENTO TIENE COMO FINALIDAD EJECUTAR ACTIVIDADES ESTABLECIDAS PARA REALIZARLE EL MANTENIMIENTO PREVENTIVO Y CORRECTIVO A TODO EL EQUIPAMIENTO MEDICO, CON EL FIN DE EVITAR PARALIZACIONES Y/O AVERIAS DE DICHOS EQUIPOS.','EL PLAN DE MANTENIMIENTO  SE DEFINE COMO EL PROCESO QUE INTEGRA UN CONJUNTO DE PROCEDIMIENTOS TÉCNICOS Y ADMINISTRATIVOS DISEÑADOS PARA PREVENIR: AVERÍAS, MANTENER, MEJORAR Y RESTABLECER LA INFRAESTRUCTURA Y EL EQUIPAMIENTO MEDICO EN UN ESTADO NORMAL DE FUNCIONAMIENTO.','ES EL EQUIPO QUE PRINCIPALMENTE  ACTUA CON LA ELECTRICIDAD COMO: TABLEROS ELECTRICOS, LUMINARIAS, TOMACORRIENTES, UPS, ESTABILIZADORES, INTERRUPTORES, INTERRUPTORES TERMOMAGNETICOS, INTERRUPTORES DIFERENCIALES, LAMPARA CUELLO DE GANZO, ETC','ES EL EQUIPO QUE ESTA DIRECTAMENTE ACTUANDO CON EL PACIENTE COMO: BOMBA DE INFUSION, MAQUINA DE ANESTESIA, VENTILADOR VOLUMETRICO, ETC','NINGUNA DE LAS ANTERIORES', ]
                                ],  [  'descripcion' => '¿CUANTOS TIPOS DE MANTENIMIENTO PRINCIPALES EXISTE?', 'respuesta' => 'SON TRES MANTENIMIENTOS: MANTENIMIENTO PREVENTIVO, MANTENIMIENTO REACTIVO O CORRECTIVO Y MANTENIMIENTO PREDICTIVO', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'SON TRES MANTENIMIENTOS: MANTENIMIENTO PREVENTIVO, MANTENIMIENTO REACTIVO O CORRECTIVO Y MANTENIMIENTO PREDICTIVO','SON EQUIPOS QUE SE USAN EN EL SERVICIO DE DIAGNOSTICO POR IMÁGENES, PARA ADQUIRIR IMÁGENES DE PACIENTES DE TODA LAS PARTES BLANDAS MEDIANTE ULTRASONIDO','ES EL EQUIPO QUE ESTA DIRECTAMENTE ACTUANDO CON EL PACIENTE COMO: BOMBA DE INFUSION, MAQUINA DE ANESTESIA, VENTILADOR VOLUMETRICO, ETC','ES EL EQUIPO QUE PRINCIPALMENTE  ACTUA CON LA ELECTRICIDAD COMO: TABLEROS ELECTRICOS, LUMINARIAS, TOMACORRIENTES, UPS, ESTABILIZADORES, INTERRUPTORES, INTERRUPTORES TERMOMAGNETICOS, INTERRUPTORES DIFERENCIALES, LAMPARA CUELLO DE GANZO, ETC','NINGUNA DE LAS ANTERIORES', ]
                                ],  [  'descripcion' => '¿A QUE DENOMINAMOS FRECUENCIA DEL EQUIPO MEDICO EN UN PROGRAMA DE MANTENIMIENTO?', 'respuesta' => 'SE DENOMINA AL TIEMPO DE REPETICION DE MANTENIMIENTO PREVENTIVO: MENSUAL, TRIMESTRAL, SEMESTRAL, ANUAL, ETC.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'SE DENOMINA AL TIEMPO DE REPETICION DE MANTENIMIENTO PREVENTIVO: MENSUAL, TRIMESTRAL, SEMESTRAL, ANUAL, ETC.','EL PLAN DE MANTENIMIENTO  SE DEFINE COMO EL PROCESO QUE INTEGRA UN CONJUNTO DE PROCEDIMIENTOS TÉCNICOS Y ADMINISTRATIVOS DISEÑADOS PARA PREVENIR: AVERÍAS, MANTENER, MEJORAR Y RESTABLECER LA INFRAESTRUCTURA Y EL EQUIPAMIENTO MEDICO EN UN ESTADO NORMAL DE FUNCIONAMIENTO.','ES EL EQUIPO QUE PRINCIPALMENTE  ACTUA CON LA ELECTRICIDAD COMO: TABLEROS ELECTRICOS, LUMINARIAS, TOMACORRIENTES, UPS, ESTABILIZADORES, INTERRUPTORES, INTERRUPTORES TERMOMAGNETICOS, INTERRUPTORES DIFERENCIALES, LAMPARA CUELLO DE GANZO, ETC','ES EL EQUIPO QUE ESTA DIRECTAMENTE ACTUANDO CON EL PACIENTE COMO: BOMBA DE INFUSION, MAQUINA DE ANESTESIA, VENTILADOR VOLUMETRICO, ETC','NINGUNA DE LAS ANTERIORES', ]
                                ],  [  'descripcion' => '¿QUE ES UN EQUIPO DE RAYOS X?', 'respuesta' => 'SON EQUIPOS QUE SE USAN EN EL SERVICIO DE DIAGNOSTICO POR IMÁGENES, PARA ADQUIRIR IMÁGENES DE LAS PARTES AFECTADAS DE LOS PACIENTES MEDIANTE RAYOS IONIZANTES -RAYOS X', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'SON EQUIPOS QUE SE USAN EN EL SERVICIO DE DIAGNOSTICO POR IMÁGENES, PARA ADQUIRIR IMÁGENES DE LAS PARTES AFECTADAS DE LOS PACIENTES MEDIANTE RAYOS IONIZANTES -RAYOS X','NINGUNA DE LAS ANTERIORES','TODAS LAS ANTERIORES','ES EL EQUIPO QUE ESTA DIRECTAMENTE ACTUANDO CON EL PACIENTE COMO: BOMBA DE INFUSION, MAQUINA DE ANESTESIA, VENTILADOR VOLUMETRICO, ETC','EQUIPOS DE LOS PROFESIONALES DE LA SALUD PARA MONITOREAR SU PULMON', ]
                                ],  [  'descripcion' => '¿QUE ES UNA OTM?', 'respuesta' => '(ORDEN DE TRABAJO DE MANTENIMIENTO): ES UN DOCUMENTO/FORMATO DE TRABAJO DONDE SE REGISTRA LAS ACTIVIDADES EJECUTADAS DE UN EQUIPO, EN LA QUE SE DESCRIBE DESDE EL ESTADO INICIAL DEL EQUIPO, CAMBIO DE REPUESTOS, CAMBIO DE ACCESORIOS, LISTA DE INSUMOS USADOS, HORAS DE TRABAJO, HASTA ESTADO FINAL DE DICHO EQUIPO.', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '(ORDEN DE TRABAJO DE MANTENIMIENTO): ES UN DOCUMENTO/FORMATO DE TRABAJO DONDE SE REGISTRA LAS ACTIVIDADES EJECUTADAS DE UN EQUIPO, EN LA QUE SE DESCRIBE DESDE EL ESTADO INICIAL DEL EQUIPO, CAMBIO DE REPUESTOS, CAMBIO DE ACCESORIOS, LISTA DE INSUMOS USADOS, HORAS DE TRABAJO, HASTA ESTADO FINAL DE DICHO EQUIPO.','EQUIPOS DE LOS PROFESIONALES DE LA SALUD PARA MONITOREAR SU PULMON','ES UN INSTRUMENTAL DE LOS TECNICO EN ENFERMERÍA: TERMOMETRO','NINGUNA DE LAS ANTERIORES','TODAS LAS ANTERIORES', ]
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
                                $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4205')->value('id'); 
                                $preguntas = [ 
                                    [  'descripcion' => '¿Los reportes de estrategias sanitarias del Sistema His Minsa desde que año se encuentran disponibles?', 'respuesta' => '2021', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '2019','2020','2022','2021','2023', ]
                                    ],  [  'descripcion' => '¿Cuándo se requiere una información a nivel de Centro Poblado de qué variable del archivo plano hacemos uso?', 'respuesta' => 'Id_Centro_Poblado', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Id_CP','Id_Cen_Pob','Cod_Centro_Pob','Id_Centro_Poblado','Cod_Centro_Poblado', ]
                                    ],  [  'descripcion' => ' ¿Cuántos reportes de estrategias sanitarias se encuentran implementados en el His Minsa?', 'respuesta' => '24', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '23','25','26','27','24', ]
                                    ],  [  'descripcion' => ' ¿Quién es el encargado de reestablecer el acceso del usuario de REFCON cuando se olvida su contraseña?', 'respuesta' => 'El Propio Usuario', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Administrador de Red','El Propio Usuario','Usuario Microred','Administrador de Diresa','Minsa', ]
                                    ],  [  'descripcion' => 'Los Establecimientos implementados con el Sihce migran su información al sistema His Minsa, ¿Con que nombres de Lote se identifica dicha información?', 'respuesta' => 'CED y CAR', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'COM Y CED','MED Y CAR','MAT Y COM','NA','CED y CAR', ]
                                    ],  [  'descripcion' => '¿Qué Gestor de Base de Datos utiliza el Ministerio de Salud para explotación de Datos del His Minsa?', 'respuesta' => 'Microsoft SLQ Server', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Oracle','Maria DB','Microsoft SLQ Server','My Sql','Postgre Sql', ]
                                    ],  [  'descripcion' => '¿Qué Complemento de Microsoft Excel te permite trabajar con gran cantidad de registros?', 'respuesta' => 'Power Pivot', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'Power Pivot','Power Map','Power BI','Power View','Power Query', ]
                                    ],  [  'descripcion' => '¿Qué tipo de seguridad utiliza el Sistema His Minsa?', 'respuesta' => 'Autenticación en Dos Factores', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Integridad','Confiabilidad','Disponibilidad','Factores Humanos','Autenticación en Dos Factores', ]
                                    ],  [  'descripcion' => '¿Cuántos días es el tiempo para el cambio de contraseña en el His Minsa?', 'respuesta' => '60 días calendarios', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '30 días calendarios','59 días calendarios','29 días calendarios','60 días calendarios','15 días calendarios', ]
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
                                        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4223')->value('id'); 
                                        $preguntas = [ 
                                            [  'descripcion' => 'SEGÚN LA CLASIFICACIÓN DE LA OMS PARA MUCOSITIS, EN QUE GRADO EL PACIENTE NECESITA DIETA LÍQUIDA PORQUE YA NO PUEDE TRAGAR ALIMENTOS SÓLIDOS.', 'respuesta' => 'GRADO 3', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'GRADO 1','GRADO 5','GRADO 2','GRADO 4','GRADO 3', ]
                                            ],  [  'descripcion' => 'CUÁL ES EL REQUERIMIENTO CALÓRICO Y PROTEICO X KG /PESO DEL PACIENTE CIRRÓTICO CHILD A', 'respuesta' => '35 KCAL/KG Y 1.2G PROT/ KG', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '30 KCAL/KG Y 0.8G PROT/ KG','35 KCAL/KG Y 0.8G PROT/ KG','25 KCAL/KG Y 1.2G PROT/ KG','35 KCAL/KG Y 1.2G PROT/ KG','25 KCAL/KG Y 0.8G PROT/ KG', ]
                                            ],  [  'descripcion' => 'COMO SE CALCULA EL PORCENTAJE DE PERDIDA DE PESO, PH = PESO HABITUAL, PA= PESO ACTUAL', 'respuesta' => '(PH-PA/PH)*100', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '(PH-PA/PH)*100','(PA-PH/PH)*100','(PH-PA/PA)*100','(PA-PH/PA)*100','(PH-100/PA)', ]
                                            ],  [  'descripcion' => 'QUE BACTERIAS IMPORTANTES PARA EL MANIPULADOR DE ALIMENTOS SE ENCUENTRAN EN NUESTRA NARIZ', 'respuesta' => 'STAPHILOCOCOS', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'SALMONELLA ','STAPHILOCOCOS','CLOSTRIDIUM','EN NARIS NO HAY BACTERIAS','A Y C SON CORRECTOS', ]
                                            ],  [  'descripcion' => 'LOS LLAMADOS PESCADOS AZULES EN COMPARACION CON PESCADOS BLANCOS SON', 'respuesta' => 'MÁS RICOS EN GRASA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'MÁS RICOS EN GRASA','MENOS RICOS EN GRASA','MAS RICOS EN PROTEINAS','MENOS RICOS EN FIBRA','NINGUNO DE LOS ANTERIORES', ]
                                            ],  [  'descripcion' => 'LOS NUTRIENTES PROPIAMENTE ENERGETICOS SON', 'respuesta' => 'GLUCIDOS Y LIPIDOS', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'VIT Y SALES MINERALES','GLUCIDOS Y LIPIDOS','VIT SALES MINERALES Y AGUA','GLUCIDO, LIPIDOS Y PROTEINAS','N.A', ]
                                            ],  [  'descripcion' => 'LA CANTIDAD DE ALIMENTO QUE UN NIÑO PUEDA COMER EN UNA COMIDA DEPENDERÁ DE SU CAPACIDAD GÁSTRICA, DE MANERA TAL QUE UN NIÑO QUE PESA 8KG TENDRÁ UNA CAPACIDAD GÁSTRICA DE:', 'respuesta' => '240ML', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '200ML','30ML','240ML','300ML','500ML', ]
                                            ],  [  'descripcion' => '¿CUÁL ES LA DENSIDAD ENERGÉTICA MÍNIMA RECOMENDADA DURANTE LA ALIMENTACIÓN COMPLEMENTARIA?', 'respuesta' => '0,8 KCAL/GR@', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '0,6 KCAL/GR','0,8 KCAL/GR@','1 KCAL/GR','1,2 KCAL/GR','1,2 KCAL/GR', ]
                                            ],  [  'descripcion' => 'LA ORGANIZACIÓN PANAMERICANA DE LA SALUD PROPONE UNA CLASIFICACIÓN DE LOS ALIMENTOS EN FUNCIÓN A:', 'respuesta' => 'PERFIL DE NUTRIENTES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PERFIL DE NUTRIENTES','CARACTERÍSTICAS ORGANOLÉPTICAS','COMPUESTOS BIOACTIVOS','BIODISPONIBILIDAD','COMPUESTOS BIORADIOACTIVOS', ]
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
                                $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4224')->value('id'); 
                                        $preguntas = [ 
                                            [  'descripcion' => 'SEGÚN LA CLASIFICACIÓN DE LA OMS PARA MUCOSITIS, EN QUE GRADO EL PACIENTE NECESITA DIETA LÍQUIDA PORQUE YA NO PUEDE TRAGAR ALIMENTOS SÓLIDOS.', 'respuesta' => 'GRADO 3', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'GRADO 1','GRADO 5','GRADO 2','GRADO 4','GRADO 3', ]
                                            ],  [  'descripcion' => 'CUÁL ES EL REQUERIMIENTO CALÓRICO Y PROTEICO X KG /PESO DEL PACIENTE CIRRÓTICO CHILD A', 'respuesta' => '35 KCAL/KG Y 1.2G PROT/ KG', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '30 KCAL/KG Y 0.8G PROT/ KG','35 KCAL/KG Y 0.8G PROT/ KG','25 KCAL/KG Y 1.2G PROT/ KG','35 KCAL/KG Y 1.2G PROT/ KG','25 KCAL/KG Y 0.8G PROT/ KG', ]
                                            ],  [  'descripcion' => 'COMO SE CALCULA EL PORCENTAJE DE PERDIDA DE PESO, PH = PESO HABITUAL, PA= PESO ACTUAL', 'respuesta' => '(PH-PA/PH)*100', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '(PH-PA/PH)*100','(PA-PH/PH)*100','(PH-PA/PA)*100','(PA-PH/PA)*100','(PH-100/PA)', ]
                                            ],  [  'descripcion' => 'QUE BACTERIAS IMPORTANTES PARA EL MANIPULADOR DE ALIMENTOS SE ENCUENTRAN EN NUESTRA NARIZ', 'respuesta' => 'STAPHILOCOCOS', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'SALMONELLA ','STAPHILOCOCOS','CLOSTRIDIUM','EN NARIS NO HAY BACTERIAS','A Y C SON CORRECTOS', ]
                                            ],  [  'descripcion' => 'LOS LLAMADOS PESCADOS AZULES EN COMPARACION CON PESCADOS BLANCOS SON', 'respuesta' => 'MÁS RICOS EN GRASA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'MÁS RICOS EN GRASA','MENOS RICOS EN GRASA','MAS RICOS EN PROTEINAS','MENOS RICOS EN FIBRA','NINGUNO DE LOS ANTERIORES', ]
                                            ],  [  'descripcion' => 'LOS NUTRIENTES PROPIAMENTE ENERGETICOS SON', 'respuesta' => 'GLUCIDOS Y LIPIDOS', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'VIT Y SALES MINERALES','GLUCIDOS Y LIPIDOS','VIT SALES MINERALES Y AGUA','GLUCIDO, LIPIDOS Y PROTEINAS','N.A', ]
                                            ],  [  'descripcion' => 'LA CANTIDAD DE ALIMENTO QUE UN NIÑO PUEDA COMER EN UNA COMIDA DEPENDERÁ DE SU CAPACIDAD GÁSTRICA, DE MANERA TAL QUE UN NIÑO QUE PESA 8KG TENDRÁ UNA CAPACIDAD GÁSTRICA DE:', 'respuesta' => '240ML', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '200ML','30ML','240ML','300ML','500ML', ]
                                            ],  [  'descripcion' => '¿CUÁL ES LA DENSIDAD ENERGÉTICA MÍNIMA RECOMENDADA DURANTE LA ALIMENTACIÓN COMPLEMENTARIA?', 'respuesta' => '0,8 KCAL/GR@', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '0,6 KCAL/GR','0,8 KCAL/GR@','1 KCAL/GR','1,2 KCAL/GR','1,2 KCAL/GR', ]
                                            ],  [  'descripcion' => 'LA ORGANIZACIÓN PANAMERICANA DE LA SALUD PROPONE UNA CLASIFICACIÓN DE LOS ALIMENTOS EN FUNCIÓN A:', 'respuesta' => 'PERFIL DE NUTRIENTES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'PERFIL DE NUTRIENTES','CARACTERÍSTICAS ORGANOLÉPTICAS','COMPUESTOS BIOACTIVOS','BIODISPONIBILIDAD','COMPUESTOS BIORADIOACTIVOS', ]
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
                                            $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 3011')->value('id'); 
                                            $preguntas = [ 
                                                [  'descripcion' => '¿Algunos de los cambios fisiologicos que ocuren durante el enbarazo son:?', 'respuesta' => 'aumento del gasto cardiaco', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'aumento del gasto cardiaco','el volumen sanguineo no se modifica','aumenta la resistencia vascular sistemica','antecedente de ipertencion','dolor hipocondrio derecho', ]
                                                ],  [  'descripcion' => 'factores asociados a transtornos hipertencivos en el enbarazo', 'respuesta' => 'primera gestacion', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'primera gestacion','aumenta la resistencia vascular sistemica','antecedente de ipertencion','vomitos intensos y repetidos','N.A', ]
                                                ],  [  'descripcion' => ' signo de alarma durante el embarazo', 'respuesta' => 'cefalea intensa', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'cefalea intensa','dolor hipocondrio izquierdo','dolor en epigastrio','obesidad morvida','N.A', ]
                                                ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'Miguel Angel Paco Fernandez','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','N.A', ]
                                                ],  [  'descripcion' => 'marque lo correcto en relacion a la atencion medica a la gestante durante la atencion prenatal', 'respuesta' => 'en el primer nivel de atencion la primera o segunda atencion prenatal debe ser realizada por el medico cirujano', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'en el primer nivel de atencion la primera o segunda atencion prenatal debe ser realizada por el medico cirujano','debe ser evaluada solo cuando presentan patologias','si el medico no esta de turno se justifica que no se realice la evaluacion','manejo terapeutico y preventivo','N.A', ]
                                                ],  [  'descripcion' => 'el rango de referenci de la emoglobina, para establecer el diagnostico de anemia moderado en gestantes (teniendo cuenta la altitud de 1000msnm) es:', 'respuesta' => '7-9,9g/dl', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '7-9,9g/dl','depende de valores previos','8-9,9g/dl','6-8,9g/dl','N.A', ]
                                                ],  [  'descripcion' => 'la cuarta medicion de emoglobina que se realiza en el puerperio, en el establecimiento de salud se realiza:', 'respuesta' => 'a los 30 dias pos-parto', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'a los 30 dias pos-parto','a los 25 dias pos-parto','a los 80 dias pos-parto','a los 15 dias pos-parto','N.A', ]
                                                ],  [  'descripcion' => 'Para realizar el diagnostico de la hemorragia pos-parto las 4ts se refiere:', 'respuesta' => 'todas son correctas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'todas son correctas','tono uterino','tejido placentario','trauma obstetrico','trombina', ]
                                                ],  [  'descripcion' => 'el recien nacido a termino y sin complicacion el pinzamiento y corte de cordon unbilical se debe dar', 'respuesta' => 'entre el segundo y tercer minuto', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'entre el segundo y tercer minuto','entre el cuato y octavo minuto','entre el primer y segundo minuto','entre el sexto y primer minuto','N.A', ]
                                                ],  [  'descripcion' => 'el dispositivo intrauterino liberador de cobre (T CU 380 tiene una duracion del tiempo de protecion de)', 'respuesta' => '12 años', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '12 años','11 años','10 años','09 años','N.A', ]
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
                                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4233')->value('id'); 
                                            $preguntas = [ 
                                                [  'descripcion' => '¿Algunos de los cambios fisiologicos que ocuren durante el enbarazo son:?', 'respuesta' => 'aumento del gasto cardiaco', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'aumento del gasto cardiaco','el volumen sanguineo no se modifica','aumenta la resistencia vascular sistemica','antecedente de ipertencion','dolor hipocondrio derecho', ]
                                                ],  [  'descripcion' => 'factores asociados a transtornos hipertencivos en el enbarazo', 'respuesta' => 'primera gestacion', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'primera gestacion','aumenta la resistencia vascular sistemica','antecedente de ipertencion','vomitos intensos y repetidos','N.A', ]
                                                ],  [  'descripcion' => ' signo de alarma durante el embarazo', 'respuesta' => 'cefalea intensa', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'cefalea intensa','dolor hipocondrio izquierdo','dolor en epigastrio','obesidad morvida','N.A', ]
                                                ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'Miguel Angel Paco Fernandez','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','N.A', ]
                                                ],  [  'descripcion' => 'marque lo correcto en relacion a la atencion medica a la gestante durante la atencion prenatal', 'respuesta' => 'en el primer nivel de atencion la primera o segunda atencion prenatal debe ser realizada por el medico cirujano', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'en el primer nivel de atencion la primera o segunda atencion prenatal debe ser realizada por el medico cirujano','debe ser evaluada solo cuando presentan patologias','si el medico no esta de turno se justifica que no se realice la evaluacion','manejo terapeutico y preventivo','N.A', ]
                                                ],  [  'descripcion' => 'el rango de referenci de la emoglobina, para establecer el diagnostico de anemia moderado en gestantes (teniendo cuenta la altitud de 1000msnm) es:', 'respuesta' => '7-9,9g/dl', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '7-9,9g/dl','depende de valores previos','8-9,9g/dl','6-8,9g/dl','N.A', ]
                                                ],  [  'descripcion' => 'la cuarta medicion de emoglobina que se realiza en el puerperio, en el establecimiento de salud se realiza:', 'respuesta' => 'a los 30 dias pos-parto', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'a los 30 dias pos-parto','a los 25 dias pos-parto','a los 80 dias pos-parto','a los 15 dias pos-parto','N.A', ]
                                                ],  [  'descripcion' => 'Para realizar el diagnostico de la hemorragia pos-parto las 4ts se refiere:', 'respuesta' => 'todas son correctas', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'todas son correctas','tono uterino','tejido placentario','trauma obstetrico','trombina', ]
                                                ],  [  'descripcion' => 'el recien nacido a termino y sin complicacion el pinzamiento y corte de cordon unbilical se debe dar', 'respuesta' => 'entre el segundo y tercer minuto', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'entre el segundo y tercer minuto','entre el cuato y octavo minuto','entre el primer y segundo minuto','entre el sexto y primer minuto','N.A', ]
                                                ],  [  'descripcion' => 'el dispositivo intrauterino liberador de cobre (T CU 380 tiene una duracion del tiempo de protecion de)', 'respuesta' => '12 años', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  '12 años','11 años','10 años','09 años','N.A', ]
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
                                                    $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4212')->value('id'); 
                                                    $preguntas = [ 
                                                        [  'descripcion' => 'Qué requisitos debe tener un archivo', 'respuesta' => 'Todas las anteriores ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Debe ser un sistema organizado y apropiado al tipo de trabajo que se realiza',' Debe tener condiciones para que en ausencia de la secretaria, el jefe pueda encontrar un documento determinado','Puede ser organizada numérica o alfabéticamente.','Todas las anteriores ','N.A', ]
                                                        ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'Miguel Angel Paco Fernandez','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','N.A', ]
                                                        ],  [  'descripcion' => 'Cuál es el plazo máximo de atención y respuesta de los reclamos, contando desde el día siguiente de su registro en el Libro de Reclamaciones en su versión física o digital', 'respuesta' => ' Treinta (30) días', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Diez (10) días hábiles','Siete (07) días',' Siete (30) días',' Veinticuatro (24) horas ','En el menor tiempo posible.', ]
                                                        ],  [  'descripcion' => 'Qué documento se envía de institución a institución', 'respuesta' => 'Oficio', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Memorándum','Oficio','Carta',' Informe','Proveído ', ]
                                                        ],  [  'descripcion' => 'Es el conjunto de métodos, aplicaciones y herramientas informáticas que se usan en labores de oficina', 'respuesta' => 'Ofimática', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Computacion ','sistema operativa','Ofimática','informatica','N.A', ]
                                                        ],  [  'descripcion' => 'Qué habilidades y destrezas debe cumplir una secretaria', 'respuesta' => 'Planeamiento, motivación, liderazgo y toma de decisiones ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Destrezas y habilidad con los números ','Facilidad para combinar colores y modelos','Todas las anteriores','N.A','Planeamiento, motivación, liderazgo y toma de decisiones ', ]
                                                        ],  [  'descripcion' => 'Cuál es la Ley Orgánica de Gobiernos Regionales', 'respuesta' => ' Ley Nº 27867', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '   Ley Nº 27867',' Ley Nº 27868',' Ley Nº 27869','Ley Nº 27870','N.A', ]
                                                        ],  [  'descripcion' => 'Un acta se utiliza cuando', 'respuesta' => 'Se desea trascribir textualmente todo lo tratado en una reunión', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'Todas las anteriores','Se desea trascribir textualmente todo lo tratado en una reunión','Cuando se desea convocar a una reunión','Se desea comunicar algo al personal','N.A', ]
                                                        ],  [  'descripcion' => 'Que es el sgd', 'respuesta' => 'sistema de gestion digital', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'sistema de gestion digital','sistema integrado de gestion administrativa','sistema de administracion financiera','sistema de tramite','N.A', ]
                                                        ],  [  'descripcion' => 'Que codigo genera cuando registras los documentos en el sgd', 'respuesta' => 'registro de documento y registro de expediente', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'registro de documento y registro de expediente','registro de codigos siaf','registro de asistencia ','registro de personal','N.A', ]
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
                                                        $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4234')->value('id'); 
                                                        $preguntas = [ 
                                                            [  'descripcion' => 'QUE ES LA ELECTRICIDAD', 'respuesta' => 'LA ELECTRICIDAD ES UNA FORMA DE ENERGÍA QUE SE MANIFIESTA CON EL MOVIMIENTO DE LOS ELECTRONES DE LA CAPA EXTERNA DE LOS ÁTOMOS QUE HAY EN LA SUPERFICIE DE UN MATERIAL CONDUCTOR', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'LA ELECTRICIDAD ES UNA FORMA DE ENERGÍA QUE SE MANIFIESTA CON EL MOVIMIENTO DE LOS ELECTRONES DE LA CAPA EXTERNA DE LOS ÁTOMOS QUE HAY EN LA SUPERFICIE DE UN MATERIAL CONDUCTOR','MANTENIMIENTO DE COMPRENSORAS','ES EL VOLTAJE MAXIÑO QUE LLEGA EN UN CONSULTORIO','PARTE DE LA FISICA QUE ESTUDIA LA ENERGIA','N.A', ]
                                                            ],  [  'descripcion' => 'MENCIONE EQUIPOS ELECTRICOS QUE USA EL HOSPITAL', 'respuesta' => 'ESTABILIZADORES, MAQUINA DE ANESTESIA, AUTOCLAVES CON GENERADORES A VAPOR, LAMPARA CUELLO DE GANZO, VENTILADORES MECANICO, BOMBAS DE AGUA,  EQUIPOS DE RAYOS X,   ETC', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESTABILIZADORES, MAQUINA DE ANESTESIA, AUTOCLAVES CON GENERADORES A VAPOR, LAMPARA CUELLO DE GANZO, VENTILADORES MECANICO, BOMBAS DE AGUA,  EQUIPOS DE RAYOS X,   ETC','PLATAFORMA DE METAL','BALON DE OXIGENO, GENERADOR DE BICLETA','CAMILLAS,RELOJES MECANICOS','N.A', ]
                                                            ],  [  'descripcion' => 'QUE ES UNA OTM', 'respuesta' => 'ORDEN DE TRABAJO DE MANTENIMIENTO', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'ORDEN DE TRABAJO DE MANTENIMIENTO','ORDEN DE TRABAJO DE MANUTENCION','ORDEN DE TRABAJO DE MECANICA','ORDEN DE TRABAJO ELECTRONICA','N.A', ]
                                                            ],  [  'descripcion' => 'A CUANTO DEBE ESTAR EL VALOR DE UN POZO A TIERRA EN UN HOSPITAL', 'respuesta' => 'SE RECOMIENDA QUE EL VALOR ESTE A 5 OHMIOS O MENOS', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'SE RECOMIENDA QUE EL VALOR ESTE A 8 OHMIOS O MENOS','SE RECOMIENDA QUE EL VALOR ESTE A 5OHMIOS O MENOS','SE RECOMIENDA QUE EL VALOR ESTE A 4 OHMIOS O MENOS','SE RECOMIENDA QUE EL VALOR ESTE A 3 OHMIOS O MENOS','SE RECOMIENDA QUE EL VALOR ESTE A 2 OHMIOS O MENOS', ]
                                                            ],  [  'descripcion' => 'CUÁLES SON LAS PARTES IMPORTANTES DE UN SISTEMA DE REFIGERACION', 'respuesta' => 'TODAS LAS ANTERIORES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'TODAS LAS ANTERIORES',' EL CONDENSADOR','SISTEMA DE EXPANSIÓN','EL GAS REFRIGERANTE','TODAS LAS ANTERIORES', ]
                                                            ],  [  'descripcion' => 'Quien es el director ejecutivo actual de la U.E 404 Red de Salud Huauco', 'respuesta' => 'Miguel Angel Paco Fernandez', 'examen_id' => $id, 'punto' => 3,'alternativas' => [  'Miguel Angel Paco Fernandez','wilmer Espinoza Torres','Rolin Cruz Malpartida','Yuri Troncos Taquio','N.A', ]
                                                            ],  [  'descripcion' => 'QUE ES FUNDAMENTAL PARA REVISAR UNA FUENTE DE PODER', 'respuesta' => 'DECONECTAR TODOS LOS CABLES DE FUENTE DE ALIMENTACION', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESTAR PUESTOS LOS EPPS','NO EXISTA LUZ','DECONECTAR TODOS LOS CABLES DE FUENTE DE ALIMENTACION','TODAS ANTERIORES','N.A', ]
                                                            ],  [  'descripcion' => 'CON QUE ERRAMIENTA SE MIDE EL VOLTAJE', 'respuesta' => 'EL VOLTIMETRO', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'N.A','PILA','EL VOLTIMETRO','MULTIMETRO','FOCO', ]
                                                            ],  [  'descripcion' => 'CUANTOS TIPOS DE CONEXIÓN DE ARRANQUE DE UN MOTOR TRIFASICO EXISTE', 'respuesta' => 'CONEXIÓN DELTA/TRIANGULO Y CONEXIÓN ESTRELLA', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'TODAS LAS ANTERIORES','CONEXIÓN DELTA/CIRCULAR Y CONEXIÓN ESTRELLA','CONEXIÓN DELTA/CUADRADO Y CONEXIÓN LUNA','CONEXIÓN DELTA/TRIANGULO Y CONEXIÓN ESTRELLA','N.A', ]
                                                            ],  [  'descripcion' => 'CUAL ES EL VOLTAJE MAXIMO CONSIDERADO SEGURO PARA EL TRABAJO', 'respuesta' => '24 VOLTAJES', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '24 VOLTAJES','25 VOLTAJES','N.A','25 GB','25 MGB', ]
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
                                                                $id= Examen::where('titulo', 'EXAMEN DE CONOCIMIENTO - 4232')->value('id'); 
                                                                $preguntas = [ 
                                                                    [  'descripcion' => '¿QUE ES SISTEMA DE VENTILACION?', 'respuesta' => 'SON EQUIPOS QUE REALIZAN EL INTERCAMBIO DE AIRE EN UN AMBIENTE COMO: INYECTORES DE AIRE Y EXTRACTORES DE AIRE, VENTILADORES PORTATIL, ETC', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'SON EQUIPOS QUE REALIZAN EL INTERCAMBIO DE AIRE EN UN AMBIENTE COMO: INYECTORES DE AIRE Y EXTRACTORES DE AIRE, VENTILADORES PORTATIL, ETC','SON EQUIPOS QUE PRODUCEN AIRE  CALIENTE ','SON EQUIPOS DE PRODUCEN ENFRIAMIENTO DEL AMBIENTE ','TODAS SON CORRECTAS ','NA ', ]
                                                                    ],  [  'descripcion' => '¿QUE ES UN AIRE ACONDICIONADO?', 'respuesta' => 'ES UN EQUIPO DE CLIMATIZACION QUE PRINCIPALMENTE PROPORCIONA AIRE FRIO PARA UN AMBIENTE Y DEJAR A UNA TEMPERATURA PROGRAMADA ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ES UN EQUIPO DE CLIMATIZACION QUE PRINCIPALMENTE PROPORCIONA AIRE FRIO PARA UN AMBIENTE Y DEJAR A UNA TEMPERATURA PROGRAMADA ','ES UN AIRE FRIO PRODUCTO DE ELEMEBNTOS CONGELANTES','ES UN EQUIPO DE INTERCAMBIO DE AIRES ','TODAS SON CORRECTAS ','NA ', ]
                                                                    ],  [  'descripcion' => '¿CUANTOS TIPOS DE MANTENIMIENTO PRINCIPALES EXISTE?', 'respuesta' => 'SON TRES MANTENIMIENTOS: MANTENIMIENTO PREVENTIVO, MANTENIMIENTO REACTIVO O CORRECTIVO Y MANTENIMIENTO PREDICTIVO', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'SON TRES MANTENIMIENTOS: MANTENIMIENTO PREVENTIVO, MANTENIMIENTO REACTIVO O CORRECTIVO Y MANTENIMIENTO PREDICTIVO','MANTEMIENTO GENERAL, MANTENIMIENTO ESPECIFICO ','MANTENIMIENTO PLANIFICADO, MANTENIMIENTO OPERATIVO ','TODAS SON CORRECTAS ','NA ', ]
                                                                    ],  [  'descripcion' => 'QUYE ES FUNDAMENTAL PARA REVISAR UNA FUENTE DE PODER ', 'respuesta' => 'ESTAR PUESTO  LOS EPPS', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'ESTAR PUESTO  LOS EPPS','QUE EL PISO ESTE SECO','PROBAR DIRECTO CON UN FOCO ','TODAS SON CORRECTAS ','NA ', ]
                                                                    ],  [  'descripcion' => 'QUE TIEMPO DEMORA UNA PLANTA DE OXIGENO AL LLEGAR A LA PUREZA ADECUADA ', 'respuesta' => 'DE 35 M A 40 M ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'DE 35 M A 40 M ','DE 40 M A 50 M ','DE 35 M A 45 M ','TODAS SON CORRECTAS ','NA ', ]
                                                                    ],  [  'descripcion' => 'HASTA CUANTO  ES EL VOLTAJE MAXIMO QUE LLEGA A UN CONSULTORIO ', 'respuesta' => 'DE 220 V A 240 V', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  'DE 220 V A 240 V','DE 250 V A 260 V','DE 220 V A 250 V','TODAS SON CORRECTAS ','NA ', ]
                                                                    ],  [  'descripcion' => '¿QUE INSUMOS Y ACCESORIOS SE USAN PARA DAR MANTENIMIENTO PREVENTIVO A UN GRUPO ELECTROGENO?', 'respuesta' => 'ALCOHOL ISOPROPILICO, PAÑOS DE LIMPIEZA, LIMPIA CONTACTO, AFLOJA TODO, CINTA AISLANTE, TRAPOS, BENCINA, CREMA LIMPIADORA, TRIZ, FILTRO DE COMBUSTIBLE, FILTRO DE ACEITE, FILTRO DE AIRE, REFRIGERANTE, ETC', 'examen_id' => $id, 'punto' => 1,'alternativas' => [  'ALCOHOL ISOPROPILICO, PAÑOS DE LIMPIEZA, LIMPIA CONTACTO, AFLOJA TODO, CINTA AISLANTE, TRAPOS, BENCINA, CREMA LIMPIADORA, TRIZ, FILTRO DE COMBUSTIBLE, FILTRO DE ACEITE, FILTRO DE AIRE, REFRIGERANTE, ETC','ACIDO ISOPROPILICO, EPPS ','TALADRO, DESARMADOR, SIERRA ELECTRICA ','TODAS SON CORRECTAS ','NA ', ]
                                                                    ],  [  'descripcion' => 'CUANTOS PSI EQUIVALRE 10M3', 'respuesta' => '2500', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '2500','4000','4500','TODAS SON CORRECTAS ','NA ', ]
                                                                    ],  [  'descripcion' => 'EL SEGUNDO MANTENIMIENTO SE DEBE REALIZAR SE DEBE REALIZAR UN COMPRENSOR ', 'respuesta' => '2500 HORAS ', 'examen_id' => $id, 'punto' => 2,'alternativas' => [  '2500 HORAS ','5000 HORAS ','6000 HORAS ','TODAS SON CORRECTAS ','NA ', ]
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
