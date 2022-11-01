<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxaSubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('taxable_subtypes')->delete();
        $subTypes = [
            [
            "code"=> "V001",
            "description_en"=> "Export",
            "description_ar"=> "تصدير للخارج",
            "tax_type_reference"=> "T1"
            ],
            [
            "code"=> "V002",
            "description_en"=> "Export to free areas and other areas",
            "description_ar"=> "تصدير مناطق حرة وأخرى",
            "tax_type_reference"=> "T1"
            ],
            [
            "code"=> "V003",
            "description_en"=> "Exempted good or service",
            "description_ar"=> "سلعة أو خدمة معفاة",
            "tax_type_reference"=> "T1"
            ],
            [
            "code"=> "V004",
            "description_en"=> "A non-taxable good or service",
            "description_ar"=> "سلعة أو خدمة غير خاضعة للضريبة",
            "tax_type_reference"=> "T1"
            ],
            [
            "code"=> "V005",
            "description_en"=> "Exemptions for diplomats, consulates and embassies",
            "description_ar"=> "إعفاءات دبلوماسين والقنصليات والسفارات",
            "tax_type_reference"=> "T1"
            ],
            [
            "code"=> "V006",
            "description_en"=> "Defence and National security Exemptions",
            "description_ar"=> "إعفاءات الدفاع والأمن القومى",
            "tax_type_reference"=> "T1"
            ],
            [
            "code"=> "V007",
            "description_en"=> "Agreements exemptions",
            "description_ar"=> "إعفاءات اتفاقيات",
            "tax_type_reference"=> "T1"
            ],
            [
            "code"=> "V008",
            "description_en"=> "Special Exemptios and other reasons",
            "description_ar"=> "إعفاءات خاصة و أخرى",
            "tax_type_reference"=> "T1"
            ],
            [
            "code"=> "V009",
            "description_en"=> "General Item sales",
            "description_ar"=> "سلع عامة",
            "tax_type_reference"=> "T1"
            ],
            [
            "code"=> "V010",
            "description_en"=> "Other Rates",
            "description_ar"=> "نسب ضريبة أخرى",
            "tax_type_reference"=> "T1"
            ],
            [
            "code"=> "Tbl01",
            "description_en"=> "Table tax (percentage)",
            "description_ar"=> "ضريبه الجدول (نسبيه)",
            "tax_type_reference"=> "T2"
            ],
            [
            "code"=> "Tbl02",
            "description_en"=> "Table tax (Fixed Amount)",
            "description_ar"=> "ضريبه الجدول (النوعية)",
            "tax_type_reference"=> "T3"
            ],
            [
            "code"=> "W001",
            "description_en"=> "Contracting",
            "description_ar"=> "المقاولات",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W002",
            "description_en"=> "Supplies",
            "description_ar"=> "التوريدات",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W003",
            "description_en"=> "Purachases",
            "description_ar"=> "المشتريات",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W004",
            "description_en"=> "Services",
            "description_ar"=> "الخدمات",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W005",
            "description_en"=> "Sumspaid by the cooperative societies for car transportation to their members",
            "description_ar"=> "المبالغالتي تدفعها الجميعات التعاونية للنقل بالسيارات لاعضائها",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W006",
            "description_en"=> "Commissionagency & brokerage",
            "description_ar"=> "الوكالةبالعمولة والسمسرة",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W007",
            "description_en"=> "Discounts& grants & additional exceptional incentives granted by smoke &cement companies",
            "description_ar"=> "الخصوماتوالمنح والحوافز الاستثنائية ةالاضافية التي تمنحها شركات الدخان والاسمنت ",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W008",
            "description_en"=> "Alldiscounts & grants & commissions granted by petroleum &telecommunications & other companies",
            "description_ar"=> "جميعالخصومات والمنح والعمولات  التيتمنحها  شركات البترول والاتصالات ...وغيرها من الشركات المخاطبة بنظام الخصم",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W009",
            "description_en"=> "Supporting export subsidies",
            "description_ar"=> "مساندة دعم الصادرات التي يمنحها صندوق تنمية الصادرات ",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W010",
            "description_en"=> "Professional fees",
            "description_ar"=> "اتعاب مهنية",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W011",
            "description_en"=> "Commission & brokerage _A_57",
            "description_ar"=> "العمولة والسمسرة _م_57",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W012",
            "description_en"=> "Hospitals collecting from doctors",
            "description_ar"=> "تحصيل المستشفيات من الاطباء",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W013",
            "description_en"=> "Royalties",
            "description_ar"=> "الاتاوات",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W014",
            "description_en"=> "Customs clearance",
            "description_ar"=> "تخليص جمركي ",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W015",
            "description_en"=> "Exemption",
            "description_ar"=> "أعفاء",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "W016",
            "description_en"=> "advance payments",
            "description_ar"=> "دفعات مقدمه",
            "tax_type_reference"=> "T4"
            ],
            [
            "code"=> "ST01",
            "description_en"=> "Stamping tax (percentage)",
            "description_ar"=> "ضريبه الدمغه (نسبيه)",
            "tax_type_reference"=> "T5"
            ],
            [
            "code"=> "ST02",
            "description_en"=> "Stamping Tax (amount)",
            "description_ar"=> "ضريبه الدمغه (قطعيه بمقدار ثابت)",
            "tax_type_reference"=> "T6"
            ],
            [
            "code"=> "Ent01",
            "description_en"=> "Entertainment tax (rate)",
            "description_ar"=> "ضريبة الملاهى (نسبة)",
            "tax_type_reference"=> "T7"
            ],
            [
            "code"=> "Ent02",
            "description_en"=> "Entertainment tax (amount)",
            "description_ar"=> "ضريبة الملاهى (قطعية)",
            "tax_type_reference"=> "T7"
            ],
            [
            "code"=> "RD01",
            "description_en"=> "Resource development fee (rate)",
            "description_ar"=> "رسم تنميه الموارد (نسبة)",
            "tax_type_reference"=> "T8"
            ],
            [
            "code"=> "RD02",
            "description_en"=> "Resource development fee (amount)",
            "description_ar"=> "رسم تنميه الموارد (قطعية)",
            "tax_type_reference"=> "T8"
            ],
            [
            "code"=> "SC01",
            "description_en"=> "Service charges (rate)",
            "description_ar"=> "رسم خدمة (نسبة)",
            "tax_type_reference"=> "T9"
            ],
            [
            "code"=> "SC02",
            "description_en"=> "Service charges (amount)",
            "description_ar"=> "رسم خدمة (قطعية)",
            "tax_type_reference"=> "T9"
            ],
            [
            "code"=> "Mn01",
            "description_en"=> "Municipality Fees (rate)",
            "description_ar"=> "رسم المحليات (نسبة)",
            "tax_type_reference"=> "T10"
            ],
            [
            "code"=> "Mn02",
            "description_en"=> "Municipality Fees (amount)",
            "description_ar"=> "رسم المحليات (قطعية)",
            "tax_type_reference"=> "T10"
            ],
            [
            "code"=> "MI01",
            "description_en"=> "Medical insurance fee (rate)",
            "description_ar"=> "رسم التامين الصحى (نسبة)",
            "tax_type_reference"=> "T11"
            ],
            [
            "code"=> "MI02",
            "description_en"=> "Medical insurance fee (amount)",
            "description_ar"=> "رسم التامين الصحى (قطعية)",
            "tax_type_reference"=> "T11"
            ],
            [
            "code"=> "OF01",
            "description_en"=> "Other fees (rate)",
            "description_ar"=> "رسوم أخرى (نسبة)",
            "tax_type_reference"=> "T12"
            ],
            [
            "code"=> "OF02",
            "description_en"=> "Other fees (amount)",
            "description_ar"=> "رسوم أخرى (قطعية)",
            "tax_type_reference"=> "T12"
            ],
            [
            "code"=> "ST03",
            "description_en"=> "Stamping tax (percentage)",
            "description_ar"=> "ضريبه الدمغه (نسبيه)",
            "tax_type_reference"=> "T13"
            ],
            [
            "code"=> "ST04",
            "description_en"=> "Stamping Tax (amount)",
            "description_ar"=> "ضريبه الدمغه (قطعيه بمقدار ثابت)",
            "tax_type_reference"=> "T14"
            ],
            [
            "code"=> "Ent03",
            "description_en"=> "Entertainment tax (rate)",
            "description_ar"=> "ضريبة الملاهى (نسبة)",
            "tax_type_reference"=> "T15"
            ],
            [
            "code"=> "Ent04",
            "description_en"=> "Entertainment tax (amount)",
            "description_ar"=> "ضريبة الملاهى (قطعية)",
            "tax_type_reference"=> "T15"
            ],
            [
            "code"=> "RD03",
            "description_en"=> "Resource development fee (rate)",
            "description_ar"=> "رسم تنميه الموارد (نسبة)",
            "tax_type_reference"=> "T16"
            ],
            [
            "code"=> "RD04",
            "description_en"=> "Resource development fee (amount)",
            "description_ar"=> "رسم تنميه الموارد (قطعية)",
            "tax_type_reference"=> "T16"
            ],
            [
            "code"=> "SC03",
            "description_en"=> "Service charges (rate)",
            "description_ar"=> "رسم خدمة (نسبة)",
            "tax_type_reference"=> "T17"
            ],
            [
            "code"=> "SC04",
            "description_en"=> "Service charges (amount)",
            "description_ar"=> "رسم خدمة (قطعية)",
            "tax_type_reference"=> "T17"
            ],
            [
            "code"=> "Mn03",
            "description_en"=> "Municipality Fees (rate)",
            "description_ar"=> "رسم المحليات (نسبة)",
            "tax_type_reference"=> "T18"
            ],
            [
            "code"=> "Mn04",
            "description_en"=> "Municipality Fees (amount)",
            "description_ar"=> "رسم المحليات (قطعية)",
            "tax_type_reference"=> "T18"
            ],
            [
            "code"=> "MI03",
            "description_en"=> "Medical insurance fee (rate)",
            "description_ar"=> "رسم التامين الصحى (نسبة)",
            "tax_type_reference"=> "T19"
            ],
            [
            "code"=> "MI04",
            "description_en"=> "Medical insurance fee (amount)",
            "description_ar"=> "رسم التامين الصحى (قطعية)",
            "tax_type_reference"=> "T19"
            ],
            [
            "code"=> "OF03",
            "description_en"=> "Other fees (rate)",
            "description_ar"=> "رسوم أخرى (نسبة)",
            "tax_type_reference"=> "T20"
            ],
            [
            "code"=> "OF04",
            "description_en"=> "Other fees (amount)",
            "description_ar"=> "رسوم أخرى (قطعية)",
            "tax_type_reference"=> "T20"
            ]
            ];
        \DB::table('taxable_subtypes')->insert($subTypes);
    }
}
