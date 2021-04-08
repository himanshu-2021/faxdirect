<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userLogin(Request $request)
    {
        return view('admin.login');
    }
    public function userRegister(Request $request)
    {
        return view('admin.register');
    }
}
