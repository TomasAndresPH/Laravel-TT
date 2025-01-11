<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController
{
    public function index()
    {
        return response()->json(Usuario::paginate(10));
    }
}
