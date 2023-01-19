<?php

namespace Database\Factories;
use App\Models\Table;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name'=> $this-> faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number'=> $this-> faker->phoneNumber,
            'email'=> $this-> faker->email,
            'table_number'=> $this-> faker->randomDigit,
            'reservation_date'=> $this-> faker->date,
            'table_id' => Table::first(),
            'user_id' => Table::first()

        ];
    }
}
