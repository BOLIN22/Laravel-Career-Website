<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <form method="POST" action="/register" class="login-form">
        @csrf
        <h1 class="login-title">register</h1>


        <div class="input-box">
            <i class='bx bx-user' ></i>
            <input type="text" name="name" placeholder="Username">
        </div>
        <div class="input-box">
            <i class='bx bx-envelope' ></i>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="input-box">
            <i class='bx bxs-lock-alt' ></i>
            <input type="password" name="password" placeholder="Password">
        </div>


        <button type="submit" class="login-btn">Register</button>

        <p class="register">
            Create your own account!
        </p>
    </form>


</body>
</html>
