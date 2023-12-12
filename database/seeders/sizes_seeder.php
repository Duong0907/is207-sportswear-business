<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sizes_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = [
            ['XS'],
            ['S'],
            ['M'],
            ['L'],
            ['XL'],
            ['XXL'],
            ['XXXL'],
            ['38'],
            ['39'],
            ['40'],
            ['41'],
            ['42'],
            ['43'],
            ['44'],
        ];

        foreach ($sizes as $size) {
            DB::table('sizes')->insert([
                'size_name' => $size[0],
            ]);
        }
    }
}