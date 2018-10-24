<?php
require_once"dbconfig.php";
if(isset($_REQUEST['signup']))
{
$name=trim($_REQUEST['name']);
$email=trim($_REQUEST['email']);
$mobile=trim($_REQUEST['mobile']);
$password=trim($_REQUEST['password']);
$cpassword=trim($_REQUEST['cpassword']);
$query="
insert into user (name,email,mobile,password)
values
('$name','$email','$mobile','$password');
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
if(strlen($password)<6)
{
echo"invalid password";
$result=false;
}
if($password!=$cpassword)
{
echo"Password and confirm password not same";
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
############################################
if(isset($_REQUEST['login']))
{
$email=trim($_REQUEST['email']);
$password=trim($_REQUEST['password']);
$query="select * from user where email='$email' and password='$password'";
$result=true;
if(!check_email($email))
{
echo"invalid email";
$result=false;
}

if(strlen($password)<6)
{
echo"invalid password";
$result=false;
}

if(!$result)
{
return;
}
$result=select($query);
$n=mysqli_num_rows($result);
if($n==1)
{
while($row=mysqli_fetch_array($result))
{
$name=$row['name'];	
$userid=$row['userid'];	

$_SESSION['login']="yes";

$_SESSION['name']=$name;
$_SESSION['userid']=$userid;
	
}


echo "1";




}
else
{
echo "invalid email or password";
}
}
#############################################
if(isset($_REQUEST['changepassword']))
{

$oldpassword=trim($_REQUEST['oldpassword']);
$password=trim($_REQUEST['password']);
$cpassword=trim($_REQUEST['cpassword']);
$userid=$_SESSION['userid'];
$result=true;
$query="update user set password='$password' 
where 
userid='$userid' and password='$oldpassword'";


if(strlen($oldpassword)<6)
{
echo"invalid Old password";
$result=false;
}
if(strlen($password)<6)
{
echo"invalid password";
$result=false;
}
if($password!=$cpassword)
{
echo"Password and confirm password not same";
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

#############################################
if(isset($_REQUEST['forget']))
{


$email=trim($_REQUEST['email']);

$time=time();

$otp=md5($email.$time);


$query="
update user set otp='$otp' where email='$email'";
$result=true;
if(!check_email($email))
{
echo"invalid email";
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
echo "Email NOt Found";
}
}

#############################################
if(isset($_REQUEST['resetpassword']))
{

$otp=trim($_REQUEST['otp']);
$password=trim($_REQUEST['password']);
$cpassword=trim($_REQUEST['cpassword']);
$result=true;
$query="update user set password='$password',otp='' 
where otp='$otp'";


if(strlen($otp)!=32)
{
echo"invalid OTP";
$result=false;
}
if(strlen($password)<6)
{
echo"invalid password";
$result=false;
}
if($password!=$cpassword)
{
echo"Password and confirm password not same";
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
############################################
if(isset($_REQUEST['updateprofile']))
{
$name=trim($_REQUEST['name']);
$mobile=trim($_REQUEST['mobile']);
$userid=$_SESSION['userid'];
$query="update user set name='$name',mobile='$mobile' where userid='$userid'";
$result=true;

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
$_SESSION['name']=$name;
}
else
{
echo "something wrong";
}
}
############################################
?>