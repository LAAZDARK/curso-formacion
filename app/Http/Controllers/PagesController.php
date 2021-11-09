<?php

namespace App\Http\Controllers;

// use App\Models\User;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Validator;




class PagesController extends Controller
{

    public function viewHome()
    {

        return view('pages.index');
    }

    public function viewCourse()
    {

        return view('pages.course');
    }



}
