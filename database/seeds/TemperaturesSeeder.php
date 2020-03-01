<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TemperaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temperatures')->truncate();

        DB::table('temperatures')->insert([
            'city' => 'Barcelona',
            'cp' => '08024',
            'actual_temp' => 13,
            'day_1_temp' => 10,
            'day_2_temp' => 14,
            'day_3_temp' => 20,
            'day_4_temp' => 17,
            'day_5_temp' => 13
        ]);

        DB::table('temperatures')->insert([
            'city' => 'Tarragona',
            'cp' => '05068',
            'actual_temp' => 8,
            'day_1_temp' => 9,
            'day_2_temp' => 11,
            'day_3_temp' => 5,
            'day_4_temp' => 7,
            'day_5_temp' => 10
        ]);

        DB::table('temperatures')->insert([
            'city' => 'Lleida',
            'cp' => '08765',
            'actual_temp' => 8,
            'day_1_temp' => 9,
            'day_2_temp' => 11,
            'day_3_temp' => 5,
            'day_4_temp' => 7,
            'day_5_temp' => 10
        ]);
        DB::table('temperatures')->insert([
            'city' => 'Girona',
            'cp' => '04321',
            'actual_temp' => 8,
            'day_1_temp' => 9,
            'day_2_temp' => 11,
            'day_3_temp' => 5,
            'day_4_temp' => 7,
            'day_5_temp' => 10
        ]);
        DB::table('temperatures')->insert([
            'city' => 'El Vendrell',
            'cp' => '12345',
            'actual_temp' => 13,
            'day_1_temp' => 10,
            'day_2_temp' => 14,
            'day_3_temp' => 20,
            'day_4_temp' => 17,
            'day_5_temp' => 13
        ]);
    }
}
