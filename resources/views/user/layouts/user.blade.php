<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}">
</head>
<body class="home landingpage">
		@yield('content')
		<script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>
		@yield('script')

</body>
</html>