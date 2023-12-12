<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class product_types_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_types')->insert([
            ['type_name' => 'Áo'],
            ['type_name' => 'Quần'],
            ['type_name' => 'Giày'],
            ['type_name' => 'Tất'],
        ]);
    }
}