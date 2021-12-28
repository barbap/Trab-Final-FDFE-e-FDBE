<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /*public function cadastroUsuario(Request $request) {
        $requestData = $request->all();
        $requestData['password'] = md5($requestData['password']);
        $user = new Usuario($requestData);
        $user->save();
        return view('index', ['id' => $user->id]);
    }

    public function loginUsuario(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->put('user', $request->get("email"));

            return redirect()->intended('app');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }*/
}
