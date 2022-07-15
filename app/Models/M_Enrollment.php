<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\M_Jadwal_Pelajaran;
use App\Models\M_User_Profile;

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


    public function pelajaranData($kdJadwalPelajaran)
    {
        return M_Jadwal_Pelajaran::where('kd_jadwal', $kdJadwalPelajaran) -> first();
    }

    public function mentorData($kdJadwalPelajaran)
    {
        $dataPelajaran = M_Jadwal_Pelajaran::where('kd_jadwal', $kdJadwalPelajaran) -> first();
        return M_User_Profile::where('username', $dataPelajaran -> username_mentor) -> first();
    }

}
