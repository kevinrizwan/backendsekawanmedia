@include('layout.top')

<body class="landing-page">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper landing-page">
        @include('layout.header')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            @yield('content')
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('layout.bottom')

    </div>
</body>

</html>