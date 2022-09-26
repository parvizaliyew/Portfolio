<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Resume')</title>
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/live-resume.css">
</head>

<body>
    <header>
        <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="{{asset('front/')}}/assets/images/share.svg" alt="share" class="btn-img">
            SHARE</button>
        <nav class="collapsible-nav" id="collapsible-nav">
            <a href="{{ route('index') }}" class="nav-link {{ Route::is('index') ? 'active' : null }}">HOME</a>
            <a href="{{ route('resume') }}" class="nav-link {{ Route::is('resume') ? 'active' : null }}">RESUME</a>
            <a href="{{ route('portfolio') }}" class="nav-link {{ Route::is('portfolio') ? 'active' : null }}">PORTFOLIO</a>
            <a href="{{ route('blog') }}" class="nav-link {{ Route::is('blog') ? 'active' : null }}">BLOG</a>
            <a href="{{ route('contact') }}" class="nav-link {{ Route::is('contact') ? 'active' : null }}">CONTACT</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="{{asset('front/')}}/assets/images/hamburger.svg" alt="hamburger"></button>
    </header>
    <div class="content-wrapper">