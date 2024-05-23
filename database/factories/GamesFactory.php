<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Games>
 */
class GamesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nome' => fake ()->sentence(),
            'descricao' => fake()->realText(),
            'status' => fake()->randomElement(['pendente','realizando','completado']),
            'image_path'=> fake()-> imageUrl(),
            'usuario_designado'=>1,
            'criado_por'=>1,
            'atualizado_por'=>1,
        ];
    }
}
