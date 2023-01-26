<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    
        @include('layouts.dashboard.partial.preloader')
    
      @include('layouts.dashboard.partial.topnav')

      @include('layouts.dashboard.partial.sidenav')
    
      <div class="content-wrapper">
        
        @include('layouts.dashboard.partial.breadcrumb')
    

        <section class="content">
          <div class="container-fluid">
            @yield('content')
          </div>
        </section>

      </div>

      <footer class="main-footer">
        <strong>@yield('copyright')</strong>
        All rights reserved.
      </footer>
    </div>
