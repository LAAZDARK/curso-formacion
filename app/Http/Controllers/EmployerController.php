<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class EmployerController extends Controller
{
    use ResponseApi;



    public function index()
    {

        $users = User::orderBy('id', 'desc')->get();

        return $this->sendResponse($users, 'Lista de usuarios');
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
            'name' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);


        $user = User::findOrFail($id);
        $user->fill($input);
        $user->save();

        $users = User::orderBy('id', 'desc')->get();

        return $this->sendResponse($users, 'Se actualizo correctamente');
        // return redirect()->route('view.courses')->with("success", "Los datos se actualizaron correctamente");
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $rules = [
            'name' => 'required'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

        $user = new User();
        $user->fill($input);
        $user->save();

        $users = User::orderBy('id', 'desc')->get();

        return $this->sendResponse($users, 'Se agrego correctamente', 200);
    }



    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return $this->sendResponse(true, 'se ha elimindao el articulo seleccionado');
    }
}
