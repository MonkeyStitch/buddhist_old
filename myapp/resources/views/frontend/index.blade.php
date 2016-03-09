@extends('web._main_frontend')

@section('content')
<header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="nav navbar-nav navbar-left nav-img-left"></div>
        <div class="nav navbar-nav navbar-right nav-img-right"></div>

        <div class="container-fluid nav-relative">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button id="btn-search" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#search">
                    <img src="img/search-white.png"/>
                </button>

                <div class="navbar-brand text-center">
                    <a class="navbar-brand-a" href="">วิถีชีวิตไทยพุทธ</a>
                </div>
            </div>

            <!-- Modal -->
            <div id="search" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Search</h4>
                        </div>
                        <div class="modal-body">
                            <form class="navbar-form">
                                <input type="text" placeholder="search..." class="form-control">
                                <button id="btn-md-search" type="submit" class="btn btn-success btn-search-xs">ค้นหา</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="">หน้าแรก</a></li>
                    <li><a href="">ข่าวและกิจกรรม</a></li>
                    <li><a href="">ความรู้</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">ศาสนพิธี</a></li>
                    <li><a href="">หลักคำสอน</a></li>
                    <li><a href="">การปฏิบัติ</a></li>
                </ul>
            </div>

        </div>
    </nav>
</header>
<!--   end header  -->

<!-- container -->
<div class="container-fluid">
    <div class="row">
        <!--         Sidebar        -->
        <div id="sidebar" class="col-sm-3 col-md-3 col-lg-2 sidebar">
            <div id="frm_search" class="row">
                <div class="col-md-10 col-lg-10">
                    <input type="text" placeholder="Search.." />
                    </div>
                <div class="col-md-2 col-lg-2">
                    <img src="./img/search-black.svg" alt="search"/>
                    </div>
                </div>
            <div id="datepicker"></div>
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item</a></li>
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
                <li><a href="">More navigation</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
            </ul>
        </div>
        <!--       End  Sidebar        -->

        <div id="myCarousel" class="col-sm-9 col-md-9 col-lg-10 carousel slide slide-index" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Example headline.</h1>
                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="item active left">
                    <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item next left">
                    <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>
<!-- end container -->

<!--  footer  -->
<footer class="footer container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-6 footer-left">
            <div class="col-md-4">
                <img src="img/icon.png" alt="logo" class="img-responsive ft-img-logo"/>
            </div>
            <div class="col-md-8">
                <label> Powered by </label>
                <p><a href="http://www.sunandhalai.com/Buddhist/" rel="external">www.sunandhalai.com/Buddhist</a></p>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 footer-medium">
            <h3>วิถีชีวิตไทยพุทธ</h3>
            <p>สาขาวิทยาการคอมพิวเตอร์ &nbsp; คณะวิทยาศาสตร์และเทคโนโลยี  มหาวิทยาลัยราชภัฏสวนสุนันทา</p>
        </div>

        <div class="col-md-4 col-sm-12 footer-right text-center">
            <img src="./img/none-line-footerRight.png" alt="none"/>
            <span>COPYRIGHT © 2015 THAI BUDDHIST LIFESTYLE</span>
        </div>
    </div>
</footer>
<!--  end footer  -->
@endsection()