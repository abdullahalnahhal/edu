<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    @include('layouts.head')
</head>
<body>
	@include('layouts.preloader')
	<!-- Main wrapper  -->
    <div id="main-wrapper">
    	@yield('content')
    </div>
	@include('layouts.foot')
</body>
</html>