<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
namespace App\Http\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;

class YourController extends AdminController
{
    public function login()
    {
        return view('adminlogin'); 
    }
}