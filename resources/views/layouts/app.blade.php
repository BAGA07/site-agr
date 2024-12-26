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