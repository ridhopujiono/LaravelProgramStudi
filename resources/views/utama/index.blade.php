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
    <div class="top_container">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{('template/images/.png')}}" alt="">
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
        <section class="hero_section ">
            <div class="hero-container container">
                <div class="hero_detail-box">
                    <h3>
                        Selamat datang di <br>
                        Program studi
                    </h3>
                    <h1>
                        TEKNIK INFORMATIKA
                    </h1>
                    <p>
                        Teknik Informatika hanya mengajarkan bagaimana siswa menggunakan komputer.
                    </p>
                    <div class="hero_btn-continer">
                        <a href="" class="call_to-btn btn_white-border">
                            <span>
                                Contact
                            </span>
                            <img src="{{asset('template/images/right-arrow.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="hero_img-container">
                    <div>
                        <img src="{{asset('template/images/.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end header section -->

    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="container">
            <h2 class="main-heading ">
                About Teknik Informatika
            </h2>
            <p class="text-center">
                Teknik Informatika merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer
                secara optimal guna menangani masalah transformasi atau pengolahan data dengan proses logika.
            </p>
            <div class="about_img-box ">
                <img src="{{asset('template/images/gg.jpg')}}" alt="" class="img-fluid w-100">
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a href="" class="call_to-btn  ">

                    <span>
                        Read More
                    </span>
                    <img src="{{asset('template/images/right-arrow.png')}}" alt="">
                </a>
            </div>
        </div>
    </section>


    <!-- about section -->

    <!-- teacher section -->
    <section class="teacher_section layout_padding-bottom">
        <div class="container">
            <h2 class="main-heading ">
                Pengajar (Dosen)
            </h2>
            <p class="text-center">

            </p>
            <div class="teacher_container layout_padding2">
                <div class="row">
                    @foreach ($pengajar as $p)
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{asset($p->foto)}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$p->nama_pengajar}}</h5>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>


            <div class="d-flex justify-content-center mt-3">
                <a href="" class="call_to-btn  ">

                    <span>
                        See More
                    </span>
                    <img src="{{asset('template/images/right-arrow.png')}}" alt="">
                </a>
            </div>
        </div>
    </section>

    <!-- teacher section -->

    <!-- vehicle section -->
    <section class="vehicle_section layout_padding">
        <div class="container">
            <h2 class="main-heading ">
                Fasilitas
            </h2>
            <p class="text-center">
                Bisa digunakan kapan saja
            </p>
            <div class="layout_padding-top">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($fasilitas as $key => $f)
                        @if($key == 0)
                        <div class="carousel-item active">
                            <div class="vehicle_img-box ">
                                <img src="{{asset($f->foto)}}" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        @else
                        <div class="carousel-item">
                            <div class="vehicle_img-box ">
                                <img src="{{asset($f->foto)}}" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        @endif

                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
    </section>


    <!-- vehicle section -->

    <!-- contact section -->

    <section class="contact_section layout_padding-bottom">
        <div class="container">

            <h2 class="main-heading">
                Contact Now

            </h2>
            <p class="text-center">

            </p>
            <div class="">
                <div class="contact_section-container">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="contact-form">
                                <form action="">
                                    <div>
                                        <input type="text" placeholder="Nama">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Nomor telefon">
                                    </div>
                                    <div>
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Pesan" class="input_message">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn_on-hover">
                                            Kirim
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- end contact section -->

    <!-- vehicle section -->

    <!-- footer section -->

    <script type="text/javascript" src="{{asset('template/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/bootstrap.js')}}"></script>
    <!-- progreesbar script -->


    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->
</body>

</html>
