<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{

    public function run(): void
    {
        Video::create([
            'title' => 'Drake - Passionfruit',
            'description' => 'Video musical de Drake con la canción Passionfruit',
            'video_url' => 'https://www.youtube.com/embed/fHR1CZ9x61E?si=4tZ0ZN2TlpOZMbf-',
            'count_rep' => 0,
            'count_search' => 0,
        ]);

        Video::create([
            'title' => 'QUEVEDO || BZRP Music Sessions #52',
            'description' => 'Video musical de BZRP conjunto con QUEVEDO ("Quedate que las noches sin ti duelen")',
            'video_url' => 'https://www.youtube.com/embed/ckJ0hZU2p0M?si=bfy042eoNAbAJNjp',
            'count_rep' => 0,
            'count_search' => 0,
        ]);

        Video::create([
            'title' => 'RUIDO BLANCO para LEER y ESTUDIAR',
            'description' => 'Video musical con Ruido blanco para poder estudiar, leer o hacer algunas actividades',
            'video_url' => 'https://www.youtube.com/embed/APXp4PGZSiI?si=KfGDEWLDF7KwA8eO',
            'count_rep' => 0,
            'count_search' => 0,
        ]);

    }
}
