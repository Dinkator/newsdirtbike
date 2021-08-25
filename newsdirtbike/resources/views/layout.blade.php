<!DOCTYPE html>
<html lang="en">
<head>
  <title>Motorcross | Track Is Life </title>
<base href="{{asset('/')}}">
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=137530137607253&autoLogAppEvents=1" nonce="xnuTui23"></script>
  <!-- Css -->
  <link rel="stylesheet" href="{{asset('layout')}}/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="{{asset('layout')}}/css/font-icons.css" />
  <link rel="stylesheet" href="{{asset('layout')}}/css/style.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{asset('layout')}}/img/favicon.ico">
  <link rel="apple-touch-icon" href="{{asset('layout')}}/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset('layout')}}/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset('layout')}}/img/apple-touch-icon-114x114.png">

  <!-- Lazyload (must be placed in head in order to work) -->
  <script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light style-default style-rounded">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <!-- Sidenav -->    
  <header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>
    
    <!-- Nav -->
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="#" class="sidenav__menu-url">Home</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="index.html" class="sidenav__menu-url">Home Default</a></li>
            <li><a href="index-politics.html" class="sidenav__menu-url">Home Politics</a></li>
            <li><a href="index-fashion.html" class="sidenav__menu-url">Home Fashion</a></li>
            <li><a href="index-games.html" class="sidenav__menu-url">Home Games</a></li>
            <li><a href="index-videos.html" class="sidenav__menu-url">Home Videos</a></li>
            <li><a href="index-music.html" class="sidenav__menu-url">Home Music</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Pages</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="about.html" class="sidenav__menu-url">About</a></li>
            <li><a href="contact.html" class="sidenav__menu-url">Contact</a></li>
            <li><a href="search-results.html" class="sidenav__menu-url">Search Results</a></li>
            <li><a href="categories.html" class="sidenav__menu-url">Categories</a></li>
            <li><a href="404.html" class="sidenav__menu-url">404</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Features</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li>
              <a href="#" class="sidenav__menu-url">Single Post</a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li><a href="single-post.html" class="sidenav__menu-url">Style 1</a></li>
                <li><a href="single-post-politics.html" class="sidenav__menu-url">Style 2</a></li>
                <li><a href="single-post-fashion.html" class="sidenav__menu-url">Style 3</a></li>
                <li><a href="single-post-games.html" class="sidenav__menu-url">Style 4</a></li>
                <li><a href="single-post-videos.html" class="sidenav__menu-url">Style 5</a></li>
                <li><a href="single-post-music.html" class="sidenav__menu-url">Style 6</a></li>
              </ul>
            </li>
            <li><a href="shortcodes.html" class="sidenav__menu-url">Shortcodes</a></li>
          </ul>
        </li>        

      
      </ul>
    </nav>

    <div class="socials sidenav__socials"> 
      <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
        <i class="ui-google"></i>
      </a>
      <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a>
      <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
        <i class="ui-instagram"></i>
      </a>
    </div>
  </header> <!-- end sidenav -->

  <main class="main oh" id="main">

    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-block">
      <div class="container">
        <div class="row">

          <!-- Top menu -->
          <div class="col-lg-6">
            <!-- <ul class="top-menu">
              <li><a href="#">About</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Contact</a></li>
            </ul> -->
          </div>
          
          <!-- Socials -->
          <div class="col-lg-6">
            <div class="socials nav__socials socials--nobase socials--white justify-content-end"> 
              <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
              </a>
              <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
              </a>
              <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                <i class="ui-google"></i>
              </a>
              <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
              </a>
              <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div> <!-- end top bar -->        

    <!-- Navigation -->
    <header class="nav">
    @include('menu')
     
    </header> <!-- end navigation -->
  

    <!-- Trending Now -->
    @include('tinnhanh')

    <!-- Featured Posts Grid -->  
    @yield('tinnoibat')    
   
    <!-- end featured posts grid -->


  
    <div class="main-container container pt-24" id="main-container">         
      <!-- Content -->
      <div class="row">
        <!-- Posts -->
        <div class="col-lg-8 blog__content">
           @yield('noidungchinh')
           @yield('tintrongloai')
          <!-- Latest News -->
          @yield('tinmoitheotheloai')
        <!-- end latest news -->
        </div> <!-- end posts -->
        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">    
          @include('tinmoi')
          <!-- Widget Newsletter -->
          <aside class="widget widget_mc4wp_form_widget">
            <h4 class="widget-title">BẢN TIN</h4>
            <p class="newsletter__text">
              <i class="ui-email newsletter__icon"></i>
             ĐĂNG KÝ CHO TIN MỚI
            </p>
            <form class="mc4wp-form" method="post">
              <div class="mc4wp-form-fields">
                <div class="form-group">
                  <input type="email" name="EMAIL" placeholder="EMAIL " required="">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-lg btn-color" value="ĐĂNG KÝ">
                </div>
              </div>
            </form>
          </aside> <!-- end widget newsletter -->

          <!-- Widget Socials -->
          <aside class="widget widget-socials">
            <h4 class="widget-title">MẠNG XÃ HỘI</h4>
            <div class="socials socials--wide socials--large">
              <div class="row row-16">
                <div class="col">
                  <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                    <i class="ui-facebook"></i>
                    <span class="social__text">Facebook</span>
                  </a><!--
                  --><a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                    <i class="ui-twitter"></i>
                    <span class="social__text">Twitter</span>
                  </a><!--
                  --><a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                    <i class="ui-youtube"></i>
                    <span class="social__text">Youtube</span>
                  </a>
                </div>
                <div class="col">
                  <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                    <i class="ui-google"></i>
                    <span class="social__text">Google+</span>
                  </a><!--
                  --><a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                    <i class="ui-instagram"></i>
                    <span class="social__text">Instagram</span>
                  </a><!--
                  --><a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
                    <i class="ui-rss"></i>
                    <span class="social__text">Rss</span>
                  </a>
                </div>                
              </div>            
            </div>
          </aside> <!-- end widget socials -->
        </aside> <!-- end sidebar -->
      </div> <!-- end content -->
      <!-- Ad Banner 728 -->
    </div> <!-- end main container -->

    <!-- Footer -->
    <footer class="footer footer--dark">
      <div class="container">
        <div class="footer__widgets">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <aside class="widget widget-logo">
                <a href="index.html">
                  <img src="{{asset('layout')}}/upload/images/logomotocross.png" style="height:190px"  class="logo__img" alt="">
                </a>
                <p class="copyright">
                  © 2021 Motorcross | Made by <a href="https://deothemes.com">Motorcross</a>
                </p>
                <div class="socials socials--large socials--rounded mb-24">
                  <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                  <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                  <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                  <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                  <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                </div>
              </aside>
            </div>

            <div class="col-lg-2 col-md-6">
              <aside class="widget widget_nav_menu">
                <h4 class="widget-title">LIÊN KẾT HỮU ÍT</h4>
                <ul>
                  <li><a href="about.html">Chúng Tôi</a></li>
                  <li><a href="contact.html">Tin Tức</a></li>
                  <li><a href="categories.html">Quảng Cáo</a></li>
                  <li><a href="shortcodes.html">Hỗ Trợ</a></li>
                  <li><a href="shortcodes.html">Liên Hệ</a></li>
                </ul>
              </aside>
            </div>  

            <div class="col-lg-4 col-md-6">
              <aside class="widget widget-popular-posts">
              @include('tinfooter')
              </aside>              
            </div>
            <div class="col-lg-3 col-md-6">
              <aside class="widget widget_mc4wp_form_widget">
                <h4 class="widget-title">BẢN TIN</h4>
                <p class="newsletter__text">
                  <i class="ui-email newsletter__icon"></i>
                  Đăng ký nhận tin tức hàng ngày của chúng tôi 
                </p>
                <form class="mc4wp-form" method="post">
                  <div class="mc4wp-form-fields">
                    <div class="form-group">
                      <input type="email" name="EMAIL" placeholder="Email của bạn" required="">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-lg btn-color" value="Đăng Ký">
                    </div>
                  </div>
                </form>                
              </aside>
            </div>

          </div>
        </div>    
      </div> <!-- end container -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->

  
  <!-- jQuery Scripts -->
  <script src="{{asset('layout')}}/js/jquery.min.js"></script>
  <script src="{{asset('layout')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('layout')}}/js/easing.min.js"></script>
  <script src="{{asset('layout')}}/js/owl-carousel.min.js"></script>
  <script src="{{asset('layout')}}/js/flickity.pkgd.min.js"></script>
  <script src="{{asset('layout')}}/js/twitterFetcher_min.js"></script>
  <script src="{{asset('layout')}}/js/jquery.newsTicker.min.js"></script>  
  <script src="{{asset('layout')}}/js/modernizr.min.js"></script>
  <script src="{{asset('layout')}}/js/scripts.js"></script>

</body>
</html>