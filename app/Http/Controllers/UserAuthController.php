<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserAuthService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{

    protected $UserAuthService;

    public function __construct(UserAuthService $userAuthService)
    {
        $this->UserAuthService = $userAuthService;
    }


    
    public function register(Request $request){
        try {

            $return = $this->UserAuthService->register($request);

            return response()->json($return['status']);

        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), HttpResponse::HTTP_INTERNAL_SERVER_ERROR);
        } 
    }

    public function login(Request $request){
        try {

            $return = $this->UserAuthService->Login($request);

            return response()->json(['mensage' => $return],$return['status']);

        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), HttpResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function logout(){

        auth()->user()->tokens()->delete();
    
        return response()->json([
          "message"=>"Deslogado com sucesso!"
        ]);
    }
}
