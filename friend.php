<?php
require_once"dbconfig.php";
if(isset($_REQUEST['addfriend']))
{
$name=trim($_REQUEST['name']);
$email=trim($_REQUEST['email']);
$mobile=trim($_REQUEST['mobile']);
$userid=$_SESSION['userid'];

$query="
insert into friend (fname,femail,fmobile,userid)
values
('$name','$email','$mobile','$userid');
";
$result=true;
if(!check_email($email))
{
echo"invalid email";
$result=false;
}
if(!check_mobile($mobile))
{
echo"invalid mobile";
$result=false;
}
if(strlen($name)<2)
{
echo"invalid name";
$result=false;
}

if(!$result)
{
return;
}
$n=iud($query);
if($n==1)
{
echo "1";
}
else
{
echo "something wrong";
}
}

?>