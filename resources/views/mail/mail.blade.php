<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        Xin chào {{ $ten }}. <br>
        Đây là thông tin kích hoạt tài khoản của bạn, vui lòng chọn vào "Link kích hoạt để được đăng nhập". Cảm ơn bạn! <br>
    <a href={{ $link }}>kích hoạt tài khoản {{$ten}}</a>


    </div>
</body>
</html>
