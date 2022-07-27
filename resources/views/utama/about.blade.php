@extends('utama.main.index')
@section('content')


<section class="about_section layout_padding">
    <div class="container">
        <h2 class="main-heading ">
            About Teknik Informatika
        </h2>
        <p class="text-center">
            Teknik Informatika merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer
            secara optimal
            guna menangani masalah transformasi atau pengolahan data dengan proses logika.
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


@endsection
