@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">All doctorss</h2>
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @include('admin.layouts.error')
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>image</th>
                    <th>phone</th>
                    <th>speciality</th>
                    <th>room</th>
                    <th>Created_At</th>
                    <th>Action</th>
                </tr>
                @foreach ($doctors as $doctor )
                <tr>
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->name}}</td>
                    <td>
                        <img width="70" src="{{asset('uploads/doctors/'.$doctor->image)}}" alt="">
                    </td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->category->name }}</td>
                    <td>{{$doctor->room}}</td>
                    <td>{{$doctor->created_at->format('d-m-Y')}}</td>
                    <td>
                        <a href="{{route('doctor.edit',$doctor->id)}}" class="btn btn-primary btn-sm"><i
                                class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{route('doctor.destroy',$doctor->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm ('are you sure ?') " class="btn btn-danger btn-sm"><i
                                    class="fas fa-times"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {{$doctors->links() }}
        </div>
    </div>
</div>
@endsection
