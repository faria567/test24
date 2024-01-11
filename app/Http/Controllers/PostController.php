<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        //$posts = [];
        // get here all post with who user created this post with eager loading.
        // compact the post data to welcome view.
        $posts = Post::latest()->paginate(100);
        return view('welcome', compact('posts'));
    }

   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $posts)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,gif,png,jpg',
            'description' =>  'required|string',
        ]);
       

        if ($request->hasFile('image') && $request->image != null) {
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'posts'.'.'.$ext;

            $request->file('image')->move(public_path('uploads/'), $final_name);

            $posts->image = $final_name;
        }


        $posts->title = $request->title;
      
        $posts->description = $request->description;
       

        $posts->save();
       
       
        return redirect()->route('welcome');
    }
}
