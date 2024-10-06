<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Glassmorphism Forgot Password</title>
  <link rel="stylesheet" href="{{ asset('styleolvi.css') }}">
</head>
<body>
<section class="container">
    <div class="forgot-container">
        <div class="circle circle-one"></div>
        <div class="form-container">
            <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
            <h1 class="opacity">FORGOT PASSWORD</h1>
            <form>
                <input type="email" placeholder="EMAIL" />
                <button class="opacity">SUBMIT</button>
            </form>
            <div class="login-register opacity">
                <a href="/login">LOGIN</a>
                <a href="/loginregis">REGISTER</a>
            </div>
        </div>
        <div class="circle circle-two"></div>
    </div>
    <div class="theme-btn-container"></div>
</section>
<script src="{{ asset('scriptolvi.js') }}"></script>
</body>
</html>