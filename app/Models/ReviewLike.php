<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'review_id',
    ];

    /**
     * Relationships
     */

    // 1 user - n review_likes
    public function user() {
        return $this->belongsTo(User::class);
    }

    // 1 review - n review_likes
    public function review() {
        return $this->belongsTo(Review::class);
    }
}
