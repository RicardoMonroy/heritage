<?php

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
        $this->call([UsersTableSeeder::class]);
        $this->call([PermissionsTableSeeder::class]);
        $this->call([SliderTableSeeder::class]);
        $this->call([AboutTableSeeder::class]);
        $this->call([MeetyouTableSeeder::class]);
        $this->call([ContactTableSeeder::class]);
        // $this->call([CompaniesTableSeeder::class]);
    }
}
