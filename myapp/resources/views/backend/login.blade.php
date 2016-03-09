@extends('web._main_backend')

@section('page-title', 'Login')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/admin/signin.css') }}">
    <style>
        .alert-danger {
            text-align: left;
            font-size: 14pt;
        }
    </style>
@endsection

@section('script')

@endsection

@section('content')
    <div class="container">
        <div class="banner">
            <div class="container">
                <img src="{{ asset('img/banner.png') }}" alt="banner" class="img-responsive"/>
            </div>
        </div>

        <div class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{ url('system/login') }}" role="form" method="post" class="form-signin" id="fromlogin">
            <!--    <div class="form-signin" id="fromlogin">-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <h2 class="form-signin-heading">Please Log in</h2>

            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" name="username" id="inputUsername"
                   class="form-control" placeholder="username" required autofocus>


            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword"
                   class="form-control" placeholder="Password" required>

            <button id="btn_login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <!--    </div>-->
        </form>

    </div> <!-- /container -->
@endsection