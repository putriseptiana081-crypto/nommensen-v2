<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Announcement extends Model
{
    protected $fillable = [
        'title',
        'content',
        'users_id',
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->users_id)) {
                $model->users_id = Auth::id();
            }
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title) . '-' . time();
            }
        });
    }

    /**
     * Relasi: Announcement ini dimiliki oleh (dibuat oleh) satu User.
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}