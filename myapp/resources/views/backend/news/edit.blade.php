@extends('web._main_backend')

@section('page-title')
    {{ "แก้ไข id: $news->id | ข่าวและกิจกรรม" }}
@endsection

@section('stylesheet')
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('_assets/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')
    <div class="container">

        <div class="panel panel-default box-shadow ">
            <div class="panel-heading">
                <ul class="breadcrumb show-news" style="display: inline-block;">
                    <li><a href="{{ url('admin/home') }}">หน้าแรก</a></li>
                    <li><a href="javascript:window.history.back()">ข่าวและกิจกรรม</a></li>
                    <li class="active">แก้ไขข้อมูลของข่าว</li>
                </ul>

                {!! Form::open(['method' => 'DELETE', 'url' => ['admin/news', $news->id], 'style' => 'float:right']) !!}
                {!!
                    Form::submit( 'ลบข้อมูลข่าว', ['class' => 'btn btn-danger center-block',
                        'onclick' => "if(!confirm('คุณต้องการลบข้อมูล id {$news->id} หรือไม่ ?')){return false}"])
                !!}
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