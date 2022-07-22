@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Approved</th>
                    <th>Canceled</th>
                </tr>
                @foreach ($data as $appoint)
                <tr>
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td><a href="{{route('approved',$appoint->id)}}" class="btn btn-success">Approved</a></td>
                    <td><a href="{{route('canceled',$appoint->id)}}" class="btn btn-danger">Canceled</a></td>
                    <!-- <td><a href="{{route('emailview',$appoint->id)}}" class="btn btn-primary">Send Mail/a></td> -->
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection