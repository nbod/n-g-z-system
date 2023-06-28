<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(CompanySeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(HomeSeeder::class);  
        $this->call(PricesSeeder::class); 
        $this->call(ServicesSeeder::class);     
        $this->call(UsersSeeder::class);
    }
}
