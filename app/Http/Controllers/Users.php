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
        // $returnResponse = array();
     
        $user = User::where('email',$req->email)->first();

            if(!$user || !Hash::check($req->password,$user->password)){
                // $returnResponse['status']="error";
                // return json_encode($returnResponse);
        }
        $returnResponse['status']="success";
        // return json_encode($returnResponse);
        session()->put('email',$req->email);
        
        return redirect('/userDataPage');
    }

    function userpost(){
        return '1';
    }
    
    function userDataPage(Request $req){
        return 1;
        if(!$req->session()->get('email')){
            return redirect('/');
        }

        $email = $req->session()->get('email');
        $user = User::where('email',$email)->first();

        $data=[
            'user' => $user
        ];

        return  view("index",compact('data'));
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
        $existingUser = User::where('email',$req->email)->orWhere('phone',$req->phone)->first();
        if($existingUser){
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
        
       $result= $user ->save();
         
        $returnResponse["status"] = "success";
    
        return json_encode($returnResponse);

       
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
        
        $user->update();
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

    function index(){
       return view('index');
    }
   
    // function userpost(){
    //     return view('userpost');
    // }
}
