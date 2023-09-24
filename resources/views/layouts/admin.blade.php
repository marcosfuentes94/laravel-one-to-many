<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <div class="container-full">
            <div class="row">

                <div class="col-12">
                    <div class="d-flex justify-content-around bg-dark">
                        <header class="navbar navbar-dark sticky-top bg-dark  p-2 shadow">
                            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 align-baseline title mt-2" href="/">BOOLFOLIO</a>
                            <ul class="nav mx-5">
                                <li >
                                    <a class="nav-link text-white {{Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : ''}}" href="{{route('admin.dashboard')}}">
                                        <i class="fa-solid fa-tachometer-alt fa-md ">Dashboard</i>
                                    </a>
                                    
                                </li>
                                <li >
                                    <a class="nav-link text-white {{Route::currentRouteName() == 'admin.posts.index' ? 'bg-secondary' : ''}}" href="{{route('admin.posts.index')}}">
                                    <i class="fa-solid fa-signs-post mx-2">posts</i>
                                    </a>
                                    
                                </li>
                                <li >
                                    <a class="nav-link text-white {{Route::currentRouteName() == 'admin.categories.index' ? 'bg-secondary' : ''}}" href="{{route('admin.categories.index')}}">
                                    <i class="fa-solid fa-signs-post mx-2">category</i>
                                    </a>
                                    
                                </li>
                               
                            </ul>
                        </header>

                    </div>
                </div>
                
        
                </div>
            </div>
        </div>
                    
        
                   
                        
                        
                       
        


        

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @yield('content')
</main>
    </div>
</body>

</html>