<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('images')->get();
        foreach($posts as $post) {
            $post['fullname'] = $post->user->name;
            $post['phone'] = $post->user->phone;
            unset($post['user']);
        }
        return $posts;
    }
}
