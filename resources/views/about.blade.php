@extends('layout.v_template')
@section('title', 'About')
@section('container')
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>ABOUT <span>ME</span></h1>
    <span class="title-bg">Resume</span>
</section>
<!-- Page Title Ends -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Personal Info Starts -->
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                    </div>
                    <div class="col-12 d-block d-sm-none">
                        <img src="{{asset('template/')}}/img/img-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Nama :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Gede Indra Werdi Sanjaya</span> </li>
                            <li> <span class="title">Tempat, tanggal lahir :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">11-01-2001</span> </li>
                            <li> <span class="title">Umur :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">20 Years</span> </li>
                            <li> <span class="title">Kebangsaan :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Indonesia</span> </li>
                            <li> <span class="title">ALamat:</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Banyuning, Bali, Indonesia</span> </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Status :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Mahasiswa</span> </li>
                            <li> <span class="title">phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">081424651236</span> </li>
                            <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">indra.werdhisanjaya@gmail.com</span> </li>
                            <li> <span class="title">Github :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">https://github.com/indrawerdisanjaya</span> </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="/about" class="btn btn-download">Download CV</a>
                    </div>
                </div>
            </div>
            <!-- Personal Info Ends -->
          <!-- Boxes Starts -->
          <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-6">
                        <div class="">
                            <img src="{{asset('template/')}}/img/indra.jpeg" style="margin-left: 50px; border-radius:6px; width:300px;height:400px" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Boxes Ends -->
        </div>
        <hr class="separator">
        <!-- Skills Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p80">
                    <span>80%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p70">
                    <span>70%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p80">
                    <span>80%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>65%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p70">
                    <span>70%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">sql</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p50">
                    <span>50%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p30">
                    <span>30%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">bootstrap</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p45">
                    <span>45%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">react</h6>
            </div>
        </div>
        <!-- Skills Ends -->
        <hr class="separator mt-1">
        <!-- Experience & Education Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education</h3>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2017 - 2019</span>
                            <h5 class="poppins-font text-uppercase">Anggota Basket <span class="place open-sans-font">SMA Negeri 4 Singaraja</span></h5>
                            <p class="open-sans-font">Salah satu anggota ekstrakulikuler basket di SMA Negeri 4 Singaraja, </p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2017 - 2018</span>
                            <h5 class="poppins-font text-uppercase">Anggota Pramuka <span class="place open-sans-font">SMA Negeri 4 Singaraja</span></h5>
                            <p class="open-sans-font">Salah satu anggota ekstrakulikuler pramuka di SMA Negeri 4 Singaraja</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2017 - 2018</span>
                            <h5 class="poppins-font text-uppercase">Anggota Catur <span class="place open-sans-font">SMA Negeri 4 Singaraja</span></h5>
                            <p class="open-sans-font">Salah satu anggota ekstrakulikuler catur di SMA Negeri 4 Singaraja</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2008-2013</span>
                            <h5 class="poppins-font text-uppercase">Sekolah Dasar <span class="place open-sans-font">SD No 5 Banyuning</span></h5>
                            <p class="open-sans-font">SD No 5 Banyuning adalah sekolah dasar yang berlokasi di jalan P. komodo, kelurahan banyuning, provinsi bali, indonesia</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2014-2016</span>
                            <h5 class="poppins-font text-uppercase">Sekolah Menengah Pertama <span class="place open-sans-font">SMP Negeri 2 Singaraja</span></h5>
                            <p class="open-sans-font">SMP Negeri 2 Singaraja adalah sekolah menengah pertama yang berlokasi di jalan sudirman, banyuasri, provinsi bali, indonesia</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2017-2019</span>
                            <h5 class="poppins-font text-uppercase">Sekolah Menengah Atas <span class="place open-sans-font">SMA Negeri 4 Singaraja</span></h5>
                            <p class="open-sans-font">SMA Negeri 4 Singaraja adalah sekolah menengah atas yang berlokasi di jalan melati, kabupaten buleleng, provinsi bali, indonesia</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Experience & Education Ends -->
    </div>
</section>
@endsection