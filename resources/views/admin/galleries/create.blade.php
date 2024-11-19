@extends('layouts.app')
@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Gallery</h3>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phòng</label>
                    <select class="form-control" name="detail_id">
                        <option value=" {{ $detail->id }} ">
                          {{ $detail->detailname }}
                        </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" required name="image[]" multiple id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Chọn file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Hoàn tất</button>
                </div>
              </form>
              <table class="table table-striped" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Ngày cập nhật</th>
                    <th scope="col">Manager</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($galleries as $key => $gal)
                  <tr>
                    <th scope="row">{{$key}}</th>
                    <td><img src="{{asset('uploads/galleries/'.$gal->image)}}" heigh="120" width="200"></td>
                    <td>{{$gal->created_at}}</td>
                    <td>{{$gal->updated_at}}</td>
                    <td>
                      <form onsubmit="return confirm('Bạn có muốn xóa không?');" 
                        action="{{route('gallery.destroy',[$gal->id])}}" method="POST">
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

@endsection
