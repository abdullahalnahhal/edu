<html>
<head>
	
	<title>@yield('title')</title>
	<!-- Meta Data -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="abdullahalnahhal@gmail.com">
    @include('layouts.head')
	@stack('css')
</head>
<body class="fix-header fix-sidebar">
	@include('layouts.preloader')
	<!-- Main wrapper  -->
	<div id="main-wrapper">
		@include('layouts.header')
		@include('layouts.left-sidebar')
		<!-- Page wrapper  -->
		<div class="page-wrapper">
			<!-- Bread crumb -->
			@yield('bread-crump')
			<!-- End Bread crumb -->
			<!-- Container fluid  -->
			<div class="container-fluid">
				@yield('content')
			</div>
			<!-- End Container fluid  -->
		</div>
		<!-- End Page wrapper  -->
	</div>
	@if($errors->any())
		@foreach($errors->all() as $error)
		<div class="alert alert-dark alert-dismissible fade show" style="position: fixed;bottom: 0px;right:0px;">
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	        <strong>@lang('common.Error')!</strong> {{$error}}
	    </div>
	    @endforeach
    @endif
    @if(session('created'))
    <div class="alert alert-Warning alert-dismissible fade show" style="position: fixed;bottom: 0px;right:0px;">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	    <strong>@lang('common.Created')!</strong> {{session('created')}}
	</div>
    @endif
    @if(session('updated'))
    <div class="alert alert-primary alert-dismissible fade show" style="position: fixed;bottom: 0px;right:0px;">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	    <strong>@lang('common.Updated')!</strong> {{session('updated')}}
	</div>
    @endif
    @if(session('deleted'))
    <div class="alert alert-info alert-dismissible fade show" style="position: fixed;bottom: 0px;right:0px;">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	    <strong>@lang('common.Deleted')!</strong> {{session('deleted')}}
	</div>
    @endif
	@include('layouts.foot')
	@stack('js')
	<script>
		@if ($errors->any() || session('created') || session('updated')) {
			$(".alert-dismissible").fadeOut(8000);
		}
		@endif
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip(); 
	});
	</script>
</body>
</html>