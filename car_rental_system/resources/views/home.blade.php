@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are normal user.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Book Car Now') }} Now</div>

                <div class="card-body">
                    <form method="POST" action="/home/bookCar/" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <select id="city" class="form-control" name="city"  required >
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control" name="start_date" required min=<?php echo date('Y-m-d'); ?> />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control" name="end_date" required  min=<?php echo date('Y-m-d'); ?> />
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


@endsection

