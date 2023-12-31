<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request) {

        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'dateOfBirth' => $data['dateOfBirth'],
            'lightMode' => $data['lightMode'],
            'dateAttempts' => $data['dateAttempts'],
            'numberOfAttempts' => $data['numberOfAttempts'],
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return response(compact('user', 'token'));
    }

    // login a user method
    public function login(LoginRequest $request) {
        $data = $request->validated();

        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            return response()->json([
                'message' => 'Email or password is incorrect!'
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;
        return response(compact('user', 'token'));
    }

    // logout a user method
    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return response('', 204);
    }

    // get the authenticated user method
    public function user(Request $request) {
        return new UserResource($request->user());
    }
}
