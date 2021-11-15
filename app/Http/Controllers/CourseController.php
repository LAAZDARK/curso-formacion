<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Course;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class CourseController extends Controller
{
    use ResponseApi;



    public function index()
    {

        $courses = Course::orderBy('id', 'desc')->get();

        return $this->sendResponse($courses, 'Lista de cursos');
    }

    public function show(Request $request)
    {

        // $user = $request->user();

        // return view('pages.profileEdit', ['user' => $user]);
    }



    public function update(Request $request, $id)
    {

        $input = $request->all();
        // dd($input);
        $rules = [
            'nombre' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);


        $course = Course::findOrFail($id);
        $course->fill($input);
        $course->save();

        $courses = Course::orderBy('id', 'desc')->get();

        return $this->sendResponse($courses, 'Se actualizo correctamente');
        // return redirect()->route('view.courses')->with("success", "Los datos se actualizaron correctamente");
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $rules = [
            'nombre' => 'required'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

        $course = new Course();
        $course->fill($input);
        $course->save();

        $courses = Course::orderBy('id', 'desc')->get();

        return $this->sendResponse($courses, 'Se agrego correctamente', 200);
    }



    public function destroy($id)
    {
        $user = Course::findOrFail($id);

        $user->delete();

        return $this->sendResponse(true, 'se ha elimindao el articulo seleccionado');
    }
}
