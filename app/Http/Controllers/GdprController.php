<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GdprController extends Controller
{
    /**
     * Show the confidentiality policy page
     *
     * @return View
     */
    public function showTheConfidentialityPolicy()
    {
        $view = [];

        return view('the-confidentiality-policy', $view);
    }

    /**
     * Show the contact page
     *
     * @return View
     */
    public function showTheGeneralDataPolicy()
    {
        $view = [];

        return view('the-general-data-policy', $view);
    }

    /**
     * Show the contact page
     *
     * @return View
     */
    public function showTermsAndConditions()
    {
        $view = [];

        return view('terms-and-conditions', $view);
    }
}
