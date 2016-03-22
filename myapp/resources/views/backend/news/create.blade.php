@extends('web._main_backend')

@section('page-title')
    {{ "สร้างข่าว | ข่าวและกิจกรรม" }}
@endsection

@section('stylesheet')
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('_assets/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <ul class="breadcrumb box-shadow">
            <li><a href="{{ url('admin/home') }}">Admin</a></li>
            <li><a href="javascript:window.history.back()">News</a></li>
            <li class="active">Create</li>
        </ul>

        <div class="panel panel-primary box-shadow">
            <div class="panel-heading text-center show-news">
                เพิ่มข้อมูลของข่าว
            </div>
            <div class="panel-body">

                {!! Form::open(['url' => 'admin/news', 'files' => true]) !!}
                    @include('backend.news._form', ['submit' => 'บันทึกข้อมูล'])
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection