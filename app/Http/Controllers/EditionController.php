<?php

namespace App\Http\Controllers;

// use App\Models\User;

use App\Models\Course;
use App\Models\Edition;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class EditionController extends Controller
{
    use ResponseApi;



    public function index()
    {

        $editions = Edition::with('course', 'user')->orderBy('id', 'desc')->get();

        // foreach ($editions as $edition){

        //     foreach ($edition as $item){
        //         $editions['courseName'] = $item->nombre;
        //     }
        // }


        return $this->sendResponse($editions, 'Lista de ediciones de cursos');
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
            'fecha_inicio' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);


        $edition = Edition::findOrFail($id);
        $edition->fill($input);
        $edition->save();

        // $editions = Edition::orderBy('id', 'desc')->get();

        return $this->sendResponse(true, 'Se actualizo correctamente');
        // return redirect()->route('view.editions')->with("success", "Los datos se actualizaron correctamente");
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $rules = [
            'fecha_inicio' => 'required'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

        $edition = new Edition();
        $edition->fill($input);
        $edition->save();

        // $editions = Edition::orderBy('id', 'desc')->get();

        return $this->sendResponse(true, 'Se agrego correctamente', 200);
    }



    public function destroy($id)
    {
        $edition = Edition::findOrFail($id);

        $edition->delete();

        return $this->sendResponse(true, 'se ha elimindao el articulo seleccionado');
    }
}
