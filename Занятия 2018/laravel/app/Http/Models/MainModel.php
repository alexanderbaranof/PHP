<?php

namespace App\Http\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;



class MainModel extends Model
{
    static function getUsers(){
        $users = DB::select('select * from user');
        return $users;
    }
    
}
