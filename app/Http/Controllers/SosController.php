<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SosMail;
use Redirect;

class SosController extends Controller{

    public function show(){
        return view('sos');
    }

    public function send(Request $request) {

         $this->validate($request, [
            'name'  =>  'required',
            'phone' =>  'required',
            'description'  => 'required'
        ]);

        \Mail::to('solicitari.samaritenii@gmail.com')->send(new SosMail($request));
        
        return Redirect::back();
    }
}