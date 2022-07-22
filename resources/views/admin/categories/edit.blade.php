@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-12">
            <h2 class="mb-4">Update Category</h2>

            @include('admin.layouts.error')

            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control"
                        placeholder="Name">
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                    <img width="200" class="mt-1" src="{{ asset('uploads/categories/' . $category->image) }}" alt="">
                </div>

                <button class="btn btn-warning px-5">Update</button>
            </form>
        </div>

    </div>

</div>
@endsection
