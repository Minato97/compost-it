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
        $validator = Validator::make($request->all(), [
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',


        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson());
        }

        $user = User::create(array_merge(
            $validator->validate(),
            ['password' => bcrypt($request->password),
                'apellido_materno' => $request->apellido_materno,
                'id_estatus' => 1,
                'id_roles' => 1
    ]
        ));

        return response()->json([
            'message' => '¡Usuario registrado exitosamente!',
            'user' => $user
        ]);
    }

    public function ingresar(Request $request) {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado']);
//            return false;
        }

        // Verificar si la contraseña proporcionada coincide con la almacenada
        if (password_verify($request->password, $user->password)) {
            // La contraseña es correcta, puedes retornar los datos del usuario
            return response()->json(['error' => 'Usuario encontrado']);
//            return $user;
//            return true;
        } else {
            // La contraseña es incorrecta
            return response()->json(['error' => 'Contraseña incorrecta']);
//            return false;
        }
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
        if ($request['password'] == '') {
            $data->fill($request->except('password'));
            $data->save();
        } else {
            $request['password'] = bcrypt($request->password);
            $data->update($request->all());
        }

        return $data;
    }


}
