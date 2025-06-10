<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer 10 recettes avec des ingrédients aléatoires
        Recipe::factory()
            ->count(10)
            ->create()
            ->each(function ($recipe) {
                // Attacher 3 à 6 ingrédients aléatoires à chaque recette
                $ingredients = Ingredient::inRandomOrder()
                    ->take(rand(3, 6))
                    ->get();
                $recipe->ingredients()->attach($ingredients);
            });

        // Créer quelques recettes spécifiques avec des ingrédients prédéfinis
        $specificRecipes = [
            [
                'title' => 'Spaghetti Carbonara',
                'ingredients' => ['Pasta', 'Eggs', 'Cheese', 'Bacon', 'Garlic', 'Pepper']
            ],
            [
                'title' => 'Chicken Curry',
                'ingredients' => ['Chicken', 'Rice', 'Coconut Milk', 'Curry Powder', 'Onion', 'Garlic']
            ],
            [
                'title' => 'Vegetable Stir Fry',
                'ingredients' => ['Broccoli', 'Carrots', 'Bell Peppers', 'Soy Sauce', 'Garlic', 'Olive Oil']
            ]
        ];

        foreach ($specificRecipes as $recipeData) {
            $recipe = Recipe::firstOrCreate(
                ['title' => $recipeData['title']],
                ['title' => $recipeData['title']]
            );

            $ingredients = Ingredient::whereIn('name', $recipeData['ingredients'])->get();
            $recipe->ingredients()->sync($ingredients);
        }
    }
}
