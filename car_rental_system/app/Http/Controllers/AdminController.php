<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use App\Models\Car;
use App\Models\Contact;
use Auth;

class AdminController extends Controller
{
    function addCar(Request $request)
    {
        if(Auth::check()){
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
        else{
            return view('user.error_404');
        }
    }

    function showCars(Request $request)
    {
        if(Auth::check()){
            $cars=Car::all();
            return view('showCars',['cars'=>$cars]);
        }
        else{
            return view('user.error_404');
        }
    }

    function viewCar(Request $request,$id)
    {
        if(Auth::check()){
            $car1=Car::find($id);
            return view('viewCar',['car'=>$car1]);
        }
        else{
            return view('user.error_404');
        }
    }

    function editCar(Request $request,$id)
    {
        if(Auth::check()){
            $car1=Car::find($id);
            return view('editCarForm',['car'=>$car1]);
        }
        else{
            return view('user.error_404');
        }
    }

    function update(Request $request,$id)
    {
        if(Auth::check()){
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
        else{
            return view('user.error_404');
        }
    }

    function deleteCar(Request $request,$id)
    {
        if(Auth::check()){
            $car1=Car::find($id);
            $car1->delete();
            return redirect('/admin/showCars/');
        }
        else{
            return view('user.error_404');
        }
    }

    function contactDetails(Request $request){
        if(Auth::check()){
            $contacts=Contact::all();
            return view('contactDetails',['contacts'=>$contacts]);
        }
        else{
            return view('user.error_404');
        }
    }

    function deleteContact(Request $request,$id)
    {
        if(Auth::check()){
            $contact1=Contact::find($id);
            $contact1->delete();
            return redirect('/admin/contactDetails/');
        }
        else{
            return view('user.error_404');
        }
    }
}
