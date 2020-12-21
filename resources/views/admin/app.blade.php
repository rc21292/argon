<!DOCTYPE html>
<html>
<head>
	@include('admin.layouts.head')
</head>
<body class="ms-body ms-aside-left-open ms-primary-theme ">
	@include('admin.layouts.sidebar')
	@include('admin.layouts.header')
	
	@yield('content')

	@include('admin.layouts.footer')
</body>
</html>