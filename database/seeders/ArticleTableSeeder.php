<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert(
            [
                'title'=>'OPEC-RUSIA BUNTU, PERANG HARGA MINYAK DIMULAI',
                'slug'=>'opec-rusia-buntu-perang-harga-minyak-dimulai',
                'content'=>'Harga minyak jatuh hingga 29.68 WTI per 9 Maret 2020 PUKUL 13.17 WIB. ',
                'thumbnail'=>'rusia.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'created_by'=>1
            ]
            );
    }
}
