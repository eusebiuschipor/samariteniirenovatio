<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the contact page
     *
     * @return View
     */
    public function show()
    {
        $view = [];

        return view('contact', $view);
    }
}
