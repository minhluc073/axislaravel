@extends('includes.layout')

@section('main-content')
    @include('includes.pagetitle')
    <section class="tf-activity s1 tf-section">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="sc-card-activity style1">
                        <div class="content">
                            <div class="media">
                                <img src="{{asset ('images/box-item/card-item-10.jpg') }}" alt="Axies">
                            </div>
                            <div class="infor">
                                <h3> <a href="/item-details-v1">Monica Lucas</a></h3>
                                <div class="status">started following <a class="author" href="/authors-v2">Gayle Hicks</a></div>
                                <div class="time">At 2:30 PM on 19th June, 2021</div>
                            </div>
                        </div>
                        <div class="button-active icon icon-1"></div>
                    </div>
                    <div class="sc-card-activity style1">
                        <div class="content">
                            <div class="media">
                                <img src="{{asset ('images/box-item/image-box-10.jpg') }}" alt="Axies">
                            </div>
                            <div class="infor">
                                <h3> <a href="/item-details-v1">Wow! That Brain is Floating</a> </h3>
                                <div class="status"> <span class="quote">10 editions listed </span> by<a class="author" href="/authors-v2">Meowbids</a> for <span class="quote"> 2.50 ETH</span>each</div>
                                <div class="time">At 2:30 PM on 19th June, 2021</div>
                            </div>
                        </div>
                        <div class="button-active icon icon-2"></div>
                    </div>
                    <div class="sc-card-activity style1">
                        <div class="content">
                            <div class="media">
                                <img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies">
                            </div>
                            <div class="infor">
                                <h3> <a href="/item-details-v1">Erotic 35mm and polaroid photography</a> </h3>
                                <div class="status">started following <a class="author" href="/authors-v2">Gayle Hicks</a></div>
                                <div class="time">At 2:30 PM on 19th June, 2021</div>
                            </div>
                        </div>
                        <div class="button-active icon icon-3"></div>
                    </div>
                    <div class="sc-card-activity style1">
                        <div class="content">
                            <div class="media">
                                <img src="{{asset ('images/box-item/image-box-21.jpg') }}" alt="Axies">
                            </div>
                            <div class="infor">
                                <h3> <a href="/item-details-v1">Our Journey Start</a> </h3>
                                <div class="status">started following <a class="author" href="/authors-v2">Gayle Hicks</a></div>
                                <div class="time">At 2:30 PM on 19th June, 2021</div>
                            </div>
                        </div>
                        <div class="button-active icon icon-4"></div>
                    </div>
                    <div class="sc-card-activity style1">
                        <div class="content">
                            <div class="media">
                                <img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies">
                            </div>
                            <div class="infor">
                                <h3> <a href="/item-details-v1">Skrrt Cobain Official</a> </h3>
                                <div class="status">started following <a class="author" href="/authors-v2">Gayle Hicks</a></div>
                                <div class="time">At 2:30 PM on 19th June, 2021</div>
                            </div>
                        </div>
                        <div class="button-active icon icon-5"></div>
                    </div>                          
                    

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <div id="side-bar" class="side-bar style-2">

                        <div class="widget widget-search mgbt-24">
                            <form action="#">
                                <input type="text" placeholder="Enter your word art" required>
                                <button><i class="icon-fl-search-filled"></i></button>
                            </form>
                        </div>

                        <div class="widget widget-filter style-2 mgbt-0">
                            <h3 class="title-widget">Filter</h3>
                            <ul class="box-check">
                                <li><a href="#" class="box-widget-filter"><i class="icon-fl-sort-filled"></i>Listings</a></li>
                                <li><a href="#" class="box-widget-filter"><i class="icon-fl-heart-filled"></i>Like</a></li>
                                <li><a href="#" class="box-widget-filter"><i class="icon-fl-buy"></i>Purchases</a></li>
                                <li><a href="#" class="box-widget-filter"><i class="icon-fl-discount"></i>Sales</a></li>
                                <li><a href="#" class="box-widget-filter"><i class="icon-fl-logout"></i>Transfer</a></li>
                                <li><a href="#" class="box-widget-filter"><i class="icon-fl-star"></i>Burns</a></li>
                                <li><a href="#" class="box-widget-filter"><i class="icon-fl-credit-card"></i>Bids</a></li>
                                <li><a href="#" class="box-widget-filter"><i class="icon-fl-users-filled"></i>Followings</a></li>
                            </ul>
                            <a href="#" class="clear-check btn-filter style-2">
                                Clear All Filters
                            </a>
                        </div>

                    </div><!--/.side-bar-->

                </div>
            </div>
        </div>
    </section>
@endsection 