<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}">
</head>
<body class="home">
	<img src="{!! asset('project/images/bg-img.jpg') !!}">
	@include('user/include/header3')
		@yield('content')
		<script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>
		@yield('script')

	@include('user/include/footer3')	
</body>
</html>