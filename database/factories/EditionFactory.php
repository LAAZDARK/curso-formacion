<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class EditionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_inicio' => $this->faker->randomElement(['8', '9', '10']),
            'fecha_fin' => $this->faker->randomElement(['11', '12', '13']),
            'horario' => $this->faker->randomElement(['Mañana', 'Tarde']),
            'direccion' => $this->faker->address,
            'course_id' => Course::all()->random()->id,
            'teacher_id' => User::all()->where('status', '1')->random()->id
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
