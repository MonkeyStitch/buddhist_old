@extends('web._main_backend')

@section('page-title')
    {{ "แก้ไข id: $authors->id | ผู้ให้โอวาสหลักธรรมคำสอน" }}
@endsection


@section('stylesheet')
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('_assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'note' );
    </script>
@endsection


@section('content')
    <div class="container">


        <div class="panel panel-default box-shadow">
            <div class="panel-heading" style="position: relative;">
                <ul class="breadcrumb show-news">
                    <li>
                        <i class="glyphicon glyphicon-home"></i>
                        <a href="{{ url('admin/home') }}">หน้าแรก</a>
                    </li>
                    <li><a href="{{ url('admin/doctrines') }}">หลักธรรมคำสอน</a></li>
                    <li><a href="javascript:window.history.back()">ผู้ให้โอวาสหลักธรรมคำสอน</a></li>
                    <li class="active">แก้ไขข้อมูล</li>
                </ul>

                {!! Form::open(['method' => 'DELETE', 'url' => ['admin/authors', $authors->id], 'class' => 'form-delete-right']) !!}
                {!! Form::submit( 'ลบข้อมูลข่าว', ['class' => 'btn btn-danger center-block btnConfirmDelete']) !!}
                {!! Form::close() !!}

            </div>
            <div class="panel-body">

                {!! Form::model($authors, ['method' => 'PATCH', 'url' => ['admin/authors', $authors->id]]) !!}
                @include('backend.doctrines.authors._form', ['submit' => 'อัพเดทข้อมูล'])
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection