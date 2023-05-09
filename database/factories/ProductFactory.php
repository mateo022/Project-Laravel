<?php

namespace Database\Factories;


use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $image =  $this->faker->image(storage_path('app/public/categoryImg'), 640, 480, null, false);
        $imagePath = str_replace('app/public/', '', $image);
        $name =  $this->faker->unique()->sentence(2);
    return [
        'img' => Storage::url($imagePath),
        'name' => $name,
        'description' =>  $this->faker->paragraph,
        'value' =>  $this->faker->randomFloat(2, 10, 100),
        'status' =>  $this->faker->randomElement([0, 1]),
        'category_id' => function () {
            return Category::inRandomOrder()->first()->id;
        }
    ];
    }
}
