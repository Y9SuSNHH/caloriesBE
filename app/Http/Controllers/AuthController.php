<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use ResponseTrait;

    public function __construct()
    {
        //
    }

    public function login()
    {
        dd(1);
    }

    public function register(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'name'     => 'required|string',
                'birthday' => 'required|date_format:Y-m-d',
                'password' => 'required',
            ]);
            $password  = Hash::make($validated->password);
            if (auth()->check()) {
                User::query()->where('id', auth()->user()->id)
                    ->update([
                        'name'     => $request->name,
                        'gender'   => $request->gender,
                        'phone'    => $request->phone,
                        'password' => $password,
                    ]);
            } else {
                $user = User::create([
                    'name'     => $request->name,
                    'gender'   => $request->gender,
                    'phone'    => $request->phone,
                    'email'    => $request->email,
                    'password' => $password,
                ]);
                Auth::login($user);
            }
            return $this->successResponse(1);
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
