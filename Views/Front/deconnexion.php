<?php

session_start();

if(isset($_SESSION['e']))
{
	unset($_SESSION['e']);

}

header("Location: index.php");
die;
