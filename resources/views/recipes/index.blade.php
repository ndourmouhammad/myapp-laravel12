<x-layout>
    <h1>My recipes</h1>

   @foreach($recipes as $recipe)
        <p><a href="{{ route('recipes.show', $recipe->id) }}" class="underline text-blue-500">{{ $recipe->title }}</a></p>
   @endforeach
</x-layout>