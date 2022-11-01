<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllcountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->delete();

        \DB::table('countries')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'iso' => 'EG',
                    'name' => 'EGYPT',
                    'nicename' => 'مصر',
                    'iso3' => 'EGY',
                    'numcode' => 818,
                    'phonecode' => 20,
                ),
        ));
    }
}
