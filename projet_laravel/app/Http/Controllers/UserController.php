<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function inscription(Request $request){
        $utillisateurDonnee = $request->validate([
            'name' => ['required','string', 'min:2', 'max:225'],
            'email' => ['required','email', 'unique:users,email'],
            'password' => ['required','string', 'min:8', 'max: 30', 'confirmed']
        ]);

        $utillisateurs = User::create([
            "name" => $utillisateurDonnee["name"],
            "email" => $utillisateurDonnee["email"],
            "password" => bcrypt($utillisateurDonnee["password"]),
        ]);

        return response($utillisateurs, 201);
    }
}
