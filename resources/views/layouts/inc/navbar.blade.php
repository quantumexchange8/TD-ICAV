    <div class="mode_switcher my_switcher">
        <button id="light--to-dark-button" class="light align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon dark__mode" viewBox="0 0 512 512"><path d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon light__mode" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/></svg>

            <span class="light__mode">Light</span>
            <span class="dark__mode">Dark</span>
        </button>
    </div>
    
        <!-- header__start -->
        <header>
            <div class="headerarea headerarea--3 headerarea__display__none header__sticky bg__black">      
                <div class="container desktop__menu__wrapper">
                    <div class="headerarea__main__wrapper headerarea__main__wrapper--3 position-relative">
                        <div class="headerarea__component__wrap">
                            <div class="headerarea__component">
                                <div class="headerarea__logo">
                                <a href="{{route('index')}}"><img src="img/logo/Logo_1.png" alt="Bastun Logo"></a>
                                </div>
                            </div>
                            <div class="headerarea__component">
                                <div class="headerarea__main__menu">
                                    <nav>
                                        <ul>
                                            <li class="headerarea__common__dropdown"><a class="headerarea__has__dropdown" href="{{route('about') }}">ABOUT US<i class="icofont-long-arrow-down"></i></a>
                                                <ul class="headerarea__submenu headerarea__submenu--five--wrap">
                                                    <li><a href="{{route('about')}}">About Us</a></li>
                                                    <li><a href="{{route('departments')}}">Departments</a></li>
                                                    <li><a href="#">Career</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="{{route('products') }}">PRODUCTS </a></li>
                                            
                                            <li class="headerarea__common__dropdown"><a class="headerarea__has__dropdown" href="#">PORTFOLIO<i class="icofont-long-arrow-down"></i></a>
                                                <ul class="headerarea__submenu headerarea__submenu--five--wrap">
                                                    <li><a href="product-details.html">Financial Planning Portfolios</a></li>
                                                    <li><a href="cart.html">The Programs of Advisory </a></li>
                                                    <li><a href="checkout.html">Portfolios that are Personalized </a></li>
                                                    <li><a href="/wishlist.html">Providers of Advisory Services </a></li>
                                                </ul>
                                            </li>
                                        
                                        <li><a href="blog.html">BLOG </a></li>
                                        <li><a href="contact.html">CONTACT </a></li>
                                        
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="headerarea__component">
                                <div class="headerarea__right">
                                    
                                    <div class="headerarea__button">
                                        <a class="default__button btn__white" href="#">GET QUOTE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>

                <div class="mob_menu_wrapper container-fluid">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="offcanvas__header--menu__open ">
                            <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                                <span class="visually-hidden">Offcanvas Menu Open</span>
                            </a>
                        </div>
                        <div class="mobile__log">
                            <div class="mobile__log--title"><a class="mobile__log--link" href="index.html">
                                <img class="mobile__log--img" src="img/logo/Logo_1.png" alt="logo-img">
                            </a></div>
                        </div>

                        <div class="headerarea__component mobile__component__right">
                            <div class="headerarea__right">
                                <div class="headerarea__cart__wraper">
                                    <div class="headerarea__cart__icon">
                                        <a href="#"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 7.67001V6.70001C7.5 4.45001 9.31 2.24001 11.56 2.03001C14.24 1.77001 16.5 3.88001 16.5 6.51001V7.89001" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.0008 22H15.0008C19.0208 22 19.7408 20.39 19.9508 18.43L20.7008 12.43C20.9708 9.99 20.2708 8 16.0008 8H8.0008C3.7308 8 3.0308 9.99 3.3008 12.43L4.0508 18.43C4.2608 20.39 4.9808 22 9.0008 22Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.4945 12H15.5035" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.49451 12H8.50349" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg></a>
                                            <div class="headerarea__cart__border__dot"></div>
                                    </div>

                                    <div class="headerarea__cart__dropdown__wrapper">
                                        <div class="headerarea__cart__dropdown__inner">
                                            <div class="headerarea__cart__single__dropdown">

                                                <div class="headerarea__cart__single__dropdown__img">
                                                    <a href="#">
                                                        <img src="img/cart/cart1.jpg" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="headerarea__cart__single__dropdown__content">

                                                    <a href="shop-product.html">Super Web Directory</a>
                                                    <p>1 x <span class="price">$ 50.00</span></p>

                                                </div>
                                                <div class="headerarea__cart__single__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>

                                            <div class="headerarea__cart__single__dropdown">

                                                <div class="headerarea__cart__single__dropdown__img">
                                                    <a href="#">
                                                        <img src="img/cart/cart2.jpg" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="headerarea__cart__single__dropdown__content">

                                                    <a href="shop-product.html">Nice Web Directory</a>
                                                    <p>1 x <span class="price">$ 80.00</span></p>

                                                </div>
                                                <div class="headerarea__cart__single__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>

                                            <div class="headerarea__cart__single__dropdown">

                                                <div class="headerarea__cart__single__dropdown__img">
                                                    <a href="#">
                                                        <img src="img/cart/cart3.jpg" alt="photo">
                                                    </a>
                                                </div>
                                                <div class="headerarea__cart__single__dropdown__content">

                                                    <a href="shop-product.html">Best Web Directory</a>
                                                    <p>1 x <span class="price">$ 70.00</span></p>

                                                </div>
                                                <div class="headerarea__cart__single__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="headerarea__cart__dropdown__price">Total: <span>$1,100.00</span>
                                        </p>
                                        <div class="headerarea__cart__dropdown__button">
                                            <a href="cart.html" class="default__button btn__blue">VIEW CART</a>
                                            <a href="checkout.html" class="default__button">CHECKOUT</a>
                                        </div>
                                    </div>

                                    

                                </div>
                                <div class="headerarea__button">
                                    <a class="default__button" href="#">QUATE</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </header>
        <!-- header__end -->

            
        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="index.html">
                        <img src="img/logo/Logo_2.png" alt="Logo-img">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>Close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="index.html">Home</a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="#" class="offcanvas__sub_menu_item">Multipages</a>
                                    <ul class="offcanvas__sub_menu"> 
                                        <li class="offcanvas__sub_menu_li"><a href="index.html" class="offcanvas__sub_menu_item">Business Consulting</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-2(marketing-consulting).html" class="offcanvas__sub_menu_item">Marketing Consulting</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-3(corporate-business).html" class="offcanvas__sub_menu_item">Corporate Business</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-4(digital-agency).html" class="offcanvas__sub_menu_item">Digital Agency</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-5(finance-consulting).html" class="offcanvas__sub_menu_item">Finance Consulting</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-6(insurance).html" class="offcanvas__sub_menu_item">Insurance</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-7(human-resorce).html" class="offcanvas__sub_menu_item">Human Resource</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-8(creative-agency).html" class="offcanvas__sub_menu_item">Creative Agency</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-9(ecommerce).html" class="offcanvas__sub_menu_item">eCommerce</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-10(personal-portfolio).html" class="offcanvas__sub_menu_item">Personal Portfolio</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-11(seo-agency).html" class="offcanvas__sub_menu_item">SEO Agency</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-12(creative-portfolio).html" class="offcanvas__sub_menu_item">Creative Portfolio</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-13(event-conference).html" class="offcanvas__sub_menu_item">Event Conference</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-14(sass-app).html" class="offcanvas__sub_menu_item">Sass App</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-15(freelancer).html" class="offcanvas__sub_menu_item">Freelancer</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-16(technology).html" class="offcanvas__sub_menu_item">Technology</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-17(web-agency).html" class="offcanvas__sub_menu_item">Web Agency</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-18(travel-agency).html" class="offcanvas__sub_menu_item">Travel Agency</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-19(international-consulting).html" class="offcanvas__sub_menu_item">International Consulting</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-20(startup).html" class="offcanvas__sub_menu_item">Startup</a></li>
                                    </ul>
                                </li>


                                <li class="offcanvas__sub_menu_li"><a href="#" class="offcanvas__sub_menu_item">Onepage</a>
                                    <ul class="offcanvas__sub_menu"> 
                                        <li class="offcanvas__sub_menu_li"><a href="index-onepage.html" class="offcanvas__sub_menu_item">Business Consulting</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-2(marketing-consulting)-onepage.html" class="offcanvas__sub_menu_item">Marketing Consulting</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-3(corporate-business)-onepage.html" class="offcanvas__sub_menu_item">Corporate Business</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-4(digital-agency)-onepage.html" class="offcanvas__sub_menu_item">Digital Agency</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-5(finance-consulting)-onepage.html" class="offcanvas__sub_menu_item">Finance Consulting</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-6(insurance)-onepage.html" class="offcanvas__sub_menu_item">Insurance</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-7(human-resorce)-onepage.html" class="offcanvas__sub_menu_item">Human Resource</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-8(creative-agency)-onepage.html" class="offcanvas__sub_menu_item">Creative Agency</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-9(ecommerce)-onepage.html" class="offcanvas__sub_menu_item">eCommerce</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-10(personal-portfolio)-onepage.html" class="offcanvas__sub_menu_item">Personal Portfolio</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-11(seo-agency)-onepage.html" class="offcanvas__sub_menu_item">SEO Agency</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-12(creative-portfolio)-onepage.html" class="offcanvas__sub_menu_item">Creative Portfolio</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-13(event-conference)-onepage.html" class="offcanvas__sub_menu_item">Event Conference</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-14(sass-app)-onepage.html" class="offcanvas__sub_menu_item">Sass App</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-15(freelancer)-onepage.html" class="offcanvas__sub_menu_item">Freelancer</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-16(technology)-onepage.html" class="offcanvas__sub_menu_item">Technology</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-17(web-agency)-onepage.html" class="offcanvas__sub_menu_item">Web Agency</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-18(travel-agency)-onepage.html" class="offcanvas__sub_menu_item">Travel Agency</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-19(international-consulting)-onepage.html" class="offcanvas__sub_menu_item">International Consulting</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="home-20(startup).html" class="offcanvas__sub_menu_item">Startup</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Pages</a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="blog.html" class="offcanvas__sub_menu_item">Blog</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="blog-details.html" class="offcanvas__sub_menu_item">Blog Details</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="project.html" class="offcanvas__sub_menu_item">Projects</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="project-details.html" class="offcanvas__sub_menu_item">Project Details</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="service.html" class="offcanvas__sub_menu_item">Service</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="service-details.html" class="offcanvas__sub_menu_item">Service Details</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="service-details.html" class="offcanvas__sub_menu_item">Service Details</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="team.html" class="offcanvas__sub_menu_item">Team</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="team-details.html" class="offcanvas__sub_menu_item">Team Details</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="team-details.html" class="offcanvas__sub_menu_item">Team Details</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="faq.html" class="offcanvas__sub_menu_item">FAQ</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="error.html" class="offcanvas__sub_menu_item">Error 404</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="login.html" class="offcanvas__sub_menu_item">Login</a></li>
                            </ul>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="home-9(ecommerce).html">eCommerce</a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="shop.html" class="offcanvas__sub_menu_item">Shop</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="product-details.html" class="offcanvas__sub_menu_item">Product Details</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="shop-2-column.html" class="offcanvas__sub_menu_item">Shop 2 Column</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="shop-4-column.html" class="offcanvas__sub_menu_item">Shop 4 Column</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="cart.html" class="offcanvas__sub_menu_item">Cart</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="checkout.html" class="offcanvas__sub_menu_item">Checkout</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="wishlist.html" class="offcanvas__sub_menu_item">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="about.html">About</a></li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="contact.html">Contact</a></li>
                    </ul>
                    <div class="offcanvas__account--items">
                        <a class="offcanvas__account--items__btn d-flex align-items-center" href="login.html">
                            <span class="offcanvas__account--items__icon"> 
                                <svg xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg> 
                            </span>
                            <span class="offcanvas__account--items__label">Login / Register</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->