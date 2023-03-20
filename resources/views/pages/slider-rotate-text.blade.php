@extends('includes.layouttwo')

@section('main-content')
    
<section class="flat-title-page style3 home-7">
    <img class="bgr-gradient gradient1" src="{{asset ('images/backgroup-secsion/bg-gradient1.png') }}" alt="Axies">
    <img class="bgr-gradient gradient2" src="{{asset ('images/backgroup-secsion/bg-gradient2.png') }}" alt="Axies">
    <img class="bgr-gradient gradient3" src="{{asset ('images/backgroup-secsion/bg-gradient3.png') }}" alt="Axies">
    <div class="overlay"></div>
    <div class="themesflat-container home s1">
        <div class="wrap-heading flat-slider flex">
            <div class="content">
                <h2 class="heading m-t-15">Discover, find,
                </h2>
                <!-- <h1 class="heading mb-style"><span class="tf-text s1 type"></span>                                           -->
                <h1 class="heading mb-style animationtext letters rotate-3">
                    <span class="tf-text s1 cd-words-wrapper">
                        <span class="item-text is-visible">Extraordinary</span>
                        <span class="item-text is-hidden">Extraordinary</span>
                        <span class="item-text is-hidden">Extraordinary</span>
                    </span>                                          
                </h1>
                <h1 class="heading">Monster NFTs</h1>
                <p class="sub-heading mg-t-19 mg-bt-40">Marketplace for monster character cllections non fungible token NFTs
                </p>
                <div class="flat-bt-slider flex style2">
                    <a href="/explore-v1" class="sc-button header-slider style style-1 rocket fl-button pri-1"><span>Explore
                    </span></a>
                    <a href="/create-item" class="sc-button header-slider style style-1 note fl-button pri-1"><span>Create
                    </span></a>
                </div>
            </div>
            <div class="swiper-container swiper mySwiper swiper-h">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                    <div class="swiper mySwiper1 swiper-v">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item1.png') }}" alt="Axies"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item2.png') }}" alt="Axies"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item3.png') }}" alt="Axies"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item4.png') }}" alt="Axies"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container swiper mySwiper swiper-h">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                    <div class="swiper mySwiper2 swiper-v">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item4.png') }}" alt="Axies"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item3.png') }}" alt="Axies"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item2.png') }}" alt="Axies"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item1.png') }}" alt="Axies"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container swiper mySwiper swiper-h">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                    <div class="swiper mySwiper1 swiper-v">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item2.png') }}" alt="Axies"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item1.png') }}" alt="Axies"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item4.png') }}" alt="Axies"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/box-item/img_item3.png') }}" alt="Axies"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>	        
</section>

@endsection