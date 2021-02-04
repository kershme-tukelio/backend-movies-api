<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request) 
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $token = auth('api')->login($user);

        return [
            'user' => $user,
            'token' => $token
        ];
    }

    public function login(Request $request) 
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $token = auth('api')->attempt($credentials);
        if (!$token) {
            return response()->json(['message' => 'Unauthentificated'], 401);
        }

        return [
            'token' => $token,
            'user' => auth('api')->user()
        ];
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json(['success' => true]);
    }

    public function me()
    {
        return auth('api')->user();
    }

    public function refreshToken()
    {
        $token = auth('api')->refresh();
        return [
            'user' => auth('api')->user(),
            'token' => $token
        ];
    }
}
