<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'number' => '0771949982',
            'email' => 'PropertBook@gmail.com',
            'Address' => 'Honeydew Lifestyle Center, 16 Greendale Avenue, Greendale, Harare',
           
        ]);
    }
}
