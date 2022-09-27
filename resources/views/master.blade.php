
<!doctype html>
<html lang="en" dir="ltr">
    <head>
        @include('partials._styles-assets')
    </head>
    <body class="  ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>
    </div>
    <!-- loader END -->

    <!-- Aside sidebar -->
    @include('partials._sidebar')
    <!-- Aside sidebar -->

    <!-- Contenu pricipale -->
    @yield('content')
    <!-- Wrapper End-->


    <!-- Library Bundle Script -->
    <script src="{{asset('assets/js/core/libs.min.js')}}"></script>
    <!-- Plugin Scripts -->

    <!-- Tour plugin Start -->
{{--    <script src="{{asset('assets/vendor/sheperd/dist/js/sheperd.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets/js/plugins/tour.js')}}" defer></script>--}}

    <!-- Flatpickr Script -->
    <script src="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flatpickr.js')}}" defer></script>

    <!-- Slider-tab Script -->
    <script src="{{asset('assets/js/plugins/slider-tabs.js')}}"></script>

    <!-- Select2 Script -->
    <script src="{{asset('assets/js/plugins/select2.js')}}" defer></script>


    <!-- Lodash Utility -->
    <script src="{{asset('assets/vendor/lodash/lodash.min.js')}}"></script>
    <!-- Utilities Functions -->
    <script src="{{asset('assets/js/iqonic-script/utility.min.js')}}"></script>
    <!-- Settings Script -->
    <script src="{{asset('assets/js/iqonic-script/setting.min.js')}}"></script>
    <!-- Settings Init Script -->
    <script src="{{asset('assets/js/setting-init.js')}}"></script>
    <!-- External Library Bundle Script -->
    <script src="{{asset('assets/js/core/external.min.js')}}"></script>
    <!-- Widgetchart Script -->
    <script src="{{asset('assets/js/charts/widgetcharts.js')}}" defer></script>
    <!-- Dashboard Script -->
    <script src="{{asset('assets/js/charts/dashboard.js')}}" defer></script>
    <!-- Hopeui Script -->
    <script src="{{asset('assets/js/hope-ui.js')}}" defer></script>
    <script src="{{asset('assets/js/hope-uipro.js')}}" defer></script>
    </body>

</html>
