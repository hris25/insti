<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs = [
            [
                'nom' => 'Club de Programmation',
                'description' => 'Développez vos compétences en programmation à travers des projets passionnants et des challenges stimulants.',
                'image' => 'images/clubs/programming.png',
                'activites' => [
                    'Ateliers hebdomadaires de programmation',
                    'Participation à des hackathons',
                    'Projets collaboratifs avec des entreprises',
                    'Formation sur les dernières technologies'
                ],
                'horaires' => 'Mardi et Jeudi, 18h-20h',
                'lieu' => 'Laboratoire informatique, Bâtiment A',
                'actif' => true
            ],
            [
                'nom' => 'Club de Basket',
                'description' => 'Rejoignez notre équipe de basket pour des entraînements réguliers et des compétitions inter-universitaires.',
                'image' => 'images/clubs/people.png',
                'activites' => [
                    'Entraînements réguliers avec coach qualifié',
                    'Participation au championnat universitaire',
                    'Tournois inter-universitaires',
                    'Séances de préparation physique'
                ],
                'horaires' => 'Lundi et Mercredi, 17h-19h',
                'lieu' => 'Gymnase universitaire',
                'actif' => true
            ],
            [
                'nom' => 'Club de Football',
                'description' => 'Perfectionnez votre technique et participez à des tournois passionnants avec notre équipe de football.',
                'image' => 'images/clubs/shoot.png',
                'activites' => [
                    'Entraînements tactiques et techniques',
                    'Matchs amicaux réguliers',
                    'Participation aux tournois régionaux',
                    'Équipe masculine et féminine'
                ],
                'horaires' => 'Mardi et Vendredi, 16h-18h',
                'lieu' => 'Terrain de football du campus',
                'actif' => true
            ]
        ];

        foreach ($clubs as $club) {
            Club::create($club);
        }
    }
}
