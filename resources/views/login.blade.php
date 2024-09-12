@extends('layouts.master')
@section('content')
<title>Login</title>

<!-- breadcrumbarea__start -->
<div class="breadcrumbarea" style="background: url(img/about/about__bg__1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" data-aos="fade-up" data-aos-duration="1500">
                <div class="breadcrumbarea__content__wraper">
                    <div class="breadcrumbarea__title">
                        <h2 class="heading">Login</h2>
                    </div>
                    <div class="breadcrumbarea__inner">
                        <ul>
                            <li><a href="/index">Home</a></li>
                            <li>// </li>
                            <li> Login </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbarea__end -->

<!-- login__section__start -->
<div class="loginarea sp_top_140 sp_bottom_200">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2 col-md-12 col-12">
                <ul class="nav  tab__button__wrap text-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">Sign up</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content tab__content__wrapper" id="myTabContent">
                <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                    <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2 col-md-12 col-12">
                        <div class="loginarea__wraper">
                            <div class="loginarea__heading">
                                <h5 class="login__title">Login</h5>
                                <p class="login__description">Don't have an account yet? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Sign up for free</a></p>
                            </div>
                            <form action="#">
                                <div class="loginarea__form">
                                    <label class="form__label">Username or email</label>
                                    <input class="common__login__input" type="text" placeholder="Your username or email">
                                </div>
                                <div class="loginarea__form">
                                    <label class="form__label">Password</label>
                                    <input class="common__login__input" type="password" placeholder="Password">
                                </div>
                                <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2">
                                    <div class="form__check">
                                        <input type="checkbox" name="" id="remamber__pass">
                                        <label for="remamber__pass" >Remember me</label>
                                    </div>
                                    <div class="text-end login__form__link">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                                <div class="loginarea__button text-center">
                                    <button class="default__button btn__black">LOG IN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                    <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2 col-md-12 col-12">
                        <div class="loginarea__wraper">
                            <div class="loginarea__heading">
                                <h5 class="login__title">Sign Up</h5>
                                <p class="login__description">Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Log In</a></p>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">First Name</label>
                                            <input class="common__login__input" type="text" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">Last Name</label>
                                            <input class="common__login__input" type="password" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">Username</label>
                                            <input class="common__login__input" type="password" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">Email</label>
                                            <input class="common__login__input" type="password" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">Password</label>
                                            <input class="common__login__input" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">Re-Enter Password</label>
                                            <input class="common__login__input" type="password" placeholder="Re-Enter Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2 sp_bottom_20">
                                    <div class="form__check">
                                        <input type="checkbox" name="" id="accpet__terms">
                                        <label for="accpet__terms">Accept the Terms and Privacy Policy</label>
                                    </div>
                                </div>
                                <div class="login__button">
                                    <button class="default__button btn__black text-center" href="#">SIGN UP</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection