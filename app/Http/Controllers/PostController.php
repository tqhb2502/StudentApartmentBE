<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

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
}
