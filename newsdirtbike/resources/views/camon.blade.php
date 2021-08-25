<?php
    use App\Http\Controllers\TinController;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../public/css/bootstrap.css" rel="stylesheet">
    <style>
    body {
    padding: 40px;
}

/* Animation */

@keyframes fadeInUp {
    from {
        transform: translate3d(0,40px,0)
    }

    to {
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

@-webkit-keyframes fadeInUp {
    from {
        transform: translate3d(0,40px,0)
    }

    to {
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

.animated {
    text-align: center;
    animation-duration: 1s;
    animation-fill-mode: both;
    -webkit-animation-duration: 1s;
    -webkit-animation-fill-mode: both
}

.animatedFadeInUp {
    opacity: 0
}

.fadeInUp {
    opacity: 0;
    animation-name: fadeInUp;
    -webkit-animation-name: fadeInUp;
}
    </style>
</head>
<body>
<div class="animated animatedFadeInUp fadeInUp">
    <h1>Liên hệ thành công</h1>
</div>
<div class="animated animatedFadeInUp fadeInUp">
    <p>Cảm ơn bạn đã liên hệ với chúng tôi.</p>
</div>
<div class="animated animatedFadeInUp fadeInUp">
    <a href="{{action([TinController::class, 'index'])}}"><button class="btn btn-info"> Về Trang chủ</button></a>
</div>
</body>
</html>