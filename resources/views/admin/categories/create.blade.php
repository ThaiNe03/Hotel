@extends('layouts.app')
@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Room</h3>
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
              <form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên phòng</label>
                    <input type="text" class="form-control" name="roomname" id="exampleInputEmail1" placeholder="---">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="---">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Chọn file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" value="1" name="checkout" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Kiểm tra</label>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Hoàn tất</button>
                </div>
              </form>
            </div>

@endsection
