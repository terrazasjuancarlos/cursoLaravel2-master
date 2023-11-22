<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\materias;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        materias::create([
            'nombre'    =>'Calculo',
            'semestre'=>5,
            'especialidad'=>'Programación'
        ]);
    }
}
