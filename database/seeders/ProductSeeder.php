<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
             [
                'name' => "Samsung mobile phone",
                'price' => "$200",
                'category' => "electronics device",
                'description' => "too much good with 4gb ram",
                'gallery' => "https://momunicipallaw.files.wordpress.com/2014/08/cell-phone.png",
             ],
              [
                'name' => "Samsung Tv",
                'price' => "$200",
                'category' => "electronics device",
                'description' => "too much good with 32inch display",
                'gallery' => "http://www.domstechblog.com/wp-content/uploads/2012/12/lcd_tv_as_monitor.jpg",
              ],
              [
                'name' => "Samsung washing machine",
                'price' => "$200",
                'category' => "electronics device",
                'description' => "too much good with smooth flexibility",
                'gallery' => "https://www.tasteofhome.com/wp-content/uploads/2019/06/shutterstock_1234217827.jpg",
              ],
            [
                'name' => "Samsung Videogame Remote",
                'price' => "$200",
                'category' => "electronics device",
                'description' => "too much good with smooth flexibility",
               'gallery'=>" https://ae01.alicdn.com/kf/HTB1gygAcEo09KJjSZFDq6z9npXa3/Newest-PXN-9603-Video-Game-Controller-Wireless-Remote-Gaming-Gamepads-USB-Receiver-Joystick-for-Mobile-Phone.jpg",
            ]

            
        ]);
    }
}