<?php

$title = $content = "";
if( $_SERVER["REQUEST_METHOD"] == "POST" ){
    $title = test_input($_POST["title"]);
    $content = test_input($_POST["content"]);
}
  
function test_input( $data ){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$title = str_replace(' ', '&nbsp;', $title);
$title =  str_replace(array("\r\n", "\r", "\n"),"<br>", $title);
$content = str_replace(' ', '&nbsp;', $content);
$content =  str_replace(array("\r\n", "\r", "\n"),"<br>", $content);

echo '[{ "title":"'.$title.'", "content":"'.$content.'" }]';

?>