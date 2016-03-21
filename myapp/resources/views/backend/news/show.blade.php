@extends('web._main_backend')

@section('page-title')
    {{ "{$news->title} - ข่าวและกิจกรรม" }}
@endsection

@section('stylesheet')
    <style>
        .table-news tr > td:first-child {
            text-align: left;
            font-size: 16px;
            width: 180px;
        }
        .table-news tr {
            line-height: 3em;
        }
        .table-news {
            margin: 10px;
        }
    </style>
@endsection

@section('script')
@endsection

@section('content')
    <div class="container">
        <ul class="breadcrumb box-shadow">
            <li><a href="{{ url('admin/home') }}">Admin</a></li>
            <li><a href="javascript:window.history.back()">News</a></li>
            <li class="active">{{ $news->title }}</li>
        </ul>

        <div class="panel panel-primary box-shadow">
            <div class="panel-heading show-news text-center">
                {{ $news->title }}
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('img/no_image.jpg') }}" class="center-block img-responsive" alt="no-image">
                    </div>
                    <div class="col-md-6">
                        <table border="0" width="100%" class="table-news">
                            <tr>
                                <td width="180px">หัวข้อข่าว</td>
                                <td>{{ $news->title }}</td>
                            </tr>
                            <tr>
                                <td>ประเภทข่าว</td>
                                <td>{{ $news->category->category }}</td>
                            </tr>
                            <tr>
                                <td>วันที่ของข่าว</td>
                                <td>{{ $news->date }}</td>
                            </tr>
                            <tr>
                                <td>วัน/เวลา ลงข้อมูล</td>
                                <td>{{ $news->created_at }}</td>
                            </tr>
                            <tr>
                                <td>วัน/เวลา อัพเดทข้อมูล</td>
                                <td>{{ $news->updated_at }}</td>
                            </tr>
                            <tr>
                                <td>แหล่งที่มาของข่าว</td>
                                <td>{{ $news->reference }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <p style="text-indent: 80px">
                            {{ $news->details }}
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">รูปภาพประกอบ</h3>

                        <div class="col-md-4">
                            <img src="{{ asset('img/no_image.jpg') }}" class="center-block img-responsive" alt="no-image">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('img/no_image.jpg') }}" class="center-block img-responsive" alt="no-image">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('img/no_image.jpg') }}" class="center-block img-responsive" alt="no-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection