<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $snackFoodNamesPhilippines = [
            'Chicharon', 'Turon', 'Puto', 'Kutsinta', 'Bibingka', 'Halo-Halo', 'Taho', 'Empanada', 'Ensaymada',
            'Pan de Coco', 'Pandesal', 'Hopiang Ube', 'Siopao', 'Banana Cue', 'Camote Cue', 'Palitaw', 'Tikoy', 'Sapin-Sapin',
            'Leche Flan', 'Buko Pie', 'Turon', 'Champorado', 'Suman', 'Espasol', 'Cassava Cake', 'Puto Bumbong', 'Maja Blanca',
            'Kakanin', 'Ginataang Bilo-Bilo', 'Carioca', 'Tinutong na Saging', 'Binatog', 'Maruya', 'Sorbetes',
            'Puto Cheese', 'Bicho-Bicho', 'Kalamay', 'Kropek ', 'Balut',
            // Add more snack food names as needed
        ];
        $imagePath = public_path('images/uploads');
        $images = glob($imagePath . '/*.{jpg,png,gif}', GLOB_BRACE);
        $image = str_replace($imagePath . '/', '', $this->faker->randomElement($images));
        return [
            //
            'name' => $this->faker->randomElement($snackFoodNamesPhilippines),
            'price' => $this->faker->numberBetween(10, 50),
            'description' => $this->faker->sentence(7),
            'image' => $image
        ];
    }
}
