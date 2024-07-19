<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login Form</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
</head>
<body>
    <form method="POST" action="/login" class="login-form">
        @csrf
        <h1 class="login-title">login</h1>

          <div class="input-box">
            <i class='bx bx-envelope' ></i>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="input-box">
            <i class='bx bxs-lock-alt' ></i>
            <input type="password" name="password" placeholder="Password">
        </div>

        <div class="remember-forgot-box">
            <label for="remember">
                <input type="checkbox" id="remember">
                Remember me
            </label>
            <a href="/register">Forgot Password?</a>
        </div>

        <button type="submit" class="login-btn">Login</button>

        <p class="register">
            Don't have an account?
            <a href="/register">Register</a>
        </p>
    </form>

</body>
</html>
