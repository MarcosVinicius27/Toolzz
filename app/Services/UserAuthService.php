<?php

namespace App\Services;

use App\Repositories\UserAuthRepository;
use Illuminate\Support\Facades\Hash;

class UserAuthService
{
    protected $UserAuthRepository;
   

    public function __construct(UserAuthRepository $UserAuthRepository)
    {
        $this->UserAuthRepository = $UserAuthRepository;
        
    }

    public function Login($request)
    {

        $loginUserData = $request->validate([
            'username'=>'required|string',
            'password'=>'required|min:8'
        ]);
        
        $user = $this->UserAuthRepository->Login($loginUserData['username']);

        if(!$user || !Hash::check($loginUserData['password'],$user->password)){
            return ['message' => 'Usuário ou senha inválido','status' => 401];
        }

        $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;

        return ['access_token' => $token,'status' => 200];
    }

    public function register($request)
    {

        $registerUserData = $request->validate([
            'name'=>'required|string',
            'usuario'=>'required|string|unique:users',
            'password'=>'required|min:8'
        ]);

    
        $this->UserAuthRepository->register($registerUserData);

        return ['status' => 200];
    }

}