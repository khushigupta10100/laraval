<?php

namespace App\Http\Controllers;
use App\Models\booking;
use App\Models\worker_registration;


use Illuminate\Http\Request;
use DB;
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
    public function adminDashboard()
    {
        return view('admin_dashboard');
    }

    public function superadminDashboard()
    {
        return view('super_admin_dashboard');
    }
    public function domestic()
    {
        return view('services.domestic');
    }
    public function plumber()
    {
        return view('services.plumber');
    }public function children_care()
    {
        return view('services.children_care');
    }public function patient_care()
    {
        return view('services.patient_care');
    }public function gardener()
    {
        return view('services.gardener');
    }public function painter()
    {
        return view('services.painter');
    }
    public function electrician()
    {
        return view('services.electrician');
    }
    public function booking()
    {
        return view('booking');

    }

    public function bookingsave(Request $request){
        // return view('save_employee');
      //  dd($request->all());
       $name=$request->name;
       $email=$request->email;
       $address=$request->address;
       $worker_name=$request->worker_name;
       $service=$request->service;
       $date=$request->date;
       $special=$request->special;



       $booking =new booking();
       $booking->name =$name;
       $booking->email =$email;
       $booking->address =$address;
       $booking->worker_name =$worker_name;
       $booking->service =$service;
       $booking->date =$date;
       $booking->special =$special;



       $booking->save();
      return redirect()->route('payment')->with('success','employee added successfully.');

}





public function payment()
{
  return view('payment');
}

public function worker_registration()
{
    return view('worker_registration');
}
public function save_register(Request $request)
{
   //dd($request->all());
//return view('save_register');

$name=$request->name;
$email=$request->email;
$password=$request->password;



$register =new worker_registration();
$register->name =$name;
$register->email =$email;
$register->password =$password;



$register->save();
return redirect()->route('login')->with('success','worker added successfully.');

}


}

