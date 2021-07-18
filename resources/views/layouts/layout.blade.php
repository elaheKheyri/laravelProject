<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> دبیرستان غیردولتی الهه</title>
    <link rel="icon" type="/image/x-icon" href="/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/">صفحه اصلی  </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/winers">لیست برندگان </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" ;
                            style="font-family: Bnazanin ; font-weight: bold" href="/about_us">درباره ی ما </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/notife">اطلاعیه ها </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/contact">تماس با ما</a></li>
                    <li class="nav-item"> <a class="nav-link px-lg-3 py-3 py-lg-4">
                            @if (Route::has('login')) @auth
                    <li class="nav-item"> <a class="nav-link px-lg-3 py-3 py-lg-4" href='/dashboard'>پنل شخصی </a></li>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('!پنل شخصی شما') }}
                    </h2>

                @else <li class="nav-item"> <a class="nav-link px-lg-3 py-3 py-lg-4" href='/login'> وارد شوید </a>
                    </li>


                @endauth
                @endif
				
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header-->
<header class="masthead" style="background-image: url('/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1> دبیرستان غیردولتی الــهه </h1>
                </div>
            </div>
        </div>
    </div>


</header>




@yield('mohtava')


<!-- Footer-->
			<hr style="background-image: url(images/model1.png) ; border: 0;height: 40px; background-position:center;"/>

<footer >

    <div class="small text-center text-muted fst-italic"> تمام حقوق این سایت برای دبیرستان غیردولتی الهه محفوظ می
        باشد</div>

    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="/js/scripts.js"></script>
</body>

</html>
