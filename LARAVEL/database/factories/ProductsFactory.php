<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use FakerRestaurant\Restaurant;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        return [
            'productName' => $faker->unique()->foodName(),
            'productDescription' => $faker->paragraph(),
            'left' => $faker->randomDigit(),
            'price' => $faker->randomNumber(2),
            'supplierName' => $faker->name(),
            'supplierAddress' => $faker->address(),
            'Email' => $faker->unique()->safeEmail(),
            'dateSupplied' => now(),
        ];
    }
}
