<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\ReviewLike;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReviewController extends Controller
{
    public function index($postDetailRequest, $postId) {

        $reviews = Review::where('post_id', $postId)
            ->with('user')
            ->get();

        foreach ($reviews as $review) {

            $review['posted_time'] = Carbon::create($review->created_at)->diffForHumans();
            $review['like_number'] = ReviewLike::where('review_id', $review->id)->count();

            $cur_review_user = ReviewLike::where('review_id', $review->id)
                ->where('user_id', $postDetailRequest->get('user_id'))
                ->get();
            $review['liked_by_current_user'] = $cur_review_user->isNotEmpty();
        }

        return $reviews;
    }

    public function store(Request $request) {
        
        $userId = $request->userId;
        $postId = $request->postId;
        $content = $request->content;

        $newReview=Review::create([
            'user_id' => $userId,
            'post_id' => $postId,
            'content' => $content,
        ]);

        return $newReview;
    }

    public function like(Request $request) {

        $userId = $request->userId;
        $reviewId = $request->reviewId;

        ReviewLike::create([
            'user_id' => $userId,
            'review_id' => $reviewId,
        ])->save();

        return response('ok');
    }
}
