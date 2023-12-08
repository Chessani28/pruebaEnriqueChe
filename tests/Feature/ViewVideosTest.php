<?php

namespace Tests\Feature;

use App\Models\Video;
use Livewire\Livewire;
use Tests\TestCase;

class ViewVideosTest extends TestCase
{
    /** @test */
    public function puede_renderizar_el_componente_con_registros_de_video()
    {
        Video::factory()->create([
            'title' => 'Video 1',
            'description' => 'Descripción del video 1',
            'video_url' => 'https://www.example.com/video1.mp4',
            'count_rep' => 10,
            'count_search' => 5,
        ]);

        Video::factory()->create([
            'title' => 'Video 2',
            'description' => 'Descripción del video 2',
            'video_url' => 'https://www.example.com/video2.mp4',
            'count_rep' => 15,
            'count_search' => 8,
        ]);

        Livewire::test('view-videos')
            ->set('search', 'Video 1')
            ->assertSee('Video 1')
            ->assertSee('Descripción del video 1')
            ->assertSee('https://www.example.com/video1.mp4')
            ->assertSee('10')
            ->assertSee('5');
    }
}
