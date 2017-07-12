<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>

  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


</head>

<body>
  <div class="login-page">
  <div class="form-reg">
    <form method="post" action="/" class="login-form">
      {{ csrf_field() }}
      <input type="text" name="email" placeholder="Username"/>
      <input type="password" name="pass" placeholder="Password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="/user/create">Create an account</a></p>
    </form>
  </div>
</div>

  <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>

</body>
</html>
