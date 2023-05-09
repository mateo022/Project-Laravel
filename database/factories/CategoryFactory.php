<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageUrls = [
            asset('assets/logo2.png'),
            asset('assets/oakley.jpg'),
            asset('assets/yamaha.jpg'),
            // agregar aquí más URLs de imágenes de la carpeta public/assets
        ];
        
        return [
            'img' => $this->faker->randomElement($imageUrls),
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'priority' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}