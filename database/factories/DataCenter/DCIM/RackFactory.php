<?php

namespace Database\Factories\DataCenter\Dcim;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataCenter\Dcim\Rack>
 */
class RackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'app_token_id' => rand(1, 100), // Replace with appropriate logic for the foreign key
            'user_id' => rand(1, 100), // Replace with appropriate logic for the foreign key
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'site_id' => rand(1, 10), // Replace with appropriate logic for the foreign key
            'location_id' => rand(1, 10), // Replace with appropriate logic for the foreign key
            'facility_id' => rand(1, 10), // Replace with appropriate logic for the foreign key or make it nullable
            'tenant_id' => rand(1, 10), // Replace with appropriate logic for the foreign key or make it nullable
            'status' => $this->faker->randomElement(['Active', 'Inactive', 'Under Maintenance']),
            'role' => $this->faker->randomElement(['Admin', 'User', null]),
            'description' => $this->faker->paragraph,
            'serial_number' => $this->faker->unique()->ean8,
            'asset_tag' => $this->faker->uuid,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
