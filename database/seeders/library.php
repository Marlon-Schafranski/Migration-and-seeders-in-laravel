<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class library extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("library")->insert([
            'Title' => 'um titulo',
            'AuthorPublisher' => 'Autor tal',
            'PublicationDate' => '13/03/2024',
            'GenreType' => 'ação',
            'AvailableCopies' => '100'
        ]);
    }
}
