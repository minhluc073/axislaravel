@extends('includes.layout')

@section('main-content')
    <div class="item-detail-1">
        @include('includes.pagetitle')

        <div class="tf-section tf-item-details">
            <div class="themesflat-container">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="content-left">
                            <div class="media">
                                <img src="{{asset ('images/box-item/images-item-details.jpg') }}" alt="Axies">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="content-right">
                            <div class="sc-item-details">
                                <h2 class="style2">“The Fantasy Flower illustration ”</h2>
                                <div class="meta-item">
                                    <div class="left">
                                        <span class="viewed eye">225</span>
                                        <span class="liked heart wishlist-button mg-l-8"><span class="number-like">100</span></span>
                                    </div>
                                    <div class="right">
                                        <a href="#" class="share"></a>
                                        <a class="option"></a>
                                    </div>
                                </div>
                                <div class="client-infor sc-card-product">
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-8.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Owned By</span>
                                                <h6> <a href="/authors-v2">Ralph Garraway</a> </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="meta-info">
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{asset ('images/avatar/avt-2.jpg') }}" alt="Axies">
                                            </div>
                                            <div class="info">
                                                <span>Create By</span>
                                                <h6> <a href="/authors-v2">Freddie Carpenter</a> </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Habitant sollicitudin faucibus cursus lectus pulvinar dolor non ultrices eget.
                                    Facilisi lobortisal morbi fringilla urna amet sed ipsum vitae ipsum malesuada.
                                    Habitant sollicitudin faucibus cursus lectus pulvinar dolor non ultrices eget.
                                    Facilisi lobortisal morbi fringilla urna amet sed ipsum</p>
                                <div class="meta-item-details style2">
                                    <div class="item meta-price">
                                        <span class="heading">Current Bid</span>
                                        <div class="price">
                                            <div class="price-box">
                                                <h5> 4.89 ETH</h5>
                                                <span>= $12.246</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item count-down">
                                        <span class="heading style-2">Countdown</span>
                                        <span class="js-countdown" data-timer="416400"
                                            data-labels=" :  ,  : , : , "></span>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button loadmore style bag fl-button pri-3"><span>Place a bid</span></a>
                                <div class="flat-tabs themesflat-tabs">
                                    <ul class="menu-tab tab-title">
                                        <li class="item-title active">
                                            <span class="inner">Bid History</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Info</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Provenance</span>
                                        </li>
                                    </ul>
                                    <div class="content-tab">
                                        <div class="content-inner tab-content">
                                            <ul class="bid-history-list">
                                                <li>
                                                    <div class="content">
                                                        <div class="client">
                                                            <div class="sc-author-box style-2">
                                                                <div class="author-avatar">
                                                                    <a href="#">
                                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies" class="avatar">
                                                                    </a>
                                                                    <div class="badge"></div>
                                                                </div>
                                                                <div class="author-infor">
                                                                    <div class="name">
                                                                        <h6><a href="/authors-v2">Mason Woodward </a></h6> <span> place a bid</span>
                                                                    </div>
                                                                    <span class="time">8 hours ago</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <h5> 4.89 ETH</h5>
                                                            <span>= $12.246</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content">
                                                        <div class="client">
                                                            <div class="sc-author-box style-2">
                                                                <div class="author-avatar">
                                                                    <a href="#">
                                                                        <img src="{{asset ('images/avatar/avt-11.jpg') }}" alt="Axies" class="avatar">
                                                                    </a>
                                                                    <div class="badge"></div>
                                                                </div>
                                                                <div class="author-infor">
                                                                    <div class="name">
                                                                        <h6> <a href="/authors-v2">Mason Woodward </a></h6> <span>bid accepted</span>
                                                                    </div>
                                                                    <span class="time">at 06/10/2021, 3:20 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <h5> 4.89 ETH</h5>
                                                            <span>= $12.246</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content">
                                                        <div class="client">
                                                            <div class="sc-author-box style-2">
                                                                <div class="author-avatar">
                                                                    <a href="#">
                                                                        <img src="{{asset ('images/avatar/avt-1.jpg') }}" alt="Axies" class="avatar">
                                                                    </a>
                                                                    <div class="badge"></div>
                                                                </div>
                                                                <div class="author-infor">
                                                                    <div class="name">
                                                                        <h6> <a href="/authors-v2">Mason Woodward </a></h6> <span> place a bid</span>
                                                                    </div>
                                                                    <span class="time">8 hours ago</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <h5> 4.89 ETH</h5>
                                                            <span>= $12.246</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content">
                                                        <div class="client">
                                                            <div class="sc-author-box style-2">
                                                                <div class="author-avatar">
                                                                    <a href="#">
                                                                        <img src="{{asset ('images/avatar/avt-5.jpg') }}" alt="Axies" class="avatar">
                                                                    </a>
                                                                    <div class="badge"></div>
                                                                </div>
                                                                <div class="author-infor">
                                                                    <div class="name">
                                                                        <h6> <a href="/authors-v2">Mason Woodward </a></h6> <span> place a bid</span>
                                                                    </div>
                                                                    <span class="time">8 hours ago</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <h5> 4.89 ETH</h5>
                                                            <span>= $12.246</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content">
                                                        <div class="client">
                                                            <div class="sc-author-box style-2">
                                                                <div class="author-avatar">
                                                                    <a href="#">
                                                                        <img src="{{asset ('images/avatar/avt-7.jpg') }}" alt="Axies" class="avatar">
                                                                    </a>
                                                                    <div class="badge"></div>
                                                                </div>
                                                                <div class="author-infor">
                                                                    <div class="name">
                                                                        <h6> <a href="/authors-v2">Mason Woodward </a></h6> <span> place a bid</span>
                                                                    </div>
                                                                    <span class="time">8 hours ago</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <h5> 4.89 ETH</h5>
                                                            <span>= $12.246</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content">
                                                        <div class="client">
                                                            <div class="sc-author-box style-2">
                                                                <div class="author-avatar">
                                                                    <a href="#">
                                                                        <img src="{{asset ('images/avatar/avt-8.jpg') }}" alt="Axies" class="avatar">
                                                                    </a>
                                                                    <div class="badge"></div>
                                                                </div>
                                                                <div class="author-infor">
                                                                    <div class="name">
                                                                        <h6> <a href="/authors-v2">Mason Woodward </a></h6> <span> place a bid</span>
                                                                    </div>
                                                                    <span class="time">8 hours ago</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <h5> 4.89 ETH</h5>
                                                            <span>= $12.246</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content-inner tab-content">                                               
                                            <ul class="bid-history-list">
                                                <li>
                                                    <div class="content">
                                                        <div class="client">
                                                            <div class="sc-author-box style-2">
                                                                <div class="author-avatar">
                                                                    <a href="#">
                                                                        <img src="{{asset ('images/avatar/avt-3.jpg') }}" alt="Axies" class="avatar">
                                                                    </a>
                                                                    <div class="badge"></div>
                                                                </div>
                                                                <div class="author-infor">
                                                                    <div class="name">
                                                                        <h6> <a href="/authors-v2">Mason Woodward </a></h6> <span> place a bid</span>
                                                                    </div>
                                                                    <span class="time">8 hours ago</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content-inner tab-content">
                                            <div class="provenance">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                                                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
        
        @include('components.section.liveauctions.liveauctions')
    </div>
    
@endsection