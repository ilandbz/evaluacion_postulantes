<?php

namespace Database\Seeders;

use App\Models\Cargo;
use App\Models\Postulante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostulanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('nombre', 'INGENIERO INFORMATICO  Y/O ING. EN SISTEMAS')->value('id'),
            'dni'      => '45532962', 
            'nombres'  => 'Cristian',
            'apellido_paterno'       => 'Figueroa',
            'apellido_materno'    => 'Ferrer',
        ]);
        Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3912')->value('id'),
            'dni'      => '74277318', 
            'nombres'  => 'ABARCA GUTIERREZ DEYSI YANET',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '3912')->value('id'),
                    'dni'      => '47033902', 
                    'nombres'  => 'AYALA RIVAS ZOSIMO',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4003')->value('id'),
                    'dni'      => '22521741', 
                    'nombres'  => 'GONZALEZ ASTETE JAIME EDY',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '04074774', 
                    'nombres'  => 'SANTIAGO LAURENTE MARIA ELVIRA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '22510166', 
                    'nombres'  => 'CORDOVA AGUI MARIA ELENA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '45001970', 
                    'nombres'  => 'VIGILIO TUCTO GIOVANA MARGARITA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '45491809', 
                    'nombres'  => 'HERRERA ESTEBAN YIMI RONALD',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '46883824', 
                    'nombres'  => 'LLANOS NACION MARIA EUGENIA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '73068623', 
                    'nombres'  => 'DIONISIO SALÃ­S YUDY ZULEMA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '71562504', 
                    'nombres'  => 'CHUQUIYAURI MEZA EVELYN DANIELA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '43442912', 
                    'nombres'  => 'LUQUILLAS ESPINOZA EVELIN CYNTHIA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '72042161', 
                    'nombres'  => 'TIBURCIO MORENO J.M. FIORELA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '46768765', 
                    'nombres'  => 'CENTENO TRUJILLO DANI SIVELI',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '76451634', 
                    'nombres'  => 'LUICHO RAMOS DE ROBLES KATHERINE YESABEL',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '42147725', 
                    'nombres'  => 'VICTORIO  CRUZ YESENIA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '45629928', 
                    'nombres'  => 'SACHAHUAMAN  HURTADO CINTHYA MADELEYNE',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '71245073', 
                    'nombres'  => 'TORIBIO COTRINA GUINA DOROTHY',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '42462038', 
                    'nombres'  => 'CALZADA ESPINOZA ROXANA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '47900632', 
                    'nombres'  => 'HIDALGO CERVANTES YOLINDA BEATRIZ',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '70272970', 
                    'nombres'  => 'SOBERO MEZARINA JHADIRA',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
        Postulante::firstOrCreate([
                    'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
                    'dni'      => '40576425', 
                    'nombres'  => 'MARIN JAIMES YTALA JACQUELINE',
                    'apellido_paterno'       => '',
                    'apellido_materno'    => '',
                ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4233')->value('id'),
            'dni'      => '22508692', 
            'nombres'  => 'REYES CARBAJAL KARIN ALINA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3757')->value('id'),
            'dni'      => '72171975', 
            'nombres'  => 'VALDIVIA  TOLENTINO ELENA EMMY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3757')->value('id'),
            'dni'      => '10408395', 
            'nombres'  => 'MAMANI CHINO ELIZABETH',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3757')->value('id'),
            'dni'      => '45494579', 
            'nombres'  => 'CATIRE REYES GUADALUPE E.',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3757')->value('id'),
            'dni'      => '45141569', 
            'nombres'  => 'SALVADOR  BOZA KELY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3757')->value('id'),
            'dni'      => '41567885', 
            'nombres'  => 'ANTAURCO ALVARADO YONY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2997')->value('id'),
            'dni'      => '41578055', 
            'nombres'  => 'RIVAS ALCEDO YUDI VELINDA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4186')->value('id'),
            'dni'      => '47596770', 
            'nombres'  => 'FRETEL CAPCHA LUZ VIVIANA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3101')->value('id'),
            'dni'      => '45454250', 
            'nombres'  => 'RODRIGUEZ TORRES RICARDO LEONCIO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3101')->value('id'),
            'dni'      => '71090842', 
            'nombres'  => 'TANTALEAN DELGADO ANGELA JASMITH',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3961')->value('id'),
            'dni'      => '44942688', 
            'nombres'  => 'ISIDRO  MEZA RUDER KILER ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3961')->value('id'),
            'dni'      => '23002881', 
            'nombres'  => 'DIAZ PAZ RAMIRO MARCIAL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3961')->value('id'),
            'dni'      => '48222523', 
            'nombres'  => 'SANTIAGO AGUERO YERSYL YEDVIN ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3961')->value('id'),
            'dni'      => '22735988', 
            'nombres'  => 'RUBINA PULIDO NEIL JOSE',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '42699613', 
            'nombres'  => 'VENTURA TUCTO ELIZABETH IRMA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '45293036', 
            'nombres'  => 'TOLENTINO MANZANEDO ERIKA YANNET',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '45479221', 
            'nombres'  => 'SANCHEZ SAAVEDRA HELLEN MELISSA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '41601596', 
            'nombres'  => 'LOPEZ CONTRERAS HERLLIS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '44146016', 
            'nombres'  => 'GOMEZ CONDEZO LESIEVICH ALEJANDRO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '46767369', 
            'nombres'  => 'THEA LAVERIANO LETICIA SOLANGEL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '71300743', 
            'nombres'  => 'JORGE REYES JUDITH PAMELA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '43492522', 
            'nombres'  => 'CASTRO SERAFIN YONI EBERSON',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '46974163', 
            'nombres'  => 'ACHIC ALVARADO VANESSA SILIANA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '71617362', 
            'nombres'  => 'AQUINO BERROSPI LUZ ERIKA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2994')->value('id'),
            'dni'      => '46848737', 
            'nombres'  => 'REYNOSO DOMINGUEZ MARIA ELENA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3011')->value('id'),
            'dni'      => '42367363', 
            'nombres'  => 'CASTAÃ‘ON CUSQUI CHELA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3011')->value('id'),
            'dni'      => '45643527', 
            'nombres'  => 'MALPARTIDA  MOSQUERA  ELSA PILAR',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3011')->value('id'),
            'dni'      => '43022138', 
            'nombres'  => 'ROBLES VILCA PERCY PAOLO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3011')->value('id'),
            'dni'      => '40267733', 
            'nombres'  => 'GONZALEZ SALOME PAUL FERNANDO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3027')->value('id'),
            'dni'      => '71528991', 
            'nombres'  => 'CASTAÃ‘EDA RECINAS GRISELDA KIMBERLY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4006')->value('id'),
            'dni'      => '73772822', 
            'nombres'  => 'ALEGRE DIONICIO CHRISTOPHER ROY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4006')->value('id'),
            'dni'      => '45872887', 
            'nombres'  => 'NOREÃ±A  TASSA KATHLEEN GUILIANA ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3957')->value('id'),
            'dni'      => '45720009', 
            'nombres'  => 'MAYLLE AMBROSIO  KENNY RICHARD',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3957')->value('id'),
            'dni'      => '72424779', 
            'nombres'  => 'ALVAREZ OCHOA DAILY VICTORIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '76422792', 
            'nombres'  => 'ZEVALLOS CONTRERAS LIZ MARITZA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '44698316', 
            'nombres'  => 'VARA ANDRES MELINA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '47712620', 
            'nombres'  => 'ISIDRO TUPAC GLORIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '72400741', 
            'nombres'  => 'CHACON FACUNDO ABEL CARLOS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '70867355', 
            'nombres'  => 'VALDIVIA TRINIDAD SALLY MILENNA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '41119033', 
            'nombres'  => 'OCAÃ‘A  DOMINGUEZ NATHALIE CRISTINA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '75137931', 
            'nombres'  => 'CHAVEZ GARCIA LEYLA MISHELL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '72506571', 
            'nombres'  => 'ESPINOZA DAVILA LUZ CAMILA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '72374509', 
            'nombres'  => 'MONTESINOS MATOS HEIDY YOSHIRA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '71021833', 
            'nombres'  => 'RICRA  ZEVALLOS JIMMY KIDD',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '46615885', 
            'nombres'  => 'HUARAC ALBORNOZ JHONATHAN JERSON',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '46802003', 
            'nombres'  => 'ESPINOZA MACHADO MARILY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '40976029', 
            'nombres'  => 'SILVA SAN MARTIN VIANEY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '47258244', 
            'nombres'  => 'TOLEDO ALVA JESUS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '76652773', 
            'nombres'  => 'VILLAVICENCIO SALVADOR ROSMERI',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '41159073', 
            'nombres'  => 'ACOSTA CRESPO JESUS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '75476065', 
            'nombres'  => 'TUCTO ESTEBAN NANCY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '45626548', 
            'nombres'  => 'BAYONA RODRIGUEZ LEISY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '71872371', 
            'nombres'  => 'CAMPOS ALVARADO DIOFANTO EUTIMIO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '48164586', 
            'nombres'  => 'LEIVA  NAUPAY JORGE LUIS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '45727564', 
            'nombres'  => 'REYNOSO BARRIONUEVO DEYVI',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '70451452', 
            'nombres'  => 'TELLO CCORPUNA FABIOL ALEJANDRO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2991')->value('id'),
            'dni'      => '71608236', 
            'nombres'  => 'LIVIA ADVINCULA MIGUIEL WALTER',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4211')->value('id'),
            'dni'      => '22520863', 
            'nombres'  => 'RUMALDO MARTEL LUZ PATRICIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4211')->value('id'),
            'dni'      => '72736328', 
            'nombres'  => 'HUERTA POZO KARIN',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4211')->value('id'),
            'dni'      => '47780865', 
            'nombres'  => 'NUÃ‘EZ ORIHUELA YOANGELA MELIZA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4219')->value('id'),
            'dni'      => '43233607', 
            'nombres'  => 'ARCE  CONDOR  GISSELA ANGELICA ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4202')->value('id'),
            'dni'      => '46204111', 
            'nombres'  => 'EVARISTO RODRIGUEZ MARIA PILAR',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4196')->value('id'),
            'dni'      => '43606050', 
            'nombres'  => 'CARPIO ALVARADO MAYRA MARLEN',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4196')->value('id'),
            'dni'      => '44724832', 
            'nombres'  => 'HILARIO LUSTRE MIQUER ROSAS ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4204')->value('id'),
            'dni'      => '09596204', 
            'nombres'  => 'CONTRERAS TARAZONA EDWIN',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4197')->value('id'),
            'dni'      => '22510104', 
            'nombres'  => 'QUESADA ROQUE WILLIAMS ALFREDO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4197')->value('id'),
            'dni'      => '72278863', 
            'nombres'  => 'CAPILLA ANTONIO FRANKLIN JENNSEN',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4197')->value('id'),
            'dni'      => '46778184', 
            'nombres'  => 'CAJALEON ALBORNOZ KELMA ALINA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4197')->value('id'),
            'dni'      => '22504726', 
            'nombres'  => 'SANTILLAN VARA DELCY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4198')->value('id'),
            'dni'      => '47146997', 
            'nombres'  => 'RUMI HUAMAN ROSARIO DEL OLIVO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4198')->value('id'),
            'dni'      => '46216237', 
            'nombres'  => 'DEZA MARTELL JUAN MANUEL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4198')->value('id'),
            'dni'      => '46902119', 
            'nombres'  => 'HUAMAN PARI JOSE LUIS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4198')->value('id'),
            'dni'      => '47365328', 
            'nombres'  => 'DIAZ JORGE FRESCIA GIOVANNA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4198')->value('id'),
            'dni'      => '72424757', 
            'nombres'  => 'RAMOS FERRER LESLIE LUCIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4198')->value('id'),
            'dni'      => '45602646', 
            'nombres'  => 'GOPIA SANTA CRUZ JULIO JHONATAN',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4198')->value('id'),
            'dni'      => '45255670', 
            'nombres'  => 'LOYOLA COSME ERIKA MARCELINA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4198')->value('id'),
            'dni'      => '44636032', 
            'nombres'  => 'POLINO SANCHEZ MIGUEL ITALO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4207')->value('id'),
            'dni'      => '47130608', 
            'nombres'  => 'LAVADO ESTACIO SOLANGHS JENIFER',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4207')->value('id'),
            'dni'      => '41135525', 
            'nombres'  => 'SALAS VIZCARRA CRISTIAN JOEL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4207')->value('id'),
            'dni'      => '47344252', 
            'nombres'  => 'ADVINCULA URBINA NEYER',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4207')->value('id'),
            'dni'      => '72868313', 
            'nombres'  => 'ROMERO ROSAS CHRISTIAN JORDAN',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4207')->value('id'),
            'dni'      => '48668749', 
            'nombres'  => 'CRIOLLO SANCHEZ JURGEN ROMARIO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4207')->value('id'),
            'dni'      => '72714621', 
            'nombres'  => 'PUMA LONGHI ANDREE GHIOVANY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4207')->value('id'),
            'dni'      => '46749807', 
            'nombres'  => 'GAMARRA CARDENAS RENZON JESUS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4207')->value('id'),
            'dni'      => '41861369', 
            'nombres'  => 'LAZARO TACUCHI PAVEL BERNABE',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4207')->value('id'),
            'dni'      => '70761900', 
            'nombres'  => 'FONSECA MELGAREJO JEMIMA ABIGAIL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4206')->value('id'),
            'dni'      => '40977949', 
            'nombres'  => 'GARCIA RUIZ MIGUEL ANGEL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4206')->value('id'),
            'dni'      => '43373418', 
            'nombres'  => 'RAMIREZ LLANQUE MARCO ANTONIO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4205')->value('id'),
            'dni'      => '44557189', 
            'nombres'  => 'ROQUE NAVARRO RUFFO ABEL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4205')->value('id'),
            'dni'      => '45001919', 
            'nombres'  => 'GONZALES ESPINOZA WILLY JHENNSY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4205')->value('id'),
            'dni'      => '42709103', 
            'nombres'  => 'EVARISTO FLORES HELIN ADALID',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4222')->value('id'),
            'dni'      => '43633501', 
            'nombres'  => 'QUISPE GOMEZ MARIA VICTORIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4222')->value('id'),
            'dni'      => '45018786', 
            'nombres'  => 'MARIN JAIMES RONNIE PAUL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4000')->value('id'),
            'dni'      => '42877783', 
            'nombres'  => 'BASILIO  BERNAL EILEEN ERIKA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4000')->value('id'),
            'dni'      => '70438480', 
            'nombres'  => 'TUCTO CUEVA CANDY KATHERINE',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4220')->value('id'),
            'dni'      => '42780106', 
            'nombres'  => 'ESPINOZA MEDINA ANTONIO JOSE',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4220')->value('id'),
            'dni'      => '29638017', 
            'nombres'  => 'VERA CHALCO MARÃA VICTORIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2980')->value('id'),
            'dni'      => '45201550', 
            'nombres'  => 'PEÃ‘A LOPE FELIX CARLOS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4217')->value('id'),
            'dni'      => '43103168', 
            'nombres'  => 'YANAC SOSA JELY LORENA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4225')->value('id'),
            'dni'      => '41909014', 
            'nombres'  => 'HUALLPA JIMENEZ MIGUEL ANGEL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4218')->value('id'),
            'dni'      => '44880985', 
            'nombres'  => 'BENDEZU RAMOS GALO FRANKS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '2971')->value('id'),
            'dni'      => '46593304', 
            'nombres'  => 'RUBIO OCAMPO MILAGROS DEL ROSARIO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4216')->value('id'),
            'dni'      => '46178956', 
            'nombres'  => 'ROJAS VALLE CARLOS ORLANDO ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4226')->value('id'),
            'dni'      => '46706595', 
            'nombres'  => 'CHAPILLIQUEN SERNAQUE  KRISS KATTHERINE',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4221')->value('id'),
            'dni'      => '41544749', 
            'nombres'  => 'PONCIANO PASCUAL  RAFAEL ENRIQUE ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4224')->value('id'),
            'dni'      => '46422327', 
            'nombres'  => 'DAVILA RODRIGUEZ ANJHELA TATIANA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4224')->value('id'),
            'dni'      => '70748248', 
            'nombres'  => 'PEÃ‘A YABAR JOHAN MANUEL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4224')->value('id'),
            'dni'      => '70231314', 
            'nombres'  => '  DELIZ LIDIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4224')->value('id'),
            'dni'      => '41580984', 
            'nombres'  => 'PRUDENCIO FIGUEROA FERNANDO GROVER',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4224')->value('id'),
            'dni'      => '71059375', 
            'nombres'  => 'ARANGOYTIA  QUISPE KAREN PAMELA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4224')->value('id'),
            'dni'      => '47185983', 
            'nombres'  => 'ZUÃ‘IGA SOTO LUIGGI ALONSO',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4212')->value('id'),
            'dni'      => '73039608', 
            'nombres'  => 'PUENTE APONTE MARENN KRITEL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4212')->value('id'),
            'dni'      => '22511495', 
            'nombres'  => 'ESTEBAN ROMAN LIZZY ANTONIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4212')->value('id'),
            'dni'      => '75490693', 
            'nombres'  => 'BALTAZAR ILDEFONSO YAMILA NICOLH',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4234')->value('id'),
            'dni'      => '76836189', 
            'nombres'  => 'SOLORZANO  GALEANO RENSO AGUSTIN ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4234')->value('id'),
            'dni'      => '61297482', 
            'nombres'  => 'GARAY  ESPIRITU RODIL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4227')->value('id'),
            'dni'      => '22435120', 
            'nombres'  => 'CUÃ‰LLAR  LORENZO VIOLETA FRANCISCA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4227')->value('id'),
            'dni'      => '47536102', 
            'nombres'  => 'ORNA ESPINOZA NOEMI',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4227')->value('id'),
            'dni'      => '43667868', 
            'nombres'  => 'TARAZONA PIMENTEL  MIRIAM SUSY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4227')->value('id'),
            'dni'      => '44382326', 
            'nombres'  => 'RIVERA GALLARDO ROSSANA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4227')->value('id'),
            'dni'      => '71451383', 
            'nombres'  => 'QUIJANO MONTALVO LIZ ELIZABETH',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4227')->value('id'),
            'dni'      => '73113904', 
            'nombres'  => 'PALACIOS LOPEZ JOSE MANUEL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4227')->value('id'),
            'dni'      => '45449978', 
            'nombres'  => 'CAMPOS TUCTO ALINA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4227')->value('id'),
            'dni'      => '72253311', 
            'nombres'  => 'CONDEZO  INOCENCIO  SERGIO FRANK ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4227')->value('id'),
            'dni'      => '74729236', 
            'nombres'  => 'HUERTA MARTIN ELIZABETH YOLIANA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '40707169', 
            'nombres'  => 'VILLARREAL VALENTIN NILDA SARITA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '40968460', 
            'nombres'  => 'BERNARDO MEDINA  ESTHER',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '44680894', 
            'nombres'  => 'EGUIZABAL ROJAS MARILU',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '44217703', 
            'nombres'  => 'TERRY RAMIREZ LEYDY SEVILLA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '45801726', 
            'nombres'  => 'LOARTE HUERTA GLADYS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '47462422', 
            'nombres'  => 'GODOY  REYNOASO NAZARIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '44899258', 
            'nombres'  => 'PEREZ PASCUAL JAMES',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '47102141', 
            'nombres'  => 'MEGIA HIDALGO YOLANDA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '48546977', 
            'nombres'  => 'SANTOS CAMONES YESENIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '47633520', 
            'nombres'  => 'MENDOZA CALERO MARLENY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '46798649', 
            'nombres'  => 'JUSTINIANO LORENZO CLEDY ESTEFANY',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '45254911', 
            'nombres'  => 'ALBORNOZ CRISTOBAL LIZ NAIDA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '74542114', 
            'nombres'  => 'GONZALES RUBIN MIRIAN LUZ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '40629557', 
            'nombres'  => 'ALVARADO CHAUCA HILDA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4228')->value('id'),
            'dni'      => '45080750', 
            'nombres'  => 'VASQUEZ JULCA JOSE LUIS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4229')->value('id'),
            'dni'      => '40269041', 
            'nombres'  => 'ORIZANO  RIOS TANIA SILVIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4229')->value('id'),
            'dni'      => '44864659', 
            'nombres'  => 'GARAY CONTRERAS ZEIDA MILAGROS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4229')->value('id'),
            'dni'      => '41767993', 
            'nombres'  => 'ESTEBAN GUERRA DODIT',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4229')->value('id'),
            'dni'      => '48509067', 
            'nombres'  => 'SANTIAGO  MORI ROSA KATHERIN TATIANA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4229')->value('id'),
            'dni'      => '40683898', 
            'nombres'  => 'ESTELA  RODRÃ­GUEZ  ELENA MARIBEL ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4229')->value('id'),
            'dni'      => '72745019', 
            'nombres'  => 'ROSALES SANGAMA JENYFFER KAREM',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4229')->value('id'),
            'dni'      => '47416473', 
            'nombres'  => 'FLORES PEREZ GERALYND TATYANA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4229')->value('id'),
            'dni'      => '46930716', 
            'nombres'  => 'TORRES NAJERA YUDITH LIZBETH',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4229')->value('id'),
            'dni'      => '43453587', 
            'nombres'  => 'LEON ABARCA ETNI SOFONIAS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4232')->value('id'),
            'dni'      => '47213167', 
            'nombres'  => 'QUIJANO MONTALVO JUAN CARLOS',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4213')->value('id'),
            'dni'      => '46166952', 
            'nombres'  => 'LIFONZO MUCHA SHEYBER JAVIER',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4213')->value('id'),
            'dni'      => '45798657', 
            'nombres'  => 'TOLEDO CHEPPE JAHAYRA NOHELY ',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '4213')->value('id'),
            'dni'      => '71068726', 
            'nombres'  => 'MONTALVO LOYOLA KENNETH OSCAR NICK',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3987')->value('id'),
            'dni'      => '70210291', 
            'nombres'  => 'MALLQUI VILLAR YANINA JAMILTA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3987')->value('id'),
            'dni'      => '41660754', 
            'nombres'  => 'QUISPE ROSAS LILIBETH',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3055')->value('id'),
            'dni'      => '71928750', 
            'nombres'  => 'HERRERAA ARIAS ROSITA YESSENIA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3005')->value('id'),
            'dni'      => '22520337', 
            'nombres'  => 'MATTOS  ACOSTA LUZ MARINA',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);
Postulante::firstOrCreate([
            'cargo_id' => Cargo::where('codigo', '3051')->value('id'),
            'dni'      => '47723302', 
            'nombres'  => 'HUERTA MATOS NEY SINDEL',
            'apellido_paterno'       => '',
            'apellido_materno'    => '',
        ]);



    }
}
