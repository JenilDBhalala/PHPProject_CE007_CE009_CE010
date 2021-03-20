@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div><h3>Contact Us</h3></div><br>
                    <!-- Success message -->
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <form action="" method="post" action="{{ route('contact.store') }}">

                        @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}"
                                name="name" id="name">

                            <!-- Error -->
                            @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}"
                                name="email" id="email">

                            @if ($errors->has('email'))
                            <div class="error">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}"
                                name="phone" id="phone">

                            @if ($errors->has('phone'))
                            <div class="error">
                                {{ $errors->first('phone') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}"
                                name="subject" id="subject">

                            @if ($errors->has('subject'))
                            <div class="error">
                                {{ $errors->first('subject') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message"
                                id="message" rows="4"></textarea>

                            @if ($errors->has('message'))
                            <div class="error">
                                {{ $errors->first('message') }}
                            </div>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {{-- <input type="submit" name="send" value="Submit" class="btn btn-info btn-block"> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* .card {
        box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
        background-color: rgba(136, 178, 241, 0.2);
        transition: 0.3s;
    }

    .form-control{
        opacity: 0.7;
    }

    .btn{
        opacity: 0.7;
    }

    .error{
        opacity: 0.7
    }

    .alert{
        opacity: 0.7;
    } */

    .card{
        background-color:#f5f5f5;
        color: black;
        opacity: 0.9;   
    }

    .error{
        color: crimson;
        opacity: 0.9;
    } 
</style>
@endsection