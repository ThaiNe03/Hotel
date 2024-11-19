<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Log in</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="{{asset('backend/dist')}}/css/all.min.css">
      <link rel="stylesheet" href="{{asset('backend/plugins')}}/icheck-bootstrap/icheck-bootstrap.min.css">
      <link rel="stylesheet" href="{{asset('backend/dist')}}/css/adminlte.css?v=3.2.0">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
      <div class="login-logo">
         <a href="../../index2.html"><b>Admin</b></a>
      </div>
      <div class="card">
         <div class="card-body login-card-body">
            <p class="login-box-msg">Đăng nhập</p>
            <form action="{{route('admin.logon')}}" method="post">
               @csrf
               <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Email" name="email">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                     </div>
                  </div>
               </div>
               <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password" name="password">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-8">
                     <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                        Lưu thông tin
                        </label>
                     </div>
                  </div>
                  <div class="col-4">
                     <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                  </div>
               </div>
            </form>
            <div class="social-auth-links text-center mb-3">
               <p class="mb-1">
                  <a href="forgot-password.html">Quên mật khẩu ?</a>
               </p>
               <p class="mb-0">
                  <a href="register.html" class="text-center">Đăng ký</a>
               </p>
            </div>
         </div>
      </div>
      <script src="../../plugins/jquery/jquery.min.js"></script>
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
   </body>
</html>