<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

  </head>
  <body>
    <header>
      <h1>Stock Order System</h1>
      <a class="alogin" href="/logout">Logout</a>
    </header>
      <div class="left">
        <ul class="categories">
          <li class="listcat"><a href="/category">Category 1</a></li>
          <li class="listcat"><a href="/category">Category 2</a></li>
          <li class="listcat"><a href="/category">Category 3</a></li>
          <li class="listcat"><a href="/category">Category 4</a></li>
        </ul>
      </div>
      @yield('content')
      <div class="right">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    <footer>
      <h1>Copyright © 2017</h1>
    </footer>
  </body>
</html>
