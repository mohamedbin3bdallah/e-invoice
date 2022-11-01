<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountryCodes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('country_codes')->delete();
        $country_codes = [
            [
            "code"=> "AD",
            "description_en"=> "Andorra",
            "description_ar"=> "أندورا"
            ],
            [
            "code"=> "AE",
            "description_en"=> "United Arab Emirates",
            "description_ar"=> "الامارات العربية المتحدة"
            ],
            [
            "code"=> "AF",
            "description_en"=> "Afghanistan",
            "description_ar"=> "أفغانستان"
            ],
            [
            "code"=> "AG",
            "description_en"=> "Antigua and Barbuda",
            "description_ar"=> "أنتيغوا وباربودا"
            ],
            [
            "code"=> "AI",
            "description_en"=> "Anguilla",
            "description_ar"=> "أنجويلا"
            ],
            [
            "code"=> "AL",
            "description_en"=> "Albania",
            "description_ar"=> "ألبانيا"
            ],
            [
            "code"=> "AM",
            "description_en"=> "Armenia",
            "description_ar"=> "أرمينيا"
            ],
            [
            "code"=> "AO",
            "description_en"=> "Angola",
            "description_ar"=> "أنجولا"
            ],
            [
            "code"=> "AQ",
            "description_en"=> "Antarctica",
            "description_ar"=> "القارة القطبية الجنوبية"
            ],
            [
            "code"=> "AR",
            "description_en"=> "Argentina",
            "description_ar"=> "الأرجنتين"
            ],
            [
            "code"=> "AS",
            "description_en"=> "American Samoa",
            "description_ar"=> "ساموا الأمريكية"
            ],
            [
            "code"=> "AT",
            "description_en"=> "Austria",
            "description_ar"=> "النمسا"
            ],
            [
            "code"=> "AU",
            "description_en"=> "Australia",
            "description_ar"=> "أستراليا"
            ],
            [
            "code"=> "AW",
            "description_en"=> "Aruba",
            "description_ar"=> "آروبا"
            ],
            [
            "code"=> "AX",
            "description_en"=> "Åland Islands",
            "description_ar"=> "جزر أولان"
            ],
            [
            "code"=> "AZ",
            "description_en"=> "Azerbaijan",
            "description_ar"=> "أذربيجان"
            ],
            [
            "code"=> "BA",
            "description_en"=> "Bosnia and Herzegovina",
            "description_ar"=> "البوسنة والهرسك"
            ],
            [
            "code"=> "BB",
            "description_en"=> "Barbados",
            "description_ar"=> "بربادوس"
            ],
            [
            "code"=> "BD",
            "description_en"=> "Bangladesh",
            "description_ar"=> "بنجلاديش"
            ],
            [
            "code"=> "BE",
            "description_en"=> "Belgium",
            "description_ar"=> "بلجيكا"
            ],
            [
            "code"=> "BF",
            "description_en"=> "Burkina Faso",
            "description_ar"=> "بوركينا فاسو"
            ],
            [
            "code"=> "BG",
            "description_en"=> "Bulgaria",
            "description_ar"=> "بلغاريا"
            ],
            [
            "code"=> "BH",
            "description_en"=> "Bahrain",
            "description_ar"=> "البحرين"
            ],
            [
            "code"=> "BI",
            "description_en"=> "Burundi",
            "description_ar"=> "بوروندي"
            ],
            [
            "code"=> "BJ",
            "description_en"=> "Benin",
            "description_ar"=> "بنين"
            ],
            [
            "code"=> "BL",
            "description_en"=> "Saint Barthelemy",
            "description_ar"=> "سان بارتيلمي"
            ],
            [
            "code"=> "BM",
            "description_en"=> "Bermuda",
            "description_ar"=> "برمودا"
            ],
            [
            "code"=> "BN",
            "description_en"=> "Brunei Darussalam",
            "description_ar"=> "بروناي"
            ],
            [
            "code"=> "BO",
            "description_en"=> "Bolivia (Plurinational State of)",
            "description_ar"=> "بوليفيا"
            ],
            [
            "code"=> "BQ",
            "description_en"=> "Bonaire, Sint Eustatius and Saba",
            "description_ar"=> "الجزر الكاريبية الهولندية"
            ],
            [
            "code"=> "BR",
            "description_en"=> "Brazil",
            "description_ar"=> "البرازيل"
            ],
            [
            "code"=> "BS",
            "description_en"=> "Bahamas",
            "description_ar"=> "الباهاما"
            ],
            [
            "code"=> "BT",
            "description_en"=> "Bhutan",
            "description_ar"=> "بوتان"
            ],
            [
            "code"=> "BV",
            "description_en"=> "Bouvet Island",
            "description_ar"=> "جزيرة بوفيه"
            ],
            [
            "code"=> "BW",
            "description_en"=> "Botswana",
            "description_ar"=> "بتسوانا"
            ],
            [
            "code"=> "BY",
            "description_en"=> "Belarus",
            "description_ar"=> "روسيا البيضاء"
            ],
            [
            "code"=> "BZ",
            "description_en"=> "Belize",
            "description_ar"=> "بليز"
            ],
            [
            "code"=> "CA",
            "description_en"=> "Canada",
            "description_ar"=> "كندا"
            ],
            [
            "code"=> "CC",
            "description_en"=> "Cocos (Keeling) Islands",
            "description_ar"=> "جزر كوكوس"
            ],
            [
            "code"=> "CD",
            "description_en"=> "Congo (Democratic Republic of the)",
            "description_ar"=> "جمهورية الكونغو الديمقراطية"
            ],
            [
            "code"=> "CF",
            "description_en"=> "Central African Republic",
            "description_ar"=> "جمهورية أفريقيا الوسطى"
            ],
            [
            "code"=> "CG",
            "description_en"=> "Congo",
            "description_ar"=> "جمهورية الكونغو"
            ],
            [
            "code"=> "CH",
            "description_en"=> "Switzerland",
            "description_ar"=> "سويسرا"
            ],
            [
            "code"=> "CI",
            "description_en"=> "Cote d’Ivoire",
            "description_ar"=> "ساحل العاج"
            ],
            [
            "code"=> "CK",
            "description_en"=> "Cook Islands",
            "description_ar"=> "جزر كوك"
            ],
            [
            "code"=> "CL",
            "description_en"=> "Chile",
            "description_ar"=> "شيلي"
            ],
            [
            "code"=> "CM",
            "description_en"=> "Cameroon",
            "description_ar"=> "الكاميرون"
            ],
            [
            "code"=> "CN",
            "description_en"=> "China",
            "description_ar"=> "الصين"
            ],
            [
            "code"=> "CO",
            "description_en"=> "Colombia",
            "description_ar"=> "كولومبيا"
            ],
            [
            "code"=> "CR",
            "description_en"=> "Costa Rica",
            "description_ar"=> "كوستاريكا"
            ],
            [
            "code"=> "CU",
            "description_en"=> "Cuba",
            "description_ar"=> "كوبا"
            ],
            [
            "code"=> "CV",
            "description_en"=> "Cabo Verde",
            "description_ar"=> "الرأس الأخضر"
            ],
            [
            "code"=> "CW",
            "description_en"=> "Curaçao",
            "description_ar"=> "كوراساو"
            ],
            [
            "code"=> "CX",
            "description_en"=> "Christmas Island",
            "description_ar"=> "جزيرة عيد الميلاد"
            ],
            [
            "code"=> "CY",
            "description_en"=> "Cyprus",
            "description_ar"=> "قبرص"
            ],
            [
            "code"=> "CZ",
            "description_en"=> "Czechia",
            "description_ar"=> "جمهورية التشيك"
            ],
            [
            "code"=> "DE",
            "description_en"=> "Germany",
            "description_ar"=> "ألمانيا"
            ],
            [
            "code"=> "DJ",
            "description_en"=> "Djibouti",
            "description_ar"=> "جيبوتي"
            ],
            [
            "code"=> "DK",
            "description_en"=> "Denmark",
            "description_ar"=> "الدانمرك"
            ],
            [
            "code"=> "DM",
            "description_en"=> "Dominica",
            "description_ar"=> "دومينيكا"
            ],
            [
            "code"=> "DO",
            "description_en"=> "Dominican Republic",
            "description_ar"=> "جمهورية الدومينيكان"
            ],
            [
            "code"=> "DZ",
            "description_en"=> "Algeria",
            "description_ar"=> "الجزائر"
            ],
            [
            "code"=> "EC",
            "description_en"=> "Ecuador",
            "description_ar"=> "الاكوادور"
            ],
            [
            "code"=> "EE",
            "description_en"=> "Estonia",
            "description_ar"=> "استونيا"
            ],
            [
            "code"=> "EG",
            "description_en"=> "Egypt",
            "description_ar"=> "مصر"
            ],
            [
            "code"=> "EH",
            "description_en"=> "Western Sahara",
            "description_ar"=> "الصحراء الغربية"
            ],
            [
            "code"=> "ER",
            "description_en"=> "Eritrea",
            "description_ar"=> "اريتريا"
            ],
            [
            "code"=> "ES",
            "description_en"=> "Spain",
            "description_ar"=> "أسبانيا"
            ],
            [
            "code"=> "ET",
            "description_en"=> "Ethiopia",
            "description_ar"=> "اثيوبيا"
            ],
            [
            "code"=> "FI",
            "description_en"=> "Finland",
            "description_ar"=> "فنلندا"
            ],
            [
            "code"=> "FJ",
            "description_en"=> "Fiji",
            "description_ar"=> "فيجي"
            ],
            [
            "code"=> "FK",
            "description_en"=> "Falkland Islands (Malvinas)",
            "description_ar"=> "جزر فوكلاند"
            ],
            [
            "code"=> "FM",
            "description_en"=> "Micronesia (Federated States of)",
            "description_ar"=> "ميكرونيزيا"
            ],
            [
            "code"=> "FO",
            "description_en"=> "Faroe Islands",
            "description_ar"=> "جزر فارو"
            ],
            [
            "code"=> "FR",
            "description_en"=> "France",
            "description_ar"=> "فرنسا"
            ],
            [
            "code"=> "GA",
            "description_en"=> "Gabon",
            "description_ar"=> "الجابون"
            ],
            [
            "code"=> "GB",
            "description_en"=> "United Kingdom of Great Britain and Northern Ireland",
            "description_ar"=> "المملكة المتحدة"
            ],
            [
            "code"=> "GD",
            "description_en"=> "Grenada",
            "description_ar"=> "جرينادا"
            ],
            [
            "code"=> "GE",
            "description_en"=> "Georgia",
            "description_ar"=> "جورجيا"
            ],
            [
            "code"=> "GF",
            "description_en"=> "French Guiana",
            "description_ar"=> "غويانا"
            ],
            [
            "code"=> "GG",
            "description_en"=> "Guernsey",
            "description_ar"=> "جيرنزي"
            ],
            [
            "code"=> "GH",
            "description_en"=> "Ghana",
            "description_ar"=> "غانا"
            ],
            [
            "code"=> "GI",
            "description_en"=> "Gibraltar",
            "description_ar"=> "جبل طارق"
            ],
            [
            "code"=> "GL",
            "description_en"=> "Greenland",
            "description_ar"=> "جرينلاند"
            ],
            [
            "code"=> "GM",
            "description_en"=> "Gambia",
            "description_ar"=> "غامبيا"
            ],
            [
            "code"=> "GN",
            "description_en"=> "Guinea",
            "description_ar"=> "غينيا"
            ],
            [
            "code"=> "GP",
            "description_en"=> "Guadeloupe",
            "description_ar"=> "جوادلوب"
            ],
            [
            "code"=> "GQ",
            "description_en"=> "Equatorial Guinea",
            "description_ar"=> "غينيا الاستوائية"
            ],
            [
            "code"=> "GR",
            "description_en"=> "Greece",
            "description_ar"=> "اليونان"
            ],
            [
            "code"=> "GS",
            "description_en"=> "South Georgia and the South Sandwich Islands",
            "description_ar"=> "جورجيا الجنوبية وجزر ساندويتش الجنوبية"
            ],
            [
            "code"=> "GT",
            "description_en"=> "Guatemala",
            "description_ar"=> "جواتيمالا"
            ],
            [
            "code"=> "GU",
            "description_en"=> "Guam",
            "description_ar"=> "جوام"
            ],
            [
            "code"=> "GW",
            "description_en"=> "Guinea-Bissau",
            "description_ar"=> "غينيا بيساو"
            ],
            [
            "code"=> "GY",
            "description_en"=> "Guyana",
            "description_ar"=> "غيانا"
            ],
            [
            "code"=> "HK",
            "description_en"=> "Hong Kong",
            "description_ar"=> "هونغ كونغ"
            ],
            [
            "code"=> "HM",
            "description_en"=> "Heard Island and McDonald Islands",
            "description_ar"=> "جزيرة هيرد وجزر ماكدونالد"
            ],
            [
            "code"=> "HN",
            "description_en"=> "Honduras",
            "description_ar"=> "هندوراس"
            ],
            [
            "code"=> "HR",
            "description_en"=> "Croatia",
            "description_ar"=> "كرواتيا"
            ],
            [
            "code"=> "HT",
            "description_en"=> "Haiti",
            "description_ar"=> "هايتي"
            ],
            [
            "code"=> "HU",
            "description_en"=> "Hungary",
            "description_ar"=> "المجر"
            ],
            [
            "code"=> "ID",
            "description_en"=> "Indonesia",
            "description_ar"=> "اندونيسيا"
            ],
            [
            "code"=> "IE",
            "description_en"=> "Ireland",
            "description_ar"=> "أيرلندا"
            ],
            [
            "code"=> "IL",
            "description_en"=> "Israel",
            "description_ar"=> "اسرائيل"
            ],
            [
            "code"=> "IM",
            "description_en"=> "Isle of Man",
            "description_ar"=> "جزيرة مان"
            ],
            [
            "code"=> "IN",
            "description_en"=> "India",
            "description_ar"=> "الهند"
            ],
            [
            "code"=> "IO",
            "description_en"=> "British Indian Ocean Territory",
            "description_ar"=> "إقليم المحيط الهندي البريطاني"
            ],
            [
            "code"=> "IQ",
            "description_en"=> "Iraq",
            "description_ar"=> "العراق"
            ],
            [
            "code"=> "IR",
            "description_en"=> "Iran (Islamic Republic of)",
            "description_ar"=> "ايران"
            ],
            [
            "code"=> "IS",
            "description_en"=> "Iceland",
            "description_ar"=> "أيسلندا"
            ],
            [
            "code"=> "IT",
            "description_en"=> "Italy",
            "description_ar"=> "ايطاليا"
            ],
            [
            "code"=> "JE",
            "description_en"=> "Jersey",
            "description_ar"=> "جيرسي"
            ],
            [
            "code"=> "JM",
            "description_en"=> "Jamaica",
            "description_ar"=> "جامايكا"
            ],
            [
            "code"=> "JO",
            "description_en"=> "Jordan",
            "description_ar"=> "الأردن"
            ],
            [
            "code"=> "JP",
            "description_en"=> "Japan",
            "description_ar"=> "اليابان"
            ],
            [
            "code"=> "KE",
            "description_en"=> "Kenya",
            "description_ar"=> "كينيا"
            ],
            [
            "code"=> "KG",
            "description_en"=> "Kyrgyzstan",
            "description_ar"=> "قرغيزستان"
            ],
            [
            "code"=> "KH",
            "description_en"=> "Cambodia",
            "description_ar"=> "كمبوديا"
            ],
            [
            "code"=> "KI",
            "description_en"=> "Kiribati",
            "description_ar"=> "كيريباتي"
            ],
            [
            "code"=> "KM",
            "description_en"=> "Comoros",
            "description_ar"=> "جزر القمر"
            ],
            [
            "code"=> "KN",
            "description_en"=> "Saint Kitts and Nevis",
            "description_ar"=> "سانت كيتس ونيفيس"
            ],
            [
            "code"=> "KP",
            "description_en"=> "Korea (Democratic People’s Republic of)",
            "description_ar"=> "كوريا الشمالية"
            ],
            [
            "code"=> "KR",
            "description_en"=> "Korea (Republic of)",
            "description_ar"=> "كوريا الجنوبية"
            ],
            [
            "code"=> "KW",
            "description_en"=> "Kuwait",
            "description_ar"=> "الكويت"
            ],
            [
            "code"=> "KY",
            "description_en"=> "Cayman Islands",
            "description_ar"=> "جزر كايمان"
            ],
            [
            "code"=> "KZ",
            "description_en"=> "Kazakhstan",
            "description_ar"=> "كازاخستان"
            ],
            [
            "code"=> "LA",
            "description_en"=> "Lao People’s Democratic Republic",
            "description_ar"=> "لاوس"
            ],
            [
            "code"=> "LB",
            "description_en"=> "Lebanon",
            "description_ar"=> "لبنان"
            ],
            [
            "code"=> "LC",
            "description_en"=> "Saint Lucia",
            "description_ar"=> "سانت لوسيا"
            ],
            [
            "code"=> "LI",
            "description_en"=> "Liechtenstein",
            "description_ar"=> "ليختنشتاين"
            ],
            [
            "code"=> "LK",
            "description_en"=> "Sri Lanka",
            "description_ar"=> "سريلانكا"
            ],
            [
            "code"=> "LR",
            "description_en"=> "Liberia",
            "description_ar"=> "ليبيريا"
            ],
            [
            "code"=> "LS",
            "description_en"=> "Lesotho",
            "description_ar"=> "ليسوتو"
            ],
            [
            "code"=> "LT",
            "description_en"=> "Lithuania",
            "description_ar"=> "ليتوانيا"
            ],
            [
            "code"=> "LU",
            "description_en"=> "Luxembourg",
            "description_ar"=> "لوكسمبورج"
            ],
            [
            "code"=> "LV",
            "description_en"=> "Latvia",
            "description_ar"=> "لاتفيا"
            ],
            [
            "code"=> "LY",
            "description_en"=> "Libya",
            "description_ar"=> "ليبيا"
            ],
            [
            "code"=> "MA",
            "description_en"=> "Morocco",
            "description_ar"=> "المغرب"
            ],
            [
            "code"=> "MC",
            "description_en"=> "Monaco",
            "description_ar"=> "موناكو"
            ],
            [
            "code"=> "MD",
            "description_en"=> "Moldova (Republic of)",
            "description_ar"=> "مولدافيا"
            ],
            [
            "code"=> "ME",
            "description_en"=> "Montenegro",
            "description_ar"=> "الجبل الأسود"
            ],
            [
            "code"=> "MF",
            "description_en"=> "Saint Martin (French Part)",
            "description_ar"=> "تجمع سان مارتين"
            ],
            [
            "code"=> "MG",
            "description_en"=> "Madagascar",
            "description_ar"=> "مدغشقر"
            ],
            [
            "code"=> "MH",
            "description_en"=> "Marshall Islands",
            "description_ar"=> "جزر مارشال"
            ],
            [
            "code"=> "MK",
            "description_en"=> "North Macedonia",
            "description_ar"=> "مقدونيا"
            ],
            [
            "code"=> "ML",
            "description_en"=> "Mali",
            "description_ar"=> "مالي"
            ],
            [
            "code"=> "MM",
            "description_en"=> "Myanmar",
            "description_ar"=> "ميانمار"
            ],
            [
            "code"=> "MN",
            "description_en"=> "Mongolia",
            "description_ar"=> "منغوليا"
            ],
            [
            "code"=> "MO",
            "description_en"=> "Macao",
            "description_ar"=> "ماكاو"
            ],
            [
            "code"=> "MP",
            "description_en"=> "Northern Mariana Islands",
            "description_ar"=> "جزر ماريانا الشمالية"
            ],
            [
            "code"=> "MQ",
            "description_en"=> "Martinique",
            "description_ar"=> "مارتينيك"
            ],
            [
            "code"=> "MR",
            "description_en"=> "Mauritania",
            "description_ar"=> "موريتانيا"
            ],
            [
            "code"=> "MS",
            "description_en"=> "Montserrat",
            "description_ar"=> "مونتسرات"
            ],
            [
            "code"=> "MT",
            "description_en"=> "Malta",
            "description_ar"=> "مالطا"
            ],
            [
            "code"=> "MU",
            "description_en"=> "Mauritius",
            "description_ar"=> "موريشيوس"
            ],
            [
            "code"=> "MV",
            "description_en"=> "Maldives",
            "description_ar"=> "جزر المالديف"
            ],
            [
            "code"=> "MW",
            "description_en"=> "Malawi",
            "description_ar"=> "ملاوي"
            ],
            [
            "code"=> "MX",
            "description_en"=> "Mexico",
            "description_ar"=> "المكسيك"
            ],
            [
            "code"=> "MY",
            "description_en"=> "Malaysia",
            "description_ar"=> "ماليزيا"
            ],
            [
            "code"=> "MZ",
            "description_en"=> "Mozambique",
            "description_ar"=> "موزمبيق"
            ],
            [
            "code"=> "NA",
            "description_en"=> "Namibia",
            "description_ar"=> "ناميبيا"
            ],
            [
            "code"=> "NC",
            "description_en"=> "New Caledonia",
            "description_ar"=> "كاليدونيا الجديدة"
            ],
            [
            "code"=> "NE",
            "description_en"=> "Niger",
            "description_ar"=> "النيجر"
            ],
            [
            "code"=> "NF",
            "description_en"=> "Norfolk Island",
            "description_ar"=> "جزيرة نورفولك"
            ],
            [
            "code"=> "NG",
            "description_en"=> "Nigeria",
            "description_ar"=> "نيجيريا"
            ],
            [
            "code"=> "NI",
            "description_en"=> "Nicaragua",
            "description_ar"=> "نيكاراجوا"
            ],
            [
            "code"=> "NL",
            "description_en"=> "Netherlands",
            "description_ar"=> "هولندا"
            ],
            [
            "code"=> "NO",
            "description_en"=> "Norway",
            "description_ar"=> "النرويج"
            ],
            [
            "code"=> "NP",
            "description_en"=> "Nepal",
            "description_ar"=> "نيبال"
            ],
            [
            "code"=> "NR",
            "description_en"=> "Nauru",
            "description_ar"=> "نورو"
            ],
            [
            "code"=> "NU",
            "description_en"=> "Niue",
            "description_ar"=> "نيوي"
            ],
            [
            "code"=> "NZ",
            "description_en"=> "New Zealand",
            "description_ar"=> "نيوزيلاندا"
            ],
            [
            "code"=> "OM",
            "description_en"=> "Oman",
            "description_ar"=> "عمان"
            ],
            [
            "code"=> "PA",
            "description_en"=> "Panama",
            "description_ar"=> "بنما"
            ],
            [
            "code"=> "PE",
            "description_en"=> "Peru",
            "description_ar"=> "بيرو"
            ],
            [
            "code"=> "PF",
            "description_en"=> "French Polynesia",
            "description_ar"=> "بولينزيا الفرنسية"
            ],
            [
            "code"=> "PG",
            "description_en"=> "Papua New Guinea",
            "description_ar"=> "بابوا غينيا الجديدة"
            ],
            [
            "code"=> "PH",
            "description_en"=> "Philippines",
            "description_ar"=> "الفيلبين"
            ],
            [
            "code"=> "PK",
            "description_en"=> "Pakistan",
            "description_ar"=> "باكستان"
            ],
            [
            "code"=> "PL",
            "description_en"=> "Poland",
            "description_ar"=> "بولندا"
            ],
            [
            "code"=> "PM",
            "description_en"=> "Saint Pierre and Miquelon",
            "description_ar"=> "سان بيير وميكلون"
            ],
            [
            "code"=> "PN",
            "description_en"=> "Pitcairn",
            "description_ar"=> "بتكايرن"
            ],
            [
            "code"=> "PR",
            "description_en"=> "Puerto Rico",
            "description_ar"=> "بورتوريكو"
            ],
            [
            "code"=> "PS",
            "description_en"=> "Palestinian, State of",
            "description_ar"=> "فلسطين"
            ],
            [
            "code"=> "PT",
            "description_en"=> "Portugal",
            "description_ar"=> "البرتغال"
            ],
            [
            "code"=> "PW",
            "description_en"=> "Palau",
            "description_ar"=> "بالاو"
            ],
            [
            "code"=> "PY",
            "description_en"=> "Paraguay",
            "description_ar"=> "باراجواي"
            ],
            [
            "code"=> "QA",
            "description_en"=> "Qatar",
            "description_ar"=> "قطر"
            ],
            [
            "code"=> "RE",
            "description_en"=> "Réunion",
            "description_ar"=> "روينيون"
            ],
            [
            "code"=> "RO",
            "description_en"=> "Romania",
            "description_ar"=> "رومانيا"
            ],
            [
            "code"=> "RS",
            "description_en"=> "Serbia",
            "description_ar"=> "صربيا"
            ],
            [
            "code"=> "RU",
            "description_en"=> "Russian Federation",
            "description_ar"=> "روسيا"
            ],
            [
            "code"=> "RW",
            "description_en"=> "Rwanda",
            "description_ar"=> "رواندا"
            ],
            [
            "code"=> "SA",
            "description_en"=> "Saudi Arabia",
            "description_ar"=> "السعودية"
            ],
            [
            "code"=> "SB",
            "description_en"=> "Solomon Islands",
            "description_ar"=> "جزر سليمان"
            ],
            [
            "code"=> "SC",
            "description_en"=> "Seychelles",
            "description_ar"=> "سيشل"
            ],
            [
            "code"=> "SD",
            "description_en"=> "Sudan",
            "description_ar"=> "السودان"
            ],
            [
            "code"=> "SE",
            "description_en"=> "Sweden",
            "description_ar"=> "السويد"
            ],
            [
            "code"=> "SG",
            "description_en"=> "Singapore",
            "description_ar"=> "سنغافورة"
            ],
            [
            "code"=> "SH",
            "description_en"=> "Saint Helena, Ascension and Tristan da Cunha",
            "description_ar"=> "سانت هيلينا وأسينشين وتريستان دا كونا"
            ],
            [
            "code"=> "SI",
            "description_en"=> "Slovenia",
            "description_ar"=> "سلوفينيا"
            ],
            [
            "code"=> "SJ",
            "description_en"=> "Svalbard and Jan Mayen",
            "description_ar"=> "سفالبارد ويان ماين"
            ],
            [
            "code"=> "SK",
            "description_en"=> "Slovakia",
            "description_ar"=> "سلوفاكيا"
            ],
            [
            "code"=> "SL",
            "description_en"=> "Sierra Leone",
            "description_ar"=> "سيراليون"
            ],
            [
            "code"=> "SM",
            "description_en"=> "San Marino",
            "description_ar"=> "سان مارينو"
            ],
            [
            "code"=> "SN",
            "description_en"=> "Senegal",
            "description_ar"=> "السنغال"
            ],
            [
            "code"=> "SO",
            "description_en"=> "Somalia",
            "description_ar"=> "الصومال"
            ],
            [
            "code"=> "SR",
            "description_en"=> "Suriname",
            "description_ar"=> "سورينام"
            ],
            [
            "code"=> "SS",
            "description_en"=> "South Sudan",
            "description_ar"=> "جنوب السودان"
            ],
            [
            "code"=> "ST",
            "description_en"=> "Sao Tome and Principe",
            "description_ar"=> "ساو تومي وبرينسيب"
            ],
            [
            "code"=> "SV",
            "description_en"=> "El Salvador",
            "description_ar"=> "السلفادور"
            ],
            [
            "code"=> "SX",
            "description_en"=> "Sint Maarten (Dutch Part)",
            "description_ar"=> "سينت مارتن"
            ],
            [
            "code"=> "SY",
            "description_en"=> "Syrian Arab Republic",
            "description_ar"=> "سوريا"
            ],
            [
            "code"=> "SZ",
            "description_en"=> "Eswatini",
            "description_ar"=> "سوازيلاند"
            ],
            [
            "code"=> "TC",
            "description_en"=> "Turks and Caicos Islands",
            "description_ar"=> "جزر توركس وكايكوس"
            ],
            [
            "code"=> "TD",
            "description_en"=> "Chad",
            "description_ar"=> "تشاد"
            ],
            [
            "code"=> "TF",
            "description_en"=> "French Southern Territories",
            "description_ar"=> "أراض فرنسية جنوبية وأنتارتيكية"
            ],
            [
            "code"=> "TG",
            "description_en"=> "Togo",
            "description_ar"=> "توجو"
            ],
            [
            "code"=> "TH",
            "description_en"=> "Thailand",
            "description_ar"=> "تايلند"
            ],
            [
            "code"=> "TJ",
            "description_en"=> "Tajikistan",
            "description_ar"=> "طاجكستان"
            ],
            [
            "code"=> "TK",
            "description_en"=> "Tokelau",
            "description_ar"=> "توكيلو"
            ],
            [
            "code"=> "TL",
            "description_en"=> "Timor-Leste",
            "description_ar"=> "تيمور الشرقية"
            ],
            [
            "code"=> "TM",
            "description_en"=> "Turkmenistan",
            "description_ar"=> "تركمانستان"
            ],
            [
            "code"=> "TN",
            "description_en"=> "Tunisia",
            "description_ar"=> "تونس"
            ],
            [
            "code"=> "TO",
            "description_en"=> "Tonga",
            "description_ar"=> "تونجا"
            ],
            [
            "code"=> "TR",
            "description_en"=> "Turkey",
            "description_ar"=> "تركيا"
            ],
            [
            "code"=> "TT",
            "description_en"=> "Trinidad and Tobago",
            "description_ar"=> "ترينيداد وتوباغو"
            ],
            [
            "code"=> "TV",
            "description_en"=> "Tuvalu",
            "description_ar"=> "توفالو"
            ],
            [
            "code"=> "TW",
            "description_en"=> "Taiwan (Province of China)",
            "description_ar"=> "تايوان"
            ],
            [
            "code"=> "TZ",
            "description_en"=> "Tanzania, United Republic of",
            "description_ar"=> "تانزانيا"
            ],
            [
            "code"=> "UA",
            "description_en"=> "Ukraine",
            "description_ar"=> "أوكرانيا"
            ],
            [
            "code"=> "UG",
            "description_en"=> "Uganda",
            "description_ar"=> "أوغندا"
            ],
            [
            "code"=> "UM",
            "description_en"=> "United States Minor Outlying Islands",
            "description_ar"=> "جزر الولايات المتحدة الصغيرة النائية"
            ],
            [
            "code"=> "US",
            "description_en"=> "United States of America",
            "description_ar"=> "الولايات المتحدة"
            ],
            [
            "code"=> "UY",
            "description_en"=> "Uruguay",
            "description_ar"=> "أورجواي"
            ],
            [
            "code"=> "UZ",
            "description_en"=> "Uzbekistan",
            "description_ar"=> "أوزبكستان"
            ],
            [
            "code"=> "VA",
            "description_en"=> "Holy See",
            "description_ar"=> "الفاتيكان"
            ],
            [
            "code"=> "VC",
            "description_en"=> "Saint Vincent and the Grenadines",
            "description_ar"=> "سانت فينسنت والغرينادين"
            ],
            [
            "code"=> "VE",
            "description_en"=> "Venezuela (Bolivarian Republic of)",
            "description_ar"=> "فنزويلا"
            ],
            [
            "code"=> "VG",
            "description_en"=> "Virgin Islands (British)",
            "description_ar"=> "جزر العذراء البريطانية"
            ],
            [
            "code"=> "VI",
            "description_en"=> "Virgin Islands (U.S.)",
            "description_ar"=> "جزر العذراء الأمريكية"
            ],
            [
            "code"=> "VN",
            "description_en"=> "Viet Nam",
            "description_ar"=> "فيتنام"
            ],
            [
            "code"=> "VU",
            "description_en"=> "Vanuatu",
            "description_ar"=> "فانواتو"
            ],
            [
            "code"=> "WF",
            "description_en"=> "Wallis and Futuna",
            "description_ar"=> "والس وفوتونا"
            ],
            [
            "code"=> "WS",
            "description_en"=> "Samoa",
            "description_ar"=> "ساموا"
            ],
            [
            "code"=> "YE",
            "description_en"=> "Yemen",
            "description_ar"=> "اليمن"
            ],
            [
            "code"=> "YT",
            "description_en"=> "Mayotte",
            "description_ar"=> "مايوت"
            ],
            [
            "code"=> "ZA",
            "description_en"=> "South Africa",
            "description_ar"=> "جنوب أفريقيا"
            ],
            [
            "code"=> "ZM",
            "description_en"=> "Zambia",
            "description_ar"=> "زامبيا"
            ],
            [
            "code"=> "ZW",
            "description_en"=> "Zimbabwe",
            "description_ar"=> "زيمبابوي"
            ]
        ];
        \DB::table('country_codes')->insert($country_codes);
    }
}
