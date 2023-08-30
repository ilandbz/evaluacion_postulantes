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
            'cargo_id' => Cargo::where('nombre', 'INGENIERO INFORMATICO')->value('id'),
            'dni'      => '45532962', 
            'nombres'  => 'Cristian',
            'apellido_paterno'       => 'Figueroa',
            'apellido_materno'    => 'Ferrer',
        ]);
    }
}
