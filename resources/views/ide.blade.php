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
</style>

<!-- CodeMirror Files -->
<!-- PATH : /cm510/mode/php/ -->
<link rel=stylesheet href="cm510/doc/docs.css">
<link rel="stylesheet" href="cm510/lib/codemirror.css">
<script src="cm510/lib/codemirror.js"></script>
<script src="cm510/addon/edit/matchbrackets.js"></script>
<script src="cm510/mode/htmlmixed/htmlmixed.js"></script>
<script src="cm510/mode/xml/xml.js"></script>
<script src="cm510/mode/javascript/javascript.js"></script>
<script src="cm510/mode/css/css.js"></script>
<script src="cm510/mode/clike/clike.js"></script>
<script src="cm510/mode/php/php.js"></script>

<style type="text/css">
.CodeMirror {border-top: 1px solid black; border-bottom: 1px solid black;}
.container, body {
    background-color: white;
}
</style>

</head>
<body>
<div class="container">

    <h1>elePHPant</h1>
    <a id="admin-link" class="glyphicon glyphicon-triangle-left" href="/codes">View Scripts</a>
    <a id="admin-link" class="pull-right" href="/auth/logout">Logout</a>
    <div class="row">
        <form class="col-md-6" id="left-pane">
            <h3>PHP here</h3>
<textarea class="form-control lined" rows="30" id="code" placeholder="Your script here">
<?php echo '<?php';?>

/* This class shows the power of a php editor*/
class Ultra extends Violet
{
	private var $msg = 'Hello World';
	private var $display = false;

	public function printMsg() {
		if (display)
			echo $this->msg;
		else
			echo 'Cannot Process request';
	}
}</textarea>

            <hr>
            <button class="btn btn-success">Save</button>
            <button class="btn btn-primary">Execute</button>
        </form>
        <div class="col-md-6" id="right-pane">
            <h3>Results</h3>
        </div>
    </div>

</div>

<script>

var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
  lineNumbers: true,
  matchBrackets: true,
  mode: "application/x-httpd-php",
  indentUnit: 4,
  indentWithTabs: true
});
</script>

</body>
</html>
