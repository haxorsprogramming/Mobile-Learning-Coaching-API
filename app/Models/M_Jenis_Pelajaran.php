<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Jenis_Pelajaran extends Model
{
    protected $table = "tbl_jenis_pelajaran";
    
    protected $fillable = [
        'kd_pelajaran',
        'nama',
        'keterangan'
    ];
}
