<?php

namespace App\Models;

use App\Enums\TagTypeEnum;
use App\Enums\WorkoutLevelEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'time',
        'calo',
        'video',
        'level',
    ];

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)
            ->where('type', TagTypeEnum::WORKOUT);
    }

}
