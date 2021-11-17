<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\User;
use App\Models\Apply;
use App\Models\Course;
use App\Models\Edition;
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



    /**
     * Suscripción de curso a traves de edicion
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id Model Edition
     * @return object $apply
     */

    public function applyCourse(Request $request, $id): object
    {
        try {
            $user = $request->user();

            $edition = Edition::find($id);

            if(empty($edition)){
                throw new Exception('No se encontro nungun curso registrado');
            }

            $course = Apply::where('user_id', $user->id)->where('edition_id', $edition->id)->first();
            if(!empty($course)){
                throw new Exception('No puede tomar el mismo curso, espera la siguiente edición.');
            }

            $apply = new Apply();
            $apply->user_id = $user->id;
            $apply->edition_id = $edition->id;
            $apply->save();


            return $this->sendResponse($apply, 'Se agrego el curso correctamente');
        } catch (\Throwable $error) {

            return $this->sendError('CourseController ApplyCourse', $error->getMessage(), 401);
        }


    }


    public function myCourses(Request $request)
    {
        try {

            $user = $request->user();

            $courses = Apply::where('user_id', $user->id)->orderBy('id', 'desc')->get();

            if(empty($courses)) throw new \Exception('No cuentas con cursos registrados');

            return $this->sendResponse($courses, 'Lista de cursos');

        } catch (\Throwable $error) {

            return $this->sendError('CourseController MyCourses', $error->getMessage(), 401);
        }


    }
}
