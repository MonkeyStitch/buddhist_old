@extends('web._main_backend')

@section('page-title')
    {{ "แก้ไข id: $news->id | ข่าวและกิจกรรม" }}
@endsection

@section('stylesheet')
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('_assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'details' );
    </script>
@endsection

@section('content')
    <div class="container">

        <div class="panel panel-default box-shadow ">
            <div class="panel-heading" style="position: relative;">
                <ul class="breadcrumb show-news" style="display: inline-block;">
                    <li><a href="{{ url('admin/home') }}">หน้าแรก</a></li>
                    <li><a href="{{ url('admin/news') }}">ข่าวและกิจกรรม</a></li>
                    <li class="active">แก้ไขข้อมูลของข่าว</li>
                </ul>

                {!! Form::open(['method' => 'DELETE', 'url' => ['admin/news', $news->id], 'class' => 'form-delete-right']) !!}
                {!! Form::submit( 'ลบข้อมูลข่าว', ['class' => 'btn btn-danger center-block btnConfirmDelete']) !!}
                {!! Form::close() !!}

            </div>
            <div class="panel-body">
                {{--{!! Form::model($news, ['method' => 'PATCH', 'action' => ['backend\NewsController@update', $news->id]]) !!}--}}
                {!! Form::model($news, ['method' => 'PATCH', 'url' => ['admin/news', $news->id]]) !!}
                    @include('backend.news._form', ['submit' => 'บันทึกข้อมูล'])
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection