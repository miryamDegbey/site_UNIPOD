<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function Program(){
        return view('programs.program_detail1');

    }

    // public function Program2(){
    //     return view('programs.program_detail2');

    // }
}
