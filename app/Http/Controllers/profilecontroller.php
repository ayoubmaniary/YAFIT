<?php

namespace App\Http\Controllers;

use App\Models\profilemodel;
use Illuminate\Http\Request;
use App\Http\Requests\validerequest;

class profilecontroller extends Controller
{
    public function show(){
        return view('show');
    }
    public function inscription(){
        return view('inscription');
    }
    public function dachbord(){
        return view('dachbord');
    }
    
    public function create(validerequest $REQUEST){
        $profilev=$REQUEST->validated();
        // dd($profile);
        profilemodel::create($profilev);
        return view('show')->with('message','create good');
    }
    public function login(){
        return view('login');
    }
}
