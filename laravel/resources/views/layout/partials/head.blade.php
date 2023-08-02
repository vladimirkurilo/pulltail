<link rel="stylesheer" href="{{ ('resources/css/app.css')}}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/all.min.css') }}">

@if (
    !Route::is([
        'coming-soon',
        'error-404',
        'error-500',
        'register',
        'login',
        'reset-password',
        'forgot-password',
        'maintenance',
    ]))
    @if (!Route::is(['pricing', 'faq', 'gallery', 'our-team', 'terms-condition', 'privacy-policy']))
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ url('assets/plugins/select2/css/select2.min.css') }}">
    @endif
    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/aos/aos.css') }}">
@endif

@if (Route::is(['about-us', 'index', 'listing-details', 'listing-grid']))
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-datetimepicker.min.css') }}">
@endif

@if (Route::is(['booking-payment', 'booking', 'about-us', 'index', 'listing-details']))
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
@endif

@if (Route::is(['gallery']))
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
@endif

@if (Route::is(['listing-grid', 'listing-list']))
    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
@endif

@if (!Route::is(['error-404', 'error-500']))
    <!-- Fearther CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/feather.css') }}">
@endif

<!-- Main CSS -->
<link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
