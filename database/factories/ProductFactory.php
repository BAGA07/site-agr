<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 10, 500), // Prix entre 10 et 500
            'stock' => $this->faker->numberBetween(0, 100), // Stock entre 0 et 100
            
            //'category_id' => \App\Models\Category::inRandomOrder()->first()?->id, // Catégorie aléatoire
        ];
    }
}

