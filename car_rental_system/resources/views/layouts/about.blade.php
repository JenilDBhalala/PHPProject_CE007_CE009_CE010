@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        img {
            border-radius: 50%;
        }

        .column {
            float: left;
            width: 25%;
            margin-bottom: 15px;
            margin-left: 80px;
            margin-top: 10px;
            padding: 0 10px;
        }

        .card {
            opacity: 0.9;
        }

        .about-section {
            padding: 10px;
            text-align: center;
            /* background-color: #181313; */
            color: white;
            opacity: 0.7;
        }

        .container {
            padding: 0 16px;
        }

        .title {
            color: #555;
        }

        h3 {
            color: black;
        }

        .position {
            color: grey;
        }

        .mail {
            color: #555;
        }
    </style>
</head>

<body>
    <div class="about-section bg-dark">
        <h1>About Us</h1>
        <p>“Websites promote you 24/7: No employee will do that.” - Paul Cookson</p>
    </div>

    <h2 style="text-align:center"></h2>
    <div class="row py-4">

        <div class="column">
            <div class="card">
                <hr>
                <img src="https://media-exp1.licdn.com/dms/image/C4D03AQEzJpJ7JXh3oQ/profile-displayphoto-shrink_200_200/0/1605680237703?e=1620864000&v=beta&t=qooNxFDaHabkCniCTArFyPJi2OkMRyhHGAmCfO0mczk"
                    alt="John" style="width:100%">
                <div class="container">
                    <hr>
                    <h3>Jenil Bhalala</h3>
                    <p class="title">CSE 2nd year Student</p>
                    <p class="position">Pursuing B.Tech in computer engineering at Dharamsinh Desai University, Nadiad
                    </p>
                    <p class="mail"><i class="fa">&#xf0e0&nbsp</i> jenilbhalala@gmail.com</p>
                </div>
            </div>
        </div>
        
        <div class="column">
            <div class="card">
                <hr>
                <img src="https://media-exp1.licdn.com/dms/image/C5603AQExpX0sde_SxA/profile-displayphoto-shrink_800_800/0/1617007321058?e=1622678400&v=beta&t=-hxPYGbyrPuqwFHg78JXYlg00BdadEk5ZYIHDVmorTM"
                    alt="Jane" style="width:100%">
                <div class="container">
                    <hr>
                    <h3>Bhavin Babariya</h3>
                    <p class="title">CSE 2nd year Student</p>
                    <p class="position">Pursuing B.Tech in computer engineering at Dharamsinh Desai University, Nadiad
                    </p>
                    <p class="mail"><i class="fa">&#xf0e0&nbsp</i> bhavinbabariya@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <hr>
                <img src="https://media-exp1.licdn.com/dms/image/C4E03AQG5rymbUpfhBw/profile-displayphoto-shrink_800_800/0/1606668463572?e=1622678400&v=beta&t=-7-LMF32FaeVtK4htHfmoQTEPi1_9c8siXD6V5IX3Q4"
                    alt="Mike" style="width:100%">
                <div class="container">
                    <hr>
                    <h3>Nikhil Bambhroliya</h3>
                    <p class="title">CSE 2nd year Student</p>
                    <p class="position">Pursuing B.Tech in computer engineering at Dharamsinh Desai University, Nadiad
                    </p>
                    <p class="mail"><i class="fa">&#xf0e0&nbsp</i> nikhilbpatel@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection