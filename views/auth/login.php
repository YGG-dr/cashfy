<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in Cashfy</title>
</head>

<body>
    <h1>Sign in to Cashfy</h1>
    <form action="/auth/login" method="post">
        <h1>Username or email address</h1>
        <input type="text" name="username_or_email" required>

        <h1>Password</h1>
        <input type="password" name="password" required>
        <a href="#">Forgot password</a>

        <button type="submit">Sign in</button>
    </form>

    <hr>

    <button>Continue with Google</button>
    <button>Continue with LinkedIn</button>

    <p>New to Cashfy? <a href="/auth/signup">Create an account</a></p>
    <p>Sign in with passkey</p>
</body>

</html>