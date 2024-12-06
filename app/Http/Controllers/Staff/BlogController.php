<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Staff\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $data = Blog::all();
        return response()->json([
            'blog'  =>  $data
        ]);
    }
    public function store(BlogRequest $request){
        $data = $request->all();
        return response()->json([$data]);
    }
}
