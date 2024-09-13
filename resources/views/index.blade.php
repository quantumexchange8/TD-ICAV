@extends('layouts.master')
@section('content')
<title>Homepage</title>
        <!-- herobanner__section__start -->
        <div class="herobanner herobanner__with__transparent__header" id="tb__home" style="background: url(img/herobaner/herobanner__1.jpg);">
            <div class="container">
                <div class="herobanner__wrapper">
                    <div class="herobanner__single position-relative">
                        <div class="row align-items-center height__950">
                            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 text-center m-auto" data-aos="fade-up" data-aos-duration="1500">
                                <div class="herobanner__content__wrapper">
                                    <div class="herobanner__small__text sp_bottom_20">
                                        <span class="text__gradient">WELCOME TO TD ICAV </span>
                                    </div>
                                    <div class="herobanner__title">
                                        <h1>We are responsible for managing your financial affairs.</h1>
                                    </div>
                                    <div class="herobanner__text">
                                        <p class="m-auto">Sagittis purus amet volutpat consequat mauris nunc congue nisi and tortor.</p>
                                    </div>
                                    <div class="herobanner__button justify-content-center sp_top_30">
                                        <a class="default__button" href="/about">ABOUT US</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="herobanner__icon">
                <img class="herobanner__vector hero__icon__1" src="img/herobaner/vector__1.png" alt="Vector photo">
                <img class="herobanner__vector hero__icon__4" src="img/herobaner/vector__4.png" alt="Vector photo">
            </div>
        </div>
        <!-- herobanner__section__end -->

        <!-- product__Section__start -->
        <div class="service sp_top_100 sp_bottom_330 special__spacing" id="service__area" style="background: var(--pinkcolor) url(img/service/service__bg__img.png);" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__title text-center sp_bottom_50">
                            <div class="section__title__button">
                                <span class="text__gradient">OUR PRODUCTS</span>
                            </div>
                            <div class="section__title__heading">
                                <h3>We offer a wide range of asset management services</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row position-relative">
                    <div class="team__slider__active swiper">
                        <div class="swiper-wrapper">
                            <div class="col-md35 testimonial__single__slider swiper-slide">
                                <div class="service__single__wraper common__gradient__bg single__transform">
                                    <div class="service__single__inner">
                                        <div class="service__img">
                                            <img src="img/service/service__1.png" alt="">
                                        </div>
                                        <div class="service__content">
                                            <div class="service__heading">
                                                <h5><a href="/products">Introduction</a></h5>
                                            </div>
                                            <div class="service__text">
                                                <p>Continuous monitoring and assessments of each portfolio are carried out by our investment managers in line with risk profiling.</p>
                                            </div>
                                            <div class="service__icon">
                                                <a href="/products"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4258 10.9897L23.0101 10.9897L23.0101 19.574" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.9902 23.0107L22.8908 11.1101" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service__img__bg">
                                        <img src="img/service/service__1__img__bg.svg" alt="">
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-5 testimonial__single__slider swiper-slide">
                                    <div class="service__single__wraper common__gradient__bg single__transform">
                                        <div class="service__single__inner">
                                        <div class="service__img">
                                            <img src="img/service/service__2.png" alt="">
                                        </div>
                                        <div class="service__content">
                                            <div class="service__heading">
                                                <h5><a href="/products">Cryptocurrencies</a></h5>
                                            </div>
                                            <div class="service__text">
                                                <p>In spite of the fact that cryptocurrencies may in fact represent the subsequent big step in the growth of the internet.</p>
                                            </div>
                                            <div class="service__icon">
                                                <a href="/products"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4258 10.9897L23.0101 10.9897L23.0101 19.574" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.9902 23.0107L22.8908 11.1101" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service__img__bg">
                                        <img src="img/service/service__1__img__bg.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md35 testimonial__single__slider swiper-slide">
                                <div class="service__single__wraper common__gradient__bg single__transform">
                                    <div class="service__single__inner">
                                        <div class="service__img">
                                            <img src="img/service/service__3.png" alt="">
                                        </div>
                                        <div class="service__content">
                                            <div class="service__heading">
                                                <h5><a href="/products">Equities</a></h5>
                                            </div>
                                            <div class="service__text">
                                                <p>Equity investments have the potential to be the principal driver of growth in your investment portfolio. </p>
                                            </div>
                                            <div class="service__icon">
                                                <a href="/products"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4258 10.9897L23.0101 10.9897L23.0101 19.574" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.9902 23.0107L22.8908 11.1101" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service__img__bg">
                                        <img src="img/service/service__1__img__bg.svg" alt="">
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md35 testimonial__single__slider swiper-slide">
                                <div class="service__single__wraper common__gradient__bg single__transform">
                                    <div class="service__single__inner">
                                    <div class="service__img">
                                        <img src="img/service/service__3.png" alt="">
                                    </div>
                                    <div class="service__content">
                                        <div class="service__heading">
                                            <h5><a href="/products">Commodities</a></h5>
                                        </div>
                                        <div class="service__text">
                                            <p>The commodities that are used in everyday life, such as gold, silver, and oil, have a tremendous impact on that existence.</p>
                                        </div>
                                        <div class="service__icon">
                                            <a href="/products"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.4258 10.9897L23.0101 10.9897L23.0101 19.574" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.9902 23.0107L22.8908 11.1101" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service__img__bg">
                                    <img src="img/service/service__1__img__bg.svg" alt="">
                                </div>
                            </div>
                            </div>

                            <div class="col-md35 testimonial__single__slider swiper-slide">
                                <div class="service__single__wraper common__gradient__bg single__transform">
                                    <div class="service__single__inner">
                                    <div class="service__img">
                                        <img src="img/service/service__3.png" alt="">
                                    </div>
                                    <div class="service__content">
                                        <div class="service__heading">
                                            <h5><a href="/products">Financial Planning</a></h5>
                                        </div>
                                        <div class="service__text">
                                            <p>Our duty in your investment planning is to assist you in determining your goals and objectives.</p>
                                        </div>
                                        <div class="service__icon">
                                            <a href="/products"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.4258 10.9897L23.0101 10.9897L23.0101 19.574" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.9902 23.0107L22.8908 11.1101" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service__img__bg">
                                    <img src="img/service/service__1__img__bg.svg" alt="">
                                </div>
                            </div>
                            </div>

                            <div class="col-md35 testimonial__single__slider swiper-slide">
                                <div class="service__single__wraper common__gradient__bg single__transform">
                                    <div class="service__single__inner">
                                        <div class="service__img">
                                            <img src="img/service/service__4.png" alt="">
                                        </div>
                                        <div class="service__content">
                                            <div class="service__heading">
                                                <h5><a href="service-details.html">Retirement Planning </a></h5>
                                            </div>
                                            <div class="service__text">
                                                <p>The supply of well-balanced assets, profit sharing, and secure investments are the sole components of our retirement plan services.</p>
                                            </div>
                                            <div class="service__icon">
                                                <a href="service-details.html"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4258 10.9897L23.0101 10.9897L23.0101 19.574" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.9902 23.0107L22.8908 11.1101" stroke="#0A0624" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service__img__bg">
                                        <img src="img/service/service__1__img__bg.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider__controls__wrap slider__controls__pagination slider__controls__arrows">
                        <div class="swiper-button-next arrow-btn arrow-btn-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4297 5.92999L20.4997 12L14.4297 18.07" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.5 12H20.33" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="swiper-button-prev arrow-btn arrow-btn-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.57031 5.92999L3.50031 12L9.57031 18.07" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.5 12H3.67" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product__Section__end-->

        <!-- portfolio__Section__start -->
        <div class="blog__2 sp_top_100 sp_bottom_140 special__spacing" id="tb__blogs" style="background:var(--pinkcolor) url(img/blog/blog__bg_1.png);">
            <div class="container">
                <div class="row align-items-center sp_bottom_80" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="section__title section__title--2 section__title--3 ">
                            <div class="section__title__button">
                                <span>PORTFOLIO</span>
                            </div>
                            <div class="section__title__heading">
                                <h3>OUR PORTFOLIO</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row position-relative">
                    <div class="team__slider__active swiper">
                        <div class="swiper-wrapper">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12 swiper-slide" data-aos="fade-up" data-aos-duration="1800">
                                <div class="blog__2__wrapper common__gradient__bg single__transform ">
                                    <div class="blog__2__inner">
                                        <div class="blog__2__heading">
                                            <h3><a href="#">FINANCIAL PLANNING PORTFOLIO</a></h3>
                                        </div>
                                        <div class="blog__2__text">
                                            <p>The formulation of a financial plan gives client the ability to evaluate their strategy for retirement and determine the projection of their existing assets and resources into future income in order to accomplish their goals for future.</p>
                                        </div>
                                        <div class="blog__2__button">
                                            <a class="default__button btn__white" href="#">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-12 swiper-slide" data-aos="fade-up" data-aos-duration="1800">
                                <div class="blog__2__wrapper common__gradient__bg single__transform">
                                    <div class="blog__2__inner">
                                        <div class="blog__2__heading">
                                            <h3><a href="#">THE PROGRAMS OF ADVISORY</a></h3>
                                        </div>
                                        <div class="blog__2__text">
                                            <p>In order to better grasp your situation and your goals, we will make an effort to learn about them. These are some of the most significant talks that you will ever have, therefore it is imperative that you get off to a good start. </p>
                                        </div>
                                        <div class="blog__2__button">
                                            <a class="default__button btn__white" href="#">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-12 swiper-slide" data-aos="fade-up" data-aos-duration="1800">
                                <div class="blog__2__wrapper common__gradient__bg single__transform">
                                    <div class="blog__2__inner">
                                        <div class="blog__2__heading">
                                            <h3><a href="#">PORTFOLIO THAT ARE PERSONALIZED</a></h3>
                                        </div>
                                        <div class="blog__2__text">
                                            <p>There is a wide variety of risk appetites that may be accommodated by our service, which is a collection of pre-designed portfolios that are customized to meet those needs</p>
                                        </div>
                                        <div class="blog__2__button">
                                            <a class="default__button btn__white" href="#">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-12 swiper-slide" data-aos="fade-up" data-aos-duration="1800">
                                <div class="blog__2__wrapper common__gradient__bg single__transform">
                                    <div class="blog__2__inner">
                                        <div class="blog__2__heading">
                                            <h3><a href="#">PROVIDERS OF ADVISORY SERVICES</a></h3>
                                        </div>
                                        <div class="blog__2__text">
                                            <p>Your family's wealth may be developed and protected with the assistance of our Trust Company, Client Consultation Group, and Advisory Solutions, all of which are accessible to provide assistance. </p>
                                        </div>
                                        <div class="blog__2__button">
                                            <a class="default__button btn__white" href="#">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                 
                        </div>
                    </div>

                    <div class="slider__controls__wrap slider__controls__pagination slider__controls__arrows">
                        <div class="swiper-button-next arrow-btn arrow-btn-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4297 5.92999L20.4997 12L14.4297 18.07" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.5 12H20.33" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="swiper-button-prev arrow-btn arrow-btn-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.57031 5.92999L3.50031 12L9.57031 18.07" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.5 12H3.67" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio__end -->

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

         <!-- Discover more__Section__start -->
         <div class="testimonial testimonial__2 sp_bottom_140 sp_top_100" style="background: var(--whiteColor)">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-xl-12" data-aos="fade-up" data-aos-duration="1500">
                        <div class="section__title text-center sp_bottom_50">
                            <div class="section__title__button">
                                <span>Discover more information about the topic</span>
                            </div>
                            <div class="section__title">
                                <p>Our company offers a wide range of asset management services that are not only cutting-edge but also creative and forward-thinking solutions. 
                                To ensure that each client has a realistic grasp of the services they may anticipate from us, our investment management strategy is to ensure that this understanding is established from the very beginning. In light of this, prior to enrolling in our services, we make certain that you have, in conjunction with your intermediate adviser, defined a specific investment aim. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row position-relative">
                    <div class="team__slider__active swiper ">
                        <div class="swiper-wrapper">
                            <div class="col-md35 testimonial__single__slider swiper-slide">
                                <div class="testimonial__2__single">
                                    <h5>THE PORTFOLIO</h5>
                                    <p>Continuous monitoring and assessments of your personal investment portfolio are carried out by our investment managers in line with risk profiling.</p>
                                </div>
                            </div>
                            <div class="col-md-5 testimonial__single__slider swiper-slide">
                                <div class="testimonial__2__single">
                                    <h5>ELIGIBLE ACCESS </h5>
                                    <p>When it comes to protecting and growing your money, we have the technical competence to make the most of possibilities that present themselves. Our portfolios have been made as simply accessible as possible, and we have made every effort to make this happen. We are willing to take either direct investments or transfers. </p>
                                </div>
                            </div>
                            <div class="col-md-3 testimonial__single__slider swiper-slide">
                                <div class="testimonial__2__single">
                                    <h5>SATISFACTION (SUFFICIENCY)</h5>
                                    <p>Our portfolios benefit from our ability to adjust portfolio compositions in reaction to important market situations, which we capitalize on. This ability allows us to make the most of our portfolios. We are able to take advantage of a market that is still emerging or integrate greater protection as a result of this. </p>
                                </div>
                            </div>
                            <div class="col-md-3 testimonial__single__slider swiper-slide">
                                <div class="testimonial__2__single">
                                    <h5>THE ABILITY TO BE FLEXIBLE </h5>
                                    <p>It is vital that an investment have sufficient liquidity in order for it to be evaluated for inclusion in a portfolio. The length of time it takes for your investments to generate a return is regularly mentioned, and there are no long-term lock-in periods that are imposed. </p>
                                </div> 
                            </div>
                            <div class="col-md-3 testimonial__single__slider swiper-slide">
                                <div class="testimonial__2__single">
                                    <h5>EQUITIES </h5>
                                    <p>When compared to more secure investments, such as bank accounts and bonds, the performance of equity investments has historically been superior. Equity investments have the potential to be the principal driver of growth in your investment portfolio. </p>
                                </div>
                            </div>
                            <div class="col-md-3 testimonial__single__slider swiper-slide">
                                <div class="testimonial__2__single">
                                    <h5>Merchandise plus services </h5>
                                    <p>It is possible that incorporating commodities into your investing plan might be beneficial, depending on the financial goals you have set for yourself and the investments you already have now in your portfolio. </p>
                                </div>
                            </div>
                            <div class="col-md-3 testimonial__single__slider swiper-slide">
                                <div class="testimonial__2__single">
                                    <h5>CRYPTOCURRENCIES </h5>
                                    <p>offers and gives access to systematically diversified cryptocurrency portfolios and cryptocurrency fund investments without necessitating any complexity. </p>
                                </div>
                            </div>
                            <div class="col-md-3 testimonial__single__slider swiper-slide">
                                <div class="testimonial__2__single">
                                    <h5>Organizing on a Financial </h5>
                                    <p>A client is able to evaluate their path to retirement and determine the projection of future income from existing assets and savings when they have a financial plan in place. </p>
                                </div>
                            </div>
                            <div class="col-md-3 testimonial__single__slider swiper-slide">
                                <div class="testimonial__2__single">
                                    <h5>Making sure that your wealth is safeguarded and managed for the future  </h5>
                                    <p>Our discretionary managed portfolio service was developed with the intention of ensuring that each and every one of our clients is treated in an equitable manner. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider__controls__wrap slider__controls__pagination slider__controls__arrows">
                        <div class="swiper-button-next arrow-btn arrow-btn-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4297 5.92999L20.4997 12L14.4297 18.07" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.5 12H20.33" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="swiper-button-prev arrow-btn arrow-btn-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.57031 5.92999L3.50031 12L9.57031 18.07" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.5 12H3.67" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
             </div>
         </div>
         <!-- Discover more__Section__end-->

@endsection
