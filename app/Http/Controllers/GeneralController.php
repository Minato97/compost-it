<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function roles()
    {
        $data = Rol::all();
        return $data;
    }
}
