<?php

namespace App\Http\Controllers;

use App\Enums\TrainingStatusEnum;
use App\Http\Requests\Training\UpdateRequest;
use App\Models\TagWorkout;
use App\Models\Training;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingController extends Controller
{
    use ResponseTrait;

    protected Builder $query;

    public function __construct()
    {
        $this->query = Training::query()->clone();
    }


    /**
     * @param int $userId
     * @param int $tagId
     * @return JsonResponse
     */
    public function store(int $userId, int $tagId): JsonResponse
    {
        DB::beginTransaction();
        try {
            $training = Training::query()->where('user_id', $userId)->first();
            if ($training->count() === 0 || $training->tag_id !== $tagId) {
                $this->query->where('user_id', $userId)->delete();
                $workouts = TagWorkout::query()->where('tag_id', $tagId)->get()->pluck('workout_id');
                $data     = [];
                foreach ($workouts as $key => $value) {
                    $data[] = [
                        'date'       => $key + 1,
                        'user_id'    => $userId,
                        'workout_id' => $value,
                        'tag_id'     => $tagId,
                        'status'     => TrainingStatusEnum::NOT_DONE,
                    ];
                }
                Training::query()->insert($data);
            }
            DB::commit();
            $data = $this->query->where('user_id', $userId)->with('workout')->get();
            return $this->successResponse($data, 'Lấy lịch trình tập thành công');
        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->errorResponse($e->getMessage());
        }
    }

    /**
     * @param UpdateRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, int $id): JsonResponse
    {
        try {
            return $this->successResponse($this->query->findOrFail($id)->update($request->validated()), 'Cập nhật thành công');
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
