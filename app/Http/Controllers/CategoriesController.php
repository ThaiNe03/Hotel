<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->get();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'roomname' => 'required|unique:categories|max:200',
            'description' => 'required|max:200',
            'image' => 'required',
            'checkout' => 'required',
        ],[
            'roomname.required' => 'Yêu cầu nhập tên phòng',
            'roomname.unique' => 'Tên phòng đã có',
            'description.required' => 'Yêu cầu nhập mô tả',
            'image.required' => 'Yêu cầu chọn hình ảnh',
            'checkout.required' => 'Yêu cầu nhấn nút kiểm tra',
        ]
        );
        $category = new Category();
        $category->roomname = $data['roomname'];
        $category->description = $data['description'];
        $category->checkout = $data['checkout'];
        //add image
        $get_image = $request->image;
        $path = 'uploads/categories/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $category->image = $new_image;

        $category->save();
        return redirect()->route('categories.index');
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
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'roomname' => 'required|unique:categories|max:200',
            'description' => 'required|max:200',
            'checkout' => 'required',
        ],[
            'roomname.required' => 'Yêu cầu nhập tên phòng',
            'roomname.unique' => 'Tên phòng đã có',
            'description.required' => 'Yêu cầu nhập mô tả',
            'checkout.required' => 'Yêu cầu nhấn nút kiểm tra',
        ]
        );
        $category = Category::find($id);
        $category->roomname = $data['roomname'];
        $category->description = $data['description'];
        $category->checkout = $data['checkout'];
        //add image
        
        if($request->image){
            $get_image = $request->image;
            $path = 'uploads/categories/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $category->image = $new_image;
        }
        

        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('categories.index');
    }
}
