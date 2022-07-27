<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Adward</title>



    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.css')}}" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="{{asset('template/css/css-circular-prog-bar.css')}}">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('template/css/responsive.css')}}" rel="stylesheet" />




    <link rel="stylesheet" href="{{asset('template/css/css-circular-prog-bar.css')}}">


</head>

<body>
    <div class="top_container sub_pages">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('template/images/.png')}}" alt="">
                        <span>

                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{url('/')}}"> Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('about')}}"> About </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('teacher')}}"> Pengajar </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('facility')}}"> Fasilitas </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link text-danger" href="{{url('login')}}">Login as Admin</a>
                                </li>
                            </ul>
                        </div>
                </nav>
            </div>
        </header>

    </div>
    <!-- end header section -->

    @yield('content')


    <!-- about section -->
    <script type="text/javascript" src="{{asset('template/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/bootstrap.js')}}"></script>
</body>

</html>
