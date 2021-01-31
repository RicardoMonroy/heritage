<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'banner' => 'Images/banner.jpeg',
            'facebook' => '',
            'twitter' => '',
            'youtube' => '',
            'linkedin' => '',
            'instagram' => ''
        ]);
    }
}
