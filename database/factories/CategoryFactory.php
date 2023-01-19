<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        return [

            'category'=> $this-> faker->word,
            'description'=> $this-> faker->realText(200, 2),
        ];
    }

    public function show(Category $category){
        return $this->with ('menus')->first();
    }
}
