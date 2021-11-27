<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request){

        $arrUser = [
            'username' => $request->username,
            'password' =>$request->password
        ];
        // dd($arrUser);
        if (Auth::attempt($arrUser)) {
            return redirect()->route("customer.home");
        }
        else {
            return back();
        }
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        auth()->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }

}
