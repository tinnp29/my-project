@extends('layouts.admin')

@section('page_title', 'Danh Sách Người Dùng')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh Sách Tài Khoản Người Dùng</h3>
    </div>

    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="example1_length">
                        <a href="/admin/user/create" class="btn btn-primary">Thêm</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2">
                    <div class="dataTables_length" id="example1_length">
                        <label>Hiển Thị:
                            <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div id="example1_filter" class="dataTables_filter">
                        <label>Tìm Kiếm:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Họ và Tên</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">{{ $user->id }}</td>
                                <td tabindex="0" class="sorting">{{ $user->name }}</td>
                                <td tabindex="0" class="sorting">{{ $user->email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="example1_previous">
                                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                            </li>
                            <li class="paginate_button page-item active">
                                <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                            </li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                            </li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                            </li>
                            <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
