<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class PagesController extends Controller
{

    public function viewHome()
    {

        return view('pages.index');
    }

    public function viewDashboard()
    {

        $users = User::orderBy('updated_at', 'desc')->limit(5)->get();
        $courses = Course::orderBy('created_at', 'desc')->limit(5)->get();
        $countUsers = User::count();
        $countCourses = Course::count();
        $sumHours = Course::sum('duracion');

        $date = Carbon::now('America/Mexico_City')->format('d/m/Y');
        // dd($countUsers);

        return view('pages.dashboard', [
            'users' => $users,
            'courses' => $courses,
            'countUsers' => $countUsers,
            'countCourses' => $countCourses,
            'sumHours' => $sumHours,
            'date' => $date
        ]);
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
