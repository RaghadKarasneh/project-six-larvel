<?php

namespace App\Http\Controllers;
use App\Models\volunteers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Services;
use Hash;
use Illuminate\Support\Facades\DB;
class WallProject extends Controller
{ 
 
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
        $update= User::find($id);
        $first_name=$request->input('firstname');
        $last_name=$request->input('lastname');
        $email =$request->input('email'); 
        $phone_number=$request->input('phonenumber');
        $address=$request->input('address');
        $password=$request->input('password');
        // $update->update();
        DB::update('Update users SET first_name=?, last_name=?, email=?, phone_number=?, address=?, password=? where id=?',[
            $first_name,
            $last_name,
            $email,
            $phone_number,
            $address,
            $password,
            $id
        ]);
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
        $add->description=$request->input('description');
        $add->save();
        
        return redirect('home')->with('message','Thanks for all you do! ...
         you make our dream work.
        All of your volunteer work is greatly appreciated.
        We are so grateful for your hard work!
        Thank you for your time and patience. ...
        Your help will be so important to our project!
        ');
      }
}
