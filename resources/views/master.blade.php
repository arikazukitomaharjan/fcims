<!DOCTYPE html>
<html lang="en">
    <head>
        {{--header section--}}  
            @include('/include/head')  
        {{--end of header section--}} 
    </head>

    <body>      

        <!-- layout-->
        <div id="layout"  class="#"  >
            <!-- Header-->
            <header class="header-3">
                {{--header section--}}  
                    @include('/include/header')  
                {{--end of header section--}}                 

                <!-- mainmenu-->
                {{--navigation section--}}
                   @include('include/navigation')
                {{--end of navigation section--}}
               
            </header>
            <!-- End Header-->
            
            @yield('slider')            

            @yield('tab')
                

             @yield('content')
                        
                        @yield('content-left')
                         @yield('content-right')


               </section>
      
            <!-- footer-->
            <footer id="footer">
                <div class="container">

                    
                      

                    <!-- Social Icons-->
                    <div class="row">
                        <ul class="social">
                                <li>
                                    <div>
                                        <a href="#" class="facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#" class="twitter-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#" class="vimeo">
                                            <i class="fa fa-vimeo-square"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#" class="google-plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </li> 
                                <li>
                                    <div>
                                        <a href="#" class="youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </div>
                                </li> 
                        </ul>
                    </div> 
                    <!-- End Social Icons-->

                </div>
            </footer>      
            <!-- End footer-->

            <!-- footer Down-->
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <p>&copy; Lothse</p>
                        </div>
                        <div class="col-md-7">
                            <!-- Nav Footer-->
                            <ul class="nav-footer">
                                <li><a href="#">HOME</a> </li>
                                <li><a href="#">PLAYER</a></li>
                                <li><a href="#">CLUB</a></li> 
                                <li><a href="#">COACH</a></li> 
                               
                            </ul>
                            <!-- End Nav Footer-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer Down-->

        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local--> 
        <script src="{{ asset('public/js/jquery.js') }}"></script>                
        <!--Nav-->
        <script type="text/javascript" src="{{ asset('public/dist/js/lightbox.js') }}" ></script> 
        <script type="text/javascript" src="{{ asset('public/js/nav/tinynav.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('public/js/nav/hoverIntent.js') }}"></script>   
        <script type="text/javascript" src="{{ asset('public/js/nav/superfish.js') }}"></script> 
        <script src="{{ asset('public/js/nav/jquery.sticky.js') }}" type="text/javascript"></script>    
        <!--Totop-->
        <script type="text/javascript" src="{{ asset('public/js/totop/jquery.ui.totop.js') }}" ></script>  
         <!--Accorodion-->
        <script type="text/javascript" src="{{ asset('public/js/accordion/accordion.js') }}" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="{{ asset('public/js/slide/camera.js') }}" ></script>      
        <script type='text/javascript' src="{{ asset('public/js/slide/jquery.easing.1.3.min.js') }}"></script>   
        <!-- Maps -->
        <script src="{{ asset('public/js/maps/gmap3.js') }}"></script>            
        <!--Ligbox--> 
        <script type="text/javascript" src="{{ asset('public/js/fancybox/jquery.fancybox.js') }}"></script> 
        <!-- carousel.js-->
        <script src="{{ asset('public/js/carousel/carousel.js') }}"></script>
        <!-- Filter -->
        <script src="{{ asset('public/js/filters/jquery.isotope.js') }}" type="text/javascript"></script>
        <!-- Twitter Feed-->
        <script src="{{ asset('public/js/twitter/jquery.tweet.js') }}"></script> 
        <!-- flickr Feed-->
        <script src="{{ asset('public/js/flickr/jflickrfeed.min.js') }}"></script> 
      
        <script src="public/js/counter/jquery.countdown.js"></script>      
        <!--Theme Options-->
        <script type="text/javascript" src="{{ asset('public/js/theme-options/theme-options.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/theme-options/jquery.cookies.js') }}"></script> 
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="{{ asset('public/js/bootstrap/bootstrap.js') }}"></script> 
        <!--MAIN FUNCTIONS-->
        <script type="text/javascript" src="{{ asset('public/js/main.js') }}"></script>
        <!-- ======================= End JQuery libs =========================== -->
 
    </body>
</html>
  