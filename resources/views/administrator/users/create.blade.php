@extends('layouts.admin')

@section('page_title', 'Thêm Người Dùng')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tạo Tài Khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tài Khoản</a></li>
              <li class="breadcrumb-item active">Tạo Mới</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card card-primary">
                <div class="card-header">
                </div>
                <form action="/admin/user" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="fullname">Họ và Tên</label>
                        <input type="text" name="name" class="form-control" id="fullname" placeholder="Nhập họ tên" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="repassword">Nhập Lại Mật Khẩu</label>
                            <input type="password" name="repassword" class="form-control" id="repassword" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
      </div>
    </section>
@endsection
