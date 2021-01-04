<!DOCTYPE html>
<html>
<head>
	@include('admin.layouts.head')
</head>
<body class="ms-body ms-aside-left-open ms-primary-theme ">
	@include('admin.layouts.header')
	<div class="main-content" id="panel">
		@include('admin.layouts.sidebar')
		@yield('content')
	@include('admin.layouts.footer')
	</div>
</body>
</html>