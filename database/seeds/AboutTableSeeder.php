<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'picture' => 'Images/ali-morshedlou-WMD64tMfc4k-unsplash.jpg',
            'h5' => 'Heritage es una firma de asesoría financiera y legal a',
            'h2' => 'empresas, inversionistas institucionales, fondos y financial sponsors',
            'p1' => 'en estructuración de financiamiento, IPOs, procesos de M&A, valuaciones y reestructuras y estrategias de optimización, valuación y cobertura de riesgos de tipo de cambio y tasa de interés con productos derivados.',
            'p2' => 'Nuestra especialidad se centra en la estructuración de productos financieros que atiendan a las necesidades de fondeo y cobertura de las empresas.',
            'p3' => 'Deuda, Capital, M&A, FX & IR.'
        ]);
    }
}
