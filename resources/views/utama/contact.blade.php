@extends('utama.main.index')
@section('content')


<section class="contact_section layout_padding">
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


@endsection
