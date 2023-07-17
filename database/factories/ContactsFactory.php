<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ContactsFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'email' => fake()->unique(true)->safeEmail(),
            'phonenumber' => fake()->phonenumber(),
            'message' => fake()->text(),
            'password' => fake()->password(),
        ];
    }
}
