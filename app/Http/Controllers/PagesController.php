<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




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

    public function viewProfile(Request $request)
    {
        $user = $request->user();

        return view('pages.profile',['user' => $user]);
    }

    public function viewUpdateProfile(Request $request)
    {
        $user = $request->user();

        return view('pages.update-profile',['user' => $user]);
    }

    public function viewCourses()
    {

        return view('pages.course');
    }

    public function viewEmployers()
    {

        return view('pages.employer');
    }

    public function viewEditions()
    {

        return view('pages.edition');
    }



}
