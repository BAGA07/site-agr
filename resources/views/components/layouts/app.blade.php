<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('assets_PlusAdmin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_PlusAdmin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_PlusAdmin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets_PlusAdmin/vendors/jquery-bar-rating/css-stars.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_PlusAdmin/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets_PlusAdmin/css/demo_1/style.css')}}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets_PlusAdmin/images/favicon.png')}}" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">




    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />
  
    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')
        

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

   <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('assets/js/contact.js')}}"></script>
    <script src="{{asset('assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/mail-script.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
   
   
   
    <script src="{{asset('assets_PlusAdmin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets_PlusAdmin/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('assets_PlusAdmin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets_PlusAdmin/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets_PlusAdmin/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets_PlusAdmin/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('assets_PlusAdmin/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('assets_PlusAdmin/vendors/flot/jquery.flot.stack.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets_PlusAdmin/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets_PlusAdmin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets_PlusAdmin/js/misc.js')}}"></script>
    <script src="{{asset('assets_PlusAdmin/js/settings.js')}}"></script>
    <script src="{{asset('assets_PlusAdmin/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets_PlusAdmin/js/dashboard.js')}}"></script>


    @livewireScripts

</body>

</html>