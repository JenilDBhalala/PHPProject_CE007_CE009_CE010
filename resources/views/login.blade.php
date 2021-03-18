<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-6">
                <div>
                    <h2>Login</h2>
                </div><br>
                <form action="/login" method="POST">
                    <div class="form-group">
                        @csrf
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Choose a unique Email-ID"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="pass">Enter your password </label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your password" minlength=6  title="Your password must be atleast 6 characters"
                            required>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
<style>
    .custom-login{
        padding-top: 110px;
        padding-left: 400px;
        opacity: 0.8;
    }
    body {
        background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/bmw.jpg');
        color: rgb(255, 255, 255);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        backdrop-filter: blur(3px);
    }
</style>

</html>

