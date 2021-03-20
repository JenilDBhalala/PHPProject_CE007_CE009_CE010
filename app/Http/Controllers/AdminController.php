<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use App\Models\Car;

class AdminController extends Controller
{
    function addCar(Request $request)
    {
        $destination_path='public/images/cars';
        $car1=new Car;
        $car1->name=$request->name;
        $car1->fuel=$request->fuel;
        $car1->city=$request->city;
        $car1->seat=$request->seat;
        $car1->price=$request->price;
        $car1->available=$request->available;
        $image=$request->file('image');

        $image_name=$image->getClientOriginalName();
        $path=$request->file('image')->storeAs($destination_path,$image_name);
        $photo_path='/storage/images/cars/'.$image_name;
        $car1->image=$photo_path;
        $car1->save();

        return view('result',['car'=>$car1]);
    }

    function showCars(Request $request)
    {
        $cars=Car::all();
        return view('showCars',['cars'=>$cars]);
    }

    function viewCar(Request $request,$id)
    {
        $car1=Car::find($id);
        return view('viewCar',['car'=>$car1]);
    }

    function editCar(Request $request,$id)
    {
        $car1=Car::find($id);
        return view('editCarForm',['car'=>$car1]);
    }

    function update(Request $request,$id)
    {
        $car1=Car::find($id);
        $car1->name=$request->name;
        $car1->fuel=$request->fuel;
        $car1->city=$request->city;
        $car1->seat=$request->seat;
        $car1->price=$request->price;
        $car1->available=$request->available;

        if($request->hasFile('image'))
        {
            $a=Storage::delete($car1->image);
            $destination_path='public/images/cars';
            $image=$request->file('image');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('image')->storeAs($destination_path,$image_name);
            $photo_path='/storage/images/cars/'.$image_name;
            $car1->image=$photo_path;
        }
        $car1->save();
        return redirect('/admin/showCars/');
    }

    function deleteCar(Request $request,$id)
    {
        $car1=Car::find($id);
        $car1->delete();
        return redirect('/admin/showCars/');
    }
}
