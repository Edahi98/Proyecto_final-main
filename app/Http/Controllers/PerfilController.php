<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('perfil.show', compact('user'));
    }
}
