<?php
	session_start();	
require_once"validation.php";
	


define("host","localhost",true);	
define("user","root",true);	
define("password","",true);	
define("database","studentrecord",true);	

function iud($query)
{
$cid=mysqli_connect(host,user,password,database) or die("MySQL Connection Failed");
$result=mysqli_query($cid,$query);
$n=mysqli_affected_rows($cid);
mysqli_close($cid);	
return $n;
}	


function select($query)
{
$cid=mysqli_connect(host,user,password,database) or die("MySQL Connection Failed");
$result=mysqli_query($cid,$query);
mysqli_close($cid);	
return $result;
}











?>