<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumsTableSeeder extends Seeder
{
    public function run()
    {
        // Créer un album photo
        Album::create([
            'title' => 'Album Photo',
            'cover_image' => 'images/gallery/students-construction.jpg',
            'type' => 'photo',
            'media' => [
                'images/gallery/students-construction.jpg',
                'images/gallery/students-lab.jpg',
                'images/gallery/students-group.jpg',
                // Ajoutez toutes les images que vous avez dans le dossier
            ],
        ]);

        // Créer un album vidéo
        Album::create([
            'title' => 'Album Vidéo',
            'cover_image' => 'images/gallery/video_cover.jpg', // Assurez-vous d'avoir une image de couverture
            'type' => 'video',
            'media' => [
                'https://www.youtube.com/embed/1qLy0y8w6yg',
                'https://www.youtube.com/embed/2qLy0y8w6yg',
                'https://www.youtube.com/embed/3qLy0y8w6yg',
                // Ajoutez toutes les vidéos que vous avez dans le dossier
            ],
        ]);
    }
}
