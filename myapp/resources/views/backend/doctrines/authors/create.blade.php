@extends('web._main_backend')

@section('page-title', 'ผู้ให้โอวาสหลักธรรมคำสอน')

@section('stylesheet')
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('_assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('note');
    </script>
@endsection


@section('content')
    <div class="container">


        <div class="panel panel-default box-shadow">
            <div class="panel-heading">
                <ul class="breadcrumb show-news">
                    <li>
                        <i class="glyphicon glyphicon-home"></i>
                        <a href="{{ url('admin/home') }}">หน้าแรก</a>
                    </li>
                    <li><a href="{{ url('admin/doctrines') }}">หลักธรรมคำสอน</a></li>
                    <li><a href="javascript:window.history.back()">ผู้ให้โอวาสหลักธรรมคำสอน</a></li>
                    <li class="active">เพิ่มข้อมูล</li>
                </ul>
            </div>
            <div class="panel-body">

                {!! Form::open(['url' => 'admin/authors', 'files' => true]) !!}
                @include('backend.doctrines.authors._form', ['submit' => 'บันทึกข้อมูล'])
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection