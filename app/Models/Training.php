<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'user_id',
        'workout_id',
        'tag_id',
        'status',
    ];

    public $timestamps = false;
    /**
     * @return BelongsTo
     */
    public function workout(): BelongsTo
    {
        return $this->belongsTo(Workout::class);
    }
}
