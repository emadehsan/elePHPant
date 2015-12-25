<!DOCTYPE html>
<html>
<head>
        <title>elePHPant</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

    	<script src="/js/jquery-linedtextarea.js"></script>
    	<link href="/css/jquery-linedtextarea.css" type="text/css" rel="stylesheet" />

<style>
#code {
    font-family: consolas;
}
</style>
</head>
<body>
<div class="container">

    <div class="row">
        <form class="col-md-6" id="left-pane">
            <h3>Hack with Code</h3>
            <textarea class="form-control lined" rows="30" id="code" placeholder="Your scripts here"></textarea>

            <hr>
            <button class="btn btn-success">Save</button>
            <button class="btn btn-primary">Execute</button>
        </form>
        <div class="col-md-6" id="right-pane">
            right
        </div>
    </div>

</div>

<script>
$(function() {
    $("#code").linedtextarea(
        {selectedLine: 1}
    );
});

</script>

</body>
</html>
