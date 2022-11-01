<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UnitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('unit_types')->delete();
        $unit_types = [
            [
            "code"=> "2Z",
            "description_en"=> "Millivolt ( mV )",
            "description_ar"=> ""
            ],
            [
            "code"=> "4K",
            "description_en"=> "Milliampere ( mA )",
            "description_ar"=> ""
            ],
            [
            "code"=> "4O",
            "description_en"=> "Microfarad ( microF )",
            "description_ar"=> ""
            ],
            [
            "code"=> "A87",
            "description_en"=> "Gigaohm ( GOhm )",
            "description_ar"=> ""
            ],
            [
            "code"=> "A93",
            "description_en"=> "Gram/Cubic meter ( g/m3 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "A94",
            "description_en"=> "Gram/cubic centimeter ( g/cm3 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "AMP",
            "description_en"=> "Ampere ( A )",
            "description_ar"=> ""
            ],
            [
            "code"=> "ANN",
            "description_en"=> "Years ( yr )",
            "description_ar"=> ""
            ],
            [
            "code"=> "B22",
            "description_en"=> "Kiloampere ( kA )",
            "description_ar"=> ""
            ],
            [
            "code"=> "B49",
            "description_en"=> "Kiloohm ( kOhm )",
            "description_ar"=> ""
            ],
            [
            "code"=> "B75",
            "description_en"=> "Megohm ( MOhm )",
            "description_ar"=> ""
            ],
            [
            "code"=> "B78",
            "description_en"=> "Megavolt ( MV )",
            "description_ar"=> ""
            ],
            [
            "code"=> "B84",
            "description_en"=> "Microampere ( microA )",
            "description_ar"=> ""
            ],
            [
            "code"=> "BAR",
            "description_en"=> "bar ( bar )",
            "description_ar"=> ""
            ],
            [
            "code"=> "BBL",
            "description_en"=> "Barrel (oil 42 gal.)",
            "description_ar"=> "برميل"
            ],
            [
            "code"=> "BG",
            "description_en"=> "Bag ( Bag )",
            "description_ar"=> ""
            ],
            [
            "code"=> "BO",
            "description_en"=> "Bottle ( Bt. )",
            "description_ar"=> ""
            ],
            [
            "code"=> "BOX",
            "description_en"=> "Box",
            "description_ar"=> "صندوق"
            ],
            [
            "code"=> "C10",
            "description_en"=> "Millifarad ( mF )",
            "description_ar"=> ""
            ],
            [
            "code"=> "C39",
            "description_en"=> "Nanoampere ( nA )",
            "description_ar"=> ""
            ],
            [
            "code"=> "C41",
            "description_en"=> "Nanofarad ( nF )",
            "description_ar"=> ""
            ],
            [
            "code"=> "C45",
            "description_en"=> "Nanometer ( nm )",
            "description_ar"=> ""
            ],
            [
            "code"=> "C62",
            "description_en"=> "Activity unit ( AU )",
            "description_ar"=> ""
            ],
            [
            "code"=> "CA",
            "description_en"=> "Canister ( Can )",
            "description_ar"=> ""
            ],
            [
            "code"=> "CMK",
            "description_en"=> "Square centimeter ( cm2 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "CMQ",
            "description_en"=> "Cubic centimeter ( cm3 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "CMT",
            "description_en"=> "Centimeter ( cm )",
            "description_ar"=> ""
            ],
            [
            "code"=> "CS",
            "description_en"=> "Case ( Case )",
            "description_ar"=> ""
            ],
            [
            "code"=> "CT",
            "description_en"=> "Carton ( Car )",
            "description_ar"=> ""
            ],
            [
            "code"=> "CTL",
            "description_en"=> "Centiliter ( Cl )",
            "description_ar"=> ""
            ],
            [
            "code"=> "D10",
            "description_en"=> "Siemens per meter ( S/m )",
            "description_ar"=> ""
            ],
            [
            "code"=> "D33",
            "description_en"=> "Tesla ( D )",
            "description_ar"=> ""
            ],
            [
            "code"=> "D41",
            "description_en"=> "Ton/Cubic meter ( t/m3 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "DAY",
            "description_en"=> "Days ( d )",
            "description_ar"=> ""
            ],
            [
            "code"=> "DMT",
            "description_en"=> "Decimeter ( dm )",
            "description_ar"=> ""
            ],
            [
            "code"=> "DRM",
            "description_en"=> "DRUM",
            "description_ar"=> "أسطوانة"
            ],
            [
            "code"=> "EA",
            "description_en"=> "each (ST) ( ST )",
            "description_ar"=> ""
            ],
            [
            "code"=> "FAR",
            "description_en"=> "Farad ( F )",
            "description_ar"=> ""
            ],
            [
            "code"=> "FOT",
            "description_en"=> "Foot ( Foot )",
            "description_ar"=> ""
            ],
            [
            "code"=> "FTK",
            "description_en"=> "Square foot ( ft2 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "FTQ",
            "description_en"=> "Cubic foot ( ft3 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "G42",
            "description_en"=> "Microsiemens per centimeter ( microS/cm )",
            "description_ar"=> ""
            ],
            [
            "code"=> "GL",
            "description_en"=> "Gram/liter ( g/l )",
            "description_ar"=> ""
            ],
            [
            "code"=> "GLL",
            "description_en"=> "gallon ( gal )",
            "description_ar"=> ""
            ],
            [
            "code"=> "GM",
            "description_en"=> "Gram/square meter ( g/m2 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "GPT",
            "description_en"=> "Gallon per thousand",
            "description_ar"=> "جالون/الف"
            ],
            [
            "code"=> "GRM",
            "description_en"=> "Gram ( g )",
            "description_ar"=> ""
            ],
            [
            "code"=> "H63",
            "description_en"=> "Milligram/Square centimeter ( mg/cm2 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "HHP",
            "description_en"=> "Hydraulic Horse Power",
            "description_ar"=> "قوة حصان هيدروليكي"
            ],
            [
            "code"=> "HLT",
            "description_en"=> "Hectoliter ( hl )",
            "description_ar"=> ""
            ],
            [
            "code"=> "HTZ",
            "description_en"=> "Hertz (1/second) ( Hz )",
            "description_ar"=> ""
            ],
            [
            "code"=> "HUR",
            "description_en"=> "Hours ( hrs )",
            "description_ar"=> ""
            ],
            [
            "code"=> "IE",
            "description_en"=> "Number of Persons ( PRS )",
            "description_ar"=> ""
            ],
            [
            "code"=> "INH",
            "description_en"=> "Inch ( “” )",
            "description_ar"=> ""
            ],
            [
            "code"=> "INK",
            "description_en"=> "Square inch ( Inch2 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "IVL",
            "description_en"=> "Interval",
            "description_ar"=> "فترة"
            ],
            [
            "code"=> "JOB",
            "description_en"=> "JOB",
            "description_ar"=> "وظيفة"
            ],
            [
            "code"=> "KGM",
            "description_en"=> "Kilogram ( KG )",
            "description_ar"=> ""
            ],
            [
            "code"=> "KHZ",
            "description_en"=> "Kilohertz ( kHz )",
            "description_ar"=> ""
            ],
            [
            "code"=> "KMH",
            "description_en"=> "Kilometer/hour ( km/h )",
            "description_ar"=> ""
            ],
            [
            "code"=> "KMK",
            "description_en"=> "Square kilometer ( km2 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "KMQ",
            "description_en"=> "Kilogram/cubic meter ( kg/m3 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "KMT",
            "description_en"=> "Kilometer ( km )",
            "description_ar"=> ""
            ],
            [
            "code"=> "KSM",
            "description_en"=> "Kilogram/Square meter ( kg/m2 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "KVT",
            "description_en"=> "Kilovolt ( kV )",
            "description_ar"=> ""
            ],
            [
            "code"=> "KWT",
            "description_en"=> "Kilowatt ( KW )",
            "description_ar"=> ""
            ],
            [
            "code"=> "LB",
            "description_en"=> "pounds ",
            "description_ar"=> "رطل"
            ],
            [
            "code"=> "LTR",
            "description_en"=> "Liter ( l )",
            "description_ar"=> ""
            ],
            [
            "code"=> "LVL",
            "description_en"=> "Level",
            "description_ar"=> "مستوي"
            ],
            [
            "code"=> "M",
            "description_en"=> "Meter ( m )",
            "description_ar"=> ""
            ],
            [
            "code"=> "MAN",
            "description_en"=> "Man",
            "description_ar"=> "رجل"
            ],
            [
            "code"=> "MAW",
            "description_en"=> "Megawatt ( VA )",
            "description_ar"=> ""
            ],
            [
            "code"=> "MGM",
            "description_en"=> "Milligram ( mg )",
            "description_ar"=> ""
            ],
            [
            "code"=> "MHZ",
            "description_en"=> "Megahertz ( MHz )",
            "description_ar"=> ""
            ],
            [
            "code"=> "MIN",
            "description_en"=> "Minute ( min )",
            "description_ar"=> ""
            ],
            [
            "code"=> "MMK",
            "description_en"=> "Square millimeter ( mm2 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "MMQ",
            "description_en"=> "Cubic millimeter ( mm3 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "MMT",
            "description_en"=> "Millimeter ( mm )",
            "description_ar"=> ""
            ],
            [
            "code"=> "MON",
            "description_en"=> "Months ( Months )",
            "description_ar"=> ""
            ],
            [
            "code"=> "MTK",
            "description_en"=> "Square meter ( m2 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "MTQ",
            "description_en"=> "Cubic meter ( m3 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "OHM",
            "description_en"=> "Ohm ( Ohm )",
            "description_ar"=> ""
            ],
            [
            "code"=> "ONZ",
            "description_en"=> "Ounce ( oz )",
            "description_ar"=> ""
            ],
            [
            "code"=> "PAL",
            "description_en"=> "Pascal ( Pa )",
            "description_ar"=> ""
            ],
            [
            "code"=> "PF",
            "description_en"=> "Pallet ( PAL )",
            "description_ar"=> ""
            ],
            [
            "code"=> "PK",
            "description_en"=> "Pack ( PAK )",
            "description_ar"=> ""
            ],
            [
            "code"=> "PMP",
            "description_en"=> "pump",
            "description_ar"=> "مضخة"
            ],
            [
            "code"=> "RUN",
            "description_en"=> "run",
            "description_ar"=> "ركض"
            ],
            [
            "code"=> "SH",
            "description_en"=> "Shrink ( Shrink )",
            "description_ar"=> ""
            ],
            [
            "code"=> "SK",
            "description_en"=> "Sack",
            "description_ar"=> "كيس"
            ],
            [
            "code"=> "SMI",
            "description_en"=> "Mile ( mile )",
            "description_ar"=> ""
            ],
            [
            "code"=> "ST",
            "description_en"=> "Ton (short,2000 lb)",
            "description_ar"=> "طن (قصير,2000)"
            ],
            [
            "code"=> "TNE",
            "description_en"=> "Tonne ( t )",
            "description_ar"=> ""
            ],
            [
            "code"=> "TON",
            "description_en"=> "Ton (metric)",
            "description_ar"=> "طن (متري)"
            ],
            [
            "code"=> "VLT",
            "description_en"=> "Volt ( V )",
            "description_ar"=> ""
            ],
            [
            "code"=> "WEE",
            "description_en"=> "Weeks ( Weeks )",
            "description_ar"=> ""
            ],
            [
            "code"=> "WTT",
            "description_en"=> "Watt ( W )",
            "description_ar"=> ""
            ],
            [
            "code"=> "X03",
            "description_en"=> "Meter/Hour ( m/h )",
            "description_ar"=> ""
            ],
            [
            "code"=> "YDQ",
            "description_en"=> "Cubic yard ( yd3 )",
            "description_ar"=> ""
            ],
            [
            "code"=> "YRD",
            "description_en"=> "Yards ( yd )",
            "description_ar"=> ""
            ]
        ];
        \DB::table('unit_types')->insert($unit_types);
    }
}
