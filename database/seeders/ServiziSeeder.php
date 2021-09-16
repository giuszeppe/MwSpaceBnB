<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiziSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servizi = ['Wi-fi', 'Cambio biancheria', 'Posto auto', 'Condizionatore', 'Frigo Bar', 'Animali Ammessi', 'Piscina', 'Vista mare', 'Sauna', 'Portineria', 'Supporto celiaci'];
        foreach ($servizi as $servizio)
            DB::table('servizi')->insert([
                'nome_servizio' => $servizio
            ]);
    }
}
