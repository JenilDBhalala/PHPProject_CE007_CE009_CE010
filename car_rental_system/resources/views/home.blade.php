@extends('layouts.app')
@section('content')

<div class="container">
    <div id="carouselExampleControls" class="carousel slide py-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/Hyundai-i10-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/wallpaper4.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Maruti-Suzuki-Swift-3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Maruti-Suzuki-Baleno-1.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container py-4"><h3 class="title">Search your Ideal Car Now</h3></div>
<div class="container form">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Search Car') }}</div>

                <div class="card-body">
                    <form method="POST" action="/home/bookCar/" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <select id="city" class="form-control" name="city" required>
                                    <option value="">--Select City--</option>
                                    <option value="surat">Surat</option>
                                    <option value="vadodara">Vadodara</option>
                                    <option value="ahmedabad">Ahmedabad</option>
                                    <option value="gandhinagar">Gandhinagar</option>
                                    <option value="jamanagar">Jamanagar</option>
                                    <option value="rajkot">Rajkot</option>
                                    <option value="mahesana">Mahesana</option>
                                    <option value="nadiad">Nadiad</option>
                                    <option value="anand">Anand</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control" name="start_date" required
                                    min=<?php echo date('Y-m-d'); ?> />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control" name="end_date" required
                                    min=<?php echo date('Y-m-d'); ?> />
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search Now') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            color: black;
            opacity: 0.9;
        }

        .d-block {
            /* background-repeat: no-repeat; */
            /* background-attachment: fixed; */
            height: 485px;
        }

        .form{
            margin-bottom: 60px;
        }

        .title{
            margin-left: 190px;
        }
    </style>
    @endsection