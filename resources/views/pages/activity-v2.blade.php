@extends('includes.layout')

@section('main-content')
    @include('includes.pagetitle')
    <section class="tf-activity tf-section">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-8 col-12">
                    <div class="box-activity">
                        <div class="sc-card-activity style-2">
                            <div class="content">
                                <div class="media">
                                    <img src="{{ asset('images/box-item/imgactivity2.jpg') }} " alt="">
                                </div>
                                <div class="infor">
                                    <h4><a href="/item-details-v1"> Pinky Ocean</a></h4>
                                    <div class="status">following <a class="author" href="/authors-v2">Gayle Hicks</a></div>
                                    <div class="time">19th June, 2021</div>
                                </div>
                            </div>
                        </div>

                        <div class="sc-card-activity style-2">
                            <div class="content">
                                <div class="media">
                                    <img src="{{ asset('images/box-item/image-box-21.jpg') }} " alt="">
                                </div>
                                <div class="infor">
                                    <h4><a href="/item-details-v1">Deep Sea Plan</a> </h4>
                                    <div class="status">listed by <a class="author" href="/authors-v2">Trista Francis</a></div>
                                    <div class="status"> for <span class="quote">0.049 ETH </span> </div>
                                    <div class="time">10 minutes ago</div>
                                </div>
                            </div>
                        </div>

                        <div class="sc-card-activity style-2">
                            <div class="content">
                                <div class="media">
                                    <img src="{{ asset('images/box-item/image-box-6.jpg') }} " alt="">
                                </div>
                                <div class="infor">
                                    <h4><a href="/item-details-v1"> Rainbow Style</a></h4>
                                    <div class="status">following <a class="author" href="/authors-v2">Gayle Hicks</a></div>
                                    <div class="time">19th June, 2021</div>
                                </div>
                            </div>
                        </div>

                        <div class="sc-card-activity style-2">
                            <div class="content">
                                <div class="media">
                                    <img src="{{ asset('images/box-item/card-item-7.jpg') }} " alt="">
                                </div>
                                <div class="infor">
                                    <h4><a href="/item-details-v1">This is Our Story</a> </h4>
                                    <div class="status">listed by <a class="author" href="/authors-v2">Trista Francis</a></div>
                                    <div class="status"> for <span class="quote">0.049 ETH </span> </div>
                                    <div class="time">10 minutes ago</div>
                                </div>
                            </div>
                        </div>

                        <div class="sc-card-activity style-2">
                            <div class="content">
                                <div class="media">
                                    <img src="{{ asset('images/box-item/card-item-9.jpg') }} " alt="">
                                </div>
                                <div class="infor">
                                    <h4><a href="/item-details-v1"> I Believe I Can Fly</a></h4>
                                    <div class="status">following <a class="author" href="/authors-v2">Gayle Hicks</a></div>
                                    <div class="time">19th June, 2021</div>
                                </div>
                            </div>
                        </div>

                        <div class="sc-card-activity style-2">
                            <div class="content">
                                <div class="media">
                                    <img src="{{ asset('images/box-item/image-box-11.jpg') }} " alt="">
                                </div>
                                <div class="infor">
                                    <h4><a href="/item-details-v1">Cute Astronout</a> </h4>
                                    <div class="status">listed by <a class="author" href="/authors-v2">Trista Francis</a></div>
                                    <div class="status"> for <span class="quote">0.049 ETH </span> </div>
                                    <div class="time">05 minutes ago</div>
                                </div>
                            </div>
                        </div>

                        <div class="sc-card-activity style-2">
                            <div class="content">
                                <div class="media">
                                    <img src="{{ asset('images/box-item/card-item-4.jpg') }} " alt="">
                                </div>
                                <div class="infor">
                                    <h4><a href="/item-details-v1">USA Wordmation</a> </h4>
                                    <div class="status">listed by <a class="author" href="/authors-v2">Trista Francis</a></div>
                                    <div class="status"> for <span class="quote">0.049 ETH </span> </div>
                                    <div class="time">10 minutes ago</div>
                                </div>
                            </div>
                        </div>

                        <div class="sc-card-activity style-2 style-3">
                            <div class="content">
                                <div class="media">
                                    <img src="{{ asset('images/box-item/card-item-3.3.jpg') }} " alt="">
                                </div>
                                <div class="infor">
                                    <h4><a href="/item-details-v1"> Running Puppets</a></h4>
                                    <div class="status">transferred from <a class="author" href="/authors-v2">Gayle Hicks</a></div>
                                    <div class="status style-2">to <a class="author" href="/authors-v2">Trista Francis</a></div>
                                    <div class="time">19th June, 2021</div>
                                </div>
                            </div>
                        </div>

                    </div> <!--/.box-activity-->
                    
                </div>
                <div class="col-xl-4 col-lg-3 col-md-4 col-12">

                    <div id="side-bar" class="side-bar style-2">

                        <div class="widget widget-search mgbt-24">
                            <form action="#">
                                <input class="style-2" type="text" placeholder="Enter your word art" required>
                                <button class="style-2"><i class="icon-fl-search-filled"></i></button>
                            </form>
                        </div>

                        <div class="widget widget-filter style-1 mgbt-0">
                            <div class="header-widget-filter">
                                <h3 class="title-widget">Filter</h3>
                                <a href="#" class="clear-checkbox btn-filter style-2">
                                    Clear All
                                </a>
                            </div>
                            <form action="#" class="form-checkbox">
                                <label>Listings
                                    <input type="checkbox" checked="checked">
                                    <span class="btn-checkbox"></span>
                                </label><br>
            
                                <label>Purchases
                                    <input type="checkbox" checked="checked">
                                    <span class="btn-checkbox"></span>
                                </label><br>
            
                                <label>Sales
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label><br>
            
                                <label>Transfers
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label><br>
            
                                <label>Bids
                                    <input type="checkbox" checked="checked">
                                    <span class="btn-checkbox"></span>
                                </label><br>
            
                                <label>Likes
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label><br>
            
                                <label class="mgbt-none">Followings
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label><br>
                            </form>
                        </div>

                    </div><!--/.side-bar-->

                </div>
            </div>
        </div>
    </section>
@endsection 