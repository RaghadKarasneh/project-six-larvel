<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
class WallProject extends Controller
{ 
    /**
    * Write code on Method
    *
    * @return response()
   */
   public function index()
   {
       return view('auth.login');
   }  
     
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function registration()
   {
       return view('auth.registration');
   }
     
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function postLogin(Request $request)
   {
       $request->validate([
           // 'first_name' => 'required',
           // 'last_name' => 'required',
           'email' => 'required',
           // 'phone_number' => 'required',
           //'city' => 'required',
           //'address' => 'required,
           'password' => 'required',
           //'password_confirmation' => 'required',
       ]);
  
       $credentials = $request->only('email', 'password');
       if (Auth::attempt($credentials)) {
           return redirect()->intended('home')->withSuccess('You have Successfully loggedin');
       }
 
       return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
   }
     
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function postRegistration(Request $request)
   {  
       $request->validate([
           'first_name' => 'required',
           'last_name' => 'required',
           // 'name' => 'required',
           'email' => 'required|email|unique:users',
           'phone_number' => 'required|min:10',
           'city' => 'required',
           'address' => 'required',
           'password' => 'required|min:8|regex:/^[a-zA-Z0-9!$#%]+$/',
           'password_confirmation' =>'required|min:8|regex:/^[a-zA-Z0-9!$#%]+$/',
       ]);
          
       $data = $request->all();
       $check = $this->create($data);
        
       return redirect("home")->withSuccess('Great! You have Successfully loggedin');
   }
   
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function home()
   {
       if(Auth::check()){
           return view('home');
       }
 
       return redirect("login")->withSuccess('Opps! You do not have access');
   }
   
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function create(array $data)
   {
     return User::create([
       'first_name' => $data['first_name'],
       'last_name' => $data['last_name'],
       // 'name' => $data['name'],
       'email' => $data['email'],
       'phone_number' =>$data['phone_number'],
       'city' =>$data['city'],
       'address' =>$data['address'],
       'password' => Hash::make($data['password']),
       'password_confirmation' => Hash::make($data['password_confirmation'])
     ]);
   }
   
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function logout() {
       Session::flush();
       Auth::logout();
 
       return Redirect('login');
   }
    //View Navbar
    public function showNavbar(){
        return view('navbar');
    }
    public function showHomePage(){
        return view('home');
    }
    public function showFooter(){
        return view('footer');
    }
    public function singleService(){
        return view('singleService');
    }
}
