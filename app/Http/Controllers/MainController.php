<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 

class MainController extends Controller
{
    public function index(){
        return view('home');
    }
    public function room(){
        return view('pages.room');
    }
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function booking(){
        return view('pages.booking');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function menu(Request $request){
        $data=DB::table('products')->get()->toArray();
        return view('pages.menu',compact('data'));
    }
    public function detail(){
        return view('pages.detail');
    }
    public function login(){
        return view('login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
