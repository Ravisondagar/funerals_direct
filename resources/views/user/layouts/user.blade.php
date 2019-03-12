<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}">
</head>
<body class="home landingpage">
	<div class="admin-dashboard clearfix">
		@include('user.include.portal.header')
		@include('user.include.portal.sidebar')
		@yield('content')

		<script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>
		@yield('script')
		<script type="text/javascript">
			$(document).ready(function(){
				$('#logout').click(function(e){
					e.preventDefault(this);
					$('#form').submit();
				});
			});
		</script>
</body>
</html>