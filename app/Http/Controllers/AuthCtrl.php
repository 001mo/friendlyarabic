<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthCtrl extends Controller
{
    private const TOKEN_NAME = 'FRIENDLY_ARABIC_TOKEN';

    public function signup(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|confirmed|min:8|max:255',
            'role' => 'string|max:15'
        ]);

        $validate['password'] = Hash::make($validate['password']);

        $user = User::create($validate);

        $token = $user->createToken(self::TOKEN_NAME)->accessToken;

        return response(['token' => $token], 200);
    }


    public function login(Request $request){
        $validate = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|max:255'
        ]);

        if(!Auth::attempt($validate)){
            return response(['error' => 'email or password incorrect'], 403);
        }

        $token = Auth::user()->createToken(self::TOKEN_NAME)->accessToken;

        return response(['token' => $token], 200);

    }
}
