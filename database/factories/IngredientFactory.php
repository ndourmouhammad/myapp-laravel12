<?php

namespace Database\Factories;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    protected $model = Ingredient::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ingredients = [
            'Pasta', 'Rice', 'Potatoes', 'Chicken', 'Beef', 'Pork', 'Fish',
            'Eggs', 'Milk', 'Cheese', 'Butter', 'Olive Oil', 'Garlic', 'Onion',
            'Tomatoes', 'Carrots', 'Broccoli', 'Spinach', 'Mushrooms', 'Bell Peppers',
            'Salt', 'Pepper', 'Basil', 'Oregano', 'Thyme', 'Rosemary', 'Cumin',
            'Curry Powder', 'Soy Sauce', 'Vinegar', 'Sugar', 'Flour', 'Bread Crumbs',
            'Coconut Milk', 'Lemon', 'Lime', 'Ginger', 'Cinnamon', 'Nutmeg'
        ];

        return [
            'name' => $this->faker->unique()->randomElement($ingredients),
        ];
    }
}
