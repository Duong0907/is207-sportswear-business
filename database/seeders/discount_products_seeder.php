<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class discount_products_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $discount_products = [
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
        ];

        foreach ($discount_products as $discount_product) {
            DB::table('discount_products')->insert([
                'discount_id' => $discount_product[0],
                'product_id' => $discount_product[1],
            ]);
        }
    }
}