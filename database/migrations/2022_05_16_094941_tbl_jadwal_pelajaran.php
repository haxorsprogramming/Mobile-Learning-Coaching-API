<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblJadwalPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_jadwal_pelajaran', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_jadwal', 150);
            $table -> char('kd_pelajaran', 150);
            $table -> text('keterangan') -> nullable();
            $table -> char('username_mentor', 200);
            $table -> dateTime('waktu_mulai');
            $table -> dateTime('waktu_selesai');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
