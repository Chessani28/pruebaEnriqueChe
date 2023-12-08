<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Livewire;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'role_id' => 2,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
    public function puede_renderizar_el_componente_con_registros_de_usuarios()
    {
        // Crear algunos registros de prueba en la base de datos
        User::factory()->create([
            'name' => 'Usuario 1',
            'email' => 'usuario1@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 1,
        ]);

        User::factory()->create([
            'name' => 'Usuario 2',
            'email' => 'usuario2@example.com',
            'password' => bcrypt('password456'),
            'role_id' => 2,
        ]);

        Livewire::test('view-users')
            ->set('search', 'Usuario 1') // Filtrar por el nombre del primer usuario
            ->assertSee('Usuario 1') // Verificar que se muestre el nombre del primer usuario
            ->assertSee('usuario1@example.com') // Verificar que se muestre el correo del primer usuario
            ->assertSee('1'); // Verificar que se muestre el ID del rol del primer usuario
    }
}
