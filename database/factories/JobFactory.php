<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition(): array
    {
        return [
            'user_id'           => User::factory(), // creates user too
            'title'             => $this->faker->jobTitle,
            'description'       => $this->faker->paragraphs(3, true),
            'salary'            => $this->faker->numberBetween(40000, 120000),
            'tags'              => implode(', ', $this->faker->words(3)),
            'job_type'          => $this->faker->randomElement([
                'Full-Time',
                'Part-Time',
                
            ]),
            'remote'            => $this->faker->boolean,
            'city'              => $this->faker->city,
            'state'             => $this->faker->state,
            'contact_email'     => $this->faker->safeEmail,
            'company_name'      => $this->faker->company,
            // 'company_description' => $this->faker->paragraphs(2, true),
        ];
    }
}
