<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4,true),
            'description' => $this->faker->sentence(4,true),
            'price' => $this->faker->numberBetween(15,150),
            'author_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
