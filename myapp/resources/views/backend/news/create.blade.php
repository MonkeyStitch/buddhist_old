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


        <div class="panel panel-default box-shadow">
            <div class="panel-heading">
                <ul class="breadcrumb show-news">
                    <li><a href="{{ url('admin/home') }}">หน้าแรก</a></li>
                    <li><a href="javascript:window.history.back()">ข่าวและกิจกรรม</a></li>
                    <li class="active">เพิ่มข้อมูลของข่าว</li>
                </ul>
            </div>
            <div class="panel-body">

                {!! Form::open(['url' => 'admin/news', 'files' => true]) !!}
                    @include('backend.news._form', ['submit' => 'บันทึกข้อมูล'])
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection