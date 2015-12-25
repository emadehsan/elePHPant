<!DOCTYPE html>
<html>
<head>
        <title>elePHPant</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<style>
body {
    margin: 0.5%;
}
#code {
    font-family: consolas;
}
#code-list {
    font-size: 200%;
}
</style>

</head>
<body>
<div class="container">

    <h1>elePHPant</h1>
    <a id="admin-link" class="glyphicon glyphicon-triangle-left" href="/codes">View Scripts</a>
    <a id="admin-link" class="pull-right" href="/auth/logout">Logout</a>
    <div class="row">
        <div class="col-md-12" id="code-list">
            <div >List of Coders along w/ Code</div>
            <hr>
            @foreach ($codes as $code)
                <a href="/{{$code->id}}/code">{{ $code->id }}. {{ $code->user->name }}</a><br>
            @endforeach
        </div>
    </div>

</div>


</body>
</html>
