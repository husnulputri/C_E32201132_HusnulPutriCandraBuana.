<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address'=>'Banyuwangi',
            'nomor_tlp'=>'08xxxxxxx',
            'ttl'=>'2002-09-15',
            'foto'=>'picture.png',
        ]);
    }
}
