<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAuthRepository
{
    
    public function Login($loginUserData)
    {
        return User::where('usuario',$loginUserData)->first();
    }

    public function register($registerUserData)
    {
        return User::create([
            'name' => $registerUserData['name'],
            'usuario' => $registerUserData['usuario'],
            'password' => Hash::make($registerUserData['password']),
        ]);
    }

   
}
