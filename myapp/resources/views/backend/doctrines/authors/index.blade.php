@extends('web._main_backend')

@section('page-title', 'ผู้ให้โอวาสหลักธรรมคำสอน')

@section('stylesheet')
@endsection

@section('script')
@endsection


@section('content')
    <div class="container">
        @if (Session::has('delete'))
            <div class="alert alert-danger">{{ Session::get('delete') }}</div>
        @endif

        @if (Session::has('update'))
            <div class="alert alert-success">{{ Session::get('update') }}</div>
        @endif

        <div class="panel panel-default show-data-table">
            <div class="panel-heading">
                <ul class="breadcrumb show-news">
                    <li>
                        <i class="glyphicon glyphicon-home"></i>
                        <a href="{{ url('admin/home') }}">หน้าแรก</a>
                    </li>
                    <li><a href="{{ url('admin/doctrines') }}">หลักธรรมคำสอน</a></li>
                    @if($breadcrumb)
                        <li><a href="{{ url('admin/authors') }}">ผู้ให้โอวาสหลักธรรมคำสอน</a></li>
                        <li class="active">{{ 'Page-' }}</li>
                    @else
                        <li class="active">{{ $heading }}</li>
                    @endif
                </ul>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ url('admin/authors/create') }}" class="btn btn-green">
                            <i class="glyphicon glyphicon-plus"></i> เพิ่มผู้ให้โอวาส
                        </a>
                    </div>
                    <br class="hidden-md hidden-lg">
                    <br class="hidden-md hidden-lg">
                    <div class="col-md-6 col-xs-12">
                        <div class="input-group col-md-6 col-md-offset-6">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-warning" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                    <hr>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th width="70px">ID</th>
                            <th width="120px">รูปภาพ</th>
                            <th>นามหรือฉายา</th>
                            <th>ชื่อ</th>
                            <th><i class="glyphicon glyphicon-cog"></i> </th>
                        </tr>
                        </thead>

                        <tbody>
                        @if($count === 0)
                            <tr>
                                <th colspan="5">ไม่พบผลลัพธ์</th>
                            </tr>
                        @else
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="vertical-align: middle;">
                                    <a href="{{ url('admin/news/' . 1) }}" class="btn btn-default">
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                    </a>
                                    <a href="{{ url('admin/news/' . 1 . '/edit') }}" class="btn btn-info">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>

                                    <form action="{!! url('admin/news/' . 1) !!}" method="POST" accept-charset="utf-8">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn btn-danger" type="submit" onclick="if(!confirm('คุณต้องการลบข้อมูล id {{1}} หรือไม่ ?')){return false}">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endif

                        </tbody>



                    </table>
                </div>



                {{--<ul class="pager">--}}
                    {{--<li class="previous {{ $page == 1 ? 'disabled': '' }}">--}}
                        {{--<a {{ $page == 1 ? '': 'href='.url('admin/news/page/'.($page-1)) }}>Previous</a>--}}
                    {{--</li>--}}

                    {{--@if($records <= 50)--}}
                        {{--@if($records > 0)--}}
                            {{--<li><a href="{{ url('admin/news/page/1') }}"--}}
                                        {{--{{ $page == 1 ? 'class=active' : '' }}>1</a></li>--}}
                        {{--@endif--}}
                        {{--@if($records > 10)--}}
                            {{--<li><a href="{{ url('admin/news/page/2') }}"--}}
                                        {{--{{ $page == 2 ? 'class=active' : '' }}>2</a></li>--}}
                        {{--@endif--}}
                        {{--@if($records > 20)--}}
                            {{--<li><a href="{{ url('admin/news/page/3') }}"--}}
                                        {{--{{ $page == 3 ? 'class=active' : '' }}>3</a></li>--}}
                        {{--@endif--}}
                        {{--@if($records > 30)--}}
                            {{--<li><a href="{{ url('admin/news/page/4') }}"--}}
                                        {{--{{ $page == 4 ? 'class=active' : '' }}>4</a></li>--}}
                        {{--@endif--}}
                        {{--@if($records > 40)--}}
                            {{--<li><a href="{{ url('admin/news/page/5') }}"--}}
                                        {{--{{ $page == 5 ? 'class=active' : '' }}>5</a></li>--}}
                        {{--@endif--}}
                    {{--@else--}}
                        {{--@if($page <= 3)--}}
                            {{--<li><a href="{{ url('admin/news/page/1') }}"--}}
                                        {{--{{ $page == 1 ? 'class=active' : '' }}>1</a></li>--}}
                            {{--<li><a href="{{ url('admin/news/page/2') }}"--}}
                                        {{--{{ $page == 2 ? 'class=active' : '' }}>2</a></li>--}}
                            {{--<li><a href="{{ url('admin/news/page/3') }}"--}}
                                        {{--{{ $page == 3 ? 'class=active' : '' }}>3</a></li>--}}
                            {{--<li><a href="{{ url('admin/news/page/4') }}">4</a></li>--}}
                            {{--<li class="disabled"><a>&gt;&gt;</a></li>--}}
                            {{--<li><a href="{{ url('admin/news/page/'.ceil($records/10)) }}">{{ ceil($records/10) }}</a></li>--}}

                        {{--@elseif($page > ceil($records/10)-3  && $page <= ceil($records/10))--}}
                            {{--<li><a href="{{ url('admin/news/page/1') }}">1</a></li>--}}
                            {{--<li  class="disabled"><a>&lt;&lt;</a></li>--}}
                            {{--<li><a href="{{ url('admin/news/page/'.(ceil($records/10)-3)) }}">--}}
                                    {{--{{ ceil($records/10) - 3 }}--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{ url('admin/news/page/'.(ceil($records/10)-2)) }}"--}}
                                        {{--{{ $page == (ceil($records/10) - 2) ? 'class=active' : '' }}>--}}
                                    {{--{{ ceil($records/10) - 2 }}--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{ url('admin/news/page/'.(ceil($records/10)-1)) }}"--}}
                                        {{--{{ $page == (ceil($records/10) - 1) ? 'class=active' : '' }}>--}}
                                    {{--{{ ceil($records/10) - 1 }}--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{ url('admin/news/page/'.(ceil($records/10))) }}"--}}
                                        {{--{{ $page == ceil($records/10) ? 'class=active' : '' }}>--}}
                                    {{--{{ ceil($records/10) }}--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--@else--}}
                            {{--<li><a href="{{ url('admin/news/page/1') }}">1</a></li>--}}
                            {{--<li class="disabled"><a>&lt;&lt;</a></li>--}}
                            {{--<li><a href="{{ url('admin/news/page/'.($page - 1)) }}">{{ $page - 1 }}</a></li>--}}
                            {{--<li><a href="{{ url('admin/news/page/'.($page)) }}" class="active">{{ $page }}</a></li>--}}
                            {{--<li><a href="{{ url('admin/news/page/'.($page + 1)) }}">{{ $page + 1 }}</a></li>--}}
                            {{--<li class="disabled"><a>&gt;&gt;</a></li>--}}
                            {{--<li><a href="{{ url('admin/news/page/'.(ceil($records/10))) }}">{{ ceil($records/10) }}</a></li>--}}
                        {{--@endif--}}

                    {{--@endif--}}

                    {{--<li class="next {{ $page == ceil($records/10) ? 'disabled': '' }}">--}}
                        {{--<a {{ $page == ceil($records/10) ? '': 'href='.url('admin/news/page/'.($page+1)) }}>Next</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </div>
            {{--<div class="panel-footer"></div>--}}
        </div>
    </div>
@endsection