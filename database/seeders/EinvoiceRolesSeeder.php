<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EinvoiceRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('einvoice_roles')->delete();

        \DB::table('einvoice_roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'type' => 'B',
                'name_en' => 'Business',
				'name_ar' => 'عمل',
                'status' => '1',
            ),
            1 =>
            array (
                'id' => 2,
                'type' => 'P',
                'name_en' => 'Person',
				'name_ar' => 'شخص',
                'status' => '1',
            ),
            2 =>
            array (
                'id' => 3,
                'type' => 'F',
                'name_en' => 'Foreign',
				'name_ar' => 'اجنبي',
                'status' => '1',
            )
        ));
    }
}
