<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('errorMessage')</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/errors.css') }}" />
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="page-error">
		<div class="page-error">
			<div class="page-error-error">
				<h3>@yield('errorDescription')</h3>
				{{-- <h1><span>4</span><span>0</span><span>4</span></h1> --}}
				<h1>@yield('errorDesign')</h1>
			</div>
			<h2>@yield('errorMessage')</h2>
		</div>
		<a onclick="window.history.back();return false;" href="javascript:void(0)" class="btn-back">Go Back</a>
	</div>


</body>

</html>
