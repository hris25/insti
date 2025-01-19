<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actualite;

class ActualitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actualite::create([
            'image' => 'images/slide1.png',
            'titre' => 'Cérémonie de remise de diplômes 2024',
            'description' => 'Plus de 200 diplômés ont été célébrés lors de la 22ème cérémonie de remise de diplômes de l\'IFRI. Une promotion exceptionnelle marquée par l\'excellence et l\'innovation.',
        ]);

        Actualite::create([
            'image' => 'images/slide2.png',
            'titre' => 'Lancement du nouveau programme IA & Data Science',
            'description' => 'L\'IFRI enrichit son offre de formation avec un nouveau programme spécialisé en Intelligence Artificielle et Science des Données, en partenariat avec des entreprises leaders du secteur.',
        ]);

        Actualite::create([
            'image' => 'images/slide3.png',
            'titre' => 'Hackathon Innovation Tech 2024',
            'description' => 'Plus de 150 étudiants ont participé au grand Hackathon annuel de l\'IFRI, développant des solutions innovantes pour répondre aux défis technologiques actuels.',
        ]);

        Actualite::create([
            'image' => 'images/slide4.png',
            'titre' => 'Partenariat International',
            'description' => 'L\'IFRI renforce sa coopération internationale avec la signature d\'un nouveau partenariat stratégique pour la mobilité étudiante et la recherche conjointe.',
        ]);
 
    }
}
