<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class companyTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('company_types')->delete();

        \DB::table('company_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name_en' => 'POS',
                'name_ar' => 'نقاط بيع',
                'active' => '1',
            ),
            1 =>
            array (
                'id' => 2,
                'name_en' => 'Shop',
                'name_ar' => 'متجر',
                'active' => '1',
            ),
            2 =>
            array (
                'id' => 3,
                'name_en' => 'Factory',
                'name_ar' => 'مصنع',
                'active' => '1',
            ),
            3 =>
            array (
                'id' => 4,
                'name_en' => 'Another Type',
                'name_ar' => 'نشاط آخر',
                'active' => '1',
            )
        ));
    }
}
