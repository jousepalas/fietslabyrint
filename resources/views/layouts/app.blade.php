<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="mb-48">
<div id="app">
<nav class="flex justify-between items-center mb-4">

    <a href="/"><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo" /></a>
    <ul class="flex space-x-6 mr-6 text-lg">
      @auth
      <li>
        <span class="font-bold uppercase">
          Welcome {{auth()->user()->name}}
        </span>
      </li>
      <li>
        <a href="/index" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Customers</a>
      </li>
      <li>
        <form class="inline" method="POST" action="/logout">
          @csrf
          <button type="submit">
            <i class="fa-solid fa-door-closed"></i> Logout
          </button>
        </form>
      </li>
      @else
      <li>
        <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
      </li>
      <li>
        <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
      </li>
      @endauth
    </ul>
  </nav>
  
  <main>
  @yield('content')
  </main>
  <footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022</p>
  </footer>

  <x-flash-message />

  <div class="col-md-6 offset-md-4">
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="/index">Back </a>
    </li>
  </ul>
        </div>
  </div>
</body>
</html>
