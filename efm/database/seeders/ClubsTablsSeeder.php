<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClubsTablsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs = [
            ['name' => 'Club de foot'],
            ['name' => 'Club de basket'],
            ['name' => 'Club de musique'],
            ['name' => 'Club de théâtre'],
            ['name' => 'Club de danse'],
            ['name' => 'Club de dessin'],
            ['name' => 'Club de cuisine'],
            ['name' => 'Club de lecture'],
            ['name' => 'Club de jeux de société'],
            ['name' => 'Club de jeux vidéo'],
        ];
        
        foreach ($clubs as $club) {
            \App\Models\Club::create($club);
        }

    }
}
