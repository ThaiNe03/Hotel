<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required',
            'detail_id' => 'required',
        ],[
            'image.required' => 'Yêu cầu nhập hình ảnh',
        ]
        );
        
        //add image
        
        if($request->image){
            foreach($request->image as $key => $gal){
                $gallery = new Gallery();
                $gallery->detail_id = $data['detail_id'];
                $get_image = $gal;
                $path = 'uploads/galleries/';
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.',$get_name_image));
                $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
                $get_image->move($path,$new_image);
                $gallery->image = $new_image;
                $gallery->save();
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galleries = Gallery::where('detail_id',$id)->get();
        $detail = Detail::find($id);
        return view('admin.galleries.create',compact('detail','id','galleries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gallery::find($id)->delete();
        return redirect()->back();
    }
}
