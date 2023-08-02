 <!-- jQuery -->
 <script src="{{ URL::asset('/assets/js/jquery-3.6.4.min.js') }}"></script>

 <!-- Bootstrap Core JS -->
 <script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

 @if (
     !Route::is([
         'coming-soon',
         'error-404',
         'error-500',
         'login',
         'register',
         'reset-password',
         'forgot-password',
         'maintenance',
     ]))
     @if (
         !Route::is([
             'listing-details',
             'booking-payment',
             'pricing',
             'faq',
             'gallery',
             'our-team',
             'terms-condition',
             'privacy-policy',
             'blog-list',
             'blog-grid',
             'blog-details',
         ]))
         <!-- Select2 JS -->
         <script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js') }}"></script>
     @endif
     <!-- Aos -->
     <script src="{{ URL::asset('/assets/plugins/aos/aos.js') }}"></script>

     @if (!Route::is(['register', 'login', 'reset-password', 'forgot-password', 'maintenance']))
         <!-- Top JS -->
         <script src="{{ URL::asset('/assets/js/backToTop.js') }}"></script>
     @endif
 @endif
 @if (Route::is([
         'blog-details',
         'blog-grid',
         'blog-list',
         'booking-payment',
         'listing-details',
         'listing-grid',
         'listing-list',
     ]))
     <!-- Sticky Sidebar JS -->
     <script src="{{ URL::asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
     <script src="{{ URL::asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
 @endif

 @if (Route::is(['about-us', 'index']))
     <!-- counterup JS -->
     <script src="{{ URL::asset('/assets/js/jquery.waypoints.js') }}"></script>
     <script src="{{ URL::asset('/assets/js/jquery.counterup.min.js') }}"></script>
 @endif
 @if (Route::is(['booking-payment', 'booking', 'about-us', 'index', 'listing-details']))
     <!-- Owl Carousel JS -->
     <script src="{{ URL::asset('/assets/js/owl.carousel.min.js') }}"></script>
 @endif

 @if (Route::is(['listing-details', 'listing-grid', 'about-us', 'index', 'listing-list']))
     <!-- Datepicker Core JS -->
     <script src="{{ URL::asset('/assets/plugins/moment/moment.min.js') }}"></script>
     <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
 @endif

 @if (Route::is(['gallery']))
     <!-- Fancybox JS -->
     <script src="{{ URL::asset('/assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
 @endif

 @if (Route::is(['booking-payment', 'booking', 'listing-details']))
     <!-- Slick JS -->
     <script src="{{ URL::asset('/assets/plugins/slick/slick.js') }}"></script>
 @endif

 @if (Route::is(['listing-grid', 'listing-list']))
     <!-- Rangeslider JS -->
     <script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
     <script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/custom-rangeslider.js') }}"></script>
 @endif
 @if (Route::is(['pricing', 'faq', 'our-team', 'terms-condition', 'privacy-policy']))
     <!-- Fearther JS -->
     <script src="{{ URL::asset('/assets/js/feather.min.js') }}"></script>
 @endif

 <!-- Custom JS -->
 <script src="{{ URL::asset('/assets/js/script.js') }}"></script>
