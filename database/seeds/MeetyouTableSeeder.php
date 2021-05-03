<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeetyouTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meetyous')->insert([
            'title' => '¿QUÉ OBJETIVOS BUSCAS?',
            'goal_fisrt' => 'Individuales O Familiares',
            'goal_second' => 'Tranquilidad Y Legado',
            'goal_third' => 'Dinámicos Conforme La Etapa De Tu Vida',
        ]);
        DB::table('meetyous')->insert([
            'title' => '¿CÓMO LLEGAR A ESOS OBJETIVOS?',
            'goal_fisrt' => 'Posiciones De Corto O Largo Plazo',
            'goal_second' => 'Análisis Macro',
            'goal_third' => 'Oportunidades Asimétricas',
        ]);
        DB::table('meetyous')->insert([
            'title' => 'ALINEACIÓN DE OBJETIVOS',
            'goal_fisrt' => 'Responsabilidad Y Obsesión Por Construir',
            'goal_second' => 'Ejecución Con Expertos',
            'goal_third' => 'Seguimiento Y Adaptación A Entornos Agresivos',
        ]);
    }
}
