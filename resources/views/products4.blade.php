@extends('layouts.master')
@section('content')
<title>Products</title>

        <!-- breadcrumbarea__start -->
        <div class="breadcrumbarea" style="background: url(img/about/about__bg__1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12" data-aos="fade-up" data-aos-duration="1500">
                        <div class="breadcrumbarea__content__wraper">
                            <div class="breadcrumbarea__title">
                                <h2 class="heading">Product Details</h2>
                            </div>
                            <div class="breadcrumbarea__inner">
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li>// </li>
                                    <li> Commodities </li>
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
                        <div class="service__details__sidebar sidebar">
                            <div class="sidebar__widget" data-aos="fade-up" data-aos-duration="1500">
                                 
                                    <div class="sidebar__search">
                                        <form action="#" style="position: relative;">
                                            <input class="sidebar__common__input" type="text" placeholder="Search Here...">
                                            <div class="sidebar__search__button">
                                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4 13.372L17.91 16.864C17.97 16.924 18 17.002 18 17.098C18 17.194 17.97 17.272 17.91 17.332L16.758 18.484C16.698 18.544 16.62 18.574 16.524 18.574C16.428 18.574 16.35 18.544 16.29 18.484L15.966 18.142L15.804 17.998C15.72 17.926 15.672 17.884 15.66 17.872L12.816 15.028C12.756 14.956 12.672 14.92 12.564 14.92C12.468 14.908 12.384 14.932 12.312 14.992C11.664 15.448 10.962 15.802 10.206 16.054C9.426 16.306 8.628 16.432 7.812 16.432C6.396 16.432 5.082 16.078 3.87 15.37C2.694 14.674 1.758 13.738 1.062 12.562C0.354 11.35 0 10.036 0 8.62C0 7.204 0.354 5.89 1.062 4.678C1.758 3.502 2.694 2.566 3.87 1.87C5.082 1.162 6.396 0.807999 7.812 0.807999C9.228 0.807999 10.536 1.162 11.736 1.87C12.912 2.566 13.848 3.502 14.544 4.678C15.252 5.89 15.606 7.204 15.606 8.62C15.606 10.156 15.192 11.566 14.364 12.85C14.316 12.934 14.292 13.024 14.292 13.12C14.304 13.216 14.34 13.3 14.4 13.372ZM12.528 12.256C12.924 11.74 13.23 11.176 13.446 10.564C13.662 9.94 13.77 9.292 13.77 8.62C13.77 7.54 13.5 6.538 12.96 5.614C12.432 4.702 11.718 3.982 10.818 3.454C9.894 2.914 8.892 2.644 7.812 2.644C6.732 2.644 5.73 2.914 4.806 3.454C3.894 3.982 3.174 4.702 2.646 5.614C2.106 6.538 1.836 7.54 1.836 8.62C1.836 9.7 2.106 10.702 2.646 11.626C3.174 12.538 3.894 13.258 4.806 13.786C5.73 14.326 6.732 14.596 7.812 14.596C8.532 14.596 9.222 14.476 9.882 14.236C10.542 13.984 11.136 13.63 11.664 13.174C11.988 12.898 12.276 12.592 12.528 12.256Z" fill="#1C5C05"/>
                                                    </svg>
                                                    
                                            </div>
                                        </form>
                                    </div>
                            </div>

                            <div class="sidebar__widget" data-aos="fade-up" data-aos-duration="1800">
                                 
                                <div class="sidebar__title">
                                    <h5>All Services:</h5>
                                </div>
                                <div class="sidebar__list">
                                    <ul>
                                        <li>
                                            <a class="sidebar__common__input" href="{{route('products1')}}">Product 1
                                                <i class="icofont-rounded-right"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sidebar__common__input" href="{{route('products2')}}">Cryptocurrencies
                                                <i class="icofont-rounded-right"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sidebar__common__input"  href="{{route('products3')}}">Equities
                                                <i class="icofont-rounded-right"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sidebar__common__input" href="#">Commodities
                                                <i class="icofont-rounded-right"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sidebar__common__input" href="{{route('products5')}}">Financial Planning
                                                <i class="icofont-rounded-right"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sidebar__common__input" href="{{route('products6')}}">Retirement Planning
                                                <i class="icofont-rounded-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                        <div class="service__details__wraper">
                            <div class="service__details__img" data-aos="fade-up" data-aos-duration="1500">
                                <img src="img/service/service__details__1.png" alt="">
                            </div>
                            <div class="service__details__heading" data-aos="fade-up" data-aos-duration="1500">
                                <h4> The Commodities</h4>
                            </div>
                            <div class="service__details__text" data-aos="fade-up" data-aos-duration="1500">
                                <p>The commodities that are used in everyday life, such as gold, silver, and oil, have a tremendous impact on that existence. As a result of their persistent existence in the modern world, several investors have recognized them as a reliable component of a portfolio that represents a comprehensive approach to investment. It is possible that incorporating commodities into your investing plan might be beneficial, depending on the financial goals you have set for yourself and the investments you already have now in your portfolio. We provide a wide range of goods to consumers in the industrial and financial sectors all around the world for their use. As a reliable and competitive business partner, we have earned a reputation for excellence. As our start-up firms grow and evolve into global leaders, it is our obligation to give them with the necessary assistance they require to fulfill their potential. The consistent commitment that we have shown to the development of companies and the following trading procedure has been the driving force behind our success in the commodities market. </p>
                                <p>It is possible to consider investing in commodities through a variety of different channels. The acquisition of varied quantities of tangible basic commodities, such as precious metal bullion, is one of the solutions that can be considered. On top of that, investors have the option of investing through exchange-traded products (ETPs) or futures contracts that directly track a certain commodities index. Because these investments are extremely difficult to understand and highly volatile, they are normally only suggested for investors who have a high level of expertise. There are a number of factors that might cause fluctuations in the pricing of certain commodities. These include supply and demand, inflation, currency rates, and the overall health of the economy. </p>
                                <p>Commodity prices have been considerably affected by the growing demand that has come from the deployment of large global infrastructure efforts in recent years. These initiatives have been implemented in recent years. Because of the rise in the prices of commodities, the equity markets of firms operating in industries that are closely tied to one another have, on the whole, benefited from the situation. </p>
                                <p>Obtaining exposure to commodities may also be accomplished through the use of mutual funds that invest in firms that are also connected to commodities. For instance, a fund that invests in oil and gas would have securities that were issued by companies that undertake activities related to the exploration, processing, storage, and distribution of energy. We will make it possible for you to gain an understanding of the procedure involved in entering the commodities market and beginning trading as soon as possible. Consequently, this will result in the diversification of your investment portfolio, which will allow you to protect your assets and accomplish your financial goals.</p>
                            </div>
                            <div class="service__details__planning" data-aos="fade-up" data-aos-duration="1500">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="service__details__planning__img">
                                            <img src="img/service/service__details__2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="service__details__planning__inner">
                                            <div class="service__details__planning__text">
                                                <p> We work to maximize your returns while simultaneously minimizing the risk that is connected with the investment plan you have chosen or implemented. For the purpose of making well-informed investment decisions, your personal adviser will provide assistance in monitoring commodity indexes and applying the information obtained from this monitoring. </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- service__details__end -->

@endsection