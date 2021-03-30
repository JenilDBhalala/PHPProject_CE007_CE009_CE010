@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<div class="container py-4">
    <h3 class="title">Make Payment Through Card</h3><br>

    <div class="row">
        <div class="col-sm-7 ">
            <img class="img-fluid" src='/storage/images/static/make_payment_girl.jpg'>
        </div>

        <div class="col-sm-5 ">
            <div class="card text-dark bg-light mb-3">
                <div class="card-header">
                    <b>Payment Form &nbsp;<i style="font-size:24px" class="fa">&#xf1f0;</i></b>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <form action={{"/home/bookCar/payment/success/".$car->id}} method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="rs"
                                    class="col-md-3 offset-1 col-form-label text-md-right">{{ __('Total Rs.') }}</label>
                                <div class="col-md-7">
                                    <input id="rs" type="text" class="form-control" name="rs"
                                        value="{{($car->price)*(session('diff'))}}" readonly required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="card_no"
                                    class="col-md-3 offset-1 col-form-label text-md-right">{{ __('Card_No') }}</label>
                                <div class="col-md-7">
                                    <input id="card_no" type="text" class="form-control" name="card_no" minlength="12"
                                        maxlength="12" pattern="[0-9]+" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-3 offset-1 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-7">
                                    <input id="name" type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cvv"
                                    class="col-md-3 offset-1 col-form-label text-md-right">{{ __('CVV') }}</label>
                                <div class="col-md-7">
                                    <input id="cvv" type="password" class="form-control" name="cvv" minlength="3"
                                        maxlength="3" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="otp"
                                    class="col-md-3 offset-1 col-form-label text-md-right">{{ __('OTP') }}</label>
                                <div class="col-md-7">
                                    <input id="otp" type="text" class="form-control" name="otp" minlength="6"
                                        maxlength="6" pattern="[0-9]+" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="proceed"
                                    class="col-md-3 offset-1 col-form-label text-md-right">{{ __('') }}</label>
                                <div class="col-md-7">
                                    <input id="proceed" type="submit" class="btn btn-success" value="Proceed">
                                </div>
                            </div>
                        </form>
                    </h5>
                </div>
            </div>
            <div class="card text-dark bg-light mb-3 mt-3">
                <div class="card-header">
                    <b>{{$car->name}}</b>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <ul class="list-unstyled">
                            <li><i style="font-size:19px"
                                    class="fa mb-3">&#xf041</i>&nbsp;&nbsp;{{ucfirst(trans($car->city))}}</li>
                            <li class="mb-3">&#8377 {{$car->price}} per day</li>
                            <li class="mb-3"><i style='font-size:19px' class='fa'>&#xf073;</i>&nbsp;&nbsp;{{session('date1')}} <i
                                    style="font-size:19px" class="fa">&#xf07e;</i> {{session('date2')}}</li>
                            <li class="mb-3">Total Days : {{session('diff')}}</li>
                        </ul>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card-title{
        font-size: 17px;
    }

    .card{
        opacity: 0.9;
    }
</style>

@endsection