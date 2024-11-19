<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Category;

class DetailsController extends Controller
{
    public function index()
    {
        $details = Detail::with('category')->orderBy('id','DESC')->get();
        return view('admin.details.index',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('id','DESC')->get();
        return view('admin.details.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'detailname' => 'required|unique:details|max:200',
            'description' => 'required|max:200',
            'category_id' => 'required',
            'bed' => 'required',
            'max' => 'required',
            'view' => 'required',
            'roomsize' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'required',
            'checkout' => 'required',
        ],[
            'detailname.required' => 'Yêu cầu nhập tên phòng',
            'detailname.unique' => 'Tên phòng đã có',
            'description.required' => 'Yêu cầu nhập mô tả',
            'bed.required' => 'Yêu cầu nhập số phòng',
            'max.required' => 'Yêu cầu nhập số người tối đa',
            'view.required' => 'Yêu cầu nhập phong cảnh',
            'roomsize.required' => 'Yêu cầu nhập kích thước phòng',
            'price.required' => 'Yêu cầu nhập giá',
            'quantity.required' => 'Yêu cầu nhập số lượng phòng',
            'image.required' => 'Yêu cầu chọn hình ảnh',
            'checkout.required' => 'Yêu cầu nhấn nút kiểm tra',
        ]
        );
        $detail = new Detail();
        $detail->detailname = $data['detailname'];
        $detail->description = $data['description'];
        $detail->category_id = $data['category_id'];
        $detail->bed = $data['bed'];
        $detail->max = $data['max'];
        $detail->view = $data['view'];
        $detail->roomsize = $data['roomsize'];
        $detail->price = $data['price'];
        $detail->quantity = $data['quantity'];
        $detail->checkout = $data['checkout'];
        //add image
        $get_image = $request->image;
        $path = 'uploads/details/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $detail->image = $new_image;

        $detail->save();
        return redirect()->route('details.index');
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
        $categories = Category::orderBy('id','DESC')->get();
        $detail = Detail::find($id);
        return view('admin.details.edit',compact('detail','categories'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'detailname' => 'required|unique:details|max:200',
            'description' => 'required|max:200',
            'category_id' => 'required',
            'bed' => 'required',
            'max' => 'required',
            'view' => 'required',
            'roomsize' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'checkout' => 'required',
        ],[
            'detailname.required' => 'Yêu cầu nhập tên phòng',
            'detailname.unique' => 'Tên phòng đã có',
            'description.required' => 'Yêu cầu nhập mô tả',
            'bed.required' => 'Yêu cầu nhập số phòng',
            'max.required' => 'Yêu cầu nhập số người tối đa',
            'view.required' => 'Yêu cầu nhập phong cảnh',
            'roomsize.required' => 'Yêu cầu nhập kích thước phòng',
            'price.required' => 'Yêu cầu nhập giá',
            'quantity.required' => 'Yêu cầu nhập số lượng phòng',
            'checkout.required' => 'Yêu cầu nhấn nút kiểm tra',
        ]
        );
        $detail = Detail::find($id);
        $detail->detailname = $data['detailname'];
        $detail->description = $data['description'];
        $detail->category_id = $data['category_id'];
        $detail->bed = $data['bed'];
        $detail->max = $data['max'];
        $detail->view = $data['view'];
        $detail->roomsize = $data['roomsize'];
        $detail->price = $data['price'];
        $detail->quantity = $data['quantity'];
        $detail->checkout = $data['checkout'];
        //add image
        
        if($request->image){
            $get_image = $request->image;
            $path = 'uploads/details/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $detail->image = $new_image;
        }
        $detail->save();
        return redirect()->route('details.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $details = Detail::find($id);
        $details->delete();
        return redirect()->route('details.index');
    }
}
