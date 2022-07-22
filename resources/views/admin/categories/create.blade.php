@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-12">
            <h2 class="mb-4">Add New Category</h2>

            @include('admin.layouts.error')

            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
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
