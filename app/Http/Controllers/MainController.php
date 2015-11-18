<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function index(){
        $ppath = public_path();
    	return view('pages.index');
    }

    public function article(){
    	$name = 'Jon-Ho';
    	return view('pages.article')->with('name',$name);
    }

    public function tpls(){

    	return view('pages.tpls')->with([
    		'firstname'=>'Jon',
    		'lastname'=>'Ho',
    		]);

    	// $data = [];
    	// $data['firstname'] = 'Martin';
    	// $data['lastname'] = 'Ho';
    	// return view('pages.tpls',$data);

    	// $firstname = 'Mark';
    	// $lastname = 'Ho';
    	// return view('pages.tpls',compact('firstname','lastname'));

    }

    public function contact(){
    	return view('pages.contact');
    }

}
