<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'food_name'=> $this-> faker->word,
            'price' => $this->faker->randomFloat(2,100,3000),
            'description'=> $this-> faker->realText(200, 2),

        ];
    }
}
