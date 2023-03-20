
@extends('includes.layoutspecial')

@section('main-content')

    <section class="tf-item tf-section">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-box-17">
                    <div id="side-bar" class="side-bar style-3 item">
                        <div class="widget widget-filter style-1 mgbt-0">
                            <div class="header-widget-filter">
                                <h4 class="title-widget">Filter</h4>
                                <a href="#" class="clear-checkbox btn-filter style-2">
                                    Reset
                                </a>
                            </div>
                        </div>     
                        <div class="divider"></div>    
                        <div class="wrap-category">
                            <div class="widget widget-category boder-bt">
                                <div class="title-wg-category">
                                    <h5 class="title-widget style-2">Categories</h5>
                                    <i class="far fa-chevron-up"></i>
                                </div>
                                <div class="content-wg-category">
                                    <form action="#" class="form-checkbox">
                                        <label>
                                            <span>Art</span>
                                            <span class="pst-re">
                                                <input type="checkbox" checked="checked">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>Music</span>
                                            <span class="pst-re">
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>Domain Names</span>
                                            <span class="pst-re">
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>Virtual Worlds</span>
                                            <span class="pst-re">
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>Trading  Cards</span>
                                            <span class="pst-re">
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>Collectibles</span>
                                            <span class="pst-re">
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>Sports</span>
                                            <span class="pst-re">
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>Utility</span>
                                            <span class="pst-re">
                                                <input type="checkbox" checked="checked">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget-category style2 boder-bt">
                                <div class="title-wg-category">
                                    <h5 class="title-widget style-2">File Types</h5>
                                    <i class="far fa-chevron-up"></i>
                                </div>
                                <div class="content-wg-category">
                                    <form action="#" class="form-checkbox">
                                        <label>
                                            <span>Image</span>
                                            <span class="pst-re">
                                                <input type="checkbox" checked="checked">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>Video</span>
                                            <span class="pst-re">
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>Audio</span>
                                            <span class="pst-re">
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget-category boder-bt">
                                <div class="title-wg-category">
                                    <h5 class="title-widget style-2">Currencies</h5>
                                    <i class="far fa-chevron-up"></i>
                                </div>
                                <div class="content-wg-category">
                                    <form action="#" class="form-checkbox">
                                        <label>
                                            <span>BNB</span>
                                            <span class="pst-re">
                                                <input type="checkbox" checked="checked">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>BUSD</span>
                                            <span class="pst-re">
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label><br>
                                        <label>
                                            <span>ETH</span>
                                            <span class="pst-re">
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget-category style3">
                                <div class="title-wg-category">
                                    <h5 class="title-widget style-2">Price Range</h5>
                                </div>
                                <div id="slider-range"></div>
                                <div class="slider-labels flex">
                                    <div class="title">Price:</div>
                                    <div class="caption">
                                        <span id="slider-range-value1"></span>
                                        <span id="slider-range-value2"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-box-83">
                    <div class="flat-tabs items">
                        <ul class="menu-tab">
                            <li class="active"><span>Live Auctions</span></li>
                            <li><span>Today's Picks</span></li>
                            <li><span>Land</span></li>
                            <li><span>Items</span></li>
                        </ul>
                        <div class="content-tab">
                            <div class="content-inner">
                                <div class="option">
                                    <h2 class="title">1,000 Items</h2>
                                    <div class="view">
                                        <ul>
                                            <li class="style1 grid active">
                                                <a href="#">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22 8.52V3.98C22 2.57 21.36 2 19.77 2H15.73C14.14 2 13.5 2.57 13.5 3.98V8.51C13.5 9.93 14.14 10.49 15.73 10.49H19.77C21.36 10.5 22 9.93 22 8.52Z" fill="white"/>
                                                        <path d="M22 19.77V15.73C22 14.14 21.36 13.5 19.77 13.5H15.73C14.14 13.5 13.5 14.14 13.5 15.73V19.77C13.5 21.36 14.14 22 15.73 22H19.77C21.36 22 22 21.36 22 19.77Z" fill="white"/>
                                                        <path d="M10.5 8.52V3.98C10.5 2.57 9.86 2 8.27 2H4.23C2.64 2 2 2.57 2 3.98V8.51C2 9.93 2.64 10.49 4.23 10.49H8.27C9.86 10.5 10.5 9.93 10.5 8.52Z" fill="white"/>
                                                        <path d="M10.5 19.77V15.73C10.5 14.14 9.86 13.5 8.27 13.5H4.23C2.64 13.5 2 14.14 2 15.73V19.77C2 21.36 2.64 22 4.23 22H8.27C9.86 22 10.5 21.36 10.5 19.77Z" fill="white"/>
                                                    </svg>
                                                    <span>Grid</span>
                                                </a>
                                            </li>
                                            <li class="style2 list">
                                                <a href="#">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 8H3C2.59 8 2.25 7.09333 2.25 6C2.25 4.90667 2.59 4 3 4H21C21.41 4 21.75 4.90667 21.75 6C21.75 7.09333 21.41 8 21 8Z" fill="#EBEBEB"/>
                                                        <path d="M21 14H3C2.59 14 2.25 13.0933 2.25 12C2.25 10.9067 2.59 10 3 10H21C21.41 10 21.75 10.9067 21.75 12C21.75 13.0933 21.41 14 21 14Z" fill="#EBEBEB"/>
                                                        <path d="M21 20H3C2.59 20 2.25 19.0933 2.25 18C2.25 16.9067 2.59 16 3 16H21C21.41 16 21.75 16.9067 21.75 18C21.75 19.0933 21.41 20 21 20Z" fill="#EBEBEB"/>
                                                    </svg>
                                                    <span>List</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="sort-by" class="btn-sort-by dropdown">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 7H21" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M6 12H18" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M10 17H14" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                            <a href="#" class="btn-selector nolink">
                                                <span>Low To High</span>
                                            </a>
                                            <ul>
                                                <li><span>Top rate</span></li>
                                                <li><span>Mid rate</span></li>
                                                <li><span>Low rate</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Freddie Carpeter</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-48.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Hamlet Comtemplates...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-34.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Loving Vase 01 by Lanza...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-35.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Triumphant awakening...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-32.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Freddie Carpeter</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-33.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Hamlet Comtemplates...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-52.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Loving Vase 01 by Lanza...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-53.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Triumphant awakening...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-49.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-54.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Freddie Carpeter</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-55.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Hamlet Comtemplates...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-56.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Loving Vase 01 by Lanza...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-50.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Triumphant awakening...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-51.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="content-item2">
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-35.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-49.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-51.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-50.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-56.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>

                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="option">
                                    <h2 class="title">1,000 Items</h2>
                                    <div class="view">
                                        <ul>
                                            <li class="style1 grid active">
                                                <a href="#">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22 8.52V3.98C22 2.57 21.36 2 19.77 2H15.73C14.14 2 13.5 2.57 13.5 3.98V8.51C13.5 9.93 14.14 10.49 15.73 10.49H19.77C21.36 10.5 22 9.93 22 8.52Z" fill="white"/>
                                                        <path d="M22 19.77V15.73C22 14.14 21.36 13.5 19.77 13.5H15.73C14.14 13.5 13.5 14.14 13.5 15.73V19.77C13.5 21.36 14.14 22 15.73 22H19.77C21.36 22 22 21.36 22 19.77Z" fill="white"/>
                                                        <path d="M10.5 8.52V3.98C10.5 2.57 9.86 2 8.27 2H4.23C2.64 2 2 2.57 2 3.98V8.51C2 9.93 2.64 10.49 4.23 10.49H8.27C9.86 10.5 10.5 9.93 10.5 8.52Z" fill="white"/>
                                                        <path d="M10.5 19.77V15.73C10.5 14.14 9.86 13.5 8.27 13.5H4.23C2.64 13.5 2 14.14 2 15.73V19.77C2 21.36 2.64 22 4.23 22H8.27C9.86 22 10.5 21.36 10.5 19.77Z" fill="white"/>
                                                    </svg>
                                                    <span>Grid</span>
                                                </a>
                                            </li>
                                            <li class="style2 list">
                                                <a href="#">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 8H3C2.59 8 2.25 7.09333 2.25 6C2.25 4.90667 2.59 4 3 4H21C21.41 4 21.75 4.90667 21.75 6C21.75 7.09333 21.41 8 21 8Z" fill="#EBEBEB"/>
                                                        <path d="M21 14H3C2.59 14 2.25 13.0933 2.25 12C2.25 10.9067 2.59 10 3 10H21C21.41 10 21.75 10.9067 21.75 12C21.75 13.0933 21.41 14 21 14Z" fill="#EBEBEB"/>
                                                        <path d="M21 20H3C2.59 20 2.25 19.0933 2.25 18C2.25 16.9067 2.59 16 3 16H21C21.41 16 21.75 16.9067 21.75 18C21.75 19.0933 21.41 20 21 20Z" fill="#EBEBEB"/>
                                                    </svg>
                                                    <span>List</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="sort-by2" class="btn-sort-by dropdown">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 7H21" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M6 12H18" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M10 17H14" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                            <a href="#" class="btn-selector nolink">
                                                <span>Low To High</span>
                                            </a>
                                            <ul>
                                                <li><span>Top rate</span></li>
                                                <li><span>Mid rate</span></li>
                                                <li><span>Low rate</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Freddie Carpeter</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-48.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Hamlet Comtemplates...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-34.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Loving Vase 01 by Lanza...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-35.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Triumphant awakening...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-32.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Freddie Carpeter</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-33.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Hamlet Comtemplates...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-52.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Loving Vase 01 by Lanza...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-53.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Triumphant awakening...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-49.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Freddie Carpeter</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-48.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Hamlet Comtemplates...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-34.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Loving Vase 01 by Lanza...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-35.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Triumphant awakening...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-32.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Freddie Carpeter</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-33.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Hamlet Comtemplates...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-52.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Loving Vase 01 by Lanza...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-53.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Triumphant awakening...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-49.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                                <div class="content-item2">
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-49.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-51.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-50.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-56.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-35.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-50.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-49.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-51.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-50.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-56.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-35.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-50.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="option">
                                    <h2 class="title">1,000 Items</h2>
                                    <div class="view">
                                        <ul>
                                            <li class="style1 grid active">
                                                <a href="#">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22 8.52V3.98C22 2.57 21.36 2 19.77 2H15.73C14.14 2 13.5 2.57 13.5 3.98V8.51C13.5 9.93 14.14 10.49 15.73 10.49H19.77C21.36 10.5 22 9.93 22 8.52Z" fill="white"/>
                                                        <path d="M22 19.77V15.73C22 14.14 21.36 13.5 19.77 13.5H15.73C14.14 13.5 13.5 14.14 13.5 15.73V19.77C13.5 21.36 14.14 22 15.73 22H19.77C21.36 22 22 21.36 22 19.77Z" fill="white"/>
                                                        <path d="M10.5 8.52V3.98C10.5 2.57 9.86 2 8.27 2H4.23C2.64 2 2 2.57 2 3.98V8.51C2 9.93 2.64 10.49 4.23 10.49H8.27C9.86 10.5 10.5 9.93 10.5 8.52Z" fill="white"/>
                                                        <path d="M10.5 19.77V15.73C10.5 14.14 9.86 13.5 8.27 13.5H4.23C2.64 13.5 2 14.14 2 15.73V19.77C2 21.36 2.64 22 4.23 22H8.27C9.86 22 10.5 21.36 10.5 19.77Z" fill="white"/>
                                                    </svg>
                                                    <span>Grid</span>
                                                </a>
                                            </li>
                                            <li class="style2 list">
                                                <a href="#">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 8H3C2.59 8 2.25 7.09333 2.25 6C2.25 4.90667 2.59 4 3 4H21C21.41 4 21.75 4.90667 21.75 6C21.75 7.09333 21.41 8 21 8Z" fill="#EBEBEB"/>
                                                        <path d="M21 14H3C2.59 14 2.25 13.0933 2.25 12C2.25 10.9067 2.59 10 3 10H21C21.41 10 21.75 10.9067 21.75 12C21.75 13.0933 21.41 14 21 14Z" fill="#EBEBEB"/>
                                                        <path d="M21 20H3C2.59 20 2.25 19.0933 2.25 18C2.25 16.9067 2.59 16 3 16H21C21.41 16 21.75 16.9067 21.75 18C21.75 19.0933 21.41 20 21 20Z" fill="#EBEBEB"/>
                                                    </svg>
                                                    <span>List</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="sort-by3" class="btn-sort-by dropdown">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 7H21" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M6 12H18" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M10 17H14" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                            <a href="#" class="btn-selector nolink">
                                                <span>Low To High</span>
                                            </a>
                                            <ul>
                                                <li><span>Top rate</span></li>
                                                <li><span>Mid rate</span></li>
                                                <li><span>Low rate</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-32.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Freddie Carpeter</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-33.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Hamlet Comtemplates...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-52.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Loving Vase 01 by Lanza...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-53.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Triumphant awakening...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-49.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-32.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Freddie Carpeter</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-33.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Hamlet Comtemplates...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-52.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Loving Vase 01 by Lanza...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-53.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Triumphant awakening...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-49.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                                <div class="content-item2">
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-50.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-56.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-35.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-49.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-51.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-50.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-56.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-35.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-49.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-51.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="option">
                                    <h2 class="title">1,000 Items</h2>
                                    <div class="view">
                                        <ul>
                                            <li class="style1 grid active">
                                                <a href="#">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22 8.52V3.98C22 2.57 21.36 2 19.77 2H15.73C14.14 2 13.5 2.57 13.5 3.98V8.51C13.5 9.93 14.14 10.49 15.73 10.49H19.77C21.36 10.5 22 9.93 22 8.52Z" fill="white"/>
                                                        <path d="M22 19.77V15.73C22 14.14 21.36 13.5 19.77 13.5H15.73C14.14 13.5 13.5 14.14 13.5 15.73V19.77C13.5 21.36 14.14 22 15.73 22H19.77C21.36 22 22 21.36 22 19.77Z" fill="white"/>
                                                        <path d="M10.5 8.52V3.98C10.5 2.57 9.86 2 8.27 2H4.23C2.64 2 2 2.57 2 3.98V8.51C2 9.93 2.64 10.49 4.23 10.49H8.27C9.86 10.5 10.5 9.93 10.5 8.52Z" fill="white"/>
                                                        <path d="M10.5 19.77V15.73C10.5 14.14 9.86 13.5 8.27 13.5H4.23C2.64 13.5 2 14.14 2 15.73V19.77C2 21.36 2.64 22 4.23 22H8.27C9.86 22 10.5 21.36 10.5 19.77Z" fill="white"/>
                                                    </svg>
                                                    <span>Grid</span>
                                                </a>
                                            </li>
                                            <li class="style2 list">
                                                <a href="#">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 8H3C2.59 8 2.25 7.09333 2.25 6C2.25 4.90667 2.59 4 3 4H21C21.41 4 21.75 4.90667 21.75 6C21.75 7.09333 21.41 8 21 8Z" fill="#EBEBEB"/>
                                                        <path d="M21 14H3C2.59 14 2.25 13.0933 2.25 12C2.25 10.9067 2.59 10 3 10H21C21.41 10 21.75 10.9067 21.75 12C21.75 13.0933 21.41 14 21 14Z" fill="#EBEBEB"/>
                                                        <path d="M21 20H3C2.59 20 2.25 19.0933 2.25 18C2.25 16.9067 2.59 16 3 16H21C21.41 16 21.75 16.9067 21.75 18C21.75 19.0933 21.41 20 21 20Z" fill="#EBEBEB"/>
                                                    </svg>
                                                    <span>List</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="sort-by4" class="btn-sort-by dropdown">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 7H21" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M6 12H18" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M10 17H14" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                            <a href="#" class="btn-selector nolink">
                                                <span>Low To High</span>
                                            </a>
                                            <ul>
                                                <li><span>Top rate</span></li>
                                                <li><span>Mid rate</span></li>
                                                <li><span>Low rate</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-35.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Triumphant awakening...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-36.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-32.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Flame Dress' by Balmain...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="meta-info style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Creator</span>
                                                        <h6> <a href="/authors-v2">Freddie Carpeter</a> </h6>
                                                    </div>
                                                </div>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-33.jpg') }}" alt="Axies"></a>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Hamlet Comtemplates...</a></h5>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <span>Current Bid</span>
                                                        <span class="pricing">4.89 ETH</span>
                                                    </div>
                                                </div>
                                                <div class="tags">bsc</div>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                                <div class="content-item2">
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-51.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/author_rank.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-50.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-56.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-27.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-item">
                                        <div class="sc-card-product menu_card style-h7">
                                            <div class="wrap-media">
                                                <div class="card-media">
                                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-47.jpg') }}" alt="Axies"></a>                                                                                                            
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <p>Item Name</p>
                                                <h4><a href="/item-details-v1">"Flame Dress' by Balmain</a></h4>
                                            </div>
                                            <div class="meta-info style">
                                                <p>Creator</p>
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-10.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <h4> <a href="/authors-v2">Tyler Covington</a> </h4>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="countdown">
                                                <p>Countdown</p>
                                                <div class="featured-countdown">
                                                    <span class="slogan"></span>
                                                    <span class="js-countdown" data-timer="516400" data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                            <div class="wrap-hear">
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="wrap-tag">
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="info">
                                                        <p>Current Bid</p>
                                                        <p class="pricing">4.89 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-auction item center">
                        <a href="#" class="sc-button loadmore fl-button pri-3"><span>Load More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

