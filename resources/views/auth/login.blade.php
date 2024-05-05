<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Login</title>
</head>

<body>

    <div class="login-card">

        <h2>Login</h2>
        <h3> Masukkan Identitas</h3>
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <input type="email" id="email" name="email" placeholder="Email" required>

            <input type="password" id="password" name="password" placeholder="Password" required>


            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>

</html>
