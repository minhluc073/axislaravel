@extends('includes.layout')

@section('main-content')
    <div class="explore-4">
        @include('includes.pagetitle')

        <section class="tf-explore tf-section">
            <div class="themesflat-container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div id="side-bar" class="side-bar style-3">
                            <div class="widget widget-category mgbt-24 boder-bt">
                                <div class="title-wg-category">
                                    <h4 class="title-widget style-2">Status</h4>
                                    <i class="icon-fl-down-2"></i>
                                </div>
                                <div class="content-wg-category">
                                    <form action="#">
                                        <label>Buy Now
                                            <input type="checkbox" checked="checked">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>On Auctions
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label class="mgbt-none">Has Offers
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget-category mgbt-24 boder-bt">
                                <div class="title-wg-category">
                                    <h4 class="title-widget style-2">Categories</h4>
                                    <i class="icon-fl-down-2"></i>
                                </div>
                                <div class="content-wg-category">
                                    <form action="#">
                                        <label>Art
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Music
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Domain Names
                                            <input type="checkbox" checked="checked">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Virtual Worlds
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Trading  Cards
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Collectibles
                                            <input type="checkbox" checked="checked">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Sports
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label class="mgbt-none">Utility
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget-category mgbt-24 boder-bt">
                                <div class="title-wg-category">
                                    <h4 class="title-widget style-2">Chains</h4>
                                    <i class="icon-fl-down-2"></i>
                                </div>
                                <div class="content-wg-category">
                                    <form action="#">
                                        <label>Ethereum
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Polygon
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label class="mgbt-none">Klaytn
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget-category">
                                <div class="title-wg-category">
                                    <h4 class="title-widget style-2">Collections</h4>
                                    <i class="icon-fl-down-2"></i>
                                </div>
                                <div class="content-wg-category">
                                    <form action="#">
                                        <label>Abstraction
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Patternlicious
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Skecthify
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Cartoonism
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label>Virtuland
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                
                                        <label class="mgbt-none">Papercut
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="box-epxlore">
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
                            <div class="sc-card-product explode style2 mg-bt">
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
                            <div class="sc-card-product explode style2 mg-bt">
                                <div class="card-media">
                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/card-item-9.jpg') }}" alt="Axies"></a>
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
                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-6.jpg') }}" alt="Axies"></a>
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
                                    <a href="/item-details-v1"><img src="{{asset ('images/box-item/image-box-11.jpg') }}" alt="Axies"></a>
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
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection