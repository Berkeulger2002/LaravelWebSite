<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // User modelini kullanmak için gerekli

class UserController extends Controller
{
    public function inndex()
{
    $users = User::all();
    return view('inndex', ['users' => $users]); 
}

}
