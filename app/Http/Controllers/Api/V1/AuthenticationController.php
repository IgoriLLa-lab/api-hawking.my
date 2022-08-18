<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Api\V1\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{


    public function register(Request $request)
    {

        $fieldsVal = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users|email',
            'password' => 'required|string|confirmed',
        ]);

        $user = User::create([
            'name' => $fieldsVal['name'],
            'email' => $fieldsVal['email'],
            'password' => bcrypt($fieldsVal['password']),
        ]);

        $token = $user->createToken('AdminToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);

    }

    public function login(Request $request)
    {

        $fieldsVal = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $fieldsVal['email'])->first();

        if (!$user || !Hash::check($fieldsVal['password'], $user->password)){
            return response([
                'message' => 'Password or Email not entered correctly'
            ], 401);
        }

        $token = $user->createToken('AdminToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);

    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logout'
        ];
    }
}
