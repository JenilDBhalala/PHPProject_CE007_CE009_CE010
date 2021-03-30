@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container mb-10 py-4">
    <h4>Book Car in Your City</h4><br>
    <div class="row">
        @foreach($cars as $car)
        <div class="col-sm-4">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">{{$car->name}}</div>
                <img src="{{$car->image}}" class="card-img-top" height="200px">
                <div class="card-body">
                    <h4 class="card-title">&#8377 {{$car->price}} <small>per day </small></h4>
                    </form>
                </div>
                <div class="card-footer">
                    <i style="font-size:19px" class="fa mb-3">&#xf041</i>
                    <b style="font-size:15px">&nbsp;{{ucfirst(trans($car->city))}}</b>
                    <form action={{"/home/bookCar/".$car->id}} method="post" class="d-inline" style="float : right">
                        @csrf
                        <input type="submit" value="View and Book" class="btn btn-outline-success"></h4>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection