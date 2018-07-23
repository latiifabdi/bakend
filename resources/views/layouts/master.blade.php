<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
		<meta name="description" content="We are here to bridge the gap between Africa's information technology and that of technological giants like China and Japan through a build up of projects involving the two regions">
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/lity.css">
		<link rel="stylesheet" type="text/css" href="/css/slick.css">
		<link rel="stylesheet" href="/css/slick-theme.css">
		<link rel="stylesheet" href="/css/main.css">


	</head>
	<body class="font-sans text-white font-sans">
		<div id="app">
			@include('partials/top-header')
			
			<div>
				@yield('content')
			</div>
			


		</div>

		<script src="/js/app.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="/js/lity.js"></script>

		<script>
			$('.fade').slick({
			  dots: true,
			  infinite: true,
			  speed: 500,
			  autoplay: true,
			  fade: true,
			  cssEase: 'linear'
			});
		</script>
		
	</body>
</html>