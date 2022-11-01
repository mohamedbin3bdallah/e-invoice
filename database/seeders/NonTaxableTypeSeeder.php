<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NonTaxableTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('non_taxable_types')->delete();
        $nonTaxable = [
            [
            "code"=> "T13",
            "description_en"=> "Stamping tax (percentage)",
            "description_ar"=> "ضريبه الدمغه (نسبيه)"
            ],
            [
            "code"=> "T14",
            "description_en"=> "Stamping Tax (amount)",
            "description_ar"=> "ضريبه الدمغه (قطعيه بمقدار ثابت )"
            ],
            [
            "code"=> "T15",
            "description_en"=> "Entertainment tax",
            "description_ar"=> "ضريبة الملاهى"
            ],
            [
            "code"=> "T16",
            "description_en"=> "Resource development fee",
            "description_ar"=> "رسم تنميه الموارد"
            ],
            [
            "code"=> "T17",
            "description_en"=> "Table tax (percentage)",
            "description_ar"=> "رسم خدمة"
            ],
            [
            "code"=> "T18",
            "description_en"=> "Municipality Fees",
            "description_ar"=> "رسم المحليات"
            ],
            [
            "code"=> "T19",
            "description_en"=> "Medical insurance fee",
            "description_ar"=> "رسم التامين الصحى"
            ],
            [
            "code"=> "T20",
            "description_en"=> "Other fees",
            "description_ar"=> "رسوم أخرى"
            ]
            ];
        \DB::table('non_taxable_types')->insert($nonTaxable);
    }
}
