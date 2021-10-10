@extends('layout.v_template')
@section('title', 'Home')
@section('container')
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
<div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
        <img src="{{asset('template/')}}/img/indra.jpeg" style="border-radius: 30px; margin-left:55px" class="col-lg-4 position-fixed d-lg-block"/>
         <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="{{asset('template/')}}/img/indra.jpeg" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />  
                <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">HI THERE!</h6>
                <h1 class="text-uppercase poppins-font"><span>I'M</span> {{ $nama }}</h1>
                <p class="open-sans-font">Panggilan akrab Indra, merupakan seorang mahasiswa Universitas Pendidikan Ganesha dengan Program Studi Pendidikan Teknik Informatika.</p>
                <a href="/about" class="btn btn-about">more about me</a>
            </div>
         </div>
    </div>
</section>
@endsection