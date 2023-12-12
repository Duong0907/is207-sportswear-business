<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class product_objects_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_objects')->insert([
            [
                'object_name' => 'Nam',
            ],
            [
                'object_name' => 'Nữ',
            ],
            [
                'object_name' => 'Trẻ em',
            ],
            [
                'object_name' => 'Unisex',
            ],
        ]);
    }
}