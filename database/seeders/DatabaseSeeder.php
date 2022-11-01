<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UsersSeeder::class,
            PermissionTableSeeder::class,
            // RolesSeeder::class,
            AllcountryTableSeeder::class,
            AllcitiesTableSeeder::class,
            AllstatesTableSeeder::class,
            companyTypesSeeder::class,
            ActivityTypeSeeder::class,
            CountryCodes::class,
            UnitTypeSeeder::class,
            TaxableTypeSeeder::class,
            NonTaxableTypeSeeder::class,
            TaxaSubTypeSeeder::class,
            //load_test_data::class,

        ]);
    }
}
