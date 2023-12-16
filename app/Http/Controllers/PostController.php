<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request) {

        $query = Post::query();

        $sortType = $request->query('sortType', 0);
        switch ($sortType) {
            case 1:
                $query->orderBy('created_at', 'desc');
                break;
            case 2:
                $query->orderBy('price', 'asc');
                break;
            case 3:
                $query->orderBy('price', 'desc');
                break;
            case 4:
                $query->orderBy('land_area', 'asc');
                break;
            case 5:
                $query->orderBy('land_area', 'desc');
        }

        $posts = $query->get();

        foreach($posts as $post) {

            $post['fullname'] = $post->user->name;
            $post['phone'] = $post->user->phone;
            unset($post['user']);

            foreach($post->images as $image) {

                $image['url'] = asset($image['url']);
                unset($image['created_at'], $image['updated_at']);
            }
        }

        return $posts;
    }

    public function show($id) {
        $post = Post::with(['user', 'images', 'videos'])->find($id);
        $post->view_number++;
        $post->save();
        foreach($post->images as $image) {
            $image['url'] = asset($image['url']);
        }
        return $post;
    }

    public function featured() {
        $featuredPosts = Post::with('images')
            ->orderBy('view_number', 'desc')
            ->limit(5)
            ->get();
        return $featuredPosts;
    }

    public function similar(Request $request) {
        $type = $request->type;
        $price = $request->price;
        $area = $request->area;
        $district = $request->district;
        $ward = $request->ward;

        $query = Post::query();

        // type
        if($type)
            $query->where('type', $type);

        // price
        if($price)
            $query->whereBetween('price', [$price - 500000, $price + 500000]);

        // area
        if($area)
            $query->whereBetween('land_area', [$area - 10, $area + 10]);

        // district
        if($district && $ward)
            $query
                ->where('district', 'LIKE', "%$district%")
                ->where('ward', 'LIKE', "%$ward%");

        $result = $query->get();

        return $result;
    }

    public function filter(Request $request) {
        $type = $request->type;
        $priceMin = $request->priceMin;
        $priceMax = $request->priceMax;
        $areaMin = $request->areaMin;
        $areaMax = $request->areaMax;
        $district = $request->district;
        $ward = $request->ward;
        $street = $request->street;

        $query = Post::query();

        // type
        if($type)
            $query->where('type', $type);

        // price
        $query->comparePrice($priceMin, $priceMax);

        // area
        $query->compareArea($areaMin, $areaMax);

        // district
        if($district) $query->where('district', 'LIKE', "%$district%");

        if($ward) $query->where('ward', 'LIKE', "%$ward%");

        if($street) $query->where('street', 'LIKE', "%$street%");

        $result = $query->get();

        return $result;

    }
}
