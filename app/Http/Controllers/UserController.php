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
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        try {
            $user = $this->model->find($id);
            return $this->successResponse($user, 'Lấy thông tin người dùng thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

    /**
     * @param UpdateRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, $id): JsonResponse
    {
        try {
            $validated = $request->validated();
            $user = $this->model->find($id);
            $user->update($validated);
            return $this->successResponse($user, 'Cập nhật thông tin người dùng thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
