<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>       

        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">

        <link rel="stylesheet" href={{asset('assets/css/all.min.css')}}>
        <link rel="stylesheet" href={{asset('assets/css/slick.css')}}>
        <link rel="stylesheet" href={{asset('assets/css/aos.css')}}>
        <link rel="stylesheet" href={{asset('assets/css/animate.css')}}>
        <link rel="stylesheet" href={{asset('assets/css/bootstrap.min.css')}}>
        <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
        <link rel="stylesheet" href={{asset('assets/css/media-query.css')}}>
    </head>
    <body class="">
        {{$slot}}

        
		<!--Scroll Top to Bottom Section Start -->
		<div class="scroll-top" data-scroll="up" style="">
			<svg class="border-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
			</svg>
		</div>
		<!--Scroll Top to Bottom Section End -->

	</div>

    <!-- Jquery JS -->
    
	<script src={{assets("assets/js/jquery-min-3.6.0.js")}}></script>
	<script src={{assets("assets/js/slick.min.js")}}></script>
	<script src={{assets("assets/js/aos.js")}}></script>
	<script src={{assets("assets/js/wow.min.js")}}></script>
	<script src={{assets("assets/js/tilt.min.js")}}></script>
	<script src={{assets("assets/js/bootstrap.bundle.min.js")}}></script>
	<script src={{assets("assets/js/custom.js")}}></script>
    </body>
</html>
