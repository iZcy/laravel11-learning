<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'color' => 'red',
        ]);

        Category::create([
            'name' => 'Vue.js',
            'slug' => 'vue-js',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'React.js',
            'slug' => 'react-js',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'Tailwind CSS',
            'slug' => 'tailwind-css',
            'color' => 'yellow',
        ]);

        Category::create([
            'name' => 'Alpine.js',
            'slug' => 'alpine-js',
            'color' => 'indigo',
        ]);
    }
}
