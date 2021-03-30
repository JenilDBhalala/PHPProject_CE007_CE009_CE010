<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use App\Models\Car;
use App\Models\Booking;
use Auth;

class UserController extends Controller
{
    function bookCar(Request $request)
    {
        if(Auth::check()){
            $city=$request->city;
            $start_date=$request->start_date;
            $end_date=$request->end_date;

            $date1=date_create($start_date);
            $date2=date_create($end_date);
            $diff=date_diff($date1,$date2);
            $ans=(int)$diff->format('%R%a')+1;

            $request->session()->put('start_date',$start_date);
            $request->session()->put('end_date',$end_date);
            $request->session()->put('date1',date_format($date1,"d-F-Y"));
            $request->session()->put('date2',date_format($date2,"d-F-Y"));
            $request->session()->put('diff',$ans);

            $a=DB::table('booking')->where('city',$city)->where([['start_date','<=',$start_date],['end_date','>=',$start_date],])->orWhere([
                ['start_date','<=',$end_date],['end_date','>=',$end_date],])->orWhere([
                    ['start_date','>=',$start_date],['end_date','<=',$end_date],])->get();

            $arr1=array();
            $arr2=array();
            $arr3=array();

            foreach($a as $b)
            {
                array_push($arr1,$b->car_id);
            }

            $arr1=array_unique($arr1);

            $b=DB::table('cars')->where('city',$city)->get();

            foreach($b as $c)
            {
                array_push($arr2,$c->id);
            }

            $arr3=array_diff($arr2, $arr1);

            $cars=DB::table('cars')->whereIn('id',$arr3)->get();

            if($cars->isEmpty())
            {
                return view('user.noAvailableCars');
            }
            return view('user.showAvailableCars',['cars'=>$cars]);
        }
        else{
            return view('user.error_404');
        }
    }  

    function viewAndBookCar(Request $request,$id)
    {
        if(Auth::check()){
            $car=Car::find($id);
            return view('user.viewAndBookCars',['car'=>$car]);
        }
        else{
            return view('user.error_404');
        }
      
    }

    function payment(Request $request,$id)
    { 
        if(Auth::check())
        {
            $car=Car::find($id);
            return view('user.paymentForm',['car'=>$car]);
        }
        else
        {
            return view('user.error_404');
        }
    }

    function doneBooking(Request $request,$id)
    {
        if(Auth::check())
        {
            if($request->card_no && $request->name && $request->cvv && $request->otp && $id)
            {
                $booking=new Booking;
                $car=Car::find($id);
                $booking->car_id=$id;
                $booking->city=$car->city;
                $booking->payment=($car->price)*(session('diff'));
                $booking->book_by=Auth::user()->id;
                $booking->start_date=session('start_date');
                $booking->end_date=session('end_date');
                $booking->save();
                $car=Car::find($id);
                return view('user.doneBooking',['car'=>$car]);
            }
            else{
                return "Payment not done";
            }
        }
        else
        {
            return view('user.error_404');
        }
    }

    function myBooking(Request $request)
    {
        if(Auth::check())
        {
            $bookings=DB::table('booking')->join('cars','booking.car_id','=','cars.id')->where('book_by',Auth::user()->id)->select('booking.*','cars.name as carname','cars.image as image')->get();
            return view('user.myBooking',['bookings'=>$bookings]);
        }
        else
        {
            return view('user.error_404');
        }
    }
}
