<?php

namespace App\Http\Controllers;

use App\Enums\TagTypeEnum;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TagController extends Controller
{
    use ResponseTrait;

    private object $model;

    public function __construct()
    {
        $this->model = Tag::query();
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'type' => [
                    'integer',
                    Rule::in(TagTypeEnum::getValues()),
                ],
            ], [
                'integer' => ':attribute phải là kiểu số',
                'in'      => ':attribute không tồn tại',
            ]);
            $query     = $this->model;
            if (!empty($validated['type'])) {
                $query->where('type', $validated['type']);
            }
            $tags = $query->get();
            return $this->successResponse($tags, 'Lấy danh sách tag thành công');

        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
