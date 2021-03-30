@extends('admin.adminNav')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container mt-4"><h2>Contact Details</h2></div>
<div class="container mt-4">
    <table class="table table-hover mt-4">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
                <td>
                    <form action={{"/admin/deleteContact/".$contact->id}} method="post">
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