<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use App\Models\Car;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        $cars=DB::table('cars')->select('city',DB::raw('count(*) as count'),DB::raw('max(price) as max_price'),DB::raw('min(price) as min_price'))->groupBy('city')->get();
        $today_date=date('Y-m-d');
        $month_year=date('F-Y');
        $bookings1=DB::table('booking')->join('users','booking.book_by','=','users.id')->join('cars','booking.car_id','=','cars.id')->where('start_date','>=',$today_date)->select('booking.*','users.name as username','cars.name as carname')->orderBy('id');
        $bookings=$bookings1->get();
        $total_payment=$bookings1->sum('payment');
        $booking_city=DB::table('booking')->where('start_date','>=',$today_date)->select('city',DB::raw('count(*) as total'))->groupBy('city')->get();
        $total_car=DB::table('cars')->count();
        $total_user=DB::table('users')->count();
        $total_booking=DB::table('booking')->count();
        return view('adminHome',['cars'=>$cars,'bookings'=>$bookings,'month_year'=>$month_year,'booking_city'=>$booking_city,'total_payment'=>$total_payment,'total_car'=>$total_car,'total_user'=>$total_user,'total_booking'=>$total_booking]);
    }
}
