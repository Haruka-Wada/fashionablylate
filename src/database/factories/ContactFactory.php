<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1, 3),
            'email' => $this->faker->safeEmail,
            'tell' => $this->faker->numberBetween(10, 15),
            'address' => $this->faker->city,
            'building' => $this->faker->word,
            'detail' => $this->faker->sentence,
            'created_at' => $this->faker->date
        ];
    }
}
