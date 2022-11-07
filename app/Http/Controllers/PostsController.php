<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->caption = $data['caption'];
        $post->image = $imagePath;

        $post->save();

        return redirect()->route('profile.index', [
            'user' => auth()->user()->id,
        ]);
    }
}
