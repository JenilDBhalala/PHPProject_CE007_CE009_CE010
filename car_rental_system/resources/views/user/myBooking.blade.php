@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="mt-5">My Booking</h2>
    <table class="table table-hover mt-4">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">City</th>
                <th scope="col">Car Name</th>
                <th scope="col">Image</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Payment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <th scope="row">{{$booking->city}}</th>
                <td>{{$booking->carname}}</td>
                <td><img src="{{$booking->image}}" style="width:50px; height:50px;"></td>
                <td>{{$booking->start_date}}</td>
                <td>{{$booking->end_date}}</td>
                <td>{{$booking->payment}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
</div>
<style>
    .table{
        opacity: 0.9;
    }
</style>
@endsection