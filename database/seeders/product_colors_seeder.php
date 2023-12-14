<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class product_colors_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product_colors = [
            [1, 1],
            [2, 2],
            [3, 3],
            [4, 4],
            [5, 5],
            [6, 6],
            [7, 7],
            [8, 8],
            [9, 9],
            [10, 10],
            [1, 11],
            [2, 12],
            [3, 1],
            [4, 2],
            [5, 3],
            [6, 4],
            [7, 5],
            [8, 6],
            [9, 7],
            [10, 8],
        ];

        foreach ($product_colors as $product_color) {
            DB::table('product_colors')->insert([
                'product_id' => $product_color[0],
                'color_id' => $product_color[1],
            ]);
        }
    }
}