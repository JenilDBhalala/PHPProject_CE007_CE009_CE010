<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use App\Models\Login_detail;
use App\Models\Car;
class UserController extends Controller
{
    function show()
    {
        return "hello this is from usercontroller-show function";
    }
    function loadView()
    {
        return view('users',['users'=>['bhavin','hari','jenil','jay']]);
    }
    // function getdata(Request $req)
    // {
    //     $method=$req->method();
    //     if($req->isMethod('post'))
    //     {
    //         $name="post method";
    //     }
    //     else
    //     {
    //         $name="get method";
    //     }
    //     return view("first",["name"=>$name,"method"=>$method]);
    // }
    function index(Request $request)
    {
        if($request->isMethod('get')){
            echo "this is inside of get method";         
        }
        
        
        // $collections=DB::table('login_details')->where('username',['nikhil11','jenil10'])->update(['password'=>"oh@same"]);
        // foreach($collections as $data)
        // {
        //     echo $data->username."-".$data->password."<br>";
        // }
    }

    // function index()
    // {
    //     // $data=Http::get("https://reqres.in/api/users?page=1");
    //     $data=Login_detail::all();
    //     return view('users',['collections'=>$data]);
    // }
    function getData()
    {
        echo "database configuration set up here";
        echo "\n";
       return Login_detail::all();
    }

    function result(Request $request)
    {
        $destination_path='public/images/cars';
        $name=$request->get('name');
        $email=$request->get('email');
        $photo=$request->file('photo');
        $photo_name=$photo->getClientOriginalName();
        $path=$request->file('photo')->storeAs($destination_path,$photo_name);
        $photo_path='storage/images/cars/'.$photo_name;
        $a=DB::table('test')->insert(['name'=>$name,'email'=>$email,'photo'=>$photo_path]);
        if($a==1)
        {
            echo "data added to database successfully";
        }

        $data=DB::table('test')->get();
        
        return view('result',['collections'=>$data]);
    }

    function addCarForm(Request $request)
    {
        $cars=DB::table('car')->select('city','count(*) as count')->groupBy('city')->get();
        
        return view('addCarForm',['cars'=>$cars]);
    }

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

    function bookCar(Request $request)
    {
        $city=$request->city;
        $start_date=$request->start_date;
        $end_date=$request->end_date;
        
        return $request->all();
    }
}
