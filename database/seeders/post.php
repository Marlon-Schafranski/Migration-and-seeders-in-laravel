<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class post extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("post")->insert([
            "PostTitle"=> "um titulo",
            "author"=> "um autor",
            "PublicationDate"=> "13/03/2024",
            "Content" => "um conteúdo",
            "Tags" => "created_at",
            

        ]);
    }
}
