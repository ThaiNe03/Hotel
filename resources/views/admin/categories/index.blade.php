@extends('layouts.app')
@section('content')

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">List Room</h3>
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
          <th scope="col">Tên phòng</th>
          <th scope="col">Hình ảnh</th>
          <th scope="col">Mô tả</th>
          <th scope="col">Ngày tạo</th>
          <th scope="col">Ngày cập nhật</th>
          <th scope="col">Tình trạng</th>
          <th scope="col">Manager</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $key => $cate)
        <tr>
          <th scope="row">{{$key}}</th>
          <td>{{$cate->roomname}}</td>
          <td><img src="{{asset('uploads/categories/'.$cate->image)}}" heigh="120" width="200"></td>
          <td>{{$cate->description}}</td>
          <td>{{$cate->created_at}}</td>
          <td>{{$cate->updated_at}}</td>
          <td>
            @if($cate->checkout==1)
            <span class="text text-success">Active</span>
            @else
            <span class="text text-success">Un Active</span>
            @endif
          </td>
          <td>
            <a href="{{route('categories.edit',[$cate->id])}}" class="btn btn-warning">Edit</a>
            <form onsubmit="return confirm('Bạn có muốn xóa không?')" action="{{route('categories.destroy',[$cate->id])}}" method="POST">
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
