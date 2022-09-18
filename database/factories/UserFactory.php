<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    // protected $model = User::class;
    public function definition()
    {
        return [
            'lastname' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'sex' => $this->faker->boolean(),
            'description'=>$this->faker->paragraph('4'),
            'choice1'=>$this->faker->numberBetween(0,10),
            'choice2'=>$this->faker->numberBetween(0,10),
            'choice3'=>$this->faker->numberBetween(0,10),
            'choice4'=>$this->faker->numberBetween(0,10),
            'choice5'=>$this->faker->numberBetween(0,10),
            'choice6'=>$this->faker->numberBetween(0,10),
            'choice7'=>$this->faker->numberBetween(0,10),
            'choice8'=>$this->faker->numberBetween(0,10),
            'choice9'=>$this->faker->numberBetween(0,10),
            'choice10'=>$this->faker->numberBetween(0,10),
            'email_verified_at' => $this->faker->date('d-m-Y','now'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
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
