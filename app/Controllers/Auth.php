<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/signin');
    }

    public function signup()
    {
        return view('auth/signup');
    }
}
