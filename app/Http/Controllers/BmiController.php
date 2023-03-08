<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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
                $query->whereMonth('created_at', $date->month)->whereYear('created_at', $date->year);
            }

            $data = $query->get();
            return $this->successResponse($data, 'Lấy danh sách bài tập thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
