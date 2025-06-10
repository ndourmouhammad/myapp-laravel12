<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer 20 ingrédients en utilisant la factory
        Ingredient::factory()->count(20)->create();

        // Créer quelques ingrédients spécifiques
        $specificIngredients = [
            ['name' => 'Pasta'],
            ['name' => 'Rice'],
            ['name' => 'Chicken'],
            ['name' => 'Beef'],
            ['name' => 'Garlic'],
            ['name' => 'Onion'],
            ['name' => 'Tomatoes'],
            ['name' => 'Olive Oil'],
            ['name' => 'Salt'],
            ['name' => 'Pepper']
        ];

        foreach ($specificIngredients as $ingredient) {
            Ingredient::firstOrCreate(
                ['name' => $ingredient['name']],
                $ingredient
            );
        }
    }
}
