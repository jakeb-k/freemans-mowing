<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => "Bush Trimmy in Palmy",
            'date' => '22nd of October',
            'review'=>'Such an impeccable job done by Indos, Highly recommend. He will be trimming all my future bushes',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. sit amet consectetur adipisicing elit.',
            'images'=>'mowgo.png,blogo.png' 
        ]);
    }
}
