<?php
session_start();

// postはURLに見えない
// getはURLに表示される

$email = $_POST['email'];
$name = $_POST['name'];
$detail = $_POST['detail'];

echo $name.'<br>';
echo $email.'<br>';
echo $detail.'<br>';

?>