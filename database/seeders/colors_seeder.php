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
            ['Xanh', '#0000ff'],
            ['Đỏ', '#ff0000'],
            ['Vàng', '#ffff00'],
            ['Xám', '#808080'],
            ['Cam', '#ffa500'],
            ['Xanh lá cây', '#008000'],
            ['Xanh dương', '#00ffff'],
            ['Tím', '#800080'],
            ['Nâu', '#a52a2a'],
            ['Hồng', '#ffc0cb'],
            ['Xanh lục', '#008080'],
            ['Xanh da trời', '#00ff00'],
            ['Vàng nghệ', '#ff00ff'],
            ['Bạc', '#c0c0c0'],
            ['Da cam', '#ffa07a'],
            ['Xanh lam', '#000080'],
            ['Xanh lơ', '#add8e6'],
            ['Xanh ngọc', '#008000'],
            ['Xanh đậm', '#000080'],
            ['Xanh lá', '#00ff00'],
            ['Xanh lục lá cây', '#008000'],
            ['Xanh lục lá cây đậm', '#006400'],
            ['Xanh lục lá cây nhạt', '#00ff00'],
            ['Xanh lục lá cây đậm', '#006400'],
            ['Xanh lục lá cây nhạt', '#00ff00'],
            ['Xanh lục lá cây đậm', '#006400'],
            ['Xanh lục lá cây nhạt', '#00ff00'],
            ['Xanh lục lá cây đậm', '#006400'],
            ['Xanh lục lá cây nhạt', '#00ff00'],
            ['Xanh lục lá cây đậm', '#006400'],
            ['Xanh lục lá cây nhạt', '#00ff00'],
            ['Xanh lục lá cây đậm', '#006400'],
            ['Xanh lục lá cây nhạt', '#00ff00'],
            ['Xanh lục lá cây đậm', '#006400'],
            ['Xanh lục lá cây nhạt', '#00ff00'],
        ];

        foreach ($colors as $color) {
            DB::table('colors')->insert([
                'color_name' => $color[0],
                'hex_code' => $color[1],
            ]);
        }
    }
}