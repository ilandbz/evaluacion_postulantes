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
        Examen::firstOrCreate([
            'cargo_id'      => Cargo::where('codigo', '004205')->value('id'),
            'titulo'        => 'EXAMEN DE CONVOCATORIA NRO 1', 
            'fecha'         => Date::now()->format('Y-m-d'),
            'hora_inicio'   => Date::now()->format('H:i:s'),
            'hora_fin'      => Date::now()->addMinutes(10)->format('H:i:s'),
            'duracion'      => 10
        ]);

        Examen::firstOrCreate([
            'cargo_id'      => Cargo::where('codigo', '003055')->value('id'),
            'titulo'        => 'EXAMEN DE CONVOCATORIA NRO 1', 
            'fecha'         => Date::now()->format('Y-m-d'),
            'hora_inicio'   => Date::now()->format('H:i:s'),
            'hora_fin'      => Date::now()->addMinutes(10)->format('H:i:s'),
            'duracion'      => 10
        ]);



    }
}
