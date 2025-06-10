<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $recipeTitles = [
            'Classic Spaghetti Carbonara',
            'Creamy Chicken Curry',
            'Vegetable Stir Fry',
            'Homemade Pizza Margherita',
            'Beef Bourguignon',
            'Greek Moussaka',
            'Thai Green Curry',
            'Vegetable Lasagna',
            'Chicken Tikka Masala',
            'Seafood Paella',
            'Beef Stir Fry',
            'Vegetable Soup',
            'Chicken Parmesan',
            'Shrimp Scampi',
            'Vegetable Curry'
        ];

        return [
            'title' => $this->faker->unique()->randomElement($recipeTitles),
            'user_id' => User::factory(),
        ];
    }
}
