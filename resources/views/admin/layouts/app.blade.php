<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Marzbo @yield('title', 'Marzbo')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/img/favicon.ico') }}" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Styles -->
    @vite(['resources/sass/assets/loader.scss', 'resources/sass/assets/plugins.scss'])
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @stack('styles')
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>

<body @yield('body-class')>

    <!-- BEGIN LOADER -->
    @include('admin.layouts.partials.loader')
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('admin.layouts.partials.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN BREADCRUMBS  -->
    @include('admin.layouts.partials.subnav')
    <!--  END BREADCRUMBS  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('admin.layouts.partials.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing layout-spacing">
                    <div class="col-12">
                        <h1>
                            @yield('title', 'Default title')
                        </h1>
                    </div>

                    @yield('content')
                </div>
            </div>

            @include('admin.layouts.partials.footer')
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/loader.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @stack('script')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>
