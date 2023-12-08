<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Livewire\Login;
use App\Models\Video;
use Livewire\Livewire;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function el_componente_se_muestra_correctamente()
    {
        Livewire::test(Login::class)
            ->assertSee('¡Hola, mundo!');
    }
    public function puede_renderizar_el_componente_con_registros_de_video()
    {
        Video::factory()->create(['title' => 'Video 1']);
        Video::factory()->create(['title' => 'Video 2']);

        Livewire::test('view-videos')
            ->set('search', 'Video 1')
            ->assertSee('Video 1')
            ->assertDontSee('Video 2');
    }
}
