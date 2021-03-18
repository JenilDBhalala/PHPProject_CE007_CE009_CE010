<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master page</title>
   
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
 body {
        background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/bmw.jpg');
        color: rgb(255, 255, 255);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        backdrop-filter: blur(4px);
    }
</style>
</html>
