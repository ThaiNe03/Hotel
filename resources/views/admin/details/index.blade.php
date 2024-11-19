@extends('layouts.app')
@section('content')

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">List Room - Detail</h3>
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
    <table id="myTable" class="table table-striped" >
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Thư viện ảnh</th>
          <th scope="col">Tên phòng</th>
          <th scope="col">Hình ảnh</th>
          <th scope="col">Mô tả</th>
          <th scope="col">Loại phòng</th>
          <th scope="col">Số giường</th>
          <th scope="col">Số người</th>
          <th scope="col">Phong cảnh</th>
          <th scope="col">Kích thước</th>
          <th scope="col">Giá</th>
          <th scope="col">Số phòng</th>
          <th scope="col">Ngày tạo</th>
          <th scope="col">Ngày cập nhật</th>
          <th scope="col">Tình trạng</th>
          <th scope="col">Manager</th>
        </tr>
      </thead>
      <tbody>
        @foreach($details as $key => $dtl)
        <tr>
          <th scope="row">{{$key}}</th>
          <th scope="row"><a href="{{route('gallery.edit',[$dtl->id])}}">Thêm ảnh</a></th>
          <td>{{$dtl->detailname}}</td>
          <td><img src="{{asset('uploads/details/'.$dtl->image)}}" heigh="80" width="90"></td>
          <td>{{$dtl->description}}</td>
          <td>{{$dtl->category->roomname}}</td>
          <td>{{$dtl->bed}}</td>
          <td>{{$dtl->max}}</td>
          <td>{{$dtl->view}}</td>
          <td>{{$dtl->roomsize}} m²</td>
          <td>{{ number_format($dtl->price, 0, ',', '.') }} vnđ</td>
          <td>{{$dtl->quantity}}</td>
          <td>{{$dtl->created_at}}</td>
          <td>{{$dtl->updated_at}}</td>
          <td>
            @if($dtl->checkout==1)
            <span class="text text-success">Active</span>
            @else
            <span class="text text-success">Un Active</span>
            @endif
          </td>
          <td>
            <a href="{{route('details.edit',[$dtl->id])}}" class="btn btn-warning">Edit</a>
            <form onsubmit="return confirm('Bạn có muốn xóa không?')" action="{{route('details.destroy',[$dtl->id])}}" method="POST">
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
