<!-- Back to top button -->
@extends('user.layouts.master')

@section('content')




<table class="table">
    <thead>
        <tr>
            <th scope="col">Doctor Name</th>
            <th scope="col">Date</th>
            <th scope="col">Message</th>
            <th scope="col">Status</th>
            <th scope="col">Cancel Appointment</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($appoints as $appoint)
        <tr>
            <th>{{$appoint->doctor}}</th>
            <td>{{$appoint->date}}</td>
            <td>{{$appoint->message}}</td>
            <td>{{$appoint->status}}</td>
            <td><a href="{{route('cancel_appoint',$appoint->id)}}" class="btn btn-danger"
                    onclick="return confirm('are you sure to delete this')">Cancel</a></td>

        </tr>
        @endforeach


    </tbody>
</table>

@endsection
