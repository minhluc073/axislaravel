@extends('includes.layout')

@section('main-content')
    <div class="explore-3">
        @include('includes.pagetitle')

        <section class="tf-explore-2 tf-section">
            <div class="themesflat-container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tf-title-heading ct style-2 mg-bt-13">
                            NFTs Marketplace
                        </h2>
                        <p class="sub-title ct small mg-bt-20 pad-420">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.
                        </p>

                        <div class="swiper-container pd-t-20 carousel auctions show-shadow">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slider-item">										
                                        <div class="sc-card-product">
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-3.jpg') }}" alt="Axies"></a>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-title">
                                                <h5 class="style2"><a href="/item-details-v1">"The RenaiXance Rising the sun  "</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-1.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Owned By</span>
                                                        <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <span>Current Bid</span>
                                                    <h5> 4.89 ETH</h5>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style bag fl-button pri-3"><span>Place Bid</span></a>
                                                <a href="/activity-v1" class="view-history reload">View History</a>
                                            </div>
                                        </div>   	
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">										
                                        <div class="sc-card-product style-comming-soon">
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-4.jpg') }}" alt="Axies"></a>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                                <div class="coming-soon">coming soon</div>
                                            </div>
                                            <div class="card-title">
                                                <h5 class="style2"><a href="/item-details-v1">"Space babe - Night 2/25”</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Owned By</span>
                                                        <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <span>Current Bid</span>
                                                    <h5> 4.89 ETH</h5>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style bag fl-button pri-3"><span>Place Bid</span></a>
                                                <a href="/activity-v1" class="view-history reload">View History</a>
                                            </div>
                                        </div>	
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">										
                                        <div class="sc-card-product">
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"CyberPrimal 042 LAN”</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Owned By</span>
                                                        <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <span>Current Bid</span>
                                                    <h5> 4.89 ETH</h5>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style bag fl-button pri-3"><span>Place Bid</span></a>
                                                <a href="/activity-v1" class="view-history reload">View History</a>
                                            </div>
                                        </div>    	
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">										
                                        <div class="sc-card-product">
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"Crypto Egg Stamp #5”</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Owned By</span>
                                                        <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <span>Current Bid</span>
                                                    <h5> 4.89 ETH</h5>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style bag fl-button pri-3"><span>Place Bid</span></a>
                                                <a href="/activity-v1" class="view-history reload">View History</a>
                                            </div>
                                        </div>  	
                                    </div><!-- item-->    
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">										
                                        <div class="sc-card-product">
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-3.jpg') }}" alt="Axies"></a>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-title">
                                                <h5 class="style2"><a href="/item-details-v1">"The RenaiXance Rising the sun  "</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-1.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Owned By</span>
                                                        <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <span>Current Bid</span>
                                                    <h5> 4.89 ETH</h5>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style bag fl-button pri-3"><span>Place Bid</span></a>
                                                <a href="/activity-v1" class="view-history reload">View History</a>
                                            </div>
                                        </div>   	
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">										
                                        <div class="sc-card-product style-comming-soon">
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-4.jpg') }}" alt="Axies"></a>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                                <div class="coming-soon">coming soon</div>
                                            </div>
                                            <div class="card-title">
                                                <h5 class="style2"><a href="/item-details-v1">"Space babe - Night 2/25”</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Owned By</span>
                                                        <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <span>Current Bid</span>
                                                    <h5> 4.89 ETH</h5>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style bag fl-button pri-3"><span>Place Bid</span></a>
                                                <a href="/activity-v1" class="view-history reload">View History</a>
                                            </div>
                                        </div>	
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">										
                                        <div class="sc-card-product">
                                            <div class="card-media">
                                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                            </div>
                                            <div class="card-title">
                                                <h5><a href="/item-details-v1">"CyberPrimal 042 LAN”</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                                    </div>
                                                    <div class="info">
                                                        <span>Owned By</span>
                                                        <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <span>Current Bid</span>
                                                    <h5> 4.89 ETH</h5>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style bag fl-button pri-3"><span>Place Bid</span></a>
                                                <a href="/activity-v1" class="view-history reload">View History</a>
                                            </div>
                                        </div>    	
                                    </div><!-- item-->
                                </div>                          
                            </div>
                            <div class="swiper-pagination mg-t4"></div>
                            <div class="swiper-button-next btn-slide-next active"></div>
                            <div class="swiper-button-prev btn-slide-prev"></div>
                        </div><!--/.swiper-container-->
                    </div>
                </div>
            </div>
        </section>
    </div>
    
@endsection