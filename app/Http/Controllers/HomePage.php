<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomePage extends Controller
{
    /**
     * Show the homepage
     *
     * @param  int  $id
     * @return View
     */
    public function show()
    {
        $projects  = DB::table('projects')
                     ->get();

        $homeCarousel  = DB::table('home-carousel')
                        ->get();

        $view = [
            'projects' => $projects,
            'homeCarousel' => $homeCarousel
        ];
  
        return view('welcome', $view);
    }
}
