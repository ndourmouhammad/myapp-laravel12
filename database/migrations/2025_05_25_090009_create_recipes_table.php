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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        $recipes = [
            1 => ['title' => 'Spaghetti Carbonara'],
            2 => ['title' => 'Chicken Curry'],
            3 => ['title' => 'Vegetable Stir Fry']
        ];

        foreach ($recipes as $recipe) {
            DB::table('recipes')->insert([
                'title' => $recipe['title'],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
