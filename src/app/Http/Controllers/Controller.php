<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function addUser(Request $req) {     
        
        $name = $req->input('name');
        $password = $req->input('password');
        $email = $req->input('email');
	
        DB::insert('insert into user(name, email,password) values (?, ?, ?)', [$name , $email, $password]);
        return view('loginsignup');
		
    }

    function login(Request $req){
        $uname = $req->input('email');
        $pass = $req->input('password');

        $loginData = DB::select('select password from user where email = ?', [$uname]); 
     
        if (count($loginData) > 0){
            
            foreach ($loginData as $tablepass) {

                if (($tablepass->password) == $pass){
                    $req->session()->put('data',$req->input()); 
                    return view('home');

                }
                else{
                    $error='Password does not match';
                    return view('loginsignup')->with('error',$error);
                }
            }
        }

        else{
            $error='Username not Found.';
            return view('loginsignup')->with('error',$error);
        }
}

    
    function addregister(Request $req) {     
        
        $name = $req->input('nameff');
        $email = $req->input('emailff');
        $phone = $req->input('phoneff');
        $date = $req->input('dateff');
        $package = $req->input('packageff');
        $program = $req->input('programff');
        $message = $req->input('messageff');
	
        DB::insert('insert into register(name, email,phone,date,package,program,message) values (?, ?, ?,?,?,?,?)', [$name , $email, $phone ,$date, $package,$program, $message]);
        return view('home');
		
    }
    function addcontact(Request $request) {     
        
        $fname = $request->input('nameff');
        $email = $request->input('emailff');
        $subject = $request->input('subjectff');
        $message = $request->input('messageff');

	
        DB::insert('insert into contact(name, email, subject,message) values (?, ?, ?,?)', [$fname , $email, $subject,$message]); 
        return view('home');
		
		
    }
}