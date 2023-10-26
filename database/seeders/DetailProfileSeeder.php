<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'no_telp' => '6285785967158',
            'ttl' => '1999-08-05',
            'photo' => 'misteri.png'
        ]);
    }
}
