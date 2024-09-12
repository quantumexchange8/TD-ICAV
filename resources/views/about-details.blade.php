@extends('layouts.master')
    
@section('content')
    
    <!-- breadcrumbarea__start -->
        <div class="breadcrumbarea aos-init aos-animate" data-aos="fade-up" style="background: url(img/about/about__bg__1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12" data-aos="fade-up" data-aos-duration="1500">
                        <div class="breadcrumbarea__content__wraper">
                            <div class="breadcrumbarea__title">
                                <h2 class="heading"> Details </h2>
                            </div>
                            <div class="breadcrumbarea__inner">
                                <ul>
                                    <li><a href="/index">Home</a></li>
                                    <li>// </li>
                                    <li><a href="/about">About Us</a></li>
                                    <li>// </li>
                                    <li> Details </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- breadcrumbarea__end -->

    <!-- all__project start -->
        <div class="project__details sp_top_140 sp_bottom_140">
            <div class="container">
                <div class="project__details__bottom__border">
                <div class="row">

                    <div class="col-xl-12 col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="project__details__wraper">

                            <div class="projects__tap__wrapper" data-aos="fade-up" data-aos-duration="1500">
                                <div class="tab-content tab__content__wrapper" id="myTabContent">
            
                                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                                        <div class="projects__img">
                                            <img src="img/project/project__11.png" alt="">
                                        </div>
                                    </div>
                
                                    <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                                        <div class="projects__img">
                                            <img src="img/project/project__12.png" alt="">
                                        </div>
                
                                    </div>
                
                                    <div class="tab-pane fade" id="projects__three" role="tabpanel" aria-labelledby="projects__three">
                                        <div class="projects__img">
                                            <img src="img/project/project__13.png" alt="">
                                        </div>
                                    </div>
                
                
                                </div> 
                                <div class="row">
                                    <div class="col-xl-12">
                                        <ul class="nav  projects__nav__wrap" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a href="#" class="projects__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one"><img src="img/project/project__11.png" alt="projectsimg"></a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a href="#" class="projects__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two"><img src="img/project/project__12.png" alt="projectsimg"></a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a href="#" class="projects__tab__link" data-bs-toggle="tab" data-bs-target="#projects__three"><img src="img/project/project__13.png" alt="projectsimg"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <div class="service__details__heading" data-aos="fade-up" data-aos-duration="1500">
                                <h4>Our Company</h4>
                            </div>
                            <div class="service__details__text" data-aos="fade-up" data-aos-duration="1500">
                                <p>Our organization was founded on the fundamental premise that investors should manage their wealth. As part of our investment management approach, we ensure that every client has a clear and accurate understanding of what they can expect from us from the outset. In light of this, prior to enrolling in our services, we make certain that you have, in conjunction with your intermediate adviser, developed a specific investment target. </p>
                                <p>This will serve as the framework around which we will design our approach to asset management; nevertheless, we realize that your investment demands may alter over time owing to modifications in your particular circumstances. You should immediately notify your advisor of any changes in your goals and objectives and review your portfolio to ensure it is well-balanced and ready to adapt. We believe that each investor's investment profile should be dynamic and appropriately tailored to meet the unique needs of each individual consumer.</p>
                                <p>Compared to other corporations, we stand out in the asset management industry. We have, over the course of many years, created and manufactured a large assortment of services that advisers are able to provide to their varied customers. These services encompass a wide range of investment portfolios, including dynamic model portfolios and revolutionary new product portfolios. We have designed and implemented many services because we don't believe in a "one size fits all" approach.</p>
                                <p>Because of the broad knowledge and rich legacy that TD ICAV possesses, we are able to provide full assistance to our clients in all aspects of their financial well-being. We are enthusiastic about our job, and we use this excitement to provide support to our customers.</p>
                                <p>Our senior management team, responsible for overseeing TD ICAV, comprises accomplished individuals in the fields of operations and investments. All investors, irrespective of their wealth, should have access to disclosed, diversified, and actively managed investment portfolios, according to these experts. They believe that this should be the case. We have painstakingly constructed and tailored our entire investment portfolio service to meet our clients' two most important financial goals. These goals are to maximize returns and minimize investments.</p>
                        
                            </div>
                            <div class="project__details__challenges" data-aos="fade-up" data-aos-duration="1500">
                                <div class="project__details__challenges__heading">
                                    <h6>Who We Are</h6>
                                </div>                                
                                <p>We are a wealth management company that provides a wide range of asset management services that are not only cutting-edge but also the most inventive in the industry. We enlist financial counselors and intermediaries to provide these services to both institutions and individual customers. From our Ireland headquarters, we provide onshore and offshore investment management services to customers all over the world. Our products and services are available to customers all around the world.</p>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>
            </div>
        </div>
         <!-- all__project end -->


@endsection