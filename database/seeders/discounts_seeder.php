<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class discounts_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $discounts = [
            ['2023-01-01', '2023-01-15', 10],
            ['2023-02-01', '2023-02-28', 15],
            ['2023-03-05', '2023-03-20', 8],
            ['2023-04-10', '2023-04-25', 12],
            ['2023-05-15', '2023-05-31', 18],
            ['2023-06-01', '2023-06-30', 10],
            ['2023-07-05', '2023-07-20', 15],
            ['2023-08-01', '2023-08-31', 20],
            ['2023-09-10', '2023-09-25', 8],
            ['2023-10-01', '2023-10-15', 12],
        ];

        foreach ($discounts as $discount) {
            DB::table('discounts')->insert([
                'start_date' => $discount[0],
                'end_date' => $discount[1],
                'discount_percent' => $discount[2],
            ]);
        }
    }
}