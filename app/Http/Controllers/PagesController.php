<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;




class PagesController extends Controller
{

    public function viewHome()
    {

        return view('pages.index');
    }

    public function viewDashboard()
    {

        return view('pages.dashboard');
    }

    public function viewRegister()
    {

        return view('pages.register');
    }

    public function viewLogin()
    {

        return view('pages.login');
    }



}
