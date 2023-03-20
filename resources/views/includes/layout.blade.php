<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Axies | NFT Marketplace Laravel Template</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Theme Style -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/textanimation.css')}}">

        <!-- Favicon and Touch Icons  -->
        <link rel="shortcut icon" href="{{asset('icon/Favicon.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('icon/Favicon.png')}}">

    </head>
    <body class="antialiased body is_dark header-fixed">
        <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">
            <!-- Header -->
            @include('includes.header')  
            <!-- End Header -->
            
            <!-- Main content -->
            @yield('main-content')
            <!-- end Main content -->

            <!-- Footer -->
            @include('includes.footer')
            <!-- End Footer -->
            
        </div>
        <!-- /#page -->

        <!-- Modal Popup Bid -->
        <div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body space-y-20 pd-40">
                        <h3 class="text-center">Your Bidding
                            Successfuly Added</h3>
                        <p class="text-center">your bid <span class="price color-popup">(4ETH) </span> has been listing to our database</p>
                        <a class="btn btn-primary"> Watch the listings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body space-y-20 pd-40">
                        <h3>Place a Bid</h3>
                        <p class="text-center">You must bid at least <span class="price color-popup">4.89 ETH</span>
                        </p>
                        <input type="text" class="form-control"
                            placeholder="00.00 ETH">
                        <p>Enter quantity. <span class="color-popup">5 available</span>
                        </p>
                        <input type="text" class="form-control quantity" value="1">
                        <div class="hr"></div>
                        <div class="d-flex justify-content-between">
                            <p> You must bid at least:</p>
                            <p class="text-right price color-popup"> 4.89 ETH </p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p> Service free:</p>
                            <p class="text-right price color-popup"> 0,89 ETH </p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p> Total bid amount:</p>
                            <p class="text-right price color-popup"> 4 ETH </p>
                        </div>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#popup_bid_success" data-dismiss="modal" aria-label="Close"> Place a bid</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/jquery.easing.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/plugin.js')}}"></script>
        <script src="{{asset('js/count-down.js')}}"></script>
        <script src="{{asset('js/shortcodes.js')}}"></script>
        <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('js/swiper.js')}}"></script>
        <script src="{{asset('js/web3.min.js')}}"></script>
        <script src="{{asset('js/moralis.js')}}"></script>
        <script src="{{asset('js/nft.js')}}"></script>
        <script src="{{asset('js/textanimation.js')}}"></script>
    </body>
</html>
