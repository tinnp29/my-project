@extends('layouts.app')

@section('page_title', 'Trang Chủ')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/upload" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" />
                <input type="submit" value="Upload" />
            </form>
        </div>
    </div>
</div>
@endsection
