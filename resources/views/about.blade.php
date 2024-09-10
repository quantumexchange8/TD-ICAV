@extends('layouts.master')

@section('content')
<title>About Us</title>

        <!-- breadcrumbarea__start -->
        <div class="breadcrumbarea" style="background: url(img/about/about__bg__1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12" data-aos="fade-up" data-aos-duration="1500">
                        <div class="breadcrumbarea__content__wraper">
                            <div class="breadcrumbarea__title">
                                <h2 class="heading">About Page</h2>
                            </div>
                            <div class="breadcrumbarea__inner">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>// </li>
                                    <li> About us </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        

        </div>
        <!-- breadcrumbarea__end -->

        <div class="about__team__sec__wrap" style="background: var(--pinkcolor) url(img/about/about__bg__2.png);">
            <!-- about__section__start -->
            <div class="about about__white__bg position-relative sp_bottom_120 sp_top_160" id="about__mission__area">
                <div class="container">
                    <div class="row">
                
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1500">
                            <div class="about__inner about__inner--2">

                                <div class="section__title  section__title--2">
                                    <div class="section__title__button">
                                        <span class="text__gradient ">About Us</span>
                                    </div>
                                    <div class="section__title__heading">
                                        <h3>We are responsible for managing your financial affairs.</h3>
                                    </div>
                                </div>

                                <div class="about__vision__wrapper sp_top_60">

                                <div class="about__text__wrapper">
                                <div class="about__text__2">
                                    <h6>TD ICAV's Chief Executive Officers</h6>
                                </div>
                                <div class="about__text__2">
                                    <p>Xxxxx Xxxxx and Xxxxx Xxxxxxx are two investment experts with a remarkable career in the investment sector and a high level of experience. They facilitated the organization's establishment. They introduced the concept of a wealth management business. </p>
                                </div>
                                <div class="about__button">
                                    <a class="default__button" href="{{route('about-details') }}">LEARN MORE ABOUT</a>
                                </div>
                            </div>
                            </div>
                        

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1500">
                            <div class="about__img__3" data-tilt>
                                <img src="img/about/about__4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about__section__end-->




        <!-- brand__section__start -->
        <div class="facts sp_40">
            <div class="container">
                <div class="facts__inner" id="funfactId">
                    <div class="facts__single text-center" data-aos="fade-up" data-aos-duration="1500">
                        <div class="facts__single__counter">
                            <div class="counter__number">
                                <span class="counter js-counter" data-count="12007">12007</span>+
                            </div>
                            <p>Satisfied Investors</p>
                        </div>
                    </div>
                    <div class="facts__single" data-aos="fade-up" data-aos-duration="1800">
                        <img src="img/brand/brand__3.png" alt="">
                    </div>
                    <div class="facts__single text-center" data-aos="fade-up" data-aos-duration="2000">
                        <div class="facts__single__counter">
                            <div class="counter__number">
                                <span class="counter js-counter" data-count="89">89</span>+
                            </div>
                            <p>Investment Funds</p>
                        </div>
                    </div>
                    <div class="facts__single" data-aos="fade-up" data-aos-duration="2200">
                        <img src="img/brand/brand__3.png" alt="">
                    </div>
                    <div class="facts__single text-center" data-aos="fade-up" data-aos-duration="2400">
                        <div class="facts__single__counter">
                            <div class="counter__number">
                                <span class="counter js-counter" data-count="11">11</span>+
                            </div>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <div class="facts__single" data-aos="fade-up" data-aos-duration="2600">
                        <img src="img/brand/brand__3.png" alt="">
                    </div>
                    <div class="facts__single text-center" data-aos="fade-up" data-aos-duration="2800">
                        <div class="facts__single__counter">
                            <div class="counter__number">
                                <span class="counter js-counter" data-count="13712">13712</span>+
                            </div>
                            <p>Managed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand__section__end -->


@endsection