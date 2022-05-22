<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\M_Jenis_Pelajaran;

class S_Jenis_Pelajaran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> createJenisPelajaran('At-Tahqiq','Bacaan yang sangat lambat, yang lazim digunakan untuk mengajarkan AlQuran dengan sempurna.');
        $this -> createJenisPelajaran('At-Tartil','Bacaan lambat, dengan menggunakan kaidah-kaidah Ilmu Tajwid dan mentadaburinya.');
        $this -> createJenisPelajaran('At-Tadwir','Bacaan yang tidak terlalu capat dan tidak terlalu lambat, bacaan dengan irama yang sedang.');
        $this -> createJenisPelajaran('Al-Hadr','Bacaan yang dilakukan dengan cepat dan tetap mempraktikkan tajwidnya.');
    }

    function createJenisPelajaran($nama, $keterangan)
    {
        $jp = new M_Jenis_Pelajaran();
        $jp -> kd_pelajaran = Str::uuid();
        $jp -> nama = $nama;
        $jp -> keterangan = $keterangan;
        $jp -> save();
    }

}
