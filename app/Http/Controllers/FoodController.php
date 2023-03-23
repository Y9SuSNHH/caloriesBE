<?php

namespace App\Http\Controllers;

use App\Enums\TagTypeEnum;
use App\Models\Food;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FoodController extends Controller
{
    use ResponseTrait;

    private object $model;

    public function __construct()
    {
        $this->model = Food::query();
    }

    public function index(Request $request)
    {
        try {
            $validated = Validator::make($request->all(), [
                'tag' => [
                    'integer',
                    Rule::exists(Tag::class, 'id')
                        ->where('type', TagTypeEnum::BLOG),
                ],
            ], [
                'integer' => ':attribute phải là kiểu số',
                'exists'  => ':attribute không tồn tại với blogs',
            ])->validated();

            $query = $this->model->clone()->with('tag');

            if (!empty($validated['tag'])) {
                $query->whereHas('tag', function ($q) use ($validated) {
                    $q->where('id', $validated['tag']);
                });
            }

            $blogs = $query->get();

            return $this->successResponse($blogs, 'Lấy danh sách đồ ăn thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

}
