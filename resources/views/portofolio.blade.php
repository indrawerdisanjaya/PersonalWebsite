@extends('layout.v_template')
@section('title', 'Portfolio')
@section('container')
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>portfolio</span></h1>
    <span class="title-bg">works</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <!-- Portfolio Grid Starts -->
        <section class="grid-wrap">
            <ul class="row grid">
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('template/')}}/img/projects/dessertcamp1.jpeg" alt="Portolio Image" />
                        <div><span>Dessert Mobile App</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('template/')}}/img/projects/profileui.jpeg" alt="Portolio Image" />
                        <div><span>Profile UI/UX</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('template/')}}/img/projects/noteapp.jpeg" alt="Portolio Image" />
                        <div><span>Note Mobile App</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
            </ul>
        </section>
        <!-- Portfolio Grid Ends -->
        <!-- Portfolio Details Starts -->
        <section class="slideshow">
            <ul>
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Slider Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Mobile</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Title </span>: <span class="ft-wt-600 uppercase">Dessert Camp</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">react native</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Description </span>: <span class="ft-wt-600 uppercase">Project Pemrograman Mobile</span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider" data-slide-to="0" class="active"></li>
                                <li data-target="#slider" data-slide-to="1"></li>
                                <li data-target="#slider" data-slide-to="2"></li>
                            </ol>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="border: 1px solid rgb(204, 204, 204);  overflow: scroll; width: 600px; height: 400px; background-color: rgb(255, 255, 255); margin:center">
                                    <img src="{{asset('template/')}}/img/projects/dessertcamp1.jpeg" alt="slide 1">
                                </div>
                                <div class="carousel-item" style="border: 1px solid rgb(204, 204, 204);  overflow: scroll; width: 600px; height: 400px; background-color: rgb(255, 255, 255); margin:center">
                                    <img src="{{asset('template/')}}/img/projects/dessertcamp2.jpeg" alt="slide 2">
                                </div>
                                <div class="carousel-item" style="border: 1px solid rgb(204, 204, 204);  overflow: scroll; width: 600px; height: 400px; background-color: rgb(255, 255, 255); margin:center">
                                    <img src="{{asset('template/')}}/img/projects/dessertcamp3.jpeg" alt="slide 3">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                 <!-- Portfolio Item Detail Starts -->
                 <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Mobile</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Title </span>: <span class="ft-wt-600 uppercase">UI/UX Profile</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">React Native</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Description </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">Project Pemrograman Mobile</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div style="border: 1px solid rgb(204, 204, 204);  overflow: scroll; width: 600px; height: 400px; background-color: rgb(255, 255, 255); margin:center">
                        <img src="{{asset('template/')}}/img/projects/profileui.jpeg" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                        </div>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Starts -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Mobile</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Title </span>: <span class="ft-wt-600 uppercase">Note App</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">React Native</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Description </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">Project Pemrograman Mobile</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div style="border: 1px solid rgb(204, 204, 204);  overflow: scroll; width: 600px; height: 400px; background-color: rgb(255, 255, 255); margin:center">
                        <img src="{{asset('template/')}}/img/projects/noteapp.jpeg" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                        </div>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Local Video Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Video</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Videohive</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">Adobe Premium</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.envato.com</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <video id="video" class="responsive-video" controls poster="img/projects/project-1.jpg">
                            <source src="{{asset('template/')}}/img/projects/video.mp4" type="video/mp4">
                        </video>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Envato</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.envato.com</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="{{asset('template/')}}/img/projects/noteapp.jpeg" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Envato</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.envato.com</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="{{asset('template/')}}/img/projects/project-6.jpg" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Envato</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.envato.com</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="{{asset('template/')}}/img/projects/project-7.jpg" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Envato</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.envato.com</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="{{asset('template/')}}/img/projects/project-8.jpg" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Envato</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.envato.com</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="{{asset('template/')}}/img/projects/project-9.jpg" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
            </ul>
            <!-- Portfolio Navigation Starts -->
            <nav>
                <span class="icon nav-prev"><img src="{{asset('template/')}}/img/projects/navigation/left-arrow.png" alt="previous"></span>
                <span class="icon nav-next"><img src="{{asset('template/')}}/img/projects/navigation/right-arrow.png" alt="next"></span>
                <span class="nav-close"><img src="{{asset('template/')}}/img/projects/navigation/close-button.png" alt="close"> </span>
            </nav>
            <!-- Portfolio Navigation Ends -->
        </section>
    </div>
</section>
<!-- Main Content Ends -->
@endsection