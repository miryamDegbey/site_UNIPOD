<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Welcome(){
        return view('welcome');

    }

    public function AboutUs(){
        return view('about');

    }

    
    public function Support(){
        return view('support');

    }


    public function Space(){
        return view('space');

    }

    public function Contact(){
        return view('contact');

    }
    public function Service(){
        return view('service');

    }

    public function Equip(){
        return view('equip');

    }

}
