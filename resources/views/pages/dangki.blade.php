<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{asset('frontend/css/dkdn.css')}}" />
    <!-- font roboto -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- form signup -->
    <div class="signup">
      <div class="signup__container">
        <h1>Đăng Ký</h1>
        <form action="">
          <h5>Username</h5>
          <input type="text" class="input-signup-username" />
          <h5>Email</h5>
          <input type="text" class="input-signup-username" />
          <h5>Password</h5>
          <input type="password" class="input-signup-password" />
          <h5>Confirm Password</h5>
          <input type="password" class="input-signup-password" />
          <button type="submit" class="signup__signInButton">Đăng Ký</button>
        </form>
        <a href="./login.html" class="signup__registerButton" style="color: rgb(48, 123, 244);"
          >Đã có tài khoản?</a
        >
      </div>
    </div>
  </body>
  <script src="{{asset('frontend/js/signup.js')}}"></script>
</html>