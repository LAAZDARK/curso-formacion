<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'lastname' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'password' => '123456', //123456
            'gender' => $this->faker->randomElement(['Mujer', 'Hombre', 'Otro']),
            'birthday' => '05/11/1996', //123456
            'nationality' => $this->faker->randomElement(['México', 'Estados Unidos', 'Guatemala']),
            'address' => $this->faker->address,
            'salary' => $this->faker->numberBetween(550, 1600),
            'nif' => Str::random(10),
            'status' => $this->faker->randomElement([User::STATUS_TRUE, User::STATUS_FALSE]),
            'signature' => $this->faker->randomElement([User::STATUS_TRUE, User::STATUS_FALSE]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
