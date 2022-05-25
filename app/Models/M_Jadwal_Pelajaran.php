<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use App\Models\M_Jenis_Pelajaran;

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

    public function getJenisPelajaran($kdPelajaran)
    {
        return M_Jenis_Pelajaran::where('kd_pelajaran', $kdPelajaran) -> first();
    }
    
    public function setTanggal($tanggal)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $tanggal) -> format('d-m-Y');
    }

}
