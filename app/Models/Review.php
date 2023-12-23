<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'content',
    ];

    /**
     * Relationships
     */

    // 1 post - n reviews
    public function post() {
        return $this->belongsTo(Post::class);
    }

    // 1 user - n reviews
    public function user() {
        return $this->belongsTo(User::class);
    }

    // 1 review - n review_likes
    public function reviewLikes() {
        return $this->hasMany(ReviewLike::class);
    }
}
