
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Car') }} Now</div>

                <div class="card-body">
                    <form method="POST" action={{"/admin/updateCar/".$car->id}} enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value={{$car->name}} required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <select id="city" class="form-control" name="city" value={{$car->city}} required >
                                    <option value={{$car->city}}>{{ ucfirst(trans($car->city)) }}</option>
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
                            <label for="seat" class="col-md-4 col-form-label text-md-right">{{ __('Seat') }}</label>

                            <div class="col-md-6">
                                <input id="seat" type="number" class="form-control" name="seat" value={{$car->seat}} required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fuel" class="col-md-4 col-form-label text-md-right">{{ __('Fuel') }}</label>

                            <div class="col-md-6">
                                @if ($car->fuel =="petrol")
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="fuel" id="petrol" value="petrol" checked>
                                        <label class="form-check-label" for="petrol">
                                            Petrol
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="fuel" id="diesel" value="diesel" >
                                        <label class="form-check-label" for="diesel">
                                            Diesel
                                        </label>
                                    </div>
                                @else
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fuel" id="petrol" value="petrol">
                                    <label class="form-check-label" for="petrol">
                                        Petrol
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fuel" id="diesel" value="diesel" checked>
                                    <label class="form-check-label" for="diesel">
                                        Diesel
                                    </label>
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" value={{$car->price}} required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Upload image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" name="image" accept="image/x-jpg,image/jpeg">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fuel" class="col-md-4 col-form-label text-md-right">{{ __('Available') }}</label>

                            <div class="col-md-6">
                                @if ($car->available =="yes")
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="available" id="yes" value="yes" checked>
                                        <label class="form-check-label" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="available" id="no" value="no" >
                                        <label class="form-check-label" for="no">
                                            No
                                        </label>
                                    </div>
                                    @else
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="available" id="yes" value="yes">
                                            <label class="form-check-label" for="yes">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="available" id="no" value="no" checked>
                                            <label class="form-check-label" for="no">
                                                No
                                            </label>
                                        </div>
                                    @endif
                                
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
