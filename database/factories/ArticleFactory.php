<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->text(25);
        $categories = Category::all()->toArray();
        return [
            'titre' => $title,
            'slug' => Str::slug($title),
            'image' => fake()->image(public_path()),
            'contenu' => fake()->randomHtml(),
            'category_id' => $categories[rand(0, 2)]['id'],
            'user_id' => User::limit(1)->first()->id
        ];
    }
}
