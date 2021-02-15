<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ricardo Monroy',
            'email' => 'rmonroy.rodriguez@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Tooring@2021'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Tooring',
            'email' => 'corporativo@tooring.com.mx',
            'email_verified_at' => now(),
            'password' => Hash::make('Tooring@2021'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Erick Estrada',
            'email' => 'erickestrada9701@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Enola21'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
