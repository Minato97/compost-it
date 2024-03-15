<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estatus;
use App\Models\Etapa;
use App\Models\Prototipo;
use App\Models\Rol;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function roles()
    {
        $data = Rol::all();
        return $data;
    }

    public function etapas()
    {
        $data = Etapa::all();
        return $data;
    }

    public function categorias()
    {
        $data = Categoria::all();
        return $data;
    }

    public function prototipos()
    {
        $data = Prototipo::all();
        return $data;
    }

    public function estatus()
    {
        $data = Estatus::all();
        return $data;
    }

}
