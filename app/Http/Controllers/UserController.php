<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    use ResponseTrait;

    private object $model;

    public function __construct()
    {
        $this->model = User::query();
    }

    /**
     * @param $userId
     * @return JsonResponse
     */
    public function show($userId): JsonResponse
    {
        try {
            $user = $this->model->find($userId);
            return $this->successResponse($user, 'Lấy thông tin người dùng thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

    /**
     * @param UpdateRequest $request
     * @param $userId
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, $userId): JsonResponse
    {
        try {
            $validated = $request->validated();
            $this->model->find($userId)->update($validated);
            return $this->successResponse([], 'Cập nhật thông tin người dùng thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
