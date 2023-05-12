<?php

namespace App\Http\Controllers;

use App\Models\user;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;


class HomeController extends Controller
{

    public function index()
    {
        return view('home.user');
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            return view('home.user');
        }

    }
}
