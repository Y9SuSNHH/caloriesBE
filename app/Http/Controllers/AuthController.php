<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use ResponseTrait;

    public function __construct()
    {
        //
    }

    /**
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        try {
            $validated   = $request->validated();
            $user = User::query()
                ->where('email', $validated['email'])
                ->first();

            if (!$user) {
                return $this->errorResponse('Email đăng nhập không tồn tại');
            }
            if (!Hash::check($validated['password'], $user->password)) {
                return $this->errorResponse('Mật khẩu sai');
            }
            return $this->successResponse($user,'Đăng nhập thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

    /**
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        try {
            $validated = $request->validated();
            $password  = Hash::make($validated['password']);
            $user      = User::query()->create([
                'name'     => $validated['name'],
                'birthday' => $validated['birthday'],
                'avatar'   => $validated['avatar'] ?? '',
                'address'  => $validated['address'] ?? '',
                'weight'   => $validated['weight'],
                'height'   => $validated['height'],
                'gender'   => $validated['gender'],
                'email'    => $validated['email'],
                'password' => $password,
            ]);
            return $this->successResponse($user,'Đăng kí thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
