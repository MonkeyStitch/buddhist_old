@extends('web._main_backend')

@section('page-title', 'หน้าแรก')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <ul class="breadcrumb show-news">
                            <li class="active">
                                <i class="glyphicon glyphicon-home"></i>
                                <a href="{{ url('admin/home') }}">หน้าแรก</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @foreach( $news as $new)
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>{{ $new->category->category }}</h4></div>
                        <div class="panel-body">

                            <img src="{{ asset($new->picture) }}" alt="{{ $new->category->category }}"
                                 class="img-responsive img-thumbnail center-block"
                                 style="height: 250px">
                            <h4>{!! $new->title !!}</h4>
                            <div class="content-block">
                                {!! $new->details !!}
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h4>ความรู้ทางศาสนา</h4></div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">ประวัติพระพุทธเจ้า</a></li>
                            <li><a href="">วันสำคัญ</a></li>
                            <li><a href="">พิธีกรรมและการบริกรรม</a></li>
                            <li><a href="">ศาสนสถาน</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h4>ศาสนพิธี</h4></div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">กุศลพิธี</a></li>
                            <li><a href="">บุญพิธี</a></li>
                            <li><a href="">ทานพิธี</a></li>
                            <li><a href="">ปกิณกะ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading"><h4>หลักธรรมคำสอน</h4></div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">หลักธรรม/คำสอนของพระพุทธเจ้า</a></li>
                            <li><a href="">หลักธรรม/คำสอนของสมเด็จพระสังฆราช</a></li>
                            <li><a href="">หลักธรรม/คำสอนของพระมหากษัตริย์</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading"><h4>การปฏิบัติตนของชาวพุทธ</h4></div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">การไหว้</a></li>
                            <li><a href="">การกราบ</a></li>
                            <li><a href="">การประเคนของ</a></li>
                            <li><a href="">การบำเพ็ญสมาธิ</a></li>
                            <li><a href="">หลักการปฏิบัติตนในชีวิตประจำวัน</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
