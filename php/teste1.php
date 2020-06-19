<?php
session_start();

$GLOBALS['a'] = $_POST['lname'];
$GLOBALS['b']= $_POST['fname'];
function Soma()
{
  echo $GLOBALS['a'], $GLOBALS['b'];
 
}

Soma();



?>
