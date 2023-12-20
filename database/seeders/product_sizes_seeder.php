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
            [1, 9],
            [1, 10],
            [1, 11],
            [2, 9],
            [2, 10],
            [3, 10],
            [3, 11],
            [4, 11],
            [4, 10],
            [5, 11],
            [5, 12],
            [6, 12],
            [6, 13],
            [7, 13],
            [7, 14],
            [8, 12],
            [8, 14],
            [9, 11],
            [9, 12],
            [10, 11],
            [10, 12],
            [11, 12],
            [11, 13],
        ];

        foreach ($product_sizes as $product_size) {
            DB::table('product_sizes')->insert([
                'product_id' => $product_size[0],
                'size_id' => $product_size[1],
            ]);
        }
    }
}
