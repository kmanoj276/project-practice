<?php
require_once"dbconfig.php";		
session_destroy();
header("location:login.php");	
?>