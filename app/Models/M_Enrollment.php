<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Enrollment extends Model
{
    protected $table = "tbl_enrollment";
    
    protected $fillable = [
        'token_enroll',
        'kd_jadwal_pelajaran',
        'keterangan',
        'username_murid',
        'username_mentor',
        'waktu_daftar',
        'waktu_selesai'
    ];
}
