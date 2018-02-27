<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Models;


class MainController extends Controller
{
    public function home(){
        $users = Models\MainModel::getUsers();
        dump($users);
        return view('home', ['users' => $users]);
    }    
}
