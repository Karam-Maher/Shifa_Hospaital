<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Doctor;
use App\Models\Category;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $categries = Category::all();

            return view('user.index', compact('categries'));
        }
    }
    public function doctors()
    {
        $doctors = Doctor::all();
        return view('user.doctors', compact('doctors'));
    }
    public function about()
    {
        $doctors = Doctor::all();
        return view('user.about', compact('doctors'));
    }
    public function news()
    {
        $posts = Post::all();
        $categries = Category::all();
        return view('user.blog', compact('posts','categries'));
    }
    public function details($slug)
    {
        $posts = Post::where('slug', $slug)->get();
        $categries = Category::all();
        return view('user.blog-details', compact('posts','categries'));
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function contactsub(Request $request)
    {
        dd($request->all());
        // Mail::to('admin@gmail.com')->send(new ContactMail($request->except('_token')));
        // return redirect()->back();
    }
}
