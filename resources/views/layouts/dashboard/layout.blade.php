@extends('layouts.dashboard.layouttemplate')

{{-- The following are configs and Templates to use --}}
{{-- ---------------------------------------------- --}}
{{-- [CONF]: Needs to be changed to the correct values --}}
{{-- [TEMP]: Just copy the text. Its Mostly Commented --}}
{{-- [HINT]: Hints are usually there to reminds of the existence of Section --}}
{{-- [DONT]: Means dont edit or even remove --}}

{{-- ---------------------------------------------- --}}
{{-- [HINT]: "styles" a Section to display all css files at --}}
{{-- [HINT]: "scripts" a Section to display all js files at --}}
{{-- [HINT]: "title" is a Section where the Page title will be displayed --}}
{{-- [HINT]: "sidenav_items" is a Section where all side nav menu items go to. Template can be found in [TEMP] section --}}
{{-- [HINT]: "breadcrumb_parent" is section of the previous page name that the current page falls under --}}
{{-- [HINT]: "breadcrumb_parent_url" is section of the previous page link that the current page falls under --}}
{{-- [HINT]: "breadcrumb_current" is the current page name --}}
{{-- [HINT]: "content" a Section where all content should reside at --}}
{{-- [HINT]: "topnav_user_menu" a Section where all TopNav user menu items display in --}}
{{-- ---------------------------------------------- --}}

{{-- [TEMP] TopNav user menu items --}}
{{-- 
    <a href="#Item_Url_here" class="dropdown-item">
    <i class="fas fa-envelope mr-2"></i> Item name here
  </a>
   --}}


{{-- [TEMP] Side nav Items (Without having children items) --}}
{{-- 
    <li class="nav-item">
    <a href="pages/gallery.html" class="nav-link">
      <i class="nav-icon far fa-image"></i>
      <p>
        Gallery
      </p>
    </a>
  </li> 
  --}}

  {{-- [TEMP] Side nav Items (With children items) --}}
  {{-- 
    <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-table"></i>
      <p>
        Tables
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="pages/tables/simple.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Simple Tables</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/tables/data.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>DataTables</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/tables/jsgrid.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>jsGrid</p>
        </a>
      </li>
    </ul>
  </li> 
  --}}
{{-- ---------------------------------------------- --}}

{{-- [DONT]: Adding the most repetitive files to the dashboard --}}
@section('styles_permanent')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
@endsection
@section('scripts_permanent')
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>
@endsection

{{-- ---------------------------------------------- --}}
{{-- [CONF] MetaTag (Author) --}}
@section('meta_author')
MoreForTech
@endsection
{{-- [CONF] MetaTag (Description) --}}
@section('meta_description','MoreforTech Application')
{{-- [CONF] Preloader Image --}}
@section('preloader_image','#')

{{-- [CONF] Copyright Section in footer --}}
@section('copyright')
Copyright &copy; 2022 <a href="https://morefortech.com">MoreForTech</a>.
@endsection

{{-- [CONF] App Logo found at the very top of the side nav --}}
@section('app_logo')
#
@endsection

{{-- [CONF] App Name found at the very top of the side nav --}}
@section('app_name','My Dashboard')

{{-- [CONF] Name and Image of the user (should be loaded from a Provider File) --}}
@section('user_name')
Ahmed
@endsection
@section('user_image')
#
@endsection

@section('user_url','#')

{{-- [CONF] Home URL (mainly the home url for the dashboard) --}}
@section('home_url','#')