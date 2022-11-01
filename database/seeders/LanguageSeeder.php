<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('languages')->delete();
        $data = [
            [
				'local' => 'ar',
				'name' => 'Arabic',
				'dir' => 1,
				'def' => 1
            ],
            [
				'local' => 'en',
				'name' => 'English',
				'dir' => 0,
				'def' => 0
            ],
		];
		\DB::table('languages')->insert($data);
    }
}