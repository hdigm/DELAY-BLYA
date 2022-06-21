<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="logotype d-flex justyfy-content-center align-items-center">
                        <img src="https://sun2-10.userapi.com/s/v1/d/ej78Ti0G_J_KL82mbRf_fRZSMkgRqiqrwb7fZvpan3nigjo2RX0eKxvmX5kNX6MUtBnJS-_05GtDFkY_73lQoMggokZLIbwuZaKPhRN_J410hoafGp7-5g/Logo_2_1.png"
                            alt="logotype" class="logotype--img w-100" draggable="false">
                    </div>
                </div>
                <div class="col-8">
                    <ul class="nav h-100 justify-content-center align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Отзывы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">О компании</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Блог</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2">
                    <div class="call d-flex justify-content-center align-items-center">
                        <input type="button" value="Связаться" class="call--btn">
                    </div>
                </div>
            </div>
        </div>
    </header>
        @yield('content')
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
