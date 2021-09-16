<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'corpo' => "Vorrei saperne di più",
            'email_mittente' => "test@mittente.com",
            'id_appartamento' => 1,
        ]);
    }
}
