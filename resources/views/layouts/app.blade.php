<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="{{ asset('template/dist/js/dark-mode-switch.js') }}" defer></script>
    
        <script src="{{ asset('template/dist/js/ dark-mode-switch.min.js') }}" defer></script>

    <!-- Scripts -->
  
   

<!-- date picker-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"defer></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<!-- date picker-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="{{asset('template/dist/css/dark-mode.css')}}" rel="stylesheet">
       
            <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
    

    <!-- date picker-->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- date picker-->

</head>
<body>
<div class="container d-flex p-3 mx-auto w-100 flex-column">
    <header class="mb-auto">
  

          <div class="form-check form-switch">
            <input type="checkbox" class="form-check-input center" id="darkSwitch">
            <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
          </div>
        </div>
        </header>
    <div id="app">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">  {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    @if(auth()->check()&& auth()->user()->role->name === 'patient')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my.booking') }}">{{ __('My Booking') }}</a>
                            </li>
                        @endif
                        @if(auth()->check()&& auth()->user()->role->name === 'patient')
                            <li class="nav-item">
                                <a style="color: rgb(72 132 220); font-size:16px; font-weight: bold;" class="nav-link" href="{{ route('my.prescription') }}" style="color: rgb(72 132 220); font-size:16px; font-weight: bold;">{{ __('My Prescriptions') }}</a>
                            </li>
                        @endif
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(auth()->check()&& auth()->user()->role->name === 'patient')
                                    <a href="{{url('user-profile')}}"  class="dropdown-item">Profile</a>
                                    @else
                                    <a href="{{url('dashboard')}}"  class="dropdown-item">Dashboard</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
    var dateToday = new Date();
        $(function() {
            $("#datepicker").datepicker({
                dateFormat:"yy-mm-dd",
                showButtonPanel:true,
                numberOfMonths:2,
                minDate:dateToday,
            });
        });
    </script>
  
    <style type="text/css">
        body{
            background: #fff;
        }
        .ui-corner-all{
            background: red;
            color: #fff;
        }
        label.btn {
            padding: 0;
        }
        label.btn input {
            opacity: 0;
            position: absolute;
        }
        label.btn span {
            text-align: center;
            padding: 6px 12px;
            display: block;
            min-width: 80px;
        }
        label.btn input:checked+span {
            background-color: rgb(80, 110, 228);
            color: #fff;
        }
    </style>
    
 
   
</body>
</html>
