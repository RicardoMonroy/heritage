<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'address' => 'Calle 123 Col. Centro , CDMX México.',
            'telephone' => '55 123445678',
            'telephone_office' => '55 55000000',
            'email_admin' => 'admin@heritage.com',
            'email_sales' => 'email@heritage.com',
            'schedule' => '9am to 6pm',
            'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.1171287085244!2d-100.40069438562224!3d20.58327378624133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b526dfd765d%3A0xf0ff77c7cd66a57e!2sWorks%20Coworking!5e0!3m2!1ses!2smx!4v1610563090033!5m2!1ses!2smx'
        ]);
    }
}