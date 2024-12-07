<?php

namespace App\Http\Controllers\Main;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Main\CustomRequest;
// use App\Http\Requests\Main\LoginRequest;
use App\Http\Requests\Main\RegisterRequest;
use App\Http\Requests\Api\LoginRequest;
use App\Models\User;

class CustomerController extends Controller
{
    public $successStatus = 200;
    public function Register(RegisterRequest $request){
      $data = $request->all();
        if(User::create($data)){
            return response()->json(["Create user success."]);
        }else{
            return response()->json(["Create user error."]);
        }
    }
    protected function doLogin($attempt)
    {
        if (Auth::guard('web')->attempt($attempt)) {
            return true;
        } else {
            return false;
        }
    }
    public function login(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 0
        ];
        if ($this->doLogin($login)) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json([
                    'success' => 'success',
                    'token' => $token,
                    'type_token' => 'Bearer',
                    'Auth' => Auth::user()
                ],
                $this->successStatus
            );
        } else {
            return response()->json([
                    'response' => 'error',
                    'errors' => ['errors' => 'invalid email or password'],
                ],
            $this->successStatus);
        }
    }
    public function logout(){
      auth()->user()->tokens()->delete();
      return response()->json(
          [
              'message'=>'success'
          ],
          200
      );
  }
}
