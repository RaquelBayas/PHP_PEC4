<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'author'=> $this->faker->name(),
            'published_at'=>$this->faker->datetime(),
            'content' => $this->faker->text(),
            'img' => 'https://picsum.photos/id/'.rand(1,400).'/600/300'            
        ];
    }
}
