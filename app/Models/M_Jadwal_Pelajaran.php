<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Jadwal_Pelajaran extends Model
{
    protected $table = "tbl_jadwal_pelajaran";
    
    protected $fillable = [
        'kd_jadwal',
        'kd_pelajaran',
        'keterangan',
        'username_mentor',
        'waktu_mulai',
        'waktu_selesai'
    ];
}
