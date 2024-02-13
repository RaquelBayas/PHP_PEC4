<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $news = \App\Models\News::factory(100)->create();
        $categories = \App\Models\Category::factory(5)->create();
        \App\Models\CategoryNews::factory(100)->create();

        $news->each(function ($new) use ($categories) {
            $new->categories()->attach(
                $categories->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
