<?php

namespace Database\Seeders;

use App\Models\Cargo;
use App\Models\Examen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3051')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16:10:00')), 'hora_fin' => date('H:i:s', strtotime('23:30:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '2991')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16:10:00')), 'hora_fin' => date('H:i:s', strtotime('23:30:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4211')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4219')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '2997')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3005')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3055')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '2994')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3027')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4186')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3934')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3987')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3990')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3991')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3995')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:55:00')), 'hora_fin' => date('H:i:s', strtotime('15:15:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4209')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4200')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4202')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4194')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4210')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4203')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4199')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4208')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4195')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4196')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4204')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4197')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4198')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4201')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4207')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4206')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4205')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16.35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3757')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3912')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3957')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4003')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4006')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4222')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4000')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3101')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4220')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4217')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4225')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '2980')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4218')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4215')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '2971')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4216')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4226')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4221')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14.45:00')), 'hora_fin' => date('H:i:s', strtotime('16:05:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4223')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('17:00:00')), 'hora_fin' => date('H:i:s', strtotime('17:20:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4224')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('17:00:00')), 'hora_fin' => date('H:i:s', strtotime('17:20:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3011')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('15:20:00')), 'hora_fin' => date('H:i:s', strtotime('15:40:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4233')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('15:20:00')), 'hora_fin' => date('H:i:s', strtotime('15:40:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '3961')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('17:00:00')), 'hora_fin' => date('H:i:s', strtotime('17:20:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4212')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16:10:00')), 'hora_fin' => date('H:i:s', strtotime('23:30:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4234')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('16:35:00')), 'hora_fin' => date('H:i:s', strtotime('16:55:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4227')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:30:00')), 'hora_fin' => date('H:i:s', strtotime('14:50:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4228')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:30:00')), 'hora_fin' => date('H:i:s', strtotime('14:50:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4229')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('14:30:00')), 'hora_fin' => date('H:i:s', strtotime('14:50:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4232')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('17:00:00')), 'hora_fin' => date('H:i:s', strtotime('17:20:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4213')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime('17:00:00')), 'hora_fin' => date('H:i:s', strtotime('17:20:00')), 'duracion' => 20 ]);
        Examen::firstOrCreate([ 'cargo_id' => Cargo::where('codigo', '4214')->value('id'), 'titulo' => 'EXAMEN DE CONOCIMIENTO', 'fecha' => date('Y-m-d'), 'hora_inicio' => date('H:i:s', strtotime(':00')), 'hora_fin' => date('H:i:s', strtotime(':00')), 'duracion' => 20 ]);



    }
}
