<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MessagesController extends Controller
{
    public function insert(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        DB::insert('insert into messages (name, email, subject, message) values (?, ?, ?, ?)', [$name, $email, $subject, $message]);
        
        return redirect()->back();
    }
}
