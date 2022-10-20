<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request) {
        return view('login');
    }

    public function register(Request $request) {
        return view('register');
    }

    public function register_action(Request $request) {
        /*
            ******************************************
            Regras para registro de usuários

            - O usuário tem que ter um nome
            - O email tem que ser único na tabela users
            - Todos os campos são REQUIRED
            - Password tem que possuir no mínimo 6 caracteres
            
            ******************************************
        */

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $data = $request->only('name', 'email', 'password');
        $userCreated = User::create($data);
        dd($userCreated);
    }
}
