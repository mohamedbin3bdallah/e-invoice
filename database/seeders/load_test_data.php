<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class load_test_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'company_id' => 1,
                'branch_id' => 1,
                'fname' => 'Wessam',
                'lname' =>'Sayed',
                'email' => 'locawesa12@gmail.com',
                'password' => bcrypt("123@456"),
                'gender' =>1,
                'group_id' => 1
            )
        ));


        \DB::table('companies')->delete();

        \DB::table('companies')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'العالميه للتجارة والتوزيع',
                'address' => 'شبرا الخيمه',
                'country_id' =>64,
                'city_id' => 15422,
                'state_id' =>1048,
                'company_type_id' =>1,
                'mobile' => '01066626624',
            )
        ));

        // \DB::table('currencies')->delete();

        // \DB::table('currencies')->insert(array (
        //     0 =>
        //         array (
        //             'id' => 1,
        //             'name' => 'جنيه مصرى',
        //             'company_id' => '1',
        //             'symbol' =>'ج م',
        //             'symbol_position' => 'left',
        //             'active' =>1,
        //             'default' =>1,
        //         )
        // ));

        \DB::table('branches')->delete();

        \DB::table('branches')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'شبرا مصر',
                    'company_id' =>1,
                )
        ));

        \DB::table('groups')->delete();

        \DB::table('groups')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'admin',
                    'company_id' =>1,
                    'active' => 1,
                )
        ));
    }
}
