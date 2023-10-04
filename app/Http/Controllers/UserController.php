<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //
    public function index(){
        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.username', 'users.profile_photo_path')
            ->orderBy('posts.created_at', 'desc')
            ->get();
        return view('dashboard',[
            'posts'=>$posts,
        ]);
    }

    public function savePost(Request $request){
        // Validate the request data
        $request->validate([
            'content' => 'required|max:255',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new post
        $post = new Post();
        $post->user_id = auth()->id(); // Assuming you're using authentication
        $post->content = $request->input('content');

        if ($request->hasFile('image_path')) {
            $post->image_path = $this->saveImage($request);
        }

        $post->save();

        return redirect('dashboard');
    }

    private function saveImage($request){
        $this->image = $request->file('image_path');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'storage/images/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
}
