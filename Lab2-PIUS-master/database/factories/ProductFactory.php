<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'code'=>$this->faker->ean8(),
            'description'=>$this->faker->text(),
            'price'=>$this->faker->numberBetween(100,1000),
            'numberUnits'=>$this->faker->numberBetween(10,500),
            'urlimg'=>$this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}