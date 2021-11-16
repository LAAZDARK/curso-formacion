<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Course;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    use ResponseApi;



    public function index(Request $request)
    {

        $user = $request->user();

        return $this->sendResponse($user, 'usuario');
    }

    public function show(Request $request)
    {

        $user = $request->user();

        return view('pages.profileEdit', ['user' => $user]);
    }



    public function update(Request $request)
    {

        $input = $request->all();
        // dd($input);
        $rules = [
            'name' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);


        $user = User::findOrFail($input['id']);
        $user->fill($input);
        $user->save();


        // return $this->sendResponse($product, 'Se actualizo correctamente', 200);

        // return back()->with('flash', 'Se actualizaron correctamente los datos');
        return redirect()->route('view.profile')->with("success", "Los datos se actualizaron correctamente");
    }



    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return $this->sendResponse(true, 'se ha elimindao el articulo seleccionado');
    }

    public function listOfTrainedUsers()
    {
        $users = User::where('status', '1')->orderBy('id', 'desc')->get();
        return $this->sendResponse($users, 'Lista de usuarios capacitados');
    }
    public function listCourses()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        return $this->sendResponse($courses, 'Lista de Cursos');
    }

    // public function listUserTop()
    // {
    //     $user = User::orderBy('updated_at', 'desc')->limit(5)->get();
    //     return $this->sendResponse($user, 'Lista de usuarios');
    // }

    // public function listCourseTop()
    // {
    //     $courses = Course::orderBy('created_at', 'desc')->limit(5)->get();
    //     return $this->sendResponse($courses, 'Lista de cursos');
    // }



}
