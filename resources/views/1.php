<?php

$msg = "hello world";

function def() {
	global $msg;
    echo '<h1>helo</h1><br><hr>';
	echo $msg;
}

def();
?>
