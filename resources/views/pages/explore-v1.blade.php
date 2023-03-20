@extends('includes.layout')

@section('main-content')
    <div class="explore-1">
        @include('includes.pagetitle')

        <div class="tf-section sc-explore-1">
            <div class="themesflat-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-box explore-1 flex mg-bt-40">
                            <div class="seclect-box style-1">
                                <div id="item_category" class="dropdown">
                                    <a href="#" class="btn-selector nolink">All categories</a>
                                    <ul >
                                        <li><span>Art</span></li>
                                        <li class="active"><span>Music</span></li>
                                        <li><span>Domain Names</span></li>
                                        <li><span>Virtual World</span></li>
                                        <li><span>Trading Cards</span></li>
                                        <li><span>Sports</span></li>
                                        <li><span>Utility</span></li>
                                    </ul>
                                </div>
                                <div id="buy" class="dropdown">
                                    <a href="#" class="btn-selector nolink">Buy Now</a>
                                    <ul >
                                        <li><span>On Auction</span></li>
                                        <li><span>Has Offers</span></li>
                                    </ul>
                                </div>
                                <div id="all-items" class="dropdown">
                                    <a href="#" class="btn-selector nolink">All Items</a>
                                    <ul >
                                        <li><span>Single Items</span></li>
                                        <li><span>Bundles</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="seclect-box style-2 box-right">
                                <div id="artworks" class="dropdown">
                                    <a href="#" class="btn-selector nolink">All Artworks</a>
                                    <ul >
                                        <li><span>Abstraction</span></li>
                                        <li><span>Skecthify</span></li>
                                        <li><span>Patternlicious</span></li>
                                        <li><span>Virtuland</span></li>
                                        <li><span>Papercut</span></li>
                                    </ul>
                                </div>
                                <div id="sort-by" class="dropdown">
                                    <a href="#" class="btn-selector nolink">Sort by</a>
                                    <ul >
                                        <li><span>Top rate</span></li>
                                        <li><span>Mid rate</span></li>
                                        <li><span>Low rate</span></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
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
                            <div class="card-bottom link-style-1">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style bag fl-button pri-3 active"><span>Place Bid</span></a>
                                <a href="/activity-v1" class="view-history reload">View History</a>
                            </div>
                        </div>
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5><a href="#">"CyberPrimal 042 LAN”</a></h5>
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5><a href="#">"Crypto Egg Stamp #5”</a></h5>
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item8.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Travel Monkey Club #45”</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-12.jpg') }}" alt="Axies">
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5><a href="#">"Hamlet Contemplates Contemplates "</a></h5>
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Travel Monkey Club #45"
                                </a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Owned By</span>
                                        <h6> <a href="/authors-v2">SalvadorDali</a></h6>
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Travel Monkey Club #45"</a></h5>
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
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
                            <div class="card-bottom link-style-1">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style bag fl-button pri-3 active"><span>Place Bid</span></a>
                                <a href="/activity-v1" class="view-history reload">View History</a>
                            </div>
                        </div>
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5><a href="#">"CyberPrimal 042 LAN”</a></h5>
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5><a href="#">"Crypto Egg Stamp #5”</a></h5>
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item8.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Travel Monkey Club #45”</a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-12.jpg') }}" alt="Axies">
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5><a href="#">"Hamlet Contemplates Contemplates "</a></h5>
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Travel Monkey Club #45"
                                </a></h5>
                                <div class="tags">bsc</div>
                            </div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                    </div>
                                    <div class="info">
                                        <span>Owned By</span>
                                        <h6> <a href="/authors-v2">SalvadorDali</a></h6>
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
                    </div>
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="sc-card-product">
                            <div class="card-media">
                                <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="/item-details-v1">"Travel Monkey Club #45"</a></h5>
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
                    </div>
                    <div class="col-md-12 wrap-inner load-more text-center">
                        <a href="#" id="loadmore" class="sc-button loadmore fl-button pri-3"><span>Load More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection