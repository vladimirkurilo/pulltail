 @if (!Route::is(['forgot-password', 'login', 'register', 'reset-password']))
     <!-- Header -->
     <header class="header">
         <div class="container-fluid">
             <nav class="navbar navbar-expand-lg header-nav">
                 <div class="navbar-header">
                     <a id="mobile_btn" href="javascript:void(0);">
                         <span class="bar-icon">
                             <span></span>
                             <span></span>
                             <span></span>
                         </span>
                     </a>
                     <a href="{{ url('/') }}" class="navbar-brand logo">
                         <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                     </a>
                     <a href="{{ url('/') }}" class="navbar-brand logo-small">
                         <img src="{{ URL::asset('/assets/img/logo-small.png') }}" class="img-fluid" alt="Logo">
                     </a>
                 </div>
                 <div class="main-menu-wrapper">
                     <div class="menu-header">
                         <a href="{{ url('/') }}" class="menu-logo">
                             <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                         </a>
                         <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                 class="fas fa-times"></i></a>
                     </div>
                     <ul class="main-nav">
                         <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                         <li
                             class="has-submenu {{ Request::is('listing-grid', 'listing-list', 'listing-details') ? 'active' : '' }}">
                             <a href="">Listings <i class="fas fa-chevron-down"></i></a>
                             <ul class="submenu">
                                 <li class="{{ Request::is('listing-grid') ? 'active' : '' }}"><a
                                         href="{{ url('listing-grid') }}">Listing Grid</a></li>
                                 <li class="{{ Request::is('listing-list') ? 'active' : '' }}"><a
                                         href="{{ url('listing-list') }}">Listing List</a></li>
                                 <li class="{{ Request::is('listing-details') ? 'active' : '' }}"><a
                                         href="{{ url('listing-details') }}">Listing Details</a></li>
                             </ul>
                         </li>
                         <li
                             class="has-submenu {{ Request::is('about-us', 'booking-payment', 'booking', 'invoice-details', 'register', 'login', 'forgot-password', 'reset-password', 'error-404', 'error-400', 'pricing', 'faq', 'gallery', 'our-team', 'testimonial', 'terms-condition', 'privacy-policy', 'maintenance', 'coming-soon') ? 'active' : '' }}">
                             <a href="">Pages <i class="fas fa-chevron-down"></i></a>
                             <ul class="submenu">
                                 <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a
                                         href="{{ url('about-us') }}">About Us</a></li>
                                 <li class="has-submenu">
                                     <a href="javascript:void(0);">Authentication</a>
                                     <ul
                                         class="submenu {{ Request::is('register', 'login', 'forgot-password', 'reset-password') ? 'active' : '' }}">
                                         <li class="{{ Request::is('register') ? 'active' : '' }}"><a
                                                 href="{{ url('register') }}">Signup</a></li>
                                         <li class="{{ Request::is('login') ? 'active' : '' }}"><a
                                                 href="{{ url('login') }}">Signin</a></li>
                                         <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a
                                                 href="{{ url('forgot-password') }}">Forgot Password</a></li>
                                         <li class="{{ Request::is('reset-password') ? 'active' : '' }}"><a
                                                 href="{{ url('reset-password') }}">Reset Password</a></li>
                                     </ul>
                                 </li>
                                 <li
                                     class="has-submenu {{ Request::is('booking-payment', 'booking', 'invoice-details') ? 'active' : '' }}">
                                     <a href="javascript:void(0);">Booking</a>
                                     <ul class="submenu">
                                         <li class="{{ Request::is('booking-payment') ? 'active' : '' }}"><a
                                                 href="{{ url('booking-payment') }}">Booking Checkout</a></li>
                                         <li class="{{ Request::is('booking') ? 'active' : '' }}"><a
                                                 href="{{ url('booking') }}">Booking</a></li>
                                         <li class="{{ Request::is('invoice-details') ? 'active' : '' }}"><a
                                                 href="{{ url('invoice-details') }}">Invoice Details</a></li>
                                     </ul>
                                 </li>
                                 <li class="has-submenu {{ Request::is('error-404', 'error-400') ? 'active' : '' }}">
                                     <a href="javascript:void(0);">Error Page</a>
                                     <ul class="submenu">
                                         <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a
                                                 href="{{ url('error-404') }}">404 Error</a></li>
                                         <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a
                                                 href="{{ url('error-500') }}">500 Error</a></li>
                                     </ul>
                                 </li>
                                 <li class="{{ Request::is('pricing') ? 'active' : '' }}"><a
                                         href="{{ url('pricing') }}">Pricing</a></li>
                                 <li class="{{ Request::is('faq') ? 'active' : '' }}"><a
                                         href="{{ url('faq') }}">FAQ</a></li>
                                 <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a
                                         href="{{ url('gallery') }}">Gallery</a></li>
                                 <li class="{{ Request::is('our-team') ? 'active' : '' }}"><a
                                         href="{{ url('our-team') }}">Our Team</a></li>
                                 <li class="{{ Request::is('testimonial') ? 'active' : '' }}"><a
                                         href="{{ url('testimonial') }}">Testimonials</a></li>
                                 <li class="{{ Request::is('terms-condition') ? 'active' : '' }}"><a
                                         href="{{ url('terms-condition') }}">Terms & Conditions</a></li>
                                 <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a
                                         href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                 <li class="{{ Request::is('maintenance') ? 'active' : '' }}"><a
                                         href="{{ url('maintenance') }}">Maintenance</a></li>
                                 <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a
                                         href="{{ url('coming-soon') }}">Coming Soon</a></li>
                             </ul>
                         </li>
                         <li
                             class="has-submenu {{ Request::is('blog-list', 'blog-grid', 'blog-details') ? 'active' : '' }}">
                             <a href="">Blog <i class="fas fa-chevron-down"></i></a>
                             <ul class="submenu">
                                 <li class="{{ Request::is('blog-list') ? 'active' : '' }}"><a
                                         href="{{ url('blog-list') }}">Blog List</a></li>
                                 <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a
                                         href="{{ url('blog-grid') }}">Blog Grid</a></li>
                                 <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a
                                         href="{{ url('blog-details') }}">Blog Details</a></li>
                             </ul>
                         </li>
                         <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a
                                 href="{{ url('contact-us') }}">Contact</a></li>
                         <li class="login-link">
                             <a href="{{ url('register') }}">Sign Up</a>
                         </li>
                         <li class="login-link">
                             <a href="{{ url('login') }}">Sign In</a>
                         </li>
                     </ul>
                 </div>
                 <ul class="nav header-navbar-rht">
                     <li class="nav-item">
                         <a class="nav-link header-login" href="{{ url('login') }}"><span><i
                                     class="fa-regular fa-user"></i></span>Sign In</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link header-reg" href="{{ url('register') }}"><span><i
                                     class="fa-solid fa-lock"></i></span>Sign Up</a>
                     </li>
                 </ul>
             </nav>
         </div>
     </header>
     <!-- /Header -->
 @endif

 @if (Route::is(['forgot-password', 'login', 'register', 'reset-password']))
     <!-- Header -->
     <header class="log-header">
         <a href="{{ url('/') }}"><img class="img-fluid logo-dark" src="assets/img/logo.svg"
                 alt="Logo"></a>
     </header>
     <!-- /Header -->
 @endif
