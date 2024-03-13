<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateStudents extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'name' => 'Marlon',
            'DateOfBirth' => '10/09/2002',
            'email' => 'marlon@example.com',
            'RegistrationNumber' => 'abc123',
            'ClassCourse' => 'Analise de Sistemas',

        ]);
    }
}
