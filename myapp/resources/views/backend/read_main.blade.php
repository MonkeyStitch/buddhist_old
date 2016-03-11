@extends('web._main_backend')

@section('content')
    <div class="container">
        <div class="panel panel-primary show-data-table">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-green">add news</a>
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
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th><i class="glyphicon glyphicon-cog"></i> </th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th colspan="5">ไม่พบผลลัพธ์</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>
                                <a href="#" class="btn btn-default">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>
                                <a href="#" class="btn btn-default">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>
                                <a href="#" class="btn btn-default">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>
                                <a href="#" class="btn btn-default">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>

                        <tfoot>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>



                <ul class="pager">
                    <li class="previous"><a href="#">Previous</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" class="active">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">30</a></li>
                    <li class="next"><a href="#">Next</a></li>
                </ul>
            </div>
            {{--<div class="panel-footer"></div>--}}
        </div>
    </div>
@endsection
