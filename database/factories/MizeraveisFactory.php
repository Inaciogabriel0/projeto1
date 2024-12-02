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
            'situacao' => $this->faker->text(200),
            'cep' => $this->faker->regexify('[0-9]{5}-[0-9]{3}'),
            'imagem' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'), // Gera URL de uma imagem
        ];
    }
}
