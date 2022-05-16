<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\M_User;
use App\Models\M_User_Profile;

class S_User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> createUser('admin', 'admin', 'admin', 'Administrator', 'L');
        $this -> createUser('mentor', 'admin', 'mentor', 'Fitri Ardianti', 'P');
        $this -> createUser('murid', 'admin', 'murid', 'Khairunnisa', 'P');
    }

    function createUser($username, $password, $role, $nama, $jk)
    {
        // save user 
        $user = new M_User();
        $user -> username = $username;
        $user -> role = $role;
        $user -> password = password_hash($password, PASSWORD_DEFAULT);
        $user -> save();
        // save user profile 
        $up = new M_User_Profile();
        $up -> username = $username;
        $up -> nama = $nama;
        $up -> jk = $jk;
        $up -> save();
    }
}
