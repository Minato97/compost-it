<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth:api', ['except' => ['register']]);

    }
    //buscar un usuario por id
    public function buscarUsuarioxid($id)
    {
//        $data = User::select('users.id', 'users.codigo', 'users.estado','users.username','users.email','roles.rol')
//            ->join('roles', 'roles.id', '=', 'users.id_roles')
//            ->where('users.id', $id)->first();
        $data = User::with('roles')->get();
        if (is_null($data)) {
            return response()->json(['mensaje' => 'Registro no Encontrado']);
        }
        return $data;
    }

    //Traer todos los usuarios
    public function mostrarUsuarios()
    {
//        $data = User::select('users.id', 'users.codigo', 'users.estado', 'users.username', 'users.email', 'roles.rol')
//            ->join('roles', 'roles.id', '=', 'users.roles_id')
//            //cambie "users.id_roles por users.roles_id"
//            ->get();
//        $data = User::with('roles')->get();
        $data = User::with('roles')->get();
        if (is_null($data)) {
            return response()->json(['mensaje' => 'Registro no Encontrado']);
        }
        return $data;
    }


    //registrar usuario
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nombres' => 'required',
            'apellido_apellido' => 'requerid',
            'email' => 'required|string|email|max:100|unique:users',
            'estado' => 'int',
            'password' => 'required|string|min:6',
            'id_roles' => 'int'
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors()->toJson());
        }

        $user = User::create(array_merge(
            $validator->validate(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'message' => '¡Usuario registrado exitosamente!',
            'user' => $user
        ]);
    }

    //Actualizar Usuario
    public function updateUser(Request $request, $id)
    {

//        return $request;
//        dd($request->all());
        $data = User::find($id);
        if (is_null($data)) {
            return response()->json(['mensaje' => 'Registro no Encontrado']);
        }
        if($request['password'] == ''){
            $data->fill($request->except('password'));
            $data->save();
        }else {
            $request['password'] = bcrypt($request->password);
            $data->update($request->all());
        }

        return $data;
    }



}
