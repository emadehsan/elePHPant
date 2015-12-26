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
    .container h1, .container h3 {
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
            <!-- resources/views/auth/login.blade.php -->

            <h1 class="txt txt-danger">elePHPant</h1>

            <h3 class="txt txt-default">Login</h3>

            <form role="form" class="form" method="POST" action="/login">
                {!! csrf_field() !!}

                <div class="form-group">
                    Email
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    Password
                    <input class="form-control" type="password" name="password" id="password">
                </div>

                <div class="form-group">
                    <input  type="checkbox" name="remember"> Remember Me
                </div>

                <div class="form-group">
                    <button class="btn btn-default" type="submit">Login</button>
                    <hr>
                    <a href="register">Register</a>
                </div>
            </form>
        </div>
    </body>
</html>
