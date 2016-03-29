<html>
<head>
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 72px;
            margin-bottom: 40px;
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div><img src="{{ asset('img/logo/logo_web.png') }}" alt="logo" width="250px" height="250px"></div>
        <div class="title">Page not found.</div>
        <div><a href="{{ url('/') }}" title="กลับไปหน้าหลัก">หน้าแรก</a></div>
    </div>
</div>
</body>
</html>
