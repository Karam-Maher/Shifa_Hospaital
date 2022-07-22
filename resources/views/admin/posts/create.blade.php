@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-6">Add New Post</h2>
            @include('admin.layouts.error')
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="">Content</label>
                    <input type="nuber" name="content" class="form-control" placeholder="Content">
                </div>
                <div class="mb-3">
                    <label for="">Speciality</label>
                    <select name="category_id" class="form-control">
                        <option value="" selected disabled>Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button class="btn btn-info px-5">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection
