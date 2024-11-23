<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_cover' => $this->faker->imageUrl(200, 300, 'books'),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'primary_author' => $this->faker->name,
            'publisher' => $this->faker->company,
            'published_year' => $this->faker->year,
            'isbn' => $this->faker->isbn13,
        ];
    }
}
