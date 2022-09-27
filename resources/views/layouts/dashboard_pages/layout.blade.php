@extends('layouts.dashboard_pages.layouttemplate')

{{-- The following are configs and Templates to use --}}
{{-- ---------------------------------------------- --}}
{{-- [CONF]: Needs to be changed to the correct values --}}
{{-- [TEMP]: Just copy the text. Its Mostly Commented --}}
{{-- [HINT]: Hints are usually there to reminds of the existence of Section --}}
{{-- [DONT]: Means dont edit or even remove --}}

{{-- ---------------------------------------------- --}}
{{-- [HINT]: "styles" a Section to display all css files at --}}
{{-- [HINT]: "scripts" a Section to display all js files at --}}
{{-- [HINT]: "content" a Section where all content should reside at --}}
{{-- [HINT]: "page_title" a Section where the current page describes it self. Found at under the App Name --}}
{{-- [HINT]: "page_type" (login) if its for login, (register) if its for registering --}}
{{-- ---------------------------------------------- --}}

{{-- [DONT]: Adding the most repetitive files to the dashboard --}}
@section('styles_permanent')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
@endsection
@section('scripts_permanent')
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>
@endsection

{{-- ---------------------------------------------- --}}
{{-- [CONF] MetaTag (Author) --}}
@section('meta_author','MoreForTech')

{{-- [CONF] MetaTag (Description) --}}
@section('meta_description','MoreforTech Application')

{{-- [CONF] Page Title --}}
@section('title','Dashboard Pages')

{{-- [CONF] App Name found at the very top of the side nav --}}
@section('app_name','My Dashboard')

@section('app_mainurl','#')