<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('districts')->delete();
        
        DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 10,
                'name' => 'SAMALANGA',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 11,
                'name' => 'SIMPANG MAMPLAM',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 20,
                'name' => 'PANDRAH',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 30,
                'name' => 'JEUNIEB',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 31,
                'name' => 'PEULIMBANG',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 40,
                'name' => 'PEUDADA',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 50,
                'name' => 'JULI',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 60,
                'name' => 'JEUMPA',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 61,
                'name' => 'KOTA JUANG',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 62,
                'name' => 'KUALA',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 70,
                'name' => 'JANGKA',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 80,
                'name' => 'PEUSANGAN',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 81,
                'name' => 'PEUSANGAN SELATAN',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 82,
                'name' => 'PEUSANGAN SIBLAH KRUENG',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 90,
                'name' => 'MAKMUR',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 100,
                'name' => 'GANDA PURA',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 101,
                'name' => 'KUTA BLANG',
                'province_code' => 11,
                'regency_code' => 10,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 10,
                'name' => 'SAWANG',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 20,
                'name' => 'NISAM',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 21,
                'name' => 'NISAM ANTARA',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 22,
                'name' => 'BANDA BARO',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 30,
                'name' => 'KUTA MAKMUR',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 31,
                'name' => 'SIMPANG KERAMAT',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 40,
                'name' => 'SYAMTALIRA BAYU',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 41,
                'name' => 'GEUREUDONG PASE',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 50,
                'name' => 'MEURAH MULIA',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 60,
                'name' => 'MATANGKULI',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 61,
                'name' => 'PAYA BAKONG',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 62,
                'name' => 'PIRAK TIMU',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 70,
                'name' => 'COT GIREK',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 80,
                'name' => 'TANAH JAMBO AYE',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 81,
                'name' => 'LANGKAHAN',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 90,
                'name' => 'SEUNUDDON',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 100,
                'name' => 'BAKTIYA',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 101,
                'name' => 'BAKTIYA BARAT',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 110,
                'name' => 'LHOKSUKON',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            36 => 
            array (
                'id' => 37,
                'code' => 120,
                'name' => 'TANAH LUAS',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            37 => 
            array (
                'id' => 38,
                'code' => 121,
                'name' => 'NIBONG',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            38 => 
            array (
                'id' => 39,
                'code' => 130,
                'name' => 'SAMUDERA',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            39 => 
            array (
                'id' => 40,
                'code' => 140,
                'name' => 'SYAMTALIRA ARON',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            40 => 
            array (
                'id' => 41,
                'code' => 150,
                'name' => 'TANAH PASIR',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            41 => 
            array (
                'id' => 42,
                'code' => 151,
                'name' => 'LAPANG',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            42 => 
            array (
                'id' => 43,
                'code' => 160,
                'name' => 'MUARA BATU',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            43 => 
            array (
                'id' => 44,
                'code' => 170,
                'name' => 'DEWANTARA',
                'province_code' => 11,
                'regency_code' => 11,
            ),
            44 => 
            array (
                'id' => 45,
                'code' => 10,
                'name' => 'MANGGENG',
                'province_code' => 11,
                'regency_code' => 12,
            ),
            45 => 
            array (
                'id' => 46,
                'code' => 11,
                'name' => 'LEMBAH SABIL',
                'province_code' => 11,
                'regency_code' => 12,
            ),
            46 => 
            array (
                'id' => 47,
                'code' => 20,
                'name' => 'TANGAN-TANGAN',
                'province_code' => 11,
                'regency_code' => 12,
            ),
            47 => 
            array (
                'id' => 48,
                'code' => 21,
                'name' => 'SETIA',
                'province_code' => 11,
                'regency_code' => 12,
            ),
            48 => 
            array (
                'id' => 49,
                'code' => 30,
                'name' => 'BLANG PIDIE',
                'province_code' => 11,
                'regency_code' => 12,
            ),
            49 => 
            array (
                'id' => 50,
                'code' => 31,
                'name' => 'JEUMPA',
                'province_code' => 11,
                'regency_code' => 12,
            ),
            50 => 
            array (
                'id' => 51,
                'code' => 40,
                'name' => 'SUSOH',
                'province_code' => 11,
                'regency_code' => 12,
            ),
            51 => 
            array (
                'id' => 52,
                'code' => 50,
                'name' => 'KUALA BATEE',
                'province_code' => 11,
                'regency_code' => 12,
            ),
            52 => 
            array (
                'id' => 53,
                'code' => 60,
                'name' => 'BABAH ROT',
                'province_code' => 11,
                'regency_code' => 12,
            ),
            53 => 
            array (
                'id' => 54,
                'code' => 10,
                'name' => 'KUTA PANJANG',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            54 => 
            array (
                'id' => 55,
                'code' => 11,
                'name' => 'BLANG JERANGO',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            55 => 
            array (
                'id' => 56,
                'code' => 20,
                'name' => 'BLANGKEJEREN',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            56 => 
            array (
                'id' => 57,
                'code' => 21,
                'name' => 'PUTRI BETUNG',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            57 => 
            array (
                'id' => 58,
                'code' => 22,
                'name' => 'DABUN GELANG',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            58 => 
            array (
                'id' => 59,
                'code' => 23,
                'name' => 'BLANG PEGAYON',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            59 => 
            array (
                'id' => 60,
                'code' => 30,
                'name' => 'PINING',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            60 => 
            array (
                'id' => 61,
                'code' => 40,
                'name' => 'RIKIT GAIB',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            61 => 
            array (
                'id' => 62,
                'code' => 41,
                'name' => 'PANTAN CUACA',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            62 => 
            array (
                'id' => 63,
                'code' => 50,
                'name' => 'TERANGUN',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            63 => 
            array (
                'id' => 64,
                'code' => 51,
                'name' => 'TRIPE JAYA',
                'province_code' => 11,
                'regency_code' => 13,
            ),
            64 => 
            array (
                'id' => 65,
                'code' => 10,
                'name' => 'TAMIANG HULU',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            65 => 
            array (
                'id' => 66,
                'code' => 11,
                'name' => 'BANDAR PUSAKA',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            66 => 
            array (
                'id' => 67,
                'code' => 20,
                'name' => 'KEJURUAN MUDA',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            67 => 
            array (
                'id' => 68,
                'code' => 21,
                'name' => 'TENGGULUN',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            68 => 
            array (
                'id' => 69,
                'code' => 30,
                'name' => 'RANTAU',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            69 => 
            array (
                'id' => 70,
                'code' => 40,
                'name' => 'KOTA KUALASIMPANG',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            70 => 
            array (
                'id' => 71,
                'code' => 50,
                'name' => 'SERUWAY',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            71 => 
            array (
                'id' => 72,
                'code' => 60,
                'name' => 'BENDAHARA',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            72 => 
            array (
                'id' => 73,
                'code' => 61,
                'name' => 'BANDA MULIA',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            73 => 
            array (
                'id' => 74,
                'code' => 70,
                'name' => 'KARANG BARU',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            74 => 
            array (
                'id' => 75,
                'code' => 71,
                'name' => 'SEKERAK',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            75 => 
            array (
                'id' => 76,
                'code' => 80,
                'name' => 'MANYAK PAYED',
                'province_code' => 11,
                'regency_code' => 14,
            ),
            76 => 
            array (
                'id' => 77,
                'code' => 10,
                'name' => 'DARUL MAKMUR',
                'province_code' => 11,
                'regency_code' => 15,
            ),
            77 => 
            array (
                'id' => 78,
                'code' => 11,
                'name' => 'TRIPA MAKMUR',
                'province_code' => 11,
                'regency_code' => 15,
            ),
            78 => 
            array (
                'id' => 79,
                'code' => 20,
                'name' => 'KUALA',
                'province_code' => 11,
                'regency_code' => 15,
            ),
            79 => 
            array (
                'id' => 80,
                'code' => 21,
                'name' => 'KUALA PESISIR',
                'province_code' => 11,
                'regency_code' => 15,
            ),
            80 => 
            array (
                'id' => 81,
                'code' => 22,
                'name' => 'TADU RAYA',
                'province_code' => 11,
                'regency_code' => 15,
            ),
            81 => 
            array (
                'id' => 82,
                'code' => 30,
                'name' => 'BEUTONG',
                'province_code' => 11,
                'regency_code' => 15,
            ),
            82 => 
            array (
                'id' => 83,
                'code' => 31,
                'name' => 'BEUTONG ATEUH BANGGALANG',
                'province_code' => 11,
                'regency_code' => 15,
            ),
            83 => 
            array (
                'id' => 84,
                'code' => 40,
                'name' => 'SEUNAGAN',
                'province_code' => 11,
                'regency_code' => 15,
            ),
            84 => 
            array (
                'id' => 85,
                'code' => 41,
                'name' => 'SUKA MAKMUE',
                'province_code' => 11,
                'regency_code' => 15,
            ),
            85 => 
            array (
                'id' => 86,
                'code' => 50,
                'name' => 'SEUNAGAN TIMUR',
                'province_code' => 11,
                'regency_code' => 15,
            ),
            86 => 
            array (
                'id' => 87,
                'code' => 10,
                'name' => 'TEUNOM',
                'province_code' => 11,
                'regency_code' => 16,
            ),
            87 => 
            array (
                'id' => 88,
                'code' => 11,
                'name' => 'PASIE RAYA',
                'province_code' => 11,
                'regency_code' => 16,
            ),
            88 => 
            array (
                'id' => 89,
                'code' => 20,
                'name' => 'PANGA',
                'province_code' => 11,
                'regency_code' => 16,
            ),
            89 => 
            array (
                'id' => 90,
                'code' => 30,
                'name' => 'KRUENG SABEE',
                'province_code' => 11,
                'regency_code' => 16,
            ),
            90 => 
            array (
                'id' => 91,
                'code' => 40,
                'name' => 'SETIA BAKTI',
                'province_code' => 11,
                'regency_code' => 16,
            ),
            91 => 
            array (
                'id' => 92,
                'code' => 50,
                'name' => 'SAMPOINIET',
                'province_code' => 11,
                'regency_code' => 16,
            ),
            92 => 
            array (
                'id' => 93,
                'code' => 51,
                'name' => 'DARUL HIKMAH',
                'province_code' => 11,
                'regency_code' => 16,
            ),
            93 => 
            array (
                'id' => 94,
                'code' => 60,
                'name' => 'JAYA',
                'province_code' => 11,
                'regency_code' => 16,
            ),
            94 => 
            array (
                'id' => 95,
                'code' => 61,
                'name' => 'INDRA JAYA',
                'province_code' => 11,
                'regency_code' => 16,
            ),
            95 => 
            array (
                'id' => 96,
                'code' => 10,
                'name' => 'TIMANG GAJAH',
                'province_code' => 11,
                'regency_code' => 17,
            ),
            96 => 
            array (
                'id' => 97,
                'code' => 11,
                'name' => 'GAJAH PUTIH',
                'province_code' => 11,
                'regency_code' => 17,
            ),
            97 => 
            array (
                'id' => 98,
                'code' => 20,
                'name' => 'PINTU RIME GAYO',
                'province_code' => 11,
                'regency_code' => 17,
            ),
            98 => 
            array (
                'id' => 99,
                'code' => 30,
                'name' => 'BUKIT',
                'province_code' => 11,
                'regency_code' => 17,
            ),
            99 => 
            array (
                'id' => 100,
                'code' => 40,
                'name' => 'WIH PESAM',
                'province_code' => 11,
                'regency_code' => 17,
            ),
            100 => 
            array (
                'id' => 101,
                'code' => 50,
                'name' => 'BANDAR',
                'province_code' => 11,
                'regency_code' => 17,
            ),
            101 => 
            array (
                'id' => 102,
                'code' => 51,
                'name' => 'BENER KELIPAH',
                'province_code' => 11,
                'regency_code' => 17,
            ),
            102 => 
            array (
                'id' => 103,
                'code' => 60,
                'name' => 'SYIAH UTAMA',
                'province_code' => 11,
                'regency_code' => 17,
            ),
            103 => 
            array (
                'id' => 104,
                'code' => 61,
                'name' => 'MESIDAH',
                'province_code' => 11,
                'regency_code' => 17,
            ),
            104 => 
            array (
                'id' => 105,
                'code' => 70,
                'name' => 'PERMATA',
                'province_code' => 11,
                'regency_code' => 17,
            ),
            105 => 
            array (
                'id' => 106,
                'code' => 10,
                'name' => 'MEUREUDU',
                'province_code' => 11,
                'regency_code' => 18,
            ),
            106 => 
            array (
                'id' => 107,
                'code' => 20,
                'name' => 'MEURAH DUA',
                'province_code' => 11,
                'regency_code' => 18,
            ),
            107 => 
            array (
                'id' => 108,
                'code' => 30,
                'name' => 'BANDAR DUA',
                'province_code' => 11,
                'regency_code' => 18,
            ),
            108 => 
            array (
                'id' => 109,
                'code' => 40,
                'name' => 'JANGKA BUYA',
                'province_code' => 11,
                'regency_code' => 18,
            ),
            109 => 
            array (
                'id' => 110,
                'code' => 50,
                'name' => 'ULIM',
                'province_code' => 11,
                'regency_code' => 18,
            ),
            110 => 
            array (
                'id' => 111,
                'code' => 60,
                'name' => 'TRIENGGADENG',
                'province_code' => 11,
                'regency_code' => 18,
            ),
            111 => 
            array (
                'id' => 112,
                'code' => 70,
                'name' => 'PANTERAJA',
                'province_code' => 11,
                'regency_code' => 18,
            ),
            112 => 
            array (
                'id' => 113,
                'code' => 80,
                'name' => 'BANDAR BARU',
                'province_code' => 11,
                'regency_code' => 18,
            ),
            113 => 
            array (
                'id' => 114,
                'code' => 10,
                'name' => 'MEURAXA',
                'province_code' => 11,
                'regency_code' => 71,
            ),
            114 => 
            array (
                'id' => 115,
                'code' => 11,
                'name' => 'JAYA BARU',
                'province_code' => 11,
                'regency_code' => 71,
            ),
            115 => 
            array (
                'id' => 116,
                'code' => 12,
                'name' => 'BANDA RAYA',
                'province_code' => 11,
                'regency_code' => 71,
            ),
            116 => 
            array (
                'id' => 117,
                'code' => 20,
                'name' => 'BAITURRAHMAN',
                'province_code' => 11,
                'regency_code' => 71,
            ),
            117 => 
            array (
                'id' => 118,
                'code' => 21,
                'name' => 'LUENG BATA',
                'province_code' => 11,
                'regency_code' => 71,
            ),
            118 => 
            array (
                'id' => 119,
                'code' => 30,
                'name' => 'KUTA ALAM',
                'province_code' => 11,
                'regency_code' => 71,
            ),
            119 => 
            array (
                'id' => 120,
                'code' => 31,
                'name' => 'KUTA RAJA',
                'province_code' => 11,
                'regency_code' => 71,
            ),
            120 => 
            array (
                'id' => 121,
                'code' => 40,
                'name' => 'SYIAH KUALA',
                'province_code' => 11,
                'regency_code' => 71,
            ),
            121 => 
            array (
                'id' => 122,
                'code' => 41,
                'name' => 'ULEE KARENG',
                'province_code' => 11,
                'regency_code' => 71,
            ),
            122 => 
            array (
                'id' => 123,
                'code' => 10,
                'name' => 'SUKAJAYA',
                'province_code' => 11,
                'regency_code' => 72,
            ),
            123 => 
            array (
                'id' => 124,
                'code' => 20,
                'name' => 'SUKAKARYA',
                'province_code' => 11,
                'regency_code' => 72,
            ),
            124 => 
            array (
                'id' => 125,
                'code' => 10,
                'name' => 'LANGSA TIMUR',
                'province_code' => 11,
                'regency_code' => 73,
            ),
            125 => 
            array (
                'id' => 126,
                'code' => 11,
                'name' => 'LANGSA LAMA',
                'province_code' => 11,
                'regency_code' => 73,
            ),
            126 => 
            array (
                'id' => 127,
                'code' => 20,
                'name' => 'LANGSA BARAT',
                'province_code' => 11,
                'regency_code' => 73,
            ),
            127 => 
            array (
                'id' => 128,
                'code' => 21,
                'name' => 'LANGSA BARO',
                'province_code' => 11,
                'regency_code' => 73,
            ),
            128 => 
            array (
                'id' => 129,
                'code' => 30,
                'name' => 'LANGSA KOTA',
                'province_code' => 11,
                'regency_code' => 73,
            ),
            129 => 
            array (
                'id' => 130,
                'code' => 10,
                'name' => 'BLANG MANGAT',
                'province_code' => 11,
                'regency_code' => 74,
            ),
            130 => 
            array (
                'id' => 131,
                'code' => 20,
                'name' => 'MUARA DUA',
                'province_code' => 11,
                'regency_code' => 74,
            ),
            131 => 
            array (
                'id' => 132,
                'code' => 21,
                'name' => 'MUARA SATU',
                'province_code' => 11,
                'regency_code' => 74,
            ),
            132 => 
            array (
                'id' => 133,
                'code' => 30,
                'name' => 'BANDA SAKTI',
                'province_code' => 11,
                'regency_code' => 74,
            ),
            133 => 
            array (
                'id' => 134,
                'code' => 10,
                'name' => 'SIMPANG KIRI',
                'province_code' => 11,
                'regency_code' => 75,
            ),
            134 => 
            array (
                'id' => 135,
                'code' => 20,
                'name' => 'PENANGGALAN',
                'province_code' => 11,
                'regency_code' => 75,
            ),
            135 => 
            array (
                'id' => 136,
                'code' => 30,
                'name' => 'RUNDENG',
                'province_code' => 11,
                'regency_code' => 75,
            ),
            136 => 
            array (
                'id' => 137,
                'code' => 40,
                'name' => 'SULTAN DAULAT',
                'province_code' => 11,
                'regency_code' => 75,
            ),
            137 => 
            array (
                'id' => 138,
                'code' => 50,
                'name' => 'LONGKIB',
                'province_code' => 11,
                'regency_code' => 75,
            ),
            138 => 
            array (
                'id' => 139,
                'code' => 30,
                'name' => 'SIDIKALANG',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            139 => 
            array (
                'id' => 140,
                'code' => 31,
                'name' => 'BERAMPU',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            140 => 
            array (
                'id' => 141,
                'code' => 32,
                'name' => 'SITINJO',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            141 => 
            array (
                'id' => 142,
                'code' => 40,
                'name' => 'PARBULUAN',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            142 => 
            array (
                'id' => 143,
                'code' => 50,
                'name' => 'SUMBUL',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            143 => 
            array (
                'id' => 144,
                'code' => 51,
                'name' => 'SILAHISABUNGAN',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            144 => 
            array (
                'id' => 145,
                'code' => 60,
                'name' => 'SILIMA PUNGGA-PUNGGA',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            145 => 
            array (
                'id' => 146,
                'code' => 61,
                'name' => 'LAE PARIRA',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            146 => 
            array (
                'id' => 147,
                'code' => 70,
                'name' => 'SIEMPAT NEMPU',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            147 => 
            array (
                'id' => 148,
                'code' => 80,
                'name' => 'SIEMPAT NEMPU HULU',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            148 => 
            array (
                'id' => 149,
                'code' => 90,
                'name' => 'SIEMPAT NEMPU HILIR',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            149 => 
            array (
                'id' => 150,
                'code' => 100,
                'name' => 'TIGA LINGGA',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            150 => 
            array (
                'id' => 151,
                'code' => 101,
                'name' => 'GUNUNG SITEMBER',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            151 => 
            array (
                'id' => 152,
                'code' => 110,
                'name' => 'PEGAGAN HILIR',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            152 => 
            array (
                'id' => 153,
                'code' => 120,
                'name' => 'TANAH PINEM',
                'province_code' => 12,
                'regency_code' => 10,
            ),
            153 => 
            array (
                'id' => 154,
                'code' => 10,
                'name' => 'MARDINGDING',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            154 => 
            array (
                'id' => 155,
                'code' => 20,
                'name' => 'LAUBALENG',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            155 => 
            array (
                'id' => 156,
                'code' => 30,
                'name' => 'TIGA BINANGA',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            156 => 
            array (
                'id' => 157,
                'code' => 40,
                'name' => 'JUHAR',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            157 => 
            array (
                'id' => 158,
                'code' => 50,
                'name' => 'MUNTE',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            158 => 
            array (
                'id' => 159,
                'code' => 60,
                'name' => 'KUTA BULUH',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            159 => 
            array (
                'id' => 160,
                'code' => 70,
                'name' => 'PAYUNG',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            160 => 
            array (
                'id' => 161,
                'code' => 71,
                'name' => 'TIGANDERKET',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            161 => 
            array (
                'id' => 162,
                'code' => 80,
                'name' => 'SIMPANG EMPAT',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            162 => 
            array (
                'id' => 163,
                'code' => 81,
                'name' => 'NAMAN TERAN',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            163 => 
            array (
                'id' => 164,
                'code' => 82,
                'name' => 'MERDEKA',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            164 => 
            array (
                'id' => 165,
                'code' => 90,
                'name' => 'KABANJAHE',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            165 => 
            array (
                'id' => 166,
                'code' => 100,
                'name' => 'BERASTAGI',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            166 => 
            array (
                'id' => 167,
                'code' => 110,
                'name' => 'TIGAPANAH',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            167 => 
            array (
                'id' => 168,
                'code' => 111,
                'name' => 'DOLAT RAYAT',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            168 => 
            array (
                'id' => 169,
                'code' => 120,
                'name' => 'MEREK',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            169 => 
            array (
                'id' => 170,
                'code' => 130,
                'name' => 'BARUSJAHE',
                'province_code' => 12,
                'regency_code' => 11,
            ),
            170 => 
            array (
                'id' => 171,
                'code' => 10,
                'name' => 'GUNUNG MERIAH',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            171 => 
            array (
                'id' => 172,
                'code' => 20,
                'name' => 'SINEMBAH TANJUNG MUDA HULU',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            172 => 
            array (
                'id' => 173,
                'code' => 30,
                'name' => 'SIBOLANGIT',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            173 => 
            array (
                'id' => 174,
                'code' => 40,
                'name' => 'KUTALIMBARU',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            174 => 
            array (
                'id' => 175,
                'code' => 50,
                'name' => 'PANCUR BATU',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            175 => 
            array (
                'id' => 176,
                'code' => 60,
                'name' => 'NAMO RAMBE',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            176 => 
            array (
                'id' => 177,
                'code' => 70,
                'name' => 'BIRU-BIRU',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            177 => 
            array (
                'id' => 178,
                'code' => 80,
                'name' => 'SINEMBAH TANJUNG MUDA HILIR',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            178 => 
            array (
                'id' => 179,
                'code' => 90,
                'name' => 'BANGUN PURBA',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            179 => 
            array (
                'id' => 180,
                'code' => 190,
                'name' => 'GALANG',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            180 => 
            array (
                'id' => 181,
                'code' => 200,
                'name' => 'TANJUNG MORAWA',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            181 => 
            array (
                'id' => 182,
                'code' => 210,
                'name' => 'PATUMBAK',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            182 => 
            array (
                'id' => 183,
                'code' => 220,
                'name' => 'DELI TUA',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            183 => 
            array (
                'id' => 184,
                'code' => 230,
                'name' => 'SUNGGAL',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            184 => 
            array (
                'id' => 185,
                'code' => 240,
                'name' => 'HAMPARAN PERAK',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            185 => 
            array (
                'id' => 186,
                'code' => 250,
                'name' => 'LABUHAN DELI',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            186 => 
            array (
                'id' => 187,
                'code' => 260,
                'name' => 'PERCUT SEI TUAN',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            187 => 
            array (
                'id' => 188,
                'code' => 270,
                'name' => 'BATANG KUIS',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            188 => 
            array (
                'id' => 189,
                'code' => 280,
                'name' => 'PANTAI LABU',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            189 => 
            array (
                'id' => 190,
                'code' => 290,
                'name' => 'BERINGIN',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            190 => 
            array (
                'id' => 191,
                'code' => 300,
                'name' => 'LUBUK PAKAM',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            191 => 
            array (
                'id' => 192,
                'code' => 310,
                'name' => 'PAGAR MERBAU',
                'province_code' => 12,
                'regency_code' => 12,
            ),
            192 => 
            array (
                'id' => 193,
                'code' => 10,
                'name' => 'BOHOROK',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            193 => 
            array (
                'id' => 194,
                'code' => 11,
                'name' => 'SIRAPIT',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            194 => 
            array (
                'id' => 195,
                'code' => 20,
                'name' => 'SALAPIAN',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            195 => 
            array (
                'id' => 196,
                'code' => 21,
                'name' => 'KUTAMBARU',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            196 => 
            array (
                'id' => 197,
                'code' => 30,
                'name' => 'SEI BINGAI',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            197 => 
            array (
                'id' => 198,
                'code' => 40,
                'name' => 'KUALA',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            198 => 
            array (
                'id' => 199,
                'code' => 50,
                'name' => 'SELESAI',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            199 => 
            array (
                'id' => 200,
                'code' => 60,
                'name' => 'BINJAI',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            200 => 
            array (
                'id' => 201,
                'code' => 70,
                'name' => 'STABAT',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            201 => 
            array (
                'id' => 202,
                'code' => 80,
                'name' => 'WAMPU',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            202 => 
            array (
                'id' => 203,
                'code' => 90,
                'name' => 'BATANG SERANGAN',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            203 => 
            array (
                'id' => 204,
                'code' => 100,
                'name' => 'SAWIT SEBERANG',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            204 => 
            array (
                'id' => 205,
                'code' => 110,
                'name' => 'PADANG TUALANG',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            205 => 
            array (
                'id' => 206,
                'code' => 120,
                'name' => 'HINAI',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            206 => 
            array (
                'id' => 207,
                'code' => 130,
                'name' => 'SECANGGANG',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            207 => 
            array (
                'id' => 208,
                'code' => 140,
                'name' => 'TANJUNG PURA',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            208 => 
            array (
                'id' => 209,
                'code' => 150,
                'name' => 'GEBANG',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            209 => 
            array (
                'id' => 210,
                'code' => 160,
                'name' => 'BABALAN',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            210 => 
            array (
                'id' => 211,
                'code' => 170,
                'name' => 'SEI LEPAN',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            211 => 
            array (
                'id' => 212,
                'code' => 180,
                'name' => 'BRANDAN BARAT',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            212 => 
            array (
                'id' => 213,
                'code' => 190,
                'name' => 'BESITANG',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            213 => 
            array (
                'id' => 214,
                'code' => 200,
                'name' => 'PANGKALAN SUSU',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            214 => 
            array (
                'id' => 215,
                'code' => 201,
                'name' => 'PEMATANG JAYA',
                'province_code' => 12,
                'regency_code' => 13,
            ),
            215 => 
            array (
                'id' => 216,
                'code' => 10,
                'name' => 'HIBALA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            216 => 
            array (
                'id' => 217,
                'code' => 11,
                'name' => 'TANAH MASA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            217 => 
            array (
                'id' => 218,
                'code' => 20,
                'name' => 'PULAU-PULAU BATU',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            218 => 
            array (
                'id' => 219,
                'code' => 21,
                'name' => 'PULAU-PULAU BATU TIMUR',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            219 => 
            array (
                'id' => 220,
                'code' => 22,
                'name' => 'SIMUK',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            220 => 
            array (
                'id' => 221,
                'code' => 23,
                'name' => 'PULAU-PULAU BATU BARAT',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            221 => 
            array (
                'id' => 222,
                'code' => 24,
                'name' => 'PULAU-PULAU BATU UTARA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            222 => 
            array (
                'id' => 223,
                'code' => 30,
                'name' => 'TELUK DALAM',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            223 => 
            array (
                'id' => 224,
                'code' => 31,
                'name' => 'FANAYAMA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            224 => 
            array (
                'id' => 225,
                'code' => 32,
                'name' => 'TOMA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            225 => 
            array (
                'id' => 226,
                'code' => 33,
                'name' => 'MANIAMOLO',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            226 => 
            array (
                'id' => 227,
                'code' => 34,
                'name' => 'MAZINO',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            227 => 
            array (
                'id' => 228,
                'code' => 35,
                'name' => 'LUAHAGUNDRE MANIAMOLO',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            228 => 
            array (
                'id' => 229,
                'code' => 36,
                'name' => 'ONOLALU',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            229 => 
            array (
                'id' => 230,
                'code' => 40,
                'name' => 'AMANDRAYA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            230 => 
            array (
                'id' => 231,
                'code' => 41,
                'name' => 'ARAMO',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            231 => 
            array (
                'id' => 232,
                'code' => 42,
                'name' => 'ULUSUSUA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            232 => 
            array (
                'id' => 233,
                'code' => 50,
                'name' => 'LAHUSA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            233 => 
            array (
                'id' => 234,
                'code' => 51,
                'name' => 'SIDUAORI',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            234 => 
            array (
                'id' => 235,
                'code' => 52,
                'name' => 'SOMAMBAWA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            235 => 
            array (
                'id' => 236,
                'code' => 60,
                'name' => 'GOMO',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            236 => 
            array (
                'id' => 237,
                'code' => 61,
                'name' => 'SUSUA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            237 => 
            array (
                'id' => 238,
                'code' => 62,
                'name' => 'MAZO',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            238 => 
            array (
                'id' => 239,
                'code' => 63,
                'name' => 'UMBUNASI',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            239 => 
            array (
                'id' => 240,
                'code' => 64,
                'name' => 'IDANOTAE',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            240 => 
            array (
                'id' => 241,
                'code' => 65,
                'name' => 'ULU IDANOTAE',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            241 => 
            array (
                'id' => 242,
                'code' => 66,
                'name' => 'BORONADU',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            242 => 
            array (
                'id' => 243,
                'code' => 70,
                'name' => 'LOLOMATUA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            243 => 
            array (
                'id' => 244,
                'code' => 71,
                'name' => 'ULUNOYO',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            244 => 
            array (
                'id' => 245,
                'code' => 72,
                'name' => 'HURUNA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            245 => 
            array (
                'id' => 246,
                'code' => 80,
                'name' => 'LOLOWA\\\'U',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            246 => 
            array (
                'id' => 247,
                'code' => 81,
                'name' => 'HILIMEGAI',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            247 => 
            array (
                'id' => 248,
                'code' => 82,
                'name' => 'OOU',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            248 => 
            array (
                'id' => 249,
                'code' => 83,
                'name' => 'ONOHAZUMBA',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            249 => 
            array (
                'id' => 250,
                'code' => 84,
                'name' => 'HILISALAWAAHE',
                'province_code' => 12,
                'regency_code' => 14,
            ),
            250 => 
            array (
                'id' => 251,
                'code' => 10,
                'name' => 'PAKKAT',
                'province_code' => 12,
                'regency_code' => 15,
            ),
            251 => 
            array (
                'id' => 252,
                'code' => 20,
                'name' => 'ONAN GANJANG',
                'province_code' => 12,
                'regency_code' => 15,
            ),
            252 => 
            array (
                'id' => 253,
                'code' => 30,
                'name' => 'SIJAMA POLANG',
                'province_code' => 12,
                'regency_code' => 15,
            ),
            253 => 
            array (
                'id' => 254,
                'code' => 40,
                'name' => 'DOLOK SANGGUL',
                'province_code' => 12,
                'regency_code' => 15,
            ),
            254 => 
            array (
                'id' => 255,
                'code' => 50,
                'name' => 'LINTONG NIHUTA',
                'province_code' => 12,
                'regency_code' => 15,
            ),
            255 => 
            array (
                'id' => 256,
                'code' => 60,
                'name' => 'PARANGINAN',
                'province_code' => 12,
                'regency_code' => 15,
            ),
            256 => 
            array (
                'id' => 257,
                'code' => 70,
                'name' => 'BAKTI RAJA',
                'province_code' => 12,
                'regency_code' => 15,
            ),
            257 => 
            array (
                'id' => 258,
                'code' => 80,
                'name' => 'POLLUNG',
                'province_code' => 12,
                'regency_code' => 15,
            ),
            258 => 
            array (
                'id' => 259,
                'code' => 90,
                'name' => 'PARLILITAN',
                'province_code' => 12,
                'regency_code' => 15,
            ),
            259 => 
            array (
                'id' => 260,
                'code' => 100,
                'name' => 'TARA BINTANG',
                'province_code' => 12,
                'regency_code' => 15,
            ),
            260 => 
            array (
                'id' => 261,
                'code' => 10,
                'name' => 'SALAK',
                'province_code' => 12,
                'regency_code' => 16,
            ),
            261 => 
            array (
                'id' => 262,
                'code' => 11,
                'name' => 'SITELLU TALI URANG JEHE',
                'province_code' => 12,
                'regency_code' => 16,
            ),
            262 => 
            array (
                'id' => 263,
                'code' => 12,
                'name' => 'PAGINDAR',
                'province_code' => 12,
                'regency_code' => 16,
            ),
            263 => 
            array (
                'id' => 264,
                'code' => 13,
                'name' => 'SITELLU TALI URANG JULU',
                'province_code' => 12,
                'regency_code' => 16,
            ),
            264 => 
            array (
                'id' => 265,
                'code' => 14,
                'name' => 'PERGETTENG-GETTENG SENGKUT',
                'province_code' => 12,
                'regency_code' => 16,
            ),
            265 => 
            array (
                'id' => 266,
                'code' => 20,
                'name' => 'KERAJAAN',
                'province_code' => 12,
                'regency_code' => 16,
            ),
            266 => 
            array (
                'id' => 267,
                'code' => 21,
                'name' => 'TINADA',
                'province_code' => 12,
                'regency_code' => 16,
            ),
            267 => 
            array (
                'id' => 268,
                'code' => 22,
                'name' => 'SIEMPAT RUBE',
                'province_code' => 12,
                'regency_code' => 16,
            ),
            268 => 
            array (
                'id' => 269,
                'code' => 10,
                'name' => 'SIANJUR MULAMULA',
                'province_code' => 12,
                'regency_code' => 17,
            ),
            269 => 
            array (
                'id' => 270,
                'code' => 20,
                'name' => 'HARIAN',
                'province_code' => 12,
                'regency_code' => 17,
            ),
            270 => 
            array (
                'id' => 271,
                'code' => 30,
                'name' => 'SITIOTIO',
                'province_code' => 12,
                'regency_code' => 17,
            ),
            271 => 
            array (
                'id' => 272,
                'code' => 40,
                'name' => 'ONAN RUNGGU',
                'province_code' => 12,
                'regency_code' => 17,
            ),
            272 => 
            array (
                'id' => 273,
                'code' => 50,
                'name' => 'NAINGGOLAN',
                'province_code' => 12,
                'regency_code' => 17,
            ),
            273 => 
            array (
                'id' => 274,
                'code' => 60,
                'name' => 'PALIPI',
                'province_code' => 12,
                'regency_code' => 17,
            ),
            274 => 
            array (
                'id' => 275,
                'code' => 70,
                'name' => 'RONGGUR NIHUTA',
                'province_code' => 12,
                'regency_code' => 17,
            ),
            275 => 
            array (
                'id' => 276,
                'code' => 80,
                'name' => 'PANGURURAN',
                'province_code' => 12,
                'regency_code' => 17,
            ),
            276 => 
            array (
                'id' => 277,
                'code' => 90,
                'name' => 'SIMANINDO',
                'province_code' => 12,
                'regency_code' => 17,
            ),
            277 => 
            array (
                'id' => 278,
                'code' => 10,
                'name' => 'KOTARIH',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            278 => 
            array (
                'id' => 279,
                'code' => 11,
                'name' => 'SILINDA',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            279 => 
            array (
                'id' => 280,
                'code' => 12,
                'name' => 'BINTANG BAYU',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            280 => 
            array (
                'id' => 281,
                'code' => 20,
                'name' => 'DOLOK MASIHUL',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            281 => 
            array (
                'id' => 282,
                'code' => 21,
                'name' => 'SERBAJADI',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            282 => 
            array (
                'id' => 283,
                'code' => 30,
                'name' => 'SIPISPIS',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            283 => 
            array (
                'id' => 284,
                'code' => 40,
                'name' => 'DOLOK MERAWAN',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            284 => 
            array (
                'id' => 285,
                'code' => 50,
                'name' => 'TEBINGTINGGI',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            285 => 
            array (
                'id' => 286,
                'code' => 51,
                'name' => 'TEBING SYAHBANDAR',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            286 => 
            array (
                'id' => 287,
                'code' => 60,
                'name' => 'BANDAR KHALIPAH',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            287 => 
            array (
                'id' => 288,
                'code' => 70,
                'name' => 'TANJUNG BERINGIN',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            288 => 
            array (
                'id' => 289,
                'code' => 80,
                'name' => 'SEI RAMPAH',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            289 => 
            array (
                'id' => 290,
                'code' => 81,
                'name' => 'SEI BAMBAN',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            290 => 
            array (
                'id' => 291,
                'code' => 90,
                'name' => 'TELUK MENGKUDU',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            291 => 
            array (
                'id' => 292,
                'code' => 100,
                'name' => 'PERBAUNGAN',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            292 => 
            array (
                'id' => 293,
                'code' => 101,
                'name' => 'PEGAJAHAN',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            293 => 
            array (
                'id' => 294,
                'code' => 110,
                'name' => 'PANTAI CERMIN',
                'province_code' => 12,
                'regency_code' => 18,
            ),
            294 => 
            array (
                'id' => 295,
                'code' => 10,
                'name' => 'SEI BALAI',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            295 => 
            array (
                'id' => 296,
                'code' => 20,
                'name' => 'TANJUNG TIRAM',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            296 => 
            array (
                'id' => 297,
                'code' => 21,
                'name' => 'NIBUNG HANGUS',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            297 => 
            array (
                'id' => 298,
                'code' => 30,
                'name' => 'TALAWI',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            298 => 
            array (
                'id' => 299,
                'code' => 31,
                'name' => 'DATUK TANAH DATAR',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            299 => 
            array (
                'id' => 300,
                'code' => 40,
                'name' => 'LIMAPULUH',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            300 => 
            array (
                'id' => 301,
                'code' => 41,
                'name' => 'LIMA PULUH PESISIR',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            301 => 
            array (
                'id' => 302,
                'code' => 42,
                'name' => 'DATUK LIMA PULUH',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            302 => 
            array (
                'id' => 303,
                'code' => 50,
                'name' => 'AIR PUTIH',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            303 => 
            array (
                'id' => 304,
                'code' => 60,
                'name' => 'SEI SUKA',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            304 => 
            array (
                'id' => 305,
                'code' => 61,
                'name' => 'LAUT TADOR',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            305 => 
            array (
                'id' => 306,
                'code' => 70,
                'name' => 'MEDANG DERAS',
                'province_code' => 12,
                'regency_code' => 19,
            ),
            306 => 
            array (
                'id' => 307,
                'code' => 10,
                'name' => 'BATANG ONANG',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            307 => 
            array (
                'id' => 308,
                'code' => 20,
                'name' => 'PADANG BOLAK JULU',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            308 => 
            array (
                'id' => 309,
                'code' => 30,
                'name' => 'PORTIBI',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            309 => 
            array (
                'id' => 310,
                'code' => 40,
                'name' => 'PADANG BOLAK',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            310 => 
            array (
                'id' => 311,
                'code' => 41,
                'name' => 'PADANG BOLAK TENGGARA',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            311 => 
            array (
                'id' => 312,
                'code' => 50,
                'name' => 'SIMANGAMBAT',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            312 => 
            array (
                'id' => 313,
                'code' => 51,
                'name' => 'UJUNG BATU',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            313 => 
            array (
                'id' => 314,
                'code' => 60,
                'name' => 'HALONGONAN',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            314 => 
            array (
                'id' => 315,
                'code' => 61,
                'name' => 'HALONGONAN TIMUR',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            315 => 
            array (
                'id' => 316,
                'code' => 70,
                'name' => 'DOLOK',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            316 => 
            array (
                'id' => 317,
                'code' => 80,
                'name' => 'DOLOK SIGOMPULON',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            317 => 
            array (
                'id' => 318,
                'code' => 90,
                'name' => 'HULU SIHAPAS',
                'province_code' => 12,
                'regency_code' => 20,
            ),
            318 => 
            array (
                'id' => 319,
                'code' => 10,
                'name' => 'SOSOPAN',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            319 => 
            array (
                'id' => 320,
                'code' => 20,
                'name' => 'ULU BARUMUN',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            320 => 
            array (
                'id' => 321,
                'code' => 30,
                'name' => 'BARUMUN',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            321 => 
            array (
                'id' => 322,
                'code' => 31,
                'name' => 'BARUMUN SELATAN',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            322 => 
            array (
                'id' => 323,
                'code' => 32,
                'name' => 'BARUMUN BARU',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            323 => 
            array (
                'id' => 324,
                'code' => 40,
                'name' => 'LUBUK BARUMUN',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            324 => 
            array (
                'id' => 325,
                'code' => 50,
                'name' => 'SOSA',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            325 => 
            array (
                'id' => 326,
                'code' => 51,
                'name' => 'ULU SOSA',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            326 => 
            array (
                'id' => 327,
                'code' => 52,
                'name' => 'SOSA JULU',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            327 => 
            array (
                'id' => 328,
                'code' => 60,
                'name' => 'BATANG LUBU SUTAM',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            328 => 
            array (
                'id' => 329,
                'code' => 70,
                'name' => 'HUTA RAJA TINGGI',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            329 => 
            array (
                'id' => 330,
                'code' => 71,
                'name' => 'SOSA TIMUR',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            330 => 
            array (
                'id' => 331,
                'code' => 80,
                'name' => 'HURISTAK',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            331 => 
            array (
                'id' => 332,
                'code' => 90,
                'name' => 'BARUMUN TENGAH',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            332 => 
            array (
                'id' => 333,
                'code' => 91,
                'name' => 'AEK NABARA BARUMUN',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            333 => 
            array (
                'id' => 334,
                'code' => 92,
                'name' => 'SIHAPAS BARUMUN',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            334 => 
            array (
                'id' => 335,
                'code' => 93,
                'name' => 'BARUMUN BARAT',
                'province_code' => 12,
                'regency_code' => 21,
            ),
            335 => 
            array (
                'id' => 336,
                'code' => 10,
                'name' => 'SUNGAI KANAN',
                'province_code' => 12,
                'regency_code' => 22,
            ),
            336 => 
            array (
                'id' => 337,
                'code' => 20,
                'name' => 'TORGAMBA',
                'province_code' => 12,
                'regency_code' => 22,
            ),
            337 => 
            array (
                'id' => 338,
                'code' => 30,
                'name' => 'KOTA PINANG',
                'province_code' => 12,
                'regency_code' => 22,
            ),
            338 => 
            array (
                'id' => 339,
                'code' => 40,
                'name' => 'SILANGKITANG',
                'province_code' => 12,
                'regency_code' => 22,
            ),
            339 => 
            array (
                'id' => 340,
                'code' => 50,
                'name' => 'KAMPUNG RAKYAT',
                'province_code' => 12,
                'regency_code' => 22,
            ),
            340 => 
            array (
                'id' => 341,
                'code' => 10,
                'name' => 'NA IX-X',
                'province_code' => 12,
                'regency_code' => 23,
            ),
            341 => 
            array (
                'id' => 342,
                'code' => 20,
                'name' => 'MARBAU',
                'province_code' => 12,
                'regency_code' => 23,
            ),
            342 => 
            array (
                'id' => 343,
                'code' => 30,
                'name' => 'AEK KUO',
                'province_code' => 12,
                'regency_code' => 23,
            ),
            343 => 
            array (
                'id' => 344,
                'code' => 40,
                'name' => 'AEK NATAS',
                'province_code' => 12,
                'regency_code' => 23,
            ),
            344 => 
            array (
                'id' => 345,
                'code' => 50,
                'name' => 'KUALUH SELATAN',
                'province_code' => 12,
                'regency_code' => 23,
            ),
            345 => 
            array (
                'id' => 346,
                'code' => 60,
                'name' => 'KUALUH HILIR',
                'province_code' => 12,
                'regency_code' => 23,
            ),
            346 => 
            array (
                'id' => 347,
                'code' => 70,
                'name' => 'KUALUH HULU',
                'province_code' => 12,
                'regency_code' => 23,
            ),
            347 => 
            array (
                'id' => 348,
                'code' => 80,
                'name' => 'KUALUH LEIDONG',
                'province_code' => 12,
                'regency_code' => 23,
            ),
            348 => 
            array (
                'id' => 349,
                'code' => 10,
                'name' => 'TUGALA OYO',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            349 => 
            array (
                'id' => 350,
                'code' => 20,
                'name' => 'ALASA',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            350 => 
            array (
                'id' => 351,
                'code' => 30,
                'name' => 'ALASA TALU MUZOI',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            351 => 
            array (
                'id' => 352,
                'code' => 40,
                'name' => 'NAMOHALU ESIWA',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            352 => 
            array (
                'id' => 353,
                'code' => 50,
                'name' => 'SITOLU ORI',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            353 => 
            array (
                'id' => 354,
                'code' => 60,
                'name' => 'TUHEMBERUA',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            354 => 
            array (
                'id' => 355,
                'code' => 70,
                'name' => 'SAWO',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            355 => 
            array (
                'id' => 356,
                'code' => 80,
                'name' => 'LOTU',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            356 => 
            array (
                'id' => 357,
                'code' => 90,
                'name' => 'LAHEWA TIMUR',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            357 => 
            array (
                'id' => 358,
                'code' => 100,
                'name' => 'AFULU',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            358 => 
            array (
                'id' => 359,
                'code' => 110,
                'name' => 'LAHEWA',
                'province_code' => 12,
                'regency_code' => 24,
            ),
            359 => 
            array (
                'id' => 360,
                'code' => 10,
                'name' => 'SIROMBU',
                'province_code' => 12,
                'regency_code' => 25,
            ),
            360 => 
            array (
                'id' => 361,
                'code' => 20,
                'name' => 'LAHOMI',
                'province_code' => 12,
                'regency_code' => 25,
            ),
            361 => 
            array (
                'id' => 362,
                'code' => 30,
                'name' => 'ULU MORO O',
                'province_code' => 12,
                'regency_code' => 25,
            ),
            362 => 
            array (
                'id' => 363,
                'code' => 40,
                'name' => 'LOLOFITU MOI',
                'province_code' => 12,
                'regency_code' => 25,
            ),
            363 => 
            array (
                'id' => 364,
                'code' => 50,
                'name' => 'MANDREHE UTARA',
                'province_code' => 12,
                'regency_code' => 25,
            ),
            364 => 
            array (
                'id' => 365,
                'code' => 60,
                'name' => 'MANDREHE',
                'province_code' => 12,
                'regency_code' => 25,
            ),
            365 => 
            array (
                'id' => 366,
                'code' => 70,
                'name' => 'MANDREHE BARAT',
                'province_code' => 12,
                'regency_code' => 25,
            ),
            366 => 
            array (
                'id' => 367,
                'code' => 80,
                'name' => 'MORO O',
                'province_code' => 12,
                'regency_code' => 25,
            ),
            367 => 
            array (
                'id' => 368,
                'code' => 10,
                'name' => 'SIBOLGA UTARA',
                'province_code' => 12,
                'regency_code' => 71,
            ),
            368 => 
            array (
                'id' => 369,
                'code' => 20,
                'name' => 'SIBOLGA KOTA',
                'province_code' => 12,
                'regency_code' => 71,
            ),
            369 => 
            array (
                'id' => 370,
                'code' => 30,
                'name' => 'SIBOLGA SELATAN',
                'province_code' => 12,
                'regency_code' => 71,
            ),
            370 => 
            array (
                'id' => 371,
                'code' => 31,
                'name' => 'SIBOLGA SAMBAS',
                'province_code' => 12,
                'regency_code' => 71,
            ),
            371 => 
            array (
                'id' => 372,
                'code' => 10,
                'name' => 'DATUK BANDAR',
                'province_code' => 12,
                'regency_code' => 72,
            ),
            372 => 
            array (
                'id' => 373,
                'code' => 11,
                'name' => 'DATUK BANDAR TIMUR',
                'province_code' => 12,
                'regency_code' => 72,
            ),
            373 => 
            array (
                'id' => 374,
                'code' => 20,
                'name' => 'TANJUNG BALAI SELATAN',
                'province_code' => 12,
                'regency_code' => 72,
            ),
            374 => 
            array (
                'id' => 375,
                'code' => 30,
                'name' => 'TANJUNG BALAI UTARA',
                'province_code' => 12,
                'regency_code' => 72,
            ),
            375 => 
            array (
                'id' => 376,
                'code' => 40,
                'name' => 'SEI TUALANG RASO',
                'province_code' => 12,
                'regency_code' => 72,
            ),
            376 => 
            array (
                'id' => 377,
                'code' => 50,
                'name' => 'TELUK NIBUNG',
                'province_code' => 12,
                'regency_code' => 72,
            ),
            377 => 
            array (
                'id' => 378,
                'code' => 10,
                'name' => 'SIANTAR MARIHAT',
                'province_code' => 12,
                'regency_code' => 73,
            ),
            378 => 
            array (
                'id' => 379,
                'code' => 11,
                'name' => 'SIANTAR MARIMBUN',
                'province_code' => 12,
                'regency_code' => 73,
            ),
            379 => 
            array (
                'id' => 380,
                'code' => 20,
                'name' => 'SIANTAR SELATAN',
                'province_code' => 12,
                'regency_code' => 73,
            ),
            380 => 
            array (
                'id' => 381,
                'code' => 30,
                'name' => 'SIANTAR BARAT',
                'province_code' => 12,
                'regency_code' => 73,
            ),
            381 => 
            array (
                'id' => 382,
                'code' => 40,
                'name' => 'SIANTAR UTARA',
                'province_code' => 12,
                'regency_code' => 73,
            ),
            382 => 
            array (
                'id' => 383,
                'code' => 50,
                'name' => 'SIANTAR TIMUR',
                'province_code' => 12,
                'regency_code' => 73,
            ),
            383 => 
            array (
                'id' => 384,
                'code' => 60,
                'name' => 'SIANTAR MARTOBA',
                'province_code' => 12,
                'regency_code' => 73,
            ),
            384 => 
            array (
                'id' => 385,
                'code' => 61,
                'name' => 'SIANTAR SITALASARI',
                'province_code' => 12,
                'regency_code' => 73,
            ),
            385 => 
            array (
                'id' => 386,
                'code' => 10,
                'name' => 'PADANG HULU',
                'province_code' => 12,
                'regency_code' => 74,
            ),
            386 => 
            array (
                'id' => 387,
                'code' => 11,
                'name' => 'TEBING TINGGI KOTA',
                'province_code' => 12,
                'regency_code' => 74,
            ),
            387 => 
            array (
                'id' => 388,
                'code' => 20,
                'name' => 'RAMBUTAN',
                'province_code' => 12,
                'regency_code' => 74,
            ),
            388 => 
            array (
                'id' => 389,
                'code' => 21,
                'name' => 'BAJENIS',
                'province_code' => 12,
                'regency_code' => 74,
            ),
            389 => 
            array (
                'id' => 390,
                'code' => 30,
                'name' => 'PADANG HILIR',
                'province_code' => 12,
                'regency_code' => 74,
            ),
            390 => 
            array (
                'id' => 391,
                'code' => 10,
                'name' => 'MEDAN TUNTUNGAN',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            391 => 
            array (
                'id' => 392,
                'code' => 20,
                'name' => 'MEDAN JOHOR',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            392 => 
            array (
                'id' => 393,
                'code' => 30,
                'name' => 'MEDAN AMPLAS',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            393 => 
            array (
                'id' => 394,
                'code' => 40,
                'name' => 'MEDAN DENAI',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            394 => 
            array (
                'id' => 395,
                'code' => 50,
                'name' => 'MEDAN AREA',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            395 => 
            array (
                'id' => 396,
                'code' => 60,
                'name' => 'MEDAN KOTA',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            396 => 
            array (
                'id' => 397,
                'code' => 70,
                'name' => 'MEDAN MAIMUN',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            397 => 
            array (
                'id' => 398,
                'code' => 80,
                'name' => 'MEDAN POLONIA',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            398 => 
            array (
                'id' => 399,
                'code' => 90,
                'name' => 'MEDAN BARU',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            399 => 
            array (
                'id' => 400,
                'code' => 100,
                'name' => 'MEDAN SELAYANG',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            400 => 
            array (
                'id' => 401,
                'code' => 110,
                'name' => 'MEDAN SUNGGAL',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            401 => 
            array (
                'id' => 402,
                'code' => 120,
                'name' => 'MEDAN HELVETIA',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            402 => 
            array (
                'id' => 403,
                'code' => 130,
                'name' => 'MEDAN PETISAH',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            403 => 
            array (
                'id' => 404,
                'code' => 140,
                'name' => 'MEDAN BARAT',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            404 => 
            array (
                'id' => 405,
                'code' => 150,
                'name' => 'MEDAN TIMUR',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            405 => 
            array (
                'id' => 406,
                'code' => 160,
                'name' => 'MEDAN PERJUANGAN',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            406 => 
            array (
                'id' => 407,
                'code' => 170,
                'name' => 'MEDAN TEMBUNG',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            407 => 
            array (
                'id' => 408,
                'code' => 180,
                'name' => 'MEDAN DELI',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            408 => 
            array (
                'id' => 409,
                'code' => 190,
                'name' => 'MEDAN LABUHAN',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            409 => 
            array (
                'id' => 410,
                'code' => 200,
                'name' => 'MEDAN MARELAN',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            410 => 
            array (
                'id' => 411,
                'code' => 210,
                'name' => 'MEDAN BELAWAN',
                'province_code' => 12,
                'regency_code' => 75,
            ),
            411 => 
            array (
                'id' => 412,
                'code' => 10,
                'name' => 'BINJAI SELATAN',
                'province_code' => 12,
                'regency_code' => 76,
            ),
            412 => 
            array (
                'id' => 413,
                'code' => 20,
                'name' => 'BINJAI KOTA',
                'province_code' => 12,
                'regency_code' => 76,
            ),
            413 => 
            array (
                'id' => 414,
                'code' => 30,
                'name' => 'BINJAI TIMUR',
                'province_code' => 12,
                'regency_code' => 76,
            ),
            414 => 
            array (
                'id' => 415,
                'code' => 40,
                'name' => 'BINJAI UTARA',
                'province_code' => 12,
                'regency_code' => 76,
            ),
            415 => 
            array (
                'id' => 416,
                'code' => 50,
                'name' => 'BINJAI BARAT',
                'province_code' => 12,
                'regency_code' => 76,
            ),
            416 => 
            array (
                'id' => 417,
                'code' => 10,
                'name' => 'PADANGSIDIMPUAN TENGGARA',
                'province_code' => 12,
                'regency_code' => 77,
            ),
            417 => 
            array (
                'id' => 418,
                'code' => 20,
                'name' => 'PADANGSIDIMPUAN SELATAN',
                'province_code' => 12,
                'regency_code' => 77,
            ),
            418 => 
            array (
                'id' => 419,
                'code' => 30,
                'name' => 'PADANGSIDIMPUAN BATUNADUA',
                'province_code' => 12,
                'regency_code' => 77,
            ),
            419 => 
            array (
                'id' => 420,
                'code' => 40,
                'name' => 'PADANGSIDIMPUAN UTARA',
                'province_code' => 12,
                'regency_code' => 77,
            ),
            420 => 
            array (
                'id' => 421,
                'code' => 50,
                'name' => 'PADANGSIDIMPUAN HUTAIMBARU',
                'province_code' => 12,
                'regency_code' => 77,
            ),
            421 => 
            array (
                'id' => 422,
                'code' => 51,
                'name' => 'PADANGSIDIMPUAN ANGKOLA JULU',
                'province_code' => 12,
                'regency_code' => 77,
            ),
            422 => 
            array (
                'id' => 423,
                'code' => 10,
                'name' => 'GUNUNGSITOLI IDANOI',
                'province_code' => 12,
                'regency_code' => 78,
            ),
            423 => 
            array (
                'id' => 424,
                'code' => 20,
                'name' => 'GUNUNGSITOLI SELATAN',
                'province_code' => 12,
                'regency_code' => 78,
            ),
            424 => 
            array (
                'id' => 425,
                'code' => 30,
                'name' => 'GUNUNGSITOLI BARAT',
                'province_code' => 12,
                'regency_code' => 78,
            ),
            425 => 
            array (
                'id' => 426,
                'code' => 40,
                'name' => 'GUNUNG SITOLI',
                'province_code' => 12,
                'regency_code' => 78,
            ),
            426 => 
            array (
                'id' => 427,
                'code' => 50,
                'name' => 'GUNUNGSITOLI ALO OA',
                'province_code' => 12,
                'regency_code' => 78,
            ),
            427 => 
            array (
                'id' => 428,
                'code' => 60,
                'name' => 'GUNUNGSITOLI UTARA',
                'province_code' => 12,
                'regency_code' => 78,
            ),
            428 => 
            array (
                'id' => 429,
                'code' => 10,
                'name' => 'SANGIR',
                'province_code' => 13,
                'regency_code' => 10,
            ),
            429 => 
            array (
                'id' => 430,
                'code' => 20,
                'name' => 'SANGIR JUJUAN',
                'province_code' => 13,
                'regency_code' => 10,
            ),
            430 => 
            array (
                'id' => 431,
                'code' => 21,
                'name' => 'SANGIR BALAI JANGGO',
                'province_code' => 13,
                'regency_code' => 10,
            ),
            431 => 
            array (
                'id' => 432,
                'code' => 30,
                'name' => 'SANGIR BATANG HARI',
                'province_code' => 13,
                'regency_code' => 10,
            ),
            432 => 
            array (
                'id' => 433,
                'code' => 40,
                'name' => 'SUNGAI PAGU',
                'province_code' => 13,
                'regency_code' => 10,
            ),
            433 => 
            array (
                'id' => 434,
                'code' => 41,
                'name' => 'PAUAH DUO',
                'province_code' => 13,
                'regency_code' => 10,
            ),
            434 => 
            array (
                'id' => 435,
                'code' => 50,
                'name' => 'KOTO PARIK GADANG DIATEH',
                'province_code' => 13,
                'regency_code' => 10,
            ),
            435 => 
            array (
                'id' => 436,
                'code' => 10,
                'name' => 'SUNGAI RUMBAI',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            436 => 
            array (
                'id' => 437,
                'code' => 11,
                'name' => 'KOTO BESAR',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            437 => 
            array (
                'id' => 438,
                'code' => 12,
                'name' => 'ASAM JUJUHAN',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            438 => 
            array (
                'id' => 439,
                'code' => 20,
                'name' => 'KOTO BARU',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            439 => 
            array (
                'id' => 440,
                'code' => 21,
                'name' => 'KOTO SALAK',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            440 => 
            array (
                'id' => 441,
                'code' => 22,
                'name' => 'TIUMANG',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            441 => 
            array (
                'id' => 442,
                'code' => 23,
                'name' => 'PADANG LAWEH',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            442 => 
            array (
                'id' => 443,
                'code' => 30,
                'name' => 'SITIUNG',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            443 => 
            array (
                'id' => 444,
                'code' => 31,
                'name' => 'TIMPEH',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            444 => 
            array (
                'id' => 445,
                'code' => 40,
                'name' => 'PULAU PUNJUNG',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            445 => 
            array (
                'id' => 446,
                'code' => 41,
                'name' => 'IX KOTO',
                'province_code' => 13,
                'regency_code' => 11,
            ),
            446 => 
            array (
                'id' => 447,
                'code' => 10,
                'name' => 'SUNGAI BEREMAS',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            447 => 
            array (
                'id' => 448,
                'code' => 20,
                'name' => 'RANAH BATAHAN',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            448 => 
            array (
                'id' => 449,
                'code' => 30,
                'name' => 'KOTO BALINGKA',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            449 => 
            array (
                'id' => 450,
                'code' => 40,
                'name' => 'SUNGAI AUR',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            450 => 
            array (
                'id' => 451,
                'code' => 50,
                'name' => 'LEMBAH MELINTANG',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            451 => 
            array (
                'id' => 452,
                'code' => 60,
                'name' => 'GUNUNG TULEH',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            452 => 
            array (
                'id' => 453,
                'code' => 70,
                'name' => 'TALAMAU',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            453 => 
            array (
                'id' => 454,
                'code' => 80,
                'name' => 'PASAMAN',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            454 => 
            array (
                'id' => 455,
                'code' => 90,
                'name' => 'LUHAK NAN DUO',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            455 => 
            array (
                'id' => 456,
                'code' => 100,
                'name' => 'SASAK RANAH PASISIE',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            456 => 
            array (
                'id' => 457,
                'code' => 110,
                'name' => 'KINALI',
                'province_code' => 13,
                'regency_code' => 12,
            ),
            457 => 
            array (
                'id' => 458,
                'code' => 10,
                'name' => 'BUNGUS TELUK KABUNG',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            458 => 
            array (
                'id' => 459,
                'code' => 20,
                'name' => 'LUBUK KILANGAN',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            459 => 
            array (
                'id' => 460,
                'code' => 30,
                'name' => 'LUBUK BEGALUNG',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            460 => 
            array (
                'id' => 461,
                'code' => 40,
                'name' => 'PADANG SELATAN',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            461 => 
            array (
                'id' => 462,
                'code' => 50,
                'name' => 'PADANG TIMUR',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            462 => 
            array (
                'id' => 463,
                'code' => 60,
                'name' => 'PADANG BARAT',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            463 => 
            array (
                'id' => 464,
                'code' => 70,
                'name' => 'PADANG UTARA',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            464 => 
            array (
                'id' => 465,
                'code' => 80,
                'name' => 'NANGGALO',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            465 => 
            array (
                'id' => 466,
                'code' => 90,
                'name' => 'KURANJI',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            466 => 
            array (
                'id' => 467,
                'code' => 100,
                'name' => 'PAUH',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            467 => 
            array (
                'id' => 468,
                'code' => 110,
                'name' => 'KOTO TANGAH',
                'province_code' => 13,
                'regency_code' => 71,
            ),
            468 => 
            array (
                'id' => 469,
                'code' => 10,
                'name' => 'LUBUK SIKARAH',
                'province_code' => 13,
                'regency_code' => 72,
            ),
            469 => 
            array (
                'id' => 470,
                'code' => 20,
                'name' => 'TANJUNG HARAPAN',
                'province_code' => 13,
                'regency_code' => 72,
            ),
            470 => 
            array (
                'id' => 471,
                'code' => 10,
                'name' => 'SILUNGKANG',
                'province_code' => 13,
                'regency_code' => 73,
            ),
            471 => 
            array (
                'id' => 472,
                'code' => 20,
                'name' => 'LEMBAH SEGAR',
                'province_code' => 13,
                'regency_code' => 73,
            ),
            472 => 
            array (
                'id' => 473,
                'code' => 30,
                'name' => 'BARANGIN',
                'province_code' => 13,
                'regency_code' => 73,
            ),
            473 => 
            array (
                'id' => 474,
                'code' => 40,
                'name' => 'TALAWI',
                'province_code' => 13,
                'regency_code' => 73,
            ),
            474 => 
            array (
                'id' => 475,
                'code' => 10,
                'name' => 'PADANG PANJANG BARAT',
                'province_code' => 13,
                'regency_code' => 74,
            ),
            475 => 
            array (
                'id' => 476,
                'code' => 20,
                'name' => 'PADANG PANJANG TIMUR',
                'province_code' => 13,
                'regency_code' => 74,
            ),
            476 => 
            array (
                'id' => 477,
                'code' => 10,
                'name' => 'GUGUK PANJANG',
                'province_code' => 13,
                'regency_code' => 75,
            ),
            477 => 
            array (
                'id' => 478,
                'code' => 20,
                'name' => 'MANDIANGIN KOTO SELAYAN',
                'province_code' => 13,
                'regency_code' => 75,
            ),
            478 => 
            array (
                'id' => 479,
                'code' => 30,
                'name' => 'AUR BIRUGO TIGO BALEH',
                'province_code' => 13,
                'regency_code' => 75,
            ),
            479 => 
            array (
                'id' => 480,
                'code' => 10,
                'name' => 'PAYAKUMBUH BARAT',
                'province_code' => 13,
                'regency_code' => 76,
            ),
            480 => 
            array (
                'id' => 481,
                'code' => 11,
                'name' => 'PAYAKUMBUH SELATAN',
                'province_code' => 13,
                'regency_code' => 76,
            ),
            481 => 
            array (
                'id' => 482,
                'code' => 20,
                'name' => 'PAYAKUMBUH TIMUR',
                'province_code' => 13,
                'regency_code' => 76,
            ),
            482 => 
            array (
                'id' => 483,
                'code' => 30,
                'name' => 'PAYAKUMBUH UTARA',
                'province_code' => 13,
                'regency_code' => 76,
            ),
            483 => 
            array (
                'id' => 484,
                'code' => 31,
                'name' => 'LAMPOSI TIGO NAGORI',
                'province_code' => 13,
                'regency_code' => 76,
            ),
            484 => 
            array (
                'id' => 485,
                'code' => 10,
                'name' => 'PARIAMAN SELATAN',
                'province_code' => 13,
                'regency_code' => 77,
            ),
            485 => 
            array (
                'id' => 486,
                'code' => 20,
                'name' => 'PARIAMAN TENGAH',
                'province_code' => 13,
                'regency_code' => 77,
            ),
            486 => 
            array (
                'id' => 487,
                'code' => 21,
                'name' => 'PARIAMAN TIMUR',
                'province_code' => 13,
                'regency_code' => 77,
            ),
            487 => 
            array (
                'id' => 488,
                'code' => 30,
                'name' => 'PARIAMAN UTARA',
                'province_code' => 13,
                'regency_code' => 77,
            ),
            488 => 
            array (
                'id' => 489,
                'code' => 10,
                'name' => 'TEBING TINGGI BARAT',
                'province_code' => 14,
                'regency_code' => 10,
            ),
            489 => 
            array (
                'id' => 490,
                'code' => 20,
                'name' => 'TEBING TINGGI',
                'province_code' => 14,
                'regency_code' => 10,
            ),
            490 => 
            array (
                'id' => 491,
                'code' => 21,
                'name' => 'TEBING TINGGI TIMUR',
                'province_code' => 14,
                'regency_code' => 10,
            ),
            491 => 
            array (
                'id' => 492,
                'code' => 30,
                'name' => 'RANGSANG',
                'province_code' => 14,
                'regency_code' => 10,
            ),
            492 => 
            array (
                'id' => 493,
                'code' => 31,
                'name' => 'RANGSANG PESISIR',
                'province_code' => 14,
                'regency_code' => 10,
            ),
            493 => 
            array (
                'id' => 494,
                'code' => 40,
                'name' => 'RANGSANG BARAT',
                'province_code' => 14,
                'regency_code' => 10,
            ),
            494 => 
            array (
                'id' => 495,
                'code' => 50,
                'name' => 'MERBAU',
                'province_code' => 14,
                'regency_code' => 10,
            ),
            495 => 
            array (
                'id' => 496,
                'code' => 51,
                'name' => 'PULAU MERBAU',
                'province_code' => 14,
                'regency_code' => 10,
            ),
            496 => 
            array (
                'id' => 497,
                'code' => 52,
                'name' => 'TASIK PUTRI PUYU',
                'province_code' => 14,
                'regency_code' => 10,
            ),
            497 => 
            array (
                'id' => 498,
                'code' => 10,
                'name' => 'TAMPAN',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            498 => 
            array (
                'id' => 499,
                'code' => 11,
                'name' => 'PAYUNG SEKAKI',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            499 => 
            array (
                'id' => 500,
                'code' => 20,
                'name' => 'BUKIT RAYA',
                'province_code' => 14,
                'regency_code' => 71,
            ),
        ));
        DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 501,
                'code' => 21,
                'name' => 'MARPOYAN DAMAI',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            1 => 
            array (
                'id' => 502,
                'code' => 22,
                'name' => 'TENAYAN RAYA',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            2 => 
            array (
                'id' => 503,
                'code' => 30,
                'name' => 'LIMAPULUH',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            3 => 
            array (
                'id' => 504,
                'code' => 40,
                'name' => 'SAIL',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            4 => 
            array (
                'id' => 505,
                'code' => 50,
                'name' => 'PEKANBARU KOTA',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            5 => 
            array (
                'id' => 506,
                'code' => 60,
                'name' => 'SUKAJADI',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            6 => 
            array (
                'id' => 507,
                'code' => 70,
                'name' => 'SENAPELAN',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            7 => 
            array (
                'id' => 508,
                'code' => 80,
                'name' => 'RUMBAI',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            8 => 
            array (
                'id' => 509,
                'code' => 81,
                'name' => 'RUMBAI PESISIR',
                'province_code' => 14,
                'regency_code' => 71,
            ),
            9 => 
            array (
                'id' => 510,
                'code' => 10,
                'name' => 'BUKIT KAPUR',
                'province_code' => 14,
                'regency_code' => 73,
            ),
            10 => 
            array (
                'id' => 511,
                'code' => 11,
                'name' => 'MEDANG KAMPAI',
                'province_code' => 14,
                'regency_code' => 73,
            ),
            11 => 
            array (
                'id' => 512,
                'code' => 12,
                'name' => 'SUNGAI SEMBILAN',
                'province_code' => 14,
                'regency_code' => 73,
            ),
            12 => 
            array (
                'id' => 513,
                'code' => 20,
                'name' => 'DUMAI BARAT',
                'province_code' => 14,
                'regency_code' => 73,
            ),
            13 => 
            array (
                'id' => 514,
                'code' => 21,
                'name' => 'DUMAI SELATAN',
                'province_code' => 14,
                'regency_code' => 73,
            ),
            14 => 
            array (
                'id' => 515,
                'code' => 30,
                'name' => 'DUMAI TIMUR',
                'province_code' => 14,
                'regency_code' => 73,
            ),
            15 => 
            array (
                'id' => 516,
                'code' => 31,
                'name' => 'DUMAI KOTA',
                'province_code' => 14,
                'regency_code' => 73,
            ),
            16 => 
            array (
                'id' => 517,
                'code' => 10,
                'name' => 'KOTA BARU',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            17 => 
            array (
                'id' => 518,
                'code' => 11,
                'name' => 'ALAM BARAJO',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            18 => 
            array (
                'id' => 519,
                'code' => 20,
                'name' => 'JAMBI SELATAN',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            19 => 
            array (
                'id' => 520,
                'code' => 21,
                'name' => 'PAAL MERAH',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            20 => 
            array (
                'id' => 521,
                'code' => 30,
                'name' => 'JELUTUNG',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            21 => 
            array (
                'id' => 522,
                'code' => 40,
                'name' => 'PASAR JAMBI',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            22 => 
            array (
                'id' => 523,
                'code' => 50,
                'name' => 'TELANAIPURA',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            23 => 
            array (
                'id' => 524,
                'code' => 51,
                'name' => 'DANAU SIPIN',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            24 => 
            array (
                'id' => 525,
                'code' => 60,
                'name' => 'DANAU TELUK',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            25 => 
            array (
                'id' => 526,
                'code' => 70,
                'name' => 'PELAYANGAN',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            26 => 
            array (
                'id' => 527,
                'code' => 80,
                'name' => 'JAMBI TIMUR',
                'province_code' => 15,
                'regency_code' => 71,
            ),
            27 => 
            array (
                'id' => 528,
                'code' => 10,
                'name' => 'TANAH KAMPUNG',
                'province_code' => 15,
                'regency_code' => 72,
            ),
            28 => 
            array (
                'id' => 529,
                'code' => 20,
                'name' => 'KUMUN DEBAI',
                'province_code' => 15,
                'regency_code' => 72,
            ),
            29 => 
            array (
                'id' => 530,
                'code' => 30,
                'name' => 'SUNGAI PENUH',
                'province_code' => 15,
                'regency_code' => 72,
            ),
            30 => 
            array (
                'id' => 531,
                'code' => 31,
                'name' => 'PONDOK TINGGI',
                'province_code' => 15,
                'regency_code' => 72,
            ),
            31 => 
            array (
                'id' => 532,
                'code' => 32,
                'name' => 'SUNGAI BUNGKAL',
                'province_code' => 15,
                'regency_code' => 72,
            ),
            32 => 
            array (
                'id' => 533,
                'code' => 40,
                'name' => 'HAMPARAN RAWANG',
                'province_code' => 15,
                'regency_code' => 72,
            ),
            33 => 
            array (
                'id' => 534,
                'code' => 50,
                'name' => 'PESISIR BUKIT',
                'province_code' => 15,
                'regency_code' => 72,
            ),
            34 => 
            array (
                'id' => 535,
                'code' => 51,
                'name' => 'KOTO BARU',
                'province_code' => 15,
                'regency_code' => 72,
            ),
            35 => 
            array (
                'id' => 536,
                'code' => 10,
                'name' => 'MUARA KUANG',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            36 => 
            array (
                'id' => 537,
                'code' => 11,
                'name' => 'RAMBANG KUANG',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            37 => 
            array (
                'id' => 538,
                'code' => 12,
                'name' => 'LUBUK KELIAT',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            38 => 
            array (
                'id' => 539,
                'code' => 20,
                'name' => 'TANJUNG BATU',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            39 => 
            array (
                'id' => 540,
                'code' => 21,
                'name' => 'PAYARAMAN',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            40 => 
            array (
                'id' => 541,
                'code' => 30,
                'name' => 'RANTAU ALAI',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            41 => 
            array (
                'id' => 542,
                'code' => 31,
                'name' => 'KANDIS',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            42 => 
            array (
                'id' => 543,
                'code' => 40,
                'name' => 'TANJUNG RAJA',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            43 => 
            array (
                'id' => 544,
                'code' => 41,
                'name' => 'RANTAU PANJANG',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            44 => 
            array (
                'id' => 545,
                'code' => 42,
                'name' => 'SUNGAI PINANG',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            45 => 
            array (
                'id' => 546,
                'code' => 50,
                'name' => 'PEMULUTAN',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            46 => 
            array (
                'id' => 547,
                'code' => 51,
                'name' => 'PEMULUTAN SELATAN',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            47 => 
            array (
                'id' => 548,
                'code' => 52,
                'name' => 'PEMULUTAN BARAT',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            48 => 
            array (
                'id' => 549,
                'code' => 60,
                'name' => 'INDRALAYA',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            49 => 
            array (
                'id' => 550,
                'code' => 61,
                'name' => 'INDRALAYA UTARA',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            50 => 
            array (
                'id' => 551,
                'code' => 62,
                'name' => 'INDRALAYA SELATAN',
                'province_code' => 16,
                'regency_code' => 10,
            ),
            51 => 
            array (
                'id' => 552,
                'code' => 10,
                'name' => 'MUARA PINANG',
                'province_code' => 16,
                'regency_code' => 11,
            ),
            52 => 
            array (
                'id' => 553,
                'code' => 20,
                'name' => 'LINTANG KANAN',
                'province_code' => 16,
                'regency_code' => 11,
            ),
            53 => 
            array (
                'id' => 554,
                'code' => 30,
                'name' => 'PENDOPO',
                'province_code' => 16,
                'regency_code' => 11,
            ),
            54 => 
            array (
                'id' => 555,
                'code' => 31,
                'name' => 'PENDOPO BARAT',
                'province_code' => 16,
                'regency_code' => 11,
            ),
            55 => 
            array (
                'id' => 556,
                'code' => 40,
                'name' => 'PASEMAH AIR KERUH',
                'province_code' => 16,
                'regency_code' => 11,
            ),
            56 => 
            array (
                'id' => 557,
                'code' => 50,
                'name' => 'ULU MUSI',
                'province_code' => 16,
                'regency_code' => 11,
            ),
            57 => 
            array (
                'id' => 558,
                'code' => 51,
                'name' => 'SIKAP DALAM',
                'province_code' => 16,
                'regency_code' => 11,
            ),
            58 => 
            array (
                'id' => 559,
                'code' => 60,
                'name' => 'TALANG PADANG',
                'province_code' => 16,
                'regency_code' => 11,
            ),
            59 => 
            array (
                'id' => 560,
                'code' => 70,
                'name' => 'TEBING TINGGI',
                'province_code' => 16,
                'regency_code' => 11,
            ),
            60 => 
            array (
                'id' => 561,
                'code' => 71,
                'name' => 'SALING',
                'province_code' => 16,
                'regency_code' => 11,
            ),
            61 => 
            array (
                'id' => 562,
                'code' => 10,
                'name' => 'TALANG UBI',
                'province_code' => 16,
                'regency_code' => 12,
            ),
            62 => 
            array (
                'id' => 563,
                'code' => 20,
                'name' => 'TANAH ABANG',
                'province_code' => 16,
                'regency_code' => 12,
            ),
            63 => 
            array (
                'id' => 564,
                'code' => 30,
                'name' => 'ABAB',
                'province_code' => 16,
                'regency_code' => 12,
            ),
            64 => 
            array (
                'id' => 565,
                'code' => 40,
                'name' => 'PENUKAL',
                'province_code' => 16,
                'regency_code' => 12,
            ),
            65 => 
            array (
                'id' => 566,
                'code' => 50,
                'name' => 'PENUKAL UTARA',
                'province_code' => 16,
                'regency_code' => 12,
            ),
            66 => 
            array (
                'id' => 567,
                'code' => 10,
                'name' => 'ULU RAWAS',
                'province_code' => 16,
                'regency_code' => 13,
            ),
            67 => 
            array (
                'id' => 568,
                'code' => 20,
                'name' => 'KARANG JAYA',
                'province_code' => 16,
                'regency_code' => 13,
            ),
            68 => 
            array (
                'id' => 569,
                'code' => 30,
                'name' => 'RAWAS ULU',
                'province_code' => 16,
                'regency_code' => 13,
            ),
            69 => 
            array (
                'id' => 570,
                'code' => 40,
                'name' => 'RUPIT',
                'province_code' => 16,
                'regency_code' => 13,
            ),
            70 => 
            array (
                'id' => 571,
                'code' => 50,
                'name' => 'KARANG DAPO',
                'province_code' => 16,
                'regency_code' => 13,
            ),
            71 => 
            array (
                'id' => 572,
                'code' => 60,
                'name' => 'RAWAS ILIR',
                'province_code' => 16,
                'regency_code' => 13,
            ),
            72 => 
            array (
                'id' => 573,
                'code' => 70,
                'name' => 'NIBUNG',
                'province_code' => 16,
                'regency_code' => 13,
            ),
            73 => 
            array (
                'id' => 574,
                'code' => 10,
                'name' => 'ILIR BARAT DUA',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            74 => 
            array (
                'id' => 575,
                'code' => 11,
                'name' => 'GANDUS',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            75 => 
            array (
                'id' => 576,
                'code' => 20,
                'name' => 'SEBERANG ULU SATU',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            76 => 
            array (
                'id' => 577,
                'code' => 21,
                'name' => 'KERTAPATI',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            77 => 
            array (
                'id' => 578,
                'code' => 22,
                'name' => 'JAKABARING',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            78 => 
            array (
                'id' => 579,
                'code' => 30,
                'name' => 'SEBERANG ULU DUA',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            79 => 
            array (
                'id' => 580,
                'code' => 31,
                'name' => 'PLAJU',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            80 => 
            array (
                'id' => 581,
                'code' => 40,
                'name' => 'ILIR BARAT SATU',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            81 => 
            array (
                'id' => 582,
                'code' => 41,
                'name' => 'BUKITKECIL',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            82 => 
            array (
                'id' => 583,
                'code' => 50,
                'name' => 'ILIR TIMUR SATU',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            83 => 
            array (
                'id' => 584,
                'code' => 51,
                'name' => 'KEMUNING',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            84 => 
            array (
                'id' => 585,
                'code' => 60,
                'name' => 'ILIR TIMUR DUA',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            85 => 
            array (
                'id' => 586,
                'code' => 61,
                'name' => 'KALIDONI',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            86 => 
            array (
                'id' => 587,
                'code' => 62,
                'name' => 'ILIR TIMUR TIGA',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            87 => 
            array (
                'id' => 588,
                'code' => 70,
                'name' => 'SAKO',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            88 => 
            array (
                'id' => 589,
                'code' => 71,
                'name' => 'SEMATANGBORANG',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            89 => 
            array (
                'id' => 590,
                'code' => 80,
                'name' => 'SUKARAMI',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            90 => 
            array (
                'id' => 591,
                'code' => 81,
                'name' => 'ALANG-ALANG LEBAR',
                'province_code' => 16,
                'regency_code' => 71,
            ),
            91 => 
            array (
                'id' => 592,
                'code' => 10,
                'name' => 'RAMBANG KAPAK TENGAH',
                'province_code' => 16,
                'regency_code' => 72,
            ),
            92 => 
            array (
                'id' => 593,
                'code' => 20,
                'name' => 'PRABUMULIH TIMUR',
                'province_code' => 16,
                'regency_code' => 72,
            ),
            93 => 
            array (
                'id' => 594,
                'code' => 21,
                'name' => 'PRABUMULIH SELATAN',
                'province_code' => 16,
                'regency_code' => 72,
            ),
            94 => 
            array (
                'id' => 595,
                'code' => 30,
                'name' => 'PRABUMULIH BARAT',
                'province_code' => 16,
                'regency_code' => 72,
            ),
            95 => 
            array (
                'id' => 596,
                'code' => 31,
                'name' => 'PRABUMULIH UTARA',
                'province_code' => 16,
                'regency_code' => 72,
            ),
            96 => 
            array (
                'id' => 597,
                'code' => 40,
                'name' => 'CAMBAI',
                'province_code' => 16,
                'regency_code' => 72,
            ),
            97 => 
            array (
                'id' => 598,
                'code' => 10,
                'name' => 'DEMPO SELATAN',
                'province_code' => 16,
                'regency_code' => 73,
            ),
            98 => 
            array (
                'id' => 599,
                'code' => 11,
                'name' => 'DEMPO TENGAH',
                'province_code' => 16,
                'regency_code' => 73,
            ),
            99 => 
            array (
                'id' => 600,
                'code' => 20,
                'name' => 'DEMPO UTARA',
                'province_code' => 16,
                'regency_code' => 73,
            ),
            100 => 
            array (
                'id' => 601,
                'code' => 30,
                'name' => 'PAGAR ALAM SELATAN',
                'province_code' => 16,
                'regency_code' => 73,
            ),
            101 => 
            array (
                'id' => 602,
                'code' => 40,
                'name' => 'PAGAR ALAM UTARA',
                'province_code' => 16,
                'regency_code' => 73,
            ),
            102 => 
            array (
                'id' => 603,
                'code' => 11,
                'name' => 'LUBUK LINGGAU BARAT I',
                'province_code' => 16,
                'regency_code' => 74,
            ),
            103 => 
            array (
                'id' => 604,
                'code' => 12,
                'name' => 'LUBUK LINGGAU BARAT II',
                'province_code' => 16,
                'regency_code' => 74,
            ),
            104 => 
            array (
                'id' => 605,
                'code' => 21,
                'name' => 'LUBUK LINGGAU SELATAN I',
                'province_code' => 16,
                'regency_code' => 74,
            ),
            105 => 
            array (
                'id' => 606,
                'code' => 22,
                'name' => 'LUBUK LINGGAU SELATAN II',
                'province_code' => 16,
                'regency_code' => 74,
            ),
            106 => 
            array (
                'id' => 607,
                'code' => 31,
                'name' => 'LUBUK LINGGAU TIMUR I',
                'province_code' => 16,
                'regency_code' => 74,
            ),
            107 => 
            array (
                'id' => 608,
                'code' => 32,
                'name' => 'LUBUK LINGGAU TIMUR II',
                'province_code' => 16,
                'regency_code' => 74,
            ),
            108 => 
            array (
                'id' => 609,
                'code' => 41,
                'name' => 'LUBUK LINGGAU UTARA I',
                'province_code' => 16,
                'regency_code' => 74,
            ),
            109 => 
            array (
                'id' => 610,
                'code' => 42,
                'name' => 'LUBUK LINGGAU UTARA II',
                'province_code' => 16,
                'regency_code' => 74,
            ),
            110 => 
            array (
                'id' => 611,
                'code' => 10,
                'name' => 'SELEBAR',
                'province_code' => 17,
                'regency_code' => 71,
            ),
            111 => 
            array (
                'id' => 612,
                'code' => 11,
                'name' => 'KAMPUNG MELAYU',
                'province_code' => 17,
                'regency_code' => 71,
            ),
            112 => 
            array (
                'id' => 613,
                'code' => 20,
                'name' => 'GADING CEMPAKA',
                'province_code' => 17,
                'regency_code' => 71,
            ),
            113 => 
            array (
                'id' => 614,
                'code' => 21,
                'name' => 'RATU AGUNG',
                'province_code' => 17,
                'regency_code' => 71,
            ),
            114 => 
            array (
                'id' => 615,
                'code' => 22,
                'name' => 'RATU SAMBAN',
                'province_code' => 17,
                'regency_code' => 71,
            ),
            115 => 
            array (
                'id' => 616,
                'code' => 23,
                'name' => 'SINGARAN PATI',
                'province_code' => 17,
                'regency_code' => 71,
            ),
            116 => 
            array (
                'id' => 617,
                'code' => 30,
                'name' => 'TELUK SEGARA',
                'province_code' => 17,
                'regency_code' => 71,
            ),
            117 => 
            array (
                'id' => 618,
                'code' => 31,
                'name' => 'SUNGAI SERUT',
                'province_code' => 17,
                'regency_code' => 71,
            ),
            118 => 
            array (
                'id' => 619,
                'code' => 40,
                'name' => 'MUARA BANGKA HULU',
                'province_code' => 17,
                'regency_code' => 71,
            ),
            119 => 
            array (
                'id' => 620,
                'code' => 10,
                'name' => 'PARDASUKA',
                'province_code' => 18,
                'regency_code' => 10,
            ),
            120 => 
            array (
                'id' => 621,
                'code' => 20,
                'name' => 'AMBARAWA',
                'province_code' => 18,
                'regency_code' => 10,
            ),
            121 => 
            array (
                'id' => 622,
                'code' => 30,
                'name' => 'PAGELARAN',
                'province_code' => 18,
                'regency_code' => 10,
            ),
            122 => 
            array (
                'id' => 623,
                'code' => 31,
                'name' => 'PAGELARAN UTARA',
                'province_code' => 18,
                'regency_code' => 10,
            ),
            123 => 
            array (
                'id' => 624,
                'code' => 40,
                'name' => 'PRINGSEWU',
                'province_code' => 18,
                'regency_code' => 10,
            ),
            124 => 
            array (
                'id' => 625,
                'code' => 50,
                'name' => 'GADING REJO',
                'province_code' => 18,
                'regency_code' => 10,
            ),
            125 => 
            array (
                'id' => 626,
                'code' => 60,
                'name' => 'SUKOHARJO',
                'province_code' => 18,
                'regency_code' => 10,
            ),
            126 => 
            array (
                'id' => 627,
                'code' => 70,
                'name' => 'BANYUMAS',
                'province_code' => 18,
                'regency_code' => 10,
            ),
            127 => 
            array (
                'id' => 628,
                'code' => 80,
                'name' => 'ADI LUWIH',
                'province_code' => 18,
                'regency_code' => 10,
            ),
            128 => 
            array (
                'id' => 629,
                'code' => 10,
                'name' => 'WAY SERDANG',
                'province_code' => 18,
                'regency_code' => 11,
            ),
            129 => 
            array (
                'id' => 630,
                'code' => 20,
                'name' => 'SIMPANG PEMATANG',
                'province_code' => 18,
                'regency_code' => 11,
            ),
            130 => 
            array (
                'id' => 631,
                'code' => 30,
                'name' => 'PANCA JAYA',
                'province_code' => 18,
                'regency_code' => 11,
            ),
            131 => 
            array (
                'id' => 632,
                'code' => 40,
                'name' => 'TANJUNG RAYA',
                'province_code' => 18,
                'regency_code' => 11,
            ),
            132 => 
            array (
                'id' => 633,
                'code' => 50,
                'name' => 'MESUJI',
                'province_code' => 18,
                'regency_code' => 11,
            ),
            133 => 
            array (
                'id' => 634,
                'code' => 60,
                'name' => 'MESUJI TIMUR',
                'province_code' => 18,
                'regency_code' => 11,
            ),
            134 => 
            array (
                'id' => 635,
                'code' => 70,
                'name' => 'RAWAJITU UTARA',
                'province_code' => 18,
                'regency_code' => 11,
            ),
            135 => 
            array (
                'id' => 636,
                'code' => 10,
                'name' => 'TULANG BAWANG UDIK',
                'province_code' => 18,
                'regency_code' => 12,
            ),
            136 => 
            array (
                'id' => 637,
                'code' => 20,
                'name' => 'TUMI JAJAR',
                'province_code' => 18,
                'regency_code' => 12,
            ),
            137 => 
            array (
                'id' => 638,
                'code' => 30,
                'name' => 'TULANG BAWANG TENGAH',
                'province_code' => 18,
                'regency_code' => 12,
            ),
            138 => 
            array (
                'id' => 639,
                'code' => 40,
                'name' => 'PAGAR DEWA',
                'province_code' => 18,
                'regency_code' => 12,
            ),
            139 => 
            array (
                'id' => 640,
                'code' => 50,
                'name' => 'LAMBU KIBANG',
                'province_code' => 18,
                'regency_code' => 12,
            ),
            140 => 
            array (
                'id' => 641,
                'code' => 60,
                'name' => 'GUNUNG TERANG',
                'province_code' => 18,
                'regency_code' => 12,
            ),
            141 => 
            array (
                'id' => 642,
                'code' => 61,
                'name' => 'BATU PUTIH',
                'province_code' => 18,
                'regency_code' => 12,
            ),
            142 => 
            array (
                'id' => 643,
                'code' => 70,
                'name' => 'GUNUNG AGUNG',
                'province_code' => 18,
                'regency_code' => 12,
            ),
            143 => 
            array (
                'id' => 644,
                'code' => 80,
                'name' => 'WAY KENANGA',
                'province_code' => 18,
                'regency_code' => 12,
            ),
            144 => 
            array (
                'id' => 645,
                'code' => 10,
                'name' => 'LEMONG',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            145 => 
            array (
                'id' => 646,
                'code' => 20,
                'name' => 'PESISIR UTARA',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            146 => 
            array (
                'id' => 647,
                'code' => 30,
                'name' => 'PULAU PISANG',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            147 => 
            array (
                'id' => 648,
                'code' => 40,
                'name' => 'KARYA PENGGAWA',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            148 => 
            array (
                'id' => 649,
                'code' => 50,
                'name' => 'WAY KRUI',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            149 => 
            array (
                'id' => 650,
                'code' => 60,
                'name' => 'PESISIR TENGAH',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            150 => 
            array (
                'id' => 651,
                'code' => 70,
                'name' => 'KRUI SELATAN',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            151 => 
            array (
                'id' => 652,
                'code' => 80,
                'name' => 'PESISIR SELATAN',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            152 => 
            array (
                'id' => 653,
                'code' => 90,
                'name' => 'NGAMBUR',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            153 => 
            array (
                'id' => 654,
                'code' => 100,
                'name' => 'NGARAS',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            154 => 
            array (
                'id' => 655,
                'code' => 110,
                'name' => 'BANGKUNAT',
                'province_code' => 18,
                'regency_code' => 13,
            ),
            155 => 
            array (
                'id' => 656,
                'code' => 10,
                'name' => 'TELUK BETUNG BARAT',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            156 => 
            array (
                'id' => 657,
                'code' => 11,
                'name' => 'TELUKBETUNG TIMUR',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            157 => 
            array (
                'id' => 658,
                'code' => 20,
                'name' => 'TELUK BETUNG SELATAN',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            158 => 
            array (
                'id' => 659,
                'code' => 21,
                'name' => 'BUMI WARAS',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            159 => 
            array (
                'id' => 660,
                'code' => 30,
                'name' => 'PANJANG',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            160 => 
            array (
                'id' => 661,
                'code' => 40,
                'name' => 'TANJUNG KARANG TIMUR',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            161 => 
            array (
                'id' => 662,
                'code' => 41,
                'name' => 'KEDAMAIAN',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            162 => 
            array (
                'id' => 663,
                'code' => 50,
                'name' => 'TELUK BETUNG UTARA',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            163 => 
            array (
                'id' => 664,
                'code' => 60,
                'name' => 'TANJUNG KARANG PUSAT',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            164 => 
            array (
                'id' => 665,
                'code' => 61,
                'name' => 'ENGGAL',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            165 => 
            array (
                'id' => 666,
                'code' => 70,
                'name' => 'TANJUNG KARANG BARAT',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            166 => 
            array (
                'id' => 667,
                'code' => 71,
                'name' => 'KEMILING',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            167 => 
            array (
                'id' => 668,
                'code' => 72,
                'name' => 'LANGKAPURA',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            168 => 
            array (
                'id' => 669,
                'code' => 80,
                'name' => 'KEDATON',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            169 => 
            array (
                'id' => 670,
                'code' => 81,
                'name' => 'RAJABASA',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            170 => 
            array (
                'id' => 671,
                'code' => 82,
                'name' => 'TANJUNG SENANG',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            171 => 
            array (
                'id' => 672,
                'code' => 83,
                'name' => 'LABUHAN RATU',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            172 => 
            array (
                'id' => 673,
                'code' => 90,
                'name' => 'SUKARAME',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            173 => 
            array (
                'id' => 674,
                'code' => 91,
                'name' => 'SUKABUMI',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            174 => 
            array (
                'id' => 675,
                'code' => 92,
                'name' => 'WAY HALIM',
                'province_code' => 18,
                'regency_code' => 71,
            ),
            175 => 
            array (
                'id' => 676,
                'code' => 11,
                'name' => 'METRO SELATAN',
                'province_code' => 18,
                'regency_code' => 72,
            ),
            176 => 
            array (
                'id' => 677,
                'code' => 12,
                'name' => 'METRO BARAT',
                'province_code' => 18,
                'regency_code' => 72,
            ),
            177 => 
            array (
                'id' => 678,
                'code' => 21,
                'name' => 'METRO TIMUR',
                'province_code' => 18,
                'regency_code' => 72,
            ),
            178 => 
            array (
                'id' => 679,
                'code' => 22,
                'name' => 'METRO PUSAT',
                'province_code' => 18,
                'regency_code' => 72,
            ),
            179 => 
            array (
                'id' => 680,
                'code' => 23,
                'name' => 'METRO UTARA',
                'province_code' => 18,
                'regency_code' => 72,
            ),
            180 => 
            array (
                'id' => 681,
                'code' => 10,
                'name' => 'RANGKUI',
                'province_code' => 19,
                'regency_code' => 71,
            ),
            181 => 
            array (
                'id' => 682,
                'code' => 20,
                'name' => 'BUKIT INTAN',
                'province_code' => 19,
                'regency_code' => 71,
            ),
            182 => 
            array (
                'id' => 683,
                'code' => 21,
                'name' => 'GIRIMAYA',
                'province_code' => 19,
                'regency_code' => 71,
            ),
            183 => 
            array (
                'id' => 684,
                'code' => 30,
                'name' => 'PANGKAL BALAM',
                'province_code' => 19,
                'regency_code' => 71,
            ),
            184 => 
            array (
                'id' => 685,
                'code' => 31,
                'name' => 'GABEK',
                'province_code' => 19,
                'regency_code' => 71,
            ),
            185 => 
            array (
                'id' => 686,
                'code' => 40,
                'name' => 'TAMAN SARI',
                'province_code' => 19,
                'regency_code' => 71,
            ),
            186 => 
            array (
                'id' => 687,
                'code' => 41,
                'name' => 'GERUNGGANG',
                'province_code' => 19,
                'regency_code' => 71,
            ),
            187 => 
            array (
                'id' => 688,
                'code' => 10,
                'name' => 'BELAKANG PADANG',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            188 => 
            array (
                'id' => 689,
                'code' => 20,
                'name' => 'BULANG',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            189 => 
            array (
                'id' => 690,
                'code' => 30,
                'name' => 'GALANG',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            190 => 
            array (
                'id' => 691,
                'code' => 40,
                'name' => 'SEI BEDUK',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            191 => 
            array (
                'id' => 692,
                'code' => 41,
                'name' => 'SAGULUNG',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            192 => 
            array (
                'id' => 693,
                'code' => 50,
                'name' => 'NONGSA',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            193 => 
            array (
                'id' => 694,
                'code' => 51,
                'name' => 'BATAM KOTA',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            194 => 
            array (
                'id' => 695,
                'code' => 60,
                'name' => 'SEKUPANG',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            195 => 
            array (
                'id' => 696,
                'code' => 61,
                'name' => 'BATU AJI',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            196 => 
            array (
                'id' => 697,
                'code' => 70,
                'name' => 'LUBUK BAJA',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            197 => 
            array (
                'id' => 698,
                'code' => 80,
                'name' => 'BATU AMPAR',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            198 => 
            array (
                'id' => 699,
                'code' => 81,
                'name' => 'BENGKONG',
                'province_code' => 21,
                'regency_code' => 71,
            ),
            199 => 
            array (
                'id' => 700,
                'code' => 10,
                'name' => 'BUKIT BESTARI',
                'province_code' => 21,
                'regency_code' => 72,
            ),
            200 => 
            array (
                'id' => 701,
                'code' => 20,
                'name' => 'TANJUNGPINANG TIMUR',
                'province_code' => 21,
                'regency_code' => 72,
            ),
            201 => 
            array (
                'id' => 702,
                'code' => 30,
                'name' => 'TANJUNGPINANG KOTA',
                'province_code' => 21,
                'regency_code' => 72,
            ),
            202 => 
            array (
                'id' => 703,
                'code' => 40,
                'name' => 'TANJUNGPINANG BARAT',
                'province_code' => 21,
                'regency_code' => 72,
            ),
            203 => 
            array (
                'id' => 704,
                'code' => 10,
                'name' => 'JAGAKARSA',
                'province_code' => 31,
                'regency_code' => 71,
            ),
            204 => 
            array (
                'id' => 705,
                'code' => 20,
                'name' => 'PASAR MINGGU',
                'province_code' => 31,
                'regency_code' => 71,
            ),
            205 => 
            array (
                'id' => 706,
                'code' => 30,
                'name' => 'CILANDAK',
                'province_code' => 31,
                'regency_code' => 71,
            ),
            206 => 
            array (
                'id' => 707,
                'code' => 40,
                'name' => 'PESANGGRAHAN',
                'province_code' => 31,
                'regency_code' => 71,
            ),
            207 => 
            array (
                'id' => 708,
                'code' => 50,
                'name' => 'KEBAYORAN LAMA',
                'province_code' => 31,
                'regency_code' => 71,
            ),
            208 => 
            array (
                'id' => 709,
                'code' => 60,
                'name' => 'KEBAYORAN BARU',
                'province_code' => 31,
                'regency_code' => 71,
            ),
            209 => 
            array (
                'id' => 710,
                'code' => 70,
                'name' => 'MAMPANG PRAPATAN',
                'province_code' => 31,
                'regency_code' => 71,
            ),
            210 => 
            array (
                'id' => 711,
                'code' => 80,
                'name' => 'PANCORAN',
                'province_code' => 31,
                'regency_code' => 71,
            ),
            211 => 
            array (
                'id' => 712,
                'code' => 90,
                'name' => 'TEBET',
                'province_code' => 31,
                'regency_code' => 71,
            ),
            212 => 
            array (
                'id' => 713,
                'code' => 100,
                'name' => 'SETIA BUDI',
                'province_code' => 31,
                'regency_code' => 71,
            ),
            213 => 
            array (
                'id' => 714,
                'code' => 10,
                'name' => 'PASAR REBO',
                'province_code' => 31,
                'regency_code' => 72,
            ),
            214 => 
            array (
                'id' => 715,
                'code' => 20,
                'name' => 'CIRACAS',
                'province_code' => 31,
                'regency_code' => 72,
            ),
            215 => 
            array (
                'id' => 716,
                'code' => 30,
                'name' => 'CIPAYUNG',
                'province_code' => 31,
                'regency_code' => 72,
            ),
            216 => 
            array (
                'id' => 717,
                'code' => 40,
                'name' => 'MAKASAR',
                'province_code' => 31,
                'regency_code' => 72,
            ),
            217 => 
            array (
                'id' => 718,
                'code' => 50,
                'name' => 'KRAMAT JATI',
                'province_code' => 31,
                'regency_code' => 72,
            ),
            218 => 
            array (
                'id' => 719,
                'code' => 60,
                'name' => 'JATINEGARA',
                'province_code' => 31,
                'regency_code' => 72,
            ),
            219 => 
            array (
                'id' => 720,
                'code' => 70,
                'name' => 'DUREN SAWIT',
                'province_code' => 31,
                'regency_code' => 72,
            ),
            220 => 
            array (
                'id' => 721,
                'code' => 80,
                'name' => 'CAKUNG',
                'province_code' => 31,
                'regency_code' => 72,
            ),
            221 => 
            array (
                'id' => 722,
                'code' => 90,
                'name' => 'PULO GADUNG',
                'province_code' => 31,
                'regency_code' => 72,
            ),
            222 => 
            array (
                'id' => 723,
                'code' => 100,
                'name' => 'MATRAMAN',
                'province_code' => 31,
                'regency_code' => 72,
            ),
            223 => 
            array (
                'id' => 724,
                'code' => 10,
                'name' => 'TANAH ABANG',
                'province_code' => 31,
                'regency_code' => 73,
            ),
            224 => 
            array (
                'id' => 725,
                'code' => 20,
                'name' => 'MENTENG',
                'province_code' => 31,
                'regency_code' => 73,
            ),
            225 => 
            array (
                'id' => 726,
                'code' => 30,
                'name' => 'SENEN',
                'province_code' => 31,
                'regency_code' => 73,
            ),
            226 => 
            array (
                'id' => 727,
                'code' => 40,
                'name' => 'JOHAR BARU',
                'province_code' => 31,
                'regency_code' => 73,
            ),
            227 => 
            array (
                'id' => 728,
                'code' => 50,
                'name' => 'CEMPAKA PUTIH',
                'province_code' => 31,
                'regency_code' => 73,
            ),
            228 => 
            array (
                'id' => 729,
                'code' => 60,
                'name' => 'KEMAYORAN',
                'province_code' => 31,
                'regency_code' => 73,
            ),
            229 => 
            array (
                'id' => 730,
                'code' => 70,
                'name' => 'SAWAH BESAR',
                'province_code' => 31,
                'regency_code' => 73,
            ),
            230 => 
            array (
                'id' => 731,
                'code' => 80,
                'name' => 'GAMBIR',
                'province_code' => 31,
                'regency_code' => 73,
            ),
            231 => 
            array (
                'id' => 732,
                'code' => 10,
                'name' => 'KEMBANGAN',
                'province_code' => 31,
                'regency_code' => 74,
            ),
            232 => 
            array (
                'id' => 733,
                'code' => 20,
                'name' => 'KEBON JERUK',
                'province_code' => 31,
                'regency_code' => 74,
            ),
            233 => 
            array (
                'id' => 734,
                'code' => 30,
                'name' => 'PALMERAH',
                'province_code' => 31,
                'regency_code' => 74,
            ),
            234 => 
            array (
                'id' => 735,
                'code' => 40,
                'name' => 'GROGOL PETAMBURAN',
                'province_code' => 31,
                'regency_code' => 74,
            ),
            235 => 
            array (
                'id' => 736,
                'code' => 50,
                'name' => 'TAMBORA',
                'province_code' => 31,
                'regency_code' => 74,
            ),
            236 => 
            array (
                'id' => 737,
                'code' => 60,
                'name' => 'TAMAN SARI',
                'province_code' => 31,
                'regency_code' => 74,
            ),
            237 => 
            array (
                'id' => 738,
                'code' => 70,
                'name' => 'CENGKARENG',
                'province_code' => 31,
                'regency_code' => 74,
            ),
            238 => 
            array (
                'id' => 739,
                'code' => 80,
                'name' => 'KALI DERES',
                'province_code' => 31,
                'regency_code' => 74,
            ),
            239 => 
            array (
                'id' => 740,
                'code' => 10,
                'name' => 'PENJARINGAN',
                'province_code' => 31,
                'regency_code' => 75,
            ),
            240 => 
            array (
                'id' => 741,
                'code' => 20,
                'name' => 'PADEMANGAN',
                'province_code' => 31,
                'regency_code' => 75,
            ),
            241 => 
            array (
                'id' => 742,
                'code' => 30,
                'name' => 'TANJUNG PRIOK',
                'province_code' => 31,
                'regency_code' => 75,
            ),
            242 => 
            array (
                'id' => 743,
                'code' => 40,
                'name' => 'KOJA',
                'province_code' => 31,
                'regency_code' => 75,
            ),
            243 => 
            array (
                'id' => 744,
                'code' => 50,
                'name' => 'KELAPA GADING',
                'province_code' => 31,
                'regency_code' => 75,
            ),
            244 => 
            array (
                'id' => 745,
                'code' => 60,
                'name' => 'CILINCING',
                'province_code' => 31,
                'regency_code' => 75,
            ),
            245 => 
            array (
                'id' => 746,
                'code' => 10,
                'name' => 'LEMAHSUGIH',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            246 => 
            array (
                'id' => 747,
                'code' => 20,
                'name' => 'BANTARUJEG',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            247 => 
            array (
                'id' => 748,
                'code' => 21,
                'name' => 'MALAUSMA',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            248 => 
            array (
                'id' => 749,
                'code' => 30,
                'name' => 'CIKIJING',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            249 => 
            array (
                'id' => 750,
                'code' => 31,
                'name' => 'CINGAMBUL',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            250 => 
            array (
                'id' => 751,
                'code' => 40,
                'name' => 'TALAGA',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            251 => 
            array (
                'id' => 752,
                'code' => 41,
                'name' => 'BANJARAN',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            252 => 
            array (
                'id' => 753,
                'code' => 50,
                'name' => 'ARGAPURA',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            253 => 
            array (
                'id' => 754,
                'code' => 60,
                'name' => 'MAJA',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            254 => 
            array (
                'id' => 755,
                'code' => 70,
                'name' => 'MAJALENGKA',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            255 => 
            array (
                'id' => 756,
                'code' => 80,
                'name' => 'CIGASONG',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            256 => 
            array (
                'id' => 757,
                'code' => 90,
                'name' => 'SUKAHAJI',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            257 => 
            array (
                'id' => 758,
                'code' => 91,
                'name' => 'SINDANG',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            258 => 
            array (
                'id' => 759,
                'code' => 100,
                'name' => 'RAJAGALUH',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            259 => 
            array (
                'id' => 760,
                'code' => 110,
                'name' => 'SINDANGWANGI',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            260 => 
            array (
                'id' => 761,
                'code' => 120,
                'name' => 'LEUWIMUNDING',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            261 => 
            array (
                'id' => 762,
                'code' => 130,
                'name' => 'PALASAH',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            262 => 
            array (
                'id' => 763,
                'code' => 140,
                'name' => 'JATIWANGI',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            263 => 
            array (
                'id' => 764,
                'code' => 150,
                'name' => 'DAWUAN',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            264 => 
            array (
                'id' => 765,
                'code' => 151,
                'name' => 'KASOKANDEL',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            265 => 
            array (
                'id' => 766,
                'code' => 160,
                'name' => 'PANYINGKIRAN',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            266 => 
            array (
                'id' => 767,
                'code' => 170,
                'name' => 'KADIPATEN',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            267 => 
            array (
                'id' => 768,
                'code' => 180,
                'name' => 'KERTAJATI',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            268 => 
            array (
                'id' => 769,
                'code' => 190,
                'name' => 'JATITUJUH',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            269 => 
            array (
                'id' => 770,
                'code' => 200,
                'name' => 'LIGUNG',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            270 => 
            array (
                'id' => 771,
                'code' => 210,
                'name' => 'SUMBERJAYA',
                'province_code' => 32,
                'regency_code' => 10,
            ),
            271 => 
            array (
                'id' => 772,
                'code' => 10,
                'name' => 'JATINANGOR',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            272 => 
            array (
                'id' => 773,
                'code' => 20,
                'name' => 'CIMANGGUNG',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            273 => 
            array (
                'id' => 774,
                'code' => 30,
                'name' => 'TANJUNGSARI',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            274 => 
            array (
                'id' => 775,
                'code' => 31,
                'name' => 'SUKASARI',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            275 => 
            array (
                'id' => 776,
                'code' => 32,
                'name' => 'PAMULIHAN',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            276 => 
            array (
                'id' => 777,
                'code' => 40,
                'name' => 'RANCAKALONG',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            277 => 
            array (
                'id' => 778,
                'code' => 50,
                'name' => 'SUMEDANG SELATAN',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            278 => 
            array (
                'id' => 779,
                'code' => 60,
                'name' => 'SUMEDANG UTARA',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            279 => 
            array (
                'id' => 780,
                'code' => 61,
                'name' => 'GANEAS',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            280 => 
            array (
                'id' => 781,
                'code' => 70,
                'name' => 'SITURAJA',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            281 => 
            array (
                'id' => 782,
                'code' => 71,
                'name' => 'CISITU',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            282 => 
            array (
                'id' => 783,
                'code' => 80,
                'name' => 'DARMARAJA',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            283 => 
            array (
                'id' => 784,
                'code' => 90,
                'name' => 'CIBUGEL',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            284 => 
            array (
                'id' => 785,
                'code' => 100,
                'name' => 'WADO',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            285 => 
            array (
                'id' => 786,
                'code' => 101,
                'name' => 'JATINUNGGAL',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            286 => 
            array (
                'id' => 787,
                'code' => 111,
                'name' => 'JATIGEDE',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            287 => 
            array (
                'id' => 788,
                'code' => 120,
                'name' => 'TOMO',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            288 => 
            array (
                'id' => 789,
                'code' => 130,
                'name' => 'UJUNG JAYA',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            289 => 
            array (
                'id' => 790,
                'code' => 140,
                'name' => 'CONGGEANG',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            290 => 
            array (
                'id' => 791,
                'code' => 150,
                'name' => 'PASEH',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            291 => 
            array (
                'id' => 792,
                'code' => 160,
                'name' => 'CIMALAKA',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            292 => 
            array (
                'id' => 793,
                'code' => 161,
                'name' => 'CISARUA',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            293 => 
            array (
                'id' => 794,
                'code' => 170,
                'name' => 'TANJUNGKERTA',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            294 => 
            array (
                'id' => 795,
                'code' => 171,
                'name' => 'TANJUNGMEDAR',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            295 => 
            array (
                'id' => 796,
                'code' => 180,
                'name' => 'BUAHDUA',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            296 => 
            array (
                'id' => 797,
                'code' => 181,
                'name' => 'SURIAN',
                'province_code' => 32,
                'regency_code' => 11,
            ),
            297 => 
            array (
                'id' => 798,
                'code' => 10,
                'name' => 'HAURGEULIS',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            298 => 
            array (
                'id' => 799,
                'code' => 11,
                'name' => 'GANTAR',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            299 => 
            array (
                'id' => 800,
                'code' => 20,
                'name' => 'KROYA',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            300 => 
            array (
                'id' => 801,
                'code' => 30,
                'name' => 'GABUSWETAN',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            301 => 
            array (
                'id' => 802,
                'code' => 40,
                'name' => 'CIKEDUNG',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            302 => 
            array (
                'id' => 803,
                'code' => 41,
                'name' => 'TERISI',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            303 => 
            array (
                'id' => 804,
                'code' => 50,
                'name' => 'LELEA',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            304 => 
            array (
                'id' => 805,
                'code' => 60,
                'name' => 'BANGODUA',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            305 => 
            array (
                'id' => 806,
                'code' => 61,
                'name' => 'TUKDANA',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            306 => 
            array (
                'id' => 807,
                'code' => 70,
                'name' => 'WIDASARI',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            307 => 
            array (
                'id' => 808,
                'code' => 80,
                'name' => 'KERTASEMAYA',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            308 => 
            array (
                'id' => 809,
                'code' => 81,
                'name' => 'SUKAGUMIWANG',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            309 => 
            array (
                'id' => 810,
                'code' => 90,
                'name' => 'KRANGKENG',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            310 => 
            array (
                'id' => 811,
                'code' => 100,
                'name' => 'KARANGAMPEL',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            311 => 
            array (
                'id' => 812,
                'code' => 101,
                'name' => 'KEDOKAN BUNDER',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            312 => 
            array (
                'id' => 813,
                'code' => 110,
                'name' => 'JUNTINYUAT',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            313 => 
            array (
                'id' => 814,
                'code' => 120,
                'name' => 'SLIYEG',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            314 => 
            array (
                'id' => 815,
                'code' => 130,
                'name' => 'JATIBARANG',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            315 => 
            array (
                'id' => 816,
                'code' => 140,
                'name' => 'BALONGAN',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            316 => 
            array (
                'id' => 817,
                'code' => 150,
                'name' => 'INDRAMAYU',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            317 => 
            array (
                'id' => 818,
                'code' => 160,
                'name' => 'SINDANG',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            318 => 
            array (
                'id' => 819,
                'code' => 161,
                'name' => 'CANTIGI',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            319 => 
            array (
                'id' => 820,
                'code' => 162,
                'name' => 'PASEKAN',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            320 => 
            array (
                'id' => 821,
                'code' => 170,
                'name' => 'LOHBENER',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            321 => 
            array (
                'id' => 822,
                'code' => 171,
                'name' => 'ARAHAN',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            322 => 
            array (
                'id' => 823,
                'code' => 180,
                'name' => 'LOSARANG',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            323 => 
            array (
                'id' => 824,
                'code' => 190,
                'name' => 'KANDANGHAUR',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            324 => 
            array (
                'id' => 825,
                'code' => 200,
                'name' => 'BONGAS',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            325 => 
            array (
                'id' => 826,
                'code' => 210,
                'name' => 'ANJATAN',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            326 => 
            array (
                'id' => 827,
                'code' => 220,
                'name' => 'SUKRA',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            327 => 
            array (
                'id' => 828,
                'code' => 221,
                'name' => 'PATROL',
                'province_code' => 32,
                'regency_code' => 12,
            ),
            328 => 
            array (
                'id' => 829,
                'code' => 10,
                'name' => 'SAGALAHERANG',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            329 => 
            array (
                'id' => 830,
                'code' => 11,
                'name' => 'SERANGPANJANG',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            330 => 
            array (
                'id' => 831,
                'code' => 20,
                'name' => 'JALANCAGAK',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            331 => 
            array (
                'id' => 832,
                'code' => 21,
                'name' => 'CIATER',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            332 => 
            array (
                'id' => 833,
                'code' => 30,
                'name' => 'CISALAK',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            333 => 
            array (
                'id' => 834,
                'code' => 31,
                'name' => 'KASOMALANG',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            334 => 
            array (
                'id' => 835,
                'code' => 40,
                'name' => 'TANJUNGSIANG',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            335 => 
            array (
                'id' => 836,
                'code' => 50,
                'name' => 'CIJAMBE',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            336 => 
            array (
                'id' => 837,
                'code' => 60,
                'name' => 'CIBOGO',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            337 => 
            array (
                'id' => 838,
                'code' => 70,
                'name' => 'SUBANG',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            338 => 
            array (
                'id' => 839,
                'code' => 80,
                'name' => 'KALIJATI',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            339 => 
            array (
                'id' => 840,
                'code' => 81,
                'name' => 'DAWUAN',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            340 => 
            array (
                'id' => 841,
                'code' => 90,
                'name' => 'CIPEUNDEUY',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            341 => 
            array (
                'id' => 842,
                'code' => 100,
                'name' => 'PABUARAN',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            342 => 
            array (
                'id' => 843,
                'code' => 110,
                'name' => 'PATOKBEUSI',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            343 => 
            array (
                'id' => 844,
                'code' => 120,
                'name' => 'PURWADADI',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            344 => 
            array (
                'id' => 845,
                'code' => 130,
                'name' => 'CIKAUM',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            345 => 
            array (
                'id' => 846,
                'code' => 140,
                'name' => 'PAGADEN',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            346 => 
            array (
                'id' => 847,
                'code' => 141,
                'name' => 'PAGADEN BARAT',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            347 => 
            array (
                'id' => 848,
                'code' => 150,
                'name' => 'CIPUNAGARA',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            348 => 
            array (
                'id' => 849,
                'code' => 160,
                'name' => 'COMPRENG',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            349 => 
            array (
                'id' => 850,
                'code' => 170,
                'name' => 'BINONG',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            350 => 
            array (
                'id' => 851,
                'code' => 171,
                'name' => 'TAMBAKDAHAN',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            351 => 
            array (
                'id' => 852,
                'code' => 180,
                'name' => 'CIASEM',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            352 => 
            array (
                'id' => 853,
                'code' => 190,
                'name' => 'PAMANUKAN',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            353 => 
            array (
                'id' => 854,
                'code' => 191,
                'name' => 'SUKASARI',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            354 => 
            array (
                'id' => 855,
                'code' => 200,
                'name' => 'PUSAKANAGARA',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            355 => 
            array (
                'id' => 856,
                'code' => 201,
                'name' => 'PUSAKAJAYA',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            356 => 
            array (
                'id' => 857,
                'code' => 210,
                'name' => 'LEGONKULON',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            357 => 
            array (
                'id' => 858,
                'code' => 220,
                'name' => 'BLANAKAN',
                'province_code' => 32,
                'regency_code' => 13,
            ),
            358 => 
            array (
                'id' => 859,
                'code' => 10,
                'name' => 'JATILUHUR',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            359 => 
            array (
                'id' => 860,
                'code' => 11,
                'name' => 'SUKASARI',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            360 => 
            array (
                'id' => 861,
                'code' => 20,
                'name' => 'MANIIS',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            361 => 
            array (
                'id' => 862,
                'code' => 30,
                'name' => 'TEGAL WARU',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            362 => 
            array (
                'id' => 863,
                'code' => 40,
                'name' => 'PLERED',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            363 => 
            array (
                'id' => 864,
                'code' => 50,
                'name' => 'SUKATANI',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            364 => 
            array (
                'id' => 865,
                'code' => 60,
                'name' => 'DARANGDAN',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            365 => 
            array (
                'id' => 866,
                'code' => 70,
                'name' => 'BOJONG',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            366 => 
            array (
                'id' => 867,
                'code' => 80,
                'name' => 'WANAYASA',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            367 => 
            array (
                'id' => 868,
                'code' => 81,
                'name' => 'KIARAPEDES',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            368 => 
            array (
                'id' => 869,
                'code' => 90,
                'name' => 'PASAWAHAN',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            369 => 
            array (
                'id' => 870,
                'code' => 91,
                'name' => 'PONDOK SALAM',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            370 => 
            array (
                'id' => 871,
                'code' => 100,
                'name' => 'PURWAKARTA',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            371 => 
            array (
                'id' => 872,
                'code' => 101,
                'name' => 'BABAKANCIKAO',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            372 => 
            array (
                'id' => 873,
                'code' => 110,
                'name' => 'CAMPAKA',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            373 => 
            array (
                'id' => 874,
                'code' => 111,
                'name' => 'CIBATU',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            374 => 
            array (
                'id' => 875,
                'code' => 112,
                'name' => 'BUNGURSARI',
                'province_code' => 32,
                'regency_code' => 14,
            ),
            375 => 
            array (
                'id' => 876,
                'code' => 10,
                'name' => 'PANGKALAN',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            376 => 
            array (
                'id' => 877,
                'code' => 11,
                'name' => 'TEGALWARU',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            377 => 
            array (
                'id' => 878,
                'code' => 20,
                'name' => 'CIAMPEL',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            378 => 
            array (
                'id' => 879,
                'code' => 31,
                'name' => 'TELUKJAMBE TIMUR',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            379 => 
            array (
                'id' => 880,
                'code' => 32,
                'name' => 'TELUKJAMBE BARAT',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            380 => 
            array (
                'id' => 881,
                'code' => 40,
                'name' => 'KLARI',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            381 => 
            array (
                'id' => 882,
                'code' => 50,
                'name' => 'CIKAMPEK',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            382 => 
            array (
                'id' => 883,
                'code' => 51,
                'name' => 'PURWASARI',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            383 => 
            array (
                'id' => 884,
                'code' => 60,
                'name' => 'TIRTAMULYA',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            384 => 
            array (
                'id' => 885,
                'code' => 70,
                'name' => 'JATISARI',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            385 => 
            array (
                'id' => 886,
                'code' => 71,
                'name' => 'BANYUSARI',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            386 => 
            array (
                'id' => 887,
                'code' => 72,
                'name' => 'KOTABARU',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            387 => 
            array (
                'id' => 888,
                'code' => 81,
                'name' => 'CILAMAYA WETAN',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            388 => 
            array (
                'id' => 889,
                'code' => 82,
                'name' => 'CILAMAYA KULON',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            389 => 
            array (
                'id' => 890,
                'code' => 90,
                'name' => 'LEMAHABANG',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            390 => 
            array (
                'id' => 891,
                'code' => 100,
                'name' => 'TELAGASARI',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            391 => 
            array (
                'id' => 892,
                'code' => 111,
                'name' => 'MAJALAYA',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            392 => 
            array (
                'id' => 893,
                'code' => 112,
                'name' => 'KARAWANG TIMUR',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            393 => 
            array (
                'id' => 894,
                'code' => 113,
                'name' => 'KARAWANG BARAT',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            394 => 
            array (
                'id' => 895,
                'code' => 120,
                'name' => 'RAWAMERTA',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            395 => 
            array (
                'id' => 896,
                'code' => 130,
                'name' => 'TEMPURAN',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            396 => 
            array (
                'id' => 897,
                'code' => 140,
                'name' => 'KUTAWALUYA',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            397 => 
            array (
                'id' => 898,
                'code' => 150,
                'name' => 'RENGASDENGKLOK',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            398 => 
            array (
                'id' => 899,
                'code' => 151,
                'name' => 'JAYAKERTA',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            399 => 
            array (
                'id' => 900,
                'code' => 160,
                'name' => 'PEDES',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            400 => 
            array (
                'id' => 901,
                'code' => 161,
                'name' => 'CILEBAR',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            401 => 
            array (
                'id' => 902,
                'code' => 170,
                'name' => 'CIBUAYA',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            402 => 
            array (
                'id' => 903,
                'code' => 180,
                'name' => 'TIRTAJAYA',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            403 => 
            array (
                'id' => 904,
                'code' => 190,
                'name' => 'BATUJAYA',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            404 => 
            array (
                'id' => 905,
                'code' => 200,
                'name' => 'PAKISJAYA',
                'province_code' => 32,
                'regency_code' => 15,
            ),
            405 => 
            array (
                'id' => 906,
                'code' => 10,
                'name' => 'SETU',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            406 => 
            array (
                'id' => 907,
                'code' => 21,
                'name' => 'SERANG BARU',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            407 => 
            array (
                'id' => 908,
                'code' => 22,
                'name' => 'CIKARANG PUSAT',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            408 => 
            array (
                'id' => 909,
                'code' => 23,
                'name' => 'CIKARANG SELATAN',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            409 => 
            array (
                'id' => 910,
                'code' => 30,
                'name' => 'CIBARUSAH',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            410 => 
            array (
                'id' => 911,
                'code' => 31,
                'name' => 'BOJONGMANGU',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            411 => 
            array (
                'id' => 912,
                'code' => 41,
                'name' => 'CIKARANG TIMUR',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            412 => 
            array (
                'id' => 913,
                'code' => 50,
                'name' => 'KEDUNGWARINGIN',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            413 => 
            array (
                'id' => 914,
                'code' => 61,
                'name' => 'CIKARANG UTARA',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            414 => 
            array (
                'id' => 915,
                'code' => 62,
                'name' => 'KARANGBAHAGIA',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            415 => 
            array (
                'id' => 916,
                'code' => 70,
                'name' => 'CIBITUNG',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            416 => 
            array (
                'id' => 917,
                'code' => 71,
                'name' => 'CIKARANG BARAT',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            417 => 
            array (
                'id' => 918,
                'code' => 81,
                'name' => 'TAMBUN SELATAN',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            418 => 
            array (
                'id' => 919,
                'code' => 82,
                'name' => 'TAMBUN UTARA',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            419 => 
            array (
                'id' => 920,
                'code' => 90,
                'name' => 'BABELAN',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            420 => 
            array (
                'id' => 921,
                'code' => 100,
                'name' => 'TARUMAJAYA',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            421 => 
            array (
                'id' => 922,
                'code' => 110,
                'name' => 'TAMBELANG',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            422 => 
            array (
                'id' => 923,
                'code' => 111,
                'name' => 'SUKAWANGI',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            423 => 
            array (
                'id' => 924,
                'code' => 120,
                'name' => 'SUKATANI',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            424 => 
            array (
                'id' => 925,
                'code' => 121,
                'name' => 'SUKAKARYA',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            425 => 
            array (
                'id' => 926,
                'code' => 130,
                'name' => 'PEBAYURAN',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            426 => 
            array (
                'id' => 927,
                'code' => 140,
                'name' => 'CABANGBUNGIN',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            427 => 
            array (
                'id' => 928,
                'code' => 150,
                'name' => 'MUARA GEMBONG',
                'province_code' => 32,
                'regency_code' => 16,
            ),
            428 => 
            array (
                'id' => 929,
                'code' => 10,
                'name' => 'RONGGA',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            429 => 
            array (
                'id' => 930,
                'code' => 20,
                'name' => 'GUNUNGHALU',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            430 => 
            array (
                'id' => 931,
                'code' => 30,
                'name' => 'SINDANGKERTA',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            431 => 
            array (
                'id' => 932,
                'code' => 40,
                'name' => 'CILILIN',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            432 => 
            array (
                'id' => 933,
                'code' => 50,
                'name' => 'CIHAMPELAS',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            433 => 
            array (
                'id' => 934,
                'code' => 60,
                'name' => 'CIPONGKOR',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            434 => 
            array (
                'id' => 935,
                'code' => 70,
                'name' => 'BATUJAJAR',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            435 => 
            array (
                'id' => 936,
                'code' => 71,
                'name' => 'SAGULING',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            436 => 
            array (
                'id' => 937,
                'code' => 80,
                'name' => 'CIPATAT',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            437 => 
            array (
                'id' => 938,
                'code' => 90,
                'name' => 'PADALARANG',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            438 => 
            array (
                'id' => 939,
                'code' => 100,
                'name' => 'NGAMPRAH',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            439 => 
            array (
                'id' => 940,
                'code' => 110,
                'name' => 'PARONGPONG',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            440 => 
            array (
                'id' => 941,
                'code' => 120,
                'name' => 'LEMBANG',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            441 => 
            array (
                'id' => 942,
                'code' => 130,
                'name' => 'CISARUA',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            442 => 
            array (
                'id' => 943,
                'code' => 140,
                'name' => 'CIKALONG WETAN',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            443 => 
            array (
                'id' => 944,
                'code' => 150,
                'name' => 'CIPEUNDEUY',
                'province_code' => 32,
                'regency_code' => 17,
            ),
            444 => 
            array (
                'id' => 945,
                'code' => 10,
                'name' => 'CIMERAK',
                'province_code' => 32,
                'regency_code' => 18,
            ),
            445 => 
            array (
                'id' => 946,
                'code' => 20,
                'name' => 'CIJULANG',
                'province_code' => 32,
                'regency_code' => 18,
            ),
            446 => 
            array (
                'id' => 947,
                'code' => 30,
                'name' => 'CIGUGUR',
                'province_code' => 32,
                'regency_code' => 18,
            ),
            447 => 
            array (
                'id' => 948,
                'code' => 40,
                'name' => 'LANGKAPLANCAR',
                'province_code' => 32,
                'regency_code' => 18,
            ),
            448 => 
            array (
                'id' => 949,
                'code' => 50,
                'name' => 'PARIGI',
                'province_code' => 32,
                'regency_code' => 18,
            ),
            449 => 
            array (
                'id' => 950,
                'code' => 60,
                'name' => 'SIDAMULIH',
                'province_code' => 32,
                'regency_code' => 18,
            ),
            450 => 
            array (
                'id' => 951,
                'code' => 70,
                'name' => 'PANGANDARAN',
                'province_code' => 32,
                'regency_code' => 18,
            ),
            451 => 
            array (
                'id' => 952,
                'code' => 80,
                'name' => 'KALIPUCANG',
                'province_code' => 32,
                'regency_code' => 18,
            ),
            452 => 
            array (
                'id' => 953,
                'code' => 90,
                'name' => 'PADAHERANG',
                'province_code' => 32,
                'regency_code' => 18,
            ),
            453 => 
            array (
                'id' => 954,
                'code' => 100,
                'name' => 'MANGUNJAYA',
                'province_code' => 32,
                'regency_code' => 18,
            ),
            454 => 
            array (
                'id' => 955,
                'code' => 10,
                'name' => 'BOGOR SELATAN',
                'province_code' => 32,
                'regency_code' => 71,
            ),
            455 => 
            array (
                'id' => 956,
                'code' => 20,
                'name' => 'BOGOR TIMUR',
                'province_code' => 32,
                'regency_code' => 71,
            ),
            456 => 
            array (
                'id' => 957,
                'code' => 30,
                'name' => 'BOGOR UTARA',
                'province_code' => 32,
                'regency_code' => 71,
            ),
            457 => 
            array (
                'id' => 958,
                'code' => 40,
                'name' => 'BOGOR TENGAH',
                'province_code' => 32,
                'regency_code' => 71,
            ),
            458 => 
            array (
                'id' => 959,
                'code' => 50,
                'name' => 'BOGOR BARAT',
                'province_code' => 32,
                'regency_code' => 71,
            ),
            459 => 
            array (
                'id' => 960,
                'code' => 60,
                'name' => 'TANAH SAREAL',
                'province_code' => 32,
                'regency_code' => 71,
            ),
            460 => 
            array (
                'id' => 961,
                'code' => 10,
                'name' => 'BAROS',
                'province_code' => 32,
                'regency_code' => 72,
            ),
            461 => 
            array (
                'id' => 962,
                'code' => 11,
                'name' => 'LEMBURSITU',
                'province_code' => 32,
                'regency_code' => 72,
            ),
            462 => 
            array (
                'id' => 963,
                'code' => 12,
                'name' => 'CIBEUREUM',
                'province_code' => 32,
                'regency_code' => 72,
            ),
            463 => 
            array (
                'id' => 964,
                'code' => 20,
                'name' => 'CITAMIANG',
                'province_code' => 32,
                'regency_code' => 72,
            ),
            464 => 
            array (
                'id' => 965,
                'code' => 30,
                'name' => 'WARUDOYONG',
                'province_code' => 32,
                'regency_code' => 72,
            ),
            465 => 
            array (
                'id' => 966,
                'code' => 40,
                'name' => 'GUNUNG PUYUH',
                'province_code' => 32,
                'regency_code' => 72,
            ),
            466 => 
            array (
                'id' => 967,
                'code' => 50,
                'name' => 'CIKOLE',
                'province_code' => 32,
                'regency_code' => 72,
            ),
            467 => 
            array (
                'id' => 968,
                'code' => 10,
                'name' => 'BANDUNG KULON',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            468 => 
            array (
                'id' => 969,
                'code' => 20,
                'name' => 'BABAKAN CIPARAY',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            469 => 
            array (
                'id' => 970,
                'code' => 30,
                'name' => 'BOJONGLOA KALER',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            470 => 
            array (
                'id' => 971,
                'code' => 40,
                'name' => 'BOJONGLOA KIDUL',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            471 => 
            array (
                'id' => 972,
                'code' => 50,
                'name' => 'ASTANAANYAR',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            472 => 
            array (
                'id' => 973,
                'code' => 60,
                'name' => 'REGOL',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            473 => 
            array (
                'id' => 974,
                'code' => 70,
                'name' => 'LENGKONG',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            474 => 
            array (
                'id' => 975,
                'code' => 80,
                'name' => 'BANDUNG KIDUL',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            475 => 
            array (
                'id' => 976,
                'code' => 90,
                'name' => 'BUAHBATU',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            476 => 
            array (
                'id' => 977,
                'code' => 100,
                'name' => 'RANCASARI',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            477 => 
            array (
                'id' => 978,
                'code' => 101,
                'name' => 'GEDEBAGE',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            478 => 
            array (
                'id' => 979,
                'code' => 110,
                'name' => 'CIBIRU',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            479 => 
            array (
                'id' => 980,
                'code' => 111,
                'name' => 'PANYILEUKAN',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            480 => 
            array (
                'id' => 981,
                'code' => 120,
                'name' => 'UJUNG BERUNG',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            481 => 
            array (
                'id' => 982,
                'code' => 121,
                'name' => 'CINAMBO',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            482 => 
            array (
                'id' => 983,
                'code' => 130,
                'name' => 'ARCAMANIK',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            483 => 
            array (
                'id' => 984,
                'code' => 141,
                'name' => 'ANTAPANI',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            484 => 
            array (
                'id' => 985,
                'code' => 142,
                'name' => 'MANDALAJATI',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            485 => 
            array (
                'id' => 986,
                'code' => 150,
                'name' => 'KIARACONDONG',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            486 => 
            array (
                'id' => 987,
                'code' => 160,
                'name' => 'BATUNUNGGAL',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            487 => 
            array (
                'id' => 988,
                'code' => 170,
                'name' => 'SUMUR BANDUNG',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            488 => 
            array (
                'id' => 989,
                'code' => 180,
                'name' => 'ANDIR',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            489 => 
            array (
                'id' => 990,
                'code' => 190,
                'name' => 'CICENDO',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            490 => 
            array (
                'id' => 991,
                'code' => 200,
                'name' => 'BANDUNG WETAN',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            491 => 
            array (
                'id' => 992,
                'code' => 210,
                'name' => 'CIBEUNYING KIDUL',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            492 => 
            array (
                'id' => 993,
                'code' => 220,
                'name' => 'CIBEUNYING KALER',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            493 => 
            array (
                'id' => 994,
                'code' => 230,
                'name' => 'COBLONG',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            494 => 
            array (
                'id' => 995,
                'code' => 240,
                'name' => 'SUKAJADI',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            495 => 
            array (
                'id' => 996,
                'code' => 250,
                'name' => 'SUKASARI',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            496 => 
            array (
                'id' => 997,
                'code' => 260,
                'name' => 'CIDADAP',
                'province_code' => 32,
                'regency_code' => 73,
            ),
            497 => 
            array (
                'id' => 998,
                'code' => 10,
                'name' => 'HARJAMUKTI',
                'province_code' => 32,
                'regency_code' => 74,
            ),
            498 => 
            array (
                'id' => 999,
                'code' => 20,
                'name' => 'LEMAHWUNGKUK',
                'province_code' => 32,
                'regency_code' => 74,
            ),
            499 => 
            array (
                'id' => 1000,
                'code' => 30,
                'name' => 'PEKALIPAN',
                'province_code' => 32,
                'regency_code' => 74,
            ),
        ));
        DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'code' => 40,
                'name' => 'KESAMBI',
                'province_code' => 32,
                'regency_code' => 74,
            ),
            1 => 
            array (
                'id' => 1002,
                'code' => 50,
                'name' => 'KEJAKSAN',
                'province_code' => 32,
                'regency_code' => 74,
            ),
            2 => 
            array (
                'id' => 1003,
                'code' => 10,
                'name' => 'PONDOKGEDE',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            3 => 
            array (
                'id' => 1004,
                'code' => 11,
                'name' => 'JATISAMPURNA',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            4 => 
            array (
                'id' => 1005,
                'code' => 12,
                'name' => 'PONDOKMELATI',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            5 => 
            array (
                'id' => 1006,
                'code' => 20,
                'name' => 'JATIASIH',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            6 => 
            array (
                'id' => 1007,
                'code' => 30,
                'name' => 'BANTARGEBANG',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            7 => 
            array (
                'id' => 1008,
                'code' => 31,
                'name' => 'MUSTIKAJAYA',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            8 => 
            array (
                'id' => 1009,
                'code' => 40,
                'name' => 'BEKASI TIMUR',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            9 => 
            array (
                'id' => 1010,
                'code' => 41,
                'name' => 'RAWALUMBU',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            10 => 
            array (
                'id' => 1011,
                'code' => 50,
                'name' => 'BEKASI SELATAN',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            11 => 
            array (
                'id' => 1012,
                'code' => 60,
                'name' => 'BEKASI BARAT',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            12 => 
            array (
                'id' => 1013,
                'code' => 61,
                'name' => 'MEDAN SATRIA',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            13 => 
            array (
                'id' => 1014,
                'code' => 70,
                'name' => 'BEKASI UTARA',
                'province_code' => 32,
                'regency_code' => 75,
            ),
            14 => 
            array (
                'id' => 1015,
                'code' => 10,
                'name' => 'SAWANGAN',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            15 => 
            array (
                'id' => 1016,
                'code' => 11,
                'name' => 'BOJONGSARI',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            16 => 
            array (
                'id' => 1017,
                'code' => 20,
                'name' => 'PANCORAN MAS',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            17 => 
            array (
                'id' => 1018,
                'code' => 21,
                'name' => 'CIPAYUNG',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            18 => 
            array (
                'id' => 1019,
                'code' => 30,
                'name' => 'SUKMAJAYA',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            19 => 
            array (
                'id' => 1020,
                'code' => 31,
                'name' => 'CILODONG',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            20 => 
            array (
                'id' => 1021,
                'code' => 40,
                'name' => 'CIMANGGIS',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            21 => 
            array (
                'id' => 1022,
                'code' => 41,
                'name' => 'TAPOS',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            22 => 
            array (
                'id' => 1023,
                'code' => 50,
                'name' => 'BEJI',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            23 => 
            array (
                'id' => 1024,
                'code' => 60,
                'name' => 'LIMO',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            24 => 
            array (
                'id' => 1025,
                'code' => 61,
                'name' => 'CINERE',
                'province_code' => 32,
                'regency_code' => 76,
            ),
            25 => 
            array (
                'id' => 1026,
                'code' => 10,
                'name' => 'CIMAHI SELATAN',
                'province_code' => 32,
                'regency_code' => 77,
            ),
            26 => 
            array (
                'id' => 1027,
                'code' => 20,
                'name' => 'CIMAHI TENGAH',
                'province_code' => 32,
                'regency_code' => 77,
            ),
            27 => 
            array (
                'id' => 1028,
                'code' => 30,
                'name' => 'CIMAHI UTARA',
                'province_code' => 32,
                'regency_code' => 77,
            ),
            28 => 
            array (
                'id' => 1029,
                'code' => 10,
                'name' => 'KAWALU',
                'province_code' => 32,
                'regency_code' => 78,
            ),
            29 => 
            array (
                'id' => 1030,
                'code' => 20,
                'name' => 'TAMANSARI',
                'province_code' => 32,
                'regency_code' => 78,
            ),
            30 => 
            array (
                'id' => 1031,
                'code' => 30,
                'name' => 'CIBEUREUM',
                'province_code' => 32,
                'regency_code' => 78,
            ),
            31 => 
            array (
                'id' => 1032,
                'code' => 31,
                'name' => 'PURBARATU',
                'province_code' => 32,
                'regency_code' => 78,
            ),
            32 => 
            array (
                'id' => 1033,
                'code' => 40,
                'name' => 'TAWANG',
                'province_code' => 32,
                'regency_code' => 78,
            ),
            33 => 
            array (
                'id' => 1034,
                'code' => 50,
                'name' => 'CIHIDEUNG',
                'province_code' => 32,
                'regency_code' => 78,
            ),
            34 => 
            array (
                'id' => 1035,
                'code' => 60,
                'name' => 'MANGKUBUMI',
                'province_code' => 32,
                'regency_code' => 78,
            ),
            35 => 
            array (
                'id' => 1036,
                'code' => 70,
                'name' => 'INDIHIANG',
                'province_code' => 32,
                'regency_code' => 78,
            ),
            36 => 
            array (
                'id' => 1037,
                'code' => 71,
                'name' => 'BUNGURSARI',
                'province_code' => 32,
                'regency_code' => 78,
            ),
            37 => 
            array (
                'id' => 1038,
                'code' => 80,
                'name' => 'CIPEDES',
                'province_code' => 32,
                'regency_code' => 78,
            ),
            38 => 
            array (
                'id' => 1039,
                'code' => 10,
                'name' => 'BANJAR',
                'province_code' => 32,
                'regency_code' => 79,
            ),
            39 => 
            array (
                'id' => 1040,
                'code' => 20,
                'name' => 'PURWAHARJA',
                'province_code' => 32,
                'regency_code' => 79,
            ),
            40 => 
            array (
                'id' => 1041,
                'code' => 30,
                'name' => 'PATARUMAN',
                'province_code' => 32,
                'regency_code' => 79,
            ),
            41 => 
            array (
                'id' => 1042,
                'code' => 40,
                'name' => 'LANGENSARI',
                'province_code' => 32,
                'regency_code' => 79,
            ),
            42 => 
            array (
                'id' => 1043,
                'code' => 10,
                'name' => 'PRAMBANAN',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            43 => 
            array (
                'id' => 1044,
                'code' => 20,
                'name' => 'GANTIWARNO',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            44 => 
            array (
                'id' => 1045,
                'code' => 30,
                'name' => 'WEDI',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            45 => 
            array (
                'id' => 1046,
                'code' => 40,
                'name' => 'BAYAT',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            46 => 
            array (
                'id' => 1047,
                'code' => 50,
                'name' => 'CAWAS',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            47 => 
            array (
                'id' => 1048,
                'code' => 60,
                'name' => 'TRUCUK',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            48 => 
            array (
                'id' => 1049,
                'code' => 70,
                'name' => 'KALIKOTES',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            49 => 
            array (
                'id' => 1050,
                'code' => 80,
                'name' => 'KEBONARUM',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            50 => 
            array (
                'id' => 1051,
                'code' => 90,
                'name' => 'JOGONALAN',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            51 => 
            array (
                'id' => 1052,
                'code' => 100,
                'name' => 'MANISRENGGO',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            52 => 
            array (
                'id' => 1053,
                'code' => 110,
                'name' => 'KARANGNONGKO',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            53 => 
            array (
                'id' => 1054,
                'code' => 120,
                'name' => 'NGAWEN',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            54 => 
            array (
                'id' => 1055,
                'code' => 130,
                'name' => 'CEPER',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            55 => 
            array (
                'id' => 1056,
                'code' => 140,
                'name' => 'PEDAN',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            56 => 
            array (
                'id' => 1057,
                'code' => 150,
                'name' => 'KARANGDOWO',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            57 => 
            array (
                'id' => 1058,
                'code' => 160,
                'name' => 'JUWIRING',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            58 => 
            array (
                'id' => 1059,
                'code' => 170,
                'name' => 'WONOSARI',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            59 => 
            array (
                'id' => 1060,
                'code' => 180,
                'name' => 'DELANGGU',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            60 => 
            array (
                'id' => 1061,
                'code' => 190,
                'name' => 'POLANHARJO',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            61 => 
            array (
                'id' => 1062,
                'code' => 200,
                'name' => 'KARANGANOM',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            62 => 
            array (
                'id' => 1063,
                'code' => 210,
                'name' => 'TULUNG',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            63 => 
            array (
                'id' => 1064,
                'code' => 220,
                'name' => 'JATINOM',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            64 => 
            array (
                'id' => 1065,
                'code' => 230,
                'name' => 'KEMALANG',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            65 => 
            array (
                'id' => 1066,
                'code' => 710,
                'name' => 'KLATEN SELATAN',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            66 => 
            array (
                'id' => 1067,
                'code' => 720,
                'name' => 'KLATEN TENGAH',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            67 => 
            array (
                'id' => 1068,
                'code' => 730,
                'name' => 'KLATEN UTARA',
                'province_code' => 33,
                'regency_code' => 10,
            ),
            68 => 
            array (
                'id' => 1069,
                'code' => 10,
                'name' => 'WERU',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            69 => 
            array (
                'id' => 1070,
                'code' => 20,
                'name' => 'BULU',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            70 => 
            array (
                'id' => 1071,
                'code' => 30,
                'name' => 'TAWANGSARI',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            71 => 
            array (
                'id' => 1072,
                'code' => 40,
                'name' => 'SUKOHARJO',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            72 => 
            array (
                'id' => 1073,
                'code' => 50,
                'name' => 'NGUTER',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            73 => 
            array (
                'id' => 1074,
                'code' => 60,
                'name' => 'BENDOSARI',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            74 => 
            array (
                'id' => 1075,
                'code' => 70,
                'name' => 'POLOKARTO',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            75 => 
            array (
                'id' => 1076,
                'code' => 80,
                'name' => 'MOJOLABAN',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            76 => 
            array (
                'id' => 1077,
                'code' => 90,
                'name' => 'GROGOL',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            77 => 
            array (
                'id' => 1078,
                'code' => 100,
                'name' => 'BAKI',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            78 => 
            array (
                'id' => 1079,
                'code' => 110,
                'name' => 'GATAK',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            79 => 
            array (
                'id' => 1080,
                'code' => 120,
                'name' => 'KARTASURA',
                'province_code' => 33,
                'regency_code' => 11,
            ),
            80 => 
            array (
                'id' => 1081,
                'code' => 10,
                'name' => 'PRACIMANTORO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            81 => 
            array (
                'id' => 1082,
                'code' => 20,
                'name' => 'PARANGGUPITO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            82 => 
            array (
                'id' => 1083,
                'code' => 30,
                'name' => 'GIRITONTRO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            83 => 
            array (
                'id' => 1084,
                'code' => 40,
                'name' => 'GIRIWOYO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            84 => 
            array (
                'id' => 1085,
                'code' => 50,
                'name' => 'BATUWARNO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            85 => 
            array (
                'id' => 1086,
                'code' => 60,
                'name' => 'KARANGTENGAH',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            86 => 
            array (
                'id' => 1087,
                'code' => 70,
                'name' => 'TIRTOMOYO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            87 => 
            array (
                'id' => 1088,
                'code' => 80,
                'name' => 'NGUNTORONADI',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            88 => 
            array (
                'id' => 1089,
                'code' => 90,
                'name' => 'BATURETNO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            89 => 
            array (
                'id' => 1090,
                'code' => 100,
                'name' => 'EROMOKO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            90 => 
            array (
                'id' => 1091,
                'code' => 110,
                'name' => 'WURYANTORO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            91 => 
            array (
                'id' => 1092,
                'code' => 120,
                'name' => 'MANYARAN',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            92 => 
            array (
                'id' => 1093,
                'code' => 130,
                'name' => 'SELOGIRI',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            93 => 
            array (
                'id' => 1094,
                'code' => 140,
                'name' => 'WONOGIRI',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            94 => 
            array (
                'id' => 1095,
                'code' => 150,
                'name' => 'NGADIROJO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            95 => 
            array (
                'id' => 1096,
                'code' => 160,
                'name' => 'SIDOHARJO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            96 => 
            array (
                'id' => 1097,
                'code' => 170,
                'name' => 'JATIROTO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            97 => 
            array (
                'id' => 1098,
                'code' => 180,
                'name' => 'KISMANTORO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            98 => 
            array (
                'id' => 1099,
                'code' => 190,
                'name' => 'PURWANTORO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            99 => 
            array (
                'id' => 1100,
                'code' => 200,
                'name' => 'BULUKERTO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            100 => 
            array (
                'id' => 1101,
                'code' => 201,
                'name' => 'PUHPELEM',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            101 => 
            array (
                'id' => 1102,
                'code' => 210,
                'name' => 'SLOGOHIMO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            102 => 
            array (
                'id' => 1103,
                'code' => 220,
                'name' => 'JATISRONO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            103 => 
            array (
                'id' => 1104,
                'code' => 230,
                'name' => 'JATIPURNO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            104 => 
            array (
                'id' => 1105,
                'code' => 240,
                'name' => 'GIRIMARTO',
                'province_code' => 33,
                'regency_code' => 12,
            ),
            105 => 
            array (
                'id' => 1106,
                'code' => 10,
                'name' => 'JATIPURO',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            106 => 
            array (
                'id' => 1107,
                'code' => 20,
                'name' => 'JATIYOSO',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            107 => 
            array (
                'id' => 1108,
                'code' => 30,
                'name' => 'JUMAPOLO',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            108 => 
            array (
                'id' => 1109,
                'code' => 40,
                'name' => 'JUMANTONO',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            109 => 
            array (
                'id' => 1110,
                'code' => 50,
                'name' => 'MATESIH',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            110 => 
            array (
                'id' => 1111,
                'code' => 60,
                'name' => 'TAWANGMANGU',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            111 => 
            array (
                'id' => 1112,
                'code' => 70,
                'name' => 'NGARGOYOSO',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            112 => 
            array (
                'id' => 1113,
                'code' => 80,
                'name' => 'KARANGPANDAN',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            113 => 
            array (
                'id' => 1114,
                'code' => 90,
                'name' => 'KARANGANYAR',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            114 => 
            array (
                'id' => 1115,
                'code' => 100,
                'name' => 'TASIKMADU',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            115 => 
            array (
                'id' => 1116,
                'code' => 110,
                'name' => 'JATEN',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            116 => 
            array (
                'id' => 1117,
                'code' => 120,
                'name' => 'COLOMADU',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            117 => 
            array (
                'id' => 1118,
                'code' => 130,
                'name' => 'GONDANGREJO',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            118 => 
            array (
                'id' => 1119,
                'code' => 140,
                'name' => 'KEBAKKRAMAT',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            119 => 
            array (
                'id' => 1120,
                'code' => 150,
                'name' => 'MOJOGEDANG',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            120 => 
            array (
                'id' => 1121,
                'code' => 160,
                'name' => 'KERJO',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            121 => 
            array (
                'id' => 1122,
                'code' => 170,
                'name' => 'JENAWI',
                'province_code' => 33,
                'regency_code' => 13,
            ),
            122 => 
            array (
                'id' => 1123,
                'code' => 10,
                'name' => 'KALIJAMBE',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            123 => 
            array (
                'id' => 1124,
                'code' => 20,
                'name' => 'PLUPUH',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            124 => 
            array (
                'id' => 1125,
                'code' => 30,
                'name' => 'MASARAN',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            125 => 
            array (
                'id' => 1126,
                'code' => 40,
                'name' => 'KEDAWUNG',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            126 => 
            array (
                'id' => 1127,
                'code' => 50,
                'name' => 'SAMBIREJO',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            127 => 
            array (
                'id' => 1128,
                'code' => 60,
                'name' => 'GONDANG',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            128 => 
            array (
                'id' => 1129,
                'code' => 70,
                'name' => 'SAMBUNG MACAN',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            129 => 
            array (
                'id' => 1130,
                'code' => 80,
                'name' => 'NGRAMPAL',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            130 => 
            array (
                'id' => 1131,
                'code' => 90,
                'name' => 'KARANGMALANG',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            131 => 
            array (
                'id' => 1132,
                'code' => 100,
                'name' => 'SRAGEN',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            132 => 
            array (
                'id' => 1133,
                'code' => 110,
                'name' => 'SIDOHARJO',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            133 => 
            array (
                'id' => 1134,
                'code' => 120,
                'name' => 'TANON',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            134 => 
            array (
                'id' => 1135,
                'code' => 130,
                'name' => 'GEMOLONG',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            135 => 
            array (
                'id' => 1136,
                'code' => 140,
                'name' => 'MIRI',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            136 => 
            array (
                'id' => 1137,
                'code' => 150,
                'name' => 'SUMBERLAWANG',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            137 => 
            array (
                'id' => 1138,
                'code' => 160,
                'name' => 'MONDOKAN',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            138 => 
            array (
                'id' => 1139,
                'code' => 170,
                'name' => 'SUKODONO',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            139 => 
            array (
                'id' => 1140,
                'code' => 180,
                'name' => 'GESI',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            140 => 
            array (
                'id' => 1141,
                'code' => 190,
                'name' => 'TANGEN',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            141 => 
            array (
                'id' => 1142,
                'code' => 200,
                'name' => 'JENAR',
                'province_code' => 33,
                'regency_code' => 14,
            ),
            142 => 
            array (
                'id' => 1143,
                'code' => 10,
                'name' => 'KEDUNGJATI',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            143 => 
            array (
                'id' => 1144,
                'code' => 20,
                'name' => 'KARANGRAYUNG',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            144 => 
            array (
                'id' => 1145,
                'code' => 30,
                'name' => 'PENAWANGAN',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            145 => 
            array (
                'id' => 1146,
                'code' => 40,
                'name' => 'TOROH',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            146 => 
            array (
                'id' => 1147,
                'code' => 50,
                'name' => 'GEYER',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            147 => 
            array (
                'id' => 1148,
                'code' => 60,
                'name' => 'PULOKULON',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            148 => 
            array (
                'id' => 1149,
                'code' => 70,
                'name' => 'KRADENAN',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            149 => 
            array (
                'id' => 1150,
                'code' => 80,
                'name' => 'GABUS',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            150 => 
            array (
                'id' => 1151,
                'code' => 90,
                'name' => 'NGARINGAN',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            151 => 
            array (
                'id' => 1152,
                'code' => 100,
                'name' => 'WIROSARI',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            152 => 
            array (
                'id' => 1153,
                'code' => 110,
                'name' => 'TAWANGHARJO',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            153 => 
            array (
                'id' => 1154,
                'code' => 120,
                'name' => 'GROBOGAN',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            154 => 
            array (
                'id' => 1155,
                'code' => 130,
                'name' => 'PURWODADI',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            155 => 
            array (
                'id' => 1156,
                'code' => 140,
                'name' => 'BRATI',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            156 => 
            array (
                'id' => 1157,
                'code' => 150,
                'name' => 'KLAMBU',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            157 => 
            array (
                'id' => 1158,
                'code' => 160,
                'name' => 'GODONG',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            158 => 
            array (
                'id' => 1159,
                'code' => 170,
                'name' => 'GUBUG',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            159 => 
            array (
                'id' => 1160,
                'code' => 180,
                'name' => 'TEGOWANU',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            160 => 
            array (
                'id' => 1161,
                'code' => 190,
                'name' => 'TANGGUNGHARJO',
                'province_code' => 33,
                'regency_code' => 15,
            ),
            161 => 
            array (
                'id' => 1162,
                'code' => 10,
                'name' => 'JATI',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            162 => 
            array (
                'id' => 1163,
                'code' => 20,
                'name' => 'RANDUBLATUNG',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            163 => 
            array (
                'id' => 1164,
                'code' => 30,
                'name' => 'KRADENAN',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            164 => 
            array (
                'id' => 1165,
                'code' => 40,
                'name' => 'KEDUNGTUBAN',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            165 => 
            array (
                'id' => 1166,
                'code' => 50,
                'name' => 'CEPU',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            166 => 
            array (
                'id' => 1167,
                'code' => 60,
                'name' => 'SAMBONG',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            167 => 
            array (
                'id' => 1168,
                'code' => 70,
                'name' => 'JIKEN',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            168 => 
            array (
                'id' => 1169,
                'code' => 80,
                'name' => 'BOGOREJO',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            169 => 
            array (
                'id' => 1170,
                'code' => 90,
                'name' => 'JEPON',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            170 => 
            array (
                'id' => 1171,
                'code' => 100,
                'name' => 'KOTA BLORA',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            171 => 
            array (
                'id' => 1172,
                'code' => 110,
                'name' => 'BANJAREJO',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            172 => 
            array (
                'id' => 1173,
                'code' => 120,
                'name' => 'TUNJUNGAN',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            173 => 
            array (
                'id' => 1174,
                'code' => 130,
                'name' => 'JAPAH',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            174 => 
            array (
                'id' => 1175,
                'code' => 140,
                'name' => 'NGAWEN',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            175 => 
            array (
                'id' => 1176,
                'code' => 150,
                'name' => 'KUNDURAN',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            176 => 
            array (
                'id' => 1177,
                'code' => 160,
                'name' => 'TODANAN',
                'province_code' => 33,
                'regency_code' => 16,
            ),
            177 => 
            array (
                'id' => 1178,
                'code' => 10,
                'name' => 'SUMBER',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            178 => 
            array (
                'id' => 1179,
                'code' => 20,
                'name' => 'BULU',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            179 => 
            array (
                'id' => 1180,
                'code' => 30,
                'name' => 'GUNEM',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            180 => 
            array (
                'id' => 1181,
                'code' => 40,
                'name' => 'SALE',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            181 => 
            array (
                'id' => 1182,
                'code' => 50,
                'name' => 'SARANG',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            182 => 
            array (
                'id' => 1183,
                'code' => 60,
                'name' => 'SEDAN',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            183 => 
            array (
                'id' => 1184,
                'code' => 70,
                'name' => 'PAMOTAN',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            184 => 
            array (
                'id' => 1185,
                'code' => 80,
                'name' => 'SULANG',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            185 => 
            array (
                'id' => 1186,
                'code' => 90,
                'name' => 'KALIORI',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            186 => 
            array (
                'id' => 1187,
                'code' => 100,
                'name' => 'REMBANG',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            187 => 
            array (
                'id' => 1188,
                'code' => 110,
                'name' => 'PANCUR',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            188 => 
            array (
                'id' => 1189,
                'code' => 120,
                'name' => 'KRAGAN',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            189 => 
            array (
                'id' => 1190,
                'code' => 130,
                'name' => 'SLUKE',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            190 => 
            array (
                'id' => 1191,
                'code' => 140,
                'name' => 'LASEM',
                'province_code' => 33,
                'regency_code' => 17,
            ),
            191 => 
            array (
                'id' => 1192,
                'code' => 10,
                'name' => 'SUKOLILO',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            192 => 
            array (
                'id' => 1193,
                'code' => 20,
                'name' => 'KAYEN',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            193 => 
            array (
                'id' => 1194,
                'code' => 30,
                'name' => 'TAMBAKROMO',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            194 => 
            array (
                'id' => 1195,
                'code' => 40,
                'name' => 'WINONG',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            195 => 
            array (
                'id' => 1196,
                'code' => 50,
                'name' => 'PUCAKWANGI',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            196 => 
            array (
                'id' => 1197,
                'code' => 60,
                'name' => 'JAKEN',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            197 => 
            array (
                'id' => 1198,
                'code' => 70,
                'name' => 'BATANGAN',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            198 => 
            array (
                'id' => 1199,
                'code' => 80,
                'name' => 'JUWANA',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            199 => 
            array (
                'id' => 1200,
                'code' => 90,
                'name' => 'JAKENAN',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            200 => 
            array (
                'id' => 1201,
                'code' => 100,
                'name' => 'PATI',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            201 => 
            array (
                'id' => 1202,
                'code' => 110,
                'name' => 'GABUS',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            202 => 
            array (
                'id' => 1203,
                'code' => 120,
                'name' => 'MARGOREJO',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            203 => 
            array (
                'id' => 1204,
                'code' => 130,
                'name' => 'GEMBONG',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            204 => 
            array (
                'id' => 1205,
                'code' => 140,
                'name' => 'TLOGOWUNGU',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            205 => 
            array (
                'id' => 1206,
                'code' => 150,
                'name' => 'WEDARIJAKSA',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            206 => 
            array (
                'id' => 1207,
                'code' => 160,
                'name' => 'TRANGKIL',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            207 => 
            array (
                'id' => 1208,
                'code' => 170,
                'name' => 'MARGOYOSO',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            208 => 
            array (
                'id' => 1209,
                'code' => 180,
                'name' => 'GUNUNG WUNGKAL',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            209 => 
            array (
                'id' => 1210,
                'code' => 190,
                'name' => 'CLUWAK',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            210 => 
            array (
                'id' => 1211,
                'code' => 200,
                'name' => 'TAYU',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            211 => 
            array (
                'id' => 1212,
                'code' => 210,
                'name' => 'DUKUHSETI',
                'province_code' => 33,
                'regency_code' => 18,
            ),
            212 => 
            array (
                'id' => 1213,
                'code' => 10,
                'name' => 'KALIWUNGU',
                'province_code' => 33,
                'regency_code' => 19,
            ),
            213 => 
            array (
                'id' => 1214,
                'code' => 20,
                'name' => 'KOTA KUDUS',
                'province_code' => 33,
                'regency_code' => 19,
            ),
            214 => 
            array (
                'id' => 1215,
                'code' => 30,
                'name' => 'JATI',
                'province_code' => 33,
                'regency_code' => 19,
            ),
            215 => 
            array (
                'id' => 1216,
                'code' => 40,
                'name' => 'UNDAAN',
                'province_code' => 33,
                'regency_code' => 19,
            ),
            216 => 
            array (
                'id' => 1217,
                'code' => 50,
                'name' => 'MEJOBO',
                'province_code' => 33,
                'regency_code' => 19,
            ),
            217 => 
            array (
                'id' => 1218,
                'code' => 60,
                'name' => 'JEKULO',
                'province_code' => 33,
                'regency_code' => 19,
            ),
            218 => 
            array (
                'id' => 1219,
                'code' => 70,
                'name' => 'BAE',
                'province_code' => 33,
                'regency_code' => 19,
            ),
            219 => 
            array (
                'id' => 1220,
                'code' => 80,
                'name' => 'GEBOG',
                'province_code' => 33,
                'regency_code' => 19,
            ),
            220 => 
            array (
                'id' => 1221,
                'code' => 90,
                'name' => 'DAWE',
                'province_code' => 33,
                'regency_code' => 19,
            ),
            221 => 
            array (
                'id' => 1222,
                'code' => 10,
                'name' => 'KEDUNG',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            222 => 
            array (
                'id' => 1223,
                'code' => 20,
                'name' => 'PECANGAAN',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            223 => 
            array (
                'id' => 1224,
                'code' => 21,
                'name' => 'KALINYAMATAN',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            224 => 
            array (
                'id' => 1225,
                'code' => 30,
                'name' => 'WELAHAN',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            225 => 
            array (
                'id' => 1226,
                'code' => 40,
                'name' => 'MAYONG',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            226 => 
            array (
                'id' => 1227,
                'code' => 50,
                'name' => 'NALUMSARI',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            227 => 
            array (
                'id' => 1228,
                'code' => 60,
                'name' => 'BATEALIT',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            228 => 
            array (
                'id' => 1229,
                'code' => 70,
                'name' => 'TAHUNAN',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            229 => 
            array (
                'id' => 1230,
                'code' => 80,
                'name' => 'JEPARA',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            230 => 
            array (
                'id' => 1231,
                'code' => 90,
                'name' => 'MLONGGO',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            231 => 
            array (
                'id' => 1232,
                'code' => 91,
                'name' => 'PAKIS AJI',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            232 => 
            array (
                'id' => 1233,
                'code' => 100,
                'name' => 'BANGSRI',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            233 => 
            array (
                'id' => 1234,
                'code' => 101,
                'name' => 'KEMBANG',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            234 => 
            array (
                'id' => 1235,
                'code' => 110,
                'name' => 'KELING',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            235 => 
            array (
                'id' => 1236,
                'code' => 111,
                'name' => 'DONOROJO',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            236 => 
            array (
                'id' => 1237,
                'code' => 120,
                'name' => 'KARIMUNJAWA',
                'province_code' => 33,
                'regency_code' => 20,
            ),
            237 => 
            array (
                'id' => 1238,
                'code' => 10,
                'name' => 'MRANGGEN',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            238 => 
            array (
                'id' => 1239,
                'code' => 20,
                'name' => 'KARANGAWEN',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            239 => 
            array (
                'id' => 1240,
                'code' => 30,
                'name' => 'GUNTUR',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            240 => 
            array (
                'id' => 1241,
                'code' => 40,
                'name' => 'SAYUNG',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            241 => 
            array (
                'id' => 1242,
                'code' => 50,
                'name' => 'KARANG TENGAH',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            242 => 
            array (
                'id' => 1243,
                'code' => 60,
                'name' => 'BONANG',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            243 => 
            array (
                'id' => 1244,
                'code' => 70,
                'name' => 'DEMAK',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            244 => 
            array (
                'id' => 1245,
                'code' => 80,
                'name' => 'WONOSALAM',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            245 => 
            array (
                'id' => 1246,
                'code' => 90,
                'name' => 'DEMPET',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            246 => 
            array (
                'id' => 1247,
                'code' => 91,
                'name' => 'KEBONAGUNG',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            247 => 
            array (
                'id' => 1248,
                'code' => 100,
                'name' => 'GAJAH',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            248 => 
            array (
                'id' => 1249,
                'code' => 110,
                'name' => 'KARANGANYAR',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            249 => 
            array (
                'id' => 1250,
                'code' => 120,
                'name' => 'MIJEN',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            250 => 
            array (
                'id' => 1251,
                'code' => 130,
                'name' => 'WEDUNG',
                'province_code' => 33,
                'regency_code' => 21,
            ),
            251 => 
            array (
                'id' => 1252,
                'code' => 10,
                'name' => 'GETASAN',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            252 => 
            array (
                'id' => 1253,
                'code' => 20,
                'name' => 'TENGARAN',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            253 => 
            array (
                'id' => 1254,
                'code' => 30,
                'name' => 'SUSUKAN',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            254 => 
            array (
                'id' => 1255,
                'code' => 31,
                'name' => 'KALIWUNGU',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            255 => 
            array (
                'id' => 1256,
                'code' => 40,
                'name' => 'SURUH',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            256 => 
            array (
                'id' => 1257,
                'code' => 50,
                'name' => 'PABELAN',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            257 => 
            array (
                'id' => 1258,
                'code' => 60,
                'name' => 'TUNTANG',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            258 => 
            array (
                'id' => 1259,
                'code' => 70,
                'name' => 'BANYUBIRU',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            259 => 
            array (
                'id' => 1260,
                'code' => 80,
                'name' => 'JAMBU',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            260 => 
            array (
                'id' => 1261,
                'code' => 90,
                'name' => 'SUMOWONO',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            261 => 
            array (
                'id' => 1262,
                'code' => 100,
                'name' => 'AMBARAWA',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            262 => 
            array (
                'id' => 1263,
                'code' => 101,
                'name' => 'BANDUNGAN',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            263 => 
            array (
                'id' => 1264,
                'code' => 110,
                'name' => 'BAWEN',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            264 => 
            array (
                'id' => 1265,
                'code' => 120,
                'name' => 'BRINGIN',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            265 => 
            array (
                'id' => 1266,
                'code' => 121,
                'name' => 'BANCAK',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            266 => 
            array (
                'id' => 1267,
                'code' => 130,
                'name' => 'PRINGAPUS',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            267 => 
            array (
                'id' => 1268,
                'code' => 140,
                'name' => 'BERGAS',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            268 => 
            array (
                'id' => 1269,
                'code' => 151,
                'name' => 'UNGARAN BARAT',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            269 => 
            array (
                'id' => 1270,
                'code' => 152,
                'name' => 'UNGARAN TIMUR',
                'province_code' => 33,
                'regency_code' => 22,
            ),
            270 => 
            array (
                'id' => 1271,
                'code' => 10,
                'name' => 'PARAKAN',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            271 => 
            array (
                'id' => 1272,
                'code' => 11,
                'name' => 'KLEDUNG',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            272 => 
            array (
                'id' => 1273,
                'code' => 12,
                'name' => 'BANSARI',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            273 => 
            array (
                'id' => 1274,
                'code' => 20,
                'name' => 'BULU',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            274 => 
            array (
                'id' => 1275,
                'code' => 30,
                'name' => 'TEMANGGUNG',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            275 => 
            array (
                'id' => 1276,
                'code' => 31,
                'name' => 'TLOGOMULYO',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            276 => 
            array (
                'id' => 1277,
                'code' => 40,
                'name' => 'TEMBARAK',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            277 => 
            array (
                'id' => 1278,
                'code' => 41,
                'name' => 'SELOPAMPANG',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            278 => 
            array (
                'id' => 1279,
                'code' => 50,
                'name' => 'KRANGGAN',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            279 => 
            array (
                'id' => 1280,
                'code' => 60,
                'name' => 'PRINGSURAT',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            280 => 
            array (
                'id' => 1281,
                'code' => 70,
                'name' => 'KALORAN',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            281 => 
            array (
                'id' => 1282,
                'code' => 80,
                'name' => 'KANDANGAN',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            282 => 
            array (
                'id' => 1283,
                'code' => 90,
                'name' => 'KEDU',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            283 => 
            array (
                'id' => 1284,
                'code' => 100,
                'name' => 'NGADIREJO',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            284 => 
            array (
                'id' => 1285,
                'code' => 110,
                'name' => 'JUMO',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            285 => 
            array (
                'id' => 1286,
                'code' => 111,
                'name' => 'GEMAWANG',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            286 => 
            array (
                'id' => 1287,
                'code' => 120,
                'name' => 'CANDIROTO',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            287 => 
            array (
                'id' => 1288,
                'code' => 121,
                'name' => 'BEJEN',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            288 => 
            array (
                'id' => 1289,
                'code' => 130,
                'name' => 'TRETEP',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            289 => 
            array (
                'id' => 1290,
                'code' => 131,
                'name' => 'WONOBOYO',
                'province_code' => 33,
                'regency_code' => 23,
            ),
            290 => 
            array (
                'id' => 1291,
                'code' => 10,
                'name' => 'PLANTUNGAN',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            291 => 
            array (
                'id' => 1292,
                'code' => 20,
                'name' => 'SUKOREJO',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            292 => 
            array (
                'id' => 1293,
                'code' => 30,
                'name' => 'PAGERRUYUNG',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            293 => 
            array (
                'id' => 1294,
                'code' => 40,
                'name' => 'PATEAN',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            294 => 
            array (
                'id' => 1295,
                'code' => 50,
                'name' => 'SINGOROJO',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            295 => 
            array (
                'id' => 1296,
                'code' => 60,
                'name' => 'LIMBANGAN',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            296 => 
            array (
                'id' => 1297,
                'code' => 70,
                'name' => 'BOJA',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            297 => 
            array (
                'id' => 1298,
                'code' => 80,
                'name' => 'KALIWUNGU',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            298 => 
            array (
                'id' => 1299,
                'code' => 81,
                'name' => 'KALIWUNGU SELATAN',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            299 => 
            array (
                'id' => 1300,
                'code' => 90,
                'name' => 'BRANGSONG',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            300 => 
            array (
                'id' => 1301,
                'code' => 100,
                'name' => 'PEGANDON',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            301 => 
            array (
                'id' => 1302,
                'code' => 101,
                'name' => 'NGAMPEL',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            302 => 
            array (
                'id' => 1303,
                'code' => 110,
                'name' => 'GEMUH',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            303 => 
            array (
                'id' => 1304,
                'code' => 111,
                'name' => 'RINGINARUM',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            304 => 
            array (
                'id' => 1305,
                'code' => 120,
                'name' => 'WELERI',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            305 => 
            array (
                'id' => 1306,
                'code' => 130,
                'name' => 'ROWOSARI',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            306 => 
            array (
                'id' => 1307,
                'code' => 140,
                'name' => 'KANGKUNG',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            307 => 
            array (
                'id' => 1308,
                'code' => 150,
                'name' => 'CEPIRING',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            308 => 
            array (
                'id' => 1309,
                'code' => 160,
                'name' => 'PATEBON',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            309 => 
            array (
                'id' => 1310,
                'code' => 170,
                'name' => 'KENDAL',
                'province_code' => 33,
                'regency_code' => 24,
            ),
            310 => 
            array (
                'id' => 1311,
                'code' => 10,
                'name' => 'WONOTUNGGAL',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            311 => 
            array (
                'id' => 1312,
                'code' => 20,
                'name' => 'BANDAR',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            312 => 
            array (
                'id' => 1313,
                'code' => 30,
                'name' => 'BLADO',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            313 => 
            array (
                'id' => 1314,
                'code' => 40,
                'name' => 'REBAN',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            314 => 
            array (
                'id' => 1315,
                'code' => 50,
                'name' => 'BAWANG',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            315 => 
            array (
                'id' => 1316,
                'code' => 60,
                'name' => 'TERSONO',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            316 => 
            array (
                'id' => 1317,
                'code' => 70,
                'name' => 'GRINGSING',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            317 => 
            array (
                'id' => 1318,
                'code' => 80,
                'name' => 'LIMPUNG',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            318 => 
            array (
                'id' => 1319,
                'code' => 81,
                'name' => 'BANYUPUTIH',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            319 => 
            array (
                'id' => 1320,
                'code' => 90,
                'name' => 'SUBAH',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            320 => 
            array (
                'id' => 1321,
                'code' => 91,
                'name' => 'PECALUNGAN',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            321 => 
            array (
                'id' => 1322,
                'code' => 100,
                'name' => 'TULIS',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            322 => 
            array (
                'id' => 1323,
                'code' => 101,
                'name' => 'KANDEMAN',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            323 => 
            array (
                'id' => 1324,
                'code' => 110,
                'name' => 'BATANG',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            324 => 
            array (
                'id' => 1325,
                'code' => 120,
                'name' => 'WARUNGASEM',
                'province_code' => 33,
                'regency_code' => 25,
            ),
            325 => 
            array (
                'id' => 1326,
                'code' => 10,
                'name' => 'KANDANGSERANG',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            326 => 
            array (
                'id' => 1327,
                'code' => 20,
                'name' => 'PANINGGARAN',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            327 => 
            array (
                'id' => 1328,
                'code' => 30,
                'name' => 'LEBAKBARANG',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            328 => 
            array (
                'id' => 1329,
                'code' => 40,
                'name' => 'PETUNGKRIONO',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            329 => 
            array (
                'id' => 1330,
                'code' => 50,
                'name' => 'TALUN',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            330 => 
            array (
                'id' => 1331,
                'code' => 60,
                'name' => 'DORO',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            331 => 
            array (
                'id' => 1332,
                'code' => 70,
                'name' => 'KARANGANYAR',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            332 => 
            array (
                'id' => 1333,
                'code' => 80,
                'name' => 'KAJEN',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            333 => 
            array (
                'id' => 1334,
                'code' => 90,
                'name' => 'KESESI',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            334 => 
            array (
                'id' => 1335,
                'code' => 100,
                'name' => 'SRAGI',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            335 => 
            array (
                'id' => 1336,
                'code' => 101,
                'name' => 'SIWALAN',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            336 => 
            array (
                'id' => 1337,
                'code' => 110,
                'name' => 'BOJONG',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            337 => 
            array (
                'id' => 1338,
                'code' => 120,
                'name' => 'WONOPRINGGO',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            338 => 
            array (
                'id' => 1339,
                'code' => 130,
                'name' => 'KEDUNGWUNI',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            339 => 
            array (
                'id' => 1340,
                'code' => 131,
                'name' => 'KARANGDADAP',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            340 => 
            array (
                'id' => 1341,
                'code' => 140,
                'name' => 'BUARAN',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            341 => 
            array (
                'id' => 1342,
                'code' => 150,
                'name' => 'TIRTO',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            342 => 
            array (
                'id' => 1343,
                'code' => 160,
                'name' => 'WIRADESA',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            343 => 
            array (
                'id' => 1344,
                'code' => 161,
                'name' => 'WONOKERTO',
                'province_code' => 33,
                'regency_code' => 26,
            ),
            344 => 
            array (
                'id' => 1345,
                'code' => 10,
                'name' => 'MOGA',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            345 => 
            array (
                'id' => 1346,
                'code' => 11,
                'name' => 'WARUNGPRING',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            346 => 
            array (
                'id' => 1347,
                'code' => 20,
                'name' => 'PULOSARI',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            347 => 
            array (
                'id' => 1348,
                'code' => 30,
                'name' => 'BELIK',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            348 => 
            array (
                'id' => 1349,
                'code' => 40,
                'name' => 'WATUKUMPUL',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            349 => 
            array (
                'id' => 1350,
                'code' => 50,
                'name' => 'BODEH',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            350 => 
            array (
                'id' => 1351,
                'code' => 60,
                'name' => 'BANTARBOLANG',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            351 => 
            array (
                'id' => 1352,
                'code' => 70,
                'name' => 'RANDUDONGKAL',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            352 => 
            array (
                'id' => 1353,
                'code' => 80,
                'name' => 'PEMALANG',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            353 => 
            array (
                'id' => 1354,
                'code' => 90,
                'name' => 'TAMAN',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            354 => 
            array (
                'id' => 1355,
                'code' => 100,
                'name' => 'PETARUKAN',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            355 => 
            array (
                'id' => 1356,
                'code' => 110,
                'name' => 'AMPELGADING',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            356 => 
            array (
                'id' => 1357,
                'code' => 120,
                'name' => 'COMAL',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            357 => 
            array (
                'id' => 1358,
                'code' => 130,
                'name' => 'ULUJAMI',
                'province_code' => 33,
                'regency_code' => 27,
            ),
            358 => 
            array (
                'id' => 1359,
                'code' => 10,
                'name' => 'MARGASARI',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            359 => 
            array (
                'id' => 1360,
                'code' => 20,
                'name' => 'BUMIJAWA',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            360 => 
            array (
                'id' => 1361,
                'code' => 30,
                'name' => 'BOJONG',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            361 => 
            array (
                'id' => 1362,
                'code' => 40,
                'name' => 'BALAPULANG',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            362 => 
            array (
                'id' => 1363,
                'code' => 50,
                'name' => 'PAGERBARANG',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            363 => 
            array (
                'id' => 1364,
                'code' => 60,
                'name' => 'LEBAKSIU',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            364 => 
            array (
                'id' => 1365,
                'code' => 70,
                'name' => 'JATINEGARA',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            365 => 
            array (
                'id' => 1366,
                'code' => 80,
                'name' => 'KEDUNG BANTENG',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            366 => 
            array (
                'id' => 1367,
                'code' => 90,
                'name' => 'PANGKAH',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            367 => 
            array (
                'id' => 1368,
                'code' => 100,
                'name' => 'SLAWI',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            368 => 
            array (
                'id' => 1369,
                'code' => 110,
                'name' => 'DUKUHWARU',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            369 => 
            array (
                'id' => 1370,
                'code' => 120,
                'name' => 'ADIWERNA',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            370 => 
            array (
                'id' => 1371,
                'code' => 130,
                'name' => 'DUKUHTURI',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            371 => 
            array (
                'id' => 1372,
                'code' => 140,
                'name' => 'TALANG',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            372 => 
            array (
                'id' => 1373,
                'code' => 150,
                'name' => 'TARUB',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            373 => 
            array (
                'id' => 1374,
                'code' => 160,
                'name' => 'KRAMAT',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            374 => 
            array (
                'id' => 1375,
                'code' => 170,
                'name' => 'SURADADI',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            375 => 
            array (
                'id' => 1376,
                'code' => 180,
                'name' => 'WARUREJA',
                'province_code' => 33,
                'regency_code' => 28,
            ),
            376 => 
            array (
                'id' => 1377,
                'code' => 10,
                'name' => 'SALEM',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            377 => 
            array (
                'id' => 1378,
                'code' => 20,
                'name' => 'BANTARKAWUNG',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            378 => 
            array (
                'id' => 1379,
                'code' => 30,
                'name' => 'BUMIAYU',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            379 => 
            array (
                'id' => 1380,
                'code' => 40,
                'name' => 'PAGUYANGAN',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            380 => 
            array (
                'id' => 1381,
                'code' => 50,
                'name' => 'SIRAMPOG',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            381 => 
            array (
                'id' => 1382,
                'code' => 60,
                'name' => 'TONJONG',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            382 => 
            array (
                'id' => 1383,
                'code' => 70,
                'name' => 'LARANGAN',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            383 => 
            array (
                'id' => 1384,
                'code' => 80,
                'name' => 'KETANGGUNGAN',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            384 => 
            array (
                'id' => 1385,
                'code' => 90,
                'name' => 'BANJARHARJO',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            385 => 
            array (
                'id' => 1386,
                'code' => 100,
                'name' => 'LOSARI',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            386 => 
            array (
                'id' => 1387,
                'code' => 110,
                'name' => 'TANJUNG',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            387 => 
            array (
                'id' => 1388,
                'code' => 120,
                'name' => 'KERSANA',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            388 => 
            array (
                'id' => 1389,
                'code' => 130,
                'name' => 'BULAKAMBA',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            389 => 
            array (
                'id' => 1390,
                'code' => 140,
                'name' => 'WANASARI',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            390 => 
            array (
                'id' => 1391,
                'code' => 150,
                'name' => 'SONGGOM',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            391 => 
            array (
                'id' => 1392,
                'code' => 160,
                'name' => 'JATIBARANG',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            392 => 
            array (
                'id' => 1393,
                'code' => 170,
                'name' => 'BREBES',
                'province_code' => 33,
                'regency_code' => 29,
            ),
            393 => 
            array (
                'id' => 1394,
                'code' => 10,
                'name' => 'MAGELANG SELATAN',
                'province_code' => 33,
                'regency_code' => 71,
            ),
            394 => 
            array (
                'id' => 1395,
                'code' => 11,
                'name' => 'MAGELANG TENGAH',
                'province_code' => 33,
                'regency_code' => 71,
            ),
            395 => 
            array (
                'id' => 1396,
                'code' => 20,
                'name' => 'MAGELANG UTARA',
                'province_code' => 33,
                'regency_code' => 71,
            ),
            396 => 
            array (
                'id' => 1397,
                'code' => 10,
                'name' => 'LAWEYAN',
                'province_code' => 33,
                'regency_code' => 72,
            ),
            397 => 
            array (
                'id' => 1398,
                'code' => 20,
                'name' => 'SERENGAN',
                'province_code' => 33,
                'regency_code' => 72,
            ),
            398 => 
            array (
                'id' => 1399,
                'code' => 30,
                'name' => 'PASAR KLIWON',
                'province_code' => 33,
                'regency_code' => 72,
            ),
            399 => 
            array (
                'id' => 1400,
                'code' => 40,
                'name' => 'JEBRES',
                'province_code' => 33,
                'regency_code' => 72,
            ),
            400 => 
            array (
                'id' => 1401,
                'code' => 50,
                'name' => 'BANJARSARI',
                'province_code' => 33,
                'regency_code' => 72,
            ),
            401 => 
            array (
                'id' => 1402,
                'code' => 10,
                'name' => 'ARGOMULYO',
                'province_code' => 33,
                'regency_code' => 73,
            ),
            402 => 
            array (
                'id' => 1403,
                'code' => 20,
                'name' => 'TINGKIR',
                'province_code' => 33,
                'regency_code' => 73,
            ),
            403 => 
            array (
                'id' => 1404,
                'code' => 30,
                'name' => 'SIDOMUKTI',
                'province_code' => 33,
                'regency_code' => 73,
            ),
            404 => 
            array (
                'id' => 1405,
                'code' => 40,
                'name' => 'SIDOREJO',
                'province_code' => 33,
                'regency_code' => 73,
            ),
            405 => 
            array (
                'id' => 1406,
                'code' => 10,
                'name' => 'MIJEN',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            406 => 
            array (
                'id' => 1407,
                'code' => 20,
                'name' => 'GUNUNG PATI',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            407 => 
            array (
                'id' => 1408,
                'code' => 30,
                'name' => 'BANYUMANIK',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            408 => 
            array (
                'id' => 1409,
                'code' => 40,
                'name' => 'GAJAH MUNGKUR',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            409 => 
            array (
                'id' => 1410,
                'code' => 50,
                'name' => 'SEMARANG SELATAN',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            410 => 
            array (
                'id' => 1411,
                'code' => 60,
                'name' => 'CANDISARI',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            411 => 
            array (
                'id' => 1412,
                'code' => 70,
                'name' => 'TEMBALANG',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            412 => 
            array (
                'id' => 1413,
                'code' => 80,
                'name' => 'PEDURUNGAN',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            413 => 
            array (
                'id' => 1414,
                'code' => 90,
                'name' => 'GENUK',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            414 => 
            array (
                'id' => 1415,
                'code' => 100,
                'name' => 'GAYAMSARI',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            415 => 
            array (
                'id' => 1416,
                'code' => 110,
                'name' => 'SEMARANG TIMUR',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            416 => 
            array (
                'id' => 1417,
                'code' => 120,
                'name' => 'SEMARANG UTARA',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            417 => 
            array (
                'id' => 1418,
                'code' => 130,
                'name' => 'SEMARANG TENGAH',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            418 => 
            array (
                'id' => 1419,
                'code' => 140,
                'name' => 'SEMARANG BARAT',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            419 => 
            array (
                'id' => 1420,
                'code' => 150,
                'name' => 'TUGU',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            420 => 
            array (
                'id' => 1421,
                'code' => 160,
                'name' => 'NGALIYAN',
                'province_code' => 33,
                'regency_code' => 74,
            ),
            421 => 
            array (
                'id' => 1422,
                'code' => 10,
                'name' => 'PEKALONGAN BARAT',
                'province_code' => 33,
                'regency_code' => 75,
            ),
            422 => 
            array (
                'id' => 1423,
                'code' => 20,
                'name' => 'PEKALONGAN TIMUR',
                'province_code' => 33,
                'regency_code' => 75,
            ),
            423 => 
            array (
                'id' => 1424,
                'code' => 30,
                'name' => 'PEKALONGAN SELATAN',
                'province_code' => 33,
                'regency_code' => 75,
            ),
            424 => 
            array (
                'id' => 1425,
                'code' => 40,
                'name' => 'PEKALONGAN UTARA',
                'province_code' => 33,
                'regency_code' => 75,
            ),
            425 => 
            array (
                'id' => 1426,
                'code' => 10,
                'name' => 'TEGAL SELATAN',
                'province_code' => 33,
                'regency_code' => 76,
            ),
            426 => 
            array (
                'id' => 1427,
                'code' => 20,
                'name' => 'TEGAL TIMUR',
                'province_code' => 33,
                'regency_code' => 76,
            ),
            427 => 
            array (
                'id' => 1428,
                'code' => 30,
                'name' => 'TEGAL BARAT',
                'province_code' => 33,
                'regency_code' => 76,
            ),
            428 => 
            array (
                'id' => 1429,
                'code' => 40,
                'name' => 'MARGADANA',
                'province_code' => 33,
                'regency_code' => 76,
            ),
            429 => 
            array (
                'id' => 1430,
                'code' => 10,
                'name' => 'MANTRIJERON',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            430 => 
            array (
                'id' => 1431,
                'code' => 20,
                'name' => 'KRATON',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            431 => 
            array (
                'id' => 1432,
                'code' => 30,
                'name' => 'MERGANGSAN',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            432 => 
            array (
                'id' => 1433,
                'code' => 40,
                'name' => 'UMBULHARJO',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            433 => 
            array (
                'id' => 1434,
                'code' => 50,
                'name' => 'KOTAGEDE',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            434 => 
            array (
                'id' => 1435,
                'code' => 60,
                'name' => 'GONDOKUSUMAN',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            435 => 
            array (
                'id' => 1436,
                'code' => 70,
                'name' => 'DANUREJAN',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            436 => 
            array (
                'id' => 1437,
                'code' => 80,
                'name' => 'PAKUALAMAN',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            437 => 
            array (
                'id' => 1438,
                'code' => 90,
                'name' => 'GONDOMANAN',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            438 => 
            array (
                'id' => 1439,
                'code' => 100,
                'name' => 'NGAMPILAN',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            439 => 
            array (
                'id' => 1440,
                'code' => 110,
                'name' => 'WIROBRAJAN',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            440 => 
            array (
                'id' => 1441,
                'code' => 120,
                'name' => 'GEDONG TENGEN',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            441 => 
            array (
                'id' => 1442,
                'code' => 130,
                'name' => 'JETIS',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            442 => 
            array (
                'id' => 1443,
                'code' => 140,
                'name' => 'TEGALREJO',
                'province_code' => 34,
                'regency_code' => 71,
            ),
            443 => 
            array (
                'id' => 1444,
                'code' => 10,
                'name' => 'PESANGGARAN',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            444 => 
            array (
                'id' => 1445,
                'code' => 11,
                'name' => 'SILIRAGUNG',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            445 => 
            array (
                'id' => 1446,
                'code' => 20,
                'name' => 'BANGOREJO',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            446 => 
            array (
                'id' => 1447,
                'code' => 30,
                'name' => 'PURWOHARJO',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            447 => 
            array (
                'id' => 1448,
                'code' => 40,
                'name' => 'TEGALDLIMO',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            448 => 
            array (
                'id' => 1449,
                'code' => 50,
                'name' => 'MUNCAR',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            449 => 
            array (
                'id' => 1450,
                'code' => 60,
                'name' => 'CLURING',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            450 => 
            array (
                'id' => 1451,
                'code' => 70,
                'name' => 'GAMBIRAN',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            451 => 
            array (
                'id' => 1452,
                'code' => 71,
                'name' => 'TEGALSARI',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            452 => 
            array (
                'id' => 1453,
                'code' => 80,
                'name' => 'GLENMORE',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            453 => 
            array (
                'id' => 1454,
                'code' => 90,
                'name' => 'KALIBARU',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            454 => 
            array (
                'id' => 1455,
                'code' => 100,
                'name' => 'GENTENG',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            455 => 
            array (
                'id' => 1456,
                'code' => 110,
                'name' => 'SRONO',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            456 => 
            array (
                'id' => 1457,
                'code' => 120,
                'name' => 'ROGOJAMPI',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            457 => 
            array (
                'id' => 1458,
                'code' => 121,
                'name' => 'BLIMBINGSARI',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            458 => 
            array (
                'id' => 1459,
                'code' => 130,
                'name' => 'KABAT',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            459 => 
            array (
                'id' => 1460,
                'code' => 140,
                'name' => 'SINGOJURUH',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            460 => 
            array (
                'id' => 1461,
                'code' => 150,
                'name' => 'SEMPU',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            461 => 
            array (
                'id' => 1462,
                'code' => 160,
                'name' => 'SONGGON',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            462 => 
            array (
                'id' => 1463,
                'code' => 170,
                'name' => 'GLAGAH',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            463 => 
            array (
                'id' => 1464,
                'code' => 171,
                'name' => 'LICIN',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            464 => 
            array (
                'id' => 1465,
                'code' => 180,
                'name' => 'BANYUWANGI',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            465 => 
            array (
                'id' => 1466,
                'code' => 190,
                'name' => 'GIRI',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            466 => 
            array (
                'id' => 1467,
                'code' => 200,
                'name' => 'KALIPURO',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            467 => 
            array (
                'id' => 1468,
                'code' => 210,
                'name' => 'WONGSOREJO',
                'province_code' => 35,
                'regency_code' => 10,
            ),
            468 => 
            array (
                'id' => 1469,
                'code' => 10,
                'name' => 'MAESAN',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            469 => 
            array (
                'id' => 1470,
                'code' => 20,
                'name' => 'GRUJUGAN',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            470 => 
            array (
                'id' => 1471,
                'code' => 30,
                'name' => 'TAMANAN',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            471 => 
            array (
                'id' => 1472,
                'code' => 31,
                'name' => 'JAMBESARI DARUS SHOLAH',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            472 => 
            array (
                'id' => 1473,
                'code' => 40,
                'name' => 'PUJER',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            473 => 
            array (
                'id' => 1474,
                'code' => 50,
                'name' => 'TLOGOSARI',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            474 => 
            array (
                'id' => 1475,
                'code' => 60,
                'name' => 'SUKOSARI',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            475 => 
            array (
                'id' => 1476,
                'code' => 61,
                'name' => 'SUMBER WRINGIN',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            476 => 
            array (
                'id' => 1477,
                'code' => 70,
                'name' => 'TAPEN',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            477 => 
            array (
                'id' => 1478,
                'code' => 80,
                'name' => 'WONOSARI',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            478 => 
            array (
                'id' => 1479,
                'code' => 90,
                'name' => 'TENGGARANG',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            479 => 
            array (
                'id' => 1480,
                'code' => 100,
                'name' => 'BONDOWOSO',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            480 => 
            array (
                'id' => 1481,
                'code' => 110,
                'name' => 'CURAH DAMI',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            481 => 
            array (
                'id' => 1482,
                'code' => 111,
                'name' => 'BINAKAL',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            482 => 
            array (
                'id' => 1483,
                'code' => 120,
                'name' => 'PAKEM',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            483 => 
            array (
                'id' => 1484,
                'code' => 130,
                'name' => 'WRINGIN',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            484 => 
            array (
                'id' => 1485,
                'code' => 140,
                'name' => 'TEGALAMPEL',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            485 => 
            array (
                'id' => 1486,
                'code' => 141,
                'name' => 'TAMAN KROCOK',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            486 => 
            array (
                'id' => 1487,
                'code' => 150,
                'name' => 'KLABANG',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            487 => 
            array (
                'id' => 1488,
                'code' => 151,
                'name' => 'IJEN',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            488 => 
            array (
                'id' => 1489,
                'code' => 152,
                'name' => 'BOTOLINGGO',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            489 => 
            array (
                'id' => 1490,
                'code' => 160,
                'name' => 'PRAJEKAN',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            490 => 
            array (
                'id' => 1491,
                'code' => 170,
                'name' => 'CERMEE',
                'province_code' => 35,
                'regency_code' => 11,
            ),
            491 => 
            array (
                'id' => 1492,
                'code' => 10,
                'name' => 'SUMBERMALANG',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            492 => 
            array (
                'id' => 1493,
                'code' => 20,
                'name' => 'JATIBANTENG',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            493 => 
            array (
                'id' => 1494,
                'code' => 30,
                'name' => 'BANYUGLUGUR',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            494 => 
            array (
                'id' => 1495,
                'code' => 40,
                'name' => 'BESUKI',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            495 => 
            array (
                'id' => 1496,
                'code' => 50,
                'name' => 'SUBOH',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            496 => 
            array (
                'id' => 1497,
                'code' => 60,
                'name' => 'MLANDINGAN',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            497 => 
            array (
                'id' => 1498,
                'code' => 70,
                'name' => 'BUNGATAN',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            498 => 
            array (
                'id' => 1499,
                'code' => 80,
                'name' => 'KENDIT',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            499 => 
            array (
                'id' => 1500,
                'code' => 90,
                'name' => 'PANARUKAN',
                'province_code' => 35,
                'regency_code' => 12,
            ),
        ));
        DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'code' => 100,
                'name' => 'SITUBONDO',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            1 => 
            array (
                'id' => 1502,
                'code' => 110,
                'name' => 'MANGARAN',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            2 => 
            array (
                'id' => 1503,
                'code' => 120,
                'name' => 'PANJI',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            3 => 
            array (
                'id' => 1504,
                'code' => 130,
                'name' => 'KAPONGAN',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            4 => 
            array (
                'id' => 1505,
                'code' => 140,
                'name' => 'ARJASA',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            5 => 
            array (
                'id' => 1506,
                'code' => 150,
                'name' => 'JANGKAR',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            6 => 
            array (
                'id' => 1507,
                'code' => 160,
                'name' => 'ASEMBAGUS',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            7 => 
            array (
                'id' => 1508,
                'code' => 170,
                'name' => 'BANYUPUTIH',
                'province_code' => 35,
                'regency_code' => 12,
            ),
            8 => 
            array (
                'id' => 1509,
                'code' => 10,
                'name' => 'SUKAPURA',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            9 => 
            array (
                'id' => 1510,
                'code' => 20,
                'name' => 'SUMBER',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            10 => 
            array (
                'id' => 1511,
                'code' => 30,
                'name' => 'KURIPAN',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            11 => 
            array (
                'id' => 1512,
                'code' => 40,
                'name' => 'BANTARAN',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            12 => 
            array (
                'id' => 1513,
                'code' => 50,
                'name' => 'LECES',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            13 => 
            array (
                'id' => 1514,
                'code' => 60,
                'name' => 'TEGALSIWALAN',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            14 => 
            array (
                'id' => 1515,
                'code' => 70,
                'name' => 'BANYUANYAR',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            15 => 
            array (
                'id' => 1516,
                'code' => 80,
                'name' => 'TIRIS',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            16 => 
            array (
                'id' => 1517,
                'code' => 90,
                'name' => 'KRUCIL',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            17 => 
            array (
                'id' => 1518,
                'code' => 100,
                'name' => 'GADING',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            18 => 
            array (
                'id' => 1519,
                'code' => 110,
                'name' => 'PAKUNIRAN',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            19 => 
            array (
                'id' => 1520,
                'code' => 120,
                'name' => 'KOTAANYAR',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            20 => 
            array (
                'id' => 1521,
                'code' => 130,
                'name' => 'PAITON',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            21 => 
            array (
                'id' => 1522,
                'code' => 140,
                'name' => 'BESUK',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            22 => 
            array (
                'id' => 1523,
                'code' => 150,
                'name' => 'KRAKSAAN',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            23 => 
            array (
                'id' => 1524,
                'code' => 160,
                'name' => 'KREJENGAN',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            24 => 
            array (
                'id' => 1525,
                'code' => 170,
                'name' => 'PAJARAKAN',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            25 => 
            array (
                'id' => 1526,
                'code' => 180,
                'name' => 'MARON',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            26 => 
            array (
                'id' => 1527,
                'code' => 190,
                'name' => 'GENDING',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            27 => 
            array (
                'id' => 1528,
                'code' => 200,
                'name' => 'DRINGU',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            28 => 
            array (
                'id' => 1529,
                'code' => 210,
                'name' => 'WONOMERTO',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            29 => 
            array (
                'id' => 1530,
                'code' => 220,
                'name' => 'LUMBANG',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            30 => 
            array (
                'id' => 1531,
                'code' => 230,
                'name' => 'TONGAS',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            31 => 
            array (
                'id' => 1532,
                'code' => 240,
                'name' => 'SUMBERASIH',
                'province_code' => 35,
                'regency_code' => 13,
            ),
            32 => 
            array (
                'id' => 1533,
                'code' => 10,
                'name' => 'PURWODADI',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            33 => 
            array (
                'id' => 1534,
                'code' => 20,
                'name' => 'TUTUR',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            34 => 
            array (
                'id' => 1535,
                'code' => 30,
                'name' => 'PUSPO',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            35 => 
            array (
                'id' => 1536,
                'code' => 40,
                'name' => 'TOSARI',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            36 => 
            array (
                'id' => 1537,
                'code' => 50,
                'name' => 'LUMBANG',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            37 => 
            array (
                'id' => 1538,
                'code' => 60,
                'name' => 'PASREPAN',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            38 => 
            array (
                'id' => 1539,
                'code' => 70,
                'name' => 'KEJAYAN',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            39 => 
            array (
                'id' => 1540,
                'code' => 80,
                'name' => 'WONOREJO',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            40 => 
            array (
                'id' => 1541,
                'code' => 90,
                'name' => 'PURWOSARI',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            41 => 
            array (
                'id' => 1542,
                'code' => 100,
                'name' => 'PRIGEN',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            42 => 
            array (
                'id' => 1543,
                'code' => 110,
                'name' => 'SUKOREJO',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            43 => 
            array (
                'id' => 1544,
                'code' => 120,
                'name' => 'PANDAAN',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            44 => 
            array (
                'id' => 1545,
                'code' => 130,
                'name' => 'GEMPOL',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            45 => 
            array (
                'id' => 1546,
                'code' => 140,
                'name' => 'BEJI',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            46 => 
            array (
                'id' => 1547,
                'code' => 150,
                'name' => 'BANGIL',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            47 => 
            array (
                'id' => 1548,
                'code' => 160,
                'name' => 'REMBANG',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            48 => 
            array (
                'id' => 1549,
                'code' => 170,
                'name' => 'KRATON',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            49 => 
            array (
                'id' => 1550,
                'code' => 180,
                'name' => 'POHJENTREK',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            50 => 
            array (
                'id' => 1551,
                'code' => 190,
                'name' => 'GONDANG WETAN',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            51 => 
            array (
                'id' => 1552,
                'code' => 200,
                'name' => 'REJOSO',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            52 => 
            array (
                'id' => 1553,
                'code' => 210,
                'name' => 'WINONGAN',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            53 => 
            array (
                'id' => 1554,
                'code' => 220,
                'name' => 'GRATI',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            54 => 
            array (
                'id' => 1555,
                'code' => 230,
                'name' => 'LEKOK',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            55 => 
            array (
                'id' => 1556,
                'code' => 240,
                'name' => 'NGULING',
                'province_code' => 35,
                'regency_code' => 14,
            ),
            56 => 
            array (
                'id' => 1557,
                'code' => 10,
                'name' => 'TARIK',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            57 => 
            array (
                'id' => 1558,
                'code' => 20,
                'name' => 'PRAMBON',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            58 => 
            array (
                'id' => 1559,
                'code' => 30,
                'name' => 'KREMBUNG',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            59 => 
            array (
                'id' => 1560,
                'code' => 40,
                'name' => 'PORONG',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            60 => 
            array (
                'id' => 1561,
                'code' => 50,
                'name' => 'JABON',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            61 => 
            array (
                'id' => 1562,
                'code' => 60,
                'name' => 'TANGGULANGIN',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            62 => 
            array (
                'id' => 1563,
                'code' => 70,
                'name' => 'CANDI',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            63 => 
            array (
                'id' => 1564,
                'code' => 80,
                'name' => 'TULANGAN',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            64 => 
            array (
                'id' => 1565,
                'code' => 90,
                'name' => 'WONOAYU',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            65 => 
            array (
                'id' => 1566,
                'code' => 100,
                'name' => 'SUKODONO',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            66 => 
            array (
                'id' => 1567,
                'code' => 110,
                'name' => 'SIDOARJO',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            67 => 
            array (
                'id' => 1568,
                'code' => 120,
                'name' => 'BUDURAN',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            68 => 
            array (
                'id' => 1569,
                'code' => 130,
                'name' => 'SEDATI',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            69 => 
            array (
                'id' => 1570,
                'code' => 140,
                'name' => 'WARU',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            70 => 
            array (
                'id' => 1571,
                'code' => 150,
                'name' => 'GEDANGAN',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            71 => 
            array (
                'id' => 1572,
                'code' => 160,
                'name' => 'TAMAN',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            72 => 
            array (
                'id' => 1573,
                'code' => 170,
                'name' => 'KRIAN',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            73 => 
            array (
                'id' => 1574,
                'code' => 180,
                'name' => 'BALONG BENDO',
                'province_code' => 35,
                'regency_code' => 15,
            ),
            74 => 
            array (
                'id' => 1575,
                'code' => 10,
                'name' => 'JATIREJO',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            75 => 
            array (
                'id' => 1576,
                'code' => 20,
                'name' => 'GONDANG',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            76 => 
            array (
                'id' => 1577,
                'code' => 30,
                'name' => 'PACET',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            77 => 
            array (
                'id' => 1578,
                'code' => 40,
                'name' => 'TRAWAS',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            78 => 
            array (
                'id' => 1579,
                'code' => 50,
                'name' => 'NGORO',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            79 => 
            array (
                'id' => 1580,
                'code' => 60,
                'name' => 'PUNGGING',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            80 => 
            array (
                'id' => 1581,
                'code' => 70,
                'name' => 'KUTOREJO',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            81 => 
            array (
                'id' => 1582,
                'code' => 80,
                'name' => 'MOJOSARI',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            82 => 
            array (
                'id' => 1583,
                'code' => 90,
                'name' => 'BANGSAL',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            83 => 
            array (
                'id' => 1584,
                'code' => 91,
                'name' => 'MOJOANYAR',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            84 => 
            array (
                'id' => 1585,
                'code' => 100,
                'name' => 'DLANGGU',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            85 => 
            array (
                'id' => 1586,
                'code' => 110,
                'name' => 'PURI',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            86 => 
            array (
                'id' => 1587,
                'code' => 120,
                'name' => 'TROWULAN',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            87 => 
            array (
                'id' => 1588,
                'code' => 130,
                'name' => 'SOOKO',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            88 => 
            array (
                'id' => 1589,
                'code' => 140,
                'name' => 'GEDEK',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            89 => 
            array (
                'id' => 1590,
                'code' => 150,
                'name' => 'KEMLAGI',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            90 => 
            array (
                'id' => 1591,
                'code' => 160,
                'name' => 'JETIS',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            91 => 
            array (
                'id' => 1592,
                'code' => 170,
                'name' => 'DAWAR BLANDONG',
                'province_code' => 35,
                'regency_code' => 16,
            ),
            92 => 
            array (
                'id' => 1593,
                'code' => 10,
                'name' => 'BANDAR KEDUNG MULYO',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            93 => 
            array (
                'id' => 1594,
                'code' => 20,
                'name' => 'PERAK',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            94 => 
            array (
                'id' => 1595,
                'code' => 30,
                'name' => 'GUDO',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            95 => 
            array (
                'id' => 1596,
                'code' => 40,
                'name' => 'DIWEK',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            96 => 
            array (
                'id' => 1597,
                'code' => 50,
                'name' => 'NGORO',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            97 => 
            array (
                'id' => 1598,
                'code' => 60,
                'name' => 'MOJOWARNO',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            98 => 
            array (
                'id' => 1599,
                'code' => 70,
                'name' => 'BARENG',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            99 => 
            array (
                'id' => 1600,
                'code' => 80,
                'name' => 'WONOSALAM',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            100 => 
            array (
                'id' => 1601,
                'code' => 90,
                'name' => 'MOJOAGUNG',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            101 => 
            array (
                'id' => 1602,
                'code' => 100,
                'name' => 'SUMOBITO',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            102 => 
            array (
                'id' => 1603,
                'code' => 110,
                'name' => 'JOGO ROTO',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            103 => 
            array (
                'id' => 1604,
                'code' => 120,
                'name' => 'PETERONGAN',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            104 => 
            array (
                'id' => 1605,
                'code' => 130,
                'name' => 'JOMBANG',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            105 => 
            array (
                'id' => 1606,
                'code' => 140,
                'name' => 'MEGALUH',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            106 => 
            array (
                'id' => 1607,
                'code' => 150,
                'name' => 'TEMBELANG',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            107 => 
            array (
                'id' => 1608,
                'code' => 160,
                'name' => 'KESAMBEN',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            108 => 
            array (
                'id' => 1609,
                'code' => 170,
                'name' => 'KUDU',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            109 => 
            array (
                'id' => 1610,
                'code' => 171,
                'name' => 'NGUSIKAN',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            110 => 
            array (
                'id' => 1611,
                'code' => 180,
                'name' => 'PLOSO',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            111 => 
            array (
                'id' => 1612,
                'code' => 190,
                'name' => 'KABUH',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            112 => 
            array (
                'id' => 1613,
                'code' => 200,
                'name' => 'PLANDAAN',
                'province_code' => 35,
                'regency_code' => 17,
            ),
            113 => 
            array (
                'id' => 1614,
                'code' => 10,
                'name' => 'SAWAHAN',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            114 => 
            array (
                'id' => 1615,
                'code' => 20,
                'name' => 'NGETOS',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            115 => 
            array (
                'id' => 1616,
                'code' => 30,
                'name' => 'BERBEK',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            116 => 
            array (
                'id' => 1617,
                'code' => 40,
                'name' => 'LOCERET',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            117 => 
            array (
                'id' => 1618,
                'code' => 50,
                'name' => 'PACE',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            118 => 
            array (
                'id' => 1619,
                'code' => 60,
                'name' => 'TANJUNGANOM',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            119 => 
            array (
                'id' => 1620,
                'code' => 70,
                'name' => 'PRAMBON',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            120 => 
            array (
                'id' => 1621,
                'code' => 80,
                'name' => 'NGRONGGOT',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            121 => 
            array (
                'id' => 1622,
                'code' => 90,
                'name' => 'KERTOSONO',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            122 => 
            array (
                'id' => 1623,
                'code' => 100,
                'name' => 'PATIANROWO',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            123 => 
            array (
                'id' => 1624,
                'code' => 110,
                'name' => 'BARON',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            124 => 
            array (
                'id' => 1625,
                'code' => 120,
                'name' => 'GONDANG',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            125 => 
            array (
                'id' => 1626,
                'code' => 130,
                'name' => 'SUKOMORO',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            126 => 
            array (
                'id' => 1627,
                'code' => 140,
                'name' => 'NGANJUK',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            127 => 
            array (
                'id' => 1628,
                'code' => 150,
                'name' => 'BAGOR',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            128 => 
            array (
                'id' => 1629,
                'code' => 160,
                'name' => 'WILANGAN',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            129 => 
            array (
                'id' => 1630,
                'code' => 170,
                'name' => 'REJOSO',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            130 => 
            array (
                'id' => 1631,
                'code' => 180,
                'name' => 'NGLUYU',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            131 => 
            array (
                'id' => 1632,
                'code' => 190,
                'name' => 'LENGKONG',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            132 => 
            array (
                'id' => 1633,
                'code' => 200,
                'name' => 'JATIKALEN',
                'province_code' => 35,
                'regency_code' => 18,
            ),
            133 => 
            array (
                'id' => 1634,
                'code' => 10,
                'name' => 'KEBONSARI',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            134 => 
            array (
                'id' => 1635,
                'code' => 20,
                'name' => 'GEGER',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            135 => 
            array (
                'id' => 1636,
                'code' => 30,
                'name' => 'DOLOPO',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            136 => 
            array (
                'id' => 1637,
                'code' => 40,
                'name' => 'DAGANGAN',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            137 => 
            array (
                'id' => 1638,
                'code' => 50,
                'name' => 'WUNGU',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            138 => 
            array (
                'id' => 1639,
                'code' => 60,
                'name' => 'KARE',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            139 => 
            array (
                'id' => 1640,
                'code' => 70,
                'name' => 'GEMARANG',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            140 => 
            array (
                'id' => 1641,
                'code' => 80,
                'name' => 'SARADAN',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            141 => 
            array (
                'id' => 1642,
                'code' => 90,
                'name' => 'PILANGKENCENG',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            142 => 
            array (
                'id' => 1643,
                'code' => 100,
                'name' => 'MEJAYAN',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            143 => 
            array (
                'id' => 1644,
                'code' => 110,
                'name' => 'WONOASRI',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            144 => 
            array (
                'id' => 1645,
                'code' => 120,
                'name' => 'BALEREJO',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            145 => 
            array (
                'id' => 1646,
                'code' => 130,
                'name' => 'MADIUN',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            146 => 
            array (
                'id' => 1647,
                'code' => 140,
                'name' => 'SAWAHAN',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            147 => 
            array (
                'id' => 1648,
                'code' => 150,
                'name' => 'JIWAN',
                'province_code' => 35,
                'regency_code' => 19,
            ),
            148 => 
            array (
                'id' => 1649,
                'code' => 10,
                'name' => 'PONCOL',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            149 => 
            array (
                'id' => 1650,
                'code' => 20,
                'name' => 'PARANG',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            150 => 
            array (
                'id' => 1651,
                'code' => 30,
                'name' => 'LEMBEYAN',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            151 => 
            array (
                'id' => 1652,
                'code' => 40,
                'name' => 'TAKERAN',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            152 => 
            array (
                'id' => 1653,
                'code' => 41,
                'name' => 'NGUNTORONADI',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            153 => 
            array (
                'id' => 1654,
                'code' => 50,
                'name' => 'KAWEDANAN',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            154 => 
            array (
                'id' => 1655,
                'code' => 60,
                'name' => 'MAGETAN',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            155 => 
            array (
                'id' => 1656,
                'code' => 61,
                'name' => 'NGARIBOYO',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            156 => 
            array (
                'id' => 1657,
                'code' => 70,
                'name' => 'PLAOSAN',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            157 => 
            array (
                'id' => 1658,
                'code' => 71,
                'name' => 'SIDOREJO',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            158 => 
            array (
                'id' => 1659,
                'code' => 80,
                'name' => 'PANEKAN',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            159 => 
            array (
                'id' => 1660,
                'code' => 90,
                'name' => 'SUKOMORO',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            160 => 
            array (
                'id' => 1661,
                'code' => 100,
                'name' => 'BENDO',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            161 => 
            array (
                'id' => 1662,
                'code' => 110,
                'name' => 'MAOSPATI',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            162 => 
            array (
                'id' => 1663,
                'code' => 120,
                'name' => 'KARANGREJO',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            163 => 
            array (
                'id' => 1664,
                'code' => 121,
                'name' => 'KARAS',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            164 => 
            array (
                'id' => 1665,
                'code' => 130,
                'name' => 'BARAT',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            165 => 
            array (
                'id' => 1666,
                'code' => 131,
                'name' => 'KARTOHARJO',
                'province_code' => 35,
                'regency_code' => 20,
            ),
            166 => 
            array (
                'id' => 1667,
                'code' => 10,
                'name' => 'SINE',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            167 => 
            array (
                'id' => 1668,
                'code' => 20,
                'name' => 'NGRAMBE',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            168 => 
            array (
                'id' => 1669,
                'code' => 30,
                'name' => 'JOGOROGO',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            169 => 
            array (
                'id' => 1670,
                'code' => 40,
                'name' => 'KENDAL',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            170 => 
            array (
                'id' => 1671,
                'code' => 50,
                'name' => 'GENENG',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            171 => 
            array (
                'id' => 1672,
                'code' => 51,
                'name' => 'GERIH',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            172 => 
            array (
                'id' => 1673,
                'code' => 60,
                'name' => 'KWADUNGAN',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            173 => 
            array (
                'id' => 1674,
                'code' => 70,
                'name' => 'PANGKUR',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            174 => 
            array (
                'id' => 1675,
                'code' => 80,
                'name' => 'KARANGJATI',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            175 => 
            array (
                'id' => 1676,
                'code' => 90,
                'name' => 'BRINGIN',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            176 => 
            array (
                'id' => 1677,
                'code' => 100,
                'name' => 'PADAS',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            177 => 
            array (
                'id' => 1678,
                'code' => 101,
                'name' => 'KASREMAN',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            178 => 
            array (
                'id' => 1679,
                'code' => 110,
                'name' => 'NGAWI',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            179 => 
            array (
                'id' => 1680,
                'code' => 120,
                'name' => 'PARON',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            180 => 
            array (
                'id' => 1681,
                'code' => 130,
                'name' => 'KEDUNGGALAR',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            181 => 
            array (
                'id' => 1682,
                'code' => 140,
                'name' => 'PITU',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            182 => 
            array (
                'id' => 1683,
                'code' => 150,
                'name' => 'WIDODAREN',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            183 => 
            array (
                'id' => 1684,
                'code' => 160,
                'name' => 'MANTINGAN',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            184 => 
            array (
                'id' => 1685,
                'code' => 170,
                'name' => 'KARANGANYAR',
                'province_code' => 35,
                'regency_code' => 21,
            ),
            185 => 
            array (
                'id' => 1686,
                'code' => 10,
                'name' => 'MARGOMULYO',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            186 => 
            array (
                'id' => 1687,
                'code' => 20,
                'name' => 'NGRAHO',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            187 => 
            array (
                'id' => 1688,
                'code' => 30,
                'name' => 'TAMBAKREJO',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            188 => 
            array (
                'id' => 1689,
                'code' => 40,
                'name' => 'NGAMBON',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            189 => 
            array (
                'id' => 1690,
                'code' => 41,
                'name' => 'SEKAR',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            190 => 
            array (
                'id' => 1691,
                'code' => 50,
                'name' => 'BUBULAN',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            191 => 
            array (
                'id' => 1692,
                'code' => 51,
                'name' => 'GONDANG',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            192 => 
            array (
                'id' => 1693,
                'code' => 60,
                'name' => 'TEMAYANG',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            193 => 
            array (
                'id' => 1694,
                'code' => 70,
                'name' => 'SUGIHWARAS',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            194 => 
            array (
                'id' => 1695,
                'code' => 80,
                'name' => 'KEDUNGADEM',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            195 => 
            array (
                'id' => 1696,
                'code' => 90,
                'name' => 'KEPOH BARU',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            196 => 
            array (
                'id' => 1697,
                'code' => 100,
                'name' => 'BAURENO',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            197 => 
            array (
                'id' => 1698,
                'code' => 110,
                'name' => 'KANOR',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            198 => 
            array (
                'id' => 1699,
                'code' => 120,
                'name' => 'SUMBERREJO',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            199 => 
            array (
                'id' => 1700,
                'code' => 130,
                'name' => 'BALEN',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            200 => 
            array (
                'id' => 1701,
                'code' => 140,
                'name' => 'SUKOSEWU',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            201 => 
            array (
                'id' => 1702,
                'code' => 150,
                'name' => 'KAPAS',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            202 => 
            array (
                'id' => 1703,
                'code' => 160,
                'name' => 'BOJONEGORO',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            203 => 
            array (
                'id' => 1704,
                'code' => 170,
                'name' => 'TRUCUK',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            204 => 
            array (
                'id' => 1705,
                'code' => 180,
                'name' => 'DANDER',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            205 => 
            array (
                'id' => 1706,
                'code' => 190,
                'name' => 'NGASEM',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            206 => 
            array (
                'id' => 1707,
                'code' => 191,
                'name' => 'GAYAM',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            207 => 
            array (
                'id' => 1708,
                'code' => 200,
                'name' => 'KALITIDU',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            208 => 
            array (
                'id' => 1709,
                'code' => 210,
                'name' => 'MALO',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            209 => 
            array (
                'id' => 1710,
                'code' => 220,
                'name' => 'PURWOSARI',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            210 => 
            array (
                'id' => 1711,
                'code' => 230,
                'name' => 'PADANGAN',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            211 => 
            array (
                'id' => 1712,
                'code' => 240,
                'name' => 'KASIMAN',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            212 => 
            array (
                'id' => 1713,
                'code' => 241,
                'name' => 'KEDEWAN',
                'province_code' => 35,
                'regency_code' => 22,
            ),
            213 => 
            array (
                'id' => 1714,
                'code' => 10,
                'name' => 'KENDURUAN',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            214 => 
            array (
                'id' => 1715,
                'code' => 20,
                'name' => 'BANGILAN',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            215 => 
            array (
                'id' => 1716,
                'code' => 30,
                'name' => 'SENORI',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            216 => 
            array (
                'id' => 1717,
                'code' => 40,
                'name' => 'SINGGAHAN',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            217 => 
            array (
                'id' => 1718,
                'code' => 50,
                'name' => 'MONTONG',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            218 => 
            array (
                'id' => 1719,
                'code' => 60,
                'name' => 'PARENGAN',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            219 => 
            array (
                'id' => 1720,
                'code' => 70,
                'name' => 'SOKO',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            220 => 
            array (
                'id' => 1721,
                'code' => 80,
                'name' => 'RENGEL',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            221 => 
            array (
                'id' => 1722,
                'code' => 81,
                'name' => 'GRABAGAN',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            222 => 
            array (
                'id' => 1723,
                'code' => 90,
                'name' => 'PLUMPANG',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            223 => 
            array (
                'id' => 1724,
                'code' => 100,
                'name' => 'WIDANG',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            224 => 
            array (
                'id' => 1725,
                'code' => 110,
                'name' => 'PALANG',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            225 => 
            array (
                'id' => 1726,
                'code' => 120,
                'name' => 'SEMANDING',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            226 => 
            array (
                'id' => 1727,
                'code' => 130,
                'name' => 'TUBAN',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            227 => 
            array (
                'id' => 1728,
                'code' => 140,
                'name' => 'JENU',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            228 => 
            array (
                'id' => 1729,
                'code' => 150,
                'name' => 'MERAKURAK',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            229 => 
            array (
                'id' => 1730,
                'code' => 160,
                'name' => 'KEREK',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            230 => 
            array (
                'id' => 1731,
                'code' => 170,
                'name' => 'TAMBAKBOYO',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            231 => 
            array (
                'id' => 1732,
                'code' => 180,
                'name' => 'JATIROGO',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            232 => 
            array (
                'id' => 1733,
                'code' => 190,
                'name' => 'BANCAR',
                'province_code' => 35,
                'regency_code' => 23,
            ),
            233 => 
            array (
                'id' => 1734,
                'code' => 10,
                'name' => 'SUKORAME',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            234 => 
            array (
                'id' => 1735,
                'code' => 20,
                'name' => 'BLULUK',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            235 => 
            array (
                'id' => 1736,
                'code' => 30,
                'name' => 'NGIMBANG',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            236 => 
            array (
                'id' => 1737,
                'code' => 40,
                'name' => 'SAMBENG',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            237 => 
            array (
                'id' => 1738,
                'code' => 50,
                'name' => 'MANTUP',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            238 => 
            array (
                'id' => 1739,
                'code' => 60,
                'name' => 'KEMBANGBAHU',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            239 => 
            array (
                'id' => 1740,
                'code' => 70,
                'name' => 'SUGIO',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            240 => 
            array (
                'id' => 1741,
                'code' => 80,
                'name' => 'KEDUNGPRING',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            241 => 
            array (
                'id' => 1742,
                'code' => 90,
                'name' => 'MODO',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            242 => 
            array (
                'id' => 1743,
                'code' => 100,
                'name' => 'BABAT',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            243 => 
            array (
                'id' => 1744,
                'code' => 110,
                'name' => 'PUCUK',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            244 => 
            array (
                'id' => 1745,
                'code' => 120,
                'name' => 'SUKODADI',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            245 => 
            array (
                'id' => 1746,
                'code' => 130,
                'name' => 'LAMONGAN',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            246 => 
            array (
                'id' => 1747,
                'code' => 140,
                'name' => 'TIKUNG',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            247 => 
            array (
                'id' => 1748,
                'code' => 141,
                'name' => 'SARIREJO',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            248 => 
            array (
                'id' => 1749,
                'code' => 150,
                'name' => 'DEKET',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            249 => 
            array (
                'id' => 1750,
                'code' => 160,
                'name' => 'GLAGAH',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            250 => 
            array (
                'id' => 1751,
                'code' => 170,
                'name' => 'KARANGBINANGUN',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            251 => 
            array (
                'id' => 1752,
                'code' => 180,
                'name' => 'TURI',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            252 => 
            array (
                'id' => 1753,
                'code' => 190,
                'name' => 'KALITENGAH',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            253 => 
            array (
                'id' => 1754,
                'code' => 200,
                'name' => 'KARANG GENENG',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            254 => 
            array (
                'id' => 1755,
                'code' => 210,
                'name' => 'SEKARAN',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            255 => 
            array (
                'id' => 1756,
                'code' => 220,
                'name' => 'MADURAN',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            256 => 
            array (
                'id' => 1757,
                'code' => 230,
                'name' => 'LAREN',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            257 => 
            array (
                'id' => 1758,
                'code' => 240,
                'name' => 'SOLOKURO',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            258 => 
            array (
                'id' => 1759,
                'code' => 250,
                'name' => 'PACIRAN',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            259 => 
            array (
                'id' => 1760,
                'code' => 260,
                'name' => 'BRONDONG',
                'province_code' => 35,
                'regency_code' => 24,
            ),
            260 => 
            array (
                'id' => 1761,
                'code' => 10,
                'name' => 'WRINGINANOM',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            261 => 
            array (
                'id' => 1762,
                'code' => 20,
                'name' => 'DRIYOREJO',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            262 => 
            array (
                'id' => 1763,
                'code' => 30,
                'name' => 'KEDAMEAN',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            263 => 
            array (
                'id' => 1764,
                'code' => 40,
                'name' => 'MENGANTI',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            264 => 
            array (
                'id' => 1765,
                'code' => 50,
                'name' => 'CERME',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            265 => 
            array (
                'id' => 1766,
                'code' => 60,
                'name' => 'BENJENG',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            266 => 
            array (
                'id' => 1767,
                'code' => 70,
                'name' => 'BALONGPANGGANG',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            267 => 
            array (
                'id' => 1768,
                'code' => 80,
                'name' => 'DUDUKSAMPEYAN',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            268 => 
            array (
                'id' => 1769,
                'code' => 90,
                'name' => 'KEBOMAS',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            269 => 
            array (
                'id' => 1770,
                'code' => 100,
                'name' => 'GRESIK',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            270 => 
            array (
                'id' => 1771,
                'code' => 110,
                'name' => 'MANYAR',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            271 => 
            array (
                'id' => 1772,
                'code' => 120,
                'name' => 'BUNGAH',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            272 => 
            array (
                'id' => 1773,
                'code' => 130,
                'name' => 'SIDAYU',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            273 => 
            array (
                'id' => 1774,
                'code' => 140,
                'name' => 'DUKUN',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            274 => 
            array (
                'id' => 1775,
                'code' => 150,
                'name' => 'PANCENG',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            275 => 
            array (
                'id' => 1776,
                'code' => 160,
                'name' => 'UJUNGPANGKAH',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            276 => 
            array (
                'id' => 1777,
                'code' => 170,
                'name' => 'SANGKAPURA',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            277 => 
            array (
                'id' => 1778,
                'code' => 180,
                'name' => 'TAMBAK',
                'province_code' => 35,
                'regency_code' => 25,
            ),
            278 => 
            array (
                'id' => 1779,
                'code' => 10,
                'name' => 'KAMAL',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            279 => 
            array (
                'id' => 1780,
                'code' => 20,
                'name' => 'LABANG',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            280 => 
            array (
                'id' => 1781,
                'code' => 30,
                'name' => 'KWANYAR',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            281 => 
            array (
                'id' => 1782,
                'code' => 40,
                'name' => 'MODUNG',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            282 => 
            array (
                'id' => 1783,
                'code' => 50,
                'name' => 'BLEGA',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            283 => 
            array (
                'id' => 1784,
                'code' => 60,
                'name' => 'KONANG',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            284 => 
            array (
                'id' => 1785,
                'code' => 70,
                'name' => 'GALIS',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            285 => 
            array (
                'id' => 1786,
                'code' => 80,
                'name' => 'TANAH MERAH',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            286 => 
            array (
                'id' => 1787,
                'code' => 90,
                'name' => 'TRAGAH',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            287 => 
            array (
                'id' => 1788,
                'code' => 100,
                'name' => 'SOCAH',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            288 => 
            array (
                'id' => 1789,
                'code' => 110,
                'name' => 'BANGKALAN',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            289 => 
            array (
                'id' => 1790,
                'code' => 120,
                'name' => 'BURNEH',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            290 => 
            array (
                'id' => 1791,
                'code' => 130,
                'name' => 'AROSBAYA',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            291 => 
            array (
                'id' => 1792,
                'code' => 140,
                'name' => 'GEGER',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            292 => 
            array (
                'id' => 1793,
                'code' => 150,
                'name' => 'KOKOP',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            293 => 
            array (
                'id' => 1794,
                'code' => 160,
                'name' => 'TANJUNGBUMI',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            294 => 
            array (
                'id' => 1795,
                'code' => 170,
                'name' => 'SEPULU',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            295 => 
            array (
                'id' => 1796,
                'code' => 180,
                'name' => 'KLAMPIS',
                'province_code' => 35,
                'regency_code' => 26,
            ),
            296 => 
            array (
                'id' => 1797,
                'code' => 10,
                'name' => 'SRESEH',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            297 => 
            array (
                'id' => 1798,
                'code' => 20,
                'name' => 'TORJUN',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            298 => 
            array (
                'id' => 1799,
                'code' => 21,
                'name' => 'PANGARENGAN',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            299 => 
            array (
                'id' => 1800,
                'code' => 30,
                'name' => 'SAMPANG',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            300 => 
            array (
                'id' => 1801,
                'code' => 40,
                'name' => 'CAMPLONG',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            301 => 
            array (
                'id' => 1802,
                'code' => 50,
                'name' => 'OMBEN',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            302 => 
            array (
                'id' => 1803,
                'code' => 60,
                'name' => 'KEDUNGDUNG',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            303 => 
            array (
                'id' => 1804,
                'code' => 70,
                'name' => 'JRENGIK',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            304 => 
            array (
                'id' => 1805,
                'code' => 80,
                'name' => 'TAMBELANGAN',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            305 => 
            array (
                'id' => 1806,
                'code' => 90,
                'name' => 'BANYUATES',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            306 => 
            array (
                'id' => 1807,
                'code' => 100,
                'name' => 'ROBATAL',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            307 => 
            array (
                'id' => 1808,
                'code' => 101,
                'name' => 'KARANG PENANG',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            308 => 
            array (
                'id' => 1809,
                'code' => 110,
                'name' => 'KETAPANG',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            309 => 
            array (
                'id' => 1810,
                'code' => 120,
                'name' => 'SOKOBANAH',
                'province_code' => 35,
                'regency_code' => 27,
            ),
            310 => 
            array (
                'id' => 1811,
                'code' => 10,
                'name' => 'TLANAKAN',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            311 => 
            array (
                'id' => 1812,
                'code' => 20,
                'name' => 'PADEMAWU',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            312 => 
            array (
                'id' => 1813,
                'code' => 30,
                'name' => 'GALIS',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            313 => 
            array (
                'id' => 1814,
                'code' => 40,
                'name' => 'LARANGAN',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            314 => 
            array (
                'id' => 1815,
                'code' => 50,
                'name' => 'PAMEKASAN',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            315 => 
            array (
                'id' => 1816,
                'code' => 60,
                'name' => 'PROPPO',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            316 => 
            array (
                'id' => 1817,
                'code' => 70,
                'name' => 'PALENGAAN',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            317 => 
            array (
                'id' => 1818,
                'code' => 80,
                'name' => 'PEGANTENAN',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            318 => 
            array (
                'id' => 1819,
                'code' => 90,
                'name' => 'KADUR',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            319 => 
            array (
                'id' => 1820,
                'code' => 100,
                'name' => 'PAKONG',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            320 => 
            array (
                'id' => 1821,
                'code' => 110,
                'name' => 'WARU',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            321 => 
            array (
                'id' => 1822,
                'code' => 120,
                'name' => 'BATU MARMAR',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            322 => 
            array (
                'id' => 1823,
                'code' => 130,
                'name' => 'PASEAN',
                'province_code' => 35,
                'regency_code' => 28,
            ),
            323 => 
            array (
                'id' => 1824,
                'code' => 10,
                'name' => 'PRAGAAN',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            324 => 
            array (
                'id' => 1825,
                'code' => 20,
                'name' => 'BLUTO',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            325 => 
            array (
                'id' => 1826,
                'code' => 30,
                'name' => 'SARONGGI',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            326 => 
            array (
                'id' => 1827,
                'code' => 40,
                'name' => 'GILIGENTENG',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            327 => 
            array (
                'id' => 1828,
                'code' => 50,
                'name' => 'TALANGO',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            328 => 
            array (
                'id' => 1829,
                'code' => 60,
                'name' => 'KALIANGET',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            329 => 
            array (
                'id' => 1830,
                'code' => 70,
                'name' => 'KOTA SUMENEP',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            330 => 
            array (
                'id' => 1831,
                'code' => 71,
                'name' => 'BATUAN',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            331 => 
            array (
                'id' => 1832,
                'code' => 80,
                'name' => 'LENTENG',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            332 => 
            array (
                'id' => 1833,
                'code' => 90,
                'name' => 'GANDING',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            333 => 
            array (
                'id' => 1834,
                'code' => 100,
                'name' => 'GULUK GULUK',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            334 => 
            array (
                'id' => 1835,
                'code' => 110,
                'name' => 'PASONGSONGAN',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            335 => 
            array (
                'id' => 1836,
                'code' => 120,
                'name' => 'AMBUNTEN',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            336 => 
            array (
                'id' => 1837,
                'code' => 130,
                'name' => 'RUBARU',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            337 => 
            array (
                'id' => 1838,
                'code' => 140,
                'name' => 'DASUK',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            338 => 
            array (
                'id' => 1839,
                'code' => 150,
                'name' => 'MANDING',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            339 => 
            array (
                'id' => 1840,
                'code' => 160,
                'name' => 'BATUPUTIH',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            340 => 
            array (
                'id' => 1841,
                'code' => 170,
                'name' => 'GAPURA',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            341 => 
            array (
                'id' => 1842,
                'code' => 180,
                'name' => 'BATANG BATANG',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            342 => 
            array (
                'id' => 1843,
                'code' => 190,
                'name' => 'DUNGKEK',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            343 => 
            array (
                'id' => 1844,
                'code' => 200,
                'name' => 'NONGGUNONG',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            344 => 
            array (
                'id' => 1845,
                'code' => 210,
                'name' => 'GAYAM',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            345 => 
            array (
                'id' => 1846,
                'code' => 220,
                'name' => 'RAAS',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            346 => 
            array (
                'id' => 1847,
                'code' => 230,
                'name' => 'SAPEKEN',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            347 => 
            array (
                'id' => 1848,
                'code' => 240,
                'name' => 'ARJASA',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            348 => 
            array (
                'id' => 1849,
                'code' => 241,
                'name' => 'KANGAYAN',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            349 => 
            array (
                'id' => 1850,
                'code' => 250,
                'name' => 'MASALEMBU',
                'province_code' => 35,
                'regency_code' => 29,
            ),
            350 => 
            array (
                'id' => 1851,
                'code' => 10,
                'name' => 'MOJOROTO',
                'province_code' => 35,
                'regency_code' => 71,
            ),
            351 => 
            array (
                'id' => 1852,
                'code' => 20,
                'name' => 'KOTA KEDIRI',
                'province_code' => 35,
                'regency_code' => 71,
            ),
            352 => 
            array (
                'id' => 1853,
                'code' => 30,
                'name' => 'PESANTREN',
                'province_code' => 35,
                'regency_code' => 71,
            ),
            353 => 
            array (
                'id' => 1854,
                'code' => 10,
                'name' => 'SUKOREJO',
                'province_code' => 35,
                'regency_code' => 72,
            ),
            354 => 
            array (
                'id' => 1855,
                'code' => 20,
                'name' => 'KEPANJENKIDUL',
                'province_code' => 35,
                'regency_code' => 72,
            ),
            355 => 
            array (
                'id' => 1856,
                'code' => 30,
                'name' => 'SANANWETAN',
                'province_code' => 35,
                'regency_code' => 72,
            ),
            356 => 
            array (
                'id' => 1857,
                'code' => 10,
                'name' => 'KEDUNGKANDANG',
                'province_code' => 35,
                'regency_code' => 73,
            ),
            357 => 
            array (
                'id' => 1858,
                'code' => 20,
                'name' => 'SUKUN',
                'province_code' => 35,
                'regency_code' => 73,
            ),
            358 => 
            array (
                'id' => 1859,
                'code' => 30,
                'name' => 'KLOJEN',
                'province_code' => 35,
                'regency_code' => 73,
            ),
            359 => 
            array (
                'id' => 1860,
                'code' => 40,
                'name' => 'BLIMBING',
                'province_code' => 35,
                'regency_code' => 73,
            ),
            360 => 
            array (
                'id' => 1861,
                'code' => 50,
                'name' => 'LOWOKWARU',
                'province_code' => 35,
                'regency_code' => 73,
            ),
            361 => 
            array (
                'id' => 1862,
                'code' => 10,
                'name' => 'KADEMANGAN',
                'province_code' => 35,
                'regency_code' => 74,
            ),
            362 => 
            array (
                'id' => 1863,
                'code' => 11,
                'name' => 'KEDOPOK',
                'province_code' => 35,
                'regency_code' => 74,
            ),
            363 => 
            array (
                'id' => 1864,
                'code' => 20,
                'name' => 'WONOASIH',
                'province_code' => 35,
                'regency_code' => 74,
            ),
            364 => 
            array (
                'id' => 1865,
                'code' => 30,
                'name' => 'MAYANGAN',
                'province_code' => 35,
                'regency_code' => 74,
            ),
            365 => 
            array (
                'id' => 1866,
                'code' => 31,
                'name' => 'KANIGARAN',
                'province_code' => 35,
                'regency_code' => 74,
            ),
            366 => 
            array (
                'id' => 1867,
                'code' => 10,
                'name' => 'GADINGREJO',
                'province_code' => 35,
                'regency_code' => 75,
            ),
            367 => 
            array (
                'id' => 1868,
                'code' => 20,
                'name' => 'PURWOREJO',
                'province_code' => 35,
                'regency_code' => 75,
            ),
            368 => 
            array (
                'id' => 1869,
                'code' => 30,
                'name' => 'BUGULKIDUL',
                'province_code' => 35,
                'regency_code' => 75,
            ),
            369 => 
            array (
                'id' => 1870,
                'code' => 31,
                'name' => 'PANGGUNGREJO',
                'province_code' => 35,
                'regency_code' => 75,
            ),
            370 => 
            array (
                'id' => 1871,
                'code' => 10,
                'name' => 'PRAJURIT KULON',
                'province_code' => 35,
                'regency_code' => 76,
            ),
            371 => 
            array (
                'id' => 1872,
                'code' => 20,
                'name' => 'MAGERSARI',
                'province_code' => 35,
                'regency_code' => 76,
            ),
            372 => 
            array (
                'id' => 1873,
                'code' => 21,
                'name' => 'KRANGGAN',
                'province_code' => 35,
                'regency_code' => 76,
            ),
            373 => 
            array (
                'id' => 1874,
                'code' => 10,
                'name' => 'MANGU HARJO',
                'province_code' => 35,
                'regency_code' => 77,
            ),
            374 => 
            array (
                'id' => 1875,
                'code' => 20,
                'name' => 'TAMAN',
                'province_code' => 35,
                'regency_code' => 77,
            ),
            375 => 
            array (
                'id' => 1876,
                'code' => 30,
                'name' => 'KARTOHARJO',
                'province_code' => 35,
                'regency_code' => 77,
            ),
            376 => 
            array (
                'id' => 1877,
                'code' => 10,
                'name' => 'KARANG PILANG',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            377 => 
            array (
                'id' => 1878,
                'code' => 20,
                'name' => 'JAMBANGAN',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            378 => 
            array (
                'id' => 1879,
                'code' => 30,
                'name' => 'GAYUNGAN',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            379 => 
            array (
                'id' => 1880,
                'code' => 40,
                'name' => 'WONOCOLO',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            380 => 
            array (
                'id' => 1881,
                'code' => 50,
                'name' => 'TENGGILIS MEJOYO',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            381 => 
            array (
                'id' => 1882,
                'code' => 60,
                'name' => 'GUNUNG ANYAR',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            382 => 
            array (
                'id' => 1883,
                'code' => 70,
                'name' => 'RUNGKUT',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            383 => 
            array (
                'id' => 1884,
                'code' => 80,
                'name' => 'SUKOLILO',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            384 => 
            array (
                'id' => 1885,
                'code' => 90,
                'name' => 'MULYOREJO',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            385 => 
            array (
                'id' => 1886,
                'code' => 100,
                'name' => 'GUBENG',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            386 => 
            array (
                'id' => 1887,
                'code' => 110,
                'name' => 'WONOKROMO',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            387 => 
            array (
                'id' => 1888,
                'code' => 120,
                'name' => 'DUKUH PAKIS',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            388 => 
            array (
                'id' => 1889,
                'code' => 130,
                'name' => 'WIYUNG',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            389 => 
            array (
                'id' => 1890,
                'code' => 140,
                'name' => 'LAKARSANTRI',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            390 => 
            array (
                'id' => 1891,
                'code' => 141,
                'name' => 'SAMBIKEREP',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            391 => 
            array (
                'id' => 1892,
                'code' => 150,
                'name' => 'TANDES',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            392 => 
            array (
                'id' => 1893,
                'code' => 160,
                'name' => 'SUKO MANUNGGAL',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            393 => 
            array (
                'id' => 1894,
                'code' => 170,
                'name' => 'SAWAHAN',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            394 => 
            array (
                'id' => 1895,
                'code' => 180,
                'name' => 'TEGALSARI',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            395 => 
            array (
                'id' => 1896,
                'code' => 190,
                'name' => 'GENTENG',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            396 => 
            array (
                'id' => 1897,
                'code' => 200,
                'name' => 'TAMBAKSARI',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            397 => 
            array (
                'id' => 1898,
                'code' => 210,
                'name' => 'KENJERAN',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            398 => 
            array (
                'id' => 1899,
                'code' => 211,
                'name' => 'BULAK',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            399 => 
            array (
                'id' => 1900,
                'code' => 220,
                'name' => 'SIMOKERTO',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            400 => 
            array (
                'id' => 1901,
                'code' => 230,
                'name' => 'SEMAMPIR',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            401 => 
            array (
                'id' => 1902,
                'code' => 240,
                'name' => 'PABEAN CANTIAN',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            402 => 
            array (
                'id' => 1903,
                'code' => 250,
                'name' => 'BUBUTAN',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            403 => 
            array (
                'id' => 1904,
                'code' => 260,
                'name' => 'KREMBANGAN',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            404 => 
            array (
                'id' => 1905,
                'code' => 270,
                'name' => 'ASEMROWO',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            405 => 
            array (
                'id' => 1906,
                'code' => 280,
                'name' => 'BENOWO',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            406 => 
            array (
                'id' => 1907,
                'code' => 281,
                'name' => 'PAKAL',
                'province_code' => 35,
                'regency_code' => 78,
            ),
            407 => 
            array (
                'id' => 1908,
                'code' => 10,
                'name' => 'BATU',
                'province_code' => 35,
                'regency_code' => 79,
            ),
            408 => 
            array (
                'id' => 1909,
                'code' => 20,
                'name' => 'JUNREJO',
                'province_code' => 35,
                'regency_code' => 79,
            ),
            409 => 
            array (
                'id' => 1910,
                'code' => 30,
                'name' => 'BUMIAJI',
                'province_code' => 35,
                'regency_code' => 79,
            ),
            410 => 
            array (
                'id' => 1911,
                'code' => 10,
                'name' => 'CILEDUG',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            411 => 
            array (
                'id' => 1912,
                'code' => 11,
                'name' => 'LARANGAN',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            412 => 
            array (
                'id' => 1913,
                'code' => 12,
                'name' => 'KARANG TENGAH',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            413 => 
            array (
                'id' => 1914,
                'code' => 20,
                'name' => 'CIPONDOH',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            414 => 
            array (
                'id' => 1915,
                'code' => 21,
                'name' => 'PINANG',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            415 => 
            array (
                'id' => 1916,
                'code' => 30,
                'name' => 'TANGERANG',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            416 => 
            array (
                'id' => 1917,
                'code' => 31,
                'name' => 'KARAWACI',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            417 => 
            array (
                'id' => 1918,
                'code' => 40,
                'name' => 'JATI UWUNG',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            418 => 
            array (
                'id' => 1919,
                'code' => 41,
                'name' => 'CIBODAS',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            419 => 
            array (
                'id' => 1920,
                'code' => 42,
                'name' => 'PERIUK',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            420 => 
            array (
                'id' => 1921,
                'code' => 50,
                'name' => 'BATUCEPER',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            421 => 
            array (
                'id' => 1922,
                'code' => 51,
                'name' => 'NEGLASARI',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            422 => 
            array (
                'id' => 1923,
                'code' => 60,
                'name' => 'BENDA',
                'province_code' => 36,
                'regency_code' => 71,
            ),
            423 => 
            array (
                'id' => 1924,
                'code' => 10,
                'name' => 'CIWANDAN',
                'province_code' => 36,
                'regency_code' => 72,
            ),
            424 => 
            array (
                'id' => 1925,
                'code' => 11,
                'name' => 'CITANGKIL',
                'province_code' => 36,
                'regency_code' => 72,
            ),
            425 => 
            array (
                'id' => 1926,
                'code' => 20,
                'name' => 'PULOMERAK',
                'province_code' => 36,
                'regency_code' => 72,
            ),
            426 => 
            array (
                'id' => 1927,
                'code' => 21,
                'name' => 'PURWAKARTA',
                'province_code' => 36,
                'regency_code' => 72,
            ),
            427 => 
            array (
                'id' => 1928,
                'code' => 22,
                'name' => 'GROGOL',
                'province_code' => 36,
                'regency_code' => 72,
            ),
            428 => 
            array (
                'id' => 1929,
                'code' => 30,
                'name' => 'CILEGON',
                'province_code' => 36,
                'regency_code' => 72,
            ),
            429 => 
            array (
                'id' => 1930,
                'code' => 31,
                'name' => 'JOMBANG',
                'province_code' => 36,
                'regency_code' => 72,
            ),
            430 => 
            array (
                'id' => 1931,
                'code' => 40,
                'name' => 'CIBEBER',
                'province_code' => 36,
                'regency_code' => 72,
            ),
            431 => 
            array (
                'id' => 1932,
                'code' => 10,
                'name' => 'CURUG',
                'province_code' => 36,
                'regency_code' => 73,
            ),
            432 => 
            array (
                'id' => 1933,
                'code' => 20,
                'name' => 'WALANTAKA',
                'province_code' => 36,
                'regency_code' => 73,
            ),
            433 => 
            array (
                'id' => 1934,
                'code' => 30,
                'name' => 'CIPOCOK JAYA',
                'province_code' => 36,
                'regency_code' => 73,
            ),
            434 => 
            array (
                'id' => 1935,
                'code' => 40,
                'name' => 'SERANG',
                'province_code' => 36,
                'regency_code' => 73,
            ),
            435 => 
            array (
                'id' => 1936,
                'code' => 50,
                'name' => 'TAKTAKAN',
                'province_code' => 36,
                'regency_code' => 73,
            ),
            436 => 
            array (
                'id' => 1937,
                'code' => 60,
                'name' => 'KASEMEN',
                'province_code' => 36,
                'regency_code' => 73,
            ),
            437 => 
            array (
                'id' => 1938,
                'code' => 10,
                'name' => 'SETU',
                'province_code' => 36,
                'regency_code' => 74,
            ),
            438 => 
            array (
                'id' => 1939,
                'code' => 20,
                'name' => 'SERPONG',
                'province_code' => 36,
                'regency_code' => 74,
            ),
            439 => 
            array (
                'id' => 1940,
                'code' => 30,
                'name' => 'PAMULANG',
                'province_code' => 36,
                'regency_code' => 74,
            ),
            440 => 
            array (
                'id' => 1941,
                'code' => 40,
                'name' => 'CIPUTAT',
                'province_code' => 36,
                'regency_code' => 74,
            ),
            441 => 
            array (
                'id' => 1942,
                'code' => 50,
                'name' => 'CIPUTAT TIMUR',
                'province_code' => 36,
                'regency_code' => 74,
            ),
            442 => 
            array (
                'id' => 1943,
                'code' => 60,
                'name' => 'PONDOK AREN',
                'province_code' => 36,
                'regency_code' => 74,
            ),
            443 => 
            array (
                'id' => 1944,
                'code' => 70,
                'name' => 'SERPONG UTARA',
                'province_code' => 36,
                'regency_code' => 74,
            ),
            444 => 
            array (
                'id' => 1945,
                'code' => 10,
                'name' => 'DENPASAR SELATAN',
                'province_code' => 51,
                'regency_code' => 71,
            ),
            445 => 
            array (
                'id' => 1946,
                'code' => 20,
                'name' => 'DENPASAR TIMUR',
                'province_code' => 51,
                'regency_code' => 71,
            ),
            446 => 
            array (
                'id' => 1947,
                'code' => 30,
                'name' => 'DENPASAR BARAT',
                'province_code' => 51,
                'regency_code' => 71,
            ),
            447 => 
            array (
                'id' => 1948,
                'code' => 31,
                'name' => 'DENPASAR UTARA',
                'province_code' => 51,
                'regency_code' => 71,
            ),
            448 => 
            array (
                'id' => 1949,
                'code' => 10,
                'name' => 'AMPENAN',
                'province_code' => 52,
                'regency_code' => 71,
            ),
            449 => 
            array (
                'id' => 1950,
                'code' => 11,
                'name' => 'SEKARBELA',
                'province_code' => 52,
                'regency_code' => 71,
            ),
            450 => 
            array (
                'id' => 1951,
                'code' => 20,
                'name' => 'MATARAM',
                'province_code' => 52,
                'regency_code' => 71,
            ),
            451 => 
            array (
                'id' => 1952,
                'code' => 21,
                'name' => 'SELAPARANG',
                'province_code' => 52,
                'regency_code' => 71,
            ),
            452 => 
            array (
                'id' => 1953,
                'code' => 30,
                'name' => 'CAKRANEGARA',
                'province_code' => 52,
                'regency_code' => 71,
            ),
            453 => 
            array (
                'id' => 1954,
                'code' => 31,
                'name' => 'SANDUBAYA',
                'province_code' => 52,
                'regency_code' => 71,
            ),
            454 => 
            array (
                'id' => 1955,
                'code' => 10,
                'name' => 'RASANAE BARAT',
                'province_code' => 52,
                'regency_code' => 72,
            ),
            455 => 
            array (
                'id' => 1956,
                'code' => 11,
                'name' => 'MPUNDA',
                'province_code' => 52,
                'regency_code' => 72,
            ),
            456 => 
            array (
                'id' => 1957,
                'code' => 20,
                'name' => 'RASANAE TIMUR',
                'province_code' => 52,
                'regency_code' => 72,
            ),
            457 => 
            array (
                'id' => 1958,
                'code' => 21,
                'name' => 'RABA',
                'province_code' => 52,
                'regency_code' => 72,
            ),
            458 => 
            array (
                'id' => 1959,
                'code' => 30,
                'name' => 'ASAKOTA',
                'province_code' => 52,
                'regency_code' => 72,
            ),
            459 => 
            array (
                'id' => 1960,
                'code' => 10,
                'name' => 'PAGA',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            460 => 
            array (
                'id' => 1961,
                'code' => 11,
                'name' => 'MEGO',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            461 => 
            array (
                'id' => 1962,
                'code' => 12,
                'name' => 'TANA WAWO',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            462 => 
            array (
                'id' => 1963,
                'code' => 20,
                'name' => 'LELA',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            463 => 
            array (
                'id' => 1964,
                'code' => 30,
                'name' => 'BOLA',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            464 => 
            array (
                'id' => 1965,
                'code' => 31,
                'name' => 'DORENG',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            465 => 
            array (
                'id' => 1966,
                'code' => 32,
                'name' => 'MAPITARA',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            466 => 
            array (
                'id' => 1967,
                'code' => 40,
                'name' => 'TALIBURA',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            467 => 
            array (
                'id' => 1968,
                'code' => 41,
                'name' => 'WAIGETE',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            468 => 
            array (
                'id' => 1969,
                'code' => 42,
                'name' => 'WAIBLAMA',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            469 => 
            array (
                'id' => 1970,
                'code' => 50,
                'name' => 'KEWAPANTE',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            470 => 
            array (
                'id' => 1971,
                'code' => 51,
                'name' => 'HEWOKLOANG',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            471 => 
            array (
                'id' => 1972,
                'code' => 52,
                'name' => 'KANGAE',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            472 => 
            array (
                'id' => 1973,
                'code' => 61,
                'name' => 'PALUE',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            473 => 
            array (
                'id' => 1974,
                'code' => 62,
                'name' => 'KOTING',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            474 => 
            array (
                'id' => 1975,
                'code' => 63,
                'name' => 'NELLE',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            475 => 
            array (
                'id' => 1976,
                'code' => 70,
                'name' => 'NITA',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            476 => 
            array (
                'id' => 1977,
                'code' => 71,
                'name' => 'MAGEPANDA',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            477 => 
            array (
                'id' => 1978,
                'code' => 80,
                'name' => 'ALOK',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            478 => 
            array (
                'id' => 1979,
                'code' => 81,
                'name' => 'ALOK BARAT',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            479 => 
            array (
                'id' => 1980,
                'code' => 82,
                'name' => 'ALOK TIMUR',
                'province_code' => 53,
                'regency_code' => 10,
            ),
            480 => 
            array (
                'id' => 1981,
                'code' => 10,
                'name' => 'NANGAPANDA',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            481 => 
            array (
                'id' => 1982,
                'code' => 11,
                'name' => 'PULAU ENDE',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            482 => 
            array (
                'id' => 1983,
                'code' => 12,
                'name' => 'MAUKARO',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            483 => 
            array (
                'id' => 1984,
                'code' => 20,
                'name' => 'ENDE',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            484 => 
            array (
                'id' => 1985,
                'code' => 30,
                'name' => 'ENDE SELATAN',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            485 => 
            array (
                'id' => 1986,
                'code' => 31,
                'name' => 'ENDE TIMUR',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            486 => 
            array (
                'id' => 1987,
                'code' => 32,
                'name' => 'ENDE TENGAH',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            487 => 
            array (
                'id' => 1988,
                'code' => 33,
                'name' => 'ENDE UTARA',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            488 => 
            array (
                'id' => 1989,
                'code' => 40,
                'name' => 'NDONA',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            489 => 
            array (
                'id' => 1990,
                'code' => 41,
                'name' => 'NDONA TIMUR',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            490 => 
            array (
                'id' => 1991,
                'code' => 50,
                'name' => 'WOLOWARU',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            491 => 
            array (
                'id' => 1992,
                'code' => 51,
                'name' => 'WOLOJITA',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            492 => 
            array (
                'id' => 1993,
                'code' => 52,
                'name' => 'LIO TIMUR',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            493 => 
            array (
                'id' => 1994,
                'code' => 53,
                'name' => 'KELIMUTU',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            494 => 
            array (
                'id' => 1995,
                'code' => 54,
                'name' => 'NDORI',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            495 => 
            array (
                'id' => 1996,
                'code' => 60,
                'name' => 'MAUROLE',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            496 => 
            array (
                'id' => 1997,
                'code' => 61,
                'name' => 'KOTABARU',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            497 => 
            array (
                'id' => 1998,
                'code' => 62,
                'name' => 'DETUKELI',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            498 => 
            array (
                'id' => 1999,
                'code' => 63,
                'name' => 'LEPEMBUSU KELISOKE',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            499 => 
            array (
                'id' => 2000,
                'code' => 70,
                'name' => 'DETUSOKO',
                'province_code' => 53,
                'regency_code' => 11,
            ),
        ));
        DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'code' => 71,
                'name' => 'WEWARIA',
                'province_code' => 53,
                'regency_code' => 11,
            ),
            1 => 
            array (
                'id' => 2002,
                'code' => 10,
                'name' => 'AIMERE',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            2 => 
            array (
                'id' => 2003,
                'code' => 11,
                'name' => 'JEREBUU',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            3 => 
            array (
                'id' => 2004,
                'code' => 12,
                'name' => 'INERIE',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            4 => 
            array (
                'id' => 2005,
                'code' => 20,
                'name' => 'BAJAWA',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            5 => 
            array (
                'id' => 2006,
                'code' => 30,
                'name' => 'GOLEWA',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            6 => 
            array (
                'id' => 2007,
                'code' => 31,
                'name' => 'GOLEWA SELATAN',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            7 => 
            array (
                'id' => 2008,
                'code' => 32,
                'name' => 'GOLEWA BARAT',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            8 => 
            array (
                'id' => 2009,
                'code' => 70,
                'name' => 'BAJAWA UTARA',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            9 => 
            array (
                'id' => 2010,
                'code' => 71,
                'name' => 'SOA',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            10 => 
            array (
                'id' => 2011,
                'code' => 80,
                'name' => 'RIUNG',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            11 => 
            array (
                'id' => 2012,
                'code' => 81,
                'name' => 'RIUNG BARAT',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            12 => 
            array (
                'id' => 2013,
                'code' => 82,
                'name' => 'WOLOMEZE',
                'province_code' => 53,
                'regency_code' => 12,
            ),
            13 => 
            array (
                'id' => 2014,
                'code' => 40,
                'name' => 'SATAR MESE',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            14 => 
            array (
                'id' => 2015,
                'code' => 41,
                'name' => 'SATAR MESE BARAT',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            15 => 
            array (
                'id' => 2016,
                'code' => 42,
                'name' => 'SATAR MESE UTARA',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            16 => 
            array (
                'id' => 2017,
                'code' => 110,
                'name' => 'LANGKE REMBONG',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            17 => 
            array (
                'id' => 2018,
                'code' => 120,
                'name' => 'RUTENG',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            18 => 
            array (
                'id' => 2019,
                'code' => 121,
                'name' => 'WAE RII',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            19 => 
            array (
                'id' => 2020,
                'code' => 122,
                'name' => 'LELAK',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            20 => 
            array (
                'id' => 2021,
                'code' => 123,
                'name' => 'RAHONG UTARA',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            21 => 
            array (
                'id' => 2022,
                'code' => 130,
                'name' => 'CIBAL',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            22 => 
            array (
                'id' => 2023,
                'code' => 131,
                'name' => 'CIBAL BARAT',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            23 => 
            array (
                'id' => 2024,
                'code' => 140,
                'name' => 'REOK',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            24 => 
            array (
                'id' => 2025,
                'code' => 141,
                'name' => 'REOK BARAT',
                'province_code' => 53,
                'regency_code' => 13,
            ),
            25 => 
            array (
                'id' => 2026,
                'code' => 10,
                'name' => 'ROTE BARAT DAYA',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            26 => 
            array (
                'id' => 2027,
                'code' => 20,
                'name' => 'ROTE BARAT LAUT',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            27 => 
            array (
                'id' => 2028,
                'code' => 21,
                'name' => 'LOAHOLU',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            28 => 
            array (
                'id' => 2029,
                'code' => 30,
                'name' => 'LOBALAIN',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            29 => 
            array (
                'id' => 2030,
                'code' => 40,
                'name' => 'ROTE TENGAH',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            30 => 
            array (
                'id' => 2031,
                'code' => 41,
                'name' => 'ROTE SELATAN',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            31 => 
            array (
                'id' => 2032,
                'code' => 50,
                'name' => 'PANTAI BARU',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            32 => 
            array (
                'id' => 2033,
                'code' => 60,
                'name' => 'ROTE TIMUR',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            33 => 
            array (
                'id' => 2034,
                'code' => 61,
                'name' => 'LANDU LEKO',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            34 => 
            array (
                'id' => 2035,
                'code' => 70,
                'name' => 'ROTE BARAT',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            35 => 
            array (
                'id' => 2036,
                'code' => 71,
                'name' => 'NDAO NUSE',
                'province_code' => 53,
                'regency_code' => 14,
            ),
            36 => 
            array (
                'id' => 2037,
                'code' => 10,
                'name' => 'KOMODO',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            37 => 
            array (
                'id' => 2038,
                'code' => 11,
                'name' => 'BOLENG',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            38 => 
            array (
                'id' => 2039,
                'code' => 20,
                'name' => 'SANO NGGOANG',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            39 => 
            array (
                'id' => 2040,
                'code' => 21,
                'name' => 'MBELILING',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            40 => 
            array (
                'id' => 2041,
                'code' => 30,
                'name' => 'LEMBOR',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            41 => 
            array (
                'id' => 2042,
                'code' => 31,
                'name' => 'WELAK',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            42 => 
            array (
                'id' => 2043,
                'code' => 32,
                'name' => 'LEMBOR SELATAN',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            43 => 
            array (
                'id' => 2044,
                'code' => 40,
                'name' => 'KUWUS',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            44 => 
            array (
                'id' => 2045,
                'code' => 41,
                'name' => 'NDOSO',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            45 => 
            array (
                'id' => 2046,
                'code' => 42,
                'name' => 'KUWUS BARAT',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            46 => 
            array (
                'id' => 2047,
                'code' => 50,
                'name' => 'MACANG PACAR',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            47 => 
            array (
                'id' => 2048,
                'code' => 51,
                'name' => 'PACAR',
                'province_code' => 53,
                'regency_code' => 15,
            ),
            48 => 
            array (
                'id' => 2049,
                'code' => 10,
                'name' => 'KATIKUTANA',
                'province_code' => 53,
                'regency_code' => 16,
            ),
            49 => 
            array (
                'id' => 2050,
                'code' => 11,
                'name' => 'KATIKUTANA SELATAN',
                'province_code' => 53,
                'regency_code' => 16,
            ),
            50 => 
            array (
                'id' => 2051,
                'code' => 20,
                'name' => 'UMBU RATU NGGAY BARAT',
                'province_code' => 53,
                'regency_code' => 16,
            ),
            51 => 
            array (
                'id' => 2052,
                'code' => 30,
                'name' => 'UMBU RATU NGGAY',
                'province_code' => 53,
                'regency_code' => 16,
            ),
            52 => 
            array (
                'id' => 2053,
                'code' => 31,
                'name' => 'UMBU RATU NGGAY TENGAH',
                'province_code' => 53,
                'regency_code' => 16,
            ),
            53 => 
            array (
                'id' => 2054,
                'code' => 40,
                'name' => 'MAMBORO',
                'province_code' => 53,
                'regency_code' => 16,
            ),
            54 => 
            array (
                'id' => 2055,
                'code' => 10,
                'name' => 'KODI BANGEDO',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            55 => 
            array (
                'id' => 2056,
                'code' => 11,
                'name' => 'KODI BALAGHAR',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            56 => 
            array (
                'id' => 2057,
                'code' => 20,
                'name' => 'KODI',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            57 => 
            array (
                'id' => 2058,
                'code' => 30,
                'name' => 'KODI UTARA',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            58 => 
            array (
                'id' => 2059,
                'code' => 40,
                'name' => 'WEWEWA SELATAN',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            59 => 
            array (
                'id' => 2060,
                'code' => 50,
                'name' => 'WEWEWA BARAT',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            60 => 
            array (
                'id' => 2061,
                'code' => 60,
                'name' => 'WEWEWA TIMUR',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            61 => 
            array (
                'id' => 2062,
                'code' => 61,
                'name' => 'WEWEWA TENGAH',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            62 => 
            array (
                'id' => 2063,
                'code' => 70,
                'name' => 'WEWEWA UTARA',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            63 => 
            array (
                'id' => 2064,
                'code' => 80,
                'name' => 'LOURA',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            64 => 
            array (
                'id' => 2065,
                'code' => 81,
                'name' => 'KOTA TAMBOLAKA',
                'province_code' => 53,
                'regency_code' => 17,
            ),
            65 => 
            array (
                'id' => 2066,
                'code' => 10,
                'name' => 'MAUPONGGO',
                'province_code' => 53,
                'regency_code' => 18,
            ),
            66 => 
            array (
                'id' => 2067,
                'code' => 20,
                'name' => 'KEO TENGAH',
                'province_code' => 53,
                'regency_code' => 18,
            ),
            67 => 
            array (
                'id' => 2068,
                'code' => 30,
                'name' => 'NANGARORO',
                'province_code' => 53,
                'regency_code' => 18,
            ),
            68 => 
            array (
                'id' => 2069,
                'code' => 40,
                'name' => 'BOAWAE',
                'province_code' => 53,
                'regency_code' => 18,
            ),
            69 => 
            array (
                'id' => 2070,
                'code' => 50,
                'name' => 'AESESA SELATAN',
                'province_code' => 53,
                'regency_code' => 18,
            ),
            70 => 
            array (
                'id' => 2071,
                'code' => 60,
                'name' => 'AESESA',
                'province_code' => 53,
                'regency_code' => 18,
            ),
            71 => 
            array (
                'id' => 2072,
                'code' => 70,
                'name' => 'WOLOWAE',
                'province_code' => 53,
                'regency_code' => 18,
            ),
            72 => 
            array (
                'id' => 2073,
                'code' => 10,
                'name' => 'BORONG',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            73 => 
            array (
                'id' => 2074,
                'code' => 11,
                'name' => 'RANA MESE',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            74 => 
            array (
                'id' => 2075,
                'code' => 20,
                'name' => 'KOTA KOMBA',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            75 => 
            array (
                'id' => 2076,
                'code' => 21,
                'name' => 'KOTA KOMBA UTARA',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            76 => 
            array (
                'id' => 2077,
                'code' => 30,
                'name' => 'ELAR',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            77 => 
            array (
                'id' => 2078,
                'code' => 31,
                'name' => 'ELAR SELATAN',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            78 => 
            array (
                'id' => 2079,
                'code' => 40,
                'name' => 'SAMBI RAMPAS',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            79 => 
            array (
                'id' => 2080,
                'code' => 41,
                'name' => 'CONGKAR',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            80 => 
            array (
                'id' => 2081,
                'code' => 50,
                'name' => 'LAMBA LEDA SELATAN',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            81 => 
            array (
                'id' => 2082,
                'code' => 51,
                'name' => 'LAMBA LEDA TIMUR',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            82 => 
            array (
                'id' => 2083,
                'code' => 60,
                'name' => 'LAMBA LEDA',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            83 => 
            array (
                'id' => 2084,
                'code' => 61,
                'name' => 'LAMBA LEDA UTARA',
                'province_code' => 53,
                'regency_code' => 19,
            ),
            84 => 
            array (
                'id' => 2085,
                'code' => 10,
                'name' => 'RAIJUA',
                'province_code' => 53,
                'regency_code' => 20,
            ),
            85 => 
            array (
                'id' => 2086,
                'code' => 20,
                'name' => 'HAWU MEHARA',
                'province_code' => 53,
                'regency_code' => 20,
            ),
            86 => 
            array (
                'id' => 2087,
                'code' => 30,
                'name' => 'SABU LIAE',
                'province_code' => 53,
                'regency_code' => 20,
            ),
            87 => 
            array (
                'id' => 2088,
                'code' => 40,
                'name' => 'SABU BARAT',
                'province_code' => 53,
                'regency_code' => 20,
            ),
            88 => 
            array (
                'id' => 2089,
                'code' => 50,
                'name' => 'SABU TENGAH',
                'province_code' => 53,
                'regency_code' => 20,
            ),
            89 => 
            array (
                'id' => 2090,
                'code' => 60,
                'name' => 'SABU TIMUR',
                'province_code' => 53,
                'regency_code' => 20,
            ),
            90 => 
            array (
                'id' => 2091,
                'code' => 10,
                'name' => 'WEWIKU',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            91 => 
            array (
                'id' => 2092,
                'code' => 20,
                'name' => 'MALAKA BARAT',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            92 => 
            array (
                'id' => 2093,
                'code' => 30,
                'name' => 'WELIMAN',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            93 => 
            array (
                'id' => 2094,
                'code' => 40,
                'name' => 'RINHAT',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            94 => 
            array (
                'id' => 2095,
                'code' => 50,
                'name' => 'IO KUFEU',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            95 => 
            array (
                'id' => 2096,
                'code' => 60,
                'name' => 'SASITA MEAN',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            96 => 
            array (
                'id' => 2097,
                'code' => 70,
                'name' => 'MALAKA TENGAH',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            97 => 
            array (
                'id' => 2098,
                'code' => 80,
                'name' => 'BOTIN LEOBELE',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            98 => 
            array (
                'id' => 2099,
                'code' => 90,
                'name' => 'LAEN MANEN',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            99 => 
            array (
                'id' => 2100,
                'code' => 100,
                'name' => 'MALAKA TIMUR',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            100 => 
            array (
                'id' => 2101,
                'code' => 110,
                'name' => 'KOBALIMA',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            101 => 
            array (
                'id' => 2102,
                'code' => 120,
                'name' => 'KOBALIMA TIMUR',
                'province_code' => 53,
                'regency_code' => 21,
            ),
            102 => 
            array (
                'id' => 2103,
                'code' => 10,
                'name' => 'ALAK',
                'province_code' => 53,
                'regency_code' => 71,
            ),
            103 => 
            array (
                'id' => 2104,
                'code' => 20,
                'name' => 'MAULAFA',
                'province_code' => 53,
                'regency_code' => 71,
            ),
            104 => 
            array (
                'id' => 2105,
                'code' => 30,
                'name' => 'OEBOBO',
                'province_code' => 53,
                'regency_code' => 71,
            ),
            105 => 
            array (
                'id' => 2106,
                'code' => 31,
                'name' => 'KOTA RAJA',
                'province_code' => 53,
                'regency_code' => 71,
            ),
            106 => 
            array (
                'id' => 2107,
                'code' => 40,
                'name' => 'KELAPA LIMA',
                'province_code' => 53,
                'regency_code' => 71,
            ),
            107 => 
            array (
                'id' => 2108,
                'code' => 41,
                'name' => 'KOTA LAMA',
                'province_code' => 53,
                'regency_code' => 71,
            ),
            108 => 
            array (
                'id' => 2109,
                'code' => 10,
                'name' => 'SOKAN',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            109 => 
            array (
                'id' => 2110,
                'code' => 20,
                'name' => 'TANAH PINOH',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            110 => 
            array (
                'id' => 2111,
                'code' => 21,
                'name' => 'TANAH PINOH BARAT',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            111 => 
            array (
                'id' => 2112,
                'code' => 30,
                'name' => 'SAYAN',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            112 => 
            array (
                'id' => 2113,
                'code' => 40,
                'name' => 'BELIMBING',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            113 => 
            array (
                'id' => 2114,
                'code' => 41,
                'name' => 'BELIMBING HULU',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            114 => 
            array (
                'id' => 2115,
                'code' => 50,
                'name' => 'NANGA PINOH',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            115 => 
            array (
                'id' => 2116,
                'code' => 51,
                'name' => 'PINOH SELATAN',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            116 => 
            array (
                'id' => 2117,
                'code' => 52,
                'name' => 'PINOH UTARA',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            117 => 
            array (
                'id' => 2118,
                'code' => 60,
                'name' => 'ELLA HILIR',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            118 => 
            array (
                'id' => 2119,
                'code' => 70,
                'name' => 'MENUKUNG',
                'province_code' => 61,
                'regency_code' => 10,
            ),
            119 => 
            array (
                'id' => 2120,
                'code' => 10,
                'name' => 'PULAU MAYA',
                'province_code' => 61,
                'regency_code' => 11,
            ),
            120 => 
            array (
                'id' => 2121,
                'code' => 11,
                'name' => 'KEPULAUAN KARIMATA',
                'province_code' => 61,
                'regency_code' => 11,
            ),
            121 => 
            array (
                'id' => 2122,
                'code' => 20,
                'name' => 'SUKADANA',
                'province_code' => 61,
                'regency_code' => 11,
            ),
            122 => 
            array (
                'id' => 2123,
                'code' => 30,
                'name' => 'SIMPANG HILIR',
                'province_code' => 61,
                'regency_code' => 11,
            ),
            123 => 
            array (
                'id' => 2124,
                'code' => 40,
                'name' => 'TELUK BATANG',
                'province_code' => 61,
                'regency_code' => 11,
            ),
            124 => 
            array (
                'id' => 2125,
                'code' => 50,
                'name' => 'SEPONTI',
                'province_code' => 61,
                'regency_code' => 11,
            ),
            125 => 
            array (
                'id' => 2126,
                'code' => 10,
                'name' => 'BATU AMPAR',
                'province_code' => 61,
                'regency_code' => 12,
            ),
            126 => 
            array (
                'id' => 2127,
                'code' => 20,
                'name' => 'TERENTANG',
                'province_code' => 61,
                'regency_code' => 12,
            ),
            127 => 
            array (
                'id' => 2128,
                'code' => 30,
                'name' => 'KUBU',
                'province_code' => 61,
                'regency_code' => 12,
            ),
            128 => 
            array (
                'id' => 2129,
                'code' => 40,
                'name' => 'TELUK PAKEDAI',
                'province_code' => 61,
                'regency_code' => 12,
            ),
            129 => 
            array (
                'id' => 2130,
                'code' => 50,
                'name' => 'SUNGAI KAKAP',
                'province_code' => 61,
                'regency_code' => 12,
            ),
            130 => 
            array (
                'id' => 2131,
                'code' => 60,
                'name' => 'RASAU JAYA',
                'province_code' => 61,
                'regency_code' => 12,
            ),
            131 => 
            array (
                'id' => 2132,
                'code' => 70,
                'name' => 'SUNGAI RAYA',
                'province_code' => 61,
                'regency_code' => 12,
            ),
            132 => 
            array (
                'id' => 2133,
                'code' => 80,
                'name' => 'SUNGAI AMBAWANG',
                'province_code' => 61,
                'regency_code' => 12,
            ),
            133 => 
            array (
                'id' => 2134,
                'code' => 90,
                'name' => 'KUALA MANDOR B',
                'province_code' => 61,
                'regency_code' => 12,
            ),
            134 => 
            array (
                'id' => 2135,
                'code' => 10,
                'name' => 'PONTIANAK SELATAN',
                'province_code' => 61,
                'regency_code' => 71,
            ),
            135 => 
            array (
                'id' => 2136,
                'code' => 11,
                'name' => 'PONTIANAK TENGGARA',
                'province_code' => 61,
                'regency_code' => 71,
            ),
            136 => 
            array (
                'id' => 2137,
                'code' => 20,
                'name' => 'PONTIANAK TIMUR',
                'province_code' => 61,
                'regency_code' => 71,
            ),
            137 => 
            array (
                'id' => 2138,
                'code' => 30,
                'name' => 'PONTIANAK BARAT',
                'province_code' => 61,
                'regency_code' => 71,
            ),
            138 => 
            array (
                'id' => 2139,
                'code' => 31,
                'name' => 'PONTIANAK KOTA',
                'province_code' => 61,
                'regency_code' => 71,
            ),
            139 => 
            array (
                'id' => 2140,
                'code' => 40,
                'name' => 'PONTIANAK UTARA',
                'province_code' => 61,
                'regency_code' => 71,
            ),
            140 => 
            array (
                'id' => 2141,
                'code' => 10,
                'name' => 'SINGKAWANG SELATAN',
                'province_code' => 61,
                'regency_code' => 72,
            ),
            141 => 
            array (
                'id' => 2142,
                'code' => 20,
                'name' => 'SINGKAWANG TIMUR',
                'province_code' => 61,
                'regency_code' => 72,
            ),
            142 => 
            array (
                'id' => 2143,
                'code' => 30,
                'name' => 'SINGKAWANG UTARA',
                'province_code' => 61,
                'regency_code' => 72,
            ),
            143 => 
            array (
                'id' => 2144,
                'code' => 40,
                'name' => 'SINGKAWANG BARAT',
                'province_code' => 61,
                'regency_code' => 72,
            ),
            144 => 
            array (
                'id' => 2145,
                'code' => 50,
                'name' => 'SINGKAWANG TENGAH',
                'province_code' => 61,
                'regency_code' => 72,
            ),
            145 => 
            array (
                'id' => 2146,
                'code' => 10,
                'name' => 'KAHAYAN KUALA',
                'province_code' => 62,
                'regency_code' => 10,
            ),
            146 => 
            array (
                'id' => 2147,
                'code' => 11,
                'name' => 'SEBANGAU KUALA',
                'province_code' => 62,
                'regency_code' => 10,
            ),
            147 => 
            array (
                'id' => 2148,
                'code' => 20,
                'name' => 'PANDIH BATU',
                'province_code' => 62,
                'regency_code' => 10,
            ),
            148 => 
            array (
                'id' => 2149,
                'code' => 30,
                'name' => 'MALIKU',
                'province_code' => 62,
                'regency_code' => 10,
            ),
            149 => 
            array (
                'id' => 2150,
                'code' => 40,
                'name' => 'KAHAYAN HILIR',
                'province_code' => 62,
                'regency_code' => 10,
            ),
            150 => 
            array (
                'id' => 2151,
                'code' => 41,
                'name' => 'JABIREN RAYA',
                'province_code' => 62,
                'regency_code' => 10,
            ),
            151 => 
            array (
                'id' => 2152,
                'code' => 50,
                'name' => 'KAHAYAN TENGAH',
                'province_code' => 62,
                'regency_code' => 10,
            ),
            152 => 
            array (
                'id' => 2153,
                'code' => 60,
                'name' => 'BANAMA TINGANG',
                'province_code' => 62,
                'regency_code' => 10,
            ),
            153 => 
            array (
                'id' => 2154,
                'code' => 10,
                'name' => 'MANUHING',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            154 => 
            array (
                'id' => 2155,
                'code' => 11,
                'name' => 'MANUHING RAYA',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            155 => 
            array (
                'id' => 2156,
                'code' => 20,
                'name' => 'RUNGAN',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            156 => 
            array (
                'id' => 2157,
                'code' => 21,
                'name' => 'RUNGAN HULU',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            157 => 
            array (
                'id' => 2158,
                'code' => 22,
                'name' => 'RUNGAN BARAT',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            158 => 
            array (
                'id' => 2159,
                'code' => 30,
                'name' => 'SEPANG',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            159 => 
            array (
                'id' => 2160,
                'code' => 31,
                'name' => 'MIHING RAYA',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            160 => 
            array (
                'id' => 2161,
                'code' => 40,
                'name' => 'KURUN',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            161 => 
            array (
                'id' => 2162,
                'code' => 50,
                'name' => 'TEWAH',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            162 => 
            array (
                'id' => 2163,
                'code' => 60,
                'name' => 'KAHAYAN HULU UTARA',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            163 => 
            array (
                'id' => 2164,
                'code' => 61,
                'name' => 'DAMANG BATU',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            164 => 
            array (
                'id' => 2165,
                'code' => 62,
                'name' => 'MIRI MANASA',
                'province_code' => 62,
                'regency_code' => 11,
            ),
            165 => 
            array (
                'id' => 2166,
                'code' => 10,
                'name' => 'BENUA LIMA',
                'province_code' => 62,
                'regency_code' => 12,
            ),
            166 => 
            array (
                'id' => 2167,
                'code' => 20,
                'name' => 'DUSUN TIMUR',
                'province_code' => 62,
                'regency_code' => 12,
            ),
            167 => 
            array (
                'id' => 2168,
                'code' => 21,
                'name' => 'PAJU EPAT',
                'province_code' => 62,
                'regency_code' => 12,
            ),
            168 => 
            array (
                'id' => 2169,
                'code' => 30,
                'name' => 'AWANG',
                'province_code' => 62,
                'regency_code' => 12,
            ),
            169 => 
            array (
                'id' => 2170,
                'code' => 40,
                'name' => 'PATANGKEP TUTUI',
                'province_code' => 62,
                'regency_code' => 12,
            ),
            170 => 
            array (
                'id' => 2171,
                'code' => 50,
                'name' => 'DUSUN TENGAH',
                'province_code' => 62,
                'regency_code' => 12,
            ),
            171 => 
            array (
                'id' => 2172,
                'code' => 51,
                'name' => 'RAREN BATUAH',
                'province_code' => 62,
                'regency_code' => 12,
            ),
            172 => 
            array (
                'id' => 2173,
                'code' => 52,
                'name' => 'PAKU',
                'province_code' => 62,
                'regency_code' => 12,
            ),
            173 => 
            array (
                'id' => 2174,
                'code' => 53,
                'name' => 'KARUSEN JANANG',
                'province_code' => 62,
                'regency_code' => 12,
            ),
            174 => 
            array (
                'id' => 2175,
                'code' => 60,
                'name' => 'PEMATANG KARAU',
                'province_code' => 62,
                'regency_code' => 12,
            ),
            175 => 
            array (
                'id' => 2176,
                'code' => 10,
                'name' => 'PERMATA INTAN',
                'province_code' => 62,
                'regency_code' => 13,
            ),
            176 => 
            array (
                'id' => 2177,
                'code' => 11,
                'name' => 'SUNGAI BABUAT',
                'province_code' => 62,
                'regency_code' => 13,
            ),
            177 => 
            array (
                'id' => 2178,
                'code' => 20,
                'name' => 'MURUNG',
                'province_code' => 62,
                'regency_code' => 13,
            ),
            178 => 
            array (
                'id' => 2179,
                'code' => 30,
                'name' => 'LAUNG TUHUP',
                'province_code' => 62,
                'regency_code' => 13,
            ),
            179 => 
            array (
                'id' => 2180,
                'code' => 31,
                'name' => 'BARITO TUHUP RAYA',
                'province_code' => 62,
                'regency_code' => 13,
            ),
            180 => 
            array (
                'id' => 2181,
                'code' => 40,
                'name' => 'TANAH SIANG',
                'province_code' => 62,
                'regency_code' => 13,
            ),
            181 => 
            array (
                'id' => 2182,
                'code' => 41,
                'name' => 'TANAH SIANG SELATAN',
                'province_code' => 62,
                'regency_code' => 13,
            ),
            182 => 
            array (
                'id' => 2183,
                'code' => 50,
                'name' => 'SUMBER BARITO',
                'province_code' => 62,
                'regency_code' => 13,
            ),
            183 => 
            array (
                'id' => 2184,
                'code' => 51,
                'name' => 'SERIBU RIAM',
                'province_code' => 62,
                'regency_code' => 13,
            ),
            184 => 
            array (
                'id' => 2185,
                'code' => 52,
                'name' => 'UUT MURUNG',
                'province_code' => 62,
                'regency_code' => 13,
            ),
            185 => 
            array (
                'id' => 2186,
                'code' => 10,
                'name' => 'PAHANDUT',
                'province_code' => 62,
                'regency_code' => 71,
            ),
            186 => 
            array (
                'id' => 2187,
                'code' => 11,
                'name' => 'SABANGAU',
                'province_code' => 62,
                'regency_code' => 71,
            ),
            187 => 
            array (
                'id' => 2188,
                'code' => 12,
                'name' => 'JEKAN RAYA',
                'province_code' => 62,
                'regency_code' => 71,
            ),
            188 => 
            array (
                'id' => 2189,
                'code' => 20,
                'name' => 'BUKIT BATU',
                'province_code' => 62,
                'regency_code' => 71,
            ),
            189 => 
            array (
                'id' => 2190,
                'code' => 21,
                'name' => 'RAKUMPIT',
                'province_code' => 62,
                'regency_code' => 71,
            ),
            190 => 
            array (
                'id' => 2191,
                'code' => 10,
                'name' => 'KUSAN HILIR',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            191 => 
            array (
                'id' => 2192,
                'code' => 11,
                'name' => 'KUSAN TENGAH',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            192 => 
            array (
                'id' => 2193,
                'code' => 20,
                'name' => 'SUNGAI LOBAN',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            193 => 
            array (
                'id' => 2194,
                'code' => 30,
                'name' => 'SATUI',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            194 => 
            array (
                'id' => 2195,
                'code' => 31,
                'name' => 'ANGSANA',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            195 => 
            array (
                'id' => 2196,
                'code' => 40,
                'name' => 'KUSAN HULU',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            196 => 
            array (
                'id' => 2197,
                'code' => 41,
                'name' => 'KURANJI',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            197 => 
            array (
                'id' => 2198,
                'code' => 50,
                'name' => 'BATU LICIN',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            198 => 
            array (
                'id' => 2199,
                'code' => 51,
                'name' => 'KARANG BINTANG',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            199 => 
            array (
                'id' => 2200,
                'code' => 52,
                'name' => 'SIMPANG EMPAT',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            200 => 
            array (
                'id' => 2201,
                'code' => 53,
                'name' => 'MANTEWE',
                'province_code' => 63,
                'regency_code' => 10,
            ),
            201 => 
            array (
                'id' => 2202,
                'code' => 10,
                'name' => 'LAMPIHONG',
                'province_code' => 63,
                'regency_code' => 11,
            ),
            202 => 
            array (
                'id' => 2203,
                'code' => 20,
                'name' => 'BATU MANDI',
                'province_code' => 63,
                'regency_code' => 11,
            ),
            203 => 
            array (
                'id' => 2204,
                'code' => 30,
                'name' => 'AWAYAN',
                'province_code' => 63,
                'regency_code' => 11,
            ),
            204 => 
            array (
                'id' => 2205,
                'code' => 31,
                'name' => 'TEBING TINGGI',
                'province_code' => 63,
                'regency_code' => 11,
            ),
            205 => 
            array (
                'id' => 2206,
                'code' => 40,
                'name' => 'PARINGIN',
                'province_code' => 63,
                'regency_code' => 11,
            ),
            206 => 
            array (
                'id' => 2207,
                'code' => 41,
                'name' => 'PARINGIN SELATAN',
                'province_code' => 63,
                'regency_code' => 11,
            ),
            207 => 
            array (
                'id' => 2208,
                'code' => 50,
                'name' => 'JUAI',
                'province_code' => 63,
                'regency_code' => 11,
            ),
            208 => 
            array (
                'id' => 2209,
                'code' => 60,
                'name' => 'HALONG',
                'province_code' => 63,
                'regency_code' => 11,
            ),
            209 => 
            array (
                'id' => 2210,
                'code' => 10,
                'name' => 'BANJARMASIN SELATAN',
                'province_code' => 63,
                'regency_code' => 71,
            ),
            210 => 
            array (
                'id' => 2211,
                'code' => 20,
                'name' => 'BANJARMASIN TIMUR',
                'province_code' => 63,
                'regency_code' => 71,
            ),
            211 => 
            array (
                'id' => 2212,
                'code' => 30,
                'name' => 'BANJARMASIN BARAT',
                'province_code' => 63,
                'regency_code' => 71,
            ),
            212 => 
            array (
                'id' => 2213,
                'code' => 31,
                'name' => 'BANJARMASIN TENGAH',
                'province_code' => 63,
                'regency_code' => 71,
            ),
            213 => 
            array (
                'id' => 2214,
                'code' => 40,
                'name' => 'BANJARMASIN UTARA',
                'province_code' => 63,
                'regency_code' => 71,
            ),
            214 => 
            array (
                'id' => 2215,
                'code' => 10,
                'name' => 'LANDASAN ULIN',
                'province_code' => 63,
                'regency_code' => 72,
            ),
            215 => 
            array (
                'id' => 2216,
                'code' => 11,
                'name' => 'LIANG ANGGANG',
                'province_code' => 63,
                'regency_code' => 72,
            ),
            216 => 
            array (
                'id' => 2217,
                'code' => 20,
                'name' => 'CEMPAKA',
                'province_code' => 63,
                'regency_code' => 72,
            ),
            217 => 
            array (
                'id' => 2218,
                'code' => 31,
                'name' => 'BANJAR BARU UTARA',
                'province_code' => 63,
                'regency_code' => 72,
            ),
            218 => 
            array (
                'id' => 2219,
                'code' => 32,
                'name' => 'BANJAR BARU SELATAN',
                'province_code' => 63,
                'regency_code' => 72,
            ),
            219 => 
            array (
                'id' => 2220,
                'code' => 10,
                'name' => 'LAHAM',
                'province_code' => 64,
                'regency_code' => 11,
            ),
            220 => 
            array (
                'id' => 2221,
                'code' => 20,
                'name' => 'LONG HUBUNG',
                'province_code' => 64,
                'regency_code' => 11,
            ),
            221 => 
            array (
                'id' => 2222,
                'code' => 30,
                'name' => 'LONG BAGUN',
                'province_code' => 64,
                'regency_code' => 11,
            ),
            222 => 
            array (
                'id' => 2223,
                'code' => 40,
                'name' => 'LONG PAHANGAI',
                'province_code' => 64,
                'regency_code' => 11,
            ),
            223 => 
            array (
                'id' => 2224,
                'code' => 50,
                'name' => 'LONG APARI',
                'province_code' => 64,
                'regency_code' => 11,
            ),
            224 => 
            array (
                'id' => 2225,
                'code' => 10,
                'name' => 'BALIKPAPAN SELATAN',
                'province_code' => 64,
                'regency_code' => 71,
            ),
            225 => 
            array (
                'id' => 2226,
                'code' => 11,
                'name' => 'BALIKPAPAN KOTA',
                'province_code' => 64,
                'regency_code' => 71,
            ),
            226 => 
            array (
                'id' => 2227,
                'code' => 20,
                'name' => 'BALIKPAPAN TIMUR',
                'province_code' => 64,
                'regency_code' => 71,
            ),
            227 => 
            array (
                'id' => 2228,
                'code' => 30,
                'name' => 'BALIKPAPAN UTARA',
                'province_code' => 64,
                'regency_code' => 71,
            ),
            228 => 
            array (
                'id' => 2229,
                'code' => 40,
                'name' => 'BALIKPAPAN TENGAH',
                'province_code' => 64,
                'regency_code' => 71,
            ),
            229 => 
            array (
                'id' => 2230,
                'code' => 50,
                'name' => 'BALIKPAPAN BARAT',
                'province_code' => 64,
                'regency_code' => 71,
            ),
            230 => 
            array (
                'id' => 2231,
                'code' => 10,
                'name' => 'PALARAN',
                'province_code' => 64,
                'regency_code' => 72,
            ),
            231 => 
            array (
                'id' => 2232,
                'code' => 20,
                'name' => 'SAMARINDA ILIR',
                'province_code' => 64,
                'regency_code' => 72,
            ),
            232 => 
            array (
                'id' => 2233,
                'code' => 21,
                'name' => 'SAMARINDA KOTA',
                'province_code' => 64,
                'regency_code' => 72,
            ),
            233 => 
            array (
                'id' => 2234,
                'code' => 22,
                'name' => 'SAMBUTAN',
                'province_code' => 64,
                'regency_code' => 72,
            ),
            234 => 
            array (
                'id' => 2235,
                'code' => 30,
                'name' => 'SAMARINDA SEBERANG',
                'province_code' => 64,
                'regency_code' => 72,
            ),
            235 => 
            array (
                'id' => 2236,
                'code' => 31,
                'name' => 'LOA JANAN ILIR',
                'province_code' => 64,
                'regency_code' => 72,
            ),
            236 => 
            array (
                'id' => 2237,
                'code' => 40,
                'name' => 'SUNGAI KUNJANG',
                'province_code' => 64,
                'regency_code' => 72,
            ),
            237 => 
            array (
                'id' => 2238,
                'code' => 50,
                'name' => 'SAMARINDA ULU',
                'province_code' => 64,
                'regency_code' => 72,
            ),
            238 => 
            array (
                'id' => 2239,
                'code' => 60,
                'name' => 'SAMARINDA UTARA',
                'province_code' => 64,
                'regency_code' => 72,
            ),
            239 => 
            array (
                'id' => 2240,
                'code' => 61,
                'name' => 'SUNGAI PINANG',
                'province_code' => 64,
                'regency_code' => 72,
            ),
            240 => 
            array (
                'id' => 2241,
                'code' => 10,
                'name' => 'BONTANG SELATAN',
                'province_code' => 64,
                'regency_code' => 74,
            ),
            241 => 
            array (
                'id' => 2242,
                'code' => 20,
                'name' => 'BONTANG UTARA',
                'province_code' => 64,
                'regency_code' => 74,
            ),
            242 => 
            array (
                'id' => 2243,
                'code' => 30,
                'name' => 'BONTANG BARAT',
                'province_code' => 64,
                'regency_code' => 74,
            ),
            243 => 
            array (
                'id' => 2244,
                'code' => 10,
                'name' => 'TARAKAN TIMUR',
                'province_code' => 65,
                'regency_code' => 71,
            ),
            244 => 
            array (
                'id' => 2245,
                'code' => 20,
                'name' => 'TARAKAN TENGAH',
                'province_code' => 65,
                'regency_code' => 71,
            ),
            245 => 
            array (
                'id' => 2246,
                'code' => 30,
                'name' => 'TARAKAN BARAT',
                'province_code' => 65,
                'regency_code' => 71,
            ),
            246 => 
            array (
                'id' => 2247,
                'code' => 40,
                'name' => 'TARAKAN UTARA',
                'province_code' => 65,
                'regency_code' => 71,
            ),
            247 => 
            array (
                'id' => 2248,
                'code' => 10,
                'name' => 'POSIGADAN',
                'province_code' => 71,
                'regency_code' => 10,
            ),
            248 => 
            array (
                'id' => 2249,
                'code' => 11,
                'name' => 'TOMINI',
                'province_code' => 71,
                'regency_code' => 10,
            ),
            249 => 
            array (
                'id' => 2250,
                'code' => 20,
                'name' => 'BOLAANG UKI',
                'province_code' => 71,
                'regency_code' => 10,
            ),
            250 => 
            array (
                'id' => 2251,
                'code' => 21,
                'name' => 'HELUMO',
                'province_code' => 71,
                'regency_code' => 10,
            ),
            251 => 
            array (
                'id' => 2252,
                'code' => 30,
                'name' => 'PINOLOSIAN',
                'province_code' => 71,
                'regency_code' => 10,
            ),
            252 => 
            array (
                'id' => 2253,
                'code' => 40,
                'name' => 'PINOLOSIAN TENGAH',
                'province_code' => 71,
                'regency_code' => 10,
            ),
            253 => 
            array (
                'id' => 2254,
                'code' => 50,
                'name' => 'PINOLOSIAN TIMUR',
                'province_code' => 71,
                'regency_code' => 10,
            ),
            254 => 
            array (
                'id' => 2255,
                'code' => 10,
                'name' => 'NUANGAN',
                'province_code' => 71,
                'regency_code' => 11,
            ),
            255 => 
            array (
                'id' => 2256,
                'code' => 11,
                'name' => 'MOTONGKAD',
                'province_code' => 71,
                'regency_code' => 11,
            ),
            256 => 
            array (
                'id' => 2257,
                'code' => 20,
                'name' => 'TUTUYAN',
                'province_code' => 71,
                'regency_code' => 11,
            ),
            257 => 
            array (
                'id' => 2258,
                'code' => 30,
                'name' => 'KOTABUNAN',
                'province_code' => 71,
                'regency_code' => 11,
            ),
            258 => 
            array (
                'id' => 2259,
                'code' => 40,
                'name' => 'MODAYAG',
                'province_code' => 71,
                'regency_code' => 11,
            ),
            259 => 
            array (
                'id' => 2260,
                'code' => 41,
                'name' => 'MOOAT',
                'province_code' => 71,
                'regency_code' => 11,
            ),
            260 => 
            array (
                'id' => 2261,
                'code' => 50,
                'name' => 'MODAYAG BARAT',
                'province_code' => 71,
                'regency_code' => 11,
            ),
            261 => 
            array (
                'id' => 2262,
                'code' => 10,
                'name' => 'MALALAYANG',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            262 => 
            array (
                'id' => 2263,
                'code' => 20,
                'name' => 'SARIO',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            263 => 
            array (
                'id' => 2264,
                'code' => 21,
                'name' => 'WANEA',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            264 => 
            array (
                'id' => 2265,
                'code' => 30,
                'name' => 'WENANG',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            265 => 
            array (
                'id' => 2266,
                'code' => 31,
                'name' => 'TIKALA',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            266 => 
            array (
                'id' => 2267,
                'code' => 32,
                'name' => 'PAAL DUA',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            267 => 
            array (
                'id' => 2268,
                'code' => 40,
                'name' => 'MAPANGET',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            268 => 
            array (
                'id' => 2269,
                'code' => 51,
                'name' => 'SINGKIL',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            269 => 
            array (
                'id' => 2270,
                'code' => 52,
                'name' => 'TUMINTING',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            270 => 
            array (
                'id' => 2271,
                'code' => 53,
                'name' => 'BUNAKEN',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            271 => 
            array (
                'id' => 2272,
                'code' => 54,
                'name' => 'BUNAKEN KEPULAUAN',
                'province_code' => 71,
                'regency_code' => 71,
            ),
            272 => 
            array (
                'id' => 2273,
                'code' => 10,
                'name' => 'MADIDIR',
                'province_code' => 71,
                'regency_code' => 72,
            ),
            273 => 
            array (
                'id' => 2274,
                'code' => 11,
                'name' => 'MATUARI',
                'province_code' => 71,
                'regency_code' => 72,
            ),
            274 => 
            array (
                'id' => 2275,
                'code' => 12,
                'name' => 'GIRIAN',
                'province_code' => 71,
                'regency_code' => 72,
            ),
            275 => 
            array (
                'id' => 2276,
                'code' => 21,
                'name' => 'LEMBEH SELATAN',
                'province_code' => 71,
                'regency_code' => 72,
            ),
            276 => 
            array (
                'id' => 2277,
                'code' => 22,
                'name' => 'LEMBEH UTARA',
                'province_code' => 71,
                'regency_code' => 72,
            ),
            277 => 
            array (
                'id' => 2278,
                'code' => 30,
                'name' => 'AERTEMBAGA',
                'province_code' => 71,
                'regency_code' => 72,
            ),
            278 => 
            array (
                'id' => 2279,
                'code' => 31,
                'name' => 'MAESA',
                'province_code' => 71,
                'regency_code' => 72,
            ),
            279 => 
            array (
                'id' => 2280,
                'code' => 40,
                'name' => 'RANOWULU',
                'province_code' => 71,
                'regency_code' => 72,
            ),
            280 => 
            array (
                'id' => 2281,
                'code' => 10,
                'name' => 'TOMOHON SELATAN',
                'province_code' => 71,
                'regency_code' => 73,
            ),
            281 => 
            array (
                'id' => 2282,
                'code' => 20,
                'name' => 'TOMOHON TENGAH',
                'province_code' => 71,
                'regency_code' => 73,
            ),
            282 => 
            array (
                'id' => 2283,
                'code' => 21,
                'name' => 'TOMOHON TIMUR',
                'province_code' => 71,
                'regency_code' => 73,
            ),
            283 => 
            array (
                'id' => 2284,
                'code' => 22,
                'name' => 'TOMOHON BARAT',
                'province_code' => 71,
                'regency_code' => 73,
            ),
            284 => 
            array (
                'id' => 2285,
                'code' => 30,
                'name' => 'TOMOHON UTARA',
                'province_code' => 71,
                'regency_code' => 73,
            ),
            285 => 
            array (
                'id' => 2286,
                'code' => 10,
                'name' => 'KOTAMOBAGU SELATAN',
                'province_code' => 71,
                'regency_code' => 74,
            ),
            286 => 
            array (
                'id' => 2287,
                'code' => 20,
                'name' => 'KOTAMOBAGU TIMUR',
                'province_code' => 71,
                'regency_code' => 74,
            ),
            287 => 
            array (
                'id' => 2288,
                'code' => 30,
                'name' => 'KOTAMOBAGU BARAT',
                'province_code' => 71,
                'regency_code' => 74,
            ),
            288 => 
            array (
                'id' => 2289,
                'code' => 40,
                'name' => 'KOTAMOBAGU UTARA',
                'province_code' => 71,
                'regency_code' => 74,
            ),
            289 => 
            array (
                'id' => 2290,
                'code' => 10,
                'name' => 'PIPIKORO',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            290 => 
            array (
                'id' => 2291,
                'code' => 20,
                'name' => 'KULAWI SELATAN',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            291 => 
            array (
                'id' => 2292,
                'code' => 30,
                'name' => 'KULAWI',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            292 => 
            array (
                'id' => 2293,
                'code' => 40,
                'name' => 'LINDU',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            293 => 
            array (
                'id' => 2294,
                'code' => 50,
                'name' => 'NOKILALAKI',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            294 => 
            array (
                'id' => 2295,
                'code' => 60,
                'name' => 'PALOLO',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            295 => 
            array (
                'id' => 2296,
                'code' => 70,
                'name' => 'GUMBASA',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            296 => 
            array (
                'id' => 2297,
                'code' => 80,
                'name' => 'DOLO SELATAN',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            297 => 
            array (
                'id' => 2298,
                'code' => 90,
                'name' => 'DOLO BARAT',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            298 => 
            array (
                'id' => 2299,
                'code' => 100,
                'name' => 'TANAMBULAVA',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            299 => 
            array (
                'id' => 2300,
                'code' => 110,
                'name' => 'DOLO',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            300 => 
            array (
                'id' => 2301,
                'code' => 120,
                'name' => 'SIGI BIROMARU',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            301 => 
            array (
                'id' => 2302,
                'code' => 121,
                'name' => 'SIGI KOTA',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            302 => 
            array (
                'id' => 2303,
                'code' => 130,
                'name' => 'MARAWOLA',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            303 => 
            array (
                'id' => 2304,
                'code' => 140,
                'name' => 'MARAWOLA BARAT',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            304 => 
            array (
                'id' => 2305,
                'code' => 150,
                'name' => 'KINOVARO',
                'province_code' => 72,
                'regency_code' => 10,
            ),
            305 => 
            array (
                'id' => 2306,
                'code' => 10,
                'name' => 'BANGKURUNG',
                'province_code' => 72,
                'regency_code' => 11,
            ),
            306 => 
            array (
                'id' => 2307,
                'code' => 20,
                'name' => 'LABOBO',
                'province_code' => 72,
                'regency_code' => 11,
            ),
            307 => 
            array (
                'id' => 2308,
                'code' => 30,
                'name' => 'BANGGAI UTARA',
                'province_code' => 72,
                'regency_code' => 11,
            ),
            308 => 
            array (
                'id' => 2309,
                'code' => 40,
                'name' => 'BANGGAI',
                'province_code' => 72,
                'regency_code' => 11,
            ),
            309 => 
            array (
                'id' => 2310,
                'code' => 50,
                'name' => 'BANGGAI TENGAH',
                'province_code' => 72,
                'regency_code' => 11,
            ),
            310 => 
            array (
                'id' => 2311,
                'code' => 60,
                'name' => 'BANGGAI SELATAN',
                'province_code' => 72,
                'regency_code' => 11,
            ),
            311 => 
            array (
                'id' => 2312,
                'code' => 70,
                'name' => 'BOKAN KEPULAUAN',
                'province_code' => 72,
                'regency_code' => 11,
            ),
            312 => 
            array (
                'id' => 2313,
                'code' => 10,
                'name' => 'MORI ATAS',
                'province_code' => 72,
                'regency_code' => 12,
            ),
            313 => 
            array (
                'id' => 2314,
                'code' => 20,
                'name' => 'LEMBO',
                'province_code' => 72,
                'regency_code' => 12,
            ),
            314 => 
            array (
                'id' => 2315,
                'code' => 30,
                'name' => 'LEMBO RAYA',
                'province_code' => 72,
                'regency_code' => 12,
            ),
            315 => 
            array (
                'id' => 2316,
                'code' => 40,
                'name' => 'PETASIA TIMUR',
                'province_code' => 72,
                'regency_code' => 12,
            ),
            316 => 
            array (
                'id' => 2317,
                'code' => 50,
                'name' => 'PETASIA',
                'province_code' => 72,
                'regency_code' => 12,
            ),
            317 => 
            array (
                'id' => 2318,
                'code' => 60,
                'name' => 'PETASIA BARAT',
                'province_code' => 72,
                'regency_code' => 12,
            ),
            318 => 
            array (
                'id' => 2319,
                'code' => 70,
                'name' => 'MORI UTARA',
                'province_code' => 72,
                'regency_code' => 12,
            ),
            319 => 
            array (
                'id' => 2320,
                'code' => 80,
                'name' => 'SOYO JAYA',
                'province_code' => 72,
                'regency_code' => 12,
            ),
            320 => 
            array (
                'id' => 2321,
                'code' => 90,
                'name' => 'BUNGKU UTARA',
                'province_code' => 72,
                'regency_code' => 12,
            ),
            321 => 
            array (
                'id' => 2322,
                'code' => 100,
                'name' => 'MAMOSALATO',
                'province_code' => 72,
                'regency_code' => 12,
            ),
            322 => 
            array (
                'id' => 2323,
                'code' => 10,
                'name' => 'PALU BARAT',
                'province_code' => 72,
                'regency_code' => 71,
            ),
            323 => 
            array (
                'id' => 2324,
                'code' => 11,
                'name' => 'TATANGA',
                'province_code' => 72,
                'regency_code' => 71,
            ),
            324 => 
            array (
                'id' => 2325,
                'code' => 12,
                'name' => 'ULUJADI',
                'province_code' => 72,
                'regency_code' => 71,
            ),
            325 => 
            array (
                'id' => 2326,
                'code' => 20,
                'name' => 'PALU SELATAN',
                'province_code' => 72,
                'regency_code' => 71,
            ),
            326 => 
            array (
                'id' => 2327,
                'code' => 30,
                'name' => 'PALU TIMUR',
                'province_code' => 72,
                'regency_code' => 71,
            ),
            327 => 
            array (
                'id' => 2328,
                'code' => 31,
                'name' => 'MANTIKULORE',
                'province_code' => 72,
                'regency_code' => 71,
            ),
            328 => 
            array (
                'id' => 2329,
                'code' => 40,
                'name' => 'PALU UTARA',
                'province_code' => 72,
                'regency_code' => 71,
            ),
            329 => 
            array (
                'id' => 2330,
                'code' => 41,
                'name' => 'TAWAELI',
                'province_code' => 72,
                'regency_code' => 71,
            ),
            330 => 
            array (
                'id' => 2331,
                'code' => 10,
                'name' => 'TANETE RIAJA',
                'province_code' => 73,
                'regency_code' => 10,
            ),
            331 => 
            array (
                'id' => 2332,
                'code' => 11,
                'name' => 'PUJANANTING',
                'province_code' => 73,
                'regency_code' => 10,
            ),
            332 => 
            array (
                'id' => 2333,
                'code' => 20,
                'name' => 'TANETE RILAU',
                'province_code' => 73,
                'regency_code' => 10,
            ),
            333 => 
            array (
                'id' => 2334,
                'code' => 30,
                'name' => 'BARRU',
                'province_code' => 73,
                'regency_code' => 10,
            ),
            334 => 
            array (
                'id' => 2335,
                'code' => 40,
                'name' => 'SOPPENG RIAJA',
                'province_code' => 73,
                'regency_code' => 10,
            ),
            335 => 
            array (
                'id' => 2336,
                'code' => 41,
                'name' => 'BALUSU',
                'province_code' => 73,
                'regency_code' => 10,
            ),
            336 => 
            array (
                'id' => 2337,
                'code' => 50,
                'name' => 'MALLUSETASI',
                'province_code' => 73,
                'regency_code' => 10,
            ),
            337 => 
            array (
                'id' => 2338,
                'code' => 10,
                'name' => 'BONTOCANI',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            338 => 
            array (
                'id' => 2339,
                'code' => 20,
                'name' => 'KAHU',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            339 => 
            array (
                'id' => 2340,
                'code' => 30,
                'name' => 'KAJUARA',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            340 => 
            array (
                'id' => 2341,
                'code' => 40,
                'name' => 'SALOMEKKO',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            341 => 
            array (
                'id' => 2342,
                'code' => 50,
                'name' => 'TONRA',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            342 => 
            array (
                'id' => 2343,
                'code' => 60,
                'name' => 'PATIMPENG',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            343 => 
            array (
                'id' => 2344,
                'code' => 70,
                'name' => 'LIBURENG',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            344 => 
            array (
                'id' => 2345,
                'code' => 80,
                'name' => 'MARE',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            345 => 
            array (
                'id' => 2346,
                'code' => 90,
                'name' => 'SIBULUE',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            346 => 
            array (
                'id' => 2347,
                'code' => 100,
                'name' => 'CINA',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            347 => 
            array (
                'id' => 2348,
                'code' => 110,
                'name' => 'BAREBBO',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            348 => 
            array (
                'id' => 2349,
                'code' => 120,
                'name' => 'PONRE',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            349 => 
            array (
                'id' => 2350,
                'code' => 130,
                'name' => 'LAPPARIAJA',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            350 => 
            array (
                'id' => 2351,
                'code' => 140,
                'name' => 'LAMURU',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            351 => 
            array (
                'id' => 2352,
                'code' => 141,
                'name' => 'TELLU LIMPOE',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            352 => 
            array (
                'id' => 2353,
                'code' => 150,
                'name' => 'BENGO',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            353 => 
            array (
                'id' => 2354,
                'code' => 160,
                'name' => 'ULAWENG',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            354 => 
            array (
                'id' => 2355,
                'code' => 170,
                'name' => 'PALAKKA',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            355 => 
            array (
                'id' => 2356,
                'code' => 180,
                'name' => 'AWANGPONE',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            356 => 
            array (
                'id' => 2357,
                'code' => 190,
                'name' => 'TELLU SIATTINGE',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            357 => 
            array (
                'id' => 2358,
                'code' => 200,
                'name' => 'AMALI',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            358 => 
            array (
                'id' => 2359,
                'code' => 210,
                'name' => 'AJANGALE',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            359 => 
            array (
                'id' => 2360,
                'code' => 220,
                'name' => 'DUA BOCCOE',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            360 => 
            array (
                'id' => 2361,
                'code' => 230,
                'name' => 'CENRANA',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            361 => 
            array (
                'id' => 2362,
                'code' => 710,
                'name' => 'TANETE RIATTANG BARAT',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            362 => 
            array (
                'id' => 2363,
                'code' => 720,
                'name' => 'TANETE RIATTANG',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            363 => 
            array (
                'id' => 2364,
                'code' => 730,
                'name' => 'TANETE RIATTANG TIMUR',
                'province_code' => 73,
                'regency_code' => 11,
            ),
            364 => 
            array (
                'id' => 2365,
                'code' => 10,
                'name' => 'MARIO RIWAWO',
                'province_code' => 73,
                'regency_code' => 12,
            ),
            365 => 
            array (
                'id' => 2366,
                'code' => 20,
                'name' => 'LALABATA',
                'province_code' => 73,
                'regency_code' => 12,
            ),
            366 => 
            array (
                'id' => 2367,
                'code' => 30,
                'name' => 'LILI RIAJA',
                'province_code' => 73,
                'regency_code' => 12,
            ),
            367 => 
            array (
                'id' => 2368,
                'code' => 31,
                'name' => 'GANRA',
                'province_code' => 73,
                'regency_code' => 12,
            ),
            368 => 
            array (
                'id' => 2369,
                'code' => 32,
                'name' => 'CITTA',
                'province_code' => 73,
                'regency_code' => 12,
            ),
            369 => 
            array (
                'id' => 2370,
                'code' => 40,
                'name' => 'LILI RILAU',
                'province_code' => 73,
                'regency_code' => 12,
            ),
            370 => 
            array (
                'id' => 2371,
                'code' => 50,
                'name' => 'DONRI DONRI',
                'province_code' => 73,
                'regency_code' => 12,
            ),
            371 => 
            array (
                'id' => 2372,
                'code' => 60,
                'name' => 'MARIO RIAWA',
                'province_code' => 73,
                'regency_code' => 12,
            ),
            372 => 
            array (
                'id' => 2373,
                'code' => 10,
                'name' => 'SABBANG PARU',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            373 => 
            array (
                'id' => 2374,
                'code' => 20,
                'name' => 'TEMPE',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            374 => 
            array (
                'id' => 2375,
                'code' => 30,
                'name' => 'PAMMANA',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            375 => 
            array (
                'id' => 2376,
                'code' => 40,
                'name' => 'BOLA',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            376 => 
            array (
                'id' => 2377,
                'code' => 50,
                'name' => 'TAKKALALLA',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            377 => 
            array (
                'id' => 2378,
                'code' => 60,
                'name' => 'SAJOANGING',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            378 => 
            array (
                'id' => 2379,
                'code' => 61,
                'name' => 'PENRANG',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            379 => 
            array (
                'id' => 2380,
                'code' => 70,
                'name' => 'MAJAULENG',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            380 => 
            array (
                'id' => 2381,
                'code' => 80,
                'name' => 'TANASITOLO',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            381 => 
            array (
                'id' => 2382,
                'code' => 90,
                'name' => 'BELAWA',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            382 => 
            array (
                'id' => 2383,
                'code' => 100,
                'name' => 'MANIANG PAJO',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            383 => 
            array (
                'id' => 2384,
                'code' => 101,
                'name' => 'GILIRENG',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            384 => 
            array (
                'id' => 2385,
                'code' => 110,
                'name' => 'KEERA',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            385 => 
            array (
                'id' => 2386,
                'code' => 120,
                'name' => 'PITUMPANUA',
                'province_code' => 73,
                'regency_code' => 13,
            ),
            386 => 
            array (
                'id' => 2387,
                'code' => 10,
                'name' => 'PANCA LAUTANG',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            387 => 
            array (
                'id' => 2388,
                'code' => 20,
                'name' => 'TELLULIMPO E',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            388 => 
            array (
                'id' => 2389,
                'code' => 30,
                'name' => 'WATANG PULU',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            389 => 
            array (
                'id' => 2390,
                'code' => 40,
                'name' => 'BARANTI',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            390 => 
            array (
                'id' => 2391,
                'code' => 50,
                'name' => 'PANCA RIJANG',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            391 => 
            array (
                'id' => 2392,
                'code' => 51,
                'name' => 'KULO',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            392 => 
            array (
                'id' => 2393,
                'code' => 60,
                'name' => 'MARITENGNGAE',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            393 => 
            array (
                'id' => 2394,
                'code' => 61,
                'name' => 'WATANG SIDENRENG',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            394 => 
            array (
                'id' => 2395,
                'code' => 70,
                'name' => 'PITU RIAWA',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            395 => 
            array (
                'id' => 2396,
                'code' => 80,
                'name' => 'DUAPITUE',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            396 => 
            array (
                'id' => 2397,
                'code' => 81,
                'name' => 'PITU RIASE',
                'province_code' => 73,
                'regency_code' => 14,
            ),
            397 => 
            array (
                'id' => 2398,
                'code' => 10,
                'name' => 'SUPPA',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            398 => 
            array (
                'id' => 2399,
                'code' => 20,
                'name' => 'MATTIROSOMPE',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            399 => 
            array (
                'id' => 2400,
                'code' => 21,
                'name' => 'LANRISANG',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            400 => 
            array (
                'id' => 2401,
                'code' => 30,
                'name' => 'MATTIRO BULU',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            401 => 
            array (
                'id' => 2402,
                'code' => 40,
                'name' => 'WATANG SAWITTO',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            402 => 
            array (
                'id' => 2403,
                'code' => 41,
                'name' => 'PALETEANG',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            403 => 
            array (
                'id' => 2404,
                'code' => 42,
                'name' => 'TIROANG',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            404 => 
            array (
                'id' => 2405,
                'code' => 50,
                'name' => 'PATAMPANUA',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            405 => 
            array (
                'id' => 2406,
                'code' => 60,
                'name' => 'CEMPA',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            406 => 
            array (
                'id' => 2407,
                'code' => 70,
                'name' => 'DUAMPANUA',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            407 => 
            array (
                'id' => 2408,
                'code' => 71,
                'name' => 'BATULAPPA',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            408 => 
            array (
                'id' => 2409,
                'code' => 80,
                'name' => 'LEMBANG',
                'province_code' => 73,
                'regency_code' => 15,
            ),
            409 => 
            array (
                'id' => 2410,
                'code' => 10,
                'name' => 'MAIWA',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            410 => 
            array (
                'id' => 2411,
                'code' => 11,
                'name' => 'BUNGIN',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            411 => 
            array (
                'id' => 2412,
                'code' => 20,
                'name' => 'ENREKANG',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            412 => 
            array (
                'id' => 2413,
                'code' => 21,
                'name' => 'CENDANA',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            413 => 
            array (
                'id' => 2414,
                'code' => 30,
                'name' => 'BARAKA',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            414 => 
            array (
                'id' => 2415,
                'code' => 31,
                'name' => 'BUNTU BATU',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            415 => 
            array (
                'id' => 2416,
                'code' => 40,
                'name' => 'ANGGERAJA',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            416 => 
            array (
                'id' => 2417,
                'code' => 41,
                'name' => 'MALUA',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            417 => 
            array (
                'id' => 2418,
                'code' => 50,
                'name' => 'ALLA',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            418 => 
            array (
                'id' => 2419,
                'code' => 51,
                'name' => 'CURIO',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            419 => 
            array (
                'id' => 2420,
                'code' => 52,
                'name' => 'MASALLE',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            420 => 
            array (
                'id' => 2421,
                'code' => 53,
                'name' => 'BAROKO',
                'province_code' => 73,
                'regency_code' => 16,
            ),
            421 => 
            array (
                'id' => 2422,
                'code' => 10,
                'name' => 'LAROMPONG',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            422 => 
            array (
                'id' => 2423,
                'code' => 11,
                'name' => 'LAROMPONG SELATAN',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            423 => 
            array (
                'id' => 2424,
                'code' => 20,
                'name' => 'SULI',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            424 => 
            array (
                'id' => 2425,
                'code' => 21,
                'name' => 'SULI BARAT',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            425 => 
            array (
                'id' => 2426,
                'code' => 30,
                'name' => 'BELOPA',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            426 => 
            array (
                'id' => 2427,
                'code' => 31,
                'name' => 'KAMANRE',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            427 => 
            array (
                'id' => 2428,
                'code' => 32,
                'name' => 'BELOPA UTARA',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            428 => 
            array (
                'id' => 2429,
                'code' => 40,
                'name' => 'BAJO',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            429 => 
            array (
                'id' => 2430,
                'code' => 41,
                'name' => 'BAJO BARAT',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            430 => 
            array (
                'id' => 2431,
                'code' => 50,
                'name' => 'BASSESANGTEMPE',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            431 => 
            array (
                'id' => 2432,
                'code' => 51,
                'name' => 'LATIMOJONG',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            432 => 
            array (
                'id' => 2433,
                'code' => 52,
                'name' => 'BASSESANGTEMPE UTARA',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            433 => 
            array (
                'id' => 2434,
                'code' => 60,
                'name' => 'BUPON',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            434 => 
            array (
                'id' => 2435,
                'code' => 61,
                'name' => 'PONRANG',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            435 => 
            array (
                'id' => 2436,
                'code' => 62,
                'name' => 'PONRANG SELATAN',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            436 => 
            array (
                'id' => 2437,
                'code' => 70,
                'name' => 'BUA',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            437 => 
            array (
                'id' => 2438,
                'code' => 80,
                'name' => 'WALENRANG',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            438 => 
            array (
                'id' => 2439,
                'code' => 81,
                'name' => 'WALENRANG TIMUR',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            439 => 
            array (
                'id' => 2440,
                'code' => 90,
                'name' => 'LAMASI',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            440 => 
            array (
                'id' => 2441,
                'code' => 91,
                'name' => 'WALENRANG UTARA',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            441 => 
            array (
                'id' => 2442,
                'code' => 92,
                'name' => 'WALENRANG BARAT',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            442 => 
            array (
                'id' => 2443,
                'code' => 93,
                'name' => 'LAMASI TIMUR',
                'province_code' => 73,
                'regency_code' => 17,
            ),
            443 => 
            array (
                'id' => 2444,
                'code' => 10,
                'name' => 'BONGGAKARADENG',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            444 => 
            array (
                'id' => 2445,
                'code' => 11,
                'name' => 'SIMBUANG',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            445 => 
            array (
                'id' => 2446,
                'code' => 12,
                'name' => 'RANO',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            446 => 
            array (
                'id' => 2447,
                'code' => 13,
                'name' => 'MAPPAK',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            447 => 
            array (
                'id' => 2448,
                'code' => 20,
                'name' => 'MENGKENDEK',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            448 => 
            array (
                'id' => 2449,
                'code' => 21,
                'name' => 'GANDANG BATU SILANAN',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            449 => 
            array (
                'id' => 2450,
                'code' => 30,
                'name' => 'SANGALLA',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            450 => 
            array (
                'id' => 2451,
                'code' => 31,
                'name' => 'SANGALA SELATAN',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            451 => 
            array (
                'id' => 2452,
                'code' => 32,
                'name' => 'SANGALLA UTARA',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            452 => 
            array (
                'id' => 2453,
                'code' => 40,
                'name' => 'MAKALE',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            453 => 
            array (
                'id' => 2454,
                'code' => 41,
                'name' => 'MAKALE SELATAN',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            454 => 
            array (
                'id' => 2455,
                'code' => 42,
                'name' => 'MAKALE UTARA',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            455 => 
            array (
                'id' => 2456,
                'code' => 50,
                'name' => 'SALUPUTTI',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            456 => 
            array (
                'id' => 2457,
                'code' => 51,
                'name' => 'BITTUANG',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            457 => 
            array (
                'id' => 2458,
                'code' => 52,
                'name' => 'REMBON',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            458 => 
            array (
                'id' => 2459,
                'code' => 53,
                'name' => 'MASANDA',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            459 => 
            array (
                'id' => 2460,
                'code' => 54,
                'name' => 'MALIMBONG BALEPE',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            460 => 
            array (
                'id' => 2461,
                'code' => 61,
                'name' => 'RANTETAYO',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            461 => 
            array (
                'id' => 2462,
                'code' => 67,
                'name' => 'KURRA',
                'province_code' => 73,
                'regency_code' => 18,
            ),
            462 => 
            array (
                'id' => 2463,
                'code' => 10,
                'name' => 'SABBANG',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            463 => 
            array (
                'id' => 2464,
                'code' => 11,
                'name' => 'SABBANG SELATAN',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            464 => 
            array (
                'id' => 2465,
                'code' => 20,
                'name' => 'BAEBUNTA',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            465 => 
            array (
                'id' => 2466,
                'code' => 21,
                'name' => 'BAEBUNTA SELATAN',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            466 => 
            array (
                'id' => 2467,
                'code' => 30,
                'name' => 'MALANGKE',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            467 => 
            array (
                'id' => 2468,
                'code' => 31,
                'name' => 'MALANGKE BARAT',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            468 => 
            array (
                'id' => 2469,
                'code' => 40,
                'name' => 'SUKAMAJU',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            469 => 
            array (
                'id' => 2470,
                'code' => 41,
                'name' => 'SUKAMAJU SELATAN',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            470 => 
            array (
                'id' => 2471,
                'code' => 50,
                'name' => 'BONE-BONE',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            471 => 
            array (
                'id' => 2472,
                'code' => 51,
                'name' => 'TANA LILI',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            472 => 
            array (
                'id' => 2473,
                'code' => 120,
                'name' => 'MASAMBA',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            473 => 
            array (
                'id' => 2474,
                'code' => 121,
                'name' => 'MAPPEDECENG',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            474 => 
            array (
                'id' => 2475,
                'code' => 122,
                'name' => 'RAMPI',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            475 => 
            array (
                'id' => 2476,
                'code' => 130,
                'name' => 'RONGKONG',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            476 => 
            array (
                'id' => 2477,
                'code' => 131,
                'name' => 'SEKO',
                'province_code' => 73,
                'regency_code' => 22,
            ),
            477 => 
            array (
                'id' => 2478,
                'code' => 10,
                'name' => 'BURAU',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            478 => 
            array (
                'id' => 2479,
                'code' => 20,
                'name' => 'WOTU',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            479 => 
            array (
                'id' => 2480,
                'code' => 30,
                'name' => 'TOMONI',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            480 => 
            array (
                'id' => 2481,
                'code' => 31,
                'name' => 'TOMONI TIMUR',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            481 => 
            array (
                'id' => 2482,
                'code' => 40,
                'name' => 'ANGKONA',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            482 => 
            array (
                'id' => 2483,
                'code' => 50,
                'name' => 'MALILI',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            483 => 
            array (
                'id' => 2484,
                'code' => 60,
                'name' => 'TOWUTI',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            484 => 
            array (
                'id' => 2485,
                'code' => 70,
                'name' => 'NUHA',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            485 => 
            array (
                'id' => 2486,
                'code' => 71,
                'name' => 'WASUPONDA',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            486 => 
            array (
                'id' => 2487,
                'code' => 80,
                'name' => 'MANGKUTANA',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            487 => 
            array (
                'id' => 2488,
                'code' => 81,
                'name' => 'KALAENA',
                'province_code' => 73,
                'regency_code' => 25,
            ),
            488 => 
            array (
                'id' => 2489,
                'code' => 10,
                'name' => 'SOPAI',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            489 => 
            array (
                'id' => 2490,
                'code' => 20,
                'name' => 'KESU',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            490 => 
            array (
                'id' => 2491,
                'code' => 30,
                'name' => 'SANGGALANGI',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            491 => 
            array (
                'id' => 2492,
                'code' => 40,
                'name' => 'BUNTAO',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            492 => 
            array (
                'id' => 2493,
                'code' => 50,
                'name' => 'RANTEBUA',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            493 => 
            array (
                'id' => 2494,
                'code' => 60,
                'name' => 'NANGGALA',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            494 => 
            array (
                'id' => 2495,
                'code' => 70,
                'name' => 'TONDON',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            495 => 
            array (
                'id' => 2496,
                'code' => 80,
                'name' => 'TALLUNGLIPU',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            496 => 
            array (
                'id' => 2497,
                'code' => 90,
                'name' => 'RANTEPAO',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            497 => 
            array (
                'id' => 2498,
                'code' => 100,
                'name' => 'TIKALA',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            498 => 
            array (
                'id' => 2499,
                'code' => 110,
                'name' => 'SESEAN',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            499 => 
            array (
                'id' => 2500,
                'code' => 120,
                'name' => 'BALUSU',
                'province_code' => 73,
                'regency_code' => 26,
            ),
        ));
        DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'code' => 130,
                'name' => 'SA\\\'DAN',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            1 => 
            array (
                'id' => 2502,
                'code' => 140,
                'name' => 'BANGKELEKILA',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            2 => 
            array (
                'id' => 2503,
                'code' => 150,
                'name' => 'SESEAN SULOARA',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            3 => 
            array (
                'id' => 2504,
                'code' => 160,
                'name' => 'KAPALA PITU',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            4 => 
            array (
                'id' => 2505,
                'code' => 170,
                'name' => 'DENDE PIONGAN NAPO',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            5 => 
            array (
                'id' => 2506,
                'code' => 180,
                'name' => 'AWAN RANTE KARUA',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            6 => 
            array (
                'id' => 2507,
                'code' => 190,
                'name' => 'RINDINGALLO',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            7 => 
            array (
                'id' => 2508,
                'code' => 200,
                'name' => 'BUNTU PEPASAN',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            8 => 
            array (
                'id' => 2509,
                'code' => 210,
                'name' => 'BARUPPU',
                'province_code' => 73,
                'regency_code' => 26,
            ),
            9 => 
            array (
                'id' => 2510,
                'code' => 10,
                'name' => 'MARISO',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            10 => 
            array (
                'id' => 2511,
                'code' => 20,
                'name' => 'MAMAJANG',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            11 => 
            array (
                'id' => 2512,
                'code' => 30,
                'name' => 'TAMALATE',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            12 => 
            array (
                'id' => 2513,
                'code' => 31,
                'name' => 'RAPPOCINI',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            13 => 
            array (
                'id' => 2514,
                'code' => 40,
                'name' => 'MAKASSAR',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            14 => 
            array (
                'id' => 2515,
                'code' => 50,
                'name' => 'UJUNG PANDANG',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            15 => 
            array (
                'id' => 2516,
                'code' => 60,
                'name' => 'WAJO',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            16 => 
            array (
                'id' => 2517,
                'code' => 70,
                'name' => 'BONTOALA',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            17 => 
            array (
                'id' => 2518,
                'code' => 80,
                'name' => 'UJUNG TANAH',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            18 => 
            array (
                'id' => 2519,
                'code' => 81,
                'name' => 'KEPULAUAN SANGKARRANG',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            19 => 
            array (
                'id' => 2520,
                'code' => 90,
                'name' => 'TALLO',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            20 => 
            array (
                'id' => 2521,
                'code' => 100,
                'name' => 'PANAKKUKANG',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            21 => 
            array (
                'id' => 2522,
                'code' => 101,
                'name' => 'MANGGALA',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            22 => 
            array (
                'id' => 2523,
                'code' => 110,
                'name' => 'BIRING KANAYA',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            23 => 
            array (
                'id' => 2524,
                'code' => 111,
                'name' => 'TAMALANREA',
                'province_code' => 73,
                'regency_code' => 71,
            ),
            24 => 
            array (
                'id' => 2525,
                'code' => 10,
                'name' => 'BACUKIKI',
                'province_code' => 73,
                'regency_code' => 72,
            ),
            25 => 
            array (
                'id' => 2526,
                'code' => 11,
                'name' => 'BACUKIKI BARAT',
                'province_code' => 73,
                'regency_code' => 72,
            ),
            26 => 
            array (
                'id' => 2527,
                'code' => 20,
                'name' => 'UJUNG',
                'province_code' => 73,
                'regency_code' => 72,
            ),
            27 => 
            array (
                'id' => 2528,
                'code' => 30,
                'name' => 'SOREANG',
                'province_code' => 73,
                'regency_code' => 72,
            ),
            28 => 
            array (
                'id' => 2529,
                'code' => 10,
                'name' => 'WARA SELATAN',
                'province_code' => 73,
                'regency_code' => 73,
            ),
            29 => 
            array (
                'id' => 2530,
                'code' => 11,
                'name' => 'SENDANA',
                'province_code' => 73,
                'regency_code' => 73,
            ),
            30 => 
            array (
                'id' => 2531,
                'code' => 20,
                'name' => 'WARA',
                'province_code' => 73,
                'regency_code' => 73,
            ),
            31 => 
            array (
                'id' => 2532,
                'code' => 21,
                'name' => 'WARA TIMUR',
                'province_code' => 73,
                'regency_code' => 73,
            ),
            32 => 
            array (
                'id' => 2533,
                'code' => 22,
                'name' => 'MUNGKAJANG',
                'province_code' => 73,
                'regency_code' => 73,
            ),
            33 => 
            array (
                'id' => 2534,
                'code' => 30,
                'name' => 'WARA UTARA',
                'province_code' => 73,
                'regency_code' => 73,
            ),
            34 => 
            array (
                'id' => 2535,
                'code' => 31,
                'name' => 'BARA',
                'province_code' => 73,
                'regency_code' => 73,
            ),
            35 => 
            array (
                'id' => 2536,
                'code' => 40,
                'name' => 'TELLUWANUA',
                'province_code' => 73,
                'regency_code' => 73,
            ),
            36 => 
            array (
                'id' => 2537,
                'code' => 41,
                'name' => 'WARA BARAT',
                'province_code' => 73,
                'regency_code' => 73,
            ),
            37 => 
            array (
                'id' => 2538,
                'code' => 10,
                'name' => 'SAWA',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            38 => 
            array (
                'id' => 2539,
                'code' => 11,
                'name' => 'MOTUI',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            39 => 
            array (
                'id' => 2540,
                'code' => 20,
                'name' => 'LEMBO',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            40 => 
            array (
                'id' => 2541,
                'code' => 30,
                'name' => 'LASOLO',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            41 => 
            array (
                'id' => 2542,
                'code' => 31,
                'name' => 'WAWOLESEA',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            42 => 
            array (
                'id' => 2543,
                'code' => 32,
                'name' => 'LASOLO KEPULAUAN',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            43 => 
            array (
                'id' => 2544,
                'code' => 40,
                'name' => 'MOLAWE',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            44 => 
            array (
                'id' => 2545,
                'code' => 50,
                'name' => 'ASERA',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            45 => 
            array (
                'id' => 2546,
                'code' => 51,
                'name' => 'ANDOWIA',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            46 => 
            array (
                'id' => 2547,
                'code' => 52,
                'name' => 'OHEO',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            47 => 
            array (
                'id' => 2548,
                'code' => 60,
                'name' => 'LANGGIKIMA',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            48 => 
            array (
                'id' => 2549,
                'code' => 70,
                'name' => 'WIWIRANO',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            49 => 
            array (
                'id' => 2550,
                'code' => 71,
                'name' => 'LANDAWE',
                'province_code' => 74,
                'regency_code' => 10,
            ),
            50 => 
            array (
                'id' => 2551,
                'code' => 10,
                'name' => 'AERE',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            51 => 
            array (
                'id' => 2552,
                'code' => 20,
                'name' => 'LAMBANDIA',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            52 => 
            array (
                'id' => 2553,
                'code' => 30,
                'name' => 'POLI-POLIA',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            53 => 
            array (
                'id' => 2554,
                'code' => 40,
                'name' => 'DANGIA',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            54 => 
            array (
                'id' => 2555,
                'code' => 50,
                'name' => 'LADONGI',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            55 => 
            array (
                'id' => 2556,
                'code' => 60,
                'name' => 'LOEA',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            56 => 
            array (
                'id' => 2557,
                'code' => 70,
                'name' => 'TIRAWUTA',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            57 => 
            array (
                'id' => 2558,
                'code' => 80,
                'name' => 'LALOLAE',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            58 => 
            array (
                'id' => 2559,
                'code' => 90,
                'name' => 'MOWEWE',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            59 => 
            array (
                'id' => 2560,
                'code' => 100,
                'name' => 'TINONDO',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            60 => 
            array (
                'id' => 2561,
                'code' => 110,
                'name' => 'ULUIWOI',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            61 => 
            array (
                'id' => 2562,
                'code' => 120,
                'name' => 'UEESI',
                'province_code' => 74,
                'regency_code' => 11,
            ),
            62 => 
            array (
                'id' => 2563,
                'code' => 10,
                'name' => 'WAWONII TENGGARA',
                'province_code' => 74,
                'regency_code' => 12,
            ),
            63 => 
            array (
                'id' => 2564,
                'code' => 20,
                'name' => 'WAWONII TIMUR',
                'province_code' => 74,
                'regency_code' => 12,
            ),
            64 => 
            array (
                'id' => 2565,
                'code' => 30,
                'name' => 'WAWONII TIMUR LAUT',
                'province_code' => 74,
                'regency_code' => 12,
            ),
            65 => 
            array (
                'id' => 2566,
                'code' => 40,
                'name' => 'WAWONII UTARA',
                'province_code' => 74,
                'regency_code' => 12,
            ),
            66 => 
            array (
                'id' => 2567,
                'code' => 50,
                'name' => 'WAWONII SELATAN',
                'province_code' => 74,
                'regency_code' => 12,
            ),
            67 => 
            array (
                'id' => 2568,
                'code' => 60,
                'name' => 'WAWONII TENGAH',
                'province_code' => 74,
                'regency_code' => 12,
            ),
            68 => 
            array (
                'id' => 2569,
                'code' => 70,
                'name' => 'WAWONII BARAT',
                'province_code' => 74,
                'regency_code' => 12,
            ),
            69 => 
            array (
                'id' => 2570,
                'code' => 10,
                'name' => 'TIWORO KEPULAUAN',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            70 => 
            array (
                'id' => 2571,
                'code' => 20,
                'name' => 'MAGINTI',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            71 => 
            array (
                'id' => 2572,
                'code' => 30,
                'name' => 'TIWORO TENGAH',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            72 => 
            array (
                'id' => 2573,
                'code' => 40,
                'name' => 'TIWORO SELATAN',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            73 => 
            array (
                'id' => 2574,
                'code' => 50,
                'name' => 'TIWORO UTARA',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            74 => 
            array (
                'id' => 2575,
                'code' => 60,
                'name' => 'LAWA',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            75 => 
            array (
                'id' => 2576,
                'code' => 70,
                'name' => 'SAWERIGADI',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            76 => 
            array (
                'id' => 2577,
                'code' => 80,
                'name' => 'BARANGKA',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            77 => 
            array (
                'id' => 2578,
                'code' => 90,
                'name' => 'WA DAGA',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            78 => 
            array (
                'id' => 2579,
                'code' => 100,
                'name' => 'KUSAMBI',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            79 => 
            array (
                'id' => 2580,
                'code' => 110,
                'name' => 'NAPANO KUSAMBI',
                'province_code' => 74,
                'regency_code' => 13,
            ),
            80 => 
            array (
                'id' => 2581,
                'code' => 10,
                'name' => 'TALAGA RAYA',
                'province_code' => 74,
                'regency_code' => 14,
            ),
            81 => 
            array (
                'id' => 2582,
                'code' => 20,
                'name' => 'MAWASANGKA',
                'province_code' => 74,
                'regency_code' => 14,
            ),
            82 => 
            array (
                'id' => 2583,
                'code' => 30,
                'name' => 'MAWASANGKA TENGAH',
                'province_code' => 74,
                'regency_code' => 14,
            ),
            83 => 
            array (
                'id' => 2584,
                'code' => 40,
                'name' => 'MAWASANGKA TIMUR',
                'province_code' => 74,
                'regency_code' => 14,
            ),
            84 => 
            array (
                'id' => 2585,
                'code' => 50,
                'name' => 'LAKUDO',
                'province_code' => 74,
                'regency_code' => 14,
            ),
            85 => 
            array (
                'id' => 2586,
                'code' => 60,
                'name' => 'GU',
                'province_code' => 74,
                'regency_code' => 14,
            ),
            86 => 
            array (
                'id' => 2587,
                'code' => 70,
                'name' => 'SANGIA WAMBULU',
                'province_code' => 74,
                'regency_code' => 14,
            ),
            87 => 
            array (
                'id' => 2588,
                'code' => 10,
                'name' => 'BATU ATAS',
                'province_code' => 74,
                'regency_code' => 15,
            ),
            88 => 
            array (
                'id' => 2589,
                'code' => 20,
                'name' => 'LAPANDEWA',
                'province_code' => 74,
                'regency_code' => 15,
            ),
            89 => 
            array (
                'id' => 2590,
                'code' => 30,
                'name' => 'SAMPOLAWA',
                'province_code' => 74,
                'regency_code' => 15,
            ),
            90 => 
            array (
                'id' => 2591,
                'code' => 40,
                'name' => 'BATAUGA',
                'province_code' => 74,
                'regency_code' => 15,
            ),
            91 => 
            array (
                'id' => 2592,
                'code' => 50,
                'name' => 'SIOMPU BARAT',
                'province_code' => 74,
                'regency_code' => 15,
            ),
            92 => 
            array (
                'id' => 2593,
                'code' => 60,
                'name' => 'SIOMPU',
                'province_code' => 74,
                'regency_code' => 15,
            ),
            93 => 
            array (
                'id' => 2594,
                'code' => 70,
                'name' => 'KADATUA',
                'province_code' => 74,
                'regency_code' => 15,
            ),
            94 => 
            array (
                'id' => 2595,
                'code' => 10,
                'name' => 'MANDONGA',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            95 => 
            array (
                'id' => 2596,
                'code' => 11,
                'name' => 'BARUGA',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            96 => 
            array (
                'id' => 2597,
                'code' => 12,
                'name' => 'PUUWATU',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            97 => 
            array (
                'id' => 2598,
                'code' => 13,
                'name' => 'KADIA',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            98 => 
            array (
                'id' => 2599,
                'code' => 14,
                'name' => 'WUA-WUA',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            99 => 
            array (
                'id' => 2600,
                'code' => 20,
                'name' => 'POASIA',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            100 => 
            array (
                'id' => 2601,
                'code' => 21,
                'name' => 'ABELI',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            101 => 
            array (
                'id' => 2602,
                'code' => 22,
                'name' => 'KAMBU',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            102 => 
            array (
                'id' => 2603,
                'code' => 23,
                'name' => 'NAMBO',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            103 => 
            array (
                'id' => 2604,
                'code' => 30,
                'name' => 'KENDARI',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            104 => 
            array (
                'id' => 2605,
                'code' => 31,
                'name' => 'KENDARI BARAT',
                'province_code' => 74,
                'regency_code' => 71,
            ),
            105 => 
            array (
                'id' => 2606,
                'code' => 10,
                'name' => 'BETOAMBARI',
                'province_code' => 74,
                'regency_code' => 72,
            ),
            106 => 
            array (
                'id' => 2607,
                'code' => 11,
                'name' => 'MURHUM',
                'province_code' => 74,
                'regency_code' => 72,
            ),
            107 => 
            array (
                'id' => 2608,
                'code' => 12,
                'name' => 'BATUPOARO',
                'province_code' => 74,
                'regency_code' => 72,
            ),
            108 => 
            array (
                'id' => 2609,
                'code' => 20,
                'name' => 'WOLIO',
                'province_code' => 74,
                'regency_code' => 72,
            ),
            109 => 
            array (
                'id' => 2610,
                'code' => 21,
                'name' => 'KOKALUKUNA',
                'province_code' => 74,
                'regency_code' => 72,
            ),
            110 => 
            array (
                'id' => 2611,
                'code' => 30,
                'name' => 'SORAWOLIO',
                'province_code' => 74,
                'regency_code' => 72,
            ),
            111 => 
            array (
                'id' => 2612,
                'code' => 40,
                'name' => 'BUNGI',
                'province_code' => 74,
                'regency_code' => 72,
            ),
            112 => 
            array (
                'id' => 2613,
                'code' => 41,
                'name' => 'LEA-LEA',
                'province_code' => 74,
                'regency_code' => 72,
            ),
            113 => 
            array (
                'id' => 2614,
                'code' => 10,
                'name' => 'KOTA BARAT',
                'province_code' => 75,
                'regency_code' => 71,
            ),
            114 => 
            array (
                'id' => 2615,
                'code' => 11,
                'name' => 'DUNGINGI',
                'province_code' => 75,
                'regency_code' => 71,
            ),
            115 => 
            array (
                'id' => 2616,
                'code' => 20,
                'name' => 'KOTA SELATAN',
                'province_code' => 75,
                'regency_code' => 71,
            ),
            116 => 
            array (
                'id' => 2617,
                'code' => 21,
                'name' => 'KOTA TIMUR',
                'province_code' => 75,
                'regency_code' => 71,
            ),
            117 => 
            array (
                'id' => 2618,
                'code' => 22,
                'name' => 'HULONTHALANGI',
                'province_code' => 75,
                'regency_code' => 71,
            ),
            118 => 
            array (
                'id' => 2619,
                'code' => 23,
                'name' => 'DUMBO RAYA',
                'province_code' => 75,
                'regency_code' => 71,
            ),
            119 => 
            array (
                'id' => 2620,
                'code' => 30,
                'name' => 'KOTA UTARA',
                'province_code' => 75,
                'regency_code' => 71,
            ),
            120 => 
            array (
                'id' => 2621,
                'code' => 31,
                'name' => 'KOTA TENGAH',
                'province_code' => 75,
                'regency_code' => 71,
            ),
            121 => 
            array (
                'id' => 2622,
                'code' => 32,
                'name' => 'SIPATANA',
                'province_code' => 75,
                'regency_code' => 71,
            ),
            122 => 
            array (
                'id' => 2623,
                'code' => 10,
                'name' => 'NUSANIWE',
                'province_code' => 81,
                'regency_code' => 71,
            ),
            123 => 
            array (
                'id' => 2624,
                'code' => 20,
                'name' => 'SIRIMAU',
                'province_code' => 81,
                'regency_code' => 71,
            ),
            124 => 
            array (
                'id' => 2625,
                'code' => 21,
                'name' => 'LEITIMUR SELATAN',
                'province_code' => 81,
                'regency_code' => 71,
            ),
            125 => 
            array (
                'id' => 2626,
                'code' => 30,
                'name' => 'TELUK AMBON BAGUALA',
                'province_code' => 81,
                'regency_code' => 71,
            ),
            126 => 
            array (
                'id' => 2627,
                'code' => 31,
                'name' => 'TELUK AMBON',
                'province_code' => 81,
                'regency_code' => 71,
            ),
            127 => 
            array (
                'id' => 2628,
                'code' => 10,
                'name' => 'PP. KUR',
                'province_code' => 81,
                'regency_code' => 72,
            ),
            128 => 
            array (
                'id' => 2629,
                'code' => 11,
                'name' => 'KUR SELATAN',
                'province_code' => 81,
                'regency_code' => 72,
            ),
            129 => 
            array (
                'id' => 2630,
                'code' => 20,
                'name' => 'TAYANDO TAM',
                'province_code' => 81,
                'regency_code' => 72,
            ),
            130 => 
            array (
                'id' => 2631,
                'code' => 30,
                'name' => 'PULAU DULLAH UTARA',
                'province_code' => 81,
                'regency_code' => 72,
            ),
            131 => 
            array (
                'id' => 2632,
                'code' => 40,
                'name' => 'PULAU DULLAH SELATAN',
                'province_code' => 81,
                'regency_code' => 72,
            ),
            132 => 
            array (
                'id' => 2633,
                'code' => 10,
                'name' => 'PULAU TERNATE',
                'province_code' => 82,
                'regency_code' => 71,
            ),
            133 => 
            array (
                'id' => 2634,
                'code' => 11,
                'name' => 'MOTI',
                'province_code' => 82,
                'regency_code' => 71,
            ),
            134 => 
            array (
                'id' => 2635,
                'code' => 12,
                'name' => 'PULAU BATANG DUA',
                'province_code' => 82,
                'regency_code' => 71,
            ),
            135 => 
            array (
                'id' => 2636,
                'code' => 13,
                'name' => 'PULAU HIRI',
                'province_code' => 82,
                'regency_code' => 71,
            ),
            136 => 
            array (
                'id' => 2637,
                'code' => 14,
                'name' => 'TERNATE BARAT',
                'province_code' => 82,
                'regency_code' => 71,
            ),
            137 => 
            array (
                'id' => 2638,
                'code' => 20,
                'name' => 'TERNATE SELATAN',
                'province_code' => 82,
                'regency_code' => 71,
            ),
            138 => 
            array (
                'id' => 2639,
                'code' => 21,
                'name' => 'TERNATE TENGAH',
                'province_code' => 82,
                'regency_code' => 71,
            ),
            139 => 
            array (
                'id' => 2640,
                'code' => 30,
                'name' => 'TERNATE UTARA',
                'province_code' => 82,
                'regency_code' => 71,
            ),
            140 => 
            array (
                'id' => 2641,
                'code' => 10,
                'name' => 'TIDORE SELATAN',
                'province_code' => 82,
                'regency_code' => 72,
            ),
            141 => 
            array (
                'id' => 2642,
                'code' => 20,
                'name' => 'TIDORE UTARA',
                'province_code' => 82,
                'regency_code' => 72,
            ),
            142 => 
            array (
                'id' => 2643,
                'code' => 30,
                'name' => 'TIDORE',
                'province_code' => 82,
                'regency_code' => 72,
            ),
            143 => 
            array (
                'id' => 2644,
                'code' => 31,
                'name' => 'TIDORE TIMUR',
                'province_code' => 82,
                'regency_code' => 72,
            ),
            144 => 
            array (
                'id' => 2645,
                'code' => 40,
                'name' => 'OBA',
                'province_code' => 82,
                'regency_code' => 72,
            ),
            145 => 
            array (
                'id' => 2646,
                'code' => 41,
                'name' => 'OBA SELATAN',
                'province_code' => 82,
                'regency_code' => 72,
            ),
            146 => 
            array (
                'id' => 2647,
                'code' => 50,
                'name' => 'OBA UTARA',
                'province_code' => 82,
                'regency_code' => 72,
            ),
            147 => 
            array (
                'id' => 2648,
                'code' => 51,
                'name' => 'OBA TENGAH',
                'province_code' => 82,
                'regency_code' => 72,
            ),
            148 => 
            array (
                'id' => 2649,
                'code' => 10,
                'name' => 'AITINYO BARAT/ATHABU',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            149 => 
            array (
                'id' => 2650,
                'code' => 11,
                'name' => 'AYAMARU SELATAN JAYA',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            150 => 
            array (
                'id' => 2651,
                'code' => 20,
                'name' => 'AITINYO',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            151 => 
            array (
                'id' => 2652,
                'code' => 21,
                'name' => 'AITINYO TENGAH',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            152 => 
            array (
                'id' => 2653,
                'code' => 30,
                'name' => 'AIFAT SELATAN',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            153 => 
            array (
                'id' => 2654,
                'code' => 31,
                'name' => 'AIFAT TIMUR SELATAN',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            154 => 
            array (
                'id' => 2655,
                'code' => 40,
                'name' => 'AIFAT',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            155 => 
            array (
                'id' => 2656,
                'code' => 50,
                'name' => 'AITINYO UTARA',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            156 => 
            array (
                'id' => 2657,
                'code' => 51,
                'name' => 'AITINYO RAYA',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            157 => 
            array (
                'id' => 2658,
                'code' => 60,
                'name' => 'AYAMARU TIMUR',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            158 => 
            array (
                'id' => 2659,
                'code' => 61,
                'name' => 'AYAMARU TIMUR SELATAN',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            159 => 
            array (
                'id' => 2660,
                'code' => 70,
                'name' => 'AYAMARU',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            160 => 
            array (
                'id' => 2661,
                'code' => 71,
                'name' => 'AYAMARU SELATAN',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            161 => 
            array (
                'id' => 2662,
                'code' => 72,
                'name' => 'AYAMARU JAYA',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            162 => 
            array (
                'id' => 2663,
                'code' => 73,
                'name' => 'AYAMARU TENGAH',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            163 => 
            array (
                'id' => 2664,
                'code' => 74,
                'name' => 'AYAMARU BARAT',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            164 => 
            array (
                'id' => 2665,
                'code' => 80,
                'name' => 'AYAMARU UTARA',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            165 => 
            array (
                'id' => 2666,
                'code' => 81,
                'name' => 'AYAMARU UTARA TIMUR',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            166 => 
            array (
                'id' => 2667,
                'code' => 90,
                'name' => 'MARE',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            167 => 
            array (
                'id' => 2668,
                'code' => 91,
                'name' => 'MARE SELATAN',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            168 => 
            array (
                'id' => 2669,
                'code' => 100,
                'name' => 'AIFAT UTARA',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            169 => 
            array (
                'id' => 2670,
                'code' => 110,
                'name' => 'AIFAT TIMUR',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            170 => 
            array (
                'id' => 2671,
                'code' => 111,
                'name' => 'AIFAT TIMUR TENGAH',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            171 => 
            array (
                'id' => 2672,
                'code' => 112,
                'name' => 'AIFAT TIMUR JAUH',
                'province_code' => 91,
                'regency_code' => 10,
            ),
            172 => 
            array (
                'id' => 2673,
                'code' => 10,
                'name' => 'TAHOTA',
                'province_code' => 91,
                'regency_code' => 11,
            ),
            173 => 
            array (
                'id' => 2674,
                'code' => 20,
                'name' => 'DATARAN ISIM',
                'province_code' => 91,
                'regency_code' => 11,
            ),
            174 => 
            array (
                'id' => 2675,
                'code' => 30,
                'name' => 'NENEY',
                'province_code' => 91,
                'regency_code' => 11,
            ),
            175 => 
            array (
                'id' => 2676,
                'code' => 40,
                'name' => 'MOMI WAREN',
                'province_code' => 91,
                'regency_code' => 11,
            ),
            176 => 
            array (
                'id' => 2677,
                'code' => 50,
                'name' => 'RANSIKI',
                'province_code' => 91,
                'regency_code' => 11,
            ),
            177 => 
            array (
                'id' => 2678,
                'code' => 60,
                'name' => 'ORANSBARI',
                'province_code' => 91,
                'regency_code' => 11,
            ),
            178 => 
            array (
                'id' => 2679,
                'code' => 10,
                'name' => 'DIDOHU',
                'province_code' => 91,
                'regency_code' => 12,
            ),
            179 => 
            array (
                'id' => 2680,
                'code' => 20,
                'name' => 'SURUREY',
                'province_code' => 91,
                'regency_code' => 12,
            ),
            180 => 
            array (
                'id' => 2681,
                'code' => 30,
                'name' => 'ANGGI GIDA',
                'province_code' => 91,
                'regency_code' => 12,
            ),
            181 => 
            array (
                'id' => 2682,
                'code' => 40,
                'name' => 'MEMBEY',
                'province_code' => 91,
                'regency_code' => 12,
            ),
            182 => 
            array (
                'id' => 2683,
                'code' => 50,
                'name' => 'ANGGI',
                'province_code' => 91,
                'regency_code' => 12,
            ),
            183 => 
            array (
                'id' => 2684,
                'code' => 60,
                'name' => 'TAIGE',
                'province_code' => 91,
                'regency_code' => 12,
            ),
            184 => 
            array (
                'id' => 2685,
                'code' => 70,
                'name' => 'HINGK',
                'province_code' => 91,
                'regency_code' => 12,
            ),
            185 => 
            array (
                'id' => 2686,
                'code' => 80,
                'name' => 'MINYAMBOUW',
                'province_code' => 91,
                'regency_code' => 12,
            ),
            186 => 
            array (
                'id' => 2687,
                'code' => 90,
                'name' => 'CATUBOUW',
                'province_code' => 91,
                'regency_code' => 12,
            ),
            187 => 
            array (
                'id' => 2688,
                'code' => 100,
                'name' => 'TESTEGA',
                'province_code' => 91,
                'regency_code' => 12,
            ),
            188 => 
            array (
                'id' => 2689,
                'code' => 10,
                'name' => 'SORONG BARAT',
                'province_code' => 91,
                'regency_code' => 71,
            ),
            189 => 
            array (
                'id' => 2690,
                'code' => 11,
                'name' => 'SORONG KEPULAUAN',
                'province_code' => 91,
                'regency_code' => 71,
            ),
            190 => 
            array (
                'id' => 2691,
                'code' => 12,
                'name' => 'MALADUM MES',
                'province_code' => 91,
                'regency_code' => 71,
            ),
            191 => 
            array (
                'id' => 2692,
                'code' => 20,
                'name' => 'SORONG TIMUR',
                'province_code' => 91,
                'regency_code' => 71,
            ),
            192 => 
            array (
                'id' => 2693,
                'code' => 21,
                'name' => 'SORONG UTARA',
                'province_code' => 91,
                'regency_code' => 71,
            ),
            193 => 
            array (
                'id' => 2694,
                'code' => 22,
                'name' => 'SORONG',
                'province_code' => 91,
                'regency_code' => 71,
            ),
            194 => 
            array (
                'id' => 2695,
                'code' => 23,
                'name' => 'SORONG MANOI',
                'province_code' => 91,
                'regency_code' => 71,
            ),
            195 => 
            array (
                'id' => 2696,
                'code' => 24,
                'name' => 'KLAURUNG',
                'province_code' => 91,
                'regency_code' => 71,
            ),
            196 => 
            array (
                'id' => 2697,
                'code' => 25,
                'name' => 'MALAIMSIMSA',
                'province_code' => 91,
                'regency_code' => 71,
            ),
            197 => 
            array (
                'id' => 2698,
                'code' => 26,
                'name' => 'SORONG KOTA',
                'province_code' => 91,
                'regency_code' => 71,
            ),
            198 => 
            array (
                'id' => 2699,
                'code' => 30,
                'name' => 'PANIAI TIMUR',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            199 => 
            array (
                'id' => 2700,
                'code' => 31,
                'name' => 'YATAMO',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            200 => 
            array (
                'id' => 2701,
                'code' => 32,
                'name' => 'KEBO',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            201 => 
            array (
                'id' => 2702,
                'code' => 33,
                'name' => 'PUGO DAGI',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            202 => 
            array (
                'id' => 2703,
                'code' => 34,
                'name' => 'WEGE MUKA',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            203 => 
            array (
                'id' => 2704,
                'code' => 35,
                'name' => 'WEGEE BINO',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            204 => 
            array (
                'id' => 2705,
                'code' => 36,
                'name' => 'YAGAI',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            205 => 
            array (
                'id' => 2706,
                'code' => 37,
                'name' => 'DEIYAI MIYO',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            206 => 
            array (
                'id' => 2707,
                'code' => 40,
                'name' => 'BIBIDA',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            207 => 
            array (
                'id' => 2708,
                'code' => 41,
                'name' => 'DUMADAMA',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            208 => 
            array (
                'id' => 2709,
                'code' => 42,
                'name' => 'DOGOMO',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            209 => 
            array (
                'id' => 2710,
                'code' => 70,
                'name' => 'ARADIDE',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            210 => 
            array (
                'id' => 2711,
                'code' => 71,
                'name' => 'EKADIDE',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            211 => 
            array (
                'id' => 2712,
                'code' => 72,
                'name' => 'AWEIDA',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            212 => 
            array (
                'id' => 2713,
                'code' => 73,
                'name' => 'FAJAR TIMUR',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            213 => 
            array (
                'id' => 2714,
                'code' => 74,
                'name' => 'TOPIYAI',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            214 => 
            array (
                'id' => 2715,
                'code' => 80,
                'name' => 'PANIAI BARAT',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            215 => 
            array (
                'id' => 2716,
                'code' => 81,
                'name' => 'SIRIWO',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            216 => 
            array (
                'id' => 2717,
                'code' => 82,
                'name' => 'MUYE',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            217 => 
            array (
                'id' => 2718,
                'code' => 83,
                'name' => 'NAKAMA',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            218 => 
            array (
                'id' => 2719,
                'code' => 84,
                'name' => 'TELUK DEYA',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            219 => 
            array (
                'id' => 2720,
                'code' => 90,
                'name' => 'BOGOBAIDA',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            220 => 
            array (
                'id' => 2721,
                'code' => 91,
                'name' => 'YOUTADI',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            221 => 
            array (
                'id' => 2722,
                'code' => 92,
                'name' => 'BAYA BIRU',
                'province_code' => 94,
                'regency_code' => 10,
            ),
            222 => 
            array (
                'id' => 2723,
                'code' => 40,
                'name' => 'FAWI',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            223 => 
            array (
                'id' => 2724,
                'code' => 41,
                'name' => 'DAGAI',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            224 => 
            array (
                'id' => 2725,
                'code' => 42,
                'name' => 'KIYAGE',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            225 => 
            array (
                'id' => 2726,
                'code' => 50,
                'name' => 'MULIA',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            226 => 
            array (
                'id' => 2727,
                'code' => 53,
                'name' => 'YAMBI',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            227 => 
            array (
                'id' => 2728,
                'code' => 54,
                'name' => 'ILAMBURAWI',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            228 => 
            array (
                'id' => 2729,
                'code' => 55,
                'name' => 'MUARA',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            229 => 
            array (
                'id' => 2730,
                'code' => 56,
                'name' => 'PAGALEME',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            230 => 
            array (
                'id' => 2731,
                'code' => 57,
                'name' => 'GURAGE',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            231 => 
            array (
                'id' => 2732,
                'code' => 58,
                'name' => 'IRIMULI',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            232 => 
            array (
                'id' => 2733,
                'code' => 60,
                'name' => 'ILU',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            233 => 
            array (
                'id' => 2734,
                'code' => 61,
                'name' => 'TORERE',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            234 => 
            array (
                'id' => 2735,
                'code' => 63,
                'name' => 'YAMONERI',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            235 => 
            array (
                'id' => 2736,
                'code' => 64,
                'name' => 'WAEGI',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            236 => 
            array (
                'id' => 2737,
                'code' => 65,
                'name' => 'NUME',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            237 => 
            array (
                'id' => 2738,
                'code' => 66,
                'name' => 'NIOGA',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            238 => 
            array (
                'id' => 2739,
                'code' => 67,
                'name' => 'GUBUME',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            239 => 
            array (
                'id' => 2740,
                'code' => 68,
                'name' => 'TAGANOMBAK',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            240 => 
            array (
                'id' => 2741,
                'code' => 70,
                'name' => 'TINGGINAMBUT',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            241 => 
            array (
                'id' => 2742,
                'code' => 71,
                'name' => 'KALOME',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            242 => 
            array (
                'id' => 2743,
                'code' => 72,
                'name' => 'WANWI',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            243 => 
            array (
                'id' => 2744,
                'code' => 80,
                'name' => 'MEWOLUK',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            244 => 
            array (
                'id' => 2745,
                'code' => 81,
                'name' => 'LUMO',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            245 => 
            array (
                'id' => 2746,
                'code' => 82,
                'name' => 'MOLANIKIME',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            246 => 
            array (
                'id' => 2747,
                'code' => 90,
                'name' => 'YAMO',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            247 => 
            array (
                'id' => 2748,
                'code' => 91,
                'name' => 'DOKOME',
                'province_code' => 94,
                'regency_code' => 11,
            ),
            248 => 
            array (
                'id' => 2749,
                'code' => 10,
                'name' => 'MIMIKA BARAT',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            249 => 
            array (
                'id' => 2750,
                'code' => 11,
                'name' => 'MIMIKA BARAT JAUH',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            250 => 
            array (
                'id' => 2751,
                'code' => 12,
                'name' => 'MIMIKA BARAT TENGAH',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            251 => 
            array (
                'id' => 2752,
                'code' => 13,
                'name' => 'AMAR',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            252 => 
            array (
                'id' => 2753,
                'code' => 20,
                'name' => 'MIMIKA TIMUR',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            253 => 
            array (
                'id' => 2754,
                'code' => 21,
                'name' => 'MIMIKA TENGAH',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            254 => 
            array (
                'id' => 2755,
                'code' => 22,
                'name' => 'MIMIKA TIMUR JAUH',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            255 => 
            array (
                'id' => 2756,
                'code' => 30,
                'name' => 'MIMIKA BARU',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            256 => 
            array (
                'id' => 2757,
                'code' => 31,
                'name' => 'KUALA KENCANA',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            257 => 
            array (
                'id' => 2758,
                'code' => 32,
                'name' => 'TEMBAGAPURA',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            258 => 
            array (
                'id' => 2759,
                'code' => 33,
                'name' => 'WANIA',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            259 => 
            array (
                'id' => 2760,
                'code' => 34,
                'name' => 'IWAKA',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            260 => 
            array (
                'id' => 2761,
                'code' => 35,
                'name' => 'KWAMKI NARAMA',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            261 => 
            array (
                'id' => 2762,
                'code' => 40,
                'name' => 'AGIMUGA',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            262 => 
            array (
                'id' => 2763,
                'code' => 41,
                'name' => 'JILA',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            263 => 
            array (
                'id' => 2764,
                'code' => 42,
                'name' => 'JITA',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            264 => 
            array (
                'id' => 2765,
                'code' => 43,
                'name' => 'ALAMA',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            265 => 
            array (
                'id' => 2766,
                'code' => 44,
                'name' => 'HOYA',
                'province_code' => 94,
                'regency_code' => 12,
            ),
            266 => 
            array (
                'id' => 2767,
                'code' => 10,
                'name' => 'JAIR',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            267 => 
            array (
                'id' => 2768,
                'code' => 11,
                'name' => 'SUBUR',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            268 => 
            array (
                'id' => 2769,
                'code' => 13,
                'name' => 'KIA',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            269 => 
            array (
                'id' => 2770,
                'code' => 20,
                'name' => 'MINDIPTANA',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            270 => 
            array (
                'id' => 2771,
                'code' => 21,
                'name' => 'INIYANDIT',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            271 => 
            array (
                'id' => 2772,
                'code' => 22,
                'name' => 'KOMBUT',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            272 => 
            array (
                'id' => 2773,
                'code' => 23,
                'name' => 'SESNUK',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            273 => 
            array (
                'id' => 2774,
                'code' => 30,
                'name' => 'MANDOBO',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            274 => 
            array (
                'id' => 2775,
                'code' => 31,
                'name' => 'FOFI',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            275 => 
            array (
                'id' => 2776,
                'code' => 32,
                'name' => 'ARIMOP',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            276 => 
            array (
                'id' => 2777,
                'code' => 40,
                'name' => 'KOUH',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            277 => 
            array (
                'id' => 2778,
                'code' => 41,
                'name' => 'BOMAKIA',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            278 => 
            array (
                'id' => 2779,
                'code' => 42,
                'name' => 'FIRIWAGE',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            279 => 
            array (
                'id' => 2780,
                'code' => 43,
                'name' => 'MANGGELUM',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            280 => 
            array (
                'id' => 2781,
                'code' => 44,
                'name' => 'YANIRUMA',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            281 => 
            array (
                'id' => 2782,
                'code' => 45,
                'name' => 'KAWAGIT',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            282 => 
            array (
                'id' => 2783,
                'code' => 46,
                'name' => 'KOMBAY',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            283 => 
            array (
                'id' => 2784,
                'code' => 50,
                'name' => 'WAROPKO',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            284 => 
            array (
                'id' => 2785,
                'code' => 51,
                'name' => 'AMBATKWI',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            285 => 
            array (
                'id' => 2786,
                'code' => 52,
                'name' => 'NINATI',
                'province_code' => 94,
                'regency_code' => 13,
            ),
            286 => 
            array (
                'id' => 2787,
                'code' => 10,
                'name' => 'NAMBIOMAN BAPAI',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            287 => 
            array (
                'id' => 2788,
                'code' => 11,
                'name' => 'MINYAMUR',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            288 => 
            array (
                'id' => 2789,
                'code' => 20,
                'name' => 'EDERA',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            289 => 
            array (
                'id' => 2790,
                'code' => 21,
                'name' => 'VENAHA',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            290 => 
            array (
                'id' => 2791,
                'code' => 22,
                'name' => 'SYAHCAME',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            291 => 
            array (
                'id' => 2792,
                'code' => 23,
                'name' => 'BAMGI',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            292 => 
            array (
                'id' => 2793,
                'code' => 24,
                'name' => 'YAKOMI',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            293 => 
            array (
                'id' => 2794,
                'code' => 30,
                'name' => 'OBAA',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            294 => 
            array (
                'id' => 2795,
                'code' => 31,
                'name' => 'PASSUE',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            295 => 
            array (
                'id' => 2796,
                'code' => 40,
                'name' => 'HAJU',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            296 => 
            array (
                'id' => 2797,
                'code' => 50,
                'name' => 'ASSUE',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            297 => 
            array (
                'id' => 2798,
                'code' => 60,
                'name' => 'CITAKMITAK',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            298 => 
            array (
                'id' => 2799,
                'code' => 61,
                'name' => 'KAIBAR',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            299 => 
            array (
                'id' => 2800,
                'code' => 62,
                'name' => 'PASSUE BAWAH',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            300 => 
            array (
                'id' => 2801,
                'code' => 63,
                'name' => 'TI-ZAIN',
                'province_code' => 94,
                'regency_code' => 14,
            ),
            301 => 
            array (
                'id' => 2802,
                'code' => 10,
                'name' => 'PANTAI KASUARI',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            302 => 
            array (
                'id' => 2803,
                'code' => 11,
                'name' => 'KOPAY',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            303 => 
            array (
                'id' => 2804,
                'code' => 12,
                'name' => 'DER KOUMUR',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            304 => 
            array (
                'id' => 2805,
                'code' => 13,
                'name' => 'SAFAN',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            305 => 
            array (
                'id' => 2806,
                'code' => 14,
                'name' => 'AWYU',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            306 => 
            array (
                'id' => 2807,
                'code' => 20,
                'name' => 'FAYIT',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            307 => 
            array (
                'id' => 2808,
                'code' => 21,
                'name' => 'ASWI',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            308 => 
            array (
                'id' => 2809,
                'code' => 30,
                'name' => 'ATSY',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            309 => 
            array (
                'id' => 2810,
                'code' => 31,
                'name' => 'SIRETS',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            310 => 
            array (
                'id' => 2811,
                'code' => 32,
                'name' => 'AYIP',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            311 => 
            array (
                'id' => 2812,
                'code' => 33,
                'name' => 'BECTBAMU',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            312 => 
            array (
                'id' => 2813,
                'code' => 40,
                'name' => 'SUATOR',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            313 => 
            array (
                'id' => 2814,
                'code' => 41,
                'name' => 'KOLF BRAZA',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            314 => 
            array (
                'id' => 2815,
                'code' => 42,
                'name' => 'JOUTU',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            315 => 
            array (
                'id' => 2816,
                'code' => 43,
                'name' => 'KOROWAY BULUANOP',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            316 => 
            array (
                'id' => 2817,
                'code' => 50,
                'name' => 'AKAT',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            317 => 
            array (
                'id' => 2818,
                'code' => 51,
                'name' => 'JETSY',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            318 => 
            array (
                'id' => 2819,
                'code' => 60,
                'name' => 'AGATS',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            319 => 
            array (
                'id' => 2820,
                'code' => 70,
                'name' => 'SAWA ERMA',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            320 => 
            array (
                'id' => 2821,
                'code' => 71,
                'name' => 'SURU-SURU',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            321 => 
            array (
                'id' => 2822,
                'code' => 72,
                'name' => 'UNIR SIRAU',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            322 => 
            array (
                'id' => 2823,
                'code' => 73,
                'name' => 'JOERAT',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            323 => 
            array (
                'id' => 2824,
                'code' => 74,
                'name' => 'PULAU TIGA',
                'province_code' => 94,
                'regency_code' => 15,
            ),
            324 => 
            array (
                'id' => 2825,
                'code' => 10,
                'name' => 'KURIMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            325 => 
            array (
                'id' => 2826,
                'code' => 11,
                'name' => 'MUSAIK',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            326 => 
            array (
                'id' => 2827,
                'code' => 13,
                'name' => 'DEKAI',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            327 => 
            array (
                'id' => 2828,
                'code' => 14,
                'name' => 'OBIO',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            328 => 
            array (
                'id' => 2829,
                'code' => 15,
                'name' => 'PASEMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            329 => 
            array (
                'id' => 2830,
                'code' => 16,
                'name' => 'AMUMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            330 => 
            array (
                'id' => 2831,
                'code' => 17,
                'name' => 'SURU-SURU',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            331 => 
            array (
                'id' => 2832,
                'code' => 18,
                'name' => 'WUSAMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            332 => 
            array (
                'id' => 2833,
                'code' => 19,
                'name' => 'SILIMO',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            333 => 
            array (
                'id' => 2834,
                'code' => 20,
                'name' => 'NINIA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            334 => 
            array (
                'id' => 2835,
                'code' => 21,
                'name' => 'HOLUWON',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            335 => 
            array (
                'id' => 2836,
                'code' => 22,
                'name' => 'LOLAT',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            336 => 
            array (
                'id' => 2837,
                'code' => 23,
                'name' => 'LANGDA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            337 => 
            array (
                'id' => 2838,
                'code' => 24,
                'name' => 'BOMELA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            338 => 
            array (
                'id' => 2839,
                'code' => 25,
                'name' => 'SUNTAMON',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            339 => 
            array (
                'id' => 2840,
                'code' => 26,
                'name' => 'SOBAHAM',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            340 => 
            array (
                'id' => 2841,
                'code' => 27,
                'name' => 'KORUPUN',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            341 => 
            array (
                'id' => 2842,
                'code' => 28,
                'name' => 'SELA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            342 => 
            array (
                'id' => 2843,
                'code' => 29,
                'name' => 'KWELAMDUA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            343 => 
            array (
                'id' => 2844,
                'code' => 30,
                'name' => 'ANGGRUK',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            344 => 
            array (
                'id' => 2845,
                'code' => 31,
                'name' => 'PANGGEMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            345 => 
            array (
                'id' => 2846,
                'code' => 32,
                'name' => 'WALMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            346 => 
            array (
                'id' => 2847,
                'code' => 33,
                'name' => 'KOSAREK',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            347 => 
            array (
                'id' => 2848,
                'code' => 34,
                'name' => 'UBAHAK',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            348 => 
            array (
                'id' => 2849,
                'code' => 35,
                'name' => 'NALCA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            349 => 
            array (
                'id' => 2850,
                'code' => 36,
                'name' => 'PULDAMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            350 => 
            array (
                'id' => 2851,
                'code' => 37,
                'name' => 'NIPSAN',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            351 => 
            array (
                'id' => 2852,
                'code' => 41,
                'name' => 'SAMENAGE',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            352 => 
            array (
                'id' => 2853,
                'code' => 42,
                'name' => 'TANGMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            353 => 
            array (
                'id' => 2854,
                'code' => 43,
                'name' => 'SOBA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            354 => 
            array (
                'id' => 2855,
                'code' => 44,
                'name' => 'MUGI',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            355 => 
            array (
                'id' => 2856,
                'code' => 45,
                'name' => 'YOGOSEM',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            356 => 
            array (
                'id' => 2857,
                'code' => 46,
                'name' => 'KAYO',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            357 => 
            array (
                'id' => 2858,
                'code' => 47,
                'name' => 'SUMO',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            358 => 
            array (
                'id' => 2859,
                'code' => 48,
                'name' => 'HOGIO',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            359 => 
            array (
                'id' => 2860,
                'code' => 49,
                'name' => 'UKHA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            360 => 
            array (
                'id' => 2861,
                'code' => 51,
                'name' => 'WERIMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            361 => 
            array (
                'id' => 2862,
                'code' => 52,
                'name' => 'SOLOIKMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            362 => 
            array (
                'id' => 2863,
                'code' => 53,
                'name' => 'SERADALA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            363 => 
            array (
                'id' => 2864,
                'code' => 54,
                'name' => 'KABIANGGAMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            364 => 
            array (
                'id' => 2865,
                'code' => 55,
                'name' => 'KWIKMA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            365 => 
            array (
                'id' => 2866,
                'code' => 56,
                'name' => 'HILIPUK',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            366 => 
            array (
                'id' => 2867,
                'code' => 57,
                'name' => 'YAHULIAMBUT',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            367 => 
            array (
                'id' => 2868,
                'code' => 58,
                'name' => 'HEREAPINI',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            368 => 
            array (
                'id' => 2869,
                'code' => 59,
                'name' => 'UBALIHI',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            369 => 
            array (
                'id' => 2870,
                'code' => 61,
                'name' => 'TALAMBO',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            370 => 
            array (
                'id' => 2871,
                'code' => 62,
                'name' => 'PRONGGOLI',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            371 => 
            array (
                'id' => 2872,
                'code' => 63,
                'name' => 'ENDOMEN',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            372 => 
            array (
                'id' => 2873,
                'code' => 65,
                'name' => 'KONA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            373 => 
            array (
                'id' => 2874,
                'code' => 66,
                'name' => 'DURAM',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            374 => 
            array (
                'id' => 2875,
                'code' => 67,
                'name' => 'DIRWEMNA',
                'province_code' => 94,
                'regency_code' => 16,
            ),
            375 => 
            array (
                'id' => 2876,
                'code' => 10,
                'name' => 'IWUR',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            376 => 
            array (
                'id' => 2877,
                'code' => 11,
                'name' => 'KAWOR',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            377 => 
            array (
                'id' => 2878,
                'code' => 12,
                'name' => 'TARUP',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            378 => 
            array (
                'id' => 2879,
                'code' => 13,
                'name' => 'AWINBON',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            379 => 
            array (
                'id' => 2880,
                'code' => 20,
                'name' => 'OKSIBIL',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            380 => 
            array (
                'id' => 2881,
                'code' => 21,
                'name' => 'PEPERA',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            381 => 
            array (
                'id' => 2882,
                'code' => 22,
                'name' => 'ALEMSOM',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            382 => 
            array (
                'id' => 2883,
                'code' => 23,
                'name' => 'SERAMBAKON',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            383 => 
            array (
                'id' => 2884,
                'code' => 24,
                'name' => 'KOLOMDOL',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            384 => 
            array (
                'id' => 2885,
                'code' => 25,
                'name' => 'OKSOP',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            385 => 
            array (
                'id' => 2886,
                'code' => 26,
                'name' => 'OK BAPE',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            386 => 
            array (
                'id' => 2887,
                'code' => 27,
                'name' => 'OK AON',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            387 => 
            array (
                'id' => 2888,
                'code' => 30,
                'name' => 'BORME',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            388 => 
            array (
                'id' => 2889,
                'code' => 31,
                'name' => 'BIME',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            389 => 
            array (
                'id' => 2890,
                'code' => 32,
                'name' => 'EPUMEK',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            390 => 
            array (
                'id' => 2891,
                'code' => 33,
                'name' => 'WEIME',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            391 => 
            array (
                'id' => 2892,
                'code' => 34,
                'name' => 'PAMEK',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            392 => 
            array (
                'id' => 2893,
                'code' => 35,
                'name' => 'NONGME',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            393 => 
            array (
                'id' => 2894,
                'code' => 36,
                'name' => 'BATANI',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            394 => 
            array (
                'id' => 2895,
                'code' => 40,
                'name' => 'OKBI',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            395 => 
            array (
                'id' => 2896,
                'code' => 41,
                'name' => 'ABOY',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            396 => 
            array (
                'id' => 2897,
                'code' => 42,
                'name' => 'OKBAB',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            397 => 
            array (
                'id' => 2898,
                'code' => 43,
                'name' => 'TEIRAPLU',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            398 => 
            array (
                'id' => 2899,
                'code' => 44,
                'name' => 'YEFTA',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            399 => 
            array (
                'id' => 2900,
                'code' => 50,
                'name' => 'KIWIROK',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            400 => 
            array (
                'id' => 2901,
                'code' => 51,
                'name' => 'KIWIROK TIMUR',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            401 => 
            array (
                'id' => 2902,
                'code' => 52,
                'name' => 'OKSEBANG',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            402 => 
            array (
                'id' => 2903,
                'code' => 53,
                'name' => 'OKHIKA',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            403 => 
            array (
                'id' => 2904,
                'code' => 54,
                'name' => 'OKLIP',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            404 => 
            array (
                'id' => 2905,
                'code' => 55,
                'name' => 'OKSAMOL',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            405 => 
            array (
                'id' => 2906,
                'code' => 56,
                'name' => 'OKBEMTA',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            406 => 
            array (
                'id' => 2907,
                'code' => 60,
                'name' => 'BATOM',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            407 => 
            array (
                'id' => 2908,
                'code' => 61,
                'name' => 'MURKIM',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            408 => 
            array (
                'id' => 2909,
                'code' => 62,
                'name' => 'MOFINOP',
                'province_code' => 94,
                'regency_code' => 17,
            ),
            409 => 
            array (
                'id' => 2910,
                'code' => 10,
                'name' => 'KANGGIME',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            410 => 
            array (
                'id' => 2911,
                'code' => 11,
                'name' => 'WONIKI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            411 => 
            array (
                'id' => 2912,
                'code' => 12,
                'name' => 'NABUNAGE',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            412 => 
            array (
                'id' => 2913,
                'code' => 13,
                'name' => 'GILUBANDU',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            413 => 
            array (
                'id' => 2914,
                'code' => 14,
                'name' => 'WAKUO',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            414 => 
            array (
                'id' => 2915,
                'code' => 15,
                'name' => 'AWEKU',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            415 => 
            array (
                'id' => 2916,
                'code' => 16,
                'name' => 'BOGONUK',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            416 => 
            array (
                'id' => 2917,
                'code' => 20,
                'name' => 'KARUBAGA',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            417 => 
            array (
                'id' => 2918,
                'code' => 21,
                'name' => 'GOYAGE',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            418 => 
            array (
                'id' => 2919,
                'code' => 22,
                'name' => 'WUNIN',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            419 => 
            array (
                'id' => 2920,
                'code' => 23,
                'name' => 'KONDAGA',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            420 => 
            array (
                'id' => 2921,
                'code' => 24,
                'name' => 'NELAWI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            421 => 
            array (
                'id' => 2922,
                'code' => 25,
                'name' => 'KUARI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            422 => 
            array (
                'id' => 2923,
                'code' => 26,
                'name' => 'LIANOGOMA',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            423 => 
            array (
                'id' => 2924,
                'code' => 27,
                'name' => 'BIUK',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            424 => 
            array (
                'id' => 2925,
                'code' => 30,
                'name' => 'BOKONDINI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            425 => 
            array (
                'id' => 2926,
                'code' => 31,
                'name' => 'BOKONERI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            426 => 
            array (
                'id' => 2927,
                'code' => 32,
                'name' => 'BEWANI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            427 => 
            array (
                'id' => 2928,
                'code' => 40,
                'name' => 'KEMBU',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            428 => 
            array (
                'id' => 2929,
                'code' => 41,
                'name' => 'WINA',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            429 => 
            array (
                'id' => 2930,
                'code' => 42,
                'name' => 'UMAGI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            430 => 
            array (
                'id' => 2931,
                'code' => 43,
                'name' => 'PANAGA',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            431 => 
            array (
                'id' => 2932,
                'code' => 44,
                'name' => 'POGANERI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            432 => 
            array (
                'id' => 2933,
                'code' => 45,
                'name' => 'KAMBONERI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            433 => 
            array (
                'id' => 2934,
                'code' => 46,
                'name' => 'AIR GARAM',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            434 => 
            array (
                'id' => 2935,
                'code' => 47,
                'name' => 'DOW',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            435 => 
            array (
                'id' => 2936,
                'code' => 48,
                'name' => 'WARI / TAIYEVE',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            436 => 
            array (
                'id' => 2937,
                'code' => 49,
                'name' => 'EGIAM',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            437 => 
            array (
                'id' => 2938,
                'code' => 51,
                'name' => 'NUNGGAWI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            438 => 
            array (
                'id' => 2939,
                'code' => 60,
                'name' => 'KUBU',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            439 => 
            array (
                'id' => 2940,
                'code' => 61,
                'name' => 'ANAWI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            440 => 
            array (
                'id' => 2941,
                'code' => 62,
                'name' => 'WUGI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            441 => 
            array (
                'id' => 2942,
                'code' => 70,
                'name' => 'GEYA',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            442 => 
            array (
                'id' => 2943,
                'code' => 71,
                'name' => 'WENAM',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            443 => 
            array (
                'id' => 2944,
                'code' => 80,
                'name' => 'NUMBA',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            444 => 
            array (
                'id' => 2945,
                'code' => 81,
                'name' => 'KAI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            445 => 
            array (
                'id' => 2946,
                'code' => 90,
                'name' => 'DUNDU',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            446 => 
            array (
                'id' => 2947,
                'code' => 100,
                'name' => 'GUNDAGI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            447 => 
            array (
                'id' => 2948,
                'code' => 110,
                'name' => 'TIMORI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            448 => 
            array (
                'id' => 2949,
                'code' => 121,
                'name' => 'YUNERI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            449 => 
            array (
                'id' => 2950,
                'code' => 125,
                'name' => 'TAGIME',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            450 => 
            array (
                'id' => 2951,
                'code' => 126,
                'name' => 'DANIME',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            451 => 
            array (
                'id' => 2952,
                'code' => 127,
                'name' => 'YUKO',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            452 => 
            array (
                'id' => 2953,
                'code' => 541,
                'name' => 'TELENGGEME',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            453 => 
            array (
                'id' => 2954,
                'code' => 542,
                'name' => 'GIKA',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            454 => 
            array (
                'id' => 2955,
                'code' => 543,
                'name' => 'TAGINERI',
                'province_code' => 94,
                'regency_code' => 18,
            ),
            455 => 
            array (
                'id' => 2956,
                'code' => 21,
                'name' => 'PANTAI TIMUR BAGIAN BARAT',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            456 => 
            array (
                'id' => 2957,
                'code' => 22,
                'name' => 'PANTAI TIMUR',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            457 => 
            array (
                'id' => 2958,
                'code' => 24,
                'name' => 'SUNGAI BIRI',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            458 => 
            array (
                'id' => 2959,
                'code' => 25,
                'name' => 'VEEN',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            459 => 
            array (
                'id' => 2960,
                'code' => 31,
                'name' => 'BONGGO',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            460 => 
            array (
                'id' => 2961,
                'code' => 32,
                'name' => 'BONGGO TIMUR',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            461 => 
            array (
                'id' => 2962,
                'code' => 33,
                'name' => 'BONGGO BARAT',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            462 => 
            array (
                'id' => 2963,
                'code' => 40,
                'name' => 'TOR ATAS',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            463 => 
            array (
                'id' => 2964,
                'code' => 41,
                'name' => 'ISMARI',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            464 => 
            array (
                'id' => 2965,
                'code' => 50,
                'name' => 'SARMI',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            465 => 
            array (
                'id' => 2966,
                'code' => 51,
                'name' => 'SARMI TIMUR',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            466 => 
            array (
                'id' => 2967,
                'code' => 52,
                'name' => 'SARMI SELATAN',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            467 => 
            array (
                'id' => 2968,
                'code' => 53,
                'name' => 'SOBEY',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            468 => 
            array (
                'id' => 2969,
                'code' => 54,
                'name' => 'MUARA TOR',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            469 => 
            array (
                'id' => 2970,
                'code' => 55,
                'name' => 'VERKAM',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            470 => 
            array (
                'id' => 2971,
                'code' => 60,
                'name' => 'PANTAI BARAT',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            471 => 
            array (
                'id' => 2972,
                'code' => 61,
                'name' => 'APAWER HULU',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            472 => 
            array (
                'id' => 2973,
                'code' => 62,
                'name' => 'APAWER HILIR',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            473 => 
            array (
                'id' => 2974,
                'code' => 63,
                'name' => 'APAWER TENGAH',
                'province_code' => 94,
                'regency_code' => 19,
            ),
            474 => 
            array (
                'id' => 2975,
                'code' => 10,
                'name' => 'WEB',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            475 => 
            array (
                'id' => 2976,
                'code' => 11,
                'name' => 'TOWE',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            476 => 
            array (
                'id' => 2977,
                'code' => 12,
                'name' => 'YAFFI',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            477 => 
            array (
                'id' => 2978,
                'code' => 20,
                'name' => 'SENGGI',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            478 => 
            array (
                'id' => 2979,
                'code' => 21,
                'name' => 'KAISENAR',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            479 => 
            array (
                'id' => 2980,
                'code' => 30,
                'name' => 'WARIS',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            480 => 
            array (
                'id' => 2981,
                'code' => 40,
                'name' => 'ARSO',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            481 => 
            array (
                'id' => 2982,
                'code' => 41,
                'name' => 'ARSO TIMUR',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            482 => 
            array (
                'id' => 2983,
                'code' => 42,
                'name' => 'ARSO BARAT',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            483 => 
            array (
                'id' => 2984,
                'code' => 43,
                'name' => 'MANNEM',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            484 => 
            array (
                'id' => 2985,
                'code' => 50,
                'name' => 'SKANTO',
                'province_code' => 94,
                'regency_code' => 20,
            ),
            485 => 
            array (
                'id' => 2986,
                'code' => 10,
                'name' => 'WAROPEN BAWAH',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            486 => 
            array (
                'id' => 2987,
                'code' => 11,
                'name' => 'INGGERUS',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            487 => 
            array (
                'id' => 2988,
                'code' => 12,
                'name' => 'UREI FAISEI',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            488 => 
            array (
                'id' => 2989,
                'code' => 13,
                'name' => 'OUDATE',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            489 => 
            array (
                'id' => 2990,
                'code' => 14,
                'name' => 'WAPOGA',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            490 => 
            array (
                'id' => 2991,
                'code' => 20,
                'name' => 'MASIREI',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            491 => 
            array (
                'id' => 2992,
                'code' => 21,
                'name' => 'RISEI SAYATI',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            492 => 
            array (
                'id' => 2993,
                'code' => 22,
                'name' => 'DEMBA',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            493 => 
            array (
                'id' => 2994,
                'code' => 23,
                'name' => 'SOYOI MAMBAI',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            494 => 
            array (
                'id' => 2995,
                'code' => 24,
                'name' => 'WONTI',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            495 => 
            array (
                'id' => 2996,
                'code' => 30,
                'name' => 'WALANI',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            496 => 
            array (
                'id' => 2997,
                'code' => 40,
                'name' => 'KIRIHI',
                'province_code' => 94,
                'regency_code' => 26,
            ),
            497 => 
            array (
                'id' => 2998,
                'code' => 10,
                'name' => 'SUPIORI SELATAN',
                'province_code' => 94,
                'regency_code' => 27,
            ),
            498 => 
            array (
                'id' => 2999,
                'code' => 11,
                'name' => 'KEPULAUAN ARURI',
                'province_code' => 94,
                'regency_code' => 27,
            ),
            499 => 
            array (
                'id' => 3000,
                'code' => 20,
                'name' => 'SUPIORI UTARA',
                'province_code' => 94,
                'regency_code' => 27,
            ),
        ));
        DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'code' => 21,
                'name' => 'SUPIORI BARAT',
                'province_code' => 94,
                'regency_code' => 27,
            ),
            1 => 
            array (
                'id' => 3002,
                'code' => 30,
                'name' => 'SUPIORI TIMUR',
                'province_code' => 94,
                'regency_code' => 27,
            ),
            2 => 
            array (
                'id' => 3003,
                'code' => 30,
                'name' => 'WAROPEN ATAS',
                'province_code' => 94,
                'regency_code' => 28,
            ),
            3 => 
            array (
                'id' => 3004,
                'code' => 31,
                'name' => 'BENUKI',
                'province_code' => 94,
                'regency_code' => 28,
            ),
            4 => 
            array (
                'id' => 3005,
                'code' => 32,
                'name' => 'SAWAI',
                'province_code' => 94,
                'regency_code' => 28,
            ),
            5 => 
            array (
                'id' => 3006,
                'code' => 40,
                'name' => 'MAMBERAMO ILIR',
                'province_code' => 94,
                'regency_code' => 28,
            ),
            6 => 
            array (
                'id' => 3007,
                'code' => 50,
                'name' => 'MAMBERAMO TENGAH',
                'province_code' => 94,
                'regency_code' => 28,
            ),
            7 => 
            array (
                'id' => 3008,
                'code' => 51,
                'name' => 'IWASO',
                'province_code' => 94,
                'regency_code' => 28,
            ),
            8 => 
            array (
                'id' => 3009,
                'code' => 60,
                'name' => 'MAMBERAMO TENGAH TIMUR',
                'province_code' => 94,
                'regency_code' => 28,
            ),
            9 => 
            array (
                'id' => 3010,
                'code' => 70,
                'name' => 'ROFAER',
                'province_code' => 94,
                'regency_code' => 28,
            ),
            10 => 
            array (
                'id' => 3011,
                'code' => 80,
                'name' => 'MAMBERAMO ULU',
                'province_code' => 94,
                'regency_code' => 28,
            ),
            11 => 
            array (
                'id' => 3012,
                'code' => 10,
                'name' => 'WOSAK',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            12 => 
            array (
                'id' => 3013,
                'code' => 11,
                'name' => 'MOBA',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            13 => 
            array (
                'id' => 3014,
                'code' => 12,
                'name' => 'PIJA',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            14 => 
            array (
                'id' => 3015,
                'code' => 13,
                'name' => 'KORA',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            15 => 
            array (
                'id' => 3016,
                'code' => 20,
                'name' => 'KENYAM',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            16 => 
            array (
                'id' => 3017,
                'code' => 21,
                'name' => 'MBUWA TENGAH',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            17 => 
            array (
                'id' => 3018,
                'code' => 22,
                'name' => 'KREPKURI',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            18 => 
            array (
                'id' => 3019,
                'code' => 23,
                'name' => 'EMBETPEM',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            19 => 
            array (
                'id' => 3020,
                'code' => 30,
                'name' => 'GESELMA',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            20 => 
            array (
                'id' => 3021,
                'code' => 31,
                'name' => 'KILMID',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            21 => 
            array (
                'id' => 3022,
                'code' => 32,
                'name' => 'YENGGELO',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            22 => 
            array (
                'id' => 3023,
                'code' => 33,
                'name' => 'ALAMA',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            23 => 
            array (
                'id' => 3024,
                'code' => 34,
                'name' => 'MEBOROK',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            24 => 
            array (
                'id' => 3025,
                'code' => 40,
                'name' => 'MAPENDUMA',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            25 => 
            array (
                'id' => 3026,
                'code' => 41,
                'name' => 'KROPTAK',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            26 => 
            array (
                'id' => 3027,
                'code' => 42,
                'name' => 'PARO',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            27 => 
            array (
                'id' => 3028,
                'code' => 43,
                'name' => 'KEGAYEM',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            28 => 
            array (
                'id' => 3029,
                'code' => 50,
                'name' => 'MUGI',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            29 => 
            array (
                'id' => 3030,
                'code' => 51,
                'name' => 'YAL',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            30 => 
            array (
                'id' => 3031,
                'code' => 52,
                'name' => 'MAM',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            31 => 
            array (
                'id' => 3032,
                'code' => 60,
                'name' => 'YIGI',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            32 => 
            array (
                'id' => 3033,
                'code' => 61,
                'name' => 'DAL',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            33 => 
            array (
                'id' => 3034,
                'code' => 62,
                'name' => 'NIRKURI',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            34 => 
            array (
                'id' => 3035,
                'code' => 63,
                'name' => 'INIKGAL',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            35 => 
            array (
                'id' => 3036,
                'code' => 70,
                'name' => 'MBUWA',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            36 => 
            array (
                'id' => 3037,
                'code' => 71,
                'name' => 'INIYE',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            37 => 
            array (
                'id' => 3038,
                'code' => 72,
                'name' => 'WUTPAGA',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            38 => 
            array (
                'id' => 3039,
                'code' => 73,
                'name' => 'NENGGEANGIN',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            39 => 
            array (
                'id' => 3040,
                'code' => 74,
                'name' => 'MBULMU YALMA',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            40 => 
            array (
                'id' => 3041,
                'code' => 80,
                'name' => 'GEAREK',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            41 => 
            array (
                'id' => 3042,
                'code' => 81,
                'name' => 'PASIR PUTIH',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            42 => 
            array (
                'id' => 3043,
                'code' => 82,
                'name' => 'WUSI',
                'province_code' => 94,
                'regency_code' => 29,
            ),
            43 => 
            array (
                'id' => 3044,
                'code' => 10,
                'name' => 'MAKKI',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            44 => 
            array (
                'id' => 3045,
                'code' => 11,
                'name' => 'GUPURA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            45 => 
            array (
                'id' => 3046,
                'code' => 12,
                'name' => 'KOLAWA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            46 => 
            array (
                'id' => 3047,
                'code' => 13,
                'name' => 'GELOK BEAM',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            47 => 
            array (
                'id' => 3048,
                'code' => 14,
                'name' => 'AWINA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            48 => 
            array (
                'id' => 3049,
                'code' => 15,
                'name' => 'KULLY LANNY',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            49 => 
            array (
                'id' => 3050,
                'code' => 20,
                'name' => 'PIRIME',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            50 => 
            array (
                'id' => 3051,
                'code' => 21,
                'name' => 'BUGUK GONA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            51 => 
            array (
                'id' => 3052,
                'code' => 22,
                'name' => 'MILIMBO',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            52 => 
            array (
                'id' => 3053,
                'code' => 23,
                'name' => 'GOLLO',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            53 => 
            array (
                'id' => 3054,
                'code' => 24,
                'name' => 'WIRINGGABUT',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            54 => 
            array (
                'id' => 3055,
                'code' => 30,
                'name' => 'TIOM',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            55 => 
            array (
                'id' => 3056,
                'code' => 31,
                'name' => 'NOGI',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            56 => 
            array (
                'id' => 3057,
                'code' => 32,
                'name' => 'MOKONI',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            57 => 
            array (
                'id' => 3058,
                'code' => 33,
                'name' => 'NINAME',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            58 => 
            array (
                'id' => 3059,
                'code' => 34,
                'name' => 'YIGINUA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            59 => 
            array (
                'id' => 3060,
                'code' => 35,
                'name' => 'TIOM OLLO',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            60 => 
            array (
                'id' => 3061,
                'code' => 36,
                'name' => 'YUGUNGWI',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            61 => 
            array (
                'id' => 3062,
                'code' => 37,
                'name' => 'LANNYNA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            62 => 
            array (
                'id' => 3063,
                'code' => 40,
                'name' => 'BALINGGA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            63 => 
            array (
                'id' => 3064,
                'code' => 41,
                'name' => 'BALINGGA BARAT',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            64 => 
            array (
                'id' => 3065,
                'code' => 42,
                'name' => 'BRUWA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            65 => 
            array (
                'id' => 3066,
                'code' => 43,
                'name' => 'AYUMNATI',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            66 => 
            array (
                'id' => 3067,
                'code' => 44,
                'name' => 'GOA BALIM',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            67 => 
            array (
                'id' => 3068,
                'code' => 50,
                'name' => 'KUYAWAGE',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            68 => 
            array (
                'id' => 3069,
                'code' => 51,
                'name' => 'WANO BARAT',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            69 => 
            array (
                'id' => 3070,
                'code' => 60,
                'name' => 'MALAGAINERI',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            70 => 
            array (
                'id' => 3071,
                'code' => 61,
                'name' => 'MELAGAI',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            71 => 
            array (
                'id' => 3072,
                'code' => 70,
                'name' => 'TIOMNERI',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            72 => 
            array (
                'id' => 3073,
                'code' => 71,
                'name' => 'WEREKA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            73 => 
            array (
                'id' => 3074,
                'code' => 80,
                'name' => 'DIMBA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            74 => 
            array (
                'id' => 3075,
                'code' => 81,
                'name' => 'KELULOME',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            75 => 
            array (
                'id' => 3076,
                'code' => 82,
                'name' => 'NIKOGWE',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            76 => 
            array (
                'id' => 3077,
                'code' => 90,
                'name' => 'GAMELIA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            77 => 
            array (
                'id' => 3078,
                'code' => 91,
                'name' => 'KARU',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            78 => 
            array (
                'id' => 3079,
                'code' => 92,
                'name' => 'YILUK',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            79 => 
            array (
                'id' => 3080,
                'code' => 93,
                'name' => 'GUNA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            80 => 
            array (
                'id' => 3081,
                'code' => 100,
                'name' => 'POGA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            81 => 
            array (
                'id' => 3082,
                'code' => 101,
                'name' => 'MUARA',
                'province_code' => 94,
                'regency_code' => 30,
            ),
            82 => 
            array (
                'id' => 3083,
                'code' => 10,
                'name' => 'KOBAKMA',
                'province_code' => 94,
                'regency_code' => 31,
            ),
            83 => 
            array (
                'id' => 3084,
                'code' => 20,
                'name' => 'ILUGWA',
                'province_code' => 94,
                'regency_code' => 31,
            ),
            84 => 
            array (
                'id' => 3085,
                'code' => 30,
                'name' => 'KELILA',
                'province_code' => 94,
                'regency_code' => 31,
            ),
            85 => 
            array (
                'id' => 3086,
                'code' => 40,
                'name' => 'ERAGAYAM',
                'province_code' => 94,
                'regency_code' => 31,
            ),
            86 => 
            array (
                'id' => 3087,
                'code' => 50,
                'name' => 'MEGAMBILIS',
                'province_code' => 94,
                'regency_code' => 31,
            ),
            87 => 
            array (
                'id' => 3088,
                'code' => 10,
                'name' => 'WELAREK',
                'province_code' => 94,
                'regency_code' => 32,
            ),
            88 => 
            array (
                'id' => 3089,
                'code' => 20,
                'name' => 'APALAPSILI',
                'province_code' => 94,
                'regency_code' => 32,
            ),
            89 => 
            array (
                'id' => 3090,
                'code' => 30,
                'name' => 'ABENAHO',
                'province_code' => 94,
                'regency_code' => 32,
            ),
            90 => 
            array (
                'id' => 3091,
                'code' => 40,
                'name' => 'ELELIM',
                'province_code' => 94,
                'regency_code' => 32,
            ),
            91 => 
            array (
                'id' => 3092,
                'code' => 50,
                'name' => 'BENAWA',
                'province_code' => 94,
                'regency_code' => 32,
            ),
            92 => 
            array (
                'id' => 3093,
                'code' => 10,
                'name' => 'AGANDUGUME',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            93 => 
            array (
                'id' => 3094,
                'code' => 11,
                'name' => 'LAMBEWI',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            94 => 
            array (
                'id' => 3095,
                'code' => 12,
                'name' => 'ONERI',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            95 => 
            array (
                'id' => 3096,
                'code' => 20,
                'name' => 'GOME',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            96 => 
            array (
                'id' => 3097,
                'code' => 21,
                'name' => 'AMUNGKALPIA',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            97 => 
            array (
                'id' => 3098,
                'code' => 22,
                'name' => 'GOME UTARA',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            98 => 
            array (
                'id' => 3099,
                'code' => 23,
                'name' => 'ERELMAKAWIA',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            99 => 
            array (
                'id' => 3100,
                'code' => 30,
                'name' => 'ILAGA',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            100 => 
            array (
                'id' => 3101,
                'code' => 31,
                'name' => 'ILAGA UTARA',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            101 => 
            array (
                'id' => 3102,
                'code' => 32,
                'name' => 'MABUGI',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            102 => 
            array (
                'id' => 3103,
                'code' => 33,
                'name' => 'OMUKIA',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            103 => 
            array (
                'id' => 3104,
                'code' => 40,
                'name' => 'SINAK',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            104 => 
            array (
                'id' => 3105,
                'code' => 41,
                'name' => 'SINAK BARAT',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            105 => 
            array (
                'id' => 3106,
                'code' => 42,
                'name' => 'MAGE\\\'ABUME',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            106 => 
            array (
                'id' => 3107,
                'code' => 43,
                'name' => 'YUGUMUAK',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            107 => 
            array (
                'id' => 3108,
                'code' => 50,
                'name' => 'POGOMA',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            108 => 
            array (
                'id' => 3109,
                'code' => 51,
                'name' => 'KEMBRU',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            109 => 
            array (
                'id' => 3110,
                'code' => 52,
                'name' => 'BINA',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            110 => 
            array (
                'id' => 3111,
                'code' => 60,
                'name' => 'WANGBE',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            111 => 
            array (
                'id' => 3112,
                'code' => 61,
                'name' => 'OGAMANIN',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            112 => 
            array (
                'id' => 3113,
                'code' => 70,
                'name' => 'BEOGA',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            113 => 
            array (
                'id' => 3114,
                'code' => 71,
                'name' => 'BEOGA BARAT',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            114 => 
            array (
                'id' => 3115,
                'code' => 72,
                'name' => 'BEOGA TIMUR',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            115 => 
            array (
                'id' => 3116,
                'code' => 80,
                'name' => 'DOUVO',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            116 => 
            array (
                'id' => 3117,
                'code' => 81,
                'name' => 'DERVOS',
                'province_code' => 94,
                'regency_code' => 33,
            ),
            117 => 
            array (
                'id' => 3118,
                'code' => 10,
                'name' => 'SUKIKAI SELATAN',
                'province_code' => 94,
                'regency_code' => 34,
            ),
            118 => 
            array (
                'id' => 3119,
                'code' => 20,
                'name' => 'PIYAIYE',
                'province_code' => 94,
                'regency_code' => 34,
            ),
            119 => 
            array (
                'id' => 3120,
                'code' => 30,
                'name' => 'MAPIA BARAT',
                'province_code' => 94,
                'regency_code' => 34,
            ),
            120 => 
            array (
                'id' => 3121,
                'code' => 40,
                'name' => 'MAPIA TENGAH',
                'province_code' => 94,
                'regency_code' => 34,
            ),
            121 => 
            array (
                'id' => 3122,
                'code' => 50,
                'name' => 'MAPIA',
                'province_code' => 94,
                'regency_code' => 34,
            ),
            122 => 
            array (
                'id' => 3123,
                'code' => 60,
                'name' => 'DOGIYAI',
                'province_code' => 94,
                'regency_code' => 34,
            ),
            123 => 
            array (
                'id' => 3124,
                'code' => 70,
                'name' => 'KAMU SELATAN',
                'province_code' => 94,
                'regency_code' => 34,
            ),
            124 => 
            array (
                'id' => 3125,
                'code' => 80,
                'name' => 'KAMU',
                'province_code' => 94,
                'regency_code' => 34,
            ),
            125 => 
            array (
                'id' => 3126,
                'code' => 90,
                'name' => 'KAMU TIMUR',
                'province_code' => 94,
                'regency_code' => 34,
            ),
            126 => 
            array (
                'id' => 3127,
                'code' => 100,
                'name' => 'KAMU UTARA',
                'province_code' => 94,
                'regency_code' => 34,
            ),
            127 => 
            array (
                'id' => 3128,
                'code' => 10,
                'name' => 'HOMEYO',
                'province_code' => 94,
                'regency_code' => 35,
            ),
            128 => 
            array (
                'id' => 3129,
                'code' => 20,
                'name' => 'SUGAPA',
                'province_code' => 94,
                'regency_code' => 35,
            ),
            129 => 
            array (
                'id' => 3130,
                'code' => 21,
                'name' => 'UGIMBA',
                'province_code' => 94,
                'regency_code' => 35,
            ),
            130 => 
            array (
                'id' => 3131,
                'code' => 30,
                'name' => 'HITADIPA',
                'province_code' => 94,
                'regency_code' => 35,
            ),
            131 => 
            array (
                'id' => 3132,
                'code' => 40,
                'name' => 'AGISIGA',
                'province_code' => 94,
                'regency_code' => 35,
            ),
            132 => 
            array (
                'id' => 3133,
                'code' => 41,
                'name' => 'TOMOSIGA',
                'province_code' => 94,
                'regency_code' => 35,
            ),
            133 => 
            array (
                'id' => 3134,
                'code' => 50,
                'name' => 'BIANDOGA',
                'province_code' => 94,
                'regency_code' => 35,
            ),
            134 => 
            array (
                'id' => 3135,
                'code' => 60,
                'name' => 'WANDAI',
                'province_code' => 94,
                'regency_code' => 35,
            ),
            135 => 
            array (
                'id' => 3136,
                'code' => 10,
                'name' => 'KAPIRAYA',
                'province_code' => 94,
                'regency_code' => 36,
            ),
            136 => 
            array (
                'id' => 3137,
                'code' => 20,
                'name' => 'TIGI BARAT',
                'province_code' => 94,
                'regency_code' => 36,
            ),
            137 => 
            array (
                'id' => 3138,
                'code' => 30,
                'name' => 'TIGI',
                'province_code' => 94,
                'regency_code' => 36,
            ),
            138 => 
            array (
                'id' => 3139,
                'code' => 40,
                'name' => 'TIGI TIMUR',
                'province_code' => 94,
                'regency_code' => 36,
            ),
            139 => 
            array (
                'id' => 3140,
                'code' => 50,
                'name' => 'BOWOBADO',
                'province_code' => 94,
                'regency_code' => 36,
            ),
            140 => 
            array (
                'id' => 3141,
                'code' => 10,
                'name' => 'MUARA TAMI',
                'province_code' => 94,
                'regency_code' => 71,
            ),
            141 => 
            array (
                'id' => 3142,
                'code' => 20,
                'name' => 'ABEPURA',
                'province_code' => 94,
                'regency_code' => 71,
            ),
            142 => 
            array (
                'id' => 3143,
                'code' => 21,
                'name' => 'HERAM',
                'province_code' => 94,
                'regency_code' => 71,
            ),
            143 => 
            array (
                'id' => 3144,
                'code' => 30,
                'name' => 'JAYAPURA SELATAN',
                'province_code' => 94,
                'regency_code' => 71,
            ),
            144 => 
            array (
                'id' => 3145,
                'code' => 40,
                'name' => 'JAYAPURA UTARA',
                'province_code' => 94,
                'regency_code' => 71,
            ),
        ));
        
        
    }
}