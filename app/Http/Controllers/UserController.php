<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:owner');
    }

    public function index()
    {
        return view('admins.users.home');
    }


}
