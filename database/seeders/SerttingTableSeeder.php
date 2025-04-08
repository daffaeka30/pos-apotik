<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SerttingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('setting')->insert([
            'id_setting'        => 1,
            'nama_perusahaan'   => 'Apotik',
            'alamat'            => 'Jl. Raya',
            'telepon'           => '08123456789',
            'tipe_nota'         => 1, //kecil 
            'diskon'            => 5,
            'path_logo'         => public_path('image/villa3.png'),
            'path_kartu_member' => public_path('image/member.png'),
        ]);
    }
}
