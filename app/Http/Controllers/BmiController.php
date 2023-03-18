<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BmiController extends Controller
{
    use ResponseTrait;

    private object $model;

    public function __construct()
    {
        $this->model = Bmi::query();
    }

    public function index(Request $request, $userId): JsonResponse
    {
        try {
            $validated = $request->validate([
                'date' => [
                    'date_format:Y-m-d',
                ],
            ], [
                'date_format' => ':attribute sai định dạng',
            ]);

            $query = $this->model->clone()->where('user_id', $userId);


            if (!empty($validated['date'])) {
                $date = new Carbon($validated['date']);
                $query->whereMonth('created_at', $date->month);
                $query->whereYear('created_at', $date->year);
            }

            $data = $query->get();
            return $this->successResponse($data, 'Lấy danh sách bài tập thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param $userId
     * @return JsonResponse
     */
    public function store(Request $request, $userId): JsonResponse
    {
        try {
            $validated = $request->validate([
                'weight' => [
                    'required',
                    'numeric',
                    'min:0',
                ],
                'height' => [
                    'required',
                    'numeric',
                    'min:0',
                ],
            ], [
                'required' => ':attribute bắt buộc điền',
                'numeric'  => ':attribute phải là kiểu số',
                'min'      => ':attribute phải lớn hơn 0',
            ]);

            $bmi = $this->model->whereHas('user', fn($q) => $q->where('id', $userId))
                ->whereDate('created_at', today())
                ->first();

            $message = '';
            if ($bmi) {
                $bmi->fill($validated);
                $bmi->save();
                $message = 'Cập nhật';
            } else {
                $data    = array_merge($validated, ['user_id' => $userId]);
                $bmi     = $this->model->create($data);
                $message = 'Thêm mới';
            }

            return $this->successResponse($bmi, "$message bmi thành công");
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
