<?php

$msg = $_POST['msg'];
print_r($_POST);

if(! !empty($msg))
{    echo "done"; }
else
{    echo "fail"; }
?>
