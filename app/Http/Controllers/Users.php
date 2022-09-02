<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Session;
class Users extends Controller
{
    

    function viewLoginForm(){
        if(session()->get('email')) {
           return redirect('userDataPage') ;
        }return view('loginform');
        // return view('loginform');
    }
    
    function loginsubmit(Request $req){

        $user = User::where('email',$req->email)->first();

            if(!$user || !Hash::check($req->password,$user->password)){
            return "incorrect credentails";
        }
        session()->put('email',$req->email);
        
        return redirect('/userDataPage');
    }

    function userDataPage(Request $req){
        if(!$req->session()->get('email')){
            return redirect('/');
        }

        $email = $req->session()->get('email');
        $user = User::where('email',$email)->first();

        $data=[
            'user' => $user
        ];

        return  view("showUserData",compact('data'));
    }
    /*create account Function*/
    
     function createAccount(){
        if(session()->get('email')){
            return redirect('userDataPage');
        } 
        return view('createAccount');
    }




    function dataRegister(Request $req){
        $returnResponse = array();
        $existingUser = User::where('email',$req->email)->orwhere('phone',$req->phone)->first();
        if($existingUser){
             $existingUser->save();
            $returnResponse["status"] = "error";
            return json_encode($returnResponse);
        } 


        // $req->validate([
        //     'name'=>'required|min:5|max:255',
        //     'email'=>'required|email|unique:users,email',
        //     'phone'=>'required|max:10',
        //     'password'=>'sometimes|min:6 ',
        // ]);
        
        $user = new User; 
        $user->name= $req->name;
        $user->email= $req->email;
        $user->password= Hash::make($req->password);
        $user->gender= $req->gender;
        $user->phone = $req->phone;
        
        $user ->save();
        return json_encode($returnResponse);

        // return redirect("/");
    }
 


    function edit($id){
        $user = User::find($id);
        return view('edit',compact('user'));
    }

    function update(Request $req, $id){
        $user = User::find($id);

        $user->name= $req->name;
        $user->email= $req->email;
        $user->password= Hash::make($req->password);
        $user->gender= $req->gender;
        $user->phone = $req->phone;
        
        $user ->update();
        return redirect('/');
    }

   /* Back Button*/
    function back(){
        return redirect('userDataPage');
    }


    function adminlogout(){
        if(session()->get('email')){
            return redirect('/adminlogin');
        }
       return view('adminlogin');
    }

    // function adminedit(){
    //     return  view('adminedit');
    // }



    function adminlogin(){
        if(session()->get('email')) {
            return view('adminlogin');
             
         } return redirect('admin') ;
    }

    function adminsubmit(Request $req){
        
        $data = User::where('email',$req->email)->first();

            if($data && Hash::check($req->password,$data->password)){
            return "incorrect credentails";
        }
        session()->put('email',$req->email);
        
        return redirect('/admin');
    }

    function admin(Request $req){
        if($req->session()->get('email')){
            return redirect('/adminlogin');
        }

        $email = $req->session()->get('email');
        $user = User::all();
        return view('admin',['user'=>$user]);
 
    }


}
