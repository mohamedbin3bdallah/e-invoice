<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('activity_types')->delete();
        $activity_types = array(
            [
                "code"=> "0111",
                "description_en"=> "Cultivation of grains and crops (except for rice), legumes and oilseeds",
                "description_ar"=> "زراعة الحبوب والمحاصيل ( فيما عدا الارز ) والبقوليات والحبوب الزيتية"
                ],
                [
                "code"=> "0112",
                "description_en"=> "Cultivation of rice",
                "description_ar"=> "زراعة الارز"
                ],
                [
                "code"=> "0113",
                "description_en"=> "Growing vegetables, melons, roots and tubers",
                "description_ar"=> "زراعة الخضر ؤالبطيخ والجذور والدرنات"
                ],
                [
                "code"=> "0114",
                "description_en"=> "Cultivation of sugar cane",
                "description_ar"=> "زراعة قصب السكر"
                ],
                [
                "code"=> "0115",
                "description_en"=> "Tobacco cultivation",
                "description_ar"=> "زراعة التبغ"
                ],
                [
                "code"=> "0116",
                "description_en"=> "Growing fiber crops",
                "description_ar"=> "زراعة المحاصيل ذات الالياف"
                ],
                [
                "code"=> "0119",
                "description_en"=> "Cultivation of other non-perennial crops",
                "description_ar"=> "زراعة المحاصيل غير المعمرة الاخرى"
                ],
                [
                "code"=> "0121",
                "description_en"=> "the cultivation of grapevines.",
                "description_ar"=> "زراعة الكروم"
                ],
                [
                "code"=> "0122",
                "description_en"=> "Growing tropical and subtropical fruits",
                "description_ar"=> "زراعة الفواكه الاستوائية وشبه الاستوائية"
                ],
                [
                "code"=> "0123",
                "description_en"=> "Cultivation of citrus fruits",
                "description_ar"=> "زراعة الموالح"
                ],
                [
                "code"=> "0124",
                "description_en"=> "Cultivation of fruit with Date kernel and from palm trees",
                "description_ar"=> "زراعة الفواكة ذات النواة والناتجة عن انواع النخيل"
                ],
                [
                "code"=> "0125",
                "description_en"=> "Plant fruit trees and shrubs and other nuts",
                "description_ar"=> "زراعة أشجار وشجيرات الفواكهة والمكسرات الاخرى"
                ],
                [
                "code"=> "0126",
                "description_en"=> "Growing oil fruits",
                "description_ar"=> "زراعة الفواكهة الزيتية"
                ],
                [
                "code"=> "0127",
                "description_en"=> "Cultivation of the crops from which drinks are extracted",
                "description_ar"=> "زراعة المحاصيل التى تستخرج منها المشروبات"
                ],
                [
                "code"=> "0128",
                "description_en"=> "Cultivation of spice crops, aromatics, medicine and pharmaceutical drugs",
                "description_ar"=> "زراعة محاصيل التوابل والعطريات والادوية والعقاقير الصيدلانية"
                ],
                [
                "code"=> "0129",
                "description_en"=> "Cultivation of other perennial crops",
                "description_ar"=> "زراعة المحاصيل المعمرة الاخرى"
                ],
                [
                "code"=> "0130",
                "description_en"=> "Crop breeding",
                "description_ar"=> "تكاثر المحاصيل"
                ],
                [
                "code"=> "0141",
                "description_en"=> "Breeding of cattle and buffalo",
                "description_ar"=> "تربية الماشية والجواميس"
                ],
                [
                "code"=> "0142",
                "description_en"=> "Breeding of horses and mare",
                "description_ar"=> "تربية الخيول و الفرس"
                ],
                [
                "code"=> "0143",
                "description_en"=> "Breeding of camels",
                "description_ar"=> "تربية الجمال والهجن"
                ],
                [
                "code"=> "0144",
                "description_en"=> "Breeding sheep and goats",
                "description_ar"=> "تربية الخراف والماعز"
                ],
                [
                "code"=> "0145",
                "description_en"=> "Breeding of Pig",
                "description_ar"=> "تربية الحنازير"
                ],
                [
                "code"=> "0146",
                "description_en"=> "Poultry farming",
                "description_ar"=> "تربية الدواجن"
                ],
                [
                "code"=> "0149",
                "description_en"=> "Breeding other animals",
                "description_ar"=> "تربية الحيوانات الاخرى"
                ],
                [
                "code"=> "0150",
                "description_en"=> "Mixed education",
                "description_ar"=> "التربية المختلطة"
                ],
                [
                "code"=> "0161",
                "description_en"=> "Support activities for crop production",
                "description_ar"=> "الانشطة الداعمة لانتاج المحاصيل"
                ],
                [
                "code"=> "0162",
                "description_en"=> "Activities in support of animal production",
                "description_ar"=> "الانشطة الداعمة لانتاج الحيوانات"
                ],
                [
                "code"=> "0163",
                "description_en"=> "Post-harvest activities",
                "description_ar"=> "الانشطة اللاحقة لحصاد المحاصيل"
                ],
                [
                "code"=> "0164",
                "description_en"=> "Preparing grains for reproduction",
                "description_ar"=> "تجهيز الحبوب للتكاثر"
                ],
                [
                "code"=> "0170",
                "description_en"=> "Hunting, erection, and related service activities",
                "description_ar"=> "الصيد ونصب الاشراك وانشطة الخدمات ذات الصلة"
                ],
                [
                "code"=> "0210",
                "description_en"=> "Forest care and forest-related activities",
                "description_ar"=> "رعاية الغابات والانشطة المتصلة بالغابات"
                ],
                [
                "code"=> "0220",
                "description_en"=> "Wood cutting",
                "description_ar"=> "قطع الاخشاب"
                ],
                [
                "code"=> "0230",
                "description_en"=> "Assembling non-wood forest products",
                "description_ar"=> "تجميع المنتجات غير الخشبية بالغابات"
                ],
                [
                "code"=> "0240",
                "description_en"=> "Forest support services",
                "description_ar"=> "الخدمات الداعمة للغابات"
                ],
                [
                "code"=> "0311",
                "description_en"=> "Fishing",
                "description_ar"=> "الصيد البحرى"
                ],
                [
                "code"=> "0312",
                "description_en"=> "River fishing",
                "description_ar"=> "الصيد النهرى"
                ],
                [
                "code"=> "0321",
                "description_en"=> "Marine farms",
                "description_ar"=> "المزارع البحرية"
                ],
                [
                "code"=> "0322",
                "description_en"=> "River farms",
                "description_ar"=> "المزارع النهرية"
                ],
                [
                "code"=> "0411",
                "description_en"=> "Earn a job",
                "description_ar"=> "كسب عمل"
                ],
                [
                "code"=> "0412",
                "description_en"=> "Income from government agencies salaries",
                "description_ar"=> "ايرادات من مرتبات جهات حكوميه"
                ],
                [
                "code"=> "0413",
                "description_en"=> "Income and salaries from the public business sector",
                "description_ar"=> "إيرادات ومرتبات من قطاع الاعمال العام"
                ],
                [
                "code"=> "0414",
                "description_en"=> "Income and salaries from the private sector",
                "description_ar"=> "ايرادات ومرتبات من قطاع خاص"
                ],
                [
                "code"=> "0415",
                "description_en"=> "Income and salary from non-subject entities",
                "description_ar"=> "ايرادات ومرتبات من جهات غير خاضعه"
                ],
                [
                "code"=> "0416",
                "description_en"=> "Inspection and sting",
                "description_ar"=> "تفتيش ودمغة"
                ],
                [
                "code"=> "0441",
                "description_en"=> "Income of agricultural lands",
                "description_ar"=> "ايرادالاراضي الزراعيه"
                ],
                [
                "code"=> "0442",
                "description_en"=> "Revenue from constructed real estate",
                "description_ar"=> "ايراد العقارات المبنيه"
                ],
                [
                "code"=> "0444",
                "description_en"=> "Income of real estate activities",
                "description_ar"=> "ايراد الانشطه العقاريه"
                ],
                [
                "code"=> "0451",
                "description_en"=> "Errand stamp",
                "description_ar"=> "دمغة مأمورية"
                ],
                [
                "code"=> "0461",
                "description_en"=> "Revenue from non-funders",
                "description_ar"=> "ايرادات غير الممولين"
                ],
                [
                "code"=> "0462",
                "description_en"=> "Revenue of transferred capital",
                "description_ar"=> "إيراد رؤوس الأموال المنقولة"
                ],
                [
                "code"=> "0463",
                "description_en"=> "Income earned from abroad",
                "description_ar"=> "ايرادات محصله من الخارج"
                ],
                [
                "code"=> "0464",
                "description_en"=> "Other categories / miscellaneous other income",
                "description_ar"=> "فئات اخري/ ايرادات اخري متنوعه"
                ],
                [
                "code"=> "0471",
                "description_en"=> "Free market revenue",
                "description_ar"=> "ايرادات أسواق حرة"
                ],
                [
                "code"=> "0472",
                "description_en"=> "Free Zones revenue",
                "description_ar"=> "ايرادات مناطق حره"
                ],
                [
                "code"=> "0510",
                "description_en"=> "Hard coal mining",
                "description_ar"=> "تعدين الفحم الصلب"
                ],
                [
                "code"=> "0520",
                "description_en"=> "Lignite mining",
                "description_ar"=> "تعدين الليجنيت"
                ],
                [
                "code"=> "0610",
                "description_en"=> "Extract the crude oil",
                "description_ar"=> "استخرج البترول الخام"
                ],
                [
                "code"=> "0620",
                "description_en"=> "Extract natural gas",
                "description_ar"=> "استخرج االغاز الطبيعى"
                ],
                [
                "code"=> "0710",
                "description_en"=> "Iron ore mining",
                "description_ar"=> "تعدين الحديد الخام"
                ],
                [
                "code"=> "0721",
                "description_en"=> "Uranium and raw thorium mining",
                "description_ar"=> "تعدين اليورانيوم والثوريوم الخام"
                ],
                [
                "code"=> "0729",
                "description_en"=> "Mining other non-ferrous metals",
                "description_ar"=> "تعدين المعادن الخام الاخرى غير الحديدية"
                ],
                [
                "code"=> "0810",
                "description_en"=> "Quarrying to extract stones, sand and shale",
                "description_ar"=> "استغلال المحاجر لاستخراج الاحجار والرمال والطفل"
                ],
                [
                "code"=> "0891",
                "description_en"=> "Chemical minerals and fertilizer extraction",
                "description_ar"=> "استخراج المعادن الكيميائية والاسمدة"
                ],
                [
                "code"=> "0892",
                "description_en"=> "Peat extraction",
                "description_ar"=> "استخراج الخث"
                ],
                [
                "code"=> "0893",
                "description_en"=> "Salt extraction",
                "description_ar"=> "استخراج الملح"
                ],
                [
                "code"=> "0899",
                "description_en"=> "Other mining and quarrying activities are not elsewhere classified",
                "description_ar"=> "الانشطة الاخرى للتعدين واستغلال المحاجر غير مصنفة فى موضع اخر"
                ],
                [
                "code"=> "0910",
                "description_en"=> "Service activities in support of oil and natural gas extraction",
                "description_ar"=> "انشطة الخدمات الداعمة لاعمال استخراج البترول والغاز الطبيعى"
                ],
                [
                "code"=> "0990",
                "description_en"=> "Service activities in support of other mining and quarrying activities",
                "description_ar"=> "انشطة الخدمات الداعمة للاعمال الاخرى للتعدين واستغلال المحاجر"
                ],
                [
                "code"=> "1010",
                "description_en"=> "Meat processing and preservation",
                "description_ar"=> "تصنيع وحفظ اللحوم"
                ],
                [
                "code"=> "1020",
                "description_en"=> "Manufacture and preservation of fish, crustaceans and mollusks",
                "description_ar"=> "تصنيع وحفظ الاسماك والقشريات والرخويات"
                ],
                [
                "code"=> "1030",
                "description_en"=> "Manufacturing and preserving fruits and vegetables",
                "description_ar"=> "تصنيع وحفظ الفواكهة و الخضراوات"
                ],
                [
                "code"=> "1040",
                "description_en"=> "Manufacture of vegetable and animal oils and fats",
                "description_ar"=> "تصنيع الزيوت و الدهون الحيوانية والنباتية"
                ],
                [
                "code"=> "1050",
                "description_en"=> "Dairy products manufacturing",
                "description_ar"=> "تصنيع منتجات الالبان"
                ],
                [
                "code"=> "1061",
                "description_en"=> "Manufacture of grain mill products",
                "description_ar"=> "تصنيع منتجات طواحين الحبوب"
                ],
                [
                "code"=> "1062",
                "description_en"=> "Manufacture of starch and starch products",
                "description_ar"=> "تصنيع منتجات النشاء ومنتجات النشاء"
                ],
                [
                "code"=> "1071",
                "description_en"=> "Manufacturing bakery products",
                "description_ar"=> "تصنيع منتجات المخابز"
                ],
                [
                "code"=> "1072",
                "description_en"=> "Sugar industry",
                "description_ar"=> "صناعة السكر"
                ],
                [
                "code"=> "1073",
                "description_en"=> "Manufacture of cocoa, chocolate and sugar confectionery",
                "description_ar"=> "تصنيع الكاكاو والشيكولاتة والحلويات السكرية"
                ],
                [
                "code"=> "1074",
                "description_en"=> "Manufacturing pasta, strips, couscous and similar starchy products",
                "description_ar"=> "تصنيع المعكرونة وشرائطها والكسكسى والمنتجات النشوية المماثلة"
                ],
                [
                "code"=> "1075",
                "description_en"=> "Meals and ready-made food industry",
                "description_ar"=> "صناعة الوجبات و الاغذية الجاهزة"
                ],
                [
                "code"=> "1079",
                "description_en"=> "Manufacture of other products not classified elsewhere",
                "description_ar"=> "صناعة المنتجات الاخرى غير مصنفة فى موضع اخر"
                ],
                [
                "code"=> "1080",
                "description_en"=> "Prepared animal food industry",
                "description_ar"=> "صناعة الاغذية الحيوانية المجهزة"
                ],
                [
                "code"=> "1101",
                "description_en"=> "Spirits distilled, refined and mixed",
                "description_ar"=> "تقطير المشروبات الروحية وتكريرها وخلطها"
                ],
                [
                "code"=> "1102",
                "description_en"=> "Winemaking",
                "description_ar"=> "صناعة النبيذ"
                ],
                [
                "code"=> "1103",
                "description_en"=> "The manufacture of alcoholic drinks derived from the molten and the manufacture of molten",
                "description_ar"=> "صناعة المشروبات الكحولية المشتقة من المولت وصنع المولت"
                ],
                [
                "code"=> "1104",
                "description_en"=> "Manufacturing soft drinks and producing mineral water",
                "description_ar"=> "صناعة المشروبات المرطبة وانتاج المياة المعدنية"
                ],
                [
                "code"=> "1200",
                "description_en"=> "Manufacture of tobacco products",
                "description_ar"=> "صناعة منتجات التبغ"
                ],
                [
                "code"=> "1311",
                "description_en"=> "Processing and spinning of textile fibers",
                "description_ar"=> "تجهيز وغزل الياف المنسوجات"
                ],
                [
                "code"=> "1312",
                "description_en"=> "Textile weave",
                "description_ar"=> "نسج المنسوجات"
                ],
                [
                "code"=> "1313",
                "description_en"=> "The textile industry",
                "description_ar"=> "صناعة المنسوجات"
                ],
                [
                "code"=> "1391",
                "description_en"=> "Manufacture of knitted and crocheted fabrics",
                "description_ar"=> "صناعة الاقمشة التريكو والكروشية"
                ],
                [
                "code"=> "1392",
                "description_en"=> "Manufacture of ready-made textile accessories, except garment wear",
                "description_ar"=> "صناعة مستلزمات المنسوجات الجاهزة باستثناء ملابس الزينة"
                ],
                [
                "code"=> "1393",
                "description_en"=> "Carpet and blanket industry",
                "description_ar"=> "صناعة السجاد والبطاطين"
                ],
                [
                "code"=> "1394",
                "description_en"=> "Manufacture of ropes, thick and double ropes and nets",
                "description_ar"=> "صناعة الحبال والحبال الغليظة والمذدوجة والشباك"
                ],
                [
                "code"=> "1399",
                "description_en"=> "Other textile industry not elsewhere classified",
                "description_ar"=> "صناعة المنسوجات الاخرى غير مصنفة فى موضع اخر"
                ],
                [
                "code"=> "1410",
                "description_en"=> "Manufacture of garment with the exception of fur",
                "description_ar"=> "صناعة الملابس ذات الزينة باستثناء الفراء"
                ],
                [
                "code"=> "1420",
                "description_en"=> "Fur accessories industry",
                "description_ar"=> "صناعة مستلزمات الفراء"
                ],
                [
                "code"=> "1430",
                "description_en"=> "The manufacture of clothing, knitted and crocheted",
                "description_ar"=> "صناعة ملابس الزينة بالتريكو والكروشية"
                ],
                [
                "code"=> "1511",
                "description_en"=> "Tanning and processing of leather, fillings and dyeing of fur",
                "description_ar"=> "دبغ وتجهيز الجلود والحشوات وصباغة الفراء"
                ],
                [
                "code"=> "1512",
                "description_en"=> "Luggage, handbags and similar industries, along with saddles and horse sets",
                "description_ar"=> "صناعة حفائب الامتعة وحقائب اليد وما شابهة ذلك الى جانب السروج واطقم الجياد"
                ],
                [
                "code"=> "1520",
                "description_en"=> "Shoe manufacturing",
                "description_ar"=> "صناعة الاحذية"
                ],
                [
                "code"=> "1610",
                "description_en"=> "Sawing wood and abrasion",
                "description_ar"=> "نشر الخشب وسحجة"
                ],
                [
                "code"=> "1621",
                "description_en"=> "Sheets made of wood veneer and wood-based panels",
                "description_ar"=> "الصفائح من قشرة الخشب والالواح ذات الاساس الخشبى"
                ],
                [
                "code"=> "1622",
                "description_en"=> "Manufacture of carpentry accessories intended for buildings and installations",
                "description_ar"=> "صناعة مستلزمات النجارة المعدة للابنية والمنشات"
                ],
                [
                "code"=> "1623",
                "description_en"=> "Wooden boxes industry",
                "description_ar"=> "صناعة الصناديق الخشبية"
                ],
                [
                "code"=> "1629",
                "description_en"=> "Manufacture of wood, wood products and cork, except furniture, and manufacture of articles produced from straw and sheets",
                "description_ar"=> "صناعة الاخشاب والمنتجات الخشبية والفلين باستثناء الاثاث وصناعة الاصناف المنتجة من القش والصفائح"
                ],
                [
                "code"=> "1701",
                "description_en"=> "Paper and carvatard pulp industry",
                "description_ar"=> "صناعة عجائن الورق و الورق المقوى ( الكارتون )"
                ],
                [
                "code"=> "1702",
                "description_en"=> "Manufacture of corrugated paper and paperboard and boxes made of paper and paperboard",
                "description_ar"=> "صناعة الورق والورق المقوى المموج والصناديق المصنوعة من الورق والورق المقوى"
                ],
                [
                "code"=> "1709",
                "description_en"=> "Manufacture of other articles of paper and paperboard",
                "description_ar"=> "صناعة اصناف اخرى من الورق والورق المقوى"
                ],
                [
                "code"=> "1811",
                "description_en"=> "printing",
                "description_ar"=> "الطباعة"
                ],
                [
                "code"=> "1812",
                "description_en"=> "Printing service activities",
                "description_ar"=> "انشطة الخدمات المرتبطة بالطباعة"
                ],
                [
                "code"=> "1820",
                "description_en"=> "Clone recorded media",
                "description_ar"=> "استنساخ وسائل الاعلام المسجلة"
                ],
                [
                "code"=> "1910",
                "description_en"=> "Coke oven products industry",
                "description_ar"=> "صناعة منتجات افران الكوك"
                ],
                [
                "code"=> "1920",
                "description_en"=> "Refined petroleum products",
                "description_ar"=> "المنتجات النفطية المكررة"
                ],
                [
                "code"=> "2011",
                "description_en"=> "Basic chemicals",
                "description_ar"=> "المواد الكيميائية الاساسية"
                ],
                [
                "code"=> "2012",
                "description_en"=> "Manufacture of fertilizers and nitrogen compounds",
                "description_ar"=> "صناعة الاسمدة والمركبات الازوتية"
                ],
                [
                "code"=> "2013",
                "description_en"=> "Plastics industry in its primary forms and synthetic rubber",
                "description_ar"=> "صناعة اللادائن فى اشكالها الاولية والمطاط الصناعى"
                ],
                [
                "code"=> "2021",
                "description_en"=> "Pesticide industry and other agricultural chemical products",
                "description_ar"=> "صناعة مبيدات الافات والمنتجات الكيميائية الزراعية الاخرى"
                ],
                [
                "code"=> "2022",
                "description_en"=> "Manufacture of paints, varnishes, and similar coatings, printing inks and molds",
                "description_ar"=> "صناعة الدهانات والورنيش والطلاء المماثلة واحبار الطباعة والمصطكات"
                ],
                [
                "code"=> "2023",
                "description_en"=> "Manufacture of soap, disinfectants, cleaning and polishing preparations, perfumes and cosmetics",
                "description_ar"=> "صناعة الصابون والمطهرات ومستحضرات التنظيف والتلميع والعطور ومستحضرات التجميل"
                ],
                [
                "code"=> "2029",
                "description_en"=> "Manufacture of other chemical products not classified elsewhere",
                "description_ar"=> "صناعة المنتجات الكيميائية الاخرى غير المصنفة فى موضع اخر"
                ],
                [
                "code"=> "2030",
                "description_en"=> "Industrial fiber industry",
                "description_ar"=> "صناعة الالياف الصناعية"
                ],
                [
                "code"=> "2100",
                "description_en"=> "Manufacture of pharmaceutical, chemical, and plant products",
                "description_ar"=> "صناعة المستحضرات الصيدلانية والكيميائية الدواءية والمنتجات النباتية"
                ],
                [
                "code"=> "2211",
                "description_en"=> "Manufacture of rubber tires and tubes, renewing and rebuilding the outer surfaces of rubber tires",
                "description_ar"=> "صناعة الاطارات والانابيب المطاطية وتجديد الاسطح الخارجية للاطارات المطاطية واعادة بنائها"
                ],
                [
                "code"=> "2219",
                "description_en"=> "Manufacture of other rubber products",
                "description_ar"=> "صناعة المنتجات المطاطية الاخرى"
                ],
                [
                "code"=> "2220",
                "description_en"=> "Plastics industry",
                "description_ar"=> "صناعة منتجات اللادائن"
                ],
                [
                "code"=> "2310",
                "description_en"=> "Glass and its products industry",
                "description_ar"=> "صناعة الزجاج ومنتجاتة"
                ],
                [
                "code"=> "2391",
                "description_en"=> "Manufacture of fusion products",
                "description_ar"=> "صناعة المنتجات المقاومة للانصهار"
                ],
                [
                "code"=> "2392",
                "description_en"=> "Manufacture of Shale products for Building",
                "description_ar"=> "صناعة مواد الطفلة الخاصة بالبناء"
                ],
                [
                "code"=> "2393",
                "description_en"=> "Manufacture of other Porcelain and ceramic products",
                "description_ar"=> "صناعة منتجات البرسولين والسيراميك الاخرى"
                ],
                [
                "code"=> "2394",
                "description_en"=> "Cement, lime and plaster industry",
                "description_ar"=> "صناعة الاسمنت والجير والجص"
                ],
                [
                "code"=> "2395",
                "description_en"=> "Manufacture of concrete products, cement and plaster",
                "description_ar"=> "صناعة منتجات الخرسانة والاسمنت والجص"
                ],
                [
                "code"=> "2396",
                "description_en"=> "Cutting, forming and completing the stone processing",
                "description_ar"=> "قطع وتشكيل واتمام تجهيز الاحجار"
                ],
                [
                "code"=> "2399",
                "description_en"=> "Manufacture of non-metallic minerals products not classified elsewhere",
                "description_ar"=> "صناعة منتجات المعادن الافلزية الاخرى غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "2410",
                "description_en"=> "The industry of basic iron and steel",
                "description_ar"=> "صناعة الحديد والصلب القاعديين"
                ],
                [
                "code"=> "2420",
                "description_en"=> "Manufacture of precious and non-ferrous basic metals",
                "description_ar"=> "صناعة الفلزات الثمينة وغير الحديدية القاعدية"
                ],
                [
                "code"=> "2431",
                "description_en"=> "Iron and steel casting",
                "description_ar"=> "سبك الحديدوالصلب"
                ],
                [
                "code"=> "2432",
                "description_en"=> "Non-ferrous metal casting",
                "description_ar"=> "سبك المعادن غير الحديدية"
                ],
                [
                "code"=> "2511",
                "description_en"=> "Structural metal products industry",
                "description_ar"=> "صناعة المنتجات المعدنية الانشائية"
                ],
                [
                "code"=> "2512",
                "description_en"=> "Industry of tanks and metal containers",
                "description_ar"=> "صناعة الصهاريج والخزانات و الحاويات المعدنية"
                ],
                [
                "code"=> "2513",
                "description_en"=> "Water vapor generators except for central heating boilers in hot water",
                "description_ar"=> "مولدات بخار الماء باستثناء مراجل التدفئةالمركزية بالمياة الساخنة"
                ],
                [
                "code"=> "2520",
                "description_en"=> "Arms and ammunition industry",
                "description_ar"=> "صناعة الاسلحة والذخائر"
                ],
                [
                "code"=> "2591",
                "description_en"=> "Forming metals by hammering, pressing, casting, rolling, and treatment of metal powders",
                "description_ar"=> "تشكيل المعادن بالطرق والكبس و السبك والدلفنة ومعالجة مساحيق المعادن"
                ],
                [
                "code"=> "2592",
                "description_en"=> "Metal processing and coating",
                "description_ar"=> "معالجة وطلى المعادن"
                ],
                [
                "code"=> "2593",
                "description_en"=> "Manufacture of cutting tools, hand tools and general metal tools",
                "description_ar"=> "صناعة ادوات القطع والعدد اليدوية والادوات المعدنية العامة"
                ],
                [
                "code"=> "2599",
                "description_en"=> "Manufacture of other fabricated metal products not classified elsewhere",
                "description_ar"=> "صناعة منتجات المعادن المشكلة الاخرى غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "2610",
                "description_en"=> "Electronic components and panels industry",
                "description_ar"=> "صناعة المكونات والالواح الاليكترونية"
                ],
                [
                "code"=> "2620",
                "description_en"=> "The manufacture of electronic computers and related devices",
                "description_ar"=> "صناعة الحاسبات الاليكترونية و الاجهزة المتصلة بة"
                ],
                [
                "code"=> "2630",
                "description_en"=> "Communications equipment industry",
                "description_ar"=> "صناعة اجهزة الاتصالات"
                ],
                [
                "code"=> "2640",
                "description_en"=> "Electronic devices industry",
                "description_ar"=> "صناعة الاجهزة الاليكترونية"
                ],
                [
                "code"=> "2651",
                "description_en"=> "Manufacturing measuring, testing, navigation and control devices",
                "description_ar"=> "صناعة اجهزة القياس والاختبار و الملاحة والتحكم"
                ],
                [
                "code"=> "2652",
                "description_en"=> "Watch and alarm clock industry",
                "description_ar"=> "صناعة الساعات والمنبهات"
                ],
                [
                "code"=> "2660",
                "description_en"=> "Radiation, medical and therapeutic electronic devices industry",
                "description_ar"=> "صناعة الاجهزة الاشعاعية والطبية والعلاجية اللاليكترونية"
                ],
                [
                "code"=> "2670",
                "description_en"=> "Optical equipment and imaging equipment industry",
                "description_ar"=> "صناعة المعدات البصرية واجهزة التصوير"
                ],
                [
                "code"=> "2680",
                "description_en"=> "Optical and magnetic conveyor industry",
                "description_ar"=> "صناعة الوسائل الناقلة البصرية والمغنطيسية"
                ],
                [
                "code"=> "2710",
                "description_en"=> "Manufacture of motors, generators, electrical transformers, devices and control panels for electricity distribution",
                "description_ar"=> "صناعة المحركات والمولدات والمحولات الكهربائية واجهزة ولوحات التحكم فى توزيع الكهرباء"
                ],
                [
                "code"=> "2720",
                "description_en"=> "Manufacture of dry and stored batteries",
                "description_ar"=> "صناعة البطاريات الجافة والمختزنة"
                ],
                [
                "code"=> "2731",
                "description_en"=> "Industrial fiber cable industry",
                "description_ar"=> "صناعة كابلات الالياف الصناعية"
                ],
                [
                "code"=> "2732",
                "description_en"=> "Other electrical and electronic wires and cables",
                "description_ar"=> "صناعة الاسلاك الكهربائية والاليكترونية الاخرى والكابلات"
                ],
                [
                "code"=> "2733",
                "description_en"=> "Wire devices industry",
                "description_ar"=> "صناعة اجهزة الاسلاك"
                ],
                [
                "code"=> "2740",
                "description_en"=> "Electrical lighting devices industry",
                "description_ar"=> "صناعة اجهزة الانارة الكهربائية"
                ],
                [
                "code"=> "2750",
                "description_en"=> "Home appliances industry",
                "description_ar"=> "صناعة الاجهزة المنزلية"
                ],
                [
                "code"=> "2790",
                "description_en"=> "Other electrical appliances industry",
                "description_ar"=> "صناعة الاجهزة الكهربائية الاخرى"
                ],
                [
                "code"=> "2811",
                "description_en"=> "Manufacture of generators and engines, with the exception of aircraft, vehicles and motorcycles",
                "description_ar"=> "صناعة المولدات والمحركات باسقثناء الطائرات والمركبات ومحركات الموتيسيكلات"
                ],
                [
                "code"=> "2812",
                "description_en"=> "Liquid power devices industry",
                "description_ar"=> "صناعة اجهزة الطاقة السائلة"
                ],
                [
                "code"=> "2813",
                "description_en"=> "Manufacture of pumps, compressors, tapes and other valves",
                "description_ar"=> "صناعة المضخات والضواغط والاشرطة والصمامات الاخرى"
                ],
                [
                "code"=> "2814",
                "description_en"=> "Gears, carriers and driving devices industry",
                "description_ar"=> "صناعة التروس والحاملات واجهزة القيادة"
                ],
                [
                "code"=> "2815",
                "description_en"=> "Manufacture of furnaces, furnaces and their incinerators",
                "description_ar"=> "صناعة الافران و الاتونات ومحرقاتها"
                ],
                [
                "code"=> "2816",
                "description_en"=> "The elevators and equipment needed for it",
                "description_ar"=> "صناعة المصاعد والمعدات الازمة لها"
                ],
                [
                "code"=> "2817",
                "description_en"=> "Manufacture of office equipment and equipment (excluding electronic computers and their accessories)",
                "description_ar"=> "صناعة الاجهزة والمعدات المكتبية ( باستثناء الحاسبات الاليكترونية ومستلزماتها )"
                ],
                [
                "code"=> "2818",
                "description_en"=> "Manufacture of manual power steering equipment",
                "description_ar"=> "صناعة المعدات اليدوية لتوجية الطاقة"
                ],
                [
                "code"=> "2819",
                "description_en"=> "Other equipment industry of various purposes",
                "description_ar"=> "صناعة المعدات الاخرى ذات الاغراض المتنوعة"
                ],
                [
                "code"=> "2821",
                "description_en"=> "Agricultural and forestry equipment industry",
                "description_ar"=> "صناعة المعدات الزراعية والخاصة بالغابات"
                ],
                [
                "code"=> "2822",
                "description_en"=> "Manufacture of equipment and machinery for forming metals",
                "description_ar"=> "صناعة معدات واجهزة تشكيل المعادن"
                ],
                [
                "code"=> "2823",
                "description_en"=> "Metal equipment industry",
                "description_ar"=> "صناعة معدات المعادن"
                ],
                [
                "code"=> "2824",
                "description_en"=> "Mining and quarrying and building equipment industry",
                "description_ar"=> "صناعة معدات المناجم و المحاجر والبناء"
                ],
                [
                "code"=> "2825",
                "description_en"=> "Manufacture of food, beverage and tobacco industries equipment",
                "description_ar"=> "صناعة معدات الصناعات الغذائية والمشرؤبات والتبغ"
                ],
                [
                "code"=> "2826",
                "description_en"=> "Manufacture of ready-made clothes, accessories, and leather production",
                "description_ar"=> "صناعة معدات الملابس الجاهزة وهدوات الزينة وانتاج الجلود"
                ],
                [
                "code"=> "2829",
                "description_en"=> "Manufacture of other special-purpose equipment",
                "description_ar"=> "صناعة المعدات الاخرى ذات الاغراض الخاصة"
                ],
                [
                "code"=> "2910",
                "description_en"=> "Manufacture of motor vehicles",
                "description_ar"=> "صناعة المركبات ذات المحركات"
                ],
                [
                "code"=> "2920",
                "description_en"=> "Manufacture of motor vehicle bodies and the manufacture of trailers and semi-trailers",
                "description_ar"=> "صناعة هياكل المركبات ذات المحركات وصناعة المقطورات ونصف المقطورات"
                ],
                [
                "code"=> "2930",
                "description_en"=> "Manufacture of accessories and spare parts for motor vehicles",
                "description_ar"=> "صناعة مستلزمات وقطع غيار المركبات ذات المحركات"
                ],
                [
                "code"=> "3011",
                "description_en"=> "Building ship hulls and rafts",
                "description_ar"=> "بناء هياكل السفن و الطوافات"
                ],
                [
                "code"=> "3012",
                "description_en"=> "Manufacture of pleasure boats and sport boats",
                "description_ar"=> "صناعة قوارب النزهة والقوارب الرياضية"
                ],
                [
                "code"=> "3020",
                "description_en"=> "Railroad locomotives and rolling stock industry",
                "description_ar"=> "صناعة قاطرات السكك الحديدية والمعدات الدارجة على السكك الحديدية"
                ],
                [
                "code"=> "3030",
                "description_en"=> "Air and spacecraft industry",
                "description_ar"=> "صناعة المركبات الهوائية والفضائية"
                ],
                [
                "code"=> "3040",
                "description_en"=> "Manufacture of military military vehicles",
                "description_ar"=> "صناعة المركبات العسكرية الحربية"
                ],
                [
                "code"=> "3091",
                "description_en"=> "Industry",
                "description_ar"=> "صناعة"
                ],
                [
                "code"=> "3092",
                "description_en"=> "Manufacture of ordinary bicycles and infirm vehicles",
                "description_ar"=> "صناعة الدراجات العادية ومركبات العجزة"
                ],
                [
                "code"=> "3099",
                "description_en"=> "Other transportation equipment industry not classified elsewhere",
                "description_ar"=> "صناعة معدات النقل الاخرى غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "3100",
                "description_en"=> "Furniture Industry",
                "description_ar"=> "صناعة الاثاث"
                ],
                [
                "code"=> "3211",
                "description_en"=> "Manufacture of jewelry and related items",
                "description_ar"=> "صناعة المجوهرات والاصناف المتصلة بها"
                ],
                [
                "code"=> "3212",
                "description_en"=> "Manufacture of imitation jewelry and related items",
                "description_ar"=> "صناعة المجوهرات المقلدة والاصناف المتصلة بها"
                ],
                [
                "code"=> "3220",
                "description_en"=> "Musical instrument industry",
                "description_ar"=> "صناعة الالات الموسيقية"
                ],
                [
                "code"=> "3230",
                "description_en"=> "Sports products industry",
                "description_ar"=> "صناعة المنتجات الرياضية"
                ],
                [
                "code"=> "3240",
                "description_en"=> "Make games and play",
                "description_ar"=> "صناعة الالعاب واللعب"
                ],
                [
                "code"=> "3250",
                "description_en"=> "Manufacturing of dental and medical equipment and tools",
                "description_ar"=> "صناعة المعدات والادوات الطبية والخاصة بالاسنان"
                ],
                [
                "code"=> "3290",
                "description_en"=> "Other industries not classified elsewhere",
                "description_ar"=> "الصناعات الاخرى غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "3311",
                "description_en"=> "Repair of manufactured metal products",
                "description_ar"=> "اصلاح المنتجات المعدنية المصنعة"
                ],
                [
                "code"=> "3312",
                "description_en"=> "Machinery repair",
                "description_ar"=> "اصلاح الالات"
                ],
                [
                "code"=> "3313",
                "description_en"=> "Repair of electronic and optical devices",
                "description_ar"=> "اصلاح الاجهزة الاليكترونية و البصرية"
                ],
                [
                "code"=> "3314",
                "description_en"=> "Electronic devices repair",
                "description_ar"=> "اصلاح الاجهزة الاليكترونية"
                ],
                [
                "code"=> "3315",
                "description_en"=> "Repair of transport devices, except for motor vehicles",
                "description_ar"=> "اصلاح اجهزة النقل باستثناء المركبات ذات المحركات"
                ],
                [
                "code"=> "3319",
                "description_en"=> "Repair other devices",
                "description_ar"=> "اصلاح الاجهزة الاخرى"
                ],
                [
                "code"=> "3320",
                "description_en"=> "Installation of industrial equipment and devices",
                "description_ar"=> "تركيب المعدات و الاجهزة الصناعية"
                ],
                [
                "code"=> "3510",
                "description_en"=> "Electric generators, transformers and power distributors",
                "description_ar"=> "المولدات الكهربائية ومحولات وموزعات الكهرباء"
                ],
                [
                "code"=> "3520",
                "description_en"=> "Manufacture of sulfur gas and distribution of gaseous fuels by means of main pipes",
                "description_ar"=> "صناعة غاز الاستصباح وتوزيع انواع الوقود الغازية عن طريق مواسير رئيسية"
                ],
                [
                "code"=> "3530",
                "description_en"=> "Steam supply and air conditioning",
                "description_ar"=> "توريد البخار واجهزة تكييف الهواء"
                ],
                [
                "code"=> "3600",
                "description_en"=> "Water collection, treatment and supply",
                "description_ar"=> "تجميع ومعالجة وتوريد المياة"
                ],
                [
                "code"=> "3700",
                "description_en"=> "Sewer",
                "description_ar"=> "المجارى"
                ],
                [
                "code"=> "3811",
                "description_en"=> "Collection of non-hazardous waste",
                "description_ar"=> "تجميع المخلفات غير الخطرة"
                ],
                [
                "code"=> "3812",
                "description_en"=> "Collection of hazardous waste",
                "description_ar"=> "تجميع المخلفات الخطرة"
                ],
                [
                "code"=> "3821",
                "description_en"=> "Treatment and disposal of non-hazardous waste",
                "description_ar"=> "معالجة والتصرف فى المخلفات غير الخطرة"
                ],
                [
                "code"=> "3822",
                "description_en"=> "Treatment and disposal of hazardous waste",
                "description_ar"=> "معالجة والتصرف فى المخلفات الخطرة"
                ],
                [
                "code"=> "3830",
                "description_en"=> "Material handling",
                "description_ar"=> "معالجة المواد"
                ],
                [
                "code"=> "3900",
                "description_en"=> "Recycling activities and services and the disposal of other waste",
                "description_ar"=> "انشطة وخدمات اعادة التدوير والتصرف فى النفايات الاخرى"
                ],
                [
                "code"=> "4100",
                "description_en"=> "Building constructions",
                "description_ar"=> "انشاءات المبانى"
                ],
                [
                "code"=> "4210",
                "description_en"=> "Road and railway constructions",
                "description_ar"=> "الانشاءات الخاصة بالطرق والسكك الحديدية"
                ],
                [
                "code"=> "4220",
                "description_en"=> "Construction for projects of public benefit",
                "description_ar"=> "الانشاءات الخاصة بالمشاريع ذات المنفعة العامة"
                ],
                [
                "code"=> "4290",
                "description_en"=> "Construction for other civil engineering projects",
                "description_ar"=> "الانشاءات الخاصة بالمشاريع الهندسية المدنية الاخرى"
                ],
                [
                "code"=> "4311",
                "description_en"=> "Remove the installations",
                "description_ar"=> "ازالة المنشات"
                ],
                [
                "code"=> "4312",
                "description_en"=> "Preparing sites",
                "description_ar"=> "اعداد المواقع"
                ],
                [
                "code"=> "4321",
                "description_en"=> "Electrical installations",
                "description_ar"=> "التركيبات الكهربائية"
                ],
                [
                "code"=> "4322",
                "description_en"=> "Plumbing, heating and air-conditioning installations",
                "description_ar"=> "التركيبات الخاصة بالسباكة والتدفئة ومكيفات الهواء"
                ],
                [
                "code"=> "4329",
                "description_en"=> "Other structural installations",
                "description_ar"=> "التركيبات الانشائية الاخرى"
                ],
                [
                "code"=> "4330",
                "description_en"=> "Completion and finishing of buildings",
                "description_ar"=> "استكمال وتشطيب المبانى"
                ],
                [
                "code"=> "4390",
                "description_en"=> "Other specialized construction activities",
                "description_ar"=> "انشطة الانشاءات المتخصصة الاخرى"
                ],
                [
                "code"=> "4510",
                "description_en"=> "Sale of motor vehicles",
                "description_ar"=> "بيع المركبات ذات المحركات"
                ],
                [
                "code"=> "4520",
                "description_en"=> "Maintenance and repair of motor vehicles",
                "description_ar"=> "صيانة واصلاح المركبات ذات المحركات"
                ],
                [
                "code"=> "4530",
                "description_en"=> "Sale of motor vehicle parts and accessories",
                "description_ar"=> "بيع قطع غيار ومستلزمات المركبات ذات المحركات"
                ],
                [
                "code"=> "4540",
                "description_en"=> "Sale, maintenance and repair of motorcycles, parts and accessories thereof",
                "description_ar"=> "بيع وصيانة واصلاح الدراجات النارية وقطع الغيار والمستلزمات الخاصة بها"
                ],
                [
                "code"=> "4610",
                "description_en"=> "Wholesale trade on the basis of a contract or a fee",
                "description_ar"=> "تجارة الجملة على اساس عقد او نظير رسم"
                ],
                [
                "code"=> "4620",
                "description_en"=> "Wholesale trade in agricultural raw materials and live animals",
                "description_ar"=> "تجارة الجملة الخاصة بالمواد الاولية الزراعية والحيوانات الحية"
                ],
                [
                "code"=> "4630",
                "description_en"=> "Wholesale trade of food, beverages and tobacco",
                "description_ar"=> "تجارة الجملة الخاصة بالاغذية والمشرؤبات والتبغ"
                ],
                [
                "code"=> "4641",
                "description_en"=> "Wholesale trade of clothes, fabrics and shoes",
                "description_ar"=> "تجارة الجملة الخاصة بالملابس والاقمشة والاحذية"
                ],
                [
                "code"=> "4649",
                "description_en"=> "Wholesale trade for other household appliances",
                "description_ar"=> "تجارة الجملة الخاصة بالادوات المنزلية الاخرة"
                ],
                [
                "code"=> "4651",
                "description_en"=> "Wholesale trade of computer hardware, accessories and computer software",
                "description_ar"=> "تجارة الجملة الخاصة باجهزة الكمبيوتر ومستلزماتها وبرامج الكمبيوتر"
                ],
                [
                "code"=> "4652",
                "description_en"=> "Wholesale trade of electronic devices, communications devices and accessories",
                "description_ar"=> "تجارة الجملة الخاصة بالاجهزة الاليكترونية واجهزة الاتصالات ومستلزماتها"
                ],
                [
                "code"=> "4653",
                "description_en"=> "Wholesale trade for agricultural equipment, machinery and supplies",
                "description_ar"=> "تجارة الجملة الخاصة بالمعدات والالات والتوريدات الزراعية"
                ],
                [
                "code"=> "4659",
                "description_en"=> "Wholesale trade of equipment and other devices",
                "description_ar"=> "تجارة الجملة الخاصة بالمعدات والاجهزة الاخرى"
                ],
                [
                "code"=> "4661",
                "description_en"=> "Wholesale trade of dry, liquid and gaseous fuels and related products",
                "description_ar"=> "تجارة الجملة الخاصة بالوقود الجاف والسائل والغازى والمنتجات المرتبطة بذلك"
                ],
                [
                "code"=> "4662",
                "description_en"=> "Wholesale trade in precious metals and minerals",
                "description_ar"=> "تجارة الجملة الخاصة بالمعادن والمعادن النفيسة"
                ],
                [
                "code"=> "4663",
                "description_en"=> "Wholesale trade, supplies and equipment for building materials, hardware, plumbing and heating appliances",
                "description_ar"=> "تجارة الجملة والتوريدات والاجهزة الخاصة بمواد البناء والادوات المعدنية والسباكة واجهزة التدفئة"
                ],
                [
                "code"=> "4669",
                "description_en"=> "Wholesale trade for waste, waste and other products not classified elsewhere",
                "description_ar"=> "تجارة الجملة الخاصة بالنفايات والمخلفات والمنتجات الاخرى غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "4690",
                "description_en"=> "Non-specialized wholesale trade",
                "description_ar"=> "تجارة الجملة غير المتخصصة"
                ],
                [
                "code"=> "4711",
                "description_en"=> "Retail sale in non-specialized stores of food, beverages or tobacco",
                "description_ar"=> "البيع بالتجزئة بالمتاجر غير المتخصصة للاغذية والمشروبات اوالتبغ"
                ],
                [
                "code"=> "4719",
                "description_en"=> "Other retail types in non-specialized stores",
                "description_ar"=> "انواع البيع بالتجزئةالاخرى بالمتاجر غير المتخصصة"
                ],
                [
                "code"=> "4721",
                "description_en"=> "Retail sale in specialized food stores",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للاغذية"
                ],
                [
                "code"=> "4722",
                "description_en"=> "Retail sale in specialized stores for drinks",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للمشروبات"
                ],
                [
                "code"=> "4723",
                "description_en"=> "Retail sale in specialized stores of tobacco products",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة لمنتجات التبغ"
                ],
                [
                "code"=> "4730",
                "description_en"=> "Retail sale of specialized vehicles for fuel",
                "description_ar"=> "البيع بالتجزئة بالاماكن المتخصصة لوقود المركبات"
                ],
                [
                "code"=> "4741",
                "description_en"=> "Retail sale in stores specialized in computer hardware, accessories, computer software, and communications equipment",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة فى اجهزة الحاسب الالى ومستلزماتة وبرامج الكمبيوتر واجهزة الاتصالات"
                ],
                [
                "code"=> "4751",
                "description_en"=> "Retail sale in clothing stores",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة فى الملابس"
                ],
                [
                "code"=> "4752",
                "description_en"=> "Retail sale in specialized stores of hardware, paint and glass",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للادوات المعدنية و الطلاء والزجاج"
                ],
                [
                "code"=> "4753",
                "description_en"=> "Retail sale in specialized stores of carpets, blankets, wall and floor coverings",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للسجاد والبطاطين واغطية الحوائط والارضيات"
                ],
                [
                "code"=> "4759",
                "description_en"=> "Retail sale in specialized stores of household electrical appliances, furniture, lighting equipment and other household appliances",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للاجهزة الكهربائية المنزلية والاثاث واجخزة الانارة والادوات المنزلية الاخرى"
                ],
                [
                "code"=> "4761",
                "description_en"=> "Retail sale in specialized stores of books, newspapers, and stationery",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للكتب والصحف والادوات المكتبية"
                ],
                [
                "code"=> "4762",
                "description_en"=> "Retail sale in specialized stores of music and video recordings",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للتسجيلاتالموسشيقية والمرئية"
                ],
                [
                "code"=> "4763",
                "description_en"=> "Retail sale in specialized stores of sports equipment",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للادوات الرياضية"
                ],
                [
                "code"=> "4764",
                "description_en"=> "Retail sale in specialized games and toys stores",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للالعاب واللعب"
                ],
                [
                "code"=> "4771",
                "description_en"=> "Retail sale in specialized stores of shoes, clothing and leather products",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للاحذية والملابس والمنتجات الجلدية"
                ],
                [
                "code"=> "4772",
                "description_en"=> "Retail sale in specialized stores of pharmaceutical, medical and pharmaceutical products, ornamental and cosmetic products",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للمنتجات والعقاقير الصيدلانية والطبية وادوات الزينة والمنتجات التجميلية"
                ],
                [
                "code"=> "4773",
                "description_en"=> "Retail sale in specialized stores of other new products",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة للمنتجات الجديدة الاخرى"
                ],
                [
                "code"=> "4774",
                "description_en"=> "Retail sale of used products",
                "description_ar"=> "البيع بالتجزئة للمنتجات المستعملة"
                ],
                [
                "code"=> "4781",
                "description_en"=> "Retail sale through kiosks and markets of food, soft drinks and tobacco products",
                "description_ar"=> "البيع بالتجزئة من خلال الاكشاك والاسواق للمواد الغذائية والمشروبات الخفيفة ومنتجات التبغ"
                ],
                [
                "code"=> "4782",
                "description_en"=> "Retail sale through kiosks and markets of clothes, fabrics and shoes",
                "description_ar"=> "البيع بالتجزئة من خلال الاكشاك والاسواق للملابس والاقمشة والاحذية"
                ],
                [
                "code"=> "4789",
                "description_en"=> "Retail sale via stalls of other products",
                "description_ar"=> "البيع بالتجزئة من خلال الاكشاك للمنتجات الاخرى"
                ],
                [
                "code"=> "4742",
                "description_en"=> "Retail sale in stores specialized in audio-visual equipment",
                "description_ar"=> "البيع بالتجزئة بالمتاجر المتخصصة فى الاجهزة السمعية والبصرية"
                ],
                [
                "code"=> "4791",
                "description_en"=> "Retail sale via mail requests or through the Internet",
                "description_ar"=> "البيع بالتجزئة عبر طلبات البريد او من خلال الانترنت"
                ],
                [
                "code"=> "4799",
                "description_en"=> "Other types of retail sales that do not take place in stores, kiosks or markets",
                "description_ar"=> "انواع البيع بالتجزئةالاخرى التى لاتتم بالنتاجر او الاكشاك او الاسواق"
                ],
                [
                "code"=> "4911",
                "description_en"=> "Inland passenger transportation",
                "description_ar"=> "النقل الداخلى للركاب"
                ],
                [
                "code"=> "4912",
                "description_en"=> "Shipping by rail",
                "description_ar"=> "الشحن عن طريق السكك الحديدية"
                ],
                [
                "code"=> "4921",
                "description_en"=> "Transporting land passengers outside and inside cities",
                "description_ar"=> "نقل الركاب البرى خارج وداخل المدن"
                ],
                [
                "code"=> "4922",
                "description_en"=> "Other types of passenger transport by land",
                "description_ar"=> "انواع نقل الركاب البرية الاخرى"
                ],
                [
                "code"=> "4923",
                "description_en"=> "Land transportation of goods by bus",
                "description_ar"=> "النقل البرى للبضائع عن طريق الحافلات"
                ],
                [
                "code"=> "4930",
                "description_en"=> "Pipeline transportation",
                "description_ar"=> "النقل عبر خطوط الانابيب"
                ],
                [
                "code"=> "5011",
                "description_en"=> "Transportation of marine and coastal passengers",
                "description_ar"=> "نقل الركاب البحرى والساحلى"
                ],
                [
                "code"=> "5012",
                "description_en"=> "Marine and coastal cargo transportation",
                "description_ar"=> "نقل البضائع البحرى والساحلى"
                ],
                [
                "code"=> "5021",
                "description_en"=> "Inland passenger water transport",
                "description_ar"=> "النقل الداخلى المائى للركاب"
                ],
                [
                "code"=> "5022",
                "description_en"=> "Inland water transport of goods",
                "description_ar"=> "النقل الداخلى المائى للبضائع"
                ],
                [
                "code"=> "5110",
                "description_en"=> "Air transport of passengers",
                "description_ar"=> "النقل الجوى للركاب"
                ],
                [
                "code"=> "5120",
                "description_en"=> "Air freight transport",
                "description_ar"=> "النقل الجوى للبضائع"
                ],
                [
                "code"=> "5210",
                "description_en"=> "Keep and store",
                "description_ar"=> "الاحتفاظ والتخزين"
                ],
                [
                "code"=> "5221",
                "description_en"=> "Service activities related to road transport",
                "description_ar"=> "انشطة الخدمات المتصلة بالنقل البرى"
                ],
                [
                "code"=> "5222",
                "description_en"=> "Emergency service activities related to maritime transport",
                "description_ar"=> "انشطة الخدمات الطارئة المتصلة بالنقل البحرى"
                ],
                [
                "code"=> "5223",
                "description_en"=> "Emergency service activities related to air transport",
                "description_ar"=> "انشطة الخدمات الطارئة المتصلة بالنقل الجوى"
                ],
                [
                "code"=> "5224",
                "description_en"=> "Cargo handling",
                "description_ar"=> "مناولة البضائع"
                ],
                [
                "code"=> "5229",
                "description_en"=> "Other activities in support of the transfer",
                "description_ar"=> "الانشطة الاخرى الداعمة للنقل"
                ],
                [
                "code"=> "5310",
                "description_en"=> "Mail activities",
                "description_ar"=> "انشطة البريد"
                ],
                [
                "code"=> "5320",
                "description_en"=> "Parcel delivery activities",
                "description_ar"=> "انشطة تسليم الطرود"
                ],
                [
                "code"=> "5510",
                "description_en"=> "Short-term placement activities (rental - housing",
                "description_ar"=> "انشطة التسكين قصيرة المدة"
                ],
                [
                "code"=> "5520",
                "description_en"=> "Campgrounds, parking lots, and locomotives",
                "description_ar"=> "اراضى المخيمات ومواقف مركبات التنزهة والقاطرات"
                ],
                [
                "code"=> "5590",
                "description_en"=> "Other types of placement",
                "description_ar"=> "انواع التسكين الاخرى"
                ],
                [
                "code"=> "5610",
                "description_en"=> "Restaurant service and food delivery activities by mobile means",
                "description_ar"=> "انشطة خدمات المطاعم وتوصيل الطعام بالوسائل المتحركة"
                ],
                [
                "code"=> "5621",
                "description_en"=> "Event catering",
                "description_ar"=> "تقديم الطعام بالمناسبات"
                ],
                [
                "code"=> "5629",
                "description_en"=> "Other catering services activities",
                "description_ar"=> "انشطة خدمات تقديم الطعام الاخرى"
                ],
                [
                "code"=> "5630",
                "description_en"=> "Light beverage service activities",
                "description_ar"=> "انشطة خدمات تقديم المشروبات الخفيفة"
                ],
                [
                "code"=> "5811",
                "description_en"=> "Publishing books",
                "description_ar"=> "نشر الكتب"
                ],
                [
                "code"=> "5812",
                "description_en"=> "Publish the directory and address lists",
                "description_ar"=> "نشر الدليل وقوائم العناوين"
                ],
                [
                "code"=> "5813",
                "description_en"=> "Publishing newspapers, magazines and periodicals",
                "description_ar"=> "نشر الصحف والمجلات والدوريات"
                ],
                [
                "code"=> "5819",
                "description_en"=> "Other publishing activities",
                "description_ar"=> "انشطة النشر الاخرى"
                ],
                [
                "code"=> "5820",
                "description_en"=> "Computer Software Publishing",
                "description_ar"=> "نشر برامج الحاسب الالى"
                ],
                [
                "code"=> "5911",
                "description_en"=> "Film, video and television program production activities",
                "description_ar"=> "انشطة انتاج الافلام السينمائية والفيديو وبرامج التليفزيون"
                ],
                [
                "code"=> "5912",
                "description_en"=> "Subsequent activities for the production of movies, videos and television programs",
                "description_ar"=> "الانشطة الاحقة لانتاج الافلام السينمائية والفيديو وبرامج التليفزيون"
                ],
                [
                "code"=> "5913",
                "description_en"=> "Motion picture, video and television program distribution activities",
                "description_ar"=> "انشطة توزيع الافلام السينمائية والفيديو وبرامج التليفزيون"
                ],
                [
                "code"=> "5914",
                "description_en"=> "Film screening activities",
                "description_ar"=> "انشطة عرض الافلام السينمائية"
                ],
                [
                "code"=> "5920",
                "description_en"=> "Production and publishing of sound and music recordings",
                "description_ar"=> "انشطة انتاج ونشر التسجيلات الصوتية والموسيقية"
                ],
                [
                "code"=> "6010",
                "description_en"=> "Broadcasting over radio stations",
                "description_ar"=> "البث عبر محطات الراديو"
                ],
                [
                "code"=> "6020",
                "description_en"=> "Television program preparation and broadcast activities",
                "description_ar"=> "انشطة اعداد برامج التليفزيون وبثها"
                ],
                [
                "code"=> "6110",
                "description_en"=> "Wired telecommunications activities",
                "description_ar"=> "انشطة الاتصالات السلكية"
                ],
                [
                "code"=> "6120",
                "description_en"=> "Wireless communication activities",
                "description_ar"=> "انشطة الاتصالات اللاسلكية"
                ],
                [
                "code"=> "6130",
                "description_en"=> "Satellite communication activities",
                "description_ar"=> "انشطة الاتصالات عبر الاقمار الصناعية"
                ],
                [
                "code"=> "6190",
                "description_en"=> "Other telecommunications activities",
                "description_ar"=> "انشطة الاتصالات السلكية و اللاسلكية الاخرى"
                ],
                [
                "code"=> "6201",
                "description_en"=> "Computer program preparation activities",
                "description_ar"=> "انشطة اعداد برامج الحاسب الالى"
                ],
                [
                "code"=> "6202",
                "description_en"=> "Computer consultancy experience and facilities management activities related to computer fields",
                "description_ar"=> "الخبرة الاستشارية فى مجال الحاسب الالى وانشطة ادارة التسهيلات المتصلة بمجالات الحاسب الالى"
                ],
                [
                "code"=> "6209",
                "description_en"=> "Other activities related to information technology and computer services",
                "description_ar"=> "الانشطة الاخرى المتصلة بتكنولوجيا المعلومات وخدمات الحاسب الالى"
                ],
                [
                "code"=> "6311",
                "description_en"=> "Data processing, hosting and related activities",
                "description_ar"=> "معالجة البيانات والاستضافة والانشطة المتصلة بذلك"
                ],
                [
                "code"=> "6312",
                "description_en"=> "Electronic portals",
                "description_ar"=> "البوابات الاليكترونية"
                ],
                [
                "code"=> "6391",
                "description_en"=> "Activities of press agencies",
                "description_ar"=> "انشطة الوكالات الصحفية"
                ],
                [
                "code"=> "6399",
                "description_en"=> "Other activities for information services that are not classified in other locations",
                "description_ar"=> "الانشطة الاخرى لخدمات تقديم المعلومات غير المصنفة فى مواقع اخرى"
                ],
                [
                "code"=> "6411",
                "description_en"=> "Central banks",
                "description_ar"=> "المصارف المركزية"
                ],
                [
                "code"=> "6419",
                "description_en"=> "Other financial intermediaries",
                "description_ar"=> "الوساطات المالية الاخرى"
                ],
                [
                "code"=> "6420",
                "description_en"=> "Activities of holding companies",
                "description_ar"=> "انشطة الشركات القابضة"
                ],
                [
                "code"=> "6430",
                "description_en"=> "Credit activities, provision of credits, and similar financial entities",
                "description_ar"=> "انشطةالائتمان وتوفير الاعتمادات والكيانات المالية المشابهة"
                ],
                [
                "code"=> "6491",
                "description_en"=> "Financial leasing",
                "description_ar"=> "التاجير المالى"
                ],
                [
                "code"=> "6492",
                "description_en"=> "Other forms of loans granted",
                "description_ar"=> "اشكال القروض الممنوحة الاخرى"
                ],
                [
                "code"=> "6499",
                "description_en"=> "Other financial services activities, with the exception of insurance and credit provision activities for pensions not classified in other locations",
                "description_ar"=> "انشطة الخدمات المالية الاخرى , باستثناء التامين وانشطة توفير الاعتمادات للمعاشات التقاعدية غير المصنفة فى مواقع اخرى"
                ],
                [
                "code"=> "6511",
                "description_en"=> "life insurance",
                "description_ar"=> "التامين على الحياة"
                ],
                [
                "code"=> "6512",
                "description_en"=> "Non-life insurance",
                "description_ar"=> "التامين على غير الحياة"
                ],
                [
                "code"=> "6520",
                "description_en"=> "re Insurance",
                "description_ar"=> "اعادة التامين"
                ],
                [
                "code"=> "6530",
                "description_en"=> "Providing credits for pensions",
                "description_ar"=> "توفير الاعتمادات للمعاشات التقاعدية"
                ],
                [
                "code"=> "6611",
                "description_en"=> "Financial markets management",
                "description_ar"=> "ادارة الاسواق المالية"
                ],
                [
                "code"=> "6612",
                "description_en"=> "Security and commodity contracts brokerage",
                "description_ar"=> "الامن وسمسرة عقود السلع"
                ],
                [
                "code"=> "6619",
                "description_en"=> "Auxiliary activities for financial services",
                "description_ar"=> "الانشطة المساعدة للخدمات المالية"
                ],
                [
                "code"=> "6621",
                "description_en"=> "Risk and damage assessment",
                "description_ar"=> "تقدير المخاطر والتلفيات"
                ],
                [
                "code"=> "6622",
                "description_en"=> "Activities of insurance and brokerage agents",
                "description_ar"=> "انشطة وكلاء التامين والسمسرة"
                ],
                [
                "code"=> "6629",
                "description_en"=> "Other activities auxiliary to insurance and provision for pensions",
                "description_ar"=> "الانشطة الاخرى المساعدة للتامين وتوفير الاعتمادات للمعاشات التقاعدية"
                ],
                [
                "code"=> "6630",
                "description_en"=> "Financial credit management activities",
                "description_ar"=> "انشطة ادارة الاعتمادات المالية"
                ],
                [
                "code"=> "6810",
                "description_en"=> "Real estate activities with own or leased property",
                "description_ar"=> "الانشطة العقارية فى الممتلكات المملوكة او المؤجرة"
                ],
                [
                "code"=> "6820",
                "description_en"=> "Real estate activities on the basis of a contract or a fee",
                "description_ar"=> "الانشطة العقارية على اساس عقد او نظير رسم"
                ],
                [
                "code"=> "6910",
                "description_en"=> "Legal activities",
                "description_ar"=> "الانشطة القانونية"
                ],
                [
                "code"=> "6920",
                "description_en"=> "Accounting, auditing, bookkeeping and tax advice activities",
                "description_ar"=> "الانشطة المحاسبية والمراجعة ومسك الدفاتر والاستشارات الضرائبية"
                ],
                [
                "code"=> "7010",
                "description_en"=> "The main office activities",
                "description_ar"=> "انشطة المكاتب الرئيسية"
                ],
                [
                "code"=> "7020",
                "description_en"=> "Management consultancy activities",
                "description_ar"=> "الانشطة الاستشارية الخاصة بالادارة"
                ],
                [
                "code"=> "7110",
                "description_en"=> "Architectural and engineering activities and related technical consulting",
                "description_ar"=> "الانشطة المعمارية والهندسية و الاستشارات الفنية المتصلة بذلك"
                ],
                [
                "code"=> "7120",
                "description_en"=> "Technical tests and analyzes",
                "description_ar"=> "الاختبارات والتحليلات الفنية"
                ],
                [
                "code"=> "7210",
                "description_en"=> "Research and experimental development in the field of natural and engineering sciences",
                "description_ar"=> "البحث والتطوير التجريبى فى مجال العلوم الطبيعية والهندسية"
                ],
                [
                "code"=> "7220",
                "description_en"=> "Experimental research and development in the field of social and human sciences",
                "description_ar"=> "البحث والتطوير التجريبى فى مجال العلوم الاجتماعية والانسانية"
                ],
                [
                "code"=> "7310",
                "description_en"=> "Advertising",
                "description_ar"=> "الاعلان"
                ],
                [
                "code"=> "7320",
                "description_en"=> "Market studies and public opinion polls",
                "description_ar"=> "دراسات السوق واستطلاعات الراى العام"
                ],
                [
                "code"=> "7410",
                "description_en"=> "Specialized design activities",
                "description_ar"=> "انشطة التصميمات المتخصصة"
                ],
                [
                "code"=> "7420",
                "description_en"=> "Photographic activities",
                "description_ar"=> "الانشطة الفوتوغرافية"
                ],
                [
                "code"=> "7490",
                "description_en"=> "Other specialized, scientific and artistic activities not classified elsewhere",
                "description_ar"=> "الانشطة الاخرى التخصصية والعلمية والفنية غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "7500",
                "description_en"=> "Veterinary activities",
                "description_ar"=> "الانشطة البيطرية"
                ],
                [
                "code"=> "7710",
                "description_en"=> "Renting motor vehicles",
                "description_ar"=> "تاجيرواستئجار المركبات ذات المحركات"
                ],
                [
                "code"=> "7721",
                "description_en"=> "Renting and renting sports and leisure products and tools",
                "description_ar"=> "تاجير واستئجار منتجات والادوات الرياضية والترفيهية"
                ],
                [
                "code"=> "7722",
                "description_en"=> "Rental of video tapes and CDs",
                "description_ar"=> "تاجير شرائط واسطوانات الفيديو"
                ],
                [
                "code"=> "7729",
                "description_en"=> "Renting and renting other personal and household products",
                "description_ar"=> "تاجيرواستئجار المنتجات الشخصية والمنزلية الاخرى"
                ],
                [
                "code"=> "7730",
                "description_en"=> "Renting and leasing of other physical devices and equipment",
                "description_ar"=> "تاجير واستئجار الاجهزة والمعدات المادية الاخرى"
                ],
                [
                "code"=> "7740",
                "description_en"=> "Rent forms of intellectual property and similar products, except for copyright works",
                "description_ar"=> "استئجار اشكال الملكية الفكرية والمنتجات المشابهة باستثناء اعمال حقوق المؤلف"
                ],
                [
                "code"=> "7810",
                "description_en"=> "Activities of recruitment and appointment agencies",
                "description_ar"=> "انشطة وكالات التوظيف والتعيين"
                ],
                [
                "code"=> "7820",
                "description_en"=> "Activities of temporary employment agencies",
                "description_ar"=> "انشطة وكالات التوظيف المؤقت"
                ],
                [
                "code"=> "7830",
                "description_en"=> "Providing other human resources",
                "description_ar"=> "توفير المصادر البشرية الاخرى"
                ],
                [
                "code"=> "7911",
                "description_en"=> "Tourism agency services",
                "description_ar"=> "خدمات وكالات السياحة"
                ],
                [
                "code"=> "7912",
                "description_en"=> "Activities of tour guides",
                "description_ar"=> "انشطة المرشدين السياحيين"
                ],
                [
                "code"=> "7990",
                "description_en"=> "Other types of reservations and related activities",
                "description_ar"=> "انواع الحجوزات الاخرى والانشط المتصلة بذلك"
                ],
                [
                "code"=> "8010",
                "description_en"=> "Private security activities",
                "description_ar"=> "انشطة الامن الخاص"
                ],
                [
                "code"=> "8020",
                "description_en"=> "Security systems services activities",
                "description_ar"=> "انشطة خدمات انظمة الامن"
                ],
                [
                "code"=> "8030",
                "description_en"=> "Investigation activities",
                "description_ar"=> "انشطة التحرى"
                ],
                [
                "code"=> "8110",
                "description_en"=> "Support activities for joint facilities",
                "description_ar"=> "انشطة دعم التسهيلات المشتركة"
                ],
                [
                "code"=> "8121",
                "description_en"=> "General cleaning of buildings",
                "description_ar"=> "النظافة العامة للمبانى"
                ],
                [
                "code"=> "8129",
                "description_en"=> "Building cleaning activities and other industrial facilities",
                "description_ar"=> "انشطة تنظيف المبانى والمنشات الصناعية الاخرى"
                ],
                [
                "code"=> "8130",
                "description_en"=> "Gardening services and maintenance activities",
                "description_ar"=> "انشطة خدمات رعاية وصيانة الحدائق"
                ],
                [
                "code"=> "8211",
                "description_en"=> "Joint office support services activities",
                "description_ar"=> "انشطة خدمات الدعم المكتبية المشتركة"
                ],
                [
                "code"=> "8219",
                "description_en"=> "Photocopying, document processing and other specialized office support services activities",
                "description_ar"=> "النسخ وتجهيز المستندات وانشطة خدمات الدعم المكتبية المتخصصة الاخرى"
                ],
                [
                "code"=> "8220",
                "description_en"=> "Information center services",
                "description_ar"=> "خدمات مراكز الاستعلامات"
                ],
                [
                "code"=> "8230",
                "description_en"=> "Organizing trade conferences and exhibitions",
                "description_ar"=> "تنظيم المؤتمرات والمعارض التجارية"
                ],
                [
                "code"=> "8291",
                "description_en"=> "Activities of collection agencies and lending offices",
                "description_ar"=> "انشطة وكالات التحصيل ومكاتب الاقراض"
                ],
                [
                "code"=> "8292",
                "description_en"=> "Packaging activities",
                "description_ar"=> "انشطة التغليف"
                ],
                [
                "code"=> "8299",
                "description_en"=> "Other support services activities that are not classified in other locations",
                "description_ar"=> "انشطة خدمات الدعم الاخرى الخاصة بالاعمال التجارية غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "8411",
                "description_en"=> "Public administration activities",
                "description_ar"=> "انشطة الادارات العامة"
                ],
                [
                "code"=> "8412",
                "description_en"=> "Organizing activities to provide health care, education, educational services and other social services, with the exception of social security",
                "description_ar"=> "تنظيم انشطة تقديم العناية الصحية والتعليم والخدمات التثقيفية والخدمات الاجتماعية الاخرى باستثناء الضمان الاجتماعى"
                ],
                [
                "code"=> "8413",
                "description_en"=> "Organize and contribute to effective business operations",
                "description_ar"=> "تنظيم والمساهمة فى عمليات الاعمال التجارية الفعالة"
                ],
                [
                "code"=> "8421",
                "description_en"=> "Foreign affairs",
                "description_ar"=> "الشئون الخارجية"
                ],
                [
                "code"=> "8422",
                "description_en"=> "Defense activities",
                "description_ar"=> "انشطة الدفاع"
                ],
                [
                "code"=> "8423",
                "description_en"=> "Security and public order activities",
                "description_ar"=> "انشطة الامن والنظام العام"
                ],
                [
                "code"=> "8430",
                "description_en"=> "Compulsory social insurance activities",
                "description_ar"=> "انشطة التامين الاجتماعى الاجبارى"
                ],
                [
                "code"=> "8510",
                "description_en"=> "Primary and pre-primary education",
                "description_ar"=> "التعليم الابتدائى وقبل الابتدائى"
                ],
                [
                "code"=> "8521",
                "description_en"=> "General secondary education",
                "description_ar"=> "التعليم الثانوى العام"
                ],
                [
                "code"=> "8522",
                "description_en"=> "Technical and vocational secondary education",
                "description_ar"=> "التعليم الثانوى الفنى والهنى"
                ],
                [
                "code"=> "8530",
                "description_en"=> "Higher Education",
                "description_ar"=> "التعليم العالى"
                ],
                [
                "code"=> "8541",
                "description_en"=> "Sports and rehabilitation education",
                "description_ar"=> "التعليم الرياضى والتاهيلى"
                ],
                [
                "code"=> "8542",
                "description_en"=> "Cultural education",
                "description_ar"=> "التعليم الثقافى"
                ],
                [
                "code"=> "8549",
                "description_en"=> "Other types of education not classified elsewhere",
                "description_ar"=> "انواع التعليم الاخرى غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "8550",
                "description_en"=> "Activities in support of education",
                "description_ar"=> "الانشطة الداعمة للتعليم"
                ],
                [
                "code"=> "8610",
                "description_en"=> "Hospital activities",
                "description_ar"=> "انشطة المستشفيات"
                ],
                [
                "code"=> "8620",
                "description_en"=> "Activities related to medicine and dentistry",
                "description_ar"=> "الانشطة المتصلة بالطب وطب الاسنان"
                ],
                [
                "code"=> "8690",
                "description_en"=> "Other activities related to human health",
                "description_ar"=> "الانشطة الاخرى المتصلة بصحة الانسان"
                ],
                [
                "code"=> "8710",
                "description_en"=> "Nursing facilities for sanatoriums",
                "description_ar"=> "تسهيلات العناية بالتمريض بالمصحات"
                ],
                [
                "code"=> "8720",
                "description_en"=> "Nursing care facilities for special needs clinics, mental illnesses and physical abuse",
                "description_ar"=> "تسهيلات العناية بالتمريض بالمصحات الخاصة بذوى الاحتياجات الخاصة والامراض العقلية والانتهاكات البدنية"
                ],
                [
                "code"=> "8730",
                "description_en"=> "Spa facilities for the elderly and disabled",
                "description_ar"=> "تسهيلات العناية بالمصحات الخاصة بالعجائز والمقعدين"
                ],
                [
                "code"=> "8790",
                "description_en"=> "Other spa care facilities",
                "description_ar"=> "تسهيلات العناية الاخرى بالمصحات"
                ],
                [
                "code"=> "8810",
                "description_en"=> "Social work activities for the infirm and disabled that take place without accommodation",
                "description_ar"=> "انشطة الاعمال الاجتماعية للعجزة والمقعدين التى تتم بدون اقامة"
                ],
                [
                "code"=> "8890",
                "description_en"=> "Other social business activities that take place without residence",
                "description_ar"=> "انشطة الاعمال الاجتماعية الاخرى التى تتم بدون اقامة"
                ],
                [
                "code"=> "9000",
                "description_en"=> "Creative and recreational art activities",
                "description_ar"=> "انشطة الفن الابداعى والترفية"
                ],
                [
                "code"=> "9101",
                "description_en"=> "Library and archive activities",
                "description_ar"=> "انشطة المكتبات والارشيف"
                ],
                [
                "code"=> "9102",
                "description_en"=> "Museum activities and restoration of historic sites and buildings",
                "description_ar"=> "انشطة المتاحف وعمليات ترميم المواقع والمبانى التاريخية"
                ],
                [
                "code"=> "9103",
                "description_en"=> "Botanical and zoological gardens and natural wildlife activities",
                "description_ar"=> "حدائق النباتات والحيوانات وانشطة الحياة البرية الطبيعية"
                ],
                [
                "code"=> "9200",
                "description_en"=> "Betting activities and gambling",
                "description_ar"=> "انشطة المراهنات والعاب القمار"
                ],
                [
                "code"=> "9311",
                "description_en"=> "Providing sports facilities",
                "description_ar"=> "توفير التسهيلات الرياضية"
                ],
                [
                "code"=> "9312",
                "description_en"=> "Sports club activities",
                "description_ar"=> "انشطة النوادى الرياضية"
                ],
                [
                "code"=> "9319",
                "description_en"=> "Other sports activities",
                "description_ar"=> "الانشطة الرياضية الاخرى"
                ],
                [
                "code"=> "9321",
                "description_en"=> "Recreational activities and performances in parks",
                "description_ar"=> "الانشطة الترفيهية والعروض التى تتم بالمتنزهات"
                ],
                [
                "code"=> "9329",
                "description_en"=> "Other leisure and entertainment activities not classified elsewhere",
                "description_ar"=> "الانشطة الترفيهية والمسلية الاخرى غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "9411",
                "description_en"=> "The activities of commercial enterprises, employers and professional membership organizations",
                "description_ar"=> "انشطة المؤسسات التجارية وارباب العمل ومنظمات العضوية المهنية"
                ],
                [
                "code"=> "9412",
                "description_en"=> "Activities of professional membership organizations",
                "description_ar"=> "انشطة منظمات العضوية المهنية"
                ],
                [
                "code"=> "9420",
                "description_en"=> "Trade union activities",
                "description_ar"=> "انشطة النقابات التجارية"
                ],
                [
                "code"=> "9491",
                "description_en"=> "Activities of religious organizations",
                "description_ar"=> "انشطة المنظمات الدينية"
                ],
                [
                "code"=> "9492",
                "description_en"=> "Activities of political organizations",
                "description_ar"=> "انشطة المنظمات السياسية"
                ],
                [
                "code"=> "9499",
                "description_en"=> "Activities of other membership organizations not classified elsewhere",
                "description_ar"=> "انشطة المنظمات الاخرى ذات العضوية غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "9511",
                "description_en"=> "Computer repair and accessories",
                "description_ar"=> "اصلاح الحاسبات الالية ومستلزماتها"
                ],
                [
                "code"=> "9512",
                "description_en"=> "Communication equipment repair",
                "description_ar"=> "اصلاح اجهزة الاتصالات"
                ],
                [
                "code"=> "9521",
                "description_en"=> "Electronic devices repair",
                "description_ar"=> "اصلاح الاجهزة الاليكترونية"
                ],
                [
                "code"=> "9522",
                "description_en"=> "Repair of tools, household appliances, and garden care equipment",
                "description_ar"=> "اصلاح الادوات والاجهزة المنزلية ومعدات العناية بالحدائق"
                ],
                [
                "code"=> "9523",
                "description_en"=> "Shoe and leather products repair",
                "description_ar"=> "اصلاح الاحذية والمنتجات الجلدية"
                ],
                [
                "code"=> "9524",
                "description_en"=> "Repair of furniture and household items",
                "description_ar"=> "اصلاح الاثاث والمستلزمات المنزلية"
                ],
                [
                "code"=> "9529",
                "description_en"=> "Repair of other household and personal products",
                "description_ar"=> "اصلاح المنتجات المنزلية والشخصية الاخرى"
                ],
                [
                "code"=> "9601",
                "description_en"=> "Wash and clean textile and fur products",
                "description_ar"=> "غسيل المنسوجات والمنتجات الفرائية وتنظيفها تنظيفا جافا"
                ],
                [
                "code"=> "9602",
                "description_en"=> "Hair styling and other cosmetics",
                "description_ar"=> "تصفيف الشعر وانواع التجميل الاخرى"
                ],
                [
                "code"=> "9603",
                "description_en"=> "Funeral and related activities",
                "description_ar"=> "انشطة الجنائز وما يتصل بها"
                ],
                [
                "code"=> "9609",
                "description_en"=> "Other personal services activities not classified elsewhere",
                "description_ar"=> "انشطة الخدمات الشخصية الاخرى غير المصنفة فى مواضع اخرى"
                ],
                [
                "code"=> "9700",
                "description_en"=> "Home employment activities",
                "description_ar"=> "انشطة توظيف العمالة المنزلية"
                ],
                [
                "code"=> "9810",
                "description_en"=> "Activities of producing unearthed products and services for home appliances for personal use",
                "description_ar"=> "انشطة انتاج المنتجات والخدمات غير المتميزة الخاصة بالاجهزة المنزلية للاستخدام الشخصى"
                ],
                [
                "code"=> "9820",
                "description_en"=> "Activities of producing unearthed products and services for home appliances for personal use",
                "description_ar"=> "انشطة انتاج المنتجات والخدمات غير المتميزة الخاصة بالاجهزة المنزلية للاستخدام الشخصى"
                ],
                [
                "code"=> "9900",
                "description_en"=> "Activities of non-regional organizations and bodies",
                "description_ar"=> "انشطة المنظمات والهيئات غير الاقليمية"
                ]
        );

        \DB::table('activity_types')->insert($activity_types);

    }
}
