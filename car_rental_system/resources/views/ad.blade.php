@extends('layouts.app')
@section('content')
      <div class = "box">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
         integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
         <img src="/images/wallpaper4.jpg"> 
         <div class="statement">
            <b>Find the Best Car For You</b>
         </div>
         <a class = "btn btn-primary" href="/login">Book Now</a>
      </div>

      <style>
         .box {
            position: relative;
            width: 100%;
            max-width: 1600px;
            align: center
         }
         .box img {
            padding-top: 0px;
            width: 100%;
            height: 600px;
         }
         .statement {
            position: absolute;
            top: 37%;
            left: 80%;
            transform: translate(-50%, -50%);
         }
         .statement b{
            font-family: "Cambria", "Courier New", monospace;
            font-size: 50px;
            color:black;
         }
         .box a{
            position: absolute;
            top: 59%;
            left: 75%;
            transform: translate(-60%, -50%);
         }
      </style>
@endsection