<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_User_Profile extends Model
{
    protected $table = "tbl_user_profile";
    
    protected $fillable = [
        'username',
        'nama',
        'jk',
        'alamat',
        'hp'
    ];
}
