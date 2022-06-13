<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Services;
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
        $service= Services::all();
        return view('home',compact('service'));

    }
    public function showFooter(){
        return view('footer');
    }
    public function singleService($id){
        $service= Services::find($id);
        return view('singleService',compact('service'));

    }
    public function showAboutUs(){
        return view('about');
    }
    public function showing($id){
        $info=User::find($id);
        return view('user_info',compact('info'));
    }
    

      public function updateInfo($id){
        $update=user::find($id);
        return view('update_info',['update'=>$update]);
      }
      
      public function update_i(Request $request, $id){
        $update=user::find($id);
        $update->first_name=$request->input('firstname');
        $update->	last_name=$request->input('lastname');
        $update->email =$request->input('email'); 
        $update->phone_number=$request->input('phonenumber');
        $update->address=$request->input('address');
        $update->password=$request->input('password');
        $update->update();
        return redirect('info/'.$id)->with('message','the data has been updated successfully');
      } 


      public function addvol(){
        return view('v_reg');}


      public function saveInfo(Request $request){
        $add=new volunteers();
        $add->first_name=$request->input('firstname');
        $add->last_name=$request->input('lastname');
        $add->email =$request->input('email'); 
        $add->phone_number=$request->input('phonenumber');
        $add->address=$request->input('address');
        $add->password=$request->input('password');
        $add->description=$request->input('description');
        $add->save();
        
        return redirect('update_info')->with('message','Thanks for all you do! ...
         you make our dream work.
        All of your volunteer work is greatly appreciated.
        We are so grateful for your hard work!
        Thank you for your time and patience. ...
        Your help will be so important to our project!
        ');
      }
}
