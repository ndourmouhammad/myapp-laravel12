<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $ingredients = [
            1 => ['name' => 'Pasta'],
            2 => ['name' => 'Eggs'],
            3 => ['name' => 'Cheese'],
            4 => ['name' => 'Bacon'],
            5 => ['name' => 'Chicken'],
            6 => ['name' => 'Coconut Milk'],
            7 => ['name' => 'Curry Powder'],
            8 => ['name' => 'Broccoli'],
            9 => ['name' => 'Carrots'],
            10 => ['name' => 'Soy Sauce'],
            11 => ['name' => 'Garlic']
        ];

        foreach ($ingredients as $ingredient) {
            DB::table('ingredients')->insert([
                'name' => $ingredient['name'],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients');
    }
};
