<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select(['id', 'name'])->get();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'content' => 'required',
            'category_id' => 'required'
        ]);
        // Upload image
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_img_name = 'clinics_mana_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads/news/'), $new_img_name);
        Post::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $new_img_name,
            'content' => $request->content,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('posts.index')
        ->with('success', 'Post Added Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::select(['id', 'name'])->get();
        return view('admin.posts.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image',
            'content' => 'required',
            'category_id' => 'required',
        ]);
        $new_img_name = $post->image;
        if ($request->has('image')) {
            // Upload image
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_img_name = 'clinics_mana_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads/news/'), $new_img_name);
        }

        // add value
        $post->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $new_img_name,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')
        ->with('success', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
        ->with('success', 'Post Deleted Successfully');
    }
}
