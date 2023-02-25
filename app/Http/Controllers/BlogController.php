<?php

namespace App\Http\Controllers;

use App\Enums\TagTypeEnum;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    use ResponseTrait;

    private object $model;

    public function __construct()
    {
        $this->model = Blog::query();
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
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

            return $this->successResponse($blogs, 'Lấy danh sách bài viết thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
