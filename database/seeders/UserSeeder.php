<?php

namespace Database\Seeders;

use App\Models\Postulante;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'postulante_id' => Postulante::where('dni', '45532962')->value('id'),
            'dni'           => '45532962', 
            'password'    => Hash::make('123456789'),
        ]);
    }
}
