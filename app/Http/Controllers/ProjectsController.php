<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProjectsController extends Controller
{
    public function getProjects() 
    {
        $projects  = DB::table('projects')
                     ->get();
  
        return $this->$projects;
    }
}
