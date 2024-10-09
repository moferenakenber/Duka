<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    @if ($errors->any())
    <div class="bg-red-200 p-3">
         <ul>
            @foreach ($errors->all() as $error)
                 <li>{{$error}}</li>
            @endforeach
         </ul>
    </div>
    @endif
            <div class="container">
        <form action="/session" method="POST">
            @csrf
            <h1>Login</h1>
        <div class="input-box">
            <input type="text" name="email" id="email" placeholder="email" required>
            <i class='bx bx-user' ></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="password" placeholder="password" required>
            <i class='bx bx-lock-alt' ></i>
        </div>

        <div class="forget">
            <label><input type="checkbox" name="checkbox"> Remember me</label>
            <a href="resetpassword">Forgot Password?</a>
        </div>

            <button type="submit">login</button>
        <div class="link">
            <p>don't have an account? <a href="signup">Register</a></p>
        </div>
        </form>
    </div>
</body>
</html>
