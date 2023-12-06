<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '11',
                'name' => 'ACEH',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '12',
                'name' => 'SUMATERA UTARA',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '13',
                'name' => 'SUMATERA BARAT',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '14',
                'name' => 'RIAU',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '15',
                'name' => 'JAMBI',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '16',
                'name' => 'SUMATERA SELATAN',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '17',
                'name' => 'BENGKULU',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '18',
                'name' => 'LAMPUNG',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '19',
                'name' => 'KEPULAUAN BANGKA BELITUNG',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '21',
                'name' => 'KEPULAUAN RIAU',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => '31',
                'name' => 'DKI JAKARTA',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => '32',
                'name' => 'JAWA BARAT',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => '33',
                'name' => 'JAWA TENGAH',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => '34',
                'name' => 'DI YOGYAKARTA',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => '35',
                'name' => 'JAWA TIMUR',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => '36',
                'name' => 'BANTEN',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => '51',
                'name' => 'BALI',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => '52',
                'name' => 'NUSA TENGGARA BARAT',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => '53',
                'name' => 'NUSA TENGGARA TIMUR',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => '61',
                'name' => 'KALIMANTAN BARAT',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => '62',
                'name' => 'KALIMANTAN TENGAH',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => '63',
                'name' => 'KALIMANTAN SELATAN',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => '64',
                'name' => 'KALIMANTAN TIMUR',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => '65',
                'name' => 'KALIMANTAN UTARA',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => '71',
                'name' => 'SULAWESI UTARA',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => '72',
                'name' => 'SULAWESI TENGAH',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => '73',
                'name' => 'SULAWESI SELATAN',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => '74',
                'name' => 'SULAWESI TENGGARA',
            ),
            28 => 
            array (
                'id' => 29,
                'code' => '75',
                'name' => 'GORONTALO',
            ),
            29 => 
            array (
                'id' => 30,
                'code' => '76',
                'name' => 'SULAWESI BARAT',
            ),
            30 => 
            array (
                'id' => 31,
                'code' => '81',
                'name' => 'MALUKU',
            ),
            31 => 
            array (
                'id' => 32,
                'code' => '82',
                'name' => 'MALUKU UTARA',
            ),
            32 => 
            array (
                'id' => 33,
                'code' => '91',
                'name' => 'PAPUA BARAT',
            ),
            33 => 
            array (
                'id' => 34,
                'code' => '94',
                'name' => 'PAPUA',
            ),
        ));
        
        
    }
}