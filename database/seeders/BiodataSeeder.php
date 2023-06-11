<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Biodata;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Biodata::create([
            'nama'  => 'muni',
            'umur'  => '20',
            'agama' => 'islam',
            'pendidikan'    => 'SMA',
            'pekerjaan' => 'IRT',
            'alamat'    => 'jl. Else',
            'nomer_tlpn'    => '082134678',
            'nama_suami'    => 'Budi',
            'umur_suami'    => '24',
            'agama_suami'   => 'islam',
            'pendidikan_suami'  => 'STM',
            'pekerjaan_suami'   => 'PNS',
            'alamat_suami'  => 'jl. Else',
            'nomer_suami'   => '082134678',
        ]);
    }
}
