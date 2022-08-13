<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->
    <script src="{{asset('assets/libs/feather-icons/dist/feather.min.js')}}"></script>
    <link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/dropzone/dist/dropzone.css')}}"  rel="stylesheet">
    <link href="{{asset('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/libs/prismjs/themes/prism-okaidia.min.css')}}" rel="stylesheet">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    <div id="db-wrapper">
      <!-- Sidebar -->
      @include('partials.sidebar')
      <!-- Page content -->
      <div id="page-content">
        <!-- navbar -->
        @include('partials.navbar')

        @hasSection('dashboard')
          <!-- Dashboard -->
          <div class="bg-primary pt-10 pb-21"></div>
          <div class="container-fluid mt-n22 px-6">
              @yield('dashboard')
          </div>
        @endif

        @hasSection('content_page')
          <!-- Normal Page -->
          <div class="container-fluid p-6">
              @yield('content_page')
          </div>
        @endif
      </div>
    </div>

    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/libs/prismjs/prism.js')}}"></script>
    <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js')}}"></script>
    <script src="{{asset('assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js')}}"></script>
    <!-- Optional JavaScript -->
    @yield('custom_script')

    <!-- Theme JS -->
    <script src="{{asset('assets/js/theme.min.js')}}"></script>
</body>

</html>
