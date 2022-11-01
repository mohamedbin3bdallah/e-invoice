<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllcitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->delete();

        \DB::insert("insert into cities (id, name, name_ar,  state_id) values (
1,'Heliopolis', 'مصر الجديده','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
2,'Nasr City', 'مدينه نصر','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
3,'El-Maadi', 'المعادي','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
4,'New Cairo', 'التجمع الخامس','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
5,'Hadayek El-Kobba', 'حدائق القبة','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
6,'El-Obour City', 'مدينة العبور','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
7,'El-Manyal', 'المنيل','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
8,'Shoubra', 'شبرا','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
9,'West El-Balad', 'وسط البلد','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
10,'10th of Ramada', 'العاشر من رمضان','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
11,'Ain Shams', 'عين شمس','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
12,'El-Abbasia', 'العباسية','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
13,'El-Mokattam', 'المقطم','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
14,'El-Rehab', 'الرحاب','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
15,'El-Sayeda Zainab', 'السيدة زينب','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
16,'El-Shorouk', 'الشروق','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
17,'El-Zaitou', 'الزيتون','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
18,'El-Zamalek', 'الزمالك','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
19,'Helwa', 'حلوان','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
20,'Madinaty', 'مدينتي','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
21,'Masr El-Kadima', 'مصر القديمة','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
22,'Dokki and Mohandessin', 'الدقي و المهندسين','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
23,'6th of October', '6 اكتوبر','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
24,'El-Haram', 'الهرم','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
25,'Faisal', 'فيصل','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
26,'El-Sheikh Zayed', 'الشيخ زايد','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
27,'Hadayek El-Ahram', 'حدائق الأهرام','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
28,'Al-Ajuza', 'العجوزة','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
29,'El-Giza', 'ميدان الجيزة','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
30,'Mahatet El-Raml', 'محطة الرمل','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
31,'Roshdy', 'رشدي','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
32,'Smouha', 'سموحة','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
33,'Sporting', 'سبورتينج','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
34,'Sidy Gaber', 'سيدي جابر','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
35,'Lora', 'لوران','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
36,'Camp Caesar', 'كامب شيزار','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
37,'El-Ibrahimia', 'الإبراهيمية','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
38,'Janaklees', 'جانكليس','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
39,'Abou Keir', 'ابو قير','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
40,'Bahary', 'بحري','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
41,'Bakos', 'باكوس','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
42,'Bulkly', 'بولكلي','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
43,'Cleopatra', 'كليوباترا','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
44,'El-Agamy', 'العجمي','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
45,'El-Amreya', 'العامرية','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
46,'El-Asafra', 'العصافرة','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
47,'El-Azarita', 'الأزاريطه','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
48,'El-Mansheyah', 'المنشية','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
49,'El-Montazah', 'المنتزه','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
50,'El-Seyouf', 'السيوف','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
51,'El-Shatby', 'الشاطبي','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
52,'El-Werdeya', 'الورديان','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
53,'Fouad Street', 'شارع فؤاد','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
54,'Glym', 'جليم','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
55,'Kafr Abdouh', 'كفر عبده','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
56,'King Mariout', 'كينج ماريوط','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
57,'Miamy', 'ميامي','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
58,'Moharam Bek', 'محرم بيك','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
59,'Moustafa Kamel', 'مصطفى كامل','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
60,'North Coast', 'الساحل الشمالي','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
61,'Saba Basha', 'سابا باشا','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
62,'San Stefano', 'سان ستيفانو','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
63,'Sidy Bishr', 'سيدي بشر','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
64,'Stanley', 'ستانلي','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
65,'Victoria', 'فيكتوريا','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
66,'Zizenia', 'زيزينيا','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
67,'Shoubra El-Kheima', 'شبرا الخيمة','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
68,'Mahalla', 'المحلة الكبرى','5')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
69,'Tanta', 'طنطا','5')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
70,'Shibin El-Kom', 'شبين الكوم','6')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
71,'Menouf', 'منوف','6')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
72,'Sadat City', 'مدينة السادات','6')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
73,'Ibsheway', 'ابشواي','7')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
74,'El-Mansoura', 'المنصورة','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
75,'El-Zagazig', 'الزقازيق','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
76,'Damanhur', 'دمنهور','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
77,'Marsa Matrouh', 'مرسى مطروح','12')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
78,'El Marg', 'المرج','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
79,'El Salam', 'السلام','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
80,'El Matareya', 'المطرية','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
81,'El Nuzhah (Airport)', 'النزهة (المطار)','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
82,'El Waili', 'الوايلي','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
83,'El Zawiyah El Hamra', 'الزاوية الحمراء','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
84,'El Sharabeya', 'الشرابية','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
85,'El Sahel', 'الساحل','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
86,'Rud El Farag', 'روض الفرج','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
87,'Bulaq', 'بولاق','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
88,'Azbakeya', 'الأزبكية','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
89,'Manshiyat Naser', 'منشأة ناصر ','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
90,'Qasr El Nil', 'قصر النيل','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
91,'Zamalek', 'الزمالك','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
92,'Abdeen', 'عابدين','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
93,'El Muski', 'الموسكي','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
94,'Bab El Shariyah', 'باب الشعرية','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
95,'El Zahir', 'الأزهر','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
96,'El Gamaliyah', 'الجمالية ','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
97,'El Darb El Ahmar', 'الدرب الأحمر','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
98,'El Khalifa', 'الخليفة','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
99,'El Basatin', 'البساتين','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
100,'Turah', 'طره','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
101,'15 Mayu', '15 مايو','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
102,'El Tabin', 'التبين ','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
103,'Badr City (includes New Heliopolis City)', 'مدينة بدر (تشمل مدينة هليوبليس الجديدة)','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
104,'Kharga', 'الخارجة','14')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
105,'Farafra', 'الفرافرة ','14')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
106,'Dakhla', 'الداخلة','14')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
107,'Baris', 'باريس','14')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
108,'Suez', 'السويس','15')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
109,'Alarbaein', 'الأربعين','15')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
110,'Aljanayun', 'الجناين','15')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
111,'Faisal', 'فيصل','15')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
112,'Dahab', 'دهب','16')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
113,'El tor', 'الطور','16')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
114,'Nuweiba', 'نويبع ','16')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
115,'Saint Catherine', 'سانت كاترين ','16')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
116,'Sharm El Sheikh', 'شرم الشيخ ','16')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
117,'Taba', 'طابا ','16')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
118,'Akhmim', 'أخميم','17')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
119,'Dar El Salam', 'دار السلام','17')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
120,'El Balyana', 'البليانة','17')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
121,'El Maragha', 'المراغة','17')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
122,'Girga', 'جرجا','17')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
123,'Juhayna', 'جهينة','17')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
124,'Sohag', 'سوهاج','17')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
125,'Tahta', 'طهطا','17')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
126,'10th of Ramadan', 'العاشر من رمضان.','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
127,'Abu Hammad', 'أبو حماد.','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
128,'Abu Kebir', 'أبو كبير.','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
129,'Awlad Saqr', 'اولاد صقر.','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
130,'Bilbeis', 'بلبيس','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
131,'Diyarb Negm', 'ديرب نجم.','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
132,'El Husseiniya', 'الحسينية.','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
133,'El Ibrahimiya', 'الإبراهيمية','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
134,'El Qurein', 'القرين.','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
135,'Faqous', 'فاقوس.','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
136,'Hihya', 'ههيا','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
137,'Kafr Saqr', 'كفر صقر.','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
138,'Mashtool El Souk', 'مشتول السوق','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
139,'Minya El Qamh', 'منياالقمح','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
140,'New Salhia', 'الصالحية الجديدة.','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
141,'Anfoushi', 'الانفوشى','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
142,'Dekhela', 'الدخيلة','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
143,'El Atareen', 'العطارين','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
144,'El Gomrok', 'الجمرك','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
145,'El Labban', 'اللبان','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
146,'El Maamora', 'المعمورة','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
147,'El Mandara', 'المندرة','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
148,'El Max', 'الماكس','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
149,'El Qabary', 'القبري','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
150,'El Saraya ', 'السرايا ','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
151,'Hadara', 'الحضرة','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
152,'Kafr Abdu', 'كفر عبده','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
153,'Karmoz', 'كرموز','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
154,'Kom El Deka', 'كوم الدكة','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
155,'Tharwat', 'ثروت','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
156,'Zezenia', 'زيزينيا','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
157,'Aswan', 'أسوان ','18')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
158,'Edfu', 'إدفو ','18')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
159,'Kom Ombo', 'كوم أمبو','18')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
160,'Draow', 'دراو','18')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
161,'Abnoub', 'أبنوب','19')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
162,'Asyut', 'أسيوط','19')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
163,'New Assiut', 'أسيوط الجديدة','19')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
164,'Badari', 'البداري','19')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
165,'Dayrout', 'ديروط','19')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
166,'Sidfa', 'صدفا','19')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
167,'The Ghanaim', 'الغنايم','19')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
168,'Qusiya', 'القوصية','19')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
169,'Manfalut', 'منفلوط','19')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
170,'Abu al-Matamir', 'أبو المطامير','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
171,'Abu Homs', 'أبو حمص','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
172,'Edco', 'إدكو','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
173,'Itai Baroud', 'إيتاي البارود','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
174,'Badr', 'بدر','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
175,'Delengat', 'الدلنجات','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
176,'Rahmaniyah', 'الرحمانية','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
177,'Rashid', 'رشيد','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
178,'Shubrakhit', 'شبراخيت','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
179,'Kafr El Dawar', 'كفر الدوار','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
180,'Com Hamada', 'كوم حمادة','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
181,'Mahmoudiyah', 'المحمودية','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
182,'New Nubaria', 'النوبارية الجديدة','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
183,'Wadi Natru', 'وادي النطرون','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
184,'Iihnasia', 'إهناسيا','13')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
185,'BBA', 'ببا','13')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
186,'New Beni Suef', 'بني سويف الجديدة','13')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
187,'Somasta', 'سمسطا','13')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
188,'Fashn', 'الفشن','13')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
189,'Naser', 'ناصر','13')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
190,'Al Wasta', 'الواسطى ','13')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
191,'Aga', 'أجا ','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
192,'Bilqas', 'بلقس ','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
193,'Damas', 'داماس','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
194,'Dikirnis', 'دكرنس','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
195,'El Gamaliya', 'الجمالية','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
196,'El Matareya', 'المطرية','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
197,'El Senbellawein', 'السنبلاوين','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
198,'Gamasa', 'جمصة','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
199,'Manzala', 'المنزلة','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
200,'Mit Elkorama', 'ميت الكوراما','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
201,'Mit Ghamr', 'ميت غمر','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
202,'Mit Salsil', 'ميت سالسيل','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
203,'Nabaroh', 'نباروه ','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
204,'Sherbin', 'شربين','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
205,'Talkha', 'طلخا','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
206,'Damietta', 'دمياط','11')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
207,'New Damietta', 'دمياط الجديدة','11')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
208,'Alruwda', 'الروضة ','11')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
209,'Zarqa', 'الزرقا ','11')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
210,'Alsarw', 'السرو ','11')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
211,'eizbat albaraj', 'عزبة البرج','11')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
212,'Faraskour', 'فارسكور','11')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
213,'Kafr El - Batikh', 'كفر البطيخ','11')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
214,'Meet Abu Ghaleb', 'ميت أبو غالب','11')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
215,'Fayoum', 'الفيوم','7')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
216,'Snores', 'سنورس','7')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
217,'Atsa', 'اطسا','7')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
218,'Tamiya', 'طامية','7')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
219,'Yusuf Alsadiq', 'يوسف الصديق','7')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
220,'Kafr El Zayat', 'كفر الزيات','5')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
221,'Santa', 'السنطة','5')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
222,'Al Mahalla Al Kobra', 'المحلة الكبرى','5')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
223,'Basion', 'بسيون','5')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
224,'Zefta', 'زفتى','5')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
225,'Samannoud', 'سمنود','5')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
226,'Kutour', 'قطور','5')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
227,'Dokki', 'الدقي','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
228,'Bulaq ad Dakrur', 'بولاق الدكرور','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
229,'Imbabah', 'إمبابة','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
230,'Omrania', 'العمرانية','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
231,'Monib', 'المنيب','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
232,'Kafr Tuhurmus', 'كفر طهرمس','2')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
233,'Altal alkabir', 'التل الكبير','20')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
234,'Fayd', 'فايد','20')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
235,'Alqintarat shrq', 'القنطرة شرق','20')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
236,'Alqintarat gharb', 'القنطرة غرب','20')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
237,'Abuswir', 'أبوصوير','20')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
238,'Alqasasin', 'القصاصين','20')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
239,'kafar Alshaykh', 'كفر الشيخ','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
240,'Sayidi Ghazi.', 'سيدي غازي.','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
241,'Dusuq.', 'دسوق.','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
242,'Fawh.', 'فوه.','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
243,'Baltim', ' بلطيم ','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
244,'Albarils.', ' البرلس.','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
245,'Bayla.', 'بيلا.','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
246,'Sayidi Salim.', 'سيدي سالم.','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
247,'Alhamul.', 'الحامول.','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
248,'Qalin.', 'قلين.','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
249,'Mutubis', 'مطوبس','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
250,'Alriyad', 'الرياض','21')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
251,'Armant', 'أرمنت','22')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
252,'Luxor', 'الأقصر','22')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
253,'New Luxor', 'الأقصر الجديدة','22')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
254,'Esna', 'إسنا','22')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
255,'Al Bayadiya', 'البياضية ','22')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
256,'Al Zinia', 'الزينية','22')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
257,'AL Tud', 'الطود ','22')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
258,'New Tiba ', 'طيبة الجديدة','22')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
259,'Alhammam', 'الحمام‏ ','12')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
260,'Salloum', 'السلوم‏ ','12')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
261,'Sidi Brani', 'سيدي براني‏ ','12')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
262,'Siwa', 'سيوة‏ ','12')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
263,'Al Dabaa', 'الضبعة‏ ','12')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
264,'Alalmein', 'العلمين‏ ','12')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
265,'Marsa Matruh', 'مرسى مطروح‏ ','12')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
266,'Najila', 'النجيلة‏ ','12')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
267,'Magagha', 'مغاغة','23')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
268,'Bani Mazar', 'بني مزار','23')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
269,'Mattay', 'مطاي','23')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
270,'Samalut', 'سمالوط','23')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
271,'Menia', 'المنيا','23')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
272,'Abu Qurqas', 'أبو قرقاص','23')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
273,'Malawy', 'ملوي','23')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
274,'Deir Mawas', 'دير مواس','23')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
275,'AlAdwa', 'العدوة','23')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
276,'Alshuhadaa', 'الشهداء','6')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
277,'Ashmon', 'أشمون','6')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
278,'Albajur', 'الباجور','6')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
279,'Barikat alsbe', 'بركة السبع','6')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
280,'Sars El-Layan', 'سرس الليان','6')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
281,'Quesna', 'قويسنا','6')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
282,'tala', 'تلا','6')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
283,'Biir aleabd', 'بئر العبد','24')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
284,'Nakhl', 'نخل','24')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
285,'Alhasana', 'الحسنة','24')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
286,'Alearish', 'العريش','24')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
287,'Alshaykh zawid', 'الشيخ زويد','24')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
288,'Rafah', 'رفح','24')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
289,'Port Fowad', 'بورفؤاد','25')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
290,'Hayi Aljanub', 'حي الجنوب','25')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
291,'Hayi Alarab', 'حي العرب','25')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
292,'Hayi Alshrq', 'حي الشرق','25')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
293,'Hayi Aldawahi', 'حي الضواحى','25')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
294,'Hayi Alzuhuwr', 'حي الزهور','25')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
295,'Hayi Almunakh', 'حي المناخ','25')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
296,'Hayi Gharb', 'حي غرب','25')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
297,'Alqanatir alkhayria', 'القناطر الخيرية','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
298,'Banha', 'بنها','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
299,'Bahtim', 'بهتيم','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
300,'Alkhusus', 'الخصوص','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
301,'Shabin Alqanatir', 'شبين القناطر','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
302,'Tukh', 'طوخ','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
303,'Aloubur', 'العبور ','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
304,'Qalyub', 'قليوب','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
305,'Qaha', 'قها','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
306,'Kafar Shakar', 'كفر شكر','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
307,'Abu Tesht', 'أبو تشت','26')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
308,'Farshout', 'فرشوط','26')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
309,'Nag Hammadi', 'نجع حمادي','26')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
310,'Alwaqf', 'الوقف','26')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
311,'Deshna', 'دشنا','26')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
312,'Qena', 'قنا ','26')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
313,'Qaft', 'قفط','26')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
314,'Qus', 'قوص','26')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
315,'Naqada', 'نقادة','26')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
316,'Ras Ghareb', 'رأس غارب','27')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
317,'Hurghada', 'الغردقة','27')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
318,'Alqusair', 'القصير','27')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
319,'Safaga', 'سفاجا','27')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
320,'Marsa Alam', 'مرسى علم','27')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
321,'Bernice', 'برنيس ','27')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
322,'Shalatin', 'شلاتين','27')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
323,'Halaib', 'حلايب ','27')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
324,'Cairo', 'القاهرة','1')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
325,'Alexandria', 'الإسكندرية','3')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
326,'Gharbia', 'الغربية','5')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
327,'Beni Suaif', 'بني سويف','13')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
328,'El-Sharqia', 'الشرقية','9')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
329,'Port Said', 'بور سعيد','25')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
330,'Ismailia', 'الإسماعيلية','20')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
331,'El-Dakahlia', 'الدقهلية','8')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
332,'El-Beheira', 'البحيرة','10')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
333,'Qalyubia', 'القليوبية','4')");
\DB::insert("insert into cities (id, name, name_ar,  state_id) values (
334,'Menoufia', 'المنوفية','6')");

        
    }
}
