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

    public function viewDashboard(Request $request)
    {

        $user = $request->user();
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
            'date' => $date,
            'user' => $user
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

    public function viewCourses(Request $request)
    {
        $user = $request->user();
        return view('pages.course',['user' => $user]);
    }

    public function viewEmployers(Request $request)
    {
        $user = $request->user();
        return view('pages.employer',['user' => $user]);
    }

    public function viewEditions(Request $request)
    {
        $user = $request->user();
        return view('pages.edition',['user' => $user]);
    }



}
