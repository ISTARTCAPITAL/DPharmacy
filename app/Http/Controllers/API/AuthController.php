<?php

namespace App\Http\Controllers\API;
   use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Validator;


class AuthController extends BaseController
{

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $auth = Auth::user();
            $success['token'] =  $auth->createToken('LaravelSanctumAuth')->plainTextToken;
            $success['username'] =  $auth->username;

            return $this->handleResponse($success, 'User logged-in!');
        }
        else{
            return $this->handleError('Unauthorised.', ['error'=>'Unauthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            // dd($validator);
            return $this->handleError($validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('LaravelSanctumAuth')->plainTextToken;
        $success['username'] =  $user->username;

        return $this->handleResponse($success, 'User successfully registered!');
    }

}
