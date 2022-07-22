@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-6">Update Doctor</h2>
            @include('admin.layouts.error')
            <form action="{{ route('doctor.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name"
                        value="{{ old('name', $doctor->name) }}">
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>
                    <input type="nuber" name="phone" class="form-control" placeholder="Phone"
                        value="{{ old('name', $doctor->phone) }}">
                </div>

                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="" selected disabled>Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $doctor->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Room</label>
                    <input type="text" name="room" class="form-control" placeholder="Room No"
                        value="{{ old('room', $doctor->room) }}">
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                    <img width="200" class="mt-1" src="{{ asset('uploads/doctors/' . $doctor->image) }}" alt="">
                </div>
                <button class="btn btn-warning px-5">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection