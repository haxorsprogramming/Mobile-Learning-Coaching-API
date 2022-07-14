<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblEnrollment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_enrollment', function (Blueprint $table) {
            $table -> id();
            $table -> char('token_enroll', 150);
            $table -> char('kd_jadwal_pelajaran', 150);
            $table -> char('username_murid', 200);
            $table -> char('username_mentor', 200);
            $table -> dateTime('waktu_daftar') -> nullable();
            $table -> dateTime('waktu_selesai') -> nullable();
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
        Schema::dropIfExists('tbl_enrollment');
    }
}
