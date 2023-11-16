<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('regencies')->delete();
        
        DB::table('regencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 1,
                'name' => 'KABUPATEN SIMEULUE',
                'province_code' => 11,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 2,
                'name' => 'KABUPATEN ACEH SINGKIL',
                'province_code' => 11,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 3,
                'name' => 'KABUPATEN ACEH SELATAN',
                'province_code' => 11,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 4,
                'name' => 'KABUPATEN ACEH TENGGARA',
                'province_code' => 11,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 5,
                'name' => 'KABUPATEN ACEH TIMUR',
                'province_code' => 11,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 6,
                'name' => 'KABUPATEN ACEH TENGAH',
                'province_code' => 11,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 7,
                'name' => 'KABUPATEN ACEH BARAT',
                'province_code' => 11,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 8,
                'name' => 'KABUPATEN ACEH BESAR',
                'province_code' => 11,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 9,
                'name' => 'KABUPATEN PIDIE',
                'province_code' => 11,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 10,
                'name' => 'KABUPATEN BIREUEN',
                'province_code' => 11,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 11,
                'name' => 'KABUPATEN ACEH UTARA',
                'province_code' => 11,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 12,
                'name' => 'KABUPATEN ACEH BARAT DAYA',
                'province_code' => 11,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 13,
                'name' => 'KABUPATEN GAYO LUES',
                'province_code' => 11,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 14,
                'name' => 'KABUPATEN ACEH TAMIANG',
                'province_code' => 11,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 15,
                'name' => 'KABUPATEN NAGAN RAYA',
                'province_code' => 11,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 16,
                'name' => 'KABUPATEN ACEH JAYA',
                'province_code' => 11,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 17,
                'name' => 'KABUPATEN BENER MERIAH',
                'province_code' => 11,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 18,
                'name' => 'KABUPATEN PIDIE JAYA',
                'province_code' => 11,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 71,
                'name' => 'KOTA BANDA ACEH',
                'province_code' => 11,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 72,
                'name' => 'KOTA SABANG',
                'province_code' => 11,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 73,
                'name' => 'KOTA LANGSA',
                'province_code' => 11,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 74,
                'name' => 'KOTA LHOKSEUMAWE',
                'province_code' => 11,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 75,
                'name' => 'KOTA SUBULUSSALAM',
                'province_code' => 11,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 1,
                'name' => 'KABUPATEN NIAS',
                'province_code' => 12,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 2,
                'name' => 'KABUPATEN MANDAILING NATAL',
                'province_code' => 12,
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 3,
                'name' => 'KABUPATEN TAPANULI SELATAN',
                'province_code' => 12,
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 4,
                'name' => 'KABUPATEN TAPANULI TENGAH',
                'province_code' => 12,
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 5,
                'name' => 'KABUPATEN TAPANULI UTARA',
                'province_code' => 12,
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 6,
                'name' => 'KABUPATEN TOBA SAMOSIR',
                'province_code' => 12,
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 7,
                'name' => 'KABUPATEN LABUHAN BATU',
                'province_code' => 12,
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 8,
                'name' => 'KABUPATEN ASAHAN',
                'province_code' => 12,
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 9,
                'name' => 'KABUPATEN SIMALUNGUN',
                'province_code' => 12,
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 10,
                'name' => 'KABUPATEN DAIRI',
                'province_code' => 12,
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 11,
                'name' => 'KABUPATEN KARO',
                'province_code' => 12,
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 12,
                'name' => 'KABUPATEN DELI SERDANG',
                'province_code' => 12,
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 13,
                'name' => 'KABUPATEN LANGKAT',
                'province_code' => 12,
            ),
            36 => 
            array (
                'id' => 37,
                'code' => 14,
                'name' => 'KABUPATEN NIAS SELATAN',
                'province_code' => 12,
            ),
            37 => 
            array (
                'id' => 38,
                'code' => 15,
                'name' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'province_code' => 12,
            ),
            38 => 
            array (
                'id' => 39,
                'code' => 16,
                'name' => 'KABUPATEN PAKPAK BHARAT',
                'province_code' => 12,
            ),
            39 => 
            array (
                'id' => 40,
                'code' => 17,
                'name' => 'KABUPATEN SAMOSIR',
                'province_code' => 12,
            ),
            40 => 
            array (
                'id' => 41,
                'code' => 18,
                'name' => 'KABUPATEN SERDANG BEDAGAI',
                'province_code' => 12,
            ),
            41 => 
            array (
                'id' => 42,
                'code' => 19,
                'name' => 'KABUPATEN BATU BARA',
                'province_code' => 12,
            ),
            42 => 
            array (
                'id' => 43,
                'code' => 20,
                'name' => 'KABUPATEN PADANG LAWAS UTARA',
                'province_code' => 12,
            ),
            43 => 
            array (
                'id' => 44,
                'code' => 21,
                'name' => 'KABUPATEN PADANG LAWAS',
                'province_code' => 12,
            ),
            44 => 
            array (
                'id' => 45,
                'code' => 22,
                'name' => 'KABUPATEN LABUHAN BATU SELATAN',
                'province_code' => 12,
            ),
            45 => 
            array (
                'id' => 46,
                'code' => 23,
                'name' => 'KABUPATEN LABUHAN BATU UTARA',
                'province_code' => 12,
            ),
            46 => 
            array (
                'id' => 47,
                'code' => 24,
                'name' => 'KABUPATEN NIAS UTARA',
                'province_code' => 12,
            ),
            47 => 
            array (
                'id' => 48,
                'code' => 25,
                'name' => 'KABUPATEN NIAS BARAT',
                'province_code' => 12,
            ),
            48 => 
            array (
                'id' => 49,
                'code' => 71,
                'name' => 'KOTA SIBOLGA',
                'province_code' => 12,
            ),
            49 => 
            array (
                'id' => 50,
                'code' => 72,
                'name' => 'KOTA TANJUNG BALAI',
                'province_code' => 12,
            ),
            50 => 
            array (
                'id' => 51,
                'code' => 73,
                'name' => 'KOTA PEMATANG SIANTAR',
                'province_code' => 12,
            ),
            51 => 
            array (
                'id' => 52,
                'code' => 74,
                'name' => 'KOTA TEBING TINGGI',
                'province_code' => 12,
            ),
            52 => 
            array (
                'id' => 53,
                'code' => 75,
                'name' => 'KOTA MEDAN',
                'province_code' => 12,
            ),
            53 => 
            array (
                'id' => 54,
                'code' => 76,
                'name' => 'KOTA BINJAI',
                'province_code' => 12,
            ),
            54 => 
            array (
                'id' => 55,
                'code' => 77,
                'name' => 'KOTA PADANGSIDIMPUAN',
                'province_code' => 12,
            ),
            55 => 
            array (
                'id' => 56,
                'code' => 78,
                'name' => 'KOTA GUNUNGSITOLI',
                'province_code' => 12,
            ),
            56 => 
            array (
                'id' => 57,
                'code' => 1,
                'name' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'province_code' => 13,
            ),
            57 => 
            array (
                'id' => 58,
                'code' => 2,
                'name' => 'KABUPATEN PESISIR SELATAN',
                'province_code' => 13,
            ),
            58 => 
            array (
                'id' => 59,
                'code' => 3,
                'name' => 'KABUPATEN SOLOK',
                'province_code' => 13,
            ),
            59 => 
            array (
                'id' => 60,
                'code' => 4,
                'name' => 'KABUPATEN SIJUNJUNG',
                'province_code' => 13,
            ),
            60 => 
            array (
                'id' => 61,
                'code' => 5,
                'name' => 'KABUPATEN TANAH DATAR',
                'province_code' => 13,
            ),
            61 => 
            array (
                'id' => 62,
                'code' => 6,
                'name' => 'KABUPATEN PADANG PARIAMAN',
                'province_code' => 13,
            ),
            62 => 
            array (
                'id' => 63,
                'code' => 7,
                'name' => 'KABUPATEN AGAM',
                'province_code' => 13,
            ),
            63 => 
            array (
                'id' => 64,
                'code' => 8,
                'name' => 'KABUPATEN LIMA PULUH KOTA',
                'province_code' => 13,
            ),
            64 => 
            array (
                'id' => 65,
                'code' => 9,
                'name' => 'KABUPATEN PASAMAN',
                'province_code' => 13,
            ),
            65 => 
            array (
                'id' => 66,
                'code' => 10,
                'name' => 'KABUPATEN SOLOK SELATAN',
                'province_code' => 13,
            ),
            66 => 
            array (
                'id' => 67,
                'code' => 11,
                'name' => 'KABUPATEN DHARMASRAYA',
                'province_code' => 13,
            ),
            67 => 
            array (
                'id' => 68,
                'code' => 12,
                'name' => 'KABUPATEN PASAMAN BARAT',
                'province_code' => 13,
            ),
            68 => 
            array (
                'id' => 69,
                'code' => 71,
                'name' => 'KOTA PADANG',
                'province_code' => 13,
            ),
            69 => 
            array (
                'id' => 70,
                'code' => 72,
                'name' => 'KOTA SOLOK',
                'province_code' => 13,
            ),
            70 => 
            array (
                'id' => 71,
                'code' => 73,
                'name' => 'KOTA SAWAH LUNTO',
                'province_code' => 13,
            ),
            71 => 
            array (
                'id' => 72,
                'code' => 74,
                'name' => 'KOTA PADANG PANJANG',
                'province_code' => 13,
            ),
            72 => 
            array (
                'id' => 73,
                'code' => 75,
                'name' => 'KOTA BUKITTINGGI',
                'province_code' => 13,
            ),
            73 => 
            array (
                'id' => 74,
                'code' => 76,
                'name' => 'KOTA PAYAKUMBUH',
                'province_code' => 13,
            ),
            74 => 
            array (
                'id' => 75,
                'code' => 77,
                'name' => 'KOTA PARIAMAN',
                'province_code' => 13,
            ),
            75 => 
            array (
                'id' => 76,
                'code' => 1,
                'name' => 'KABUPATEN KUANTAN SINGINGI',
                'province_code' => 14,
            ),
            76 => 
            array (
                'id' => 77,
                'code' => 2,
                'name' => 'KABUPATEN INDRAGIRI HULU',
                'province_code' => 14,
            ),
            77 => 
            array (
                'id' => 78,
                'code' => 3,
                'name' => 'KABUPATEN INDRAGIRI HILIR',
                'province_code' => 14,
            ),
            78 => 
            array (
                'id' => 79,
                'code' => 4,
                'name' => 'KABUPATEN PELALAWAN',
                'province_code' => 14,
            ),
            79 => 
            array (
                'id' => 80,
                'code' => 5,
                'name' => 'KABUPATEN S I A K',
                'province_code' => 14,
            ),
            80 => 
            array (
                'id' => 81,
                'code' => 6,
                'name' => 'KABUPATEN KAMPAR',
                'province_code' => 14,
            ),
            81 => 
            array (
                'id' => 82,
                'code' => 7,
                'name' => 'KABUPATEN ROKAN HULU',
                'province_code' => 14,
            ),
            82 => 
            array (
                'id' => 83,
                'code' => 8,
                'name' => 'KABUPATEN BENGKALIS',
                'province_code' => 14,
            ),
            83 => 
            array (
                'id' => 84,
                'code' => 9,
                'name' => 'KABUPATEN ROKAN HILIR',
                'province_code' => 14,
            ),
            84 => 
            array (
                'id' => 85,
                'code' => 10,
                'name' => 'KABUPATEN KEPULAUAN MERANTI',
                'province_code' => 14,
            ),
            85 => 
            array (
                'id' => 86,
                'code' => 71,
                'name' => 'KOTA PEKANBARU',
                'province_code' => 14,
            ),
            86 => 
            array (
                'id' => 87,
                'code' => 73,
                'name' => 'KOTA D U M A I',
                'province_code' => 14,
            ),
            87 => 
            array (
                'id' => 88,
                'code' => 1,
                'name' => 'KABUPATEN KERINCI',
                'province_code' => 15,
            ),
            88 => 
            array (
                'id' => 89,
                'code' => 2,
                'name' => 'KABUPATEN MERANGIN',
                'province_code' => 15,
            ),
            89 => 
            array (
                'id' => 90,
                'code' => 3,
                'name' => 'KABUPATEN SAROLANGUN',
                'province_code' => 15,
            ),
            90 => 
            array (
                'id' => 91,
                'code' => 4,
                'name' => 'KABUPATEN BATANG HARI',
                'province_code' => 15,
            ),
            91 => 
            array (
                'id' => 92,
                'code' => 5,
                'name' => 'KABUPATEN MUARO JAMBI',
                'province_code' => 15,
            ),
            92 => 
            array (
                'id' => 93,
                'code' => 6,
                'name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'province_code' => 15,
            ),
            93 => 
            array (
                'id' => 94,
                'code' => 7,
                'name' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'province_code' => 15,
            ),
            94 => 
            array (
                'id' => 95,
                'code' => 8,
                'name' => 'KABUPATEN TEBO',
                'province_code' => 15,
            ),
            95 => 
            array (
                'id' => 96,
                'code' => 9,
                'name' => 'KABUPATEN BUNGO',
                'province_code' => 15,
            ),
            96 => 
            array (
                'id' => 97,
                'code' => 71,
                'name' => 'KOTA JAMBI',
                'province_code' => 15,
            ),
            97 => 
            array (
                'id' => 98,
                'code' => 72,
                'name' => 'KOTA SUNGAI PENUH',
                'province_code' => 15,
            ),
            98 => 
            array (
                'id' => 99,
                'code' => 1,
                'name' => 'KABUPATEN OGAN KOMERING ULU',
                'province_code' => 16,
            ),
            99 => 
            array (
                'id' => 100,
                'code' => 2,
                'name' => 'KABUPATEN OGAN KOMERING ILIR',
                'province_code' => 16,
            ),
            100 => 
            array (
                'id' => 101,
                'code' => 3,
                'name' => 'KABUPATEN MUARA ENIM',
                'province_code' => 16,
            ),
            101 => 
            array (
                'id' => 102,
                'code' => 4,
                'name' => 'KABUPATEN LAHAT',
                'province_code' => 16,
            ),
            102 => 
            array (
                'id' => 103,
                'code' => 5,
                'name' => 'KABUPATEN MUSI RAWAS',
                'province_code' => 16,
            ),
            103 => 
            array (
                'id' => 104,
                'code' => 6,
                'name' => 'KABUPATEN MUSI BANYUASIN',
                'province_code' => 16,
            ),
            104 => 
            array (
                'id' => 105,
                'code' => 7,
                'name' => 'KABUPATEN BANYU ASIN',
                'province_code' => 16,
            ),
            105 => 
            array (
                'id' => 106,
                'code' => 8,
                'name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'province_code' => 16,
            ),
            106 => 
            array (
                'id' => 107,
                'code' => 9,
                'name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'province_code' => 16,
            ),
            107 => 
            array (
                'id' => 108,
                'code' => 10,
                'name' => 'KABUPATEN OGAN ILIR',
                'province_code' => 16,
            ),
            108 => 
            array (
                'id' => 109,
                'code' => 11,
                'name' => 'KABUPATEN EMPAT LAWANG',
                'province_code' => 16,
            ),
            109 => 
            array (
                'id' => 110,
                'code' => 12,
                'name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'province_code' => 16,
            ),
            110 => 
            array (
                'id' => 111,
                'code' => 13,
                'name' => 'KABUPATEN MUSI RAWAS UTARA',
                'province_code' => 16,
            ),
            111 => 
            array (
                'id' => 112,
                'code' => 71,
                'name' => 'KOTA PALEMBANG',
                'province_code' => 16,
            ),
            112 => 
            array (
                'id' => 113,
                'code' => 72,
                'name' => 'KOTA PRABUMULIH',
                'province_code' => 16,
            ),
            113 => 
            array (
                'id' => 114,
                'code' => 73,
                'name' => 'KOTA PAGAR ALAM',
                'province_code' => 16,
            ),
            114 => 
            array (
                'id' => 115,
                'code' => 74,
                'name' => 'KOTA LUBUKLINGGAU',
                'province_code' => 16,
            ),
            115 => 
            array (
                'id' => 116,
                'code' => 1,
                'name' => 'KABUPATEN BENGKULU SELATAN',
                'province_code' => 17,
            ),
            116 => 
            array (
                'id' => 117,
                'code' => 2,
                'name' => 'KABUPATEN REJANG LEBONG',
                'province_code' => 17,
            ),
            117 => 
            array (
                'id' => 118,
                'code' => 3,
                'name' => 'KABUPATEN BENGKULU UTARA',
                'province_code' => 17,
            ),
            118 => 
            array (
                'id' => 119,
                'code' => 4,
                'name' => 'KABUPATEN KAUR',
                'province_code' => 17,
            ),
            119 => 
            array (
                'id' => 120,
                'code' => 5,
                'name' => 'KABUPATEN SELUMA',
                'province_code' => 17,
            ),
            120 => 
            array (
                'id' => 121,
                'code' => 6,
                'name' => 'KABUPATEN MUKOMUKO',
                'province_code' => 17,
            ),
            121 => 
            array (
                'id' => 122,
                'code' => 7,
                'name' => 'KABUPATEN LEBONG',
                'province_code' => 17,
            ),
            122 => 
            array (
                'id' => 123,
                'code' => 8,
                'name' => 'KABUPATEN KEPAHIANG',
                'province_code' => 17,
            ),
            123 => 
            array (
                'id' => 124,
                'code' => 9,
                'name' => 'KABUPATEN BENGKULU TENGAH',
                'province_code' => 17,
            ),
            124 => 
            array (
                'id' => 125,
                'code' => 71,
                'name' => 'KOTA BENGKULU',
                'province_code' => 17,
            ),
            125 => 
            array (
                'id' => 126,
                'code' => 1,
                'name' => 'KABUPATEN LAMPUNG BARAT',
                'province_code' => 18,
            ),
            126 => 
            array (
                'id' => 127,
                'code' => 2,
                'name' => 'KABUPATEN TANGGAMUS',
                'province_code' => 18,
            ),
            127 => 
            array (
                'id' => 128,
                'code' => 3,
                'name' => 'KABUPATEN LAMPUNG SELATAN',
                'province_code' => 18,
            ),
            128 => 
            array (
                'id' => 129,
                'code' => 4,
                'name' => 'KABUPATEN LAMPUNG TIMUR',
                'province_code' => 18,
            ),
            129 => 
            array (
                'id' => 130,
                'code' => 5,
                'name' => 'KABUPATEN LAMPUNG TENGAH',
                'province_code' => 18,
            ),
            130 => 
            array (
                'id' => 131,
                'code' => 6,
                'name' => 'KABUPATEN LAMPUNG UTARA',
                'province_code' => 18,
            ),
            131 => 
            array (
                'id' => 132,
                'code' => 7,
                'name' => 'KABUPATEN WAY KANAN',
                'province_code' => 18,
            ),
            132 => 
            array (
                'id' => 133,
                'code' => 8,
                'name' => 'KABUPATEN TULANGBAWANG',
                'province_code' => 18,
            ),
            133 => 
            array (
                'id' => 134,
                'code' => 9,
                'name' => 'KABUPATEN PESAWARAN',
                'province_code' => 18,
            ),
            134 => 
            array (
                'id' => 135,
                'code' => 10,
                'name' => 'KABUPATEN PRINGSEWU',
                'province_code' => 18,
            ),
            135 => 
            array (
                'id' => 136,
                'code' => 11,
                'name' => 'KABUPATEN MESUJI',
                'province_code' => 18,
            ),
            136 => 
            array (
                'id' => 137,
                'code' => 12,
                'name' => 'KABUPATEN TULANG BAWANG BARAT',
                'province_code' => 18,
            ),
            137 => 
            array (
                'id' => 138,
                'code' => 13,
                'name' => 'KABUPATEN PESISIR BARAT',
                'province_code' => 18,
            ),
            138 => 
            array (
                'id' => 139,
                'code' => 71,
                'name' => 'KOTA BANDAR LAMPUNG',
                'province_code' => 18,
            ),
            139 => 
            array (
                'id' => 140,
                'code' => 72,
                'name' => 'KOTA METRO',
                'province_code' => 18,
            ),
            140 => 
            array (
                'id' => 141,
                'code' => 1,
                'name' => 'KABUPATEN BANGKA',
                'province_code' => 19,
            ),
            141 => 
            array (
                'id' => 142,
                'code' => 2,
                'name' => 'KABUPATEN BELITUNG',
                'province_code' => 19,
            ),
            142 => 
            array (
                'id' => 143,
                'code' => 3,
                'name' => 'KABUPATEN BANGKA BARAT',
                'province_code' => 19,
            ),
            143 => 
            array (
                'id' => 144,
                'code' => 4,
                'name' => 'KABUPATEN BANGKA TENGAH',
                'province_code' => 19,
            ),
            144 => 
            array (
                'id' => 145,
                'code' => 5,
                'name' => 'KABUPATEN BANGKA SELATAN',
                'province_code' => 19,
            ),
            145 => 
            array (
                'id' => 146,
                'code' => 6,
                'name' => 'KABUPATEN BELITUNG TIMUR',
                'province_code' => 19,
            ),
            146 => 
            array (
                'id' => 147,
                'code' => 71,
                'name' => 'KOTA PANGKALPINANG',
                'province_code' => 19,
            ),
            147 => 
            array (
                'id' => 148,
                'code' => 1,
                'name' => 'KABUPATEN KARIMUN',
                'province_code' => 21,
            ),
            148 => 
            array (
                'id' => 149,
                'code' => 2,
                'name' => 'KABUPATEN BINTAN',
                'province_code' => 21,
            ),
            149 => 
            array (
                'id' => 150,
                'code' => 3,
                'name' => 'KABUPATEN NATUNA',
                'province_code' => 21,
            ),
            150 => 
            array (
                'id' => 151,
                'code' => 4,
                'name' => 'KABUPATEN LINGGA',
                'province_code' => 21,
            ),
            151 => 
            array (
                'id' => 152,
                'code' => 5,
                'name' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'province_code' => 21,
            ),
            152 => 
            array (
                'id' => 153,
                'code' => 71,
                'name' => 'KOTA B A T A M',
                'province_code' => 21,
            ),
            153 => 
            array (
                'id' => 154,
                'code' => 72,
                'name' => 'KOTA TANJUNG PINANG',
                'province_code' => 21,
            ),
            154 => 
            array (
                'id' => 155,
                'code' => 1,
                'name' => 'KABUPATEN KEPULAUAN SERIBU',
                'province_code' => 31,
            ),
            155 => 
            array (
                'id' => 156,
                'code' => 71,
                'name' => 'KOTA JAKARTA SELATAN',
                'province_code' => 31,
            ),
            156 => 
            array (
                'id' => 157,
                'code' => 72,
                'name' => 'KOTA JAKARTA TIMUR',
                'province_code' => 31,
            ),
            157 => 
            array (
                'id' => 158,
                'code' => 73,
                'name' => 'KOTA JAKARTA PUSAT',
                'province_code' => 31,
            ),
            158 => 
            array (
                'id' => 159,
                'code' => 74,
                'name' => 'KOTA JAKARTA BARAT',
                'province_code' => 31,
            ),
            159 => 
            array (
                'id' => 160,
                'code' => 75,
                'name' => 'KOTA JAKARTA UTARA',
                'province_code' => 31,
            ),
            160 => 
            array (
                'id' => 161,
                'code' => 1,
                'name' => 'KABUPATEN BOGOR',
                'province_code' => 32,
            ),
            161 => 
            array (
                'id' => 162,
                'code' => 2,
                'name' => 'KABUPATEN SUKABUMI',
                'province_code' => 32,
            ),
            162 => 
            array (
                'id' => 163,
                'code' => 3,
                'name' => 'KABUPATEN CIANJUR',
                'province_code' => 32,
            ),
            163 => 
            array (
                'id' => 164,
                'code' => 4,
                'name' => 'KABUPATEN BANDUNG',
                'province_code' => 32,
            ),
            164 => 
            array (
                'id' => 165,
                'code' => 5,
                'name' => 'KABUPATEN GARUT',
                'province_code' => 32,
            ),
            165 => 
            array (
                'id' => 166,
                'code' => 6,
                'name' => 'KABUPATEN TASIKMALAYA',
                'province_code' => 32,
            ),
            166 => 
            array (
                'id' => 167,
                'code' => 7,
                'name' => 'KABUPATEN CIAMIS',
                'province_code' => 32,
            ),
            167 => 
            array (
                'id' => 168,
                'code' => 8,
                'name' => 'KABUPATEN KUNINGAN',
                'province_code' => 32,
            ),
            168 => 
            array (
                'id' => 169,
                'code' => 9,
                'name' => 'KABUPATEN CIREBON',
                'province_code' => 32,
            ),
            169 => 
            array (
                'id' => 170,
                'code' => 10,
                'name' => 'KABUPATEN MAJALENGKA',
                'province_code' => 32,
            ),
            170 => 
            array (
                'id' => 171,
                'code' => 11,
                'name' => 'KABUPATEN SUMEDANG',
                'province_code' => 32,
            ),
            171 => 
            array (
                'id' => 172,
                'code' => 12,
                'name' => 'KABUPATEN INDRAMAYU',
                'province_code' => 32,
            ),
            172 => 
            array (
                'id' => 173,
                'code' => 13,
                'name' => 'KABUPATEN SUBANG',
                'province_code' => 32,
            ),
            173 => 
            array (
                'id' => 174,
                'code' => 14,
                'name' => 'KABUPATEN PURWAKARTA',
                'province_code' => 32,
            ),
            174 => 
            array (
                'id' => 175,
                'code' => 15,
                'name' => 'KABUPATEN KARAWANG',
                'province_code' => 32,
            ),
            175 => 
            array (
                'id' => 176,
                'code' => 16,
                'name' => 'KABUPATEN BEKASI',
                'province_code' => 32,
            ),
            176 => 
            array (
                'id' => 177,
                'code' => 17,
                'name' => 'KABUPATEN BANDUNG BARAT',
                'province_code' => 32,
            ),
            177 => 
            array (
                'id' => 178,
                'code' => 18,
                'name' => 'KABUPATEN PANGANDARAN',
                'province_code' => 32,
            ),
            178 => 
            array (
                'id' => 179,
                'code' => 71,
                'name' => 'KOTA BOGOR',
                'province_code' => 32,
            ),
            179 => 
            array (
                'id' => 180,
                'code' => 72,
                'name' => 'KOTA SUKABUMI',
                'province_code' => 32,
            ),
            180 => 
            array (
                'id' => 181,
                'code' => 73,
                'name' => 'KOTA BANDUNG',
                'province_code' => 32,
            ),
            181 => 
            array (
                'id' => 182,
                'code' => 74,
                'name' => 'KOTA CIREBON',
                'province_code' => 32,
            ),
            182 => 
            array (
                'id' => 183,
                'code' => 75,
                'name' => 'KOTA BEKASI',
                'province_code' => 32,
            ),
            183 => 
            array (
                'id' => 184,
                'code' => 76,
                'name' => 'KOTA DEPOK',
                'province_code' => 32,
            ),
            184 => 
            array (
                'id' => 185,
                'code' => 77,
                'name' => 'KOTA CIMAHI',
                'province_code' => 32,
            ),
            185 => 
            array (
                'id' => 186,
                'code' => 78,
                'name' => 'KOTA TASIKMALAYA',
                'province_code' => 32,
            ),
            186 => 
            array (
                'id' => 187,
                'code' => 79,
                'name' => 'KOTA BANJAR',
                'province_code' => 32,
            ),
            187 => 
            array (
                'id' => 188,
                'code' => 1,
                'name' => 'KABUPATEN CILACAP',
                'province_code' => 33,
            ),
            188 => 
            array (
                'id' => 189,
                'code' => 2,
                'name' => 'KABUPATEN BANYUMAS',
                'province_code' => 33,
            ),
            189 => 
            array (
                'id' => 190,
                'code' => 3,
                'name' => 'KABUPATEN PURBALINGGA',
                'province_code' => 33,
            ),
            190 => 
            array (
                'id' => 191,
                'code' => 4,
                'name' => 'KABUPATEN BANJARNEGARA',
                'province_code' => 33,
            ),
            191 => 
            array (
                'id' => 192,
                'code' => 5,
                'name' => 'KABUPATEN KEBUMEN',
                'province_code' => 33,
            ),
            192 => 
            array (
                'id' => 193,
                'code' => 6,
                'name' => 'KABUPATEN PURWOREJO',
                'province_code' => 33,
            ),
            193 => 
            array (
                'id' => 194,
                'code' => 7,
                'name' => 'KABUPATEN WONOSOBO',
                'province_code' => 33,
            ),
            194 => 
            array (
                'id' => 195,
                'code' => 8,
                'name' => 'KABUPATEN MAGELANG',
                'province_code' => 33,
            ),
            195 => 
            array (
                'id' => 196,
                'code' => 9,
                'name' => 'KABUPATEN BOYOLALI',
                'province_code' => 33,
            ),
            196 => 
            array (
                'id' => 197,
                'code' => 10,
                'name' => 'KABUPATEN KLATEN',
                'province_code' => 33,
            ),
            197 => 
            array (
                'id' => 198,
                'code' => 11,
                'name' => 'KABUPATEN SUKOHARJO',
                'province_code' => 33,
            ),
            198 => 
            array (
                'id' => 199,
                'code' => 12,
                'name' => 'KABUPATEN WONOGIRI',
                'province_code' => 33,
            ),
            199 => 
            array (
                'id' => 200,
                'code' => 13,
                'name' => 'KABUPATEN KARANGANYAR',
                'province_code' => 33,
            ),
            200 => 
            array (
                'id' => 201,
                'code' => 14,
                'name' => 'KABUPATEN SRAGEN',
                'province_code' => 33,
            ),
            201 => 
            array (
                'id' => 202,
                'code' => 15,
                'name' => 'KABUPATEN GROBOGAN',
                'province_code' => 33,
            ),
            202 => 
            array (
                'id' => 203,
                'code' => 16,
                'name' => 'KABUPATEN BLORA',
                'province_code' => 33,
            ),
            203 => 
            array (
                'id' => 204,
                'code' => 17,
                'name' => 'KABUPATEN REMBANG',
                'province_code' => 33,
            ),
            204 => 
            array (
                'id' => 205,
                'code' => 18,
                'name' => 'KABUPATEN PATI',
                'province_code' => 33,
            ),
            205 => 
            array (
                'id' => 206,
                'code' => 19,
                'name' => 'KABUPATEN KUDUS',
                'province_code' => 33,
            ),
            206 => 
            array (
                'id' => 207,
                'code' => 20,
                'name' => 'KABUPATEN JEPARA',
                'province_code' => 33,
            ),
            207 => 
            array (
                'id' => 208,
                'code' => 21,
                'name' => 'KABUPATEN DEMAK',
                'province_code' => 33,
            ),
            208 => 
            array (
                'id' => 209,
                'code' => 22,
                'name' => 'KABUPATEN SEMARANG',
                'province_code' => 33,
            ),
            209 => 
            array (
                'id' => 210,
                'code' => 23,
                'name' => 'KABUPATEN TEMANGGUNG',
                'province_code' => 33,
            ),
            210 => 
            array (
                'id' => 211,
                'code' => 24,
                'name' => 'KABUPATEN KENDAL',
                'province_code' => 33,
            ),
            211 => 
            array (
                'id' => 212,
                'code' => 25,
                'name' => 'KABUPATEN BATANG',
                'province_code' => 33,
            ),
            212 => 
            array (
                'id' => 213,
                'code' => 26,
                'name' => 'KABUPATEN PEKALONGAN',
                'province_code' => 33,
            ),
            213 => 
            array (
                'id' => 214,
                'code' => 27,
                'name' => 'KABUPATEN PEMALANG',
                'province_code' => 33,
            ),
            214 => 
            array (
                'id' => 215,
                'code' => 28,
                'name' => 'KABUPATEN TEGAL',
                'province_code' => 33,
            ),
            215 => 
            array (
                'id' => 216,
                'code' => 29,
                'name' => 'KABUPATEN BREBES',
                'province_code' => 33,
            ),
            216 => 
            array (
                'id' => 217,
                'code' => 71,
                'name' => 'KOTA MAGELANG',
                'province_code' => 33,
            ),
            217 => 
            array (
                'id' => 218,
                'code' => 72,
                'name' => 'KOTA SURAKARTA',
                'province_code' => 33,
            ),
            218 => 
            array (
                'id' => 219,
                'code' => 73,
                'name' => 'KOTA SALATIGA',
                'province_code' => 33,
            ),
            219 => 
            array (
                'id' => 220,
                'code' => 74,
                'name' => 'KOTA SEMARANG',
                'province_code' => 33,
            ),
            220 => 
            array (
                'id' => 221,
                'code' => 75,
                'name' => 'KOTA PEKALONGAN',
                'province_code' => 33,
            ),
            221 => 
            array (
                'id' => 222,
                'code' => 76,
                'name' => 'KOTA TEGAL',
                'province_code' => 33,
            ),
            222 => 
            array (
                'id' => 223,
                'code' => 1,
                'name' => 'KABUPATEN KULON PROGO',
                'province_code' => 34,
            ),
            223 => 
            array (
                'id' => 224,
                'code' => 2,
                'name' => 'KABUPATEN BANTUL',
                'province_code' => 34,
            ),
            224 => 
            array (
                'id' => 225,
                'code' => 3,
                'name' => 'KABUPATEN GUNUNGKIDUL',
                'province_code' => 34,
            ),
            225 => 
            array (
                'id' => 226,
                'code' => 4,
                'name' => 'KABUPATEN SLEMAN',
                'province_code' => 34,
            ),
            226 => 
            array (
                'id' => 227,
                'code' => 71,
                'name' => 'KOTA YOGYAKARTA',
                'province_code' => 34,
            ),
            227 => 
            array (
                'id' => 228,
                'code' => 1,
                'name' => 'KABUPATEN PACITAN',
                'province_code' => 35,
            ),
            228 => 
            array (
                'id' => 229,
                'code' => 2,
                'name' => 'KABUPATEN PONOROGO',
                'province_code' => 35,
            ),
            229 => 
            array (
                'id' => 230,
                'code' => 3,
                'name' => 'KABUPATEN TRENGGALEK',
                'province_code' => 35,
            ),
            230 => 
            array (
                'id' => 231,
                'code' => 4,
                'name' => 'KABUPATEN TULUNGAGUNG',
                'province_code' => 35,
            ),
            231 => 
            array (
                'id' => 232,
                'code' => 5,
                'name' => 'KABUPATEN BLITAR',
                'province_code' => 35,
            ),
            232 => 
            array (
                'id' => 233,
                'code' => 6,
                'name' => 'KABUPATEN KEDIRI',
                'province_code' => 35,
            ),
            233 => 
            array (
                'id' => 234,
                'code' => 7,
                'name' => 'KABUPATEN MALANG',
                'province_code' => 35,
            ),
            234 => 
            array (
                'id' => 235,
                'code' => 8,
                'name' => 'KABUPATEN LUMAJANG',
                'province_code' => 35,
            ),
            235 => 
            array (
                'id' => 236,
                'code' => 9,
                'name' => 'KABUPATEN JEMBER',
                'province_code' => 35,
            ),
            236 => 
            array (
                'id' => 237,
                'code' => 10,
                'name' => 'KABUPATEN BANYUWANGI',
                'province_code' => 35,
            ),
            237 => 
            array (
                'id' => 238,
                'code' => 11,
                'name' => 'KABUPATEN BONDOWOSO',
                'province_code' => 35,
            ),
            238 => 
            array (
                'id' => 239,
                'code' => 12,
                'name' => 'KABUPATEN SITUBONDO',
                'province_code' => 35,
            ),
            239 => 
            array (
                'id' => 240,
                'code' => 13,
                'name' => 'KABUPATEN PROBOLINGGO',
                'province_code' => 35,
            ),
            240 => 
            array (
                'id' => 241,
                'code' => 14,
                'name' => 'KABUPATEN PASURUAN',
                'province_code' => 35,
            ),
            241 => 
            array (
                'id' => 242,
                'code' => 15,
                'name' => 'KABUPATEN SIDOARJO',
                'province_code' => 35,
            ),
            242 => 
            array (
                'id' => 243,
                'code' => 16,
                'name' => 'KABUPATEN MOJOKERTO',
                'province_code' => 35,
            ),
            243 => 
            array (
                'id' => 244,
                'code' => 17,
                'name' => 'KABUPATEN JOMBANG',
                'province_code' => 35,
            ),
            244 => 
            array (
                'id' => 245,
                'code' => 18,
                'name' => 'KABUPATEN NGANJUK',
                'province_code' => 35,
            ),
            245 => 
            array (
                'id' => 246,
                'code' => 19,
                'name' => 'KABUPATEN MADIUN',
                'province_code' => 35,
            ),
            246 => 
            array (
                'id' => 247,
                'code' => 20,
                'name' => 'KABUPATEN MAGETAN',
                'province_code' => 35,
            ),
            247 => 
            array (
                'id' => 248,
                'code' => 21,
                'name' => 'KABUPATEN NGAWI',
                'province_code' => 35,
            ),
            248 => 
            array (
                'id' => 249,
                'code' => 22,
                'name' => 'KABUPATEN BOJONEGORO',
                'province_code' => 35,
            ),
            249 => 
            array (
                'id' => 250,
                'code' => 23,
                'name' => 'KABUPATEN TUBAN',
                'province_code' => 35,
            ),
            250 => 
            array (
                'id' => 251,
                'code' => 24,
                'name' => 'KABUPATEN LAMONGAN',
                'province_code' => 35,
            ),
            251 => 
            array (
                'id' => 252,
                'code' => 25,
                'name' => 'KABUPATEN GRESIK',
                'province_code' => 35,
            ),
            252 => 
            array (
                'id' => 253,
                'code' => 26,
                'name' => 'KABUPATEN BANGKALAN',
                'province_code' => 35,
            ),
            253 => 
            array (
                'id' => 254,
                'code' => 27,
                'name' => 'KABUPATEN SAMPANG',
                'province_code' => 35,
            ),
            254 => 
            array (
                'id' => 255,
                'code' => 28,
                'name' => 'KABUPATEN PAMEKASAN',
                'province_code' => 35,
            ),
            255 => 
            array (
                'id' => 256,
                'code' => 29,
                'name' => 'KABUPATEN SUMENEP',
                'province_code' => 35,
            ),
            256 => 
            array (
                'id' => 257,
                'code' => 71,
                'name' => 'KOTA KEDIRI',
                'province_code' => 35,
            ),
            257 => 
            array (
                'id' => 258,
                'code' => 72,
                'name' => 'KOTA BLITAR',
                'province_code' => 35,
            ),
            258 => 
            array (
                'id' => 259,
                'code' => 73,
                'name' => 'KOTA MALANG',
                'province_code' => 35,
            ),
            259 => 
            array (
                'id' => 260,
                'code' => 74,
                'name' => 'KOTA PROBOLINGGO',
                'province_code' => 35,
            ),
            260 => 
            array (
                'id' => 261,
                'code' => 75,
                'name' => 'KOTA PASURUAN',
                'province_code' => 35,
            ),
            261 => 
            array (
                'id' => 262,
                'code' => 76,
                'name' => 'KOTA MOJOKERTO',
                'province_code' => 35,
            ),
            262 => 
            array (
                'id' => 263,
                'code' => 77,
                'name' => 'KOTA MADIUN',
                'province_code' => 35,
            ),
            263 => 
            array (
                'id' => 264,
                'code' => 78,
                'name' => 'KOTA SURABAYA',
                'province_code' => 35,
            ),
            264 => 
            array (
                'id' => 265,
                'code' => 79,
                'name' => 'KOTA BATU',
                'province_code' => 35,
            ),
            265 => 
            array (
                'id' => 266,
                'code' => 1,
                'name' => 'KABUPATEN PANDEGLANG',
                'province_code' => 36,
            ),
            266 => 
            array (
                'id' => 267,
                'code' => 2,
                'name' => 'KABUPATEN LEBAK',
                'province_code' => 36,
            ),
            267 => 
            array (
                'id' => 268,
                'code' => 3,
                'name' => 'KABUPATEN TANGERANG',
                'province_code' => 36,
            ),
            268 => 
            array (
                'id' => 269,
                'code' => 4,
                'name' => 'KABUPATEN SERANG',
                'province_code' => 36,
            ),
            269 => 
            array (
                'id' => 270,
                'code' => 71,
                'name' => 'KOTA TANGERANG',
                'province_code' => 36,
            ),
            270 => 
            array (
                'id' => 271,
                'code' => 72,
                'name' => 'KOTA CILEGON',
                'province_code' => 36,
            ),
            271 => 
            array (
                'id' => 272,
                'code' => 73,
                'name' => 'KOTA SERANG',
                'province_code' => 36,
            ),
            272 => 
            array (
                'id' => 273,
                'code' => 74,
                'name' => 'KOTA TANGERANG SELATAN',
                'province_code' => 36,
            ),
            273 => 
            array (
                'id' => 274,
                'code' => 1,
                'name' => 'KABUPATEN JEMBRANA',
                'province_code' => 51,
            ),
            274 => 
            array (
                'id' => 275,
                'code' => 2,
                'name' => 'KABUPATEN TABANAN',
                'province_code' => 51,
            ),
            275 => 
            array (
                'id' => 276,
                'code' => 3,
                'name' => 'KABUPATEN BADUNG',
                'province_code' => 51,
            ),
            276 => 
            array (
                'id' => 277,
                'code' => 4,
                'name' => 'KABUPATEN GIANYAR',
                'province_code' => 51,
            ),
            277 => 
            array (
                'id' => 278,
                'code' => 5,
                'name' => 'KABUPATEN KLUNGKUNG',
                'province_code' => 51,
            ),
            278 => 
            array (
                'id' => 279,
                'code' => 6,
                'name' => 'KABUPATEN BANGLI',
                'province_code' => 51,
            ),
            279 => 
            array (
                'id' => 280,
                'code' => 7,
                'name' => 'KABUPATEN KARANGASEM',
                'province_code' => 51,
            ),
            280 => 
            array (
                'id' => 281,
                'code' => 8,
                'name' => 'KABUPATEN BULELENG',
                'province_code' => 51,
            ),
            281 => 
            array (
                'id' => 282,
                'code' => 71,
                'name' => 'KOTA DENPASAR',
                'province_code' => 51,
            ),
            282 => 
            array (
                'id' => 283,
                'code' => 1,
                'name' => 'KABUPATEN LOMBOK BARAT',
                'province_code' => 52,
            ),
            283 => 
            array (
                'id' => 284,
                'code' => 2,
                'name' => 'KABUPATEN LOMBOK TENGAH',
                'province_code' => 52,
            ),
            284 => 
            array (
                'id' => 285,
                'code' => 3,
                'name' => 'KABUPATEN LOMBOK TIMUR',
                'province_code' => 52,
            ),
            285 => 
            array (
                'id' => 286,
                'code' => 4,
                'name' => 'KABUPATEN SUMBAWA',
                'province_code' => 52,
            ),
            286 => 
            array (
                'id' => 287,
                'code' => 5,
                'name' => 'KABUPATEN DOMPU',
                'province_code' => 52,
            ),
            287 => 
            array (
                'id' => 288,
                'code' => 6,
                'name' => 'KABUPATEN BIMA',
                'province_code' => 52,
            ),
            288 => 
            array (
                'id' => 289,
                'code' => 7,
                'name' => 'KABUPATEN SUMBAWA BARAT',
                'province_code' => 52,
            ),
            289 => 
            array (
                'id' => 290,
                'code' => 8,
                'name' => 'KABUPATEN LOMBOK UTARA',
                'province_code' => 52,
            ),
            290 => 
            array (
                'id' => 291,
                'code' => 71,
                'name' => 'KOTA MATARAM',
                'province_code' => 52,
            ),
            291 => 
            array (
                'id' => 292,
                'code' => 72,
                'name' => 'KOTA BIMA',
                'province_code' => 52,
            ),
            292 => 
            array (
                'id' => 293,
                'code' => 1,
                'name' => 'KABUPATEN SUMBA BARAT',
                'province_code' => 53,
            ),
            293 => 
            array (
                'id' => 294,
                'code' => 2,
                'name' => 'KABUPATEN SUMBA TIMUR',
                'province_code' => 53,
            ),
            294 => 
            array (
                'id' => 295,
                'code' => 3,
                'name' => 'KABUPATEN KUPANG',
                'province_code' => 53,
            ),
            295 => 
            array (
                'id' => 296,
                'code' => 4,
                'name' => 'KABUPATEN TIMOR TENGAH SELATAN',
                'province_code' => 53,
            ),
            296 => 
            array (
                'id' => 297,
                'code' => 5,
                'name' => 'KABUPATEN TIMOR TENGAH UTARA',
                'province_code' => 53,
            ),
            297 => 
            array (
                'id' => 298,
                'code' => 6,
                'name' => 'KABUPATEN BELU',
                'province_code' => 53,
            ),
            298 => 
            array (
                'id' => 299,
                'code' => 7,
                'name' => 'KABUPATEN ALOR',
                'province_code' => 53,
            ),
            299 => 
            array (
                'id' => 300,
                'code' => 8,
                'name' => 'KABUPATEN LEMBATA',
                'province_code' => 53,
            ),
            300 => 
            array (
                'id' => 301,
                'code' => 9,
                'name' => 'KABUPATEN FLORES TIMUR',
                'province_code' => 53,
            ),
            301 => 
            array (
                'id' => 302,
                'code' => 10,
                'name' => 'KABUPATEN SIKKA',
                'province_code' => 53,
            ),
            302 => 
            array (
                'id' => 303,
                'code' => 11,
                'name' => 'KABUPATEN ENDE',
                'province_code' => 53,
            ),
            303 => 
            array (
                'id' => 304,
                'code' => 12,
                'name' => 'KABUPATEN NGADA',
                'province_code' => 53,
            ),
            304 => 
            array (
                'id' => 305,
                'code' => 13,
                'name' => 'KABUPATEN MANGGARAI',
                'province_code' => 53,
            ),
            305 => 
            array (
                'id' => 306,
                'code' => 14,
                'name' => 'KABUPATEN ROTE NDAO',
                'province_code' => 53,
            ),
            306 => 
            array (
                'id' => 307,
                'code' => 15,
                'name' => 'KABUPATEN MANGGARAI BARAT',
                'province_code' => 53,
            ),
            307 => 
            array (
                'id' => 308,
                'code' => 16,
                'name' => 'KABUPATEN SUMBA TENGAH',
                'province_code' => 53,
            ),
            308 => 
            array (
                'id' => 309,
                'code' => 17,
                'name' => 'KABUPATEN SUMBA BARAT DAYA',
                'province_code' => 53,
            ),
            309 => 
            array (
                'id' => 310,
                'code' => 18,
                'name' => 'KABUPATEN NAGEKEO',
                'province_code' => 53,
            ),
            310 => 
            array (
                'id' => 311,
                'code' => 19,
                'name' => 'KABUPATEN MANGGARAI TIMUR',
                'province_code' => 53,
            ),
            311 => 
            array (
                'id' => 312,
                'code' => 20,
                'name' => 'KABUPATEN SABU RAIJUA',
                'province_code' => 53,
            ),
            312 => 
            array (
                'id' => 313,
                'code' => 21,
                'name' => 'KABUPATEN MALAKA',
                'province_code' => 53,
            ),
            313 => 
            array (
                'id' => 314,
                'code' => 71,
                'name' => 'KOTA KUPANG',
                'province_code' => 53,
            ),
            314 => 
            array (
                'id' => 315,
                'code' => 1,
                'name' => 'KABUPATEN SAMBAS',
                'province_code' => 61,
            ),
            315 => 
            array (
                'id' => 316,
                'code' => 2,
                'name' => 'KABUPATEN BENGKAYANG',
                'province_code' => 61,
            ),
            316 => 
            array (
                'id' => 317,
                'code' => 3,
                'name' => 'KABUPATEN LANDAK',
                'province_code' => 61,
            ),
            317 => 
            array (
                'id' => 318,
                'code' => 4,
                'name' => 'KABUPATEN MEMPAWAH',
                'province_code' => 61,
            ),
            318 => 
            array (
                'id' => 319,
                'code' => 5,
                'name' => 'KABUPATEN SANGGAU',
                'province_code' => 61,
            ),
            319 => 
            array (
                'id' => 320,
                'code' => 6,
                'name' => 'KABUPATEN KETAPANG',
                'province_code' => 61,
            ),
            320 => 
            array (
                'id' => 321,
                'code' => 7,
                'name' => 'KABUPATEN SINTANG',
                'province_code' => 61,
            ),
            321 => 
            array (
                'id' => 322,
                'code' => 8,
                'name' => 'KABUPATEN KAPUAS HULU',
                'province_code' => 61,
            ),
            322 => 
            array (
                'id' => 323,
                'code' => 9,
                'name' => 'KABUPATEN SEKADAU',
                'province_code' => 61,
            ),
            323 => 
            array (
                'id' => 324,
                'code' => 10,
                'name' => 'KABUPATEN MELAWI',
                'province_code' => 61,
            ),
            324 => 
            array (
                'id' => 325,
                'code' => 11,
                'name' => 'KABUPATEN KAYONG UTARA',
                'province_code' => 61,
            ),
            325 => 
            array (
                'id' => 326,
                'code' => 12,
                'name' => 'KABUPATEN KUBU RAYA',
                'province_code' => 61,
            ),
            326 => 
            array (
                'id' => 327,
                'code' => 71,
                'name' => 'KOTA PONTIANAK',
                'province_code' => 61,
            ),
            327 => 
            array (
                'id' => 328,
                'code' => 72,
                'name' => 'KOTA SINGKAWANG',
                'province_code' => 61,
            ),
            328 => 
            array (
                'id' => 329,
                'code' => 1,
                'name' => 'KABUPATEN KOTAWARINGIN BARAT',
                'province_code' => 62,
            ),
            329 => 
            array (
                'id' => 330,
                'code' => 2,
                'name' => 'KABUPATEN KOTAWARINGIN TIMUR',
                'province_code' => 62,
            ),
            330 => 
            array (
                'id' => 331,
                'code' => 3,
                'name' => 'KABUPATEN KAPUAS',
                'province_code' => 62,
            ),
            331 => 
            array (
                'id' => 332,
                'code' => 4,
                'name' => 'KABUPATEN BARITO SELATAN',
                'province_code' => 62,
            ),
            332 => 
            array (
                'id' => 333,
                'code' => 5,
                'name' => 'KABUPATEN BARITO UTARA',
                'province_code' => 62,
            ),
            333 => 
            array (
                'id' => 334,
                'code' => 6,
                'name' => 'KABUPATEN SUKAMARA',
                'province_code' => 62,
            ),
            334 => 
            array (
                'id' => 335,
                'code' => 7,
                'name' => 'KABUPATEN LAMANDAU',
                'province_code' => 62,
            ),
            335 => 
            array (
                'id' => 336,
                'code' => 8,
                'name' => 'KABUPATEN SERUYAN',
                'province_code' => 62,
            ),
            336 => 
            array (
                'id' => 337,
                'code' => 9,
                'name' => 'KABUPATEN KATINGAN',
                'province_code' => 62,
            ),
            337 => 
            array (
                'id' => 338,
                'code' => 10,
                'name' => 'KABUPATEN PULANG PISAU',
                'province_code' => 62,
            ),
            338 => 
            array (
                'id' => 339,
                'code' => 11,
                'name' => 'KABUPATEN GUNUNG MAS',
                'province_code' => 62,
            ),
            339 => 
            array (
                'id' => 340,
                'code' => 12,
                'name' => 'KABUPATEN BARITO TIMUR',
                'province_code' => 62,
            ),
            340 => 
            array (
                'id' => 341,
                'code' => 13,
                'name' => 'KABUPATEN MURUNG RAYA',
                'province_code' => 62,
            ),
            341 => 
            array (
                'id' => 342,
                'code' => 71,
                'name' => 'KOTA PALANGKA RAYA',
                'province_code' => 62,
            ),
            342 => 
            array (
                'id' => 343,
                'code' => 1,
                'name' => 'KABUPATEN TANAH LAUT',
                'province_code' => 63,
            ),
            343 => 
            array (
                'id' => 344,
                'code' => 2,
                'name' => 'KABUPATEN KOTABARU',
                'province_code' => 63,
            ),
            344 => 
            array (
                'id' => 345,
                'code' => 3,
                'name' => 'KABUPATEN BANJAR',
                'province_code' => 63,
            ),
            345 => 
            array (
                'id' => 346,
                'code' => 4,
                'name' => 'KABUPATEN BARITO KUALA',
                'province_code' => 63,
            ),
            346 => 
            array (
                'id' => 347,
                'code' => 5,
                'name' => 'KABUPATEN TAPIN',
                'province_code' => 63,
            ),
            347 => 
            array (
                'id' => 348,
                'code' => 6,
                'name' => 'KABUPATEN HULU SUNGAI SELATAN',
                'province_code' => 63,
            ),
            348 => 
            array (
                'id' => 349,
                'code' => 7,
                'name' => 'KABUPATEN HULU SUNGAI TENGAH',
                'province_code' => 63,
            ),
            349 => 
            array (
                'id' => 350,
                'code' => 8,
                'name' => 'KABUPATEN HULU SUNGAI UTARA',
                'province_code' => 63,
            ),
            350 => 
            array (
                'id' => 351,
                'code' => 9,
                'name' => 'KABUPATEN TABALONG',
                'province_code' => 63,
            ),
            351 => 
            array (
                'id' => 352,
                'code' => 10,
                'name' => 'KABUPATEN TANAH BUMBU',
                'province_code' => 63,
            ),
            352 => 
            array (
                'id' => 353,
                'code' => 11,
                'name' => 'KABUPATEN BALANGAN',
                'province_code' => 63,
            ),
            353 => 
            array (
                'id' => 354,
                'code' => 71,
                'name' => 'KOTA BANJARMASIN',
                'province_code' => 63,
            ),
            354 => 
            array (
                'id' => 355,
                'code' => 72,
                'name' => 'KOTA BANJAR BARU',
                'province_code' => 63,
            ),
            355 => 
            array (
                'id' => 356,
                'code' => 1,
                'name' => 'KABUPATEN PASER',
                'province_code' => 64,
            ),
            356 => 
            array (
                'id' => 357,
                'code' => 2,
                'name' => 'KABUPATEN KUTAI BARAT',
                'province_code' => 64,
            ),
            357 => 
            array (
                'id' => 358,
                'code' => 3,
                'name' => 'KABUPATEN KUTAI KARTANEGARA',
                'province_code' => 64,
            ),
            358 => 
            array (
                'id' => 359,
                'code' => 4,
                'name' => 'KABUPATEN KUTAI TIMUR',
                'province_code' => 64,
            ),
            359 => 
            array (
                'id' => 360,
                'code' => 5,
                'name' => 'KABUPATEN BERAU',
                'province_code' => 64,
            ),
            360 => 
            array (
                'id' => 361,
                'code' => 9,
                'name' => 'KABUPATEN PENAJAM PASER UTARA',
                'province_code' => 64,
            ),
            361 => 
            array (
                'id' => 362,
                'code' => 11,
                'name' => 'KABUPATEN MAHAKAM ULU',
                'province_code' => 64,
            ),
            362 => 
            array (
                'id' => 363,
                'code' => 71,
                'name' => 'KOTA BALIKPAPAN',
                'province_code' => 64,
            ),
            363 => 
            array (
                'id' => 364,
                'code' => 72,
                'name' => 'KOTA SAMARINDA',
                'province_code' => 64,
            ),
            364 => 
            array (
                'id' => 365,
                'code' => 74,
                'name' => 'KOTA BONTANG',
                'province_code' => 64,
            ),
            365 => 
            array (
                'id' => 366,
                'code' => 1,
                'name' => 'KABUPATEN MALINAU',
                'province_code' => 65,
            ),
            366 => 
            array (
                'id' => 367,
                'code' => 2,
                'name' => 'KABUPATEN BULUNGAN',
                'province_code' => 65,
            ),
            367 => 
            array (
                'id' => 368,
                'code' => 3,
                'name' => 'KABUPATEN TANA TIDUNG',
                'province_code' => 65,
            ),
            368 => 
            array (
                'id' => 369,
                'code' => 4,
                'name' => 'KABUPATEN NUNUKAN',
                'province_code' => 65,
            ),
            369 => 
            array (
                'id' => 370,
                'code' => 71,
                'name' => 'KOTA TARAKAN',
                'province_code' => 65,
            ),
            370 => 
            array (
                'id' => 371,
                'code' => 1,
                'name' => 'KABUPATEN BOLAANG MONGONDOW',
                'province_code' => 71,
            ),
            371 => 
            array (
                'id' => 372,
                'code' => 2,
                'name' => 'KABUPATEN MINAHASA',
                'province_code' => 71,
            ),
            372 => 
            array (
                'id' => 373,
                'code' => 3,
                'name' => 'KABUPATEN KEPULAUAN SANGIHE',
                'province_code' => 71,
            ),
            373 => 
            array (
                'id' => 374,
                'code' => 4,
                'name' => 'KABUPATEN KEPULAUAN TALAUD',
                'province_code' => 71,
            ),
            374 => 
            array (
                'id' => 375,
                'code' => 5,
                'name' => 'KABUPATEN MINAHASA SELATAN',
                'province_code' => 71,
            ),
            375 => 
            array (
                'id' => 376,
                'code' => 6,
                'name' => 'KABUPATEN MINAHASA UTARA',
                'province_code' => 71,
            ),
            376 => 
            array (
                'id' => 377,
                'code' => 7,
                'name' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
                'province_code' => 71,
            ),
            377 => 
            array (
                'id' => 378,
                'code' => 8,
                'name' => 'KABUPATEN SIAU TAGULANDANG BIARO',
                'province_code' => 71,
            ),
            378 => 
            array (
                'id' => 379,
                'code' => 9,
                'name' => 'KABUPATEN MINAHASA TENGGARA',
                'province_code' => 71,
            ),
            379 => 
            array (
                'id' => 380,
                'code' => 10,
                'name' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
                'province_code' => 71,
            ),
            380 => 
            array (
                'id' => 381,
                'code' => 11,
                'name' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
                'province_code' => 71,
            ),
            381 => 
            array (
                'id' => 382,
                'code' => 71,
                'name' => 'KOTA MANADO',
                'province_code' => 71,
            ),
            382 => 
            array (
                'id' => 383,
                'code' => 72,
                'name' => 'KOTA BITUNG',
                'province_code' => 71,
            ),
            383 => 
            array (
                'id' => 384,
                'code' => 73,
                'name' => 'KOTA TOMOHON',
                'province_code' => 71,
            ),
            384 => 
            array (
                'id' => 385,
                'code' => 74,
                'name' => 'KOTA KOTAMOBAGU',
                'province_code' => 71,
            ),
            385 => 
            array (
                'id' => 386,
                'code' => 1,
                'name' => 'KABUPATEN BANGGAI KEPULAUAN',
                'province_code' => 72,
            ),
            386 => 
            array (
                'id' => 387,
                'code' => 2,
                'name' => 'KABUPATEN BANGGAI',
                'province_code' => 72,
            ),
            387 => 
            array (
                'id' => 388,
                'code' => 3,
                'name' => 'KABUPATEN MOROWALI',
                'province_code' => 72,
            ),
            388 => 
            array (
                'id' => 389,
                'code' => 4,
                'name' => 'KABUPATEN POSO',
                'province_code' => 72,
            ),
            389 => 
            array (
                'id' => 390,
                'code' => 5,
                'name' => 'KABUPATEN DONGGALA',
                'province_code' => 72,
            ),
            390 => 
            array (
                'id' => 391,
                'code' => 6,
                'name' => 'KABUPATEN TOLI-TOLI',
                'province_code' => 72,
            ),
            391 => 
            array (
                'id' => 392,
                'code' => 7,
                'name' => 'KABUPATEN BUOL',
                'province_code' => 72,
            ),
            392 => 
            array (
                'id' => 393,
                'code' => 8,
                'name' => 'KABUPATEN PARIGI MOUTONG',
                'province_code' => 72,
            ),
            393 => 
            array (
                'id' => 394,
                'code' => 9,
                'name' => 'KABUPATEN TOJO UNA-UNA',
                'province_code' => 72,
            ),
            394 => 
            array (
                'id' => 395,
                'code' => 10,
                'name' => 'KABUPATEN SIGI',
                'province_code' => 72,
            ),
            395 => 
            array (
                'id' => 396,
                'code' => 11,
                'name' => 'KABUPATEN BANGGAI LAUT',
                'province_code' => 72,
            ),
            396 => 
            array (
                'id' => 397,
                'code' => 12,
                'name' => 'KABUPATEN MOROWALI UTARA',
                'province_code' => 72,
            ),
            397 => 
            array (
                'id' => 398,
                'code' => 71,
                'name' => 'KOTA PALU',
                'province_code' => 72,
            ),
            398 => 
            array (
                'id' => 399,
                'code' => 1,
                'name' => 'KABUPATEN KEPULAUAN SELAYAR',
                'province_code' => 73,
            ),
            399 => 
            array (
                'id' => 400,
                'code' => 2,
                'name' => 'KABUPATEN BULUKUMBA',
                'province_code' => 73,
            ),
            400 => 
            array (
                'id' => 401,
                'code' => 3,
                'name' => 'KABUPATEN BANTAENG',
                'province_code' => 73,
            ),
            401 => 
            array (
                'id' => 402,
                'code' => 4,
                'name' => 'KABUPATEN JENEPONTO',
                'province_code' => 73,
            ),
            402 => 
            array (
                'id' => 403,
                'code' => 5,
                'name' => 'KABUPATEN TAKALAR',
                'province_code' => 73,
            ),
            403 => 
            array (
                'id' => 404,
                'code' => 6,
                'name' => 'KABUPATEN GOWA',
                'province_code' => 73,
            ),
            404 => 
            array (
                'id' => 405,
                'code' => 7,
                'name' => 'KABUPATEN SINJAI',
                'province_code' => 73,
            ),
            405 => 
            array (
                'id' => 406,
                'code' => 8,
                'name' => 'KABUPATEN MAROS',
                'province_code' => 73,
            ),
            406 => 
            array (
                'id' => 407,
                'code' => 9,
                'name' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
                'province_code' => 73,
            ),
            407 => 
            array (
                'id' => 408,
                'code' => 10,
                'name' => 'KABUPATEN BARRU',
                'province_code' => 73,
            ),
            408 => 
            array (
                'id' => 409,
                'code' => 11,
                'name' => 'KABUPATEN BONE',
                'province_code' => 73,
            ),
            409 => 
            array (
                'id' => 410,
                'code' => 12,
                'name' => 'KABUPATEN SOPPENG',
                'province_code' => 73,
            ),
            410 => 
            array (
                'id' => 411,
                'code' => 13,
                'name' => 'KABUPATEN WAJO',
                'province_code' => 73,
            ),
            411 => 
            array (
                'id' => 412,
                'code' => 14,
                'name' => 'KABUPATEN SIDENRENG RAPPANG',
                'province_code' => 73,
            ),
            412 => 
            array (
                'id' => 413,
                'code' => 15,
                'name' => 'KABUPATEN PINRANG',
                'province_code' => 73,
            ),
            413 => 
            array (
                'id' => 414,
                'code' => 16,
                'name' => 'KABUPATEN ENREKANG',
                'province_code' => 73,
            ),
            414 => 
            array (
                'id' => 415,
                'code' => 17,
                'name' => 'KABUPATEN LUWU',
                'province_code' => 73,
            ),
            415 => 
            array (
                'id' => 416,
                'code' => 18,
                'name' => 'KABUPATEN TANA TORAJA',
                'province_code' => 73,
            ),
            416 => 
            array (
                'id' => 417,
                'code' => 22,
                'name' => 'KABUPATEN LUWU UTARA',
                'province_code' => 73,
            ),
            417 => 
            array (
                'id' => 418,
                'code' => 25,
                'name' => 'KABUPATEN LUWU TIMUR',
                'province_code' => 73,
            ),
            418 => 
            array (
                'id' => 419,
                'code' => 26,
                'name' => 'KABUPATEN TORAJA UTARA',
                'province_code' => 73,
            ),
            419 => 
            array (
                'id' => 420,
                'code' => 71,
                'name' => 'KOTA MAKASSAR',
                'province_code' => 73,
            ),
            420 => 
            array (
                'id' => 421,
                'code' => 72,
                'name' => 'KOTA PAREPARE',
                'province_code' => 73,
            ),
            421 => 
            array (
                'id' => 422,
                'code' => 73,
                'name' => 'KOTA PALOPO',
                'province_code' => 73,
            ),
            422 => 
            array (
                'id' => 423,
                'code' => 1,
                'name' => 'KABUPATEN BUTON',
                'province_code' => 74,
            ),
            423 => 
            array (
                'id' => 424,
                'code' => 2,
                'name' => 'KABUPATEN MUNA',
                'province_code' => 74,
            ),
            424 => 
            array (
                'id' => 425,
                'code' => 3,
                'name' => 'KABUPATEN KONAWE',
                'province_code' => 74,
            ),
            425 => 
            array (
                'id' => 426,
                'code' => 4,
                'name' => 'KABUPATEN KOLAKA',
                'province_code' => 74,
            ),
            426 => 
            array (
                'id' => 427,
                'code' => 5,
                'name' => 'KABUPATEN KONAWE SELATAN',
                'province_code' => 74,
            ),
            427 => 
            array (
                'id' => 428,
                'code' => 6,
                'name' => 'KABUPATEN BOMBANA',
                'province_code' => 74,
            ),
            428 => 
            array (
                'id' => 429,
                'code' => 7,
                'name' => 'KABUPATEN WAKATOBI',
                'province_code' => 74,
            ),
            429 => 
            array (
                'id' => 430,
                'code' => 8,
                'name' => 'KABUPATEN KOLAKA UTARA',
                'province_code' => 74,
            ),
            430 => 
            array (
                'id' => 431,
                'code' => 9,
                'name' => 'KABUPATEN BUTON UTARA',
                'province_code' => 74,
            ),
            431 => 
            array (
                'id' => 432,
                'code' => 10,
                'name' => 'KABUPATEN KONAWE UTARA',
                'province_code' => 74,
            ),
            432 => 
            array (
                'id' => 433,
                'code' => 11,
                'name' => 'KABUPATEN KOLAKA TIMUR',
                'province_code' => 74,
            ),
            433 => 
            array (
                'id' => 434,
                'code' => 12,
                'name' => 'KABUPATEN KONAWE KEPULAUAN',
                'province_code' => 74,
            ),
            434 => 
            array (
                'id' => 435,
                'code' => 13,
                'name' => 'KABUPATEN MUNA BARAT',
                'province_code' => 74,
            ),
            435 => 
            array (
                'id' => 436,
                'code' => 14,
                'name' => 'KABUPATEN BUTON TENGAH',
                'province_code' => 74,
            ),
            436 => 
            array (
                'id' => 437,
                'code' => 15,
                'name' => 'KABUPATEN BUTON SELATAN',
                'province_code' => 74,
            ),
            437 => 
            array (
                'id' => 438,
                'code' => 71,
                'name' => 'KOTA KENDARI',
                'province_code' => 74,
            ),
            438 => 
            array (
                'id' => 439,
                'code' => 72,
                'name' => 'KOTA BAUBAU',
                'province_code' => 74,
            ),
            439 => 
            array (
                'id' => 440,
                'code' => 1,
                'name' => 'KABUPATEN BOALEMO',
                'province_code' => 75,
            ),
            440 => 
            array (
                'id' => 441,
                'code' => 2,
                'name' => 'KABUPATEN GORONTALO',
                'province_code' => 75,
            ),
            441 => 
            array (
                'id' => 442,
                'code' => 3,
                'name' => 'KABUPATEN POHUWATO',
                'province_code' => 75,
            ),
            442 => 
            array (
                'id' => 443,
                'code' => 4,
                'name' => 'KABUPATEN BONE BOLANGO',
                'province_code' => 75,
            ),
            443 => 
            array (
                'id' => 444,
                'code' => 5,
                'name' => 'KABUPATEN GORONTALO UTARA',
                'province_code' => 75,
            ),
            444 => 
            array (
                'id' => 445,
                'code' => 71,
                'name' => 'KOTA GORONTALO',
                'province_code' => 75,
            ),
            445 => 
            array (
                'id' => 446,
                'code' => 1,
                'name' => 'KABUPATEN MAJENE',
                'province_code' => 76,
            ),
            446 => 
            array (
                'id' => 447,
                'code' => 2,
                'name' => 'KABUPATEN POLEWALI MANDAR',
                'province_code' => 76,
            ),
            447 => 
            array (
                'id' => 448,
                'code' => 3,
                'name' => 'KABUPATEN MAMASA',
                'province_code' => 76,
            ),
            448 => 
            array (
                'id' => 449,
                'code' => 4,
                'name' => 'KABUPATEN MAMUJU',
                'province_code' => 76,
            ),
            449 => 
            array (
                'id' => 450,
                'code' => 5,
                'name' => 'KABUPATEN PASANGKAYU',
                'province_code' => 76,
            ),
            450 => 
            array (
                'id' => 451,
                'code' => 6,
                'name' => 'KABUPATEN MAMUJU TENGAH',
                'province_code' => 76,
            ),
            451 => 
            array (
                'id' => 452,
                'code' => 1,
                'name' => 'KABUPATEN KEPULAUAN TANIMBAR',
                'province_code' => 81,
            ),
            452 => 
            array (
                'id' => 453,
                'code' => 2,
                'name' => 'KABUPATEN MALUKU TENGGARA',
                'province_code' => 81,
            ),
            453 => 
            array (
                'id' => 454,
                'code' => 3,
                'name' => 'KABUPATEN MALUKU TENGAH',
                'province_code' => 81,
            ),
            454 => 
            array (
                'id' => 455,
                'code' => 4,
                'name' => 'KABUPATEN BURU',
                'province_code' => 81,
            ),
            455 => 
            array (
                'id' => 456,
                'code' => 5,
                'name' => 'KABUPATEN KEPULAUAN ARU',
                'province_code' => 81,
            ),
            456 => 
            array (
                'id' => 457,
                'code' => 6,
                'name' => 'KABUPATEN SERAM BAGIAN BARAT',
                'province_code' => 81,
            ),
            457 => 
            array (
                'id' => 458,
                'code' => 7,
                'name' => 'KABUPATEN SERAM BAGIAN TIMUR',
                'province_code' => 81,
            ),
            458 => 
            array (
                'id' => 459,
                'code' => 8,
                'name' => 'KABUPATEN MALUKU BARAT DAYA',
                'province_code' => 81,
            ),
            459 => 
            array (
                'id' => 460,
                'code' => 9,
                'name' => 'KABUPATEN BURU SELATAN',
                'province_code' => 81,
            ),
            460 => 
            array (
                'id' => 461,
                'code' => 71,
                'name' => 'KOTA AMBON',
                'province_code' => 81,
            ),
            461 => 
            array (
                'id' => 462,
                'code' => 72,
                'name' => 'KOTA TUAL',
                'province_code' => 81,
            ),
            462 => 
            array (
                'id' => 463,
                'code' => 1,
                'name' => 'KABUPATEN HALMAHERA BARAT',
                'province_code' => 82,
            ),
            463 => 
            array (
                'id' => 464,
                'code' => 2,
                'name' => 'KABUPATEN HALMAHERA TENGAH',
                'province_code' => 82,
            ),
            464 => 
            array (
                'id' => 465,
                'code' => 3,
                'name' => 'KABUPATEN KEPULAUAN SULA',
                'province_code' => 82,
            ),
            465 => 
            array (
                'id' => 466,
                'code' => 4,
                'name' => 'KABUPATEN HALMAHERA SELATAN',
                'province_code' => 82,
            ),
            466 => 
            array (
                'id' => 467,
                'code' => 5,
                'name' => 'KABUPATEN HALMAHERA UTARA',
                'province_code' => 82,
            ),
            467 => 
            array (
                'id' => 468,
                'code' => 6,
                'name' => 'KABUPATEN HALMAHERA TIMUR',
                'province_code' => 82,
            ),
            468 => 
            array (
                'id' => 469,
                'code' => 7,
                'name' => 'KABUPATEN PULAU MOROTAI',
                'province_code' => 82,
            ),
            469 => 
            array (
                'id' => 470,
                'code' => 8,
                'name' => 'KABUPATEN PULAU TALIABU',
                'province_code' => 82,
            ),
            470 => 
            array (
                'id' => 471,
                'code' => 71,
                'name' => 'KOTA TERNATE',
                'province_code' => 82,
            ),
            471 => 
            array (
                'id' => 472,
                'code' => 72,
                'name' => 'KOTA TIDORE KEPULAUAN',
                'province_code' => 82,
            ),
            472 => 
            array (
                'id' => 473,
                'code' => 1,
                'name' => 'KABUPATEN FAKFAK',
                'province_code' => 91,
            ),
            473 => 
            array (
                'id' => 474,
                'code' => 2,
                'name' => 'KABUPATEN KAIMANA',
                'province_code' => 91,
            ),
            474 => 
            array (
                'id' => 475,
                'code' => 3,
                'name' => 'KABUPATEN TELUK WONDAMA',
                'province_code' => 91,
            ),
            475 => 
            array (
                'id' => 476,
                'code' => 4,
                'name' => 'KABUPATEN TELUK BINTUNI',
                'province_code' => 91,
            ),
            476 => 
            array (
                'id' => 477,
                'code' => 5,
                'name' => 'KABUPATEN MANOKWARI',
                'province_code' => 91,
            ),
            477 => 
            array (
                'id' => 478,
                'code' => 6,
                'name' => 'KABUPATEN SORONG SELATAN',
                'province_code' => 91,
            ),
            478 => 
            array (
                'id' => 479,
                'code' => 7,
                'name' => 'KABUPATEN SORONG',
                'province_code' => 91,
            ),
            479 => 
            array (
                'id' => 480,
                'code' => 8,
                'name' => 'KABUPATEN RAJA AMPAT',
                'province_code' => 91,
            ),
            480 => 
            array (
                'id' => 481,
                'code' => 9,
                'name' => 'KABUPATEN TAMBRAUW',
                'province_code' => 91,
            ),
            481 => 
            array (
                'id' => 482,
                'code' => 10,
                'name' => 'KABUPATEN MAYBRAT',
                'province_code' => 91,
            ),
            482 => 
            array (
                'id' => 483,
                'code' => 11,
                'name' => 'KABUPATEN MANOKWARI SELATAN',
                'province_code' => 91,
            ),
            483 => 
            array (
                'id' => 484,
                'code' => 12,
                'name' => 'KABUPATEN PEGUNUNGAN ARFAK',
                'province_code' => 91,
            ),
            484 => 
            array (
                'id' => 485,
                'code' => 71,
                'name' => 'KOTA SORONG',
                'province_code' => 91,
            ),
            485 => 
            array (
                'id' => 486,
                'code' => 1,
                'name' => 'KABUPATEN MERAUKE',
                'province_code' => 94,
            ),
            486 => 
            array (
                'id' => 487,
                'code' => 2,
                'name' => 'KABUPATEN JAYAWIJAYA',
                'province_code' => 94,
            ),
            487 => 
            array (
                'id' => 488,
                'code' => 3,
                'name' => 'KABUPATEN JAYAPURA',
                'province_code' => 94,
            ),
            488 => 
            array (
                'id' => 489,
                'code' => 4,
                'name' => 'KABUPATEN NABIRE',
                'province_code' => 94,
            ),
            489 => 
            array (
                'id' => 490,
                'code' => 8,
                'name' => 'KABUPATEN KEPULAUAN YAPEN',
                'province_code' => 94,
            ),
            490 => 
            array (
                'id' => 491,
                'code' => 9,
                'name' => 'KABUPATEN BIAK NUMFOR',
                'province_code' => 94,
            ),
            491 => 
            array (
                'id' => 492,
                'code' => 10,
                'name' => 'KABUPATEN PANIAI',
                'province_code' => 94,
            ),
            492 => 
            array (
                'id' => 493,
                'code' => 11,
                'name' => 'KABUPATEN PUNCAK JAYA',
                'province_code' => 94,
            ),
            493 => 
            array (
                'id' => 494,
                'code' => 12,
                'name' => 'KABUPATEN MIMIKA',
                'province_code' => 94,
            ),
            494 => 
            array (
                'id' => 495,
                'code' => 13,
                'name' => 'KABUPATEN BOVEN DIGOEL',
                'province_code' => 94,
            ),
            495 => 
            array (
                'id' => 496,
                'code' => 14,
                'name' => 'KABUPATEN MAPPI',
                'province_code' => 94,
            ),
            496 => 
            array (
                'id' => 497,
                'code' => 15,
                'name' => 'KABUPATEN ASMAT',
                'province_code' => 94,
            ),
            497 => 
            array (
                'id' => 498,
                'code' => 16,
                'name' => 'KABUPATEN YAHUKIMO',
                'province_code' => 94,
            ),
            498 => 
            array (
                'id' => 499,
                'code' => 17,
                'name' => 'KABUPATEN PEGUNUNGAN BINTANG',
                'province_code' => 94,
            ),
            499 => 
            array (
                'id' => 500,
                'code' => 18,
                'name' => 'KABUPATEN TOLIKARA',
                'province_code' => 94,
            ),
        ));
        DB::table('regencies')->insert(array (
            0 => 
            array (
                'id' => 501,
                'code' => 19,
                'name' => 'KABUPATEN SARMI',
                'province_code' => 94,
            ),
            1 => 
            array (
                'id' => 502,
                'code' => 20,
                'name' => 'KABUPATEN KEEROM',
                'province_code' => 94,
            ),
            2 => 
            array (
                'id' => 503,
                'code' => 26,
                'name' => 'KABUPATEN WAROPEN',
                'province_code' => 94,
            ),
            3 => 
            array (
                'id' => 504,
                'code' => 27,
                'name' => 'KABUPATEN SUPIORI',
                'province_code' => 94,
            ),
            4 => 
            array (
                'id' => 505,
                'code' => 28,
                'name' => 'KABUPATEN MAMBERAMO RAYA',
                'province_code' => 94,
            ),
            5 => 
            array (
                'id' => 506,
                'code' => 29,
                'name' => 'KABUPATEN NDUGA',
                'province_code' => 94,
            ),
            6 => 
            array (
                'id' => 507,
                'code' => 30,
                'name' => 'KABUPATEN LANNY JAYA',
                'province_code' => 94,
            ),
            7 => 
            array (
                'id' => 508,
                'code' => 31,
                'name' => 'KABUPATEN MAMBERAMO TENGAH',
                'province_code' => 94,
            ),
            8 => 
            array (
                'id' => 509,
                'code' => 32,
                'name' => 'KABUPATEN YALIMO',
                'province_code' => 94,
            ),
            9 => 
            array (
                'id' => 510,
                'code' => 33,
                'name' => 'KABUPATEN PUNCAK',
                'province_code' => 94,
            ),
            10 => 
            array (
                'id' => 511,
                'code' => 34,
                'name' => 'KABUPATEN DOGIYAI',
                'province_code' => 94,
            ),
            11 => 
            array (
                'id' => 512,
                'code' => 35,
                'name' => 'KABUPATEN INTAN JAYA',
                'province_code' => 94,
            ),
            12 => 
            array (
                'id' => 513,
                'code' => 36,
                'name' => 'KABUPATEN DEIYAI',
                'province_code' => 94,
            ),
            13 => 
            array (
                'id' => 514,
                'code' => 71,
                'name' => 'KOTA JAYAPURA',
                'province_code' => 94,
            ),
        ));
        
        
    }
}