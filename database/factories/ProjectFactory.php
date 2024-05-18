<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'client_name' => $this->faker->name,
            'client_city' => $this->faker->city,
            'description_project' => $this->faker->text,
            'challenge' => $this->faker->text,
            'description_result' => $this->faker->text,
            'category_project_id' => 1,    
        ];
    }
}
