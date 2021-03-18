<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarRentalController extends Controller
{
    function index(){
        return view('home');
    }
}
