<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class colors_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['Trắng', '#ffffff'],
            ['Đen', '#000000'],
            ['Đỏ', '#ff0000'],
            ['Vàng', '#ffff00'],
            ['Xám', '#808080'],
            ['Cam', '#ffa500'],
            ['Xanh lá cây', '#008000'],
            ['Xanh dương', '#00ffff'],
            ['Tím', '#800080'],
            ['Nâu', '#a52a2a'],
            ['Hồng', '#ffc0cb'],
            ['Bạc', '#c0c0c0']
        ];

        foreach ($colors as $color) {
            DB::table('colors')->insert([
                'color_name' => $color[0],
                'hex_code' => $color[1],
            ]);
        }
    }
}