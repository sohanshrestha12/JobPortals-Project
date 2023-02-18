<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Title' => $this->faker->randomElement(['Laravel','Senior Developer','Manager']),
            'ExpiryDate' => '2023-03-24',
            'Category' => 'IT & Networking',
            'Salary' => 50000,
            'Skills' => 'Html,Css,Js',
            'Description' => $this->faker->regexify('[A-Za-z0-9]{70}'),
            'Type' => $this->faker->randomElement(['Freelance','Part Time','Full Time']),
            'experience' => $this->faker->randomElement(['Expert','2 Years','3 Years']),
            'status' => 1,
            'EducationDegree' => 'Doctoral Degree',
            'Education' => 'BIT',
            'Company_id' => $this->faker->numberBetween(1,2)
        ];
    }
}
