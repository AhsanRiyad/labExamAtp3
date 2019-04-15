<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class authController extends Controller
{
    //


    public function reg(){


    	return view('login.index')->withMsg('');

    }

    public function regStore(Request $req){

    	$params = [$req->name , $req->email , $req->password];

    	$status = DB::insert('insert into employee (name , email , password) values (? , ? , ?)' , $params );



    	//return $params;

    	$msg = 'success';

    	return view('login.index')->withMsg($msg);

    }


    public function login(){


    	return view('login.login')->withMsg('');

    }

    public function loginCheck(Request $req){

    	$params = [ $req->email , $req->password];


    	$result = DB::select('select * from employee where email = (?) and password = (?)' , $params);

//    	return $result;
    	//return count($result);

    	if(count($result)>0){
    		return view('login.login')->withMsg('');
    	}

    	//return view('login.login')->withMsg('');

    }



}
