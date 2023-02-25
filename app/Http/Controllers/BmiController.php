<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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
                'month' => [
                    'integer',
                ],
                'year'  => [
                    'integer',
                ],
            ], [
                'integer' => ':attribute phải là một số',
            ]);

            $query    = $this->model->clone()->where('user_id', $userId);
            $data     = $query->get();
            $bmi_user = $data;
            return $this->successResponse($data, 'Lấy danh sách bài tập');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
