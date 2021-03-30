@extends('admin.adminNav')
@section('content')

<div class="card">
    <div class="card-body">
        <h1 class="display-4">Welcome To Car Rental System</h1>
        <p class="lead">This is a Car Rental System in which as admin you can add different car in different location
        </p>
        <hr class="my-4">
        <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Surat </b>&nbsp &nbsp;
        <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Ahmedabad</b>&nbsp &nbsp;
        <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Vadodara</b>&nbsp &nbsp;
        <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Gandhinagar</b>&nbsp &nbsp;
        <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Rajkot</b>&nbsp &nbsp;
        <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Jamanagar</b>&nbsp &nbsp;
        <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Mahesana</b>&nbsp &nbsp;
        <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Nadiad</b>&nbsp &nbsp;
        <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Anand</b>&nbsp &nbsp;

        <p class="lead">
            <a class="btn btn-primary btn-lg mt-3" href="/admin/addCar/" role="button">Add More Car</a>&nbsp
            <a class="btn btn-success btn-lg mt-3" href="/admin/showCars/" role="button">See All Car</a>&nbsp
            <a class="btn btn-secondary btn-lg mt-3" href="/admin/contactDetails/" role="button">Contact Details</a>
        </p>
    </div>
</div>
<br>
<div class="container mt-4">
    <h2>Details of city wise car</h2>
</div>
<div class="container mt-4">
    <table class="table table-hover mt-4">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">City</th>
                <th scope="col">Total Car</th>
                <th scope="col">Max price</th>
                <th scope="col">Min price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <th>{{$loop->index+1}}</th>
                <th scope="row">{{ ucfirst(trans($car->city)) }}</th>
                <td>{{$car->count}}</td>
                <td>{{$car->max_price}}</td>
                <td>{{$car->min_price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<br>
<div class="container">
    <h2>Booking Details of {{$month_year}}</h2>
    <table class="table table-hover mt-4">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">City</th>
                <th scope="col">Car Name</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">User</th>
                <th scope="col">Payment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <th scope="row">{{$booking->city}}</th>
                <td>{{$booking->carname}}</td>
                <td>{{$booking->start_date}}</td>
                <td>{{$booking->end_date}}</td>
                <td>{{$booking->username}}</td>
                <td>{{$booking->payment}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th scope="col" colspan='5' style="float : 'right';"></th>
                <th scope="col">Total</th>
                <th scope="col">{{$total_payment}}</th>
            </tr>
        </tfoot>
    </table>
    <hr>
</div>

<br>
<div class="container">
    <h2>How Many Booking Done in {{$month_year}} citywise?</h2>
    <table class="table table-hover mt-4">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">City</th>
                <th scope="col">Total Booking</th>

            </tr>
        </thead>
        <tbody>
            @foreach($booking_city as $col)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <th scope="row">{{$col->city}}</th>
                <td>{{$col->total}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
</div>

<br>
<div class="container">
    <h2>We have.........</h2>
    <table class="table table-hover mt-4">
        <tbody>
            <tr>
                <th scope="row">Total Car in different city</th>
                <td>{{$total_car}}</td>
            </tr>
            <tr>
                <th scope="row">Total User</th>
                <td>{{$total_user}}</td>
            </tr>
            <tr>
                <th scope="row">Total Booking</th>
                <td>{{$total_booking}}</td>
            </tr>
        </tbody>
    </table>
    <hr>
</div>
<style>
    .card {
        max-width: 1000px;
        padding-left: 65px;
        padding-right: 40px;
        padding-top: 10px;
        margin-top: 25px;
        margin-left: 135px;
        color: black;
        opacity: 0.9;
    }

    .table {
        background-color: aliceblue;
        color: black;
        opacity: 0.9;
        margin-bottom: 40px;
    }
</style>

@endsection