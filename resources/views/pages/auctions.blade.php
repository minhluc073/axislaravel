@extends('includes.layout')

@section('main-content')
    <div class="auctions">
        @include('includes.pagetitle')

        <section class="tf-auction tf-section">
            <div class="themesflat-container">
                <div class="row">
                    <div class="col-12">
                        <div class="top">
                            <h2 class="tf-title-heading style-1 ct">Live Auctions</h2>
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        <div class="tf-soft">
                            <div class="soft-left">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                        
                                        <span class="inner">Category</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter active'>
                                            <span><img src="{{asset ('images/icon/menu.png') }}" alt="Axies" /> All</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter'>
                                            <span><img src="{{asset ('images/icon/rainbow.png') }}" alt="Axies" /> Art</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter'>
                                            <span><img src="{{asset ('images/icon/photo.png') }}" alt="Axies" /> Photography</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter'>
                                            <span><img src="{{asset ('images/icon/itunes.png') }}" alt="Axies" /> Music</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 6V18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> 
                                        <span class="inner">Price range</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter active'>
                                            <span> Price: Low to High</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter'>
                                            <span> Price: High to Low</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.0901 12.2799H6.1801V19.4799C6.1801 21.1599 7.0901 21.4999 8.2001 20.2399L15.7701 11.6399C16.7001 10.5899 16.3101 9.7199 14.9001 9.7199H11.8101V2.5199C11.8101 0.839898 10.9001 0.499897 9.7901 1.7599L2.2201 10.3599C1.3001 11.4199 1.6901 12.2799 3.0901 12.2799Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                        
                                        <span class="inner">Sale type</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter'>
                                            <span>  Timed auction</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter active'>
                                            <span>Fixed price</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter'>
                                            <span> Not for sale</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter'>
                                            <span>Open for offers</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.16992 7.44043L11.9999 12.5504L20.7699 7.47043" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 21.61V12.54" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.92965 2.48028L4.58965 5.44028C3.37965 6.11028 2.38965 7.79028 2.38965 9.17028V14.8203C2.38965 16.2003 3.37965 17.8803 4.58965 18.5503L9.92965 21.5203C11.0696 22.1503 12.9396 22.1503 14.0796 21.5203L19.4196 18.5503C20.6296 17.8803 21.6196 16.2003 21.6196 14.8203V9.17028C21.6196 7.79028 20.6296 6.11028 19.4196 5.44028L14.0796 2.47028C12.9296 1.84028 11.0696 1.84028 9.92965 2.48028Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="inner">Blockchain</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter active'>
                                            <span> Ethereum</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter'>
                                            <span>Flow</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <div class='sort-filter'>
                                            <span>Tezos</span>
                                            <i class="fal fa-check"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="soft-right">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 7H21" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M6 12H18" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M10 17H14" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                    <span>Sort By: Recently Added</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <h6>Sort by</h6>
                                        <a href="#" class="dropdown-item">
                                            <div class="sort-filer">
                                                <span>Recently added</span>
                                                <i class="fal fa-check"></i>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="sort-filer active">
                                                <span>Price: Low to High</span>
                                                <i class="fal fa-check"></i>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="sort-filer">
                                                <span>Price: High to Low</span>
                                                <i class="fal fa-check"></i>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="sort-filer">
                                                <span>Auction ending soon</span>
                                                <i class="fal fa-check"></i>
                                            </div>
                                        </a>

                                        <h6>Options</h6>
                                        <div class="dropdown-item">
                                            <form class="sort-filer">
                                                <span>Auction ending soon</span>
                                                <input class="check" type="checkbox" value="checkbox" name="check" checked="">
                                            </form>
                                        </div>
                                        <div class="dropdown-item">
                                            <form class="sort-filer">
                                                <span>Show lazy minted</span>
                                                <input class="check" type="checkbox" value="checkbox" name="check" >
                                            </form>
                                        </div>

                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item8.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="475665" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5><a href="/item-details-v1">"Hamlet Contemplates Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-11.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">SalvadorDali
                                        </a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media active">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-10.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 220</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="145545" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Triumphant Awakening Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-12.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Trista Francis</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 90</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="1046845" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Living Vase 01 by Lanza Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-13.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Freddie Carpenter</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-21.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 145</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="649881" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Flame Dress' by Balmain Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-14.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-4.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="475665" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5><a href="/item-details-v1">"Hamlet Contemplates Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">SalvadorDali
                                        </a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 220</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="145545" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Triumphant Awakening Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Trista Francis</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 90</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="1046845" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Living Vase 01 by Lanza Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Freddie Carpenter</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 145</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="649881" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Flame Dress' by Balmain Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-6.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item8.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="475665" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5><a href="/item-details-v1">"Hamlet Contemplates Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-11.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">SalvadorDali
                                        </a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-10.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 220</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="145545" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Triumphant Awakening Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-12.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Trista Francis</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 90</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="1046845" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Living Vase 01 by Lanza Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-13.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Freddie Carpenter</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-21.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 145</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="649881" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Flame Dress' by Balmain Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-14.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-4.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="475665" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5><a href="/item-details-v1">"Hamlet Contemplates Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">SalvadorDali
                                        </a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 220</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="145545" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Triumphant Awakening Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Trista Francis</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 90</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="1046845" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Living Vase 01 by Lanza Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Freddie Carpenter</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="fl-item col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 145</span></button>
                                <div class="featured-countdown">
                                    <span class="slogan"></span>
                                    <span class="js-countdown" data-timer="649881" data-labels=" :  ,  : , : , "></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Flame Dress' by Balmain Contemplates "</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-6.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Creator</span>
                                        <h6> <a href="/authors-v2">Tyler Covington</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Current Bid</span>
                                    <h5> 4.89 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="btn-auction center">
                            <a href="#" id="loadmore" class="sc-button loadmore fl-button pri-3"><span>Load More</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    
@endsection