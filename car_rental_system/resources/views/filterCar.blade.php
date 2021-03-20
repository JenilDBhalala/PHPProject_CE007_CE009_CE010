<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Car') }} Now</div>

                <div class="card-body">
                    <form method="POST" action="/admin/result" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <select id="city" class="form-control" name="city"  required >
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
                            <label for="seat" class="col-md-4 col-form-label text-md-right">{{ __('Seat') }}</label>

                            <div class="col-md-6">
                                <input id="seat" type="number" class="form-control" name="seat" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fuel" class="col-md-4 col-form-label text-md-right">{{ __('Fuel') }}</label>

                            <div class="col-md-6">
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
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Upload image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" name="image" accept="image/x-jpg,image/jpeg"  required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fuel" class="col-md-4 col-form-label text-md-right">{{ __('Available') }}</label>

                            <div class="col-md-6">
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
    }       

    .form-control{
        opacity: 0.7;
    } */

    .card{
        color: black;
        opacity: 0.9;
    }
</style>