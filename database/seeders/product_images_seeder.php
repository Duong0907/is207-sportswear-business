<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class product_images_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product_images = [
            [1, 1],
            [2, 2],
            [3, 3],
            [4, 4],
            [5, 5],
            [6, 6],
            [7, 7],
            [9, 1],
            [10, 2],
            [1, 3],
            [2, 4],
            [3, 5],
            [4, 6],
            [5, 7],
            [7, 1],
            [8, 2],
            [9, 3],
            [10, 4],
        ];

        foreach ($product_images as $product_image) {
            DB::table('product_images')->insert([
                'product_id' => $product_image[0],
                'image_id' => $product_image[1],
            ]);
        }
    }
}