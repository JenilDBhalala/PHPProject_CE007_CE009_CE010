@extends('layouts.app')
   
@section('content')


      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <div class="jumbotron">
            <h1 class="display-4">Welcome To Car Rental System</h1>
            <p class="lead">This is a Car Rental System in which as admin you can add different car in different location</p>
            <hr class="my-4">
                <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Surat </b>&nbsp;
                <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Ahmedabad</b>&nbsp;
                <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Vadodara</b>&nbsp;
                <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Gandhinagar</b>&nbsp;
                <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Rajkot</b>&nbsp;
                <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Jamanagar</b>&nbsp;
                <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Mahesana</b>&nbsp;
                <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Nadiad</b>&nbsp;
                <b><i style="font-size:19px" class="fa mb-3">&#xf041</i> Anand</b>&nbsp;
                
            <p class="lead">
                <a class="btn btn-info btn-lg mt-3" href="/admin/addCar/" role="button">Add More Car</a>
            </p>
            <p class="lead">
                <a class="btn btn-success btn-lg mt-3" href="/admin/showCars/" role="button">See All Car</a>
            </p>
        </div>

            <div class="container">
            <h2>Details of city wise car</h2>
                <table class="table table-hover mt-4">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">City</th>
                            <th scope="col">Total Car</th>
                            <th scope="col">Max price</th>
                            <th scope="col">Min price</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <th scope="row">{{$car->city}}</th>
                            <td>{{$car->count}}</td>
                            <td>{{$car->max_price}}</td>
                            <td>{{$car->min_price}}</td>
                        </tr>
                    @endforeach
                        
                    </tbody>
                </table>
            </div>  
@endsection