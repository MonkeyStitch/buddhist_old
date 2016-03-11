@extends('web._main_backend')

@section('page-title', 'ข่าวและกิจกรรม')

@section('stylesheet')
@endsection

@section('script')
@endsection


@section('content')
    <div class="container">
        <div class="panel panel-primary show-data-table">
            <div class="panel-heading" style="font-size: 20pt"><b>{{ $heading }}</b></div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ url('admin/news/create') }}" class="btn btn-green">add news</a>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group col-md-8 col-md-offset-2">
                            <input type="text" class="form-control" id="search" placeholder="Search">
                        </div>
                        <input type="button" class="btn btn-green col-md-2" value="Search"/>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ประเภทข่าว</th>
                            <th>รูปภาพ</th>
                            <th>หัวข่าว</th>
                            <th>แหล่งที่มา</th>
                            <th><i class="glyphicon glyphicon-cog"></i> </th>
                        </tr>
                        </thead>

                        <tbody>
                        @if(count($records) === 0)
                            <tr>
                                <th colspan="5">ไม่พบผลลัพธ์</th>
                            </tr>
                        @else
                            @foreach($news as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->category_id }}</td>
                                    <td>{{ $value->picture }}</td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->by }}</td>
                                    <td>
                                        <a href="#" class="btn btn-default">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                        </tbody>

                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>ประเภทข่าว</th>
                            <th>รูปภาพ</th>
                            <th>หัวข่าว</th>
                            <th>แหล่งที่มา</th>
                            <th><i class="glyphicon glyphicon-cog"></i> </th>
                        </tr>
                        </tfoot>
                    </table>
                </div>



                <ul class="pager">
                    <li class="previous {{ $page == 1 ? 'disabled': '' }}">
                        <a {{ $page == 1 ? '': 'href='.url('admin/news/'.($page-1)) }}>Previous</a>
                    </li>

                    @if($records <= 50)
                        @if($records > 0)
                            <li><a href="{{ url('admin/news/1') }}"
                                        {{ $page == 1 ? 'class=active' : '' }}>1</a></li>
                        @endif
                        @if($records > 10)
                            <li><a href="{{ url('admin/news/2') }}"
                                        {{ $page == 2 ? 'class=active' : '' }}>2</a></li>
                        @endif
                        @if($records > 20)
                            <li><a href="{{ url('admin/news/3') }}"
                                        {{ $page == 3 ? 'class=active' : '' }}>3</a></li>
                        @endif
                        @if($records > 30)
                            <li><a href="{{ url('admin/news/4') }}"
                                        {{ $page == 4 ? 'class=active' : '' }}>4</a></li>
                        @endif
                        @if($records > 40)
                            <li><a href="{{ url('admin/news/5') }}"
                                        {{ $page == 5 ? 'class=active' : '' }}>5</a></li>
                        @endif
                    @else
                        @if($page <= 3)
                            <li><a href="{{ url('admin/news/1') }}"
                                        {{ $page == 1 ? 'class=active' : '' }}>1</a></li>
                            <li><a href="{{ url('admin/news/2') }}"
                                        {{ $page == 2 ? 'class=active' : '' }}>2</a></li>
                            <li><a href="{{ url('admin/news/3') }}"
                                        {{ $page == 3 ? 'class=active' : '' }}>3</a></li>
                            <li><a href="{{ url('admin/news/4') }}">4</a></li>
                            <li class="disabled"><a>---</a></li>
                            <li><a href="{{ url('admin/news/'.ceil($records/10)) }}">{{ ceil($records/10) }}</a></li>

                        @elseif($page > ceil($records/10)-3  && $page <= ceil($records/10))
                            <li><a href="{{ url('admin/news/1') }}">1</a></li>
                            <li  class="disabled"><a>---</a></li>
                            <li><a href="{{ url('admin/news/'.(ceil($records/10)-3)) }}">
                                    {{ ceil($records/10) - 3 }}
                                </a>
                            </li>
                            <li><a href="{{ url('admin/news/'.(ceil($records/10)-2)) }}"
                                        {{ $page == (ceil($records/10) - 2) ? 'class=active' : '' }}>
                                    {{ ceil($records/10) - 2 }}
                                </a>
                            </li>
                            <li><a href="{{ url('admin/news/'.(ceil($records/10)-1)) }}"
                                        {{ $page == (ceil($records/10) - 1) ? 'class=active' : '' }}>
                                    {{ ceil($records/10) - 1 }}
                                </a>
                            </li>
                            <li><a href="{{ url('admin/news/'.(ceil($records/10))) }}"
                                        {{ $page == ceil($records/10) ? 'class=active' : '' }}>
                                    {{ ceil($records/10) }}
                                </a>
                            </li>

                        @else
                            <li><a href="{{ url('admin/news/1') }}">1</a></li>
                            <li class="disabled"><a>---</a></li>
                            <li><a href="{{ url('admin/news/'.($page - 1)) }}">{{ $page - 1 }}</a></li>
                            <li><a href="{{ url('admin/news/'.($page)) }}" class="active">{{ $page }}</a></li>
                            <li><a href="{{ url('admin/news/'.($page + 1)) }}">{{ $page + 1 }}</a></li>
                            <li class="disabled"><a>---</a></li>
                            <li><a href="{{ url('admin/news/'.(ceil($records/10))) }}">{{ ceil($records/10) }}</a></li>
                        @endif

                    @endif

                    <li class="next {{ $page == ceil($records/10) ? 'disabled': '' }}">
                        <a {{ $page == ceil($records/10) ? '': 'href='.url('admin/news/'.($page+1)) }}>Next</a>
                    </li>
                </ul>
            </div>
            {{--<div class="panel-footer"></div>--}}
        </div>
    </div>
@endsection

