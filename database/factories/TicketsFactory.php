<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => implode(' ', fake()->words(fake()->numberBetween(3, 7))),
            'status' => fake()->randomElement(['open', 'pending', 'closed']),
            'assigner' => 1,
            'assignee' => fake()->randomElement([2,3,4]),
            'priority' => fake()->randomElement(['urgent', 'high', 'medium', 'low']),
            'request_content' => implode("\n\n", fake()->paragraphs(3)),
            'created_at' => now()
        ];
    }
}
