<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if ($user && Hash::check($validatedData['password'], $user->password)) {
            $token = $user->createToken('api', ['create']);

            return [
                'token' => $token->plainTextToken
            ];
        } else {
            return [
                'errors' => 'Invalid Credentials'
            ];
        }
    }

    // public function login(){
    //     $user= User::first();
    //     $token= $user->createToken('api');
    //     return [
    //         'token'=>$token->plainTextToken
    //     ];
    // }
}
