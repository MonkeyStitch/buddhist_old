<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:type" content="website">
    <meta property="og:title" content="วิถีชีวิตไทยพุทธ พุทธมามกะ ฆราวาส">
    <meta property="og:description" content="วิถีชีวิตไทยพุทธ พุทธมามกะ ฆราวาส พิธีกรรม วันสำคัญทางศาสนา หลักคำสอน การปฏิบัติ">
    <!--    <meta property="og:url" content="">-->
    <meta property="og:site_name" content="www.sunandhalai.com/Buddhist">
    <!--    <meta property="og:image" content="">-->
    <meta name="keywords" content="วิถีชีวิตไทยพุทธ,พุทธมามกะ,หลักคำสอน,พิธีกรรม,วันสำคัญศาสนา">
    <meta name="description" content="วิถีชีวิตไทยพุทธ พุทธมามกะ ฆราวาส พิธีกรรม วันสำคัญทางศาสนา หลักคำสอน การปฏิบัติ">


    <title>@yield('page-title') :: ระบบหลังบ้านวิถีชีวิตไทยพุทธ  </title>

    <link rel="icon shortcut" href="{{ asset('img/logo/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('_assets/bootstrap-3.3.5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/old/main.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin/backend.css') }}">

    @yield('stylesheet')


    <script type="text/javascript" src="{{ asset('lib/js/jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('_assets/bootstrap-3.3.5/js/bootstrap.min.js') }}"></script>
    @yield('script')
</head>
<body class="wrapper">
<!--    header  -->
    @if(!Auth::guest())
        <header>
            <div class="banner">
                <div class="container">
                    <img src="{{ asset('img/banner.png') }}" alt="banner" class="img-responsive center-block"/>
                </div>
            </div>
            <div class="navbar navbar-backend" role="navigation">
                <div class="container">
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation">
                            <a href='{{ url('admin/news') }}'>ข่าว/กิจกรรม</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ความรู้ทางศาสนา
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('') }}">ประวัติพระพุทธเจ้า</a></li>
                                <li><a href="{{ url('') }}">วันสำคัญ</a></li>
                                <li><a href="{{ url('') }}">พิธีกรรมและการบริกรรม</a></li>
                                <li><a href="{{ url('') }}">ศาสนสถาน</a></li>
                            </ul>
                        </li>

                        <li role="presentation">
                            <a href='{{ url('admin/news') }}'>ศาสนพิธี</a>
                        </li>
                        {{--<li class="dropdown">--}}
                            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">ศาสนพิธี--}}
                                {{--<span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="{{ url('') }}">กุศลพิธี</a></li>--}}
                                {{--<li><a href="{{ url('') }}">บุญพิธี</a></li>--}}
                                {{--<li><a href="{{ url('') }}">ทานพิธี</a></li>--}}
                                {{--<li><a href="{{ url('') }}">ปกิณกะ</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">หลักธรรมคำสอน
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('') }}">พระพุทธเจ้า</a></li>
                                <li><a href="{{ url('') }}">พระเกจิอาจารย์</a></li>
                                <li><a href="{{ url('') }}">พระมหากษัตริย์</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">การปฏิบัติตนของชาวพุทธ
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('') }}">การไหว้</a></li>
                                <li><a href="{{ url('') }}">การกราบ</a></li>
                                <li><a href="{{ url('') }}">การประเคนของ</a></li>
                                <li><a href="{{ url('') }}">การบำเพ็ญสมาธิ</a></li>
                                <li><a href="{{ url('') }}">หลักการปฏิบัติตนในชีวิตประจำวัน</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ url('system/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>
    @endif
<!--   end header  -->


<!-- container -->
        @yield('content')
<!-- end container -->


<!--  footer  -->
    @if(!Auth::guest())
        <footer class="footer container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-left">
                    <div class="col-md-4">
                        <img src="{{ asset('img/icon.png') }}" alt="logo" class="img-responsive ft-img-logo"/>
                    </div>
                    <div class="col-md-8">
                        <p> Powered by &nbsp;</p>
                        <p><a href="http://www.sunandhalai.com" rel="external">www.sunandhalai.com</a></p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 footer-medium">
                    <h3>วิถีชีวิตไทยพุทธ</h3>
                    <p>สาขาวิทยาการคอมพิวเตอร์ &nbsp; คณะวิทยาศาสตร์และเทคโนโลยี  มหาวิทยาลัยราชภัฏสวนสุนันทา</p>
                </div>

                <div class="col-md-4 col-sm-12 footer-right text-center">
                    <img src="{{asset('img/none-line-footerRight.png')}}" alt="none"/>
                    <span>COPYRIGHT © 2015 THAI BUDDHIST LIFESTYLE</span>
                </div>
            </div>
        </footer>
    @endif
<!--  end footer  -->




</body>
</html>