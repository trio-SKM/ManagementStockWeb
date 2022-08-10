<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login form</title>
</head>
<body>
    <form action="{{route('login')}}" method="post">
        @csrf
        <label for="username">Email</label>
        <input type="text" name="email" id="username"><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" name="btn_login" id="btn_login" value="Login">
    </form>
    @error('email')
        <div>
            probleme
        </div>
    @enderror
</body>
</html>
