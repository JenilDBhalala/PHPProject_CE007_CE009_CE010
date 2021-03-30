@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container py-4">
    <h3 class="title">Payment done successfully and your car is booked!</h3>
    <div class="row">
        <div class="col-sm-8">
            <br>
            <img class="img-fluid mt-3" src='/storage/images/static/payment_done_girl.jpg'>
            <br><br><br>
            <div class="card text-dark bg-light mb-3 mt-2">
                <div class="card-header">
                    <b>Read Instructions and Conditions</b>
                </div>
                <div class="card-body">
                    <h5 class="title">
                        <ul>
                            <small>
                                <li>Please come at Head Office for taking car on first day from 7:00 AM</li><br>
                                <li>Ensure that you must having Driving Licence and Aadhar Card along with you during
                                    your journey</li><br>
                                <li>You must have to deposit car on last day by 9:30 PM </li><br>
                                <li>Otherwise extra charge will be taken!</li><br>
                                <li>Mandatory seat belt fastening in the car</li><br>
                                <li>No more person allowed inside car greater than capacity</li><br>
                                <li>Please follow Rules and Regulations</li><br>
                                <li>Drive Carefully!!!</li><br>
                                <li>Take care of yourself and your family and make your journey great!</li><br>
                                <li><b>Happy Journey!!!</b></li><br>
                            </small>
                        </ul>
                    </h5>
                </div>
            </div>
            <div class="card text-dark bg-light mb-3">
                <div class="body">
                    <b>
                        <center>Please don't forget to give us feedback after your journey!</center>
                    </b>
                </div>
            </div>

        </div>

        <div class="col-sm-4 done">
            <div class="card text-dark bg-light mb-3">
                <div class="card-header">
                    <b>{{$car->name}}</b>
                </div>
                <div class="card-body">
                    <img class="img-fluid" src="{{$car->image}}">
                    <hr>
                    <h5 class="card-title">
                        <ul class="list-unstyled">
                            <li><i style="font-size:19px"
                                    class="fa mb-3">&#xf041</i>&nbsp;&nbsp;{{ucfirst(trans($car->city))}}</li>
                            <li class="mb-3">From : {{session('date1')}}</li>
                            <li class="mb-3">To : {{session('date2')}}</li>
                            <li class="mb-3">Total Days : {{session('diff')}}</li>
                            <li class="mb-3">Fuel : {{$car->fuel}}</li>
                            <li class="mb-3">&#8377 {{$car->price}} per day</li>
                            <li class="mb-3">Total Rupees : &#8377 {{($car->price)*(session('diff'))}}</li>
                        </ul>
                    </h5>
                </div>
            </div>

            <div class="card text-dark mb-3">
                <div class="card-body">
                    <img class="img-fluid mt-3" src='/storage/images/static/deal_car.jpg'>
                    <hr>
                    <img class="img-fluid mt-3" src='/storage/images/static/give_key.jpg'>
                </div>
            </div>

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

    .done{
        margin-top:37px;
    }
</style>
@endsection