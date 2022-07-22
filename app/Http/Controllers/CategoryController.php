<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categries = Category::latest()->paginate(5);
        return view('admin.categories.index', compact('categries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');

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
            'name' => 'required|unique:categories,name',
            'image' => 'required|image',
        ]);
// Upload image
$ex = $request->file('image')->getClientOriginalExtension();
$new_img_name = 'clinics_mana_' . time() . '.' . $ex;
$request->file('image')->move(public_path('uploads/categories/'), $new_img_name);
        // Add Value
        Category::create([
            'name' => $request->name,
            'image' => $new_img_name,
            'slug' => Str::slug($request->name)
        ]);

        // redirect to index with message
        return redirect()->route('categories.index')
        ->with('success', 'Category Addedd Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image',
        ]);
        $new_img_name = $category->image;
        
        if ($request->has('image')) {
            // Upload image
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_img_name = 'clinics_mana_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads/categories/'), $new_img_name);
        }
        $category->update([
            'name' => $request->name,
            'image' => $new_img_name,
            'slug' => Str::slug($request->name)
        ]);

        // redirect to index with message
        return redirect()->route('categories.index')
        ->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        $category->posts()->delete();
        $category->doctors()->delete();
        return redirect()->route('categories.index')
        ->with('success', 'Category Deleted Successfully');
    }
}
