<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likePost(Request $request)
    {
        $postId = $request->input('postId');
        dd($request);
    }


//    public function likePost($request){
//        dd($request->postId);


//        $user = auth()->user();
//
//        if(!$user->likes()->where('post_id',$postId)->exists()){
//            Like::create([
//                'user_id' => $user->id,
//                'post_id' => $postId,
//            ]);
//        }
//        return redirect()->back();
//    }

//    public function unlikePost($postId){
//        // Get the authenticated user
//        $user = auth()->user();
//
//        // Find and delete the like record if it exists
//        $like = $user->likes()->where('post_id', $postId)->first();
//
//        if ($like) {
//            $like->delete();
//        }
//
//        // Redirect back to the post or update the UI as needed
//        return redirect()->back();
//    }
}
