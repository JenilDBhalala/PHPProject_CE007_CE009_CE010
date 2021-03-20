@extends('admin.adminNav')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container mt-4"><h2>Details of car</h2></div>
<div class="container mt-4">
    <table class="table table-hover mt-4">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Car name</th>
                <th scope="col">Seat</th>
                <th scope="col">City</th>
                <th scope="col">Price</th>
                <th scope="col">Fuel</th>
                <th scope="col">Available</th>
                <th scope="col">View</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <th scope="row">{{$car->id}}</th>
                <td>{{$car->name}}</td>
                <td>{{$car->seat}}</td>
                <td>{{ ucfirst(trans($car->city)) }}</td>
                <td>{{$car->price}}</td>
                <td>{{$car->fuel}}</td>
                <td>{{$car->available}}</td>
                <td>
                    <form action={{"/admin/viewCar/".$car->id}} method="post">
                        @csrf
                        <input type="submit" value="view" class="btn btn-info">
                    </form>
                </td>
                <td>
                    <form action={{"/admin/editCar/".$car->id}} method="post">
                        @csrf
                        <input type="submit" value="Edit" class="btn btn-primary">
                    </form>
                </td>
                <td>
                    <form action={{"/admin/deleteCar/".$car->id}} method="post">
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<style>
    .table{
        background-color: aliceblue;
        color: black;
        opacity: 0.9;
    }
</style>
@endsection