@extends('utama.main.index')
@section('content')


<section class="teacher_section layout_padding-bottom">
    <div class="container">
        <h2 class="main-heading ">
            Pengajar (Dosen)
        </h2>
        <p class="text-center">
        </p>
        <div class="teacher_container layout_padding2">
            <div class="row">
                @foreach ($data as $d)
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{url($d->foto)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$d->nama_pengajar}}</h5>
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
                <img src="images/right-arrow.png" alt="">
            </a>
        </div>
    </div>
</section>


@endsection
