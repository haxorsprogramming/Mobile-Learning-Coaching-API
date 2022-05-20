<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\M_User_Profile;

class M_User extends Model
{
    protected $table = "tbl_user";
    
    protected $fillable = [
        'username',
        'role',
        'password',
        'api_token',
        'active'
    ];

    public function getUserProfile($username)
    {
        return M_User_Profile::where('username', $username) -> first();
    }

}
