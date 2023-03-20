@extends('includes.layout')

@section('main-content')
    @include('includes.pagetitle')
    <section class="tf-section authors">
        <div class="themesflat-container">
            <div class="flat-tabs tab-authors">
                <div class="author-profile flex">
                    <div class="feature-profile">
                        <img src="{{asset ('images/avatar/avt-author-tab.jpg') }}" alt="Axies" class="avatar">
                    </div>
                    <div class="infor-profile">
                        <span>Author Profile</span>
                        <h2 class="title">Trista Francis</h2>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                        <form>
                            <input type="text" class="inputcopy" value="DdzFFzCqrhshMSxABCdfrge" readonly>
                            <button type="button" class="btn-copycode"><i class="icon-fl-file-1"></i></button>
                        </form>
                    </div>
                    <div class="widget-social style-3">
                        <ul>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="style-2"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li class="mgr-none"><a href="#"><i class="icon-fl-tik-tok-2"></i></a></li>
                        </ul>
                        <div class="btn-profile"><a href="/login" class="sc-button style-1 follow">Follow</a></div>
                    </div>
                </div>
                <ul class="menu-tab flex">
                    <li class="tablinks active">ALL</li>
                    <li class="tablinks">ART</li>
                    <li class="tablinks">MUSIC</li>
                    <li class="tablinks">COLLECTIBLES</li>
                    <li class="tablinks">SPORTS</li>
                </ul>
                <div class="content-tab">
                    <div class="content-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode ">
                                    <div class="card-media active">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-3.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid ">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title mg-bt-16">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-1.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-4.jpg') }}" alt="Axies"></a>
                                        <div class="coming-soon">coming soon</div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title mg-bt-16">
                                        <h5><a href="/item-details-v1">"Space babe - Night 2/25”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Price</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid"  class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title mg-bt-16">
                                        <h5><a href="/item-details-v1">"CyberPrimal 042 LAN”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid"  class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title mg-bt-16">
                                        <h5><a href="/item-details-v1">"Crypto Egg Stamp #5”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item8.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid"  class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-1.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                        <div class="coming-soon">coming soon</div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Space babe - Night 2/25”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Price</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid"  class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode ">
                                    <div class="card-media active">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-3.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid ">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-1.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-4.jpg') }}" alt="Axies"></a>
                                        <div class="coming-soon">coming soon</div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Space babe - Night 2/25”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Price</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"CyberPrimal 042 LAN”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Crypto Egg Stamp #5”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode ">
                                    <div class="card-media active">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-3.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid ">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-1.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-4.jpg') }}" alt="Axies"></a>
                                        <div class="coming-soon">coming soon</div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Space babe - Night 2/25”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Price</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"CyberPrimal 042 LAN”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Crypto Egg Stamp #5”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode ">
                                    <div class="card-media active">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-3.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid ">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-1.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                        <div class="coming-soon">coming soon</div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Space babe - Night 2/25”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Price</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Crypto Egg Stamp #5”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item8.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-1.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                        <div class="coming-soon">coming soon</div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Space babe - Night 2/25”</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Price</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-4.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="sc-card-product explode">
                                    <div class="card-media">
                                        <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                        <div class="button-place-bid">
                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                        </div>
                                        <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                    </div>
                                    <div class="card-title">
                                        <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's SalvadorDali"</a></h5>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Creator</span>
                                                <h6> <a href="/authors-v2">SalvadorDali</a> </h6>
                                            </div>
                                        </div>
                                        <div class="tags">bsc</div>
                                    </div>
                                    <div class="card-bottom style-explode">
                                        <div class="price">
                                            <span>Current Bid</span>
                                            <div class="price-details">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                        <a href="/activity-v1" class="view-history reload">View History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 