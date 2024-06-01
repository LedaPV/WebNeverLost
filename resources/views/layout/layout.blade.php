<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- conexión con el css (style_web) --}}
    <link rel="stylesheet" href="{{asset('css/style_web.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/style_contentMenuBar.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/style_contentFooter.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/style_hovers/style_hoverHeader.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/style_hovers/style_hoverFooter.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/style_hovers/style_hoverHome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_hovers/style_hoverRecursos.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_hovers/style_hoverFuncionamiento.css')}}">   
    <link rel="stylesheet" href="{{asset('css/style_hovers/style_hoverPruebaNeverLost.css')}}"> 
    
    {{-- fuente de la página web --}}
        {{-- Montserrat --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        {{-- Poiret One --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

        {{-- Ubuntu --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        
        {{-- Plus Jakarta Sans --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

        {{-- Prompt --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <title>@yield('title')</title>
</head>
<body>
    @include('layout.menu') 

    @yield('content')

    @include('layout.footer')

</body>
</html>