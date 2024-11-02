<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Sign UP</title>
    <link href='/css/app.css' rel="stylesheet">
</head>

<body>
  <div class = "container">
    <form method="POST" action="/signup">
        @csrf
                <h1>Register</h1>
            <div class="input-box">
                    <input type="text" name="fullname" placeholder="fullname" required>
            </div>
            <div class="input-box">
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
                <i class='bx bx-lock-alt' ></i>
            </div>
                <button type="submit">Register</button>
            <div class="link">
                <p>Forgot Password? <a href="resetpassword">Reset Password</a></p>
            </div>
    </form>
   </div>
</body>
</html>
