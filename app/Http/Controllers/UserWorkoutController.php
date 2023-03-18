<?php

namespace App\Http\Controllers;

use App\Models\UserWorkout;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserWorkoutController extends Controller
{
    use ResponseTrait;

    private object $model;

    public function __construct()
    {
        $this->model = UserWorkout::query();
    }

    /**
     * @param Request $request
     * @param $userId
     * @return JsonResponse
     */
    public function getByUserId(Request $request, $userId): JsonResponse
    {
        try {
            $validated = $request->validate([
                'month' => [
                    'required_with:year',
                    'date_format:m',
                ],
                'year'  => [
                    'required_with:month',
                    'date_format:Y',
                ],
            ], [
                'date_format'   => ':attribute sai định dạng',
                'required_with' => ':attribute bắt buộc điền',
            ]);

            $query = $this->model->clone();
            $query->whereHas('user', fn($q) => $q->where('id', $userId));

            if (!empty($validated['month'])) {
                $query->whereMonth('created_at', $validated['month']);
            }
            if (!empty($validated['year'])) {
                $query->whereYear('created_at', $validated['year']);
            }

            $data = $query->get();
            return $this->successResponse($data, 'Lấy danh sách bài đã tập');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

    public function store(Request $request, $userId, $workoutId)
    {
        try {
            $validated = $request->validate([
                'workout_realtime' => [
                    'required',
                    'numeric',
                    'min:0',
                ],
                'calo_real'        => [
                    'required',
                    'numeric',
                    'min:0',
                ],
            ], [
                'required' => ':attribute bắt buộc điền',
                'numeric'  => ':attribute phải là kiểu số',
                'min'      => ':attribute phải lớn hơn 0',
            ]);

            $data = array_merge($validated, [
                'user_id'    => $userId,
                'workout_id' => $workoutId,
            ]);
            $data = $this->model->create($data);
            return $this->successResponse($data, 'Tạo mới lịch sử tập luyện');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
