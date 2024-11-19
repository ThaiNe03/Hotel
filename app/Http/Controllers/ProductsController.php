<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id','DESC')->get();
        return view('admin.products.index',compact('products'));
    }
    public function create()
    {
        return view('admin.products.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'productname' => 'required|unique:products|max:200',
            'description' => 'required|max:200',
            'image' => 'required',
            'status' => 'required',
        ],[
            'productname.required' => 'Yêu cầu nhập tên sản phẩm',
            'productname.unique' => 'Tên sản phẩm đã có',
            'description.required' => 'Yêu cầu nhập mô tả',
            'image.required' => 'Yêu cầu chọn hình ảnh',
            'status.required' => 'Yêu cầu nhấn nút còn sản phẩm',
        ]
        );
        $product = new Product();
        $product->productname = $data['productname'];
        $product->description = $data['description'];
        $product->status = $data['status'];
        //add image
        $get_image = $request->image;
        $path = 'uploads/products/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $product->image = $new_image;

        $product->save();
        return redirect()->route('products.index');
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
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'productname' => 'required|unique:products|max:200',
            'description' => 'required|max:200',
            'status' => 'required',
        ],[
            'productname.required' => 'Yêu cầu nhập tên sản phẩm',
            'productname.unique' => 'Tên sản phẩm đã có',
            'description.required' => 'Yêu cầu nhập mô tả',
            'status.required' => 'Yêu cầu nhấn nút còn sản phẩm',
        ]
        );
        $product = Product::find($id);
        $product->productname = $data['productname'];
        $product->description = $data['description'];
        $product->status = $data['status'];
        //add image
        if($request->image){
            $get_image = $request->image;
            $path = 'uploads/products/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $product->image = $new_image;
        }
        

        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
