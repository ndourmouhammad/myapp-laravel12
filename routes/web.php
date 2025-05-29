<?php

use App\Models\Recipe;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('homepage');

Route::view('/projects', 'projects')->name('projects');

Route::get('/recipes', function () {
    $recipes = Recipe::all();

    return view('recipes.index', compact('recipes'));
})->name('recipes.index');

Route::get('/recipes/{id}', function (int $id) {
    $recipe = Recipe::findOrFail($id);

    return view('recipes.show', compact('recipe'));
})->name('recipes.show');

// Route::get('/attach', function () {
//         $ingredients = [
//             1 => ['name' => 'Pasta', 'recipe_id' => 1],
//             2 => ['name' => 'Eggs', 'recipe_id' => 1],
//             3 => ['name' => 'Cheese', 'recipe_id' => 1],
//             4 => ['name' => 'Bacon', 'recipe_id' => 1],
//             5 => ['name' => 'Chicken', 'recipe_id' => 2],
//             6 => ['name' => 'Coconut Milk', 'recipe_id' => 2],
//             7 => ['name' => 'Curry Powder', 'recipe_id' => 2],
//             8 => ['name' => 'Broccoli', 'recipe_id' => 3],
//             9 => ['name' => 'Carrots', 'recipe_id' => 3],
//             10 => ['name' => 'Soy Sauce', 'recipe_id' => 3],
//             11 => ['name' => 'Garlic', 'recipe_id' => 3]
//         ];

//         foreach($ingredients as $key => $ingredient) {
//             $recipe = Recipe::find($ingredient['recipe_id']);

//             $recipe->ingredients()->attach($key);
//         }

//         dd('ok');
// });