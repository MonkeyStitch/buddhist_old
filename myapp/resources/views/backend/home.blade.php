@extends('web._main_backend')

@section('page-title', 'หน้าแรก')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">
                Panel Content



                <ul class="pager">
                    <li class="previous"><a href="#">Previous</a></li>
                    <li><a href="#">1</a></li>
                    <li class="next"><a href="#">Next</a></li>
                </ul>
            </div>
            {{--<div class="panel-footer"></div>--}}
        </div>
    </div>
@endsection
