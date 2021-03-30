@extends('admin.adminNav')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<div class="container mt-5">
    <h2 class="title">Uploaded Car Information</h2><br>

    <div class="row">
        <div class="col-sm-7">
            <img class="img-fluid mb-4" src="{{$car->image}}">
        </div>

        <div class="col-sm-5">
            <table class="table table-hover mt-4 mb-5">
                <thead class="thead-light">
                    <tr align="center">
                        <th scope="col" colspan="2">Uploaded Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{$car->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Fuel</th>
                        <td>{{$car->fuel}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Price</th>
                        <td>{{$car->price}}</td>
                    </tr>
                    <tr>
                        <th scope="row">City</th>
                        <td>{{$car->city}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Seat</th>
                        <td>{{$car->seat}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Available</th>
                        <td>{{$car->available}}</td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="2"><a href="/admin/home/" class="btn btn-info">Go Back</a>
                            <a href="/admin/addCar/" class="btn btn-info">Add More</a>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<style>
    .table-hover {
        background-color: #f5f5f5;
        opacity: 0.9;
    }

    .title{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
@endsection