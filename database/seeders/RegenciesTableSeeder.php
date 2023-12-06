<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regencies')->delete();
        
        \DB::table('regencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1101',
                'name' => 'KABUPATEN SIMEULUE',
            ),
            1 => 
            array (
                'id' => 2,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1102',
                'name' => 'KABUPATEN ACEH SINGKIL',
            ),
            2 => 
            array (
                'id' => 3,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1103',
                'name' => 'KABUPATEN ACEH SELATAN',
            ),
            3 => 
            array (
                'id' => 4,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1104',
                'name' => 'KABUPATEN ACEH TENGGARA',
            ),
            4 => 
            array (
                'id' => 5,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1105',
                'name' => 'KABUPATEN ACEH TIMUR',
            ),
            5 => 
            array (
                'id' => 6,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1106',
                'name' => 'KABUPATEN ACEH TENGAH',
            ),
            6 => 
            array (
                'id' => 7,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1107',
                'name' => 'KABUPATEN ACEH BARAT',
            ),
            7 => 
            array (
                'id' => 8,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1108',
                'name' => 'KABUPATEN ACEH BESAR',
            ),
            8 => 
            array (
                'id' => 9,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1109',
                'name' => 'KABUPATEN PIDIE',
            ),
            9 => 
            array (
                'id' => 10,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1110',
                'name' => 'KABUPATEN BIREUEN',
            ),
            10 => 
            array (
                'id' => 11,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1111',
                'name' => 'KABUPATEN ACEH UTARA',
            ),
            11 => 
            array (
                'id' => 12,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1112',
                'name' => 'KABUPATEN ACEH BARAT DAYA',
            ),
            12 => 
            array (
                'id' => 13,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1113',
                'name' => 'KABUPATEN GAYO LUES',
            ),
            13 => 
            array (
                'id' => 14,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1114',
                'name' => 'KABUPATEN ACEH TAMIANG',
            ),
            14 => 
            array (
                'id' => 15,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1115',
                'name' => 'KABUPATEN NAGAN RAYA',
            ),
            15 => 
            array (
                'id' => 16,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1116',
                'name' => 'KABUPATEN ACEH JAYA',
            ),
            16 => 
            array (
                'id' => 17,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1117',
                'name' => 'KABUPATEN BENER MERIAH',
            ),
            17 => 
            array (
                'id' => 18,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1118',
                'name' => 'KABUPATEN PIDIE JAYA',
            ),
            18 => 
            array (
                'id' => 19,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1171',
                'name' => 'KOTA BANDA ACEH',
            ),
            19 => 
            array (
                'id' => 20,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1172',
                'name' => 'KOTA SABANG',
            ),
            20 => 
            array (
                'id' => 21,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1173',
                'name' => 'KOTA LANGSA',
            ),
            21 => 
            array (
                'id' => 22,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1174',
                'name' => 'KOTA LHOKSEUMAWE',
            ),
            22 => 
            array (
                'id' => 23,
                'province_id' => 1,
                'parent_code' => '11',
                'code' => '1175',
                'name' => 'KOTA SUBULUSSALAM',
            ),
            23 => 
            array (
                'id' => 24,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1201',
                'name' => 'KABUPATEN NIAS',
            ),
            24 => 
            array (
                'id' => 25,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1202',
                'name' => 'KABUPATEN MANDAILING NATAL',
            ),
            25 => 
            array (
                'id' => 26,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1203',
                'name' => 'KABUPATEN TAPANULI SELATAN',
            ),
            26 => 
            array (
                'id' => 27,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1204',
                'name' => 'KABUPATEN TAPANULI TENGAH',
            ),
            27 => 
            array (
                'id' => 28,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1205',
                'name' => 'KABUPATEN TAPANULI UTARA',
            ),
            28 => 
            array (
                'id' => 29,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1206',
                'name' => 'KABUPATEN TOBA SAMOSIR',
            ),
            29 => 
            array (
                'id' => 30,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1207',
                'name' => 'KABUPATEN LABUHAN BATU',
            ),
            30 => 
            array (
                'id' => 31,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1208',
                'name' => 'KABUPATEN ASAHAN',
            ),
            31 => 
            array (
                'id' => 32,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1209',
                'name' => 'KABUPATEN SIMALUNGUN',
            ),
            32 => 
            array (
                'id' => 33,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1210',
                'name' => 'KABUPATEN DAIRI',
            ),
            33 => 
            array (
                'id' => 34,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1211',
                'name' => 'KABUPATEN KARO',
            ),
            34 => 
            array (
                'id' => 35,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1212',
                'name' => 'KABUPATEN DELI SERDANG',
            ),
            35 => 
            array (
                'id' => 36,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1213',
                'name' => 'KABUPATEN LANGKAT',
            ),
            36 => 
            array (
                'id' => 37,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1214',
                'name' => 'KABUPATEN NIAS SELATAN',
            ),
            37 => 
            array (
                'id' => 38,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1215',
                'name' => 'KABUPATEN HUMBANG HASUNDUTAN',
            ),
            38 => 
            array (
                'id' => 39,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1216',
                'name' => 'KABUPATEN PAKPAK BHARAT',
            ),
            39 => 
            array (
                'id' => 40,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1217',
                'name' => 'KABUPATEN SAMOSIR',
            ),
            40 => 
            array (
                'id' => 41,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1218',
                'name' => 'KABUPATEN SERDANG BEDAGAI',
            ),
            41 => 
            array (
                'id' => 42,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1219',
                'name' => 'KABUPATEN BATU BARA',
            ),
            42 => 
            array (
                'id' => 43,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1220',
                'name' => 'KABUPATEN PADANG LAWAS UTARA',
            ),
            43 => 
            array (
                'id' => 44,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1221',
                'name' => 'KABUPATEN PADANG LAWAS',
            ),
            44 => 
            array (
                'id' => 45,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1222',
                'name' => 'KABUPATEN LABUHAN BATU SELATAN',
            ),
            45 => 
            array (
                'id' => 46,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1223',
                'name' => 'KABUPATEN LABUHAN BATU UTARA',
            ),
            46 => 
            array (
                'id' => 47,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1224',
                'name' => 'KABUPATEN NIAS UTARA',
            ),
            47 => 
            array (
                'id' => 48,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1225',
                'name' => 'KABUPATEN NIAS BARAT',
            ),
            48 => 
            array (
                'id' => 49,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1271',
                'name' => 'KOTA SIBOLGA',
            ),
            49 => 
            array (
                'id' => 50,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1272',
                'name' => 'KOTA TANJUNG BALAI',
            ),
            50 => 
            array (
                'id' => 51,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1273',
                'name' => 'KOTA PEMATANG SIANTAR',
            ),
            51 => 
            array (
                'id' => 52,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1274',
                'name' => 'KOTA TEBING TINGGI',
            ),
            52 => 
            array (
                'id' => 53,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1275',
                'name' => 'KOTA MEDAN',
            ),
            53 => 
            array (
                'id' => 54,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1276',
                'name' => 'KOTA BINJAI',
            ),
            54 => 
            array (
                'id' => 55,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1277',
                'name' => 'KOTA PADANGSIDIMPUAN',
            ),
            55 => 
            array (
                'id' => 56,
                'province_id' => 2,
                'parent_code' => '12',
                'code' => '1278',
                'name' => 'KOTA GUNUNGSITOLI',
            ),
            56 => 
            array (
                'id' => 57,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1301',
                'name' => 'KABUPATEN KEPULAUAN MENTAWAI',
            ),
            57 => 
            array (
                'id' => 58,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1302',
                'name' => 'KABUPATEN PESISIR SELATAN',
            ),
            58 => 
            array (
                'id' => 59,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1303',
                'name' => 'KABUPATEN SOLOK',
            ),
            59 => 
            array (
                'id' => 60,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1304',
                'name' => 'KABUPATEN SIJUNJUNG',
            ),
            60 => 
            array (
                'id' => 61,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1305',
                'name' => 'KABUPATEN TANAH DATAR',
            ),
            61 => 
            array (
                'id' => 62,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1306',
                'name' => 'KABUPATEN PADANG PARIAMAN',
            ),
            62 => 
            array (
                'id' => 63,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1307',
                'name' => 'KABUPATEN AGAM',
            ),
            63 => 
            array (
                'id' => 64,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1308',
                'name' => 'KABUPATEN LIMA PULUH KOTA',
            ),
            64 => 
            array (
                'id' => 65,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1309',
                'name' => 'KABUPATEN PASAMAN',
            ),
            65 => 
            array (
                'id' => 66,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1310',
                'name' => 'KABUPATEN SOLOK SELATAN',
            ),
            66 => 
            array (
                'id' => 67,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1311',
                'name' => 'KABUPATEN DHARMASRAYA',
            ),
            67 => 
            array (
                'id' => 68,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1312',
                'name' => 'KABUPATEN PASAMAN BARAT',
            ),
            68 => 
            array (
                'id' => 69,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1371',
                'name' => 'KOTA PADANG',
            ),
            69 => 
            array (
                'id' => 70,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1372',
                'name' => 'KOTA SOLOK',
            ),
            70 => 
            array (
                'id' => 71,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1373',
                'name' => 'KOTA SAWAH LUNTO',
            ),
            71 => 
            array (
                'id' => 72,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1374',
                'name' => 'KOTA PADANG PANJANG',
            ),
            72 => 
            array (
                'id' => 73,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1375',
                'name' => 'KOTA BUKITTINGGI',
            ),
            73 => 
            array (
                'id' => 74,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1376',
                'name' => 'KOTA PAYAKUMBUH',
            ),
            74 => 
            array (
                'id' => 75,
                'province_id' => 3,
                'parent_code' => '13',
                'code' => '1377',
                'name' => 'KOTA PARIAMAN',
            ),
            75 => 
            array (
                'id' => 76,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1401',
                'name' => 'KABUPATEN KUANTAN SINGINGI',
            ),
            76 => 
            array (
                'id' => 77,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1402',
                'name' => 'KABUPATEN INDRAGIRI HULU',
            ),
            77 => 
            array (
                'id' => 78,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1403',
                'name' => 'KABUPATEN INDRAGIRI HILIR',
            ),
            78 => 
            array (
                'id' => 79,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1404',
                'name' => 'KABUPATEN PELALAWAN',
            ),
            79 => 
            array (
                'id' => 80,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1405',
                'name' => 'KABUPATEN S I A K',
            ),
            80 => 
            array (
                'id' => 81,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1406',
                'name' => 'KABUPATEN KAMPAR',
            ),
            81 => 
            array (
                'id' => 82,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1407',
                'name' => 'KABUPATEN ROKAN HULU',
            ),
            82 => 
            array (
                'id' => 83,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1408',
                'name' => 'KABUPATEN BENGKALIS',
            ),
            83 => 
            array (
                'id' => 84,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1409',
                'name' => 'KABUPATEN ROKAN HILIR',
            ),
            84 => 
            array (
                'id' => 85,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1410',
                'name' => 'KABUPATEN KEPULAUAN MERANTI',
            ),
            85 => 
            array (
                'id' => 86,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1471',
                'name' => 'KOTA PEKANBARU',
            ),
            86 => 
            array (
                'id' => 87,
                'province_id' => 4,
                'parent_code' => '14',
                'code' => '1473',
                'name' => 'KOTA D U M A I',
            ),
            87 => 
            array (
                'id' => 88,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1501',
                'name' => 'KABUPATEN KERINCI',
            ),
            88 => 
            array (
                'id' => 89,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1502',
                'name' => 'KABUPATEN MERANGIN',
            ),
            89 => 
            array (
                'id' => 90,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1503',
                'name' => 'KABUPATEN SAROLANGUN',
            ),
            90 => 
            array (
                'id' => 91,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1504',
                'name' => 'KABUPATEN BATANG HARI',
            ),
            91 => 
            array (
                'id' => 92,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1505',
                'name' => 'KABUPATEN MUARO JAMBI',
            ),
            92 => 
            array (
                'id' => 93,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1506',
                'name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
            ),
            93 => 
            array (
                'id' => 94,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1507',
                'name' => 'KABUPATEN TANJUNG JABUNG BARAT',
            ),
            94 => 
            array (
                'id' => 95,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1508',
                'name' => 'KABUPATEN TEBO',
            ),
            95 => 
            array (
                'id' => 96,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1509',
                'name' => 'KABUPATEN BUNGO',
            ),
            96 => 
            array (
                'id' => 97,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1571',
                'name' => 'KOTA JAMBI',
            ),
            97 => 
            array (
                'id' => 98,
                'province_id' => 5,
                'parent_code' => '15',
                'code' => '1572',
                'name' => 'KOTA SUNGAI PENUH',
            ),
            98 => 
            array (
                'id' => 99,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1601',
                'name' => 'KABUPATEN OGAN KOMERING ULU',
            ),
            99 => 
            array (
                'id' => 100,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1602',
                'name' => 'KABUPATEN OGAN KOMERING ILIR',
            ),
            100 => 
            array (
                'id' => 101,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1603',
                'name' => 'KABUPATEN MUARA ENIM',
            ),
            101 => 
            array (
                'id' => 102,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1604',
                'name' => 'KABUPATEN LAHAT',
            ),
            102 => 
            array (
                'id' => 103,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1605',
                'name' => 'KABUPATEN MUSI RAWAS',
            ),
            103 => 
            array (
                'id' => 104,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1606',
                'name' => 'KABUPATEN MUSI BANYUASIN',
            ),
            104 => 
            array (
                'id' => 105,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1607',
                'name' => 'KABUPATEN BANYU ASIN',
            ),
            105 => 
            array (
                'id' => 106,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1608',
                'name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
            ),
            106 => 
            array (
                'id' => 107,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1609',
                'name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
            ),
            107 => 
            array (
                'id' => 108,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1610',
                'name' => 'KABUPATEN OGAN ILIR',
            ),
            108 => 
            array (
                'id' => 109,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1611',
                'name' => 'KABUPATEN EMPAT LAWANG',
            ),
            109 => 
            array (
                'id' => 110,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1612',
                'name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
            ),
            110 => 
            array (
                'id' => 111,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1613',
                'name' => 'KABUPATEN MUSI RAWAS UTARA',
            ),
            111 => 
            array (
                'id' => 112,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1671',
                'name' => 'KOTA PALEMBANG',
            ),
            112 => 
            array (
                'id' => 113,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1672',
                'name' => 'KOTA PRABUMULIH',
            ),
            113 => 
            array (
                'id' => 114,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1673',
                'name' => 'KOTA PAGAR ALAM',
            ),
            114 => 
            array (
                'id' => 115,
                'province_id' => 6,
                'parent_code' => '16',
                'code' => '1674',
                'name' => 'KOTA LUBUKLINGGAU',
            ),
            115 => 
            array (
                'id' => 116,
                'province_id' => 7,
                'parent_code' => '17',
                'code' => '1701',
                'name' => 'KABUPATEN BENGKULU SELATAN',
            ),
            116 => 
            array (
                'id' => 117,
                'province_id' => 7,
                'parent_code' => '17',
                'code' => '1702',
                'name' => 'KABUPATEN REJANG LEBONG',
            ),
            117 => 
            array (
                'id' => 118,
                'province_id' => 7,
                'parent_code' => '17',
                'code' => '1703',
                'name' => 'KABUPATEN BENGKULU UTARA',
            ),
            118 => 
            array (
                'id' => 119,
                'province_id' => 7,
                'parent_code' => '17',
                'code' => '1704',
                'name' => 'KABUPATEN KAUR',
            ),
            119 => 
            array (
                'id' => 120,
                'province_id' => 7,
                'parent_code' => '17',
                'code' => '1705',
                'name' => 'KABUPATEN SELUMA',
            ),
            120 => 
            array (
                'id' => 121,
                'province_id' => 7,
                'parent_code' => '17',
                'code' => '1706',
                'name' => 'KABUPATEN MUKOMUKO',
            ),
            121 => 
            array (
                'id' => 122,
                'province_id' => 7,
                'parent_code' => '17',
                'code' => '1707',
                'name' => 'KABUPATEN LEBONG',
            ),
            122 => 
            array (
                'id' => 123,
                'province_id' => 7,
                'parent_code' => '17',
                'code' => '1708',
                'name' => 'KABUPATEN KEPAHIANG',
            ),
            123 => 
            array (
                'id' => 124,
                'province_id' => 7,
                'parent_code' => '17',
                'code' => '1709',
                'name' => 'KABUPATEN BENGKULU TENGAH',
            ),
            124 => 
            array (
                'id' => 125,
                'province_id' => 7,
                'parent_code' => '17',
                'code' => '1771',
                'name' => 'KOTA BENGKULU',
            ),
            125 => 
            array (
                'id' => 126,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1801',
                'name' => 'KABUPATEN LAMPUNG BARAT',
            ),
            126 => 
            array (
                'id' => 127,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1802',
                'name' => 'KABUPATEN TANGGAMUS',
            ),
            127 => 
            array (
                'id' => 128,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1803',
                'name' => 'KABUPATEN LAMPUNG SELATAN',
            ),
            128 => 
            array (
                'id' => 129,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1804',
                'name' => 'KABUPATEN LAMPUNG TIMUR',
            ),
            129 => 
            array (
                'id' => 130,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1805',
                'name' => 'KABUPATEN LAMPUNG TENGAH',
            ),
            130 => 
            array (
                'id' => 131,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1806',
                'name' => 'KABUPATEN LAMPUNG UTARA',
            ),
            131 => 
            array (
                'id' => 132,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1807',
                'name' => 'KABUPATEN WAY KANAN',
            ),
            132 => 
            array (
                'id' => 133,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1808',
                'name' => 'KABUPATEN TULANGBAWANG',
            ),
            133 => 
            array (
                'id' => 134,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1809',
                'name' => 'KABUPATEN PESAWARAN',
            ),
            134 => 
            array (
                'id' => 135,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1810',
                'name' => 'KABUPATEN PRINGSEWU',
            ),
            135 => 
            array (
                'id' => 136,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1811',
                'name' => 'KABUPATEN MESUJI',
            ),
            136 => 
            array (
                'id' => 137,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1812',
                'name' => 'KABUPATEN TULANG BAWANG BARAT',
            ),
            137 => 
            array (
                'id' => 138,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1813',
                'name' => 'KABUPATEN PESISIR BARAT',
            ),
            138 => 
            array (
                'id' => 139,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1871',
                'name' => 'KOTA BANDAR LAMPUNG',
            ),
            139 => 
            array (
                'id' => 140,
                'province_id' => 8,
                'parent_code' => '18',
                'code' => '1872',
                'name' => 'KOTA METRO',
            ),
            140 => 
            array (
                'id' => 141,
                'province_id' => 9,
                'parent_code' => '19',
                'code' => '1901',
                'name' => 'KABUPATEN BANGKA',
            ),
            141 => 
            array (
                'id' => 142,
                'province_id' => 9,
                'parent_code' => '19',
                'code' => '1902',
                'name' => 'KABUPATEN BELITUNG',
            ),
            142 => 
            array (
                'id' => 143,
                'province_id' => 9,
                'parent_code' => '19',
                'code' => '1903',
                'name' => 'KABUPATEN BANGKA BARAT',
            ),
            143 => 
            array (
                'id' => 144,
                'province_id' => 9,
                'parent_code' => '19',
                'code' => '1904',
                'name' => 'KABUPATEN BANGKA TENGAH',
            ),
            144 => 
            array (
                'id' => 145,
                'province_id' => 9,
                'parent_code' => '19',
                'code' => '1905',
                'name' => 'KABUPATEN BANGKA SELATAN',
            ),
            145 => 
            array (
                'id' => 146,
                'province_id' => 9,
                'parent_code' => '19',
                'code' => '1906',
                'name' => 'KABUPATEN BELITUNG TIMUR',
            ),
            146 => 
            array (
                'id' => 147,
                'province_id' => 9,
                'parent_code' => '19',
                'code' => '1971',
                'name' => 'KOTA PANGKALPINANG',
            ),
            147 => 
            array (
                'id' => 148,
                'province_id' => 10,
                'parent_code' => '21',
                'code' => '2101',
                'name' => 'KABUPATEN KARIMUN',
            ),
            148 => 
            array (
                'id' => 149,
                'province_id' => 10,
                'parent_code' => '21',
                'code' => '2102',
                'name' => 'KABUPATEN BINTAN',
            ),
            149 => 
            array (
                'id' => 150,
                'province_id' => 10,
                'parent_code' => '21',
                'code' => '2103',
                'name' => 'KABUPATEN NATUNA',
            ),
            150 => 
            array (
                'id' => 151,
                'province_id' => 10,
                'parent_code' => '21',
                'code' => '2104',
                'name' => 'KABUPATEN LINGGA',
            ),
            151 => 
            array (
                'id' => 152,
                'province_id' => 10,
                'parent_code' => '21',
                'code' => '2105',
                'name' => 'KABUPATEN KEPULAUAN ANAMBAS',
            ),
            152 => 
            array (
                'id' => 153,
                'province_id' => 10,
                'parent_code' => '21',
                'code' => '2171',
                'name' => 'KOTA B A T A M',
            ),
            153 => 
            array (
                'id' => 154,
                'province_id' => 10,
                'parent_code' => '21',
                'code' => '2172',
                'name' => 'KOTA TANJUNG PINANG',
            ),
            154 => 
            array (
                'id' => 155,
                'province_id' => 11,
                'parent_code' => '31',
                'code' => '3101',
                'name' => 'KABUPATEN KEPULAUAN SERIBU',
            ),
            155 => 
            array (
                'id' => 156,
                'province_id' => 11,
                'parent_code' => '31',
                'code' => '3171',
                'name' => 'KOTA JAKARTA SELATAN',
            ),
            156 => 
            array (
                'id' => 157,
                'province_id' => 11,
                'parent_code' => '31',
                'code' => '3172',
                'name' => 'KOTA JAKARTA TIMUR',
            ),
            157 => 
            array (
                'id' => 158,
                'province_id' => 11,
                'parent_code' => '31',
                'code' => '3173',
                'name' => 'KOTA JAKARTA PUSAT',
            ),
            158 => 
            array (
                'id' => 159,
                'province_id' => 11,
                'parent_code' => '31',
                'code' => '3174',
                'name' => 'KOTA JAKARTA BARAT',
            ),
            159 => 
            array (
                'id' => 160,
                'province_id' => 11,
                'parent_code' => '31',
                'code' => '3175',
                'name' => 'KOTA JAKARTA UTARA',
            ),
            160 => 
            array (
                'id' => 161,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3201',
                'name' => 'KABUPATEN BOGOR',
            ),
            161 => 
            array (
                'id' => 162,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3202',
                'name' => 'KABUPATEN SUKABUMI',
            ),
            162 => 
            array (
                'id' => 163,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3203',
                'name' => 'KABUPATEN CIANJUR',
            ),
            163 => 
            array (
                'id' => 164,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3204',
                'name' => 'KABUPATEN BANDUNG',
            ),
            164 => 
            array (
                'id' => 165,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3205',
                'name' => 'KABUPATEN GARUT',
            ),
            165 => 
            array (
                'id' => 166,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3206',
                'name' => 'KABUPATEN TASIKMALAYA',
            ),
            166 => 
            array (
                'id' => 167,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3207',
                'name' => 'KABUPATEN CIAMIS',
            ),
            167 => 
            array (
                'id' => 168,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3208',
                'name' => 'KABUPATEN KUNINGAN',
            ),
            168 => 
            array (
                'id' => 169,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3209',
                'name' => 'KABUPATEN CIREBON',
            ),
            169 => 
            array (
                'id' => 170,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3210',
                'name' => 'KABUPATEN MAJALENGKA',
            ),
            170 => 
            array (
                'id' => 171,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3211',
                'name' => 'KABUPATEN SUMEDANG',
            ),
            171 => 
            array (
                'id' => 172,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3212',
                'name' => 'KABUPATEN INDRAMAYU',
            ),
            172 => 
            array (
                'id' => 173,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3213',
                'name' => 'KABUPATEN SUBANG',
            ),
            173 => 
            array (
                'id' => 174,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3214',
                'name' => 'KABUPATEN PURWAKARTA',
            ),
            174 => 
            array (
                'id' => 175,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3215',
                'name' => 'KABUPATEN KARAWANG',
            ),
            175 => 
            array (
                'id' => 176,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3216',
                'name' => 'KABUPATEN BEKASI',
            ),
            176 => 
            array (
                'id' => 177,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3217',
                'name' => 'KABUPATEN BANDUNG BARAT',
            ),
            177 => 
            array (
                'id' => 178,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3218',
                'name' => 'KABUPATEN PANGANDARAN',
            ),
            178 => 
            array (
                'id' => 179,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3271',
                'name' => 'KOTA BOGOR',
            ),
            179 => 
            array (
                'id' => 180,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3272',
                'name' => 'KOTA SUKABUMI',
            ),
            180 => 
            array (
                'id' => 181,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3273',
                'name' => 'KOTA BANDUNG',
            ),
            181 => 
            array (
                'id' => 182,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3274',
                'name' => 'KOTA CIREBON',
            ),
            182 => 
            array (
                'id' => 183,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3275',
                'name' => 'KOTA BEKASI',
            ),
            183 => 
            array (
                'id' => 184,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3276',
                'name' => 'KOTA DEPOK',
            ),
            184 => 
            array (
                'id' => 185,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3277',
                'name' => 'KOTA CIMAHI',
            ),
            185 => 
            array (
                'id' => 186,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3278',
                'name' => 'KOTA TASIKMALAYA',
            ),
            186 => 
            array (
                'id' => 187,
                'province_id' => 12,
                'parent_code' => '32',
                'code' => '3279',
                'name' => 'KOTA BANJAR',
            ),
            187 => 
            array (
                'id' => 188,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3301',
                'name' => 'KABUPATEN CILACAP',
            ),
            188 => 
            array (
                'id' => 189,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3302',
                'name' => 'KABUPATEN BANYUMAS',
            ),
            189 => 
            array (
                'id' => 190,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3303',
                'name' => 'KABUPATEN PURBALINGGA',
            ),
            190 => 
            array (
                'id' => 191,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3304',
                'name' => 'KABUPATEN BANJARNEGARA',
            ),
            191 => 
            array (
                'id' => 192,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3305',
                'name' => 'KABUPATEN KEBUMEN',
            ),
            192 => 
            array (
                'id' => 193,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3306',
                'name' => 'KABUPATEN PURWOREJO',
            ),
            193 => 
            array (
                'id' => 194,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3307',
                'name' => 'KABUPATEN WONOSOBO',
            ),
            194 => 
            array (
                'id' => 195,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3308',
                'name' => 'KABUPATEN MAGELANG',
            ),
            195 => 
            array (
                'id' => 196,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3309',
                'name' => 'KABUPATEN BOYOLALI',
            ),
            196 => 
            array (
                'id' => 197,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3310',
                'name' => 'KABUPATEN KLATEN',
            ),
            197 => 
            array (
                'id' => 198,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3311',
                'name' => 'KABUPATEN SUKOHARJO',
            ),
            198 => 
            array (
                'id' => 199,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3312',
                'name' => 'KABUPATEN WONOGIRI',
            ),
            199 => 
            array (
                'id' => 200,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3313',
                'name' => 'KABUPATEN KARANGANYAR',
            ),
            200 => 
            array (
                'id' => 201,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3314',
                'name' => 'KABUPATEN SRAGEN',
            ),
            201 => 
            array (
                'id' => 202,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3315',
                'name' => 'KABUPATEN GROBOGAN',
            ),
            202 => 
            array (
                'id' => 203,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3316',
                'name' => 'KABUPATEN BLORA',
            ),
            203 => 
            array (
                'id' => 204,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3317',
                'name' => 'KABUPATEN REMBANG',
            ),
            204 => 
            array (
                'id' => 205,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3318',
                'name' => 'KABUPATEN PATI',
            ),
            205 => 
            array (
                'id' => 206,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3319',
                'name' => 'KABUPATEN KUDUS',
            ),
            206 => 
            array (
                'id' => 207,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3320',
                'name' => 'KABUPATEN JEPARA',
            ),
            207 => 
            array (
                'id' => 208,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3321',
                'name' => 'KABUPATEN DEMAK',
            ),
            208 => 
            array (
                'id' => 209,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3322',
                'name' => 'KABUPATEN SEMARANG',
            ),
            209 => 
            array (
                'id' => 210,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3323',
                'name' => 'KABUPATEN TEMANGGUNG',
            ),
            210 => 
            array (
                'id' => 211,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3324',
                'name' => 'KABUPATEN KENDAL',
            ),
            211 => 
            array (
                'id' => 212,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3325',
                'name' => 'KABUPATEN BATANG',
            ),
            212 => 
            array (
                'id' => 213,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3326',
                'name' => 'KABUPATEN PEKALONGAN',
            ),
            213 => 
            array (
                'id' => 214,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3327',
                'name' => 'KABUPATEN PEMALANG',
            ),
            214 => 
            array (
                'id' => 215,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3328',
                'name' => 'KABUPATEN TEGAL',
            ),
            215 => 
            array (
                'id' => 216,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3329',
                'name' => 'KABUPATEN BREBES',
            ),
            216 => 
            array (
                'id' => 217,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3371',
                'name' => 'KOTA MAGELANG',
            ),
            217 => 
            array (
                'id' => 218,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3372',
                'name' => 'KOTA SURAKARTA',
            ),
            218 => 
            array (
                'id' => 219,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3373',
                'name' => 'KOTA SALATIGA',
            ),
            219 => 
            array (
                'id' => 220,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3374',
                'name' => 'KOTA SEMARANG',
            ),
            220 => 
            array (
                'id' => 221,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3375',
                'name' => 'KOTA PEKALONGAN',
            ),
            221 => 
            array (
                'id' => 222,
                'province_id' => 13,
                'parent_code' => '33',
                'code' => '3376',
                'name' => 'KOTA TEGAL',
            ),
            222 => 
            array (
                'id' => 223,
                'province_id' => 14,
                'parent_code' => '34',
                'code' => '3401',
                'name' => 'KABUPATEN KULON PROGO',
            ),
            223 => 
            array (
                'id' => 224,
                'province_id' => 14,
                'parent_code' => '34',
                'code' => '3402',
                'name' => 'KABUPATEN BANTUL',
            ),
            224 => 
            array (
                'id' => 225,
                'province_id' => 14,
                'parent_code' => '34',
                'code' => '3403',
                'name' => 'KABUPATEN GUNUNGKIDUL',
            ),
            225 => 
            array (
                'id' => 226,
                'province_id' => 14,
                'parent_code' => '34',
                'code' => '3404',
                'name' => 'KABUPATEN SLEMAN',
            ),
            226 => 
            array (
                'id' => 227,
                'province_id' => 14,
                'parent_code' => '34',
                'code' => '3471',
                'name' => 'KOTA YOGYAKARTA',
            ),
            227 => 
            array (
                'id' => 228,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3501',
                'name' => 'KABUPATEN PACITAN',
            ),
            228 => 
            array (
                'id' => 229,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3502',
                'name' => 'KABUPATEN PONOROGO',
            ),
            229 => 
            array (
                'id' => 230,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3503',
                'name' => 'KABUPATEN TRENGGALEK',
            ),
            230 => 
            array (
                'id' => 231,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3504',
                'name' => 'KABUPATEN TULUNGAGUNG',
            ),
            231 => 
            array (
                'id' => 232,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3505',
                'name' => 'KABUPATEN BLITAR',
            ),
            232 => 
            array (
                'id' => 233,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3506',
                'name' => 'KABUPATEN KEDIRI',
            ),
            233 => 
            array (
                'id' => 234,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3507',
                'name' => 'KABUPATEN MALANG',
            ),
            234 => 
            array (
                'id' => 235,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3508',
                'name' => 'KABUPATEN LUMAJANG',
            ),
            235 => 
            array (
                'id' => 236,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3509',
                'name' => 'KABUPATEN JEMBER',
            ),
            236 => 
            array (
                'id' => 237,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3510',
                'name' => 'KABUPATEN BANYUWANGI',
            ),
            237 => 
            array (
                'id' => 238,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3511',
                'name' => 'KABUPATEN BONDOWOSO',
            ),
            238 => 
            array (
                'id' => 239,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3512',
                'name' => 'KABUPATEN SITUBONDO',
            ),
            239 => 
            array (
                'id' => 240,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3513',
                'name' => 'KABUPATEN PROBOLINGGO',
            ),
            240 => 
            array (
                'id' => 241,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3514',
                'name' => 'KABUPATEN PASURUAN',
            ),
            241 => 
            array (
                'id' => 242,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3515',
                'name' => 'KABUPATEN SIDOARJO',
            ),
            242 => 
            array (
                'id' => 243,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3516',
                'name' => 'KABUPATEN MOJOKERTO',
            ),
            243 => 
            array (
                'id' => 244,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3517',
                'name' => 'KABUPATEN JOMBANG',
            ),
            244 => 
            array (
                'id' => 245,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3518',
                'name' => 'KABUPATEN NGANJUK',
            ),
            245 => 
            array (
                'id' => 246,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3519',
                'name' => 'KABUPATEN MADIUN',
            ),
            246 => 
            array (
                'id' => 247,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3520',
                'name' => 'KABUPATEN MAGETAN',
            ),
            247 => 
            array (
                'id' => 248,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3521',
                'name' => 'KABUPATEN NGAWI',
            ),
            248 => 
            array (
                'id' => 249,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3522',
                'name' => 'KABUPATEN BOJONEGORO',
            ),
            249 => 
            array (
                'id' => 250,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3523',
                'name' => 'KABUPATEN TUBAN',
            ),
            250 => 
            array (
                'id' => 251,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3524',
                'name' => 'KABUPATEN LAMONGAN',
            ),
            251 => 
            array (
                'id' => 252,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3525',
                'name' => 'KABUPATEN GRESIK',
            ),
            252 => 
            array (
                'id' => 253,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3526',
                'name' => 'KABUPATEN BANGKALAN',
            ),
            253 => 
            array (
                'id' => 254,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3527',
                'name' => 'KABUPATEN SAMPANG',
            ),
            254 => 
            array (
                'id' => 255,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3528',
                'name' => 'KABUPATEN PAMEKASAN',
            ),
            255 => 
            array (
                'id' => 256,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3529',
                'name' => 'KABUPATEN SUMENEP',
            ),
            256 => 
            array (
                'id' => 257,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3571',
                'name' => 'KOTA KEDIRI',
            ),
            257 => 
            array (
                'id' => 258,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3572',
                'name' => 'KOTA BLITAR',
            ),
            258 => 
            array (
                'id' => 259,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3573',
                'name' => 'KOTA MALANG',
            ),
            259 => 
            array (
                'id' => 260,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3574',
                'name' => 'KOTA PROBOLINGGO',
            ),
            260 => 
            array (
                'id' => 261,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3575',
                'name' => 'KOTA PASURUAN',
            ),
            261 => 
            array (
                'id' => 262,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3576',
                'name' => 'KOTA MOJOKERTO',
            ),
            262 => 
            array (
                'id' => 263,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3577',
                'name' => 'KOTA MADIUN',
            ),
            263 => 
            array (
                'id' => 264,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3578',
                'name' => 'KOTA SURABAYA',
            ),
            264 => 
            array (
                'id' => 265,
                'province_id' => 15,
                'parent_code' => '35',
                'code' => '3579',
                'name' => 'KOTA BATU',
            ),
            265 => 
            array (
                'id' => 266,
                'province_id' => 16,
                'parent_code' => '36',
                'code' => '3601',
                'name' => 'KABUPATEN PANDEGLANG',
            ),
            266 => 
            array (
                'id' => 267,
                'province_id' => 16,
                'parent_code' => '36',
                'code' => '3602',
                'name' => 'KABUPATEN LEBAK',
            ),
            267 => 
            array (
                'id' => 268,
                'province_id' => 16,
                'parent_code' => '36',
                'code' => '3603',
                'name' => 'KABUPATEN TANGERANG',
            ),
            268 => 
            array (
                'id' => 269,
                'province_id' => 16,
                'parent_code' => '36',
                'code' => '3604',
                'name' => 'KABUPATEN SERANG',
            ),
            269 => 
            array (
                'id' => 270,
                'province_id' => 16,
                'parent_code' => '36',
                'code' => '3671',
                'name' => 'KOTA TANGERANG',
            ),
            270 => 
            array (
                'id' => 271,
                'province_id' => 16,
                'parent_code' => '36',
                'code' => '3672',
                'name' => 'KOTA CILEGON',
            ),
            271 => 
            array (
                'id' => 272,
                'province_id' => 16,
                'parent_code' => '36',
                'code' => '3673',
                'name' => 'KOTA SERANG',
            ),
            272 => 
            array (
                'id' => 273,
                'province_id' => 16,
                'parent_code' => '36',
                'code' => '3674',
                'name' => 'KOTA TANGERANG SELATAN',
            ),
            273 => 
            array (
                'id' => 274,
                'province_id' => 17,
                'parent_code' => '51',
                'code' => '5101',
                'name' => 'KABUPATEN JEMBRANA',
            ),
            274 => 
            array (
                'id' => 275,
                'province_id' => 17,
                'parent_code' => '51',
                'code' => '5102',
                'name' => 'KABUPATEN TABANAN',
            ),
            275 => 
            array (
                'id' => 276,
                'province_id' => 17,
                'parent_code' => '51',
                'code' => '5103',
                'name' => 'KABUPATEN BADUNG',
            ),
            276 => 
            array (
                'id' => 277,
                'province_id' => 17,
                'parent_code' => '51',
                'code' => '5104',
                'name' => 'KABUPATEN GIANYAR',
            ),
            277 => 
            array (
                'id' => 278,
                'province_id' => 17,
                'parent_code' => '51',
                'code' => '5105',
                'name' => 'KABUPATEN KLUNGKUNG',
            ),
            278 => 
            array (
                'id' => 279,
                'province_id' => 17,
                'parent_code' => '51',
                'code' => '5106',
                'name' => 'KABUPATEN BANGLI',
            ),
            279 => 
            array (
                'id' => 280,
                'province_id' => 17,
                'parent_code' => '51',
                'code' => '5107',
                'name' => 'KABUPATEN KARANGASEM',
            ),
            280 => 
            array (
                'id' => 281,
                'province_id' => 17,
                'parent_code' => '51',
                'code' => '5108',
                'name' => 'KABUPATEN BULELENG',
            ),
            281 => 
            array (
                'id' => 282,
                'province_id' => 17,
                'parent_code' => '51',
                'code' => '5171',
                'name' => 'KOTA DENPASAR',
            ),
            282 => 
            array (
                'id' => 283,
                'province_id' => 18,
                'parent_code' => '52',
                'code' => '5201',
                'name' => 'KABUPATEN LOMBOK BARAT',
            ),
            283 => 
            array (
                'id' => 284,
                'province_id' => 18,
                'parent_code' => '52',
                'code' => '5202',
                'name' => 'KABUPATEN LOMBOK TENGAH',
            ),
            284 => 
            array (
                'id' => 285,
                'province_id' => 18,
                'parent_code' => '52',
                'code' => '5203',
                'name' => 'KABUPATEN LOMBOK TIMUR',
            ),
            285 => 
            array (
                'id' => 286,
                'province_id' => 18,
                'parent_code' => '52',
                'code' => '5204',
                'name' => 'KABUPATEN SUMBAWA',
            ),
            286 => 
            array (
                'id' => 287,
                'province_id' => 18,
                'parent_code' => '52',
                'code' => '5205',
                'name' => 'KABUPATEN DOMPU',
            ),
            287 => 
            array (
                'id' => 288,
                'province_id' => 18,
                'parent_code' => '52',
                'code' => '5206',
                'name' => 'KABUPATEN BIMA',
            ),
            288 => 
            array (
                'id' => 289,
                'province_id' => 18,
                'parent_code' => '52',
                'code' => '5207',
                'name' => 'KABUPATEN SUMBAWA BARAT',
            ),
            289 => 
            array (
                'id' => 290,
                'province_id' => 18,
                'parent_code' => '52',
                'code' => '5208',
                'name' => 'KABUPATEN LOMBOK UTARA',
            ),
            290 => 
            array (
                'id' => 291,
                'province_id' => 18,
                'parent_code' => '52',
                'code' => '5271',
                'name' => 'KOTA MATARAM',
            ),
            291 => 
            array (
                'id' => 292,
                'province_id' => 18,
                'parent_code' => '52',
                'code' => '5272',
                'name' => 'KOTA BIMA',
            ),
            292 => 
            array (
                'id' => 293,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5301',
                'name' => 'KABUPATEN SUMBA BARAT',
            ),
            293 => 
            array (
                'id' => 294,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5302',
                'name' => 'KABUPATEN SUMBA TIMUR',
            ),
            294 => 
            array (
                'id' => 295,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5303',
                'name' => 'KABUPATEN KUPANG',
            ),
            295 => 
            array (
                'id' => 296,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5304',
                'name' => 'KABUPATEN TIMOR TENGAH SELATAN',
            ),
            296 => 
            array (
                'id' => 297,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5305',
                'name' => 'KABUPATEN TIMOR TENGAH UTARA',
            ),
            297 => 
            array (
                'id' => 298,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5306',
                'name' => 'KABUPATEN BELU',
            ),
            298 => 
            array (
                'id' => 299,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5307',
                'name' => 'KABUPATEN ALOR',
            ),
            299 => 
            array (
                'id' => 300,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5308',
                'name' => 'KABUPATEN LEMBATA',
            ),
            300 => 
            array (
                'id' => 301,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5309',
                'name' => 'KABUPATEN FLORES TIMUR',
            ),
            301 => 
            array (
                'id' => 302,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5310',
                'name' => 'KABUPATEN SIKKA',
            ),
            302 => 
            array (
                'id' => 303,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5311',
                'name' => 'KABUPATEN ENDE',
            ),
            303 => 
            array (
                'id' => 304,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5312',
                'name' => 'KABUPATEN NGADA',
            ),
            304 => 
            array (
                'id' => 305,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5313',
                'name' => 'KABUPATEN MANGGARAI',
            ),
            305 => 
            array (
                'id' => 306,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5314',
                'name' => 'KABUPATEN ROTE NDAO',
            ),
            306 => 
            array (
                'id' => 307,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5315',
                'name' => 'KABUPATEN MANGGARAI BARAT',
            ),
            307 => 
            array (
                'id' => 308,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5316',
                'name' => 'KABUPATEN SUMBA TENGAH',
            ),
            308 => 
            array (
                'id' => 309,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5317',
                'name' => 'KABUPATEN SUMBA BARAT DAYA',
            ),
            309 => 
            array (
                'id' => 310,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5318',
                'name' => 'KABUPATEN NAGEKEO',
            ),
            310 => 
            array (
                'id' => 311,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5319',
                'name' => 'KABUPATEN MANGGARAI TIMUR',
            ),
            311 => 
            array (
                'id' => 312,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5320',
                'name' => 'KABUPATEN SABU RAIJUA',
            ),
            312 => 
            array (
                'id' => 313,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5321',
                'name' => 'KABUPATEN MALAKA',
            ),
            313 => 
            array (
                'id' => 314,
                'province_id' => 19,
                'parent_code' => '53',
                'code' => '5371',
                'name' => 'KOTA KUPANG',
            ),
            314 => 
            array (
                'id' => 315,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6101',
                'name' => 'KABUPATEN SAMBAS',
            ),
            315 => 
            array (
                'id' => 316,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6102',
                'name' => 'KABUPATEN BENGKAYANG',
            ),
            316 => 
            array (
                'id' => 317,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6103',
                'name' => 'KABUPATEN LANDAK',
            ),
            317 => 
            array (
                'id' => 318,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6104',
                'name' => 'KABUPATEN MEMPAWAH',
            ),
            318 => 
            array (
                'id' => 319,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6105',
                'name' => 'KABUPATEN SANGGAU',
            ),
            319 => 
            array (
                'id' => 320,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6106',
                'name' => 'KABUPATEN KETAPANG',
            ),
            320 => 
            array (
                'id' => 321,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6107',
                'name' => 'KABUPATEN SINTANG',
            ),
            321 => 
            array (
                'id' => 322,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6108',
                'name' => 'KABUPATEN KAPUAS HULU',
            ),
            322 => 
            array (
                'id' => 323,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6109',
                'name' => 'KABUPATEN SEKADAU',
            ),
            323 => 
            array (
                'id' => 324,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6110',
                'name' => 'KABUPATEN MELAWI',
            ),
            324 => 
            array (
                'id' => 325,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6111',
                'name' => 'KABUPATEN KAYONG UTARA',
            ),
            325 => 
            array (
                'id' => 326,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6112',
                'name' => 'KABUPATEN KUBU RAYA',
            ),
            326 => 
            array (
                'id' => 327,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6171',
                'name' => 'KOTA PONTIANAK',
            ),
            327 => 
            array (
                'id' => 328,
                'province_id' => 20,
                'parent_code' => '61',
                'code' => '6172',
                'name' => 'KOTA SINGKAWANG',
            ),
            328 => 
            array (
                'id' => 329,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6201',
                'name' => 'KABUPATEN KOTAWARINGIN BARAT',
            ),
            329 => 
            array (
                'id' => 330,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6202',
                'name' => 'KABUPATEN KOTAWARINGIN TIMUR',
            ),
            330 => 
            array (
                'id' => 331,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6203',
                'name' => 'KABUPATEN KAPUAS',
            ),
            331 => 
            array (
                'id' => 332,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6204',
                'name' => 'KABUPATEN BARITO SELATAN',
            ),
            332 => 
            array (
                'id' => 333,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6205',
                'name' => 'KABUPATEN BARITO UTARA',
            ),
            333 => 
            array (
                'id' => 334,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6206',
                'name' => 'KABUPATEN SUKAMARA',
            ),
            334 => 
            array (
                'id' => 335,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6207',
                'name' => 'KABUPATEN LAMANDAU',
            ),
            335 => 
            array (
                'id' => 336,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6208',
                'name' => 'KABUPATEN SERUYAN',
            ),
            336 => 
            array (
                'id' => 337,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6209',
                'name' => 'KABUPATEN KATINGAN',
            ),
            337 => 
            array (
                'id' => 338,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6210',
                'name' => 'KABUPATEN PULANG PISAU',
            ),
            338 => 
            array (
                'id' => 339,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6211',
                'name' => 'KABUPATEN GUNUNG MAS',
            ),
            339 => 
            array (
                'id' => 340,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6212',
                'name' => 'KABUPATEN BARITO TIMUR',
            ),
            340 => 
            array (
                'id' => 341,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6213',
                'name' => 'KABUPATEN MURUNG RAYA',
            ),
            341 => 
            array (
                'id' => 342,
                'province_id' => 21,
                'parent_code' => '62',
                'code' => '6271',
                'name' => 'KOTA PALANGKA RAYA',
            ),
            342 => 
            array (
                'id' => 343,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6301',
                'name' => 'KABUPATEN TANAH LAUT',
            ),
            343 => 
            array (
                'id' => 344,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6302',
                'name' => 'KABUPATEN KOTABARU',
            ),
            344 => 
            array (
                'id' => 345,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6303',
                'name' => 'KABUPATEN BANJAR',
            ),
            345 => 
            array (
                'id' => 346,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6304',
                'name' => 'KABUPATEN BARITO KUALA',
            ),
            346 => 
            array (
                'id' => 347,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6305',
                'name' => 'KABUPATEN TAPIN',
            ),
            347 => 
            array (
                'id' => 348,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6306',
                'name' => 'KABUPATEN HULU SUNGAI SELATAN',
            ),
            348 => 
            array (
                'id' => 349,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6307',
                'name' => 'KABUPATEN HULU SUNGAI TENGAH',
            ),
            349 => 
            array (
                'id' => 350,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6308',
                'name' => 'KABUPATEN HULU SUNGAI UTARA',
            ),
            350 => 
            array (
                'id' => 351,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6309',
                'name' => 'KABUPATEN TABALONG',
            ),
            351 => 
            array (
                'id' => 352,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6310',
                'name' => 'KABUPATEN TANAH BUMBU',
            ),
            352 => 
            array (
                'id' => 353,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6311',
                'name' => 'KABUPATEN BALANGAN',
            ),
            353 => 
            array (
                'id' => 354,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6371',
                'name' => 'KOTA BANJARMASIN',
            ),
            354 => 
            array (
                'id' => 355,
                'province_id' => 22,
                'parent_code' => '63',
                'code' => '6372',
                'name' => 'KOTA BANJAR BARU',
            ),
            355 => 
            array (
                'id' => 356,
                'province_id' => 23,
                'parent_code' => '64',
                'code' => '6401',
                'name' => 'KABUPATEN PASER',
            ),
            356 => 
            array (
                'id' => 357,
                'province_id' => 23,
                'parent_code' => '64',
                'code' => '6402',
                'name' => 'KABUPATEN KUTAI BARAT',
            ),
            357 => 
            array (
                'id' => 358,
                'province_id' => 23,
                'parent_code' => '64',
                'code' => '6403',
                'name' => 'KABUPATEN KUTAI KARTANEGARA',
            ),
            358 => 
            array (
                'id' => 359,
                'province_id' => 23,
                'parent_code' => '64',
                'code' => '6404',
                'name' => 'KABUPATEN KUTAI TIMUR',
            ),
            359 => 
            array (
                'id' => 360,
                'province_id' => 23,
                'parent_code' => '64',
                'code' => '6405',
                'name' => 'KABUPATEN BERAU',
            ),
            360 => 
            array (
                'id' => 361,
                'province_id' => 23,
                'parent_code' => '64',
                'code' => '6409',
                'name' => 'KABUPATEN PENAJAM PASER UTARA',
            ),
            361 => 
            array (
                'id' => 362,
                'province_id' => 23,
                'parent_code' => '64',
                'code' => '6411',
                'name' => 'KABUPATEN MAHAKAM ULU',
            ),
            362 => 
            array (
                'id' => 363,
                'province_id' => 23,
                'parent_code' => '64',
                'code' => '6471',
                'name' => 'KOTA BALIKPAPAN',
            ),
            363 => 
            array (
                'id' => 364,
                'province_id' => 23,
                'parent_code' => '64',
                'code' => '6472',
                'name' => 'KOTA SAMARINDA',
            ),
            364 => 
            array (
                'id' => 365,
                'province_id' => 23,
                'parent_code' => '64',
                'code' => '6474',
                'name' => 'KOTA BONTANG',
            ),
            365 => 
            array (
                'id' => 366,
                'province_id' => 24,
                'parent_code' => '65',
                'code' => '6501',
                'name' => 'KABUPATEN MALINAU',
            ),
            366 => 
            array (
                'id' => 367,
                'province_id' => 24,
                'parent_code' => '65',
                'code' => '6502',
                'name' => 'KABUPATEN BULUNGAN',
            ),
            367 => 
            array (
                'id' => 368,
                'province_id' => 24,
                'parent_code' => '65',
                'code' => '6503',
                'name' => 'KABUPATEN TANA TIDUNG',
            ),
            368 => 
            array (
                'id' => 369,
                'province_id' => 24,
                'parent_code' => '65',
                'code' => '6504',
                'name' => 'KABUPATEN NUNUKAN',
            ),
            369 => 
            array (
                'id' => 370,
                'province_id' => 24,
                'parent_code' => '65',
                'code' => '6571',
                'name' => 'KOTA TARAKAN',
            ),
            370 => 
            array (
                'id' => 371,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7101',
                'name' => 'KABUPATEN BOLAANG MONGONDOW',
            ),
            371 => 
            array (
                'id' => 372,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7102',
                'name' => 'KABUPATEN MINAHASA',
            ),
            372 => 
            array (
                'id' => 373,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7103',
                'name' => 'KABUPATEN KEPULAUAN SANGIHE',
            ),
            373 => 
            array (
                'id' => 374,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7104',
                'name' => 'KABUPATEN KEPULAUAN TALAUD',
            ),
            374 => 
            array (
                'id' => 375,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7105',
                'name' => 'KABUPATEN MINAHASA SELATAN',
            ),
            375 => 
            array (
                'id' => 376,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7106',
                'name' => 'KABUPATEN MINAHASA UTARA',
            ),
            376 => 
            array (
                'id' => 377,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7107',
                'name' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
            ),
            377 => 
            array (
                'id' => 378,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7108',
                'name' => 'KABUPATEN SIAU TAGULANDANG BIARO',
            ),
            378 => 
            array (
                'id' => 379,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7109',
                'name' => 'KABUPATEN MINAHASA TENGGARA',
            ),
            379 => 
            array (
                'id' => 380,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7110',
                'name' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
            ),
            380 => 
            array (
                'id' => 381,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7111',
                'name' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
            ),
            381 => 
            array (
                'id' => 382,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7171',
                'name' => 'KOTA MANADO',
            ),
            382 => 
            array (
                'id' => 383,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7172',
                'name' => 'KOTA BITUNG',
            ),
            383 => 
            array (
                'id' => 384,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7173',
                'name' => 'KOTA TOMOHON',
            ),
            384 => 
            array (
                'id' => 385,
                'province_id' => 25,
                'parent_code' => '71',
                'code' => '7174',
                'name' => 'KOTA KOTAMOBAGU',
            ),
            385 => 
            array (
                'id' => 386,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7201',
                'name' => 'KABUPATEN BANGGAI KEPULAUAN',
            ),
            386 => 
            array (
                'id' => 387,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7202',
                'name' => 'KABUPATEN BANGGAI',
            ),
            387 => 
            array (
                'id' => 388,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7203',
                'name' => 'KABUPATEN MOROWALI',
            ),
            388 => 
            array (
                'id' => 389,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7204',
                'name' => 'KABUPATEN POSO',
            ),
            389 => 
            array (
                'id' => 390,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7205',
                'name' => 'KABUPATEN DONGGALA',
            ),
            390 => 
            array (
                'id' => 391,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7206',
                'name' => 'KABUPATEN TOLI-TOLI',
            ),
            391 => 
            array (
                'id' => 392,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7207',
                'name' => 'KABUPATEN BUOL',
            ),
            392 => 
            array (
                'id' => 393,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7208',
                'name' => 'KABUPATEN PARIGI MOUTONG',
            ),
            393 => 
            array (
                'id' => 394,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7209',
                'name' => 'KABUPATEN TOJO UNA-UNA',
            ),
            394 => 
            array (
                'id' => 395,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7210',
                'name' => 'KABUPATEN SIGI',
            ),
            395 => 
            array (
                'id' => 396,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7211',
                'name' => 'KABUPATEN BANGGAI LAUT',
            ),
            396 => 
            array (
                'id' => 397,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7212',
                'name' => 'KABUPATEN MOROWALI UTARA',
            ),
            397 => 
            array (
                'id' => 398,
                'province_id' => 26,
                'parent_code' => '72',
                'code' => '7271',
                'name' => 'KOTA PALU',
            ),
            398 => 
            array (
                'id' => 399,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7301',
                'name' => 'KABUPATEN KEPULAUAN SELAYAR',
            ),
            399 => 
            array (
                'id' => 400,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7302',
                'name' => 'KABUPATEN BULUKUMBA',
            ),
            400 => 
            array (
                'id' => 401,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7303',
                'name' => 'KABUPATEN BANTAENG',
            ),
            401 => 
            array (
                'id' => 402,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7304',
                'name' => 'KABUPATEN JENEPONTO',
            ),
            402 => 
            array (
                'id' => 403,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7305',
                'name' => 'KABUPATEN TAKALAR',
            ),
            403 => 
            array (
                'id' => 404,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7306',
                'name' => 'KABUPATEN GOWA',
            ),
            404 => 
            array (
                'id' => 405,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7307',
                'name' => 'KABUPATEN SINJAI',
            ),
            405 => 
            array (
                'id' => 406,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7308',
                'name' => 'KABUPATEN MAROS',
            ),
            406 => 
            array (
                'id' => 407,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7309',
                'name' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
            ),
            407 => 
            array (
                'id' => 408,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7310',
                'name' => 'KABUPATEN BARRU',
            ),
            408 => 
            array (
                'id' => 409,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7311',
                'name' => 'KABUPATEN BONE',
            ),
            409 => 
            array (
                'id' => 410,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7312',
                'name' => 'KABUPATEN SOPPENG',
            ),
            410 => 
            array (
                'id' => 411,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7313',
                'name' => 'KABUPATEN WAJO',
            ),
            411 => 
            array (
                'id' => 412,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7314',
                'name' => 'KABUPATEN SIDENRENG RAPPANG',
            ),
            412 => 
            array (
                'id' => 413,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7315',
                'name' => 'KABUPATEN PINRANG',
            ),
            413 => 
            array (
                'id' => 414,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7316',
                'name' => 'KABUPATEN ENREKANG',
            ),
            414 => 
            array (
                'id' => 415,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7317',
                'name' => 'KABUPATEN LUWU',
            ),
            415 => 
            array (
                'id' => 416,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7318',
                'name' => 'KABUPATEN TANA TORAJA',
            ),
            416 => 
            array (
                'id' => 417,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7322',
                'name' => 'KABUPATEN LUWU UTARA',
            ),
            417 => 
            array (
                'id' => 418,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7325',
                'name' => 'KABUPATEN LUWU TIMUR',
            ),
            418 => 
            array (
                'id' => 419,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7326',
                'name' => 'KABUPATEN TORAJA UTARA',
            ),
            419 => 
            array (
                'id' => 420,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7371',
                'name' => 'KOTA MAKASSAR',
            ),
            420 => 
            array (
                'id' => 421,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7372',
                'name' => 'KOTA PAREPARE',
            ),
            421 => 
            array (
                'id' => 422,
                'province_id' => 27,
                'parent_code' => '73',
                'code' => '7373',
                'name' => 'KOTA PALOPO',
            ),
            422 => 
            array (
                'id' => 423,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7401',
                'name' => 'KABUPATEN BUTON',
            ),
            423 => 
            array (
                'id' => 424,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7402',
                'name' => 'KABUPATEN MUNA',
            ),
            424 => 
            array (
                'id' => 425,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7403',
                'name' => 'KABUPATEN KONAWE',
            ),
            425 => 
            array (
                'id' => 426,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7404',
                'name' => 'KABUPATEN KOLAKA',
            ),
            426 => 
            array (
                'id' => 427,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7405',
                'name' => 'KABUPATEN KONAWE SELATAN',
            ),
            427 => 
            array (
                'id' => 428,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7406',
                'name' => 'KABUPATEN BOMBANA',
            ),
            428 => 
            array (
                'id' => 429,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7407',
                'name' => 'KABUPATEN WAKATOBI',
            ),
            429 => 
            array (
                'id' => 430,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7408',
                'name' => 'KABUPATEN KOLAKA UTARA',
            ),
            430 => 
            array (
                'id' => 431,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7409',
                'name' => 'KABUPATEN BUTON UTARA',
            ),
            431 => 
            array (
                'id' => 432,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7410',
                'name' => 'KABUPATEN KONAWE UTARA',
            ),
            432 => 
            array (
                'id' => 433,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7411',
                'name' => 'KABUPATEN KOLAKA TIMUR',
            ),
            433 => 
            array (
                'id' => 434,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7412',
                'name' => 'KABUPATEN KONAWE KEPULAUAN',
            ),
            434 => 
            array (
                'id' => 435,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7413',
                'name' => 'KABUPATEN MUNA BARAT',
            ),
            435 => 
            array (
                'id' => 436,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7414',
                'name' => 'KABUPATEN BUTON TENGAH',
            ),
            436 => 
            array (
                'id' => 437,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7415',
                'name' => 'KABUPATEN BUTON SELATAN',
            ),
            437 => 
            array (
                'id' => 438,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7471',
                'name' => 'KOTA KENDARI',
            ),
            438 => 
            array (
                'id' => 439,
                'province_id' => 28,
                'parent_code' => '74',
                'code' => '7472',
                'name' => 'KOTA BAUBAU',
            ),
            439 => 
            array (
                'id' => 440,
                'province_id' => 29,
                'parent_code' => '75',
                'code' => '7501',
                'name' => 'KABUPATEN BOALEMO',
            ),
            440 => 
            array (
                'id' => 441,
                'province_id' => 29,
                'parent_code' => '75',
                'code' => '7502',
                'name' => 'KABUPATEN GORONTALO',
            ),
            441 => 
            array (
                'id' => 442,
                'province_id' => 29,
                'parent_code' => '75',
                'code' => '7503',
                'name' => 'KABUPATEN POHUWATO',
            ),
            442 => 
            array (
                'id' => 443,
                'province_id' => 29,
                'parent_code' => '75',
                'code' => '7504',
                'name' => 'KABUPATEN BONE BOLANGO',
            ),
            443 => 
            array (
                'id' => 444,
                'province_id' => 29,
                'parent_code' => '75',
                'code' => '7505',
                'name' => 'KABUPATEN GORONTALO UTARA',
            ),
            444 => 
            array (
                'id' => 445,
                'province_id' => 29,
                'parent_code' => '75',
                'code' => '7571',
                'name' => 'KOTA GORONTALO',
            ),
            445 => 
            array (
                'id' => 446,
                'province_id' => 30,
                'parent_code' => '76',
                'code' => '7601',
                'name' => 'KABUPATEN MAJENE',
            ),
            446 => 
            array (
                'id' => 447,
                'province_id' => 30,
                'parent_code' => '76',
                'code' => '7602',
                'name' => 'KABUPATEN POLEWALI MANDAR',
            ),
            447 => 
            array (
                'id' => 448,
                'province_id' => 30,
                'parent_code' => '76',
                'code' => '7603',
                'name' => 'KABUPATEN MAMASA',
            ),
            448 => 
            array (
                'id' => 449,
                'province_id' => 30,
                'parent_code' => '76',
                'code' => '7604',
                'name' => 'KABUPATEN MAMUJU',
            ),
            449 => 
            array (
                'id' => 450,
                'province_id' => 30,
                'parent_code' => '76',
                'code' => '7605',
                'name' => 'KABUPATEN PASANGKAYU',
            ),
            450 => 
            array (
                'id' => 451,
                'province_id' => 30,
                'parent_code' => '76',
                'code' => '7606',
                'name' => 'KABUPATEN MAMUJU TENGAH',
            ),
            451 => 
            array (
                'id' => 452,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8101',
                'name' => 'KABUPATEN KEPULAUAN TANIMBAR',
            ),
            452 => 
            array (
                'id' => 453,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8102',
                'name' => 'KABUPATEN MALUKU TENGGARA',
            ),
            453 => 
            array (
                'id' => 454,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8103',
                'name' => 'KABUPATEN MALUKU TENGAH',
            ),
            454 => 
            array (
                'id' => 455,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8104',
                'name' => 'KABUPATEN BURU',
            ),
            455 => 
            array (
                'id' => 456,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8105',
                'name' => 'KABUPATEN KEPULAUAN ARU',
            ),
            456 => 
            array (
                'id' => 457,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8106',
                'name' => 'KABUPATEN SERAM BAGIAN BARAT',
            ),
            457 => 
            array (
                'id' => 458,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8107',
                'name' => 'KABUPATEN SERAM BAGIAN TIMUR',
            ),
            458 => 
            array (
                'id' => 459,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8108',
                'name' => 'KABUPATEN MALUKU BARAT DAYA',
            ),
            459 => 
            array (
                'id' => 460,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8109',
                'name' => 'KABUPATEN BURU SELATAN',
            ),
            460 => 
            array (
                'id' => 461,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8171',
                'name' => 'KOTA AMBON',
            ),
            461 => 
            array (
                'id' => 462,
                'province_id' => 31,
                'parent_code' => '81',
                'code' => '8172',
                'name' => 'KOTA TUAL',
            ),
            462 => 
            array (
                'id' => 463,
                'province_id' => 32,
                'parent_code' => '82',
                'code' => '8201',
                'name' => 'KABUPATEN HALMAHERA BARAT',
            ),
            463 => 
            array (
                'id' => 464,
                'province_id' => 32,
                'parent_code' => '82',
                'code' => '8202',
                'name' => 'KABUPATEN HALMAHERA TENGAH',
            ),
            464 => 
            array (
                'id' => 465,
                'province_id' => 32,
                'parent_code' => '82',
                'code' => '8203',
                'name' => 'KABUPATEN KEPULAUAN SULA',
            ),
            465 => 
            array (
                'id' => 466,
                'province_id' => 32,
                'parent_code' => '82',
                'code' => '8204',
                'name' => 'KABUPATEN HALMAHERA SELATAN',
            ),
            466 => 
            array (
                'id' => 467,
                'province_id' => 32,
                'parent_code' => '82',
                'code' => '8205',
                'name' => 'KABUPATEN HALMAHERA UTARA',
            ),
            467 => 
            array (
                'id' => 468,
                'province_id' => 32,
                'parent_code' => '82',
                'code' => '8206',
                'name' => 'KABUPATEN HALMAHERA TIMUR',
            ),
            468 => 
            array (
                'id' => 469,
                'province_id' => 32,
                'parent_code' => '82',
                'code' => '8207',
                'name' => 'KABUPATEN PULAU MOROTAI',
            ),
            469 => 
            array (
                'id' => 470,
                'province_id' => 32,
                'parent_code' => '82',
                'code' => '8208',
                'name' => 'KABUPATEN PULAU TALIABU',
            ),
            470 => 
            array (
                'id' => 471,
                'province_id' => 32,
                'parent_code' => '82',
                'code' => '8271',
                'name' => 'KOTA TERNATE',
            ),
            471 => 
            array (
                'id' => 472,
                'province_id' => 32,
                'parent_code' => '82',
                'code' => '8272',
                'name' => 'KOTA TIDORE KEPULAUAN',
            ),
            472 => 
            array (
                'id' => 473,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9101',
                'name' => 'KABUPATEN FAKFAK',
            ),
            473 => 
            array (
                'id' => 474,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9102',
                'name' => 'KABUPATEN KAIMANA',
            ),
            474 => 
            array (
                'id' => 475,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9103',
                'name' => 'KABUPATEN TELUK WONDAMA',
            ),
            475 => 
            array (
                'id' => 476,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9104',
                'name' => 'KABUPATEN TELUK BINTUNI',
            ),
            476 => 
            array (
                'id' => 477,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9105',
                'name' => 'KABUPATEN MANOKWARI',
            ),
            477 => 
            array (
                'id' => 478,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9106',
                'name' => 'KABUPATEN SORONG SELATAN',
            ),
            478 => 
            array (
                'id' => 479,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9107',
                'name' => 'KABUPATEN SORONG',
            ),
            479 => 
            array (
                'id' => 480,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9108',
                'name' => 'KABUPATEN RAJA AMPAT',
            ),
            480 => 
            array (
                'id' => 481,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9109',
                'name' => 'KABUPATEN TAMBRAUW',
            ),
            481 => 
            array (
                'id' => 482,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9110',
                'name' => 'KABUPATEN MAYBRAT',
            ),
            482 => 
            array (
                'id' => 483,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9111',
                'name' => 'KABUPATEN MANOKWARI SELATAN',
            ),
            483 => 
            array (
                'id' => 484,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9112',
                'name' => 'KABUPATEN PEGUNUNGAN ARFAK',
            ),
            484 => 
            array (
                'id' => 485,
                'province_id' => 33,
                'parent_code' => '91',
                'code' => '9171',
                'name' => 'KOTA SORONG',
            ),
            485 => 
            array (
                'id' => 486,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9401',
                'name' => 'KABUPATEN MERAUKE',
            ),
            486 => 
            array (
                'id' => 487,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9402',
                'name' => 'KABUPATEN JAYAWIJAYA',
            ),
            487 => 
            array (
                'id' => 488,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9403',
                'name' => 'KABUPATEN JAYAPURA',
            ),
            488 => 
            array (
                'id' => 489,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9404',
                'name' => 'KABUPATEN NABIRE',
            ),
            489 => 
            array (
                'id' => 490,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9408',
                'name' => 'KABUPATEN KEPULAUAN YAPEN',
            ),
            490 => 
            array (
                'id' => 491,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9409',
                'name' => 'KABUPATEN BIAK NUMFOR',
            ),
            491 => 
            array (
                'id' => 492,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9410',
                'name' => 'KABUPATEN PANIAI',
            ),
            492 => 
            array (
                'id' => 493,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9411',
                'name' => 'KABUPATEN PUNCAK JAYA',
            ),
            493 => 
            array (
                'id' => 494,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9412',
                'name' => 'KABUPATEN MIMIKA',
            ),
            494 => 
            array (
                'id' => 495,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9413',
                'name' => 'KABUPATEN BOVEN DIGOEL',
            ),
            495 => 
            array (
                'id' => 496,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9414',
                'name' => 'KABUPATEN MAPPI',
            ),
            496 => 
            array (
                'id' => 497,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9415',
                'name' => 'KABUPATEN ASMAT',
            ),
            497 => 
            array (
                'id' => 498,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9416',
                'name' => 'KABUPATEN YAHUKIMO',
            ),
            498 => 
            array (
                'id' => 499,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9417',
                'name' => 'KABUPATEN PEGUNUNGAN BINTANG',
            ),
            499 => 
            array (
                'id' => 500,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9418',
                'name' => 'KABUPATEN TOLIKARA',
            ),
        ));
        \DB::table('regencies')->insert(array (
            0 => 
            array (
                'id' => 501,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9419',
                'name' => 'KABUPATEN SARMI',
            ),
            1 => 
            array (
                'id' => 502,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9420',
                'name' => 'KABUPATEN KEEROM',
            ),
            2 => 
            array (
                'id' => 503,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9426',
                'name' => 'KABUPATEN WAROPEN',
            ),
            3 => 
            array (
                'id' => 504,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9427',
                'name' => 'KABUPATEN SUPIORI',
            ),
            4 => 
            array (
                'id' => 505,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9428',
                'name' => 'KABUPATEN MAMBERAMO RAYA',
            ),
            5 => 
            array (
                'id' => 506,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9429',
                'name' => 'KABUPATEN NDUGA',
            ),
            6 => 
            array (
                'id' => 507,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9430',
                'name' => 'KABUPATEN LANNY JAYA',
            ),
            7 => 
            array (
                'id' => 508,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9431',
                'name' => 'KABUPATEN MAMBERAMO TENGAH',
            ),
            8 => 
            array (
                'id' => 509,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9432',
                'name' => 'KABUPATEN YALIMO',
            ),
            9 => 
            array (
                'id' => 510,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9433',
                'name' => 'KABUPATEN PUNCAK',
            ),
            10 => 
            array (
                'id' => 511,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9434',
                'name' => 'KABUPATEN DOGIYAI',
            ),
            11 => 
            array (
                'id' => 512,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9435',
                'name' => 'KABUPATEN INTAN JAYA',
            ),
            12 => 
            array (
                'id' => 513,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9436',
                'name' => 'KABUPATEN DEIYAI',
            ),
            13 => 
            array (
                'id' => 514,
                'province_id' => 34,
                'parent_code' => '94',
                'code' => '9471',
                'name' => 'KOTA JAYAPURA',
            ),
        ));
        
        
    }
}