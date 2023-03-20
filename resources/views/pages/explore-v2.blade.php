@extends('includes.layout')

@section('main-content')
    <div class="explore-2">
        @include('includes.pagetitle')

        <div class="tf-section sc-explore-2">
            <div class="themesflat-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="seclect-box style3">
                            <div id="artworks" class="dropdown">
                                <a href="#" class="btn-selector nolink">All Artworks</a>
                                <ul>
                                    <li><span>Abstraction</span></li>
                                    <li class="active"><span>Skecthify</span></li>
                                    <li><span>Patternlicious</span></li>
                                    <li><span>Virtuland</span></li>
                                    <li><span>Papercut</span></li>
                                </ul>
                            </div>
                            <div id="sort-by" class="dropdown style-2">
                                <a href="#" class="btn-selector nolink">Sort by</a>
                                <ul>
                                    <li><span>Top rate</span></li>
                                    <li class="active"><span>Mid rate</span></li>
                                    <li><span>Low rate</span></li>
                                </ul>
                            </div>    
                        </div>
                        <div class="flat-tabs explore-tab">
                            <ul class="menu-tab">
                                <li class="item-title active">
                                    <span class="inner">All</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Art</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Music</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Collectibles</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Sports</span>
                                </li>
                            </ul>
                            <div class="content-tab mg-t-40">
                                <div class="content-inner">
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-3.jpg') }}" alt="Axies"></a>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-4.jpg') }}" alt="Axies"></a>
                                            <div class="coming-soon">coming soon</div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Space babe - Night 2/25"</a></h5>
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
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"CyberPrimal 042 LAN"</a></h5>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Crypto Egg Stamp #5"</a></h5>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item8.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's...</a></h5>
                                        </div>
                                        <div class="meta-info">
                                            <div class="author">
                                                <div class="avatar">
                                                    <img src="{{asset ('images/avatar/avt-12.jpg') }}" alt="Axies">
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                            <div class="coming-soon">coming soon</div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Space babe - Night 2/25"</a></h5>
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
                                                <span>Price</span>
                                                <div class="price-details">
                                                    <h5> 4.89 ETH</h5>
                                                    <span>= $12.246</span>
                                                </div>
                                            </div>
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div> 
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"CyberPrimal 042 LAN"</a></h5>
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
                                        </div>
                                    </div>  
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Crypto Egg Stamp #5</a></h5>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>      
                                </div>

                                <div class="content-inner">
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-4.jpg') }}" alt="Axies"></a>
                                            <div class="coming-soon">coming soon</div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Space babe - Night 2/25"</a></h5>
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
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"CyberPrimal 042 LAN"</a></h5>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>   
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item8.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's...</a></h5>
                                        </div>
                                        <div class="meta-info">
                                            <div class="author">
                                                <div class="avatar">
                                                    <img src="{{asset ('images/avatar/avt-12.jpg') }}" alt="Axies">
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                            <div class="coming-soon">coming soon</div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Space babe - Night 2/25"</a></h5>
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
                                                <span>Price</span>
                                                <div class="price-details">
                                                    <h5> 4.89 ETH</h5>
                                                    <span>= $12.246</span>
                                                </div>
                                            </div>
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div> 
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"CyberPrimal 042 LAN"</a></h5>
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
                                        </div>
                                    </div>  
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Crypto Egg Stamp #5</a></h5>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>     
                                </div>

                                <div class="content-inner">
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-3.jpg') }}" alt="Axies"></a>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>   
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Crypto Egg Stamp #5"</a></h5>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item8.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's...</a></h5>
                                        </div>
                                        <div class="meta-info">
                                            <div class="author">
                                                <div class="avatar">
                                                    <img src="{{asset ('images/avatar/avt-12.jpg') }}" alt="Axies">
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                            <div class="coming-soon">coming soon</div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Space babe - Night 2/25"</a></h5>
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
                                                <span>Price</span>
                                                <div class="price-details">
                                                    <h5> 4.89 ETH</h5>
                                                    <span>= $12.246</span>
                                                </div>
                                            </div>
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>     
                                </div>

                                <div class="content-inner">
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-4.jpg') }}" alt="Axies"></a>
                                            <div class="coming-soon">coming soon</div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Space babe - Night 2/25"</a></h5>
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
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"CyberPrimal 042 LAN"</a></h5>
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
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-7.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Crypto Egg Stamp #5"</a></h5>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item8.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Hamlet Contemplates Yorick's...</a></h5>
                                        </div>
                                        <div class="meta-info">
                                            <div class="author">
                                                <div class="avatar">
                                                    <img src="{{asset ('images/avatar/avt-12.jpg') }}" alt="Axies">
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                            <div class="coming-soon">coming soon</div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Space babe - Night 2/25"</a></h5>
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
                                                <span>Price</span>
                                                <div class="price-details">
                                                    <h5> 4.89 ETH</h5>
                                                    <span>= $12.246</span>
                                                </div>
                                            </div>
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div> 
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"CyberPrimal 042 LAN"</a></h5>
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
                                        </div>
                                    </div> 
                                </div>

                                <div class="content-inner">
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-3.jpg') }}" alt="Axies"></a>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-2.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"CyberPrimal 042 LAN"</a></h5>
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
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div>
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
                                            <div class="coming-soon">coming soon</div>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Space babe - Night 2/25"</a></h5>
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
                                                <span>Price</span>
                                                <div class="price-details">
                                                    <h5> 4.89 ETH</h5>
                                                    <span>= $12.246</span>
                                                </div>
                                            </div>
                                            <a href="#" class="view-history reload">View History</a>
                                        </div>
                                    </div> 
                                    <div class="sc-card-product explode style2 mg-bt">
                                        <div class="card-media">
                                            <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
                                            <div class="button-place-bid">
                                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                            </div>
                                            <button class="wishlist-button heart"><span class="number-like"> 100</span></button>
                                        </div>
                                        <div class="card-title">
                                            <h5><a href="/item-details-v1">"Crypto Egg Stamp #5</a></h5>
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
                                            <a href="#" class="view-history reload">View History</a>
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
    
@endsection