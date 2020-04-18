<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GdprController extends Controller
{
    /**
     * Show the contact page
     *
     * @return View
     */
    public function showTheConfidentialityPolicy()
    {
        $view = [];

        return view('the-confidentiality-policy', $view);
    }
}
