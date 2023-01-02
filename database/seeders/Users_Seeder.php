<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Users_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                    "name"=>'Ashmir Khan',
                    "email"=>'khanasmir786@gmail.com',
                    "password"=>Hash::make('123456')
        ]);
    }
}