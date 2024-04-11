<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NhaSanXuat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('nhasanxuat')->insert([
       'ten' => 'Samsung',
       'logo' => 'images/sanmsung.jpg',
       'status' => 1
    ]);
    }
}