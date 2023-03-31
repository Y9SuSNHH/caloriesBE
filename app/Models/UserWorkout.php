<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserWorkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'workout_realtime',
        'calo_real',
        'user_id',
        'workout_id',
        'created_at',
        'updated_at',
    ];

    /**
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
