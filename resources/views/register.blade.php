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
  <div class="reg-page">
    <div class="form-reg">
      <form method="post" action="/user" class="register-form">
        {{ csrf_field() }}
        <input type="text" name="email" placeholder="Email"/>
        <input type="password" name="pass" placeholder="Password"/>
        <input type="password" name="passr" placeholder="Repeat Password"/>
        <button type="submit">register</button>
        <p class="message">Already registered? <a href="/">Login</a></p>
      </form>
    </div>
  </div>

  <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>

</body>
</html>
