<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class product_sizes_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product_sizes = [
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
            [3, 13],
            [4, 14],
            
        ];

        foreach ($product_sizes as $product_size) {
            DB::table('product_sizes')->insert([
                'product_id' => $product_size[0],
                'size_id' => $product_size[1],
            ]);
        }
    }
}