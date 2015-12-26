<!DOCTYPE html>
<html>
    <head>
        <title>elePHPant</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <style>
    * {
        font-family: 'Lato';
        font-weight: 900;
    }
    .container {
        margin: 5% ;
    }
    .container h3, .container h1 {
        margin: auto;
        max-width: 50%;
    }
    form div {
        max-width: 50%;
        margin: auto;
    }
    </style>
    <body>
        <div class="container">
            <!-- resources/views/auth/register.blade.php -->

            <h1>elePHPant</h1>

            <h3>Register</h3>
            <form role="form" method="POST" action="/register">
                {!! csrf_field() !!}

                <div class="form-group">
                    Name
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    Email
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    Password
                    <input class="form-control" type="password" name="password">
                </div>

                <div class="form-group">
                    Confirm Password
                    <input class="form-control" type="password" name="password_confirmation">
                </div>

                <div class="form-group">
                    <button class="btn btn-default" type="submit">Register</button>
                    <hr>
                    <a href="login">Login</a>
                </div>
            </form>
        </div>
    </body>
</html>
