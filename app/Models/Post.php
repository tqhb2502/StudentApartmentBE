<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'address',
        'street',
        'ward',
        'district',
        'price',
        'land_area',
        'type',
        'view_number',
        'description',
        'bedroom_num',
        'bathroom_num',
        'latitude',
        'longitude',
    ];

    /**
     * Relationships
     */

    // 1 user - n posts
    public function user() {
        return $this->belongsTo(User::class);
    }

    // 1 post - n images
    public function images() {
        return $this->hasMany(Image::class);
    }

    // 1 post - n videos
    public function videos() {
        return $this->hasMany(Video::class);
    }
}
