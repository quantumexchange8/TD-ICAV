@extends('layouts.master')
@section('content')
<title>Equities</title>

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
                                    <li> Equities </li>
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
                                            <a class="sidebar__common__input"  href="#">Equities
                                                <i class="icofont-rounded-right"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sidebar__common__input" href="{{route('products4')}}">Commodities
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
                                <h4>Equities</h4>
                            </div>
                            <div class="service__details__text" data-aos="fade-up" data-aos-duration="1500">
                                <p>When compared to more secure investments, such as bank accounts and bonds, the performance of equity investments has historically been superior. Equity investments have the potential to be the principal driver of growth in your investment portfolio. Investing in stocks, on the other hand, exposes you to the possibility of losing all or a portion of your wealth. When examining the possibility of investing in stocks and the many different types that are accessible, it is essential to take extreme caution because shares are regarded as the asset class that carries the highest level of risk. It is a well-known fact that direct investments in stocks can be risky due to the fact that they are dependent on the success of a relatively limited number of firms. </p>
                                <p>The reason we carry out our research and perform our due diligence is because of this, and it is also the reason why acquiring stocks through an investment fund that is managed by our firm is substantially safer. This is because we invest in a wide variety of shares from a variety of companies. In order to accomplish the goals of diversification or risk distribution, equity funds often focus their assets on a wide range of nations, regions, sectors, and investing techniques. There are many different types of equity funds, and each one has its own set of features and degree of risk that are exclusive to itself. </p>
                                <p>Growth in capital and dividends are the two components that make up the return on equity investments. Dividend payments, which are normally issued twice a year, are the means by which the earnings of the firm are dispersed. The dividend payout is greater and the firm is more lucrative, thus you are more likely to get dividends from larger, more established companies. This is because the dividend payout itself is larger. Larger corporations are more likely to spend their earnings in order to grow their operations, which means that smaller companies are less likely to pay dividends to their shareholders. Nevertheless, if a less successful firm goes on to attain success, the value of your shares can increase. There is the potential for a profit to be made by selling your shares at a price that is higher than the price that you paid for them. Consequently, this results in the expansion of capital, which is the initial investment.</p>
                                <p>The level of risk that an individual investor is willing to take will determine how much of a fluctuation any structured investment program will experience. A wide range of derivatives and fixed income markets are included in the category of structured products. It is for this reason that structured investment programs are built in such a way as to properly cater to the requirements of the investor</p>
                                <p>Investors who are more risk tolerant will have a bigger exposure to equity and derivatives markets, while investors who are more conservative would have a greater exposure to fixed income markets. Structured products are widely used as an alternative to direct investments or to allocate assets in a portfolio against risk exposure. This is another reason why structured products are so popular.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- service__details__end -->

@endsection