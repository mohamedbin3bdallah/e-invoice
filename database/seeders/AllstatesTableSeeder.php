<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllstatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->delete();

        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
1,'Cairo', 'القاهرة','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
2,'Giza', 'الجيزة','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
3,'Alexandria', 'الإسكندرية','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
4,'Qalyubia', 'القليوبية','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
5,'Gharbia', 'الغربية','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
6,'Menoufia', 'المنوفية','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
7,'Fayoum', 'الفيوم','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
8,'El-Dakahlia', 'الدقهلية','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
9,'El-Sharqia', 'الشرقية','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
10,'El-Beheira', 'البحيرة','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
11,'Damietta', 'دمياط','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
12,'Matrouh', 'مطروح','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
13,'Beni Suaif ', 'بني سويف','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
14,'New Valley', 'الوادي الجديد','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
15,'Suez', 'السويس','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
16,'South Sinai', 'جنوب سيناء','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
17,'Sohag', 'سوهاج','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
18,'Aswan', 'أسوان','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
19,'Asuit', 'أسيوط','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
20,'Ismailia', 'الإسماعيلية','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
21,'Kafar Alshaykh', 'كفر الشيخ','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
22,'Luxor', 'الأقصر','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
23,'Menia', 'المنيا','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
24,'North Sinai', 'شمال سيناء','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
25,'Port Said', 'بور سعيد','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
26,'Qena', 'قنا','1')");
        \DB::insert("insert into states (id, name, name_ar,  country_id) values (
27,'Red Sea', 'البحر الاحمر','1')");

    }
}
