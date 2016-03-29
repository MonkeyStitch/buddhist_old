<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
    <h1>Test</h1>
    <?php
        $img = Image::make(file_get_contents('images/news/20160321-210120-icon.png'));
        $img->encode('png');
        $type = 'png';
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
        //
    ?>
    <img src="{!! $base64 !!}">
    <img src="{{ asset('images/news/20160321-210120-icon.png')}}" alt="">
    {{--{!! $img !!}--}}
</body>
</html>