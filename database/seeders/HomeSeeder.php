<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_secs')->insert([
            'name' => 'Propertybook',
            'Description' => 'We  are a Real  Estate  Company
            ',
            'file' => 'profile.jpg',
           
        ]);
    }
}
