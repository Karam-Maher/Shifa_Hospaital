@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-6">Update Post</h2>
            @include('admin.layouts.error')
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name"
                        value="{{ old('name', $post->name) }}">
                </div>
                <div class="mb-3">
                    <label for="">Content</label>
                    <input type="text" name="content" class="form-control" placeholder="Content"
                        value="{{ old('name', $post->content) }}">
                </div>

                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="" selected disabled>Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $post->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                    <img width="200" class="mt-1" src="{{ asset('uploads/news/' . $post->image) }}" alt="">
                </div>
                <button class="btn btn-warning px-5">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
