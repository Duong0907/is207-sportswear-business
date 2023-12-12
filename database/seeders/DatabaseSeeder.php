<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);  
        $this->call([
            product_objects_seeder::class,
            product_types_seeder::class,
            images_seeder::class,
            colors_seeder::class,
            sizes_seeder::class,
            products_seeder::class,
            product_images_seeder::class,
            product_colors_seeder::class,
            product_sizes_seeder::class,
            discounts_seeder::class,
            discount_products_seeder::class,
            users_seeder::class,
            comments_seeder::class
        ]);
    }
}
