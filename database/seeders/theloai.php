<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class theloai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_movie')->insert([
        ['ten_tl' => 'Kinh dị'],
        ['ten_tl' => 'Hài hước'],
        ['ten_tl' => 'Phiêu lưu'],
        ['ten_tl' => 'Mạo hiểm'],
        ]); 
    }
}
