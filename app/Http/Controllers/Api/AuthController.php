<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;

class AuthController extends Controller
{
  //Agregar validador para la autenticacion con OAuth
  public function register (Request $request){

    //Agregar validador para la autenticacion con OAuth
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required',
      'confirm_password' => 'required|same:password'
    ]);

    if($validator->fails()){
      return response()->json(
        ["error"=>$validator->error()], 422
      );
    }

    $input = $request->all();
    $input["password"] = bcrypt($request->get("password"));
    $user = User::create($input);
    $token = $user->createToken("MyApp")->accessToken;

    $data = [
      'token' => $token,
      'user' => $user
    ];
    return $data;
  }
  public function testOauth (Request $request){
      $user = Auth::user();
      return response()->json([
          'user'=> $user
      ], 200);
  }
}
