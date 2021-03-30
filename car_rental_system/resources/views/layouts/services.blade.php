@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/font-awesome.min.css">
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <div class="container py-4">
         <h4 class=" card heading">Why you should choose us?</h4>
        <div class="box">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i style="font-size:45px" class="fa">&#xf1b9;</i><br><br>
                    <div class="title">
                        <h4>100% Delivery & Pickup</h4>
                    </div>
                    <div class="text">
                        <h6>For every booking, every car model. With industry leading on-time performance. We love to
                            make things easy for you!</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i style="font-size:45px" class="fa">&#xf1b8;</i><br><br>
                    <div class="title">
                        <h4>No Limits</h4>
                    </div>
                    <div class="text">
                        <h6>Drive as much as you want with unlimited kms. Just like your own car. There is no limit on
                            Driving!</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <span class="iconify" data-icon="fa-solid:layer-group" style="font-size:45px"
                        data-inline="false"></span><br><br>
                    <div class="title">
                        <h4>New Fleet</h4>
                    </div>
                    <div class="text">
                        <h6>Our fleet addition process ensures that majority of our cars are only a few months old at
                            any time. Say goodbye to bad cars!</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 py-4">
                <div class="box-part text-center">
                    <i class="fa fa-money" style="font-size:45px"></i><br><br>
                    <div class="title">
                        <h4>0 Hidden Charges</h4>
                    </div>
                    <div class="text">
                        <h6>Our tariffs include taxes & insurance. And since our tariffs do NOT include fuel, it means
                            you pay for only as much fuel as you use!</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 py-4">

                <div class="box-part text-center">
                    <i class="fa fa-smile-o" style="font-size:45px"></i><br><br>
                    <div class="title">
                        <h4>Limited Liability</h4>
                    </div>
                    <div class="text">
                        <h6>Enjoy complete peace of mind with your liability limited to Rs. 10000. In case of any
                            unfortunate incident, our insurance cover will take care of the rest!</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  py-4">

                <div class="box-part text-center">
                    <i class="fa fa-edit" style="font-size:45px"></i><br><br>
                    <div class="title">
                        <h4>Booking in 2 Minutes</h4>
                    </div>
                    <div class="text">
                        <h6>No hassle of uploading your driving license and waiting for its approval. Application
                            interface is very easy to use. So you can book car of your choice in couple of minutes!</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>
    body {
        background: #eee;
    }

    a {
        text-decoration: none;
        color: #0062cc;
    }

    .box {
        padding: 60px 0px;
        opacity: 0.9;
    }

    .box-part {
        background: #FFF;
        border-radius: 0;
        padding: 60px 10px;
        margin: 0px 0px;
        color: black;
    }

    .text {
        margin: 20px 0px;
    }

    .fa {
        color: #4183D7;
    }

    .iconify {
        color: #4183D7;
    }

    .heading{
        font-family:Arial, Helvetica, sans-serif;
        color: black;
        text-align: center;
        width: 500px;
        height:40px;
        margin-left: 310px;
        opacity: 0.8;
        background: #b1cdf1;
        padding-top: 3px;
    }

</style>
@endsection