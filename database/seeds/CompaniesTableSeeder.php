<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Broad',
            'picture' => 'Images/Business-Broad.png',
            'description' => 'Ingeniería Financiera dedada a diseñar y estructurar nuevos productos financieros que atiendan a las necisidades de fondeo y cobertura de empresas Mexicanas. Nos especializamos en ofecer servicios de fusiones, adquisiciones, banca de inversión y valuación o estructuración de diversas coberturas con derivandos para cualquier activo subyacente.',
            'url' => NULL
        ]);
        DB::table('companies')->insert([
            'name' => 'Capital Amigo',
            'picture' => 'Images/Business-Capital.png',
            'description' => 'Capital Amigo es un fondo diversificado de capital privado. Contamos con sólidas plataformas para invertir en el desarrollo, construcción, operación y adquisición de activos inmobiliarios. Contamos con experiencia probada en organización, estructuración, desarrollo y monetización.',
            'url' => NULL
        ]);
        DB::table('companies')->insert([
            'name' => 'Creedito',
            'picture' => 'Images/Business-Cree.png',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui tellus, maximus ac lacinia vitae, hendrerit sed tellus. Quisque mattis nec tellus eu vehicula. Donec posuere egestas leo, a condimentum velit molestie vitae. Etiam neque nisl, faucibus nec consequat eu, aliquam a sapien. Maecenas finibus neque nec eros sollicitudin gravida. Phasellus et ultrices justo. Praesent dignissim pellentesque pretium. Nam tempus nunc laoreet luctus blandit. Cras feugiat nec mi ac fringilla.',
            'url' => NULL
        ]);
        DB::table('companies')->insert([
            'name' => 'Heritage Capital',
            'picture' => 'Images/Business-Heritage.png',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui tellus, maximus ac lacinia vitae, hendrerit sed tellus. Quisque mattis nec tellus eu vehicula. Donec posuere egestas leo, a condimentum velit molestie vitae. Etiam neque nisl, faucibus nec consequat eu, aliquam a sapien. Maecenas finibus neque nec eros sollicitudin gravida. Phasellus et ultrices justo. Praesent dignissim pellentesque pretium. Nam tempus nunc laoreet luctus blandit. Cras feugiat nec mi ac fringilla.',
            'url' => NULL
        ]);
    }
}
