@extends('layouts.app')
@section('content')

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">List Products</h3>
  </div>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
  </div>
  @endif
  <div class="table table-responsive">
    <table class="table table-striped" id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tên sản phẩm</th>
          <th scope="col">Hình ảnh</th>
          <th scope="col">Mô tả</th>
          <th scope="col">Ngày tạo</th>
          <th scope="col">Ngày cập nhật</th>
          <th scope="col">Tình trạng</th>
          <th scope="col">Manager</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $key => $prd)
        <tr>
          <th scope="row">{{$key}}</th>
          <td>{{$prd->productname}}</td>
          <td><img src="{{asset('uploads/products/'.$prd->image)}}" heigh="80" width="90"></td>
          <td>{{$prd->description}}</td>
          <td>{{$prd->created_at}}</td>
          <td>{{$prd->updated_at}}</td>
          <td>
            @if($prd->status==1)
            <span class="text text-success">Còn</span>
            @else
            <span class="text text-success">Hết</span>
            @endif
          </td>
          <td>
            <a href="{{route('products.edit',[$prd->id])}}" class="btn btn-warning">Edit</a>
            <form onsubmit="return confirm('Bạn có muốn xóa không?')" action="{{route('products.destroy',[$prd->id])}}" method="POST">
              @method('DELETE')
              @csrf
              <input type="submit" class="btn btn-danger" value="Xóa">
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
