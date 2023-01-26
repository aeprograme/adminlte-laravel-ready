<body class="hold-transition @yield('page_type')-page">
    <div class="@yield('page_type')-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="@yield('app_mainurl')" class="h1">@yield('app_name')</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">@yield('page_title')</p>
                @yield('content')
            </div>

        </div>

    </div>