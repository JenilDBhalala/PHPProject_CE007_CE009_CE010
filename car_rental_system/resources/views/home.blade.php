@extends('layouts.app')
@section('content')
<div class="container py-4">
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
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Search Your Idal Car') }} Now</div>

                <div class="card-body">
                    <form method="POST" action="/admin/result" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <select id="city" class="form-control" name="city" required>
                                    <option value="surat">Surat</option>
                                    <option value="vadodara">Vadodara</option>
                                    <option value="ahmedabad">Ahmedabad</option>
                                    <option value="gandhinagar">Gandhinagar</option>
                                    <option value="jamanagar">Jamanagar</option>
                                    <option value="vadodara">Rajkot</option>
                                    <option value="surat">Mahesana</option>
                                    <option value="vadodara">Nadiad</option>
                                    <option value="surat">Anand</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start_date"
                                class="col-md-4 col-form-label text-md-right">{{ __('Starting Date') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="date" name="start_date" id="start_date" onkeyup = "Validate(this)" required min=<?php echo date('Y-m-d');?> />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="end_date"
                                class="col-md-4 col-form-label text-md-right">{{ __('Ending Date') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="date" name="end_date"  id="end_date" onkeyup = "Validate(this)" required min=<?php echo date('Y-m-d');?> />
                            </div>
                        </div>

                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Now') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* .card {  
        box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);
        background-color: rgba(136, 178, 241, 0.2);
        transition: 0.3s;
    } */

    .card {
        color: black;
        opacity: 0.9;
    }
</style>
@endsection