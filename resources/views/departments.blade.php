@extends('layouts.master')
@section('title', 'Departments')

@section('content')

    <!-- breadcrumbarea__start -->
    <div class="breadcrumbarea aos-init aos-animate" data-aos="fade-up" style="background: url(img/about/about__bg__1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12" data-aos="fade-up" data-aos-duration="1500">
                    <div class="breadcrumbarea__content__wraper">
                        <div class="breadcrumbarea__title">
                            <h2 class="heading">Departments</h2>
                        </div>
                        <div class="breadcrumbarea__inner">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li>// </li>
                                <li><a href="/about">About Us</a></li>
                                <li>// </li>
                                <li> Departments </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbarea__end -->

    <!-- department__details__start -->
    <div class="service__details sp_top_120 sp_bottom_160">
        <div class="container">
            <div class="section__title">
                <p>Continue to investigate our services to determine which ones are most appropriate for your needs. We use the following layout to organize our departments:</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                    <div class="service__details__sidebar sidebar" style="padding: 35px 0 0 0">
                        <div class="sidebar__widget" data-aos="fade-up" data-aos-duration="1800">
                            <div class="sidebar__title">
                                <h5>All Departments:</h5>
                            </div>
                            <div class="sidebar__list">
                                <ul>
                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_1">The Development Of Businesses
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_2">Engineering And Technology
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_3">Facilities Team
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_4">Finance Team
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_5">Human Resources
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_6">Compliance And Legal Issues
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_7">Advertising And Marketing
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_8">Operations
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_9">Investment In Portfolios
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_10">Portfolio Implementation Team
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_11">Conducting An Investigation
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_12">Risk Management Team
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar__common__input" href="#" data-content="content_section_13">Global Trading Strategies Team
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- department contents -->
                @include('departments.department-contents')
            </div>
        </div>
    </div>
    <!-- department__details__end -->
@endsection

