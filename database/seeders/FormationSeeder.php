<?php
namespace Database\Seeders;
use App\Models\Formation;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    public function run()
    {
        Formation::create([
            'title' => 'Informatique et Télécoms',
            'category' => 'informatique',
            'diploma' => 'Licence professionnelle en Génie Électrique et Informatique',
            'description' => 'Formation en développement logiciel et télécommunications',
            'duration' => '3 ans',
            'requirements' => 'BAC C, D, E, F2',
            'career_opportunities' => json_encode([
                'Développeur d\'applications',
                'Administrateur systèmes et réseaux',
                'Analyste programmeur',
                'Technicien en télécommunications',
                'Consultant IT'
            ]),
            'image' => 'informatique.jpg'
        ]);

        Formation::create([
            'title' => 'Génie Civil',
            'category' => 'batiment',
            'diploma' => 'Licence professionnelle en Génie Civil (GC)',
            'description' => 'Formation en construction et travaux publics',
            'duration' => '3 ans',
            'requirements' => 'BAC C, D, E, F4 ; DT/BTP',
            'career_opportunities' => json_encode([
                'Technicien d\'étude en entreprise',
                'Chef Service d\'entreprise des TP',
                'Conducteur des travaux du Génie Civil',
                'Contrôleurs de chantiers',
                'Techniciens d\'essais dans les laboratoires géotechniques',
                'Assistant des experts géomètres',
                'Assistant dans les cabinets d\'architecture, les agences immobilières'
            ]),
            'image' => 'genie-civil2.png'
        ]);

        Formation::create([
            'title' => 'Électrotechnique et Électronique',
            'category' => 'batiment',
            'diploma' => 'Licence professionnelle en Génie Électrique et Informatique',
            'description' => 'Formation en électricité industrielle et électronique',
            'duration' => '3 ans',
            'requirements' => 'BAC C, D, E, F3',
            'career_opportunities' => json_encode([
                'Technicien en électricité industrielle',
                'Responsable maintenance électrique',
                'Technicien en installations électriques',
                'Technicien en automatismes',
                'Technicien en électronique de puissance',
                'Installateur en systèmes électriques'
            ]),
            'image' => 'electronique.jpg'
        ]);

        Formation::create([
            'title' => 'Maintenance Automobile',
            'category' => 'mecanique',
            'diploma' => 'Licence professionnelle en Maintenance des Systèmes',
            'description' => 'Formation en maintenance et diagnostic automobile',
            'duration' => '3 ans',
            'requirements' => 'BAC C, D, E, F1',
            'career_opportunities' => json_encode([
                'Technicien diagnostic automobile',
                'Chef d\'atelier mécanique',
                'Responsable maintenance véhicules',
                'Expert en diagnostic électronique',
                'Technicien en systèmes embarqués',
                'Conseiller technique automobile'
            ]),
            'image' => 'electronique1.jpg'
        ]);

        Formation::create([
            'title' => 'Maintenance des Systèmes Industriels',
            'category' => 'mecanique',
            'diploma' => 'Licence professionnelle en Maintenance des Systèmes',
            'description' => 'Formation en maintenance industrielle et automatismes',
            'duration' => '3 ans',
            'requirements' => 'BAC C, D, E, F1',
            'career_opportunities' => json_encode([
                'Technicien de maintenance industrielle',
                'Responsable maintenance préventive',
                'Technicien en automatismes industriels',
                'Chef d\'équipe maintenance',
                'Technicien en mécanique industrielle',
                'Responsable service après-vente'
            ]),
            'image' => 'informatique.jpg'
        ]);

        Formation::create([
            'title' => 'Énergies Renouvelables et Énergétique',
            'category' => 'mecanique',
            'diploma' => 'Licence professionnelle en Génie Énergétique',
            'description' => 'Formation en énergies renouvelables et efficacité énergétique',
            'duration' => '3 ans',
            'requirements' => 'BAC C, D, E, F1',
            'career_opportunities' => json_encode([
                'Technicien en énergies renouvelables',
                'Consultant en efficacité énergétique',
                'Technicien en installations solaires',
                'Responsable projets énergétiques',
                'Expert en audit énergétique',
                'Technicien en génie climatique'
            ]),
            'image' => 'energie.jpg'
        ]);
    }
}