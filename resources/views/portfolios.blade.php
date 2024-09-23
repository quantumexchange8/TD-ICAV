@extends('layouts.master')
@section('title', 'Portfolios')

@section('content')
{{-- @push('scripts')
<script src="{{ asset('js/app.js')}}"></script>
@endpush --}}

    <!-- breadcrumbarea__start -->
    <div class="breadcrumbarea" style="background: url(img/about/about__bg__1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12" data-aos="fade-up" data-aos-duration="1500">
                    <div class="breadcrumbarea__content__wraper">
                        <div class="breadcrumbarea__title">
                            <h2 class="heading">Portfolios</h2>
                        </div>
                        <div class="breadcrumbarea__inner">
                            <ul>
                                <li><a href="/index">Home</a></li>
                                <li>// </li>
                                <li> Portfolios </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbarea__end -->
    
    <!-- service__details__start -->
    <div class="service__details sp_top_140 sp_bottom_160">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                    <div class="service__details__sidebar sidebar" style="padding: 35px 0 0 0">
                        <div class="sidebar__widget" data-aos="fade-up" data-aos-duration="1800">
                            <div class="sidebar__title">
                                <h5>All Portfolios:</h5>
                            </div>
                            <div class="sidebar__list">
                                <ul>
                                    <li>
                                        <a class="sidebar__common__input" data-content="content_section_1">Financial Planning Portfolios
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar__common__input" data-content="content_section_2">The Programs of Advisory
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar__common__input" data-content="content_section_3">Portfolios that are Personalized 
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar__common__input" data-content="content_section_4">Providers of Advisory Services 
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product contents -->
                @include('portfolios.portfolios-contents')
            </div>
        </div>
    </div>
    <!-- service__details__end -->
@endsection

