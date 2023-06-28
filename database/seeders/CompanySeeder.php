<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->insert([
          
            'history' => '
            Propertybook’s roots stem back to 2006,
             which is the year that Harare Rentals was born. 
             ',
            
            'file' => 'about.jpg',
           
        ]);
    }
}
