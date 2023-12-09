<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index() {
        $posts = Post::get();
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
