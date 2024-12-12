<?php

namespace App\Database\Seeds;

use App\Models\Satuan;
use CodeIgniter\Database\Seeder;

class AllInOne extends Seeder
{
    public function run()
    {
        $this->call(KategoriBelajarEkspor::class);
        $this->call(BelajarEkspor::class);
        $this->call(KategoriVidioSeeder::class);
        $this->call(VidioTutorialSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(Buyers::class);
        $this->call(SatuanSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(WebProfileSeeder::class);
        $this->call(ManfaatJoinSeeder::class);
        $this->call(Pengumuman::class);
        $this->call(TentangSeeder::class);
        $this->call(KategoriInduk::class);
        $this->call(KategoriProduk::class);
        $this->call(Meta::class);
    }
}
