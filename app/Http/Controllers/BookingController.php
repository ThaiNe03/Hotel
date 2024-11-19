<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function choose1(){
        return view('pages.pagebooking.choose1');
    }
    public function choose2(){
        return view('pages.pagebooking.choose2');
    }
    public function choose3(){
        return view('pages.pagebooking.choose3');
    }
    public function choose4(){
        return view('pages.pagebooking.choose4');
    }
}
