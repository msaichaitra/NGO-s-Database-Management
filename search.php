<?php
$search = $_POST['findMe'];
//$search = "example";//THIS WOULD WORK, BUT I WAS SHOWING HOW TO USE FORM
$home = file_get_contents('./index.html', FILE_USE_INCLUDE_PATH);
//IF WORD FOUND IN HOME PAGE

?>