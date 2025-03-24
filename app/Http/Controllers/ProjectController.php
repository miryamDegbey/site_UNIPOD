<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function Project1(){
        return view('projects.project_detail1');

    }


    public function Project2(){
        return view('projects.project_detail2');

    }

    public function Project3(){
        return view('projects.project_detail3');

    }

    
}
