<?php

namespace App\Http\Controllers;

use App\Enums\TagTypeEnum;
use App\Enums\WorkoutLevelEnum;
use App\Models\Tag;
use App\Models\Workout;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WorkoutController extends Controller
{
    use ResponseTrait;

    private object $model;

    public function __construct()
    {
        $this->model = Workout::query();
    }

    public function index(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'level' => [
                    'integer',
                    Rule::in(WorkoutLevelEnum::getValues()),
                ],
                'tag'   => [
                    'integer',
                    Rule::exists(Tag::class, 'id')
                        ->where('type', TagTypeEnum::WORKOUT),
                ],
            ], [
                'integer' => ':attribute phải là kiểu số',
                'in'      => ':attribute không có trong danh sách',
                'exists'  => ':attribute không tồn tại với workout',
            ]);

            $query = $this->model;

            if (!empty($validated['level'])) {
                $query->where('level', $validated['level']);
            }
            if (!empty($validated['tag'])) {
                $tag = $validated['tag'];
                $query->when($tag, function ($q) use ($tag) {
                    $q->whereRelation('tags', 'id', '=', "$tag");
                });
            }
            $query->with('tags:id,group,name,description');

            $workouts = $query->get();

            return $this->successResponse($workouts, 'Lấy danh sách bài tập');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

}
