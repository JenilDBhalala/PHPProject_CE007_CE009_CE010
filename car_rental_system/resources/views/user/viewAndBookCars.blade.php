@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container py-4">
    <h3 class="title">Book this Car Easily</h3><br>

    <div class="row">
        <div class="col-sm-8">
            <img class="img-fluid" src="{{$car->image}}">
        </div>

        <div class="col-sm-3 offset-sm-1">
            <div class="card text-dark bg-light mb-3">
                <div class="card-header">
                    <b>{{$car->name}}</b>
                </div>
                <div class="card-body">
                    <h6 class="card-title">
                        <ul class="list-unstyled">
                            <li><i style="font-size:19px"
                                    class="fa mb-3">&#xf041</i>&nbsp;&nbsp;{{ucfirst(trans($car->city))}}</li>
                            <li class="mb-3">&#8377 {{$car->price}} per day</li>
                            <li class="mb-3">Seat: {{$car->seat}} </li>
                            <li class="mb-3">Fuel : {{$car->fuel}}</li>
                        </ul>
                    </h6>
                </div>
            </div>

            <div class="card text-dark mb-3">
                <div class="card-header"> 
                    <b>Available</b></div>
                <div class="card-body">
                    <h5 class="card-title">
                        <ul class="list-unstyled">
                            <li class="mb-3">From : {{session('date1')}}</li>
                            <li class="mb-3">To : {{session('date2')}}</li>     
                            <li class="mb-3">Total Days : {{session('diff')}}</li>
                            <li class="mb-3">Total Rupees : &#8377 {{($car->price)*(session('diff'))}}</li>
                        </ul>
                    </h5>
                </div>
            </div>

            <form action="{{"/home/bookCar/payment/".$car->id}}" method="post">
                @csrf
                <input type="submit" value="Book Car Now" class="btn btn-outline-info" style="width: 100%;">
            </form>

        </div>
    </div>
</div>
<style>
    .card-title{
        font-size: 17px;
    }

    .card{
        opacity: 0.9;
    }

    .title{
        font-family: Arial, Helvetica, sans-serif;
    }

</style>
@endsection