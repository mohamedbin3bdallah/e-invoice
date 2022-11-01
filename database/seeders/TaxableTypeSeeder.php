<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxableTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('taxable_types')->delete();
        $taxable_types = [
            [
            "code"=> "T1",
            "description_en"=> "Value added tax",
            "description_ar"=> "ضريبه القيمه المضافه"
            ],
            [
            "code"=> "T2",
            "description_en"=> "Table tax (percentage)",
            "description_ar"=> "ضريبه الجدول (نسبيه)"
            ],
            [
            "code"=> "T3",
            "description_en"=> "Table tax (Fixed Amount)",
            "description_ar"=> "ضريبه الجدول (قطعيه)"
            ],
            [
            "code"=> "T4",
            "description_en"=> "Withholding tax (WHT)",
            "description_ar"=> "الخصم تحت حساب الضريبه"
            ],
            [
            "code"=> "T5",
            "description_en"=> "Stamping tax (percentage)",
            "description_ar"=> "ضريبه الدمغه (نسبيه)"
            ],
            [
            "code"=> "T6",
            "description_en"=> "Stamping Tax (amount)",
            "description_ar"=> "ضريبه الدمغه (قطعيه بمقدار ثابت )"
            ],
            [
            "code"=> "T7",
            "description_en"=> "Entertainment tax",
            "description_ar"=> "ضريبة الملاهى"
            ],
            [
            "code"=> "T8",
            "description_en"=> "Resource development fee",
            "description_ar"=> "رسم تنميه الموارد"
            ],
            [
            "code"=> "T9",
            "description_en"=> "Table tax (percentage)",
            "description_ar"=> "رسم خدمة"
            ],
            [
            "code"=> "T10",
            "description_en"=> "Municipality Fees",
            "description_ar"=> "رسم المحليات"
            ],
            [
            "code"=> "T11",
            "description_en"=> "Medical insurance fee",
            "description_ar"=> "رسم التامين الصحى"
            ],
            [
            "code"=> "T12",
            "description_en"=> "Other fees",
            "description_ar"=> "رسوم أخري"
            ]
            ];
        \DB::table('taxable_types')->insert($taxable_types);
    }
}
