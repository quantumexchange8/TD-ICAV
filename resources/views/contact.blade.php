@extends('layouts.master')
@section('title', 'Contact Us')
@section('content')

<!-- breadcrumbarea__start -->
<div class="breadcrumbarea aos-init aos-animate" data-aos="fade-up" style="background: url(img/about/about__bg__1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" data-aos="fade-up" data-aos-duration="1500">
                <div class="breadcrumbarea__content__wraper">
                    <div class="breadcrumbarea__title">
                        <h2 class="heading">Contact us</h2>
                    </div>
                    <div class="breadcrumbarea__inner">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>// </li>
                            <li> Contact Us </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbarea__end -->

<!-- contact__section__start -->
<div class="contact sp_top_140 sp_bottom_80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" data-aos="fade-up" data-aos-duration="1500">
                <div class="section__title text-center sp_bottom_80">
                    <div class="section__title__button">
                        <span class="text__gradient ">Contact</span>
                    </div>
                    <div class="section__title__heading contact__heading text__gradient">
                        <h3>Consulting support is just a Call or Email away.</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1500">
                <div class="">
                    <p>Please fill out the contact form below and we will connect you with an TD ICAV team member.</p>
                </div>
                <div class="contact__input__wrapper contact__grident__bg">
                    <form id="contact-form" class="contact-form" action="{{ url('mail') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact__input">
                                    <input class="contact__common__input" type="text" name="fname" id="fname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact__input">
                                    <input class="contact__common__input" type="text" name="lname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact__input">
                                    <input class="contact__common__input" type="text" name="company" placeholder="Company / Institution ">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact__input">
                                    <input class="contact__common__input" type="text" name="title" placeholder="Title / Position ">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact__input">
                                    <input class="contact__common__input" type="text" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact__input">
                                    <input class="contact__common__input" type="text" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <textarea class="contact__common__input" name="message" placeholder="Write Your Inquiry Here..." cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact__button">
                                    <button type="submit" value="submit" class="default__button" name="submit" >SEND MESSAGE</button>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 contact__info__right" data-aos="fade-up" data-aos-duration="1500">
                <div class="contact__info">
                    <div class="contact__single__item" data-aos="fade-up" data-aos-duration="1500">
                        <a href = "https://registers.centralbank.ie/FundRegisterDataPage.aspx?fundReferenceNumber=C417775&register=50" target="blank">
                            <div class="contact__icon">
                                <span>
                                    <svg width="30" height="30" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-gavel">
                                        <defs>
                                            <linearGradient id="gavel-gradient" x1="0" y1="0" x2="25" y2="25" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#00229E" />
                                                <stop offset="0.479167" stop-color="#6E1299" />
                                                <stop offset="1" stop-color="#FE0094" />
                                            </linearGradient>
                                        </defs>
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" stroke="url(#gavel-gradient)" />
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" stroke="url(#gavel-gradient)" />
                                        <path d="M11 14h1v4h1" stroke="url(#gavel-gradient)" />
                                        <path d="M12 11h.01" stroke="url(#gavel-gradient)" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                        <div class="contact__text">
                            <a href = "https://registers.centralbank.ie/FundRegisterDataPage.aspx?fundReferenceNumber=C417775&register=50" target="blank">
                            <h6>Registry Code:</h6>
                            <p>C417775</p>
                            </a>
                        </div>
                    </div>

                    <div class="contact__single__item" data-aos="fade-up" data-aos-duration="1500">
                        <a href = "https://lei-ireland.ie/detailed-information/42889800/254900G6NYFVOQQSVT12/TD ICAV/" target="blank">
                            <div class="contact__icon">
                                <span>
                                    <svg width="30" height="30" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-gavel">
                                        <path d="M13 10l7.383 7.418c.823 .82 .823 2.148 0 2.967a2.11 2.11 0 0 1 -2.976 0l-7.407 -7.385" stroke="url(#paint0_linear_1501_3784)" />
                                        <path d="M6 9l4 4" stroke="url(#paint0_linear_1501_3784)" />
                                        <path d="M13 10l-4 -4" stroke="url(#paint0_linear_1501_3784)" />
                                        <path d="M3 21h7" stroke="url(#paint0_linear_1501_3784)" />
                                        <path d="M6.793 15.793l-3.586 -3.586a1 1 0 0 1 0 -1.414l2.293 -2.293l.5 .5l3 -3l-.5 -.5l2.293 -2.293a1 1 0 0 1 1.414 0l3.586 3.586a1 1 0 0 1 0 1.414l-2.293 2.293l-.5 -.5l-3 3l.5 .5l-2.293 2.293a1 1 0 0 1 -1.414 0z" stroke="url(#paint1_linear_1501_3784)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1501_3784" x1="0" y1="14.6552" x2="25" y2="14.6552" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#00229E" />
                                                <stop offset="0.479167" stop-color="#6E1299" />
                                                <stop offset="1" stop-color="#FE0094" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1501_3784" x1="10.3438" y1="14.9264" x2="19.7108" y2="14.9264" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#00229E" />
                                                <stop offset="0.479167" stop-color="#6E1299" />
                                                <stop offset="1" stop-color="#FE0094" />
                                            </linearGradient>
                                            <clipPath id="clip0_1501_3784">
                                                <rect width="25" height="25" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>  
                                </span>
                            </div>
                        </a>
                        <div class="contact__text">
                            <a href = "https://lei-ireland.ie/detailed-information/42889800/254900G6NYFVOQQSVT12/TD ICAV/" target="blank">
                            <h6>Legal Entity Identifier (LEI):</h6>
                            <p>254900G6NYFVOQQSVT12</p>
                            </a>
                        </div>
                    </div>

                    <div class="contact__single__item" data-aos="fade-up" data-aos-duration="1500">
                        <div class="contact__icon">
                            <span>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1501_3772)">
                                    <path d="M19.7592 15.4866C19.2474 14.9537 18.6301 14.6688 17.9758 14.6688C17.3268 14.6688 16.7042 14.9484 16.1713 15.4813L14.5039 17.1434C14.3667 17.0695 14.2295 17.0009 14.0976 16.9323C13.9077 16.8374 13.7283 16.7477 13.5753 16.6527C12.0134 15.6607 10.5941 14.368 9.23277 12.6954C8.57321 11.8617 8.13 11.1599 7.80813 10.4476C8.2408 10.0519 8.64181 9.64033 9.03226 9.24459C9.18 9.09685 9.32774 8.94384 9.47548 8.7961C10.5835 7.68805 10.5835 6.25286 9.47548 5.14482L8.03502 3.70435C7.87145 3.54078 7.70261 3.37194 7.54431 3.20309C7.22773 2.87596 6.89531 2.53826 6.55235 2.22168C6.04053 1.71514 5.42847 1.44604 4.78474 1.44604C4.14102 1.44604 3.5184 1.71514 2.99076 2.22168C2.98549 2.22696 2.98549 2.22696 2.98021 2.23223L1.18623 4.04204C0.510844 4.71743 0.125666 5.54055 0.0412429 6.49558C-0.0853912 8.03629 0.368381 9.47148 0.716625 10.4107C1.5714 12.7165 2.8483 14.8534 4.75309 17.1434C7.06416 19.903 9.84483 22.0821 13.0212 23.6176C14.2348 24.1927 15.8547 24.8734 17.6645 24.9894C17.7753 24.9947 17.8914 25 17.9969 25C19.2158 25 20.2394 24.562 21.0414 23.6914C21.0467 23.6809 21.0572 23.6756 21.0625 23.6651C21.3369 23.3326 21.6535 23.0319 21.9859 22.71C22.2128 22.4937 22.4449 22.2668 22.6718 22.0294C23.1942 21.4859 23.4685 20.8527 23.4685 20.2037C23.4685 19.5494 23.1889 18.9216 22.656 18.3939L19.7592 15.4866ZM21.6482 21.0427C21.6429 21.0427 21.6429 21.0479 21.6482 21.0427C21.4424 21.2643 21.2313 21.4648 21.0045 21.6864C20.6615 22.0135 20.3133 22.3565 19.9861 22.7417C19.4532 23.3115 18.8253 23.5806 18.0022 23.5806C17.923 23.5806 17.8386 23.5806 17.7595 23.5754C16.1924 23.4751 14.7361 22.863 13.6439 22.3407C10.6574 20.8949 8.03502 18.8424 5.85586 16.2411C4.0566 14.0725 2.85358 12.0675 2.05684 9.9147C1.56613 8.60087 1.38673 7.57725 1.46588 6.61166C1.51864 5.99432 1.75608 5.48251 2.19402 5.04456L3.99328 3.2453C4.25183 3.00259 4.5262 2.87068 4.7953 2.87068C5.12771 2.87068 5.39681 3.07118 5.56566 3.24003C5.57093 3.2453 5.57621 3.25058 5.58148 3.25586C5.90335 3.55661 6.20938 3.86792 6.53124 4.20034C6.69481 4.36918 6.86365 4.53803 7.0325 4.71215L8.47296 6.15261C9.03226 6.71191 9.03226 7.229 8.47296 7.7883C8.31995 7.94132 8.17221 8.09434 8.01919 8.24207C7.57597 8.69585 7.15386 9.11796 6.69481 9.52952C6.68426 9.54007 6.6737 9.54535 6.66843 9.5559C6.21465 10.0097 6.29908 10.4529 6.39405 10.7537C6.39933 10.7695 6.40461 10.7853 6.40988 10.8011C6.78451 11.7087 7.31215 12.5635 8.11417 13.5818L8.11944 13.5871C9.57574 15.3811 11.1112 16.7793 12.8049 17.8504C13.0212 17.9876 13.2428 18.0984 13.4539 18.204C13.6439 18.2989 13.8233 18.3886 13.9763 18.4836C13.9974 18.4942 14.0185 18.51 14.0396 18.5205C14.219 18.6102 14.3878 18.6525 14.562 18.6525C14.9999 18.6525 15.2743 18.3781 15.364 18.2884L17.1685 16.4838C17.3479 16.3044 17.6328 16.0881 17.9652 16.0881C18.2924 16.0881 18.5615 16.2939 18.725 16.4733C18.7303 16.4786 18.7303 16.4786 18.7356 16.4838L21.6429 19.3912C22.1864 19.9293 22.1864 20.4834 21.6482 21.0427Z" fill="url(#paint0_linear_1501_3772)"/>
                                    <path d="M13.5121 5.94676C14.8945 6.17892 16.1503 6.83319 17.1528 7.83571C18.1554 8.83823 18.8044 10.094 19.0418 11.4764C19.0998 11.8247 19.4006 12.0674 19.7436 12.0674C19.7858 12.0674 19.8227 12.0621 19.8649 12.0569C20.2554 11.9935 20.5139 11.6242 20.4506 11.2337C20.1657 9.5611 19.3742 8.03622 18.1659 6.82792C16.9576 5.61962 15.4327 4.82815 13.7601 4.54323C13.3696 4.47991 13.0056 4.73846 12.937 5.12363C12.8684 5.50881 13.1217 5.88344 13.5121 5.94676Z" fill="url(#paint1_linear_1501_3772)"/>
                                    <path d="M24.9734 11.028C24.5038 8.27374 23.2058 5.76744 21.2114 3.77295C19.2169 1.77846 16.7106 0.480461 13.9563 0.0108597C13.5711 -0.0577338 13.207 0.206087 13.1384 0.591266C13.0751 0.981721 13.3337 1.34579 13.7241 1.41439C16.1829 1.83123 18.4254 2.99731 20.2088 4.77547C21.9923 6.5589 23.1531 8.80138 23.5699 11.2602C23.628 11.6084 23.9287 11.8511 24.2717 11.8511C24.3139 11.8511 24.3508 11.8459 24.393 11.8406C24.7782 11.7826 25.042 11.4132 24.9734 11.028Z" fill="url(#paint2_linear_1501_3772)"/>
                                    </g>
                                    <defs>
                                    <linearGradient id="paint0_linear_1501_3772" x1="0.0195313" y1="15.2535" x2="23.4685" y2="15.2535" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00229E"/>
                                    <stop offset="0.479167" stop-color="#6E1299"/>
                                    <stop offset="1" stop-color="#FE0094"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_1501_3772" x1="12.9258" y1="8.95" x2="20.4601" y2="8.95" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00229E"/>
                                    <stop offset="0.479167" stop-color="#6E1299"/>
                                    <stop offset="1" stop-color="#FE0094"/>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_1501_3772" x1="13.1289" y1="6.94722" x2="24.9843" y2="6.94722" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00229E"/>
                                    <stop offset="0.479167" stop-color="#6E1299"/>
                                    <stop offset="1" stop-color="#FE0094"/>
                                    </linearGradient>
                                    <clipPath id="clip0_1501_3772">
                                    <rect width="25" height="25" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                </span>
                        </div>
                        <div class="contact__text">
                            <h6>Call Us:</h6>
                            <p>+353 1525 9775</p>
                        </div>
                    </div>

                    <div class="contact__single__item" data-aos="fade-up" data-aos-duration="1500">
                        <div class="contact__icon">
                            <span><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.9763 3.09698C17.9792 1.09986 15.3239 0 12.4995 0C9.67521 0 7.01983 1.09986 5.02276 3.09698C3.02564 5.09415 1.92578 7.74943 1.92578 10.5737C1.92578 16.2872 7.32804 21.0394 10.2303 23.5924C10.6337 23.9472 10.982 24.2536 11.2594 24.5128C11.6071 24.8375 12.0533 25 12.4995 25C12.9457 25 13.3919 24.8375 13.7396 24.5128C14.0171 24.2536 14.3654 23.9472 14.7687 23.5924C17.671 21.0393 23.0732 16.2872 23.0732 10.5737C23.0732 7.74943 21.9734 5.09415 19.9763 3.09698ZM13.8014 22.4929C13.3892 22.8555 13.0333 23.1686 12.7399 23.4427C12.6051 23.5685 12.3939 23.5686 12.2591 23.4427C11.9656 23.1685 11.6097 22.8554 11.1975 22.4929C8.46901 20.0927 3.39014 15.625 3.39014 10.5738C3.39014 5.55089 7.47652 1.4645 12.4994 1.4645C17.5223 1.4645 21.6087 5.55089 21.6087 10.5738C21.6087 15.625 16.5299 20.0927 13.8014 22.4929Z" fill="url(#paint0_linear_1501_3759)"/>
                                <path d="M12.4996 5.51465C9.93018 5.51465 7.83984 7.60494 7.83984 10.1743C7.83984 12.7437 9.93018 14.834 12.4996 14.834C15.069 14.834 17.1592 12.7437 17.1592 10.1743C17.1592 7.60494 15.069 5.51465 12.4996 5.51465ZM12.4996 13.3695C10.7377 13.3695 9.3043 11.9361 9.3043 10.1743C9.3043 8.41246 10.7377 6.97906 12.4996 6.97906C14.2614 6.97906 15.6948 8.41246 15.6948 10.1743C15.6948 11.9361 14.2614 13.3695 12.4996 13.3695Z" fill="url(#paint1_linear_1501_3759)"/>
                                <defs>
                                <linearGradient id="paint0_linear_1501_3759" x1="1.92578" y1="14.6551" x2="23.0732" y2="14.6551" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#00229E"/>
                                <stop offset="0.479167" stop-color="#6E1299"/>
                                <stop offset="1" stop-color="#FE0094"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_1501_3759" x1="7.83984" y1="10.9777" x2="17.1592" y2="10.9777" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#00229E"/>
                                <stop offset="0.479167" stop-color="#6E1299"/>
                                <stop offset="1" stop-color="#FE0094"/>
                                </linearGradient>
                                </defs>
                                </svg>
                                </span>
                        </div>
                        <div class="contact__text">
                            <h6>Location:</h6>
                            <p>33 Sir John Rogerson's Quay,</p>
                            <p>Dublin, Ireland, D02 XK09</p>
                        </div>
                    </div>
                </div>
                <div class="contact__img" data-aos="fade-up" data-aos-duration="1500">
                    <img src="img/contact/contact.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact__section__end -->

<!-- contact__map -->
<div class="contact__map sp_bottom_140" data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.8425081139467!2d-6.243655723709585!3d53.346075374744295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e92af25460f%3A0x3df35b4e7703eadb!2s33%20Sir%20John%20Rogerson&#39;s%20Quay%2C%20Grand%20Canal%20Dock%2C%20Dublin%2C%20D02%20XK09%2C%20Ireland!5e0!3m2!1sen!2smy!4v1726797984412!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
