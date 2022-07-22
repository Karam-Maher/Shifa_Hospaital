@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-6">Add New Doctor</h2>
            @include('admin.layouts.error')

            <form action="{{route('sendemail',$data->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Greeting</label>
                    <input type="text" name="greeting" class="form-control" placeholder="Greeting">
                </div>
                <div class="mb-3">
                    <label for="">Body</label>
                    <input type="text" name="body" class="form-control" placeholder="Body">
                </div>

                <div class="mb-3">
                    <label for="">Action Text</label>
                    <input type="text" name="actiontext" class="form-control" placeholder="Action Url">
                </div>
                <div class="mb-3">
                    <label for="">Action Url</label>
                    <input type="text" name="actionurl" class="form-control" placeholder="Action Url">
                </div>

                <div class="mb-3">
                    <label for="">End Part</label>
                    <input type="text" name="endpart" class="form-control" placeholder="End Part">
                </div>
                <button class="btn btn-info px-5">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection
