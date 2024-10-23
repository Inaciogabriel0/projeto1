<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mizeraveis>
 */
class MizeraveisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),  
            'senha' => Hash::make('senha123'),  
            'cpf' => $this->faker->numerify('###########'),  
            'telefone' => $this->faker->phoneNumber(), 
            'email' => $this->faker->unique()->safeEmail(),
            'situaçao' => $this->faker->text(200),
        ];
    }
}
