<?php

// htmlspecialchars($変数名,ENT_QUOTES)を使いやすくする。

function h ($val){
    return htmlspecialchars($val,ENT_QUOTES);
}

session_start();

// postはURLに見えない
// getはURLに表示される

$email = $_POST['email'];
$name = $_POST['name'];
$detail = $_POST['detail'];

echo htmlspecialchars($name,ENT_QUOTES).'<br>';
echo  h($email).'<br>';
echo H($detail).'<br>';

?>
