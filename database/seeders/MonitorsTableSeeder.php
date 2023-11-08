<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monitors')->insert([
            'product_model' => 'VA27EHE',
            'bid' => 1,
            'size' => 27.0,
            'hz' => 75,
            'resolution' => '1920*10800'

        ]);
    }
}
