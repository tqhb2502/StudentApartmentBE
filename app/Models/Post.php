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
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // 1 post - n images
    public function images() {
        return $this->hasMany(Image::class, 'post_id', 'id');
    }

    // 1 post - n videos
    public function videos() {
        return $this->hasMany(Video::class, 'post_id', 'id');
    }

    public function scopeComparePrice($query, $priceMin, $priceMax ) {
        if($priceMin && $priceMax) $query->whereBetween('price',  [$priceMin, $priceMax]);
        if(!$priceMin && $priceMax) return $query->where('price', '<', $priceMax);
        if(!$priceMax && $priceMin) return $query->where('price', '>', $priceMin);
    }

    public function scopeCompareArea($query, $areaMin, $areaMax ) {
        if($areaMin && $areaMax) return $query->whereBetween('land_area',  [$areaMin, $areaMax]);
        if(!$areaMin && $areaMax) $query->where('land_area', '<', $areaMax);
        if(!$areaMax && $areaMin) $query->where('land_area', '>', $areaMin);
    }
}
