<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: welcome.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }
    .background {
      position: absolute;
      width: 200%;
      height: 200%;
      background: black;
      background-size: 400% 400%;
      animation: moveBg 10s linear infinite;
      z-index: -1;
    }
    @keyframes moveBg {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .login-container {
      background: rgba(255,255,255,0.9);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      max-width: 350px;
      width: 90%;
    }
    .login-container h2 { text-align: center; margin-bottom: 25px; }
    .login-container input {
      width: 100%; padding: 12px; margin-bottom:15px;
      border:1px solid #ddd; border-radius:6px; font-size:15px;
    }
    .login-container button {
      width: 100%; padding:12px; background:#007bff; border:none;
      color:white; font-size:16px; border-radius:6px; cursor:pointer;
      transition: background .3s ease;
    }
    .login-container button:hover { background:#0056b3; }
    .links { text-align:center; margin-top:15px; font-size:14px; }
    .links a { color:#007bff; text-decoration:none; }

    .color {
      color: red;
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="background"></div>
  <div class="login-container">
    <h2>Login</h2>

    <?php if(isset($_GET['error'])): ?>
      <p class="color">Username atau Password salah!</p>
      <?php endif; ?>
    <form action="auth.php" method="POST">
      <input type="text" id="username" name="username" placeholder="Username" required />
      <input type="password" id="password" name="password" placeholder="Password" required />
      <button type="submit">Login</button>
    </form>
    <div class="links">
      <a href="#">Forgot Password?</a> | <a href="#">Create Account</a>
    </div>
  </div>
</body>
</html>