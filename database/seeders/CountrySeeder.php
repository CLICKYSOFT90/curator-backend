<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'id' => 1,
                'sort' => 'AF',
                'country_name' => 'Afghanistan',
                'phone_code' => '+93',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'=>2,
                'sort'=>'AL',
                'country_name'=>'Albania',
                'phone_code'=>'+355',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ],
            [
                'id'=>3,
                'sort'=>'DZ',
                'country_name'=>'Algeria',
                'phone_code'=>'+213',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>4,
        'sort'=>'AS',
        'country_name'=>'American Samoa',
        'phone_code'=>'+1684',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>5,
        'sort'=>'AD',
        'country_name'=>'Andorra',
        'phone_code'=>'+376',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>6,
        'sort'=>'AO',
        'country_name'=>'Angola',
        'phone_code'=>'+244',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>7,
        'sort'=>'AI',
        'country_name'=>'Anguilla',
        'phone_code'=>'+1264',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>8,
        'sort'=>'AQ',
        'country_name'=>'Antarctica',
        'phone_code'=>'+0',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>9,
        'sort'=>'AG',
        'country_name'=>'Antigua And Barbuda',
        'phone_code'=>'+1268',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>10,
        'sort'=>'AR',
        'country_name'=>'Argentina',
        'phone_code'=>'+54',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>11,
        'sort'=>'AM',
        'country_name'=>'Armenia',
        'phone_code'=>'+374',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>12,
        'sort'=>'AW',
        'country_name'=>'Aruba',
        'phone_code'=>'+297',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>13,
        'sort'=>'AU',
        'country_name'=>'Australia',
        'phone_code'=>'+61',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>14,
        'sort'=>'AT',
        'country_name'=>'Austria',
        'phone_code'=>'+43',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>15,
        'sort'=>'AZ',
        'country_name'=>'Azerbaijan',
        'phone_code'=>'+994',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>16,
        'sort'=>'BS',
        'country_name'=>'Bahamas The',
        'phone_code'=>'+1242',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>17,
        'sort'=>'BH',
        'country_name'=>'Bahrain',
        'phone_code'=>'+973',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>18,
        'sort'=>'BD',
        'country_name'=>'Bangladesh',
        'phone_code'=>'+880',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>19,
        'sort'=>'BB',
        'country_name'=>'Barbados',
        'phone_code'=>'+1246',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>20,
        'sort'=>'BY',
        'country_name'=>'Belarus',
        'phone_code'=>'+375',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>21,
        'sort'=>'BE',
        'country_name'=>'Belgium',
        'phone_code'=>'+32',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>22,
        'sort'=>'BZ',
        'country_name'=>'Belize',
        'phone_code'=>'+501',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>23,
        'sort'=>'BJ',
        'country_name'=>'Benin',
        'phone_code'=>'+229',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>24,
        'sort'=>'BM',
        'country_name'=>'Bermuda',
        'phone_code'=>'+1441',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>25,
        'sort'=>'BT',
        'country_name'=>'Bhutan',
        'phone_code'=>'+975',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>26,
        'sort'=>'BO',
        'country_name'=>'Bolivia',
        'phone_code'=>'+591',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>27,
        'sort'=>'BA',
        'country_name'=>'Bosnia and Herzegovina',
        'phone_code'=>'+387',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>28,
        'sort'=>'BW',
        'country_name'=>'Botswana',
        'phone_code'=>'+267',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>29,
        'sort'=>'BV',
        'country_name'=>'Bouvet Island',
        'phone_code'=>'+0',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>30,
        'sort'=>'BR',
        'country_name'=>'Brazil',
        'phone_code'=>'+55',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>31,
        'sort'=>'IO',
        'country_name'=>'British Indian Ocean Territory',
        'phone_code'=>'+246',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>32,
        'sort'=>'BN',
        'country_name'=>'Brunei',
        'phone_code'=>'+673',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>33,
        'sort'=>'BG',
        'country_name'=>'Bulgaria',
        'phone_code'=>'+359',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>34,
        'sort'=>'BF',
        'country_name'=>'Burkina Faso',
        'phone_code'=>'+226',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>35,
        'sort'=>'BI',
        'country_name'=>'Burundi',
        'phone_code'=>'+257',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>36,
        'sort'=>'KH',
        'country_name'=>'Cambodia',
        'phone_code'=>'+855',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>37,
        'sort'=>'CM',
        'country_name'=>'Cameroon',
        'phone_code'=>'+237',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>38,
        'sort'=>'CA',
        'country_name'=>'Canada',
        'phone_code'=>'+1',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>39,
        'sort'=>'CV',
        'country_name'=>'Cape Verde',
        'phone_code'=>'+238',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>40,
        'sort'=>'KY',
        'country_name'=>'Cayman Islands',
        'phone_code'=>'+1345',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>41,
        'sort'=>'CF',
        'country_name'=>'Central African Republic',
        'phone_code'=>'+236',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>42,
        'sort'=>'TD',
        'country_name'=>'Chad',
        'phone_code'=>'+235',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>43,
        'sort'=>'CL',
        'country_name'=>'Chile',
        'phone_code'=>'+56',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>44,
        'sort'=>'CN',
        'country_name'=>'China',
        'phone_code'=>'+86',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>45,
        'sort'=>'CX',
        'country_name'=>'Christmas Island',
        'phone_code'=>'+61',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>46,
        'sort'=>'CC',
        'country_name'=>'Cocos (Keeling) Islands',
        'phone_code'=>'+672',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>47,
        'sort'=>'CO',
        'country_name'=>'Colombia',
        'phone_code'=>'+57',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>48,
        'sort'=>'KM',
        'country_name'=>'Comoros',
        'phone_code'=>'+269',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>49,
        'sort'=>'CG',
        'country_name'=>'Republic Of The Congo',
        'phone_code'=>'+242',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>50,
        'sort'=>'CD',
        'country_name'=>'Democratic Republic Of The Congo',
        'phone_code'=>'+242',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>51,
        'sort'=>'CK',
        'country_name'=>'Cook Islands',
        'phone_code'=>'+682',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>52,
        'sort'=>'CR',
        'country_name'=>'Costa Rica',
        'phone_code'=>'+506',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>53,
        'sort'=>'CI',
        'country_name'=>'Cote D Ivoire (Ivory Coast)',
        'phone_code'=>'+225',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>54,
        'sort'=>'HR',
        'country_name'=>'Croatia (Hrvatska)',
        'phone_code'=>'+385',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>55,
        'sort'=>'CU',
        'country_name'=>'Cuba',
        'phone_code'=>'+53',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>56,
        'sort'=>'CY',
        'country_name'=>'Cyprus',
        'phone_code'=>'+357',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>57,
        'sort'=>'CZ',
        'country_name'=>'Czech Republic',
        'phone_code'=>'+420',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>58,
        'sort'=>'DK',
        'country_name'=>'Denmark',
        'phone_code'=>'+45',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>59,
        'sort'=>'DJ',
        'country_name'=>'Djibouti',
        'phone_code'=>'+253',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>60,
        'sort'=>'DM',
        'country_name'=>'Dominica',
        'phone_code'=>'+1767',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>61,
        'sort'=>'DO',
        'country_name'=>'Dominican Republic',
        'phone_code'=>'+1809',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>62,
        'sort'=>'TP',
        'country_name'=>'East Timor',
        'phone_code'=>'+670',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>63,
        'sort'=>'EC',
        'country_name'=>'Ecuador',
        'phone_code'=>'+593',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>64,
        'sort'=>'EG',
        'country_name'=>'Egypt',
        'phone_code'=>'+20',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>65,
        'sort'=>'SV',
        'country_name'=>'El Salvador',
        'phone_code'=>'+503',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>66,
        'sort'=>'GQ',
        'country_name'=>'Equatorial Guinea',
        'phone_code'=>'+240',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>67,
        'sort'=>'ER',
        'country_name'=>'Eritrea',
        'phone_code'=>'+291',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>68,
        'sort'=>'EE',
        'country_name'=>'Estonia',
        'phone_code'=>'+372',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>69,
        'sort'=>'ET',
        'country_name'=>'Ethiopia',
        'phone_code'=>'+251',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>70,
        'sort'=>'XA',
        'country_name'=>'External Territories of Australia',
        'phone_code'=>'+61',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>71,
        'sort'=>'FK',
        'country_name'=>'Falkland Islands',
        'phone_code'=>'+500',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>72,
        'sort'=>'FO',
        'country_name'=>'Faroe Islands',
        'phone_code'=>'+298',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>73,
        'sort'=>'FJ',
        'country_name'=>'Fiji Islands',
        'phone_code'=>'+679',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>74,
        'sort'=>'FI',
        'country_name'=>'Finland',
        'phone_code'=>'+358',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>75,
        'sort'=>'FR',
        'country_name'=>'France',
        'phone_code'=>'+33',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>76,
        'sort'=>'GF',
        'country_name'=>'French Guiana',
        'phone_code'=>'+594',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>77,
        'sort'=>'PF',
        'country_name'=>'French Polynesia',
        'phone_code'=>'+689',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>78,
        'sort'=>'TF',
        'country_name'=>'French Southern Territories',
        'phone_code'=>'+0',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>79,
        'sort'=>'GA',
        'country_name'=>'Gabon',
        'phone_code'=>'+241',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>80,
        'sort'=>'GM',
        'country_name'=>'Gambia The',
        'phone_code'=>'+220',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>81,
        'sort'=>'GE',
        'country_name'=>'Georgia',
        'phone_code'=>'+995',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>82,
        'sort'=>'DE',
        'country_name'=>'Germany',
        'phone_code'=>'+49',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>83,
        'sort'=>'GH',
        'country_name'=>'Ghana',
        'phone_code'=>'+233',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>84,
        'sort'=>'GI',
        'country_name'=>'Gibraltar',
        'phone_code'=>'+350',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>85,
        'sort'=>'GR',
        'country_name'=>'Greece',
        'phone_code'=>'+30',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>86,
        'sort'=>'GL',
        'country_name'=>'Greenland',
        'phone_code'=>'+299',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>87,
        'sort'=>'GD',
        'country_name'=>'Grenada',
        'phone_code'=>'+1473',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>88,
        'sort'=>'GP',
        'country_name'=>'Guadeloupe',
        'phone_code'=>'+590',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>89,
        'sort'=>'GU',
        'country_name'=>'Guam',
        'phone_code'=>'+1671',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>90,
        'sort'=>'GT',
        'country_name'=>'Guatemala',
        'phone_code'=>'+502',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>91,
        'sort'=>'XU',
        'country_name'=>'Guernsey and Alderney',
        'phone_code'=>'+44',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>92,
        'sort'=>'GN',
        'country_name'=>'Guinea',
        'phone_code'=>'+224',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>93,
        'sort'=>'GW',
        'country_name'=>'Guinea-Bissau',
        'phone_code'=>'+245',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>94,
        'sort'=>'GY',
        'country_name'=>'Guyana',
        'phone_code'=>'+592',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>95,
        'sort'=>'HT',
        'country_name'=>'Haiti',
        'phone_code'=>'+509',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>96,
        'sort'=>'HM',
        'country_name'=>'Heard and McDonald Islands',
        'phone_code'=>'+0',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>97,
        'sort'=>'HN',
        'country_name'=>'Honduras',
        'phone_code'=>'+504',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>98,
        'sort'=>'HK',
        'country_name'=>'Hong Kong S.A.R.',
        'phone_code'=>'+852',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>99,
        'sort'=>'HU',
        'country_name'=>'Hungary',
        'phone_code'=>'+36',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>100,
        'sort'=>'IS',
        'country_name'=>'Iceland',
        'phone_code'=>'+354',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>101,
        'sort'=>'IN',
        'country_name'=>'India',
        'phone_code'=>'+91',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>102,
        'sort'=>'id',
        'country_name'=>'Indonesia',
        'phone_code'=>'+62',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>103,
        'sort'=>'IR',
        'country_name'=>'Iran',
        'phone_code'=>'+98',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>104,
        'sort'=>'IQ',
        'country_name'=>'Iraq',
        'phone_code'=>'+964',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>105,
        'sort'=>'IE',
        'country_name'=>'Ireland',
        'phone_code'=>'+353',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>106,
        'sort'=>'IL',
        'country_name'=>'Israel',
        'phone_code'=>'+972',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>107,
        'sort'=>'IT',
        'country_name'=>'Italy',
        'phone_code'=>'+39',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>108,
        'sort'=>'JM',
        'country_name'=>'Jamaica',
        'phone_code'=>'+1876',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>109,
        'sort'=>'JP',
        'country_name'=>'Japan',
        'phone_code'=>'+81',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>110,
        'sort'=>'XJ',
        'country_name'=>'Jersey',
        'phone_code'=>'+44',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>111,
        'sort'=>'JO',
        'country_name'=>'Jordan',
        'phone_code'=>'+962',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>112,
        'sort'=>'KZ',
        'country_name'=>'Kazakhstan',
        'phone_code'=>'+7',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>113,
        'sort'=>'KE',
        'country_name'=>'Kenya',
        'phone_code'=>'+254',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>114,
        'sort'=>'KI',
        'country_name'=>'Kiribati',
        'phone_code'=>'+686',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>115,
        'sort'=>'KP',
        'country_name'=>'Korea North',
        'phone_code'=>'+850',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>116,
        'sort'=>'KR',
        'country_name'=>'Korea South',
        'phone_code'=>'+82',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>117,
        'sort'=>'KW',
        'country_name'=>'Kuwait',
        'phone_code'=>'+965',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>118,
        'sort'=>'KG',
        'country_name'=>'Kyrgyzstan',
        'phone_code'=>'+996',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>119,
        'sort'=>'LA',
        'country_name'=>'Laos',
        'phone_code'=>'+856',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>120,
        'sort'=>'LV',
        'country_name'=>'Latvia',
        'phone_code'=>'+371',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>121,
        'sort'=>'LB',
        'country_name'=>'Lebanon',
        'phone_code'=>'+961',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>122,
        'sort'=>'LS',
        'country_name'=>'Lesotho',
        'phone_code'=>'+266',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>123,
        'sort'=>'LR',
        'country_name'=>'Liberia',
        'phone_code'=>'+231',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>124,
        'sort'=>'LY',
        'country_name'=>'Libya',
        'phone_code'=>'+218',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>125,
        'sort'=>'LI',
        'country_name'=>'Liechtenstein',
        'phone_code'=>'+423',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>126,
        'sort'=>'LT',
        'country_name'=>'Lithuania',
        'phone_code'=>'+370',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>127,
        'sort'=>'LU',
        'country_name'=>'Luxembourg',
        'phone_code'=>'+352',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>128,
        'sort'=>'MO',
        'country_name'=>'Macau S.A.R.',
        'phone_code'=>'+853',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>129,
        'sort'=>'MK',
        'country_name'=>'Macedonia',
        'phone_code'=>'+389',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>130,
        'sort'=>'MG',
        'country_name'=>'Madagascar',
        'phone_code'=>'+261',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>131,
        'sort'=>'MW',
        'country_name'=>'Malawi',
        'phone_code'=>'+265',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>132,
        'sort'=>'MY',
        'country_name'=>'Malaysia',
        'phone_code'=>'+60',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>133,
        'sort'=>'MV',
        'country_name'=>'Maldives',
        'phone_code'=>'+960',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>134,
        'sort'=>'ML',
        'country_name'=>'Mali',
        'phone_code'=>'+223',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>135,
        'sort'=>'MT',
        'country_name'=>'Malta',
        'phone_code'=>'+356',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>136,
        'sort'=>'XM',
        'country_name'=>'Man (Isle of)',
        'phone_code'=>'+44',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>137,
        'sort'=>'MH',
        'country_name'=>'Marshall Islands',
        'phone_code'=>'+692',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>138,
        'sort'=>'MQ',
        'country_name'=>'Martinique',
        'phone_code'=>'+596',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>139,
        'sort'=>'MR',
        'country_name'=>'Mauritania',
        'phone_code'=>'+222',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>140,
        'sort'=>'MU',
        'country_name'=>'Mauritius',
        'phone_code'=>'+230',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>141,
        'sort'=>'YT',
        'country_name'=>'Mayotte',
        'phone_code'=>'+269',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>142,
        'sort'=>'MX',
        'country_name'=>'Mexico',
        'phone_code'=>'+52',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>143,
        'sort'=>'FM',
        'country_name'=>'Micronesia',
        'phone_code'=>'+691',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>144,
        'sort'=>'MD',
        'country_name'=>'Moldova',
        'phone_code'=>'+373',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>145,
        'sort'=>'MC',
        'country_name'=>'Monaco',
        'phone_code'=>'+377',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>146,
        'sort'=>'MN',
        'country_name'=>'Mongolia',
        'phone_code'=>'+976',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>147,
        'sort'=>'MS',
        'country_name'=>'Montserrat',
        'phone_code'=>'+1664',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>148,
        'sort'=>'MA',
        'country_name'=>'Morocco',
        'phone_code'=>'+212',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>149,
        'sort'=>'MZ',
        'country_name'=>'Mozambique',
        'phone_code'=>'+258',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>150,
        'sort'=>'MM',
        'country_name'=>'Myanmar',
        'phone_code'=>'+95',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>151,
        'sort'=>'NA',
        'country_name'=>'Namibia',
        'phone_code'=>'+264',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>152,
        'sort'=>'NR',
        'country_name'=>'Nauru',
        'phone_code'=>'+674',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>153,
        'sort'=>'NP',
        'country_name'=>'Nepal',
        'phone_code'=>'+977',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>154,
        'sort'=>'AN',
        'country_name'=>'Netherlands Antilles',
        'phone_code'=>'+599',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>155,
        'sort'=>'NL',
        'country_name'=>'Netherlands The',
        'phone_code'=>'+31',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>156,
        'sort'=>'NC',
        'country_name'=>'New Caledonia',
        'phone_code'=>'+687',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>157,
        'sort'=>'NZ',
        'country_name'=>'New Zealand',
        'phone_code'=>'+64',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>158,
        'sort'=>'NI',
        'country_name'=>'Nicaragua',
        'phone_code'=>'+505',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>159,
        'sort'=>'NE',
        'country_name'=>'Niger',
        'phone_code'=>'+227',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>160,
        'sort'=>'NG',
        'country_name'=>'Nigeria',
        'phone_code'=>'+234',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>161,
        'sort'=>'NU',
        'country_name'=>'Niue',
        'phone_code'=>'+683',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>162,
        'sort'=>'NF',
        'country_name'=>'Norfolk Island',
        'phone_code'=>'+672',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>163,
        'sort'=>'MP',
        'country_name'=>'Northern Mariana Islands',
        'phone_code'=>'+1670',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>164,
        'sort'=>'NO',
        'country_name'=>'Norway',
        'phone_code'=>'+47',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>165,
        'sort'=>'OM',
        'country_name'=>'Oman',
        'phone_code'=>'+968',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>166,
        'sort'=>'PK',
        'country_name'=>'Pakistan',
        'phone_code'=>'+92',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>167,
        'sort'=>'PW',
        'country_name'=>'Palau',
        'phone_code'=>'+680',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>168,
        'sort'=>'PS',
        'country_name'=>'Palestinian Territory Occupied',
        'phone_code'=>'+970',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>169,
        'sort'=>'PA',
        'country_name'=>'Panama',
        'phone_code'=>'+507',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>170,
        'sort'=>'PG',
        'country_name'=>'Papua new Guinea',
        'phone_code'=>'+675',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>171,
        'sort'=>'PY',
        'country_name'=>'Paraguay',
        'phone_code'=>'+595',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>172,
        'sort'=>'PE',
        'country_name'=>'Peru',
        'phone_code'=>'+51',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>173,
        'sort'=>'PH',
        'country_name'=>'Philippines',
        'phone_code'=>'+63',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>174,
        'sort'=>'PN',
        'country_name'=>'Pitcairn Island',
        'phone_code'=>'+0',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>175,
        'sort'=>'PL',
        'country_name'=>'Poland',
        'phone_code'=>'+48',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>176,
        'sort'=>'PT',
        'country_name'=>'Portugal',
        'phone_code'=>'+351',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>177,
        'sort'=>'PR',
        'country_name'=>'Puerto Rico',
        'phone_code'=>'+1787',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>178,
        'sort'=>'QA',
        'country_name'=>'Qatar',
        'phone_code'=>'+974',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>179,
        'sort'=>'RE',
        'country_name'=>'Reunion',
        'phone_code'=>'+262',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>180,
        'sort'=>'RO',
        'country_name'=>'Romania',
        'phone_code'=>'+40',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>181,
        'sort'=>'RU',
        'country_name'=>'Russia',
        'phone_code'=>'+70',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>182,
        'sort'=>'RW',
        'country_name'=>'Rwanda',
        'phone_code'=>'+250',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>183,
        'sort'=>'SH',
        'country_name'=>'Saint Helena',
        'phone_code'=>'+290',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>184,
        'sort'=>'KN',
        'country_name'=>'Saint Kitts And Nevis',
        'phone_code'=>'+1869',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>185,
        'sort'=>'LC',
        'country_name'=>'Saint Lucia',
        'phone_code'=>'+1758',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>186,
        'sort'=>'PM',
        'country_name'=>'Saint Pierre and Miquelon',
        'phone_code'=>'+508',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>187,
        'sort'=>'VC',
        'country_name'=>'Saint Vincent And The Grenadines',
        'phone_code'=>'+1784',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>188,
        'sort'=>'WS',
        'country_name'=>'Samoa',
        'phone_code'=>'+684',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>189,
        'sort'=>'SM',
        'country_name'=>'San Marino',
        'phone_code'=>'+378',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>190,
        'sort'=>'ST',
        'country_name'=>'Sao Tome and Principe',
        'phone_code'=>'+239',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>191,
        'sort'=>'SA',
        'country_name'=>'Saudi Arabia',
        'phone_code'=>'+966',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>192,
        'sort'=>'SN',
        'country_name'=>'Senegal',
        'phone_code'=>'+221',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>193,
        'sort'=>'RS',
        'country_name'=>'Serbia',
        'phone_code'=>'+381',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>194,
        'sort'=>'SC',
        'country_name'=>'Seychelles',
        'phone_code'=>'+248',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>195,
        'sort'=>'SL',
        'country_name'=>'Sierra Leone',
        'phone_code'=>'+232',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>196,
        'sort'=>'SG',
        'country_name'=>'Singapore',
        'phone_code'=>'+65',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>197,
        'sort'=>'SK',
        'country_name'=>'Slovakia',
        'phone_code'=>'+421',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>198,
        'sort'=>'SI',
        'country_name'=>'Slovenia',
        'phone_code'=>'+386',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>199,
        'sort'=>'XG',
        'country_name'=>'Smaller Territories of the UK',
        'phone_code'=>'+44',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>200,
        'sort'=>'SB',
        'country_name'=>'Solomon Islands',
        'phone_code'=>'+677',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>201,
        'sort'=>'SO',
        'country_name'=>'Somalia',
        'phone_code'=>'+252',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>202,
        'sort'=>'ZA',
        'country_name'=>'South Africa',
        'phone_code'=>'+27',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>203,
        'sort'=>'GS',
        'country_name'=>'South Georgia',
        'phone_code'=>'+0',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>204,
        'sort'=>'SS',
        'country_name'=>'South Sudan',
        'phone_code'=>'+211',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>205,
        'sort'=>'ES',
        'country_name'=>'Spain',
        'phone_code'=>'+34',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>206,
        'sort'=>'LK',
        'country_name'=>'Sri Lanka',
        'phone_code'=>'+94',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>207,
        'sort'=>'SD',
        'country_name'=>'Sudan',
        'phone_code'=>'+249',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>208,
        'sort'=>'SR',
        'country_name'=>'Suricountry_name',
        'phone_code'=>'+597',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>209,
        'sort'=>'SJ',
        'country_name'=>'Svalbard And Jan Mayen Islands',
        'phone_code'=>'+47',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>210,
        'sort'=>'SZ',
        'country_name'=>'Swaziland',
        'phone_code'=>'+268',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>211,
        'sort'=>'SE',
        'country_name'=>'Sweden',
        'phone_code'=>'+46',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>212,
        'sort'=>'CH',
        'country_name'=>'Switzerland',
        'phone_code'=>'+41',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>213,
        'sort'=>'SY',
        'country_name'=>'Syria',
        'phone_code'=>'+963',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>214,
        'sort'=>'TW',
        'country_name'=>'Taiwan',
        'phone_code'=>'+886',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>215,
        'sort'=>'TJ',
        'country_name'=>'Tajikistan',
        'phone_code'=>'+992',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>216,
        'sort'=>'TZ',
        'country_name'=>'Tanzania',
        'phone_code'=>'+255',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>217,
        'sort'=>'TH',
        'country_name'=>'Thailand',
        'phone_code'=>'+66',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>218,
        'sort'=>'TG',
        'country_name'=>'Togo',
        'phone_code'=>'+228',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>219,
        'sort'=>'TK',
        'country_name'=>'Tokelau',
        'phone_code'=>'+690',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>220,
        'sort'=>'TO',
        'country_name'=>'Tonga',
        'phone_code'=>'+676',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>221,
        'sort'=>'TT',
        'country_name'=>'Trinidad And Tobago',
        'phone_code'=>'+1868',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>222,
        'sort'=>'TN',
        'country_name'=>'Tunisia',
        'phone_code'=>'+216',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>223,
        'sort'=>'TR',
        'country_name'=>'Turkey',
        'phone_code'=>'+90',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>224,
        'sort'=>'TM',
        'country_name'=>'Turkmenistan',
        'phone_code'=>'+7370',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>225,
        'sort'=>'TC',
        'country_name'=>'Turks And Caicos Islands',
        'phone_code'=>'+1649',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>226,
        'sort'=>'TV',
        'country_name'=>'Tuvalu',
        'phone_code'=>'+688',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>227,
        'sort'=>'UG',
        'country_name'=>'Uganda',
        'phone_code'=>'+256',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>228,
        'sort'=>'UA',
        'country_name'=>'Ukraine',
        'phone_code'=>'+380',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>229,
        'sort'=>'AE',
        'country_name'=>'United Arab Emirates',
        'phone_code'=>'+971',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>230,
        'sort'=>'GB',
        'country_name'=>'United Kingdom',
        'phone_code'=>'+44',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>231,
        'sort'=>'US',
        'country_name'=>'United States',
        'phone_code'=>'+1',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>232,
        'sort'=>'UM',
        'country_name'=>'United States Minor Outlying Islands',
        'phone_code'=>'+1',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>233,
        'sort'=>'UY',
        'country_name'=>'Uruguay',
        'phone_code'=>'+598',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>234,
        'sort'=>'UZ',
        'country_name'=>'Uzbekistan',
        'phone_code'=>'+998',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>235,
        'sort'=>'VU',
        'country_name'=>'Vanuatu',
        'phone_code'=>'+678',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>236,
        'sort'=>'VA',
        'country_name'=>'Vatican City State (Holy See)',
        'phone_code'=>'+39',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>237,
        'sort'=>'VE',
        'country_name'=>'Venezuela',
        'phone_code'=>'+58',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>238,
        'sort'=>'VN',
        'country_name'=>'Vietnam',
        'phone_code'=>'+84',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>239,
        'sort'=>'VG',
        'country_name'=>'Virgin Islands (British)',
        'phone_code'=>'+1284',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>240,
        'sort'=>'VI',
        'country_name'=>'Virgin Islands (US)',
        'phone_code'=>'+1340',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>241,
        'sort'=>'WF',
        'country_name'=>'Wallis And Futuna Islands',
        'phone_code'=>'+681',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>242,
        'sort'=>'EH',
        'country_name'=>'Western Sahara',
        'phone_code'=>'+212',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>243,
        'sort'=>'YE',
        'country_name'=>'Yemen',
        'phone_code'=>'+967',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>244,
        'sort'=>'YU',
        'country_name'=>'Yugoslavia',
        'phone_code'=>'+38',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>245,
        'sort'=>'ZM',
        'country_name'=>'Zambia',
        'phone_code'=>'+260',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    [
        'id'=>246,
        'sort'=>'ZW',
        'country_name'=>'Zimbabwe',
        'phone_code'=>'+26',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
            ],
    ];
    
    Country::insert($countries);

    }
}
