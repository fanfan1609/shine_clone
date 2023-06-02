<!DOCTYPE html>
<html lang="ja" data-loaded="false" data-scrolled="false" data-spmenu="closed">
<head>
    <meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, viewport-fit=cover">
	<meta name="robots" content="max-image-preview:large">
    <title>{{$title ?? config('web.title')}}</title>
    <link rel="canonical" href="https://shine-yoshiki.com/">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="website">
	<meta property="og:image" content="images/1-1.png">
	<meta property="og:title" content="{{$title ?? config("web.title")}}">
	<meta property="og:description" content="{{$description ?? config('web.description')}}">
	<meta property="og:url" content="{{config('web.url')}}">
	<meta property="og:site_name" content="{{config('web.site_name')}}">
	<meta name="twitter:card" content="summary_large_image">
	<link rel="icon" href="images/cropped-shinerogo2-2-32x32.png" sizes="32x32">
	<link rel="icon" href="images/cropped-shinerogo2-2-192x192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="images/cropped-shinerogo2-2-180x180.png">
	@include('common.ga')
	@include('common.css')
	<noscript>
		<link href="/css/noscript.css" rel="stylesheet">
	</noscript>
	@yield('css')
</head>
<body>
@include('common.svg')
@yield('content')
@include('common.js')
@yield('script')
</body>
    
</html>