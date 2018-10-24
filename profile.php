<?php
require_once"dbconfig.php";
if(isset($_SESSION['login']))
{
	

}
else
{
	
header("location:login.php");
	
}

$userid=$_SESSION['userid'];
$query="select * from user where userid='$userid'";
$result=select($query);
while($row=mysqli_fetch_array($result))
{
$name=$row['name'];	
$mobile=$row['mobile'];	
}




?>



<!DOCTYPE HTML>
<html>
<head>
<?php include"head-files.php"; ?>
<script>
$(document).ready(function()
{
$("#updateprofile").click(function()
{
var name=$.trim($("#name").val());
var mobile=$.trim($("#mobile").val());

var result=true;
if(name.length<2)
{
$("#name").css("border-color","red");
$("#namel").html("invalid name");
$("#namel").css("color","red");
$("#names").html("invalid name");
$("#names").css("color","red");
result=false;
}
else
{
$("#name").css("border-color","#DDDDDD");
$("#namel").html("name");
$("#namel").css("color","#777777");
$("#names").html("");
}
if(mobile.length!=10)
{
$("#mobile").css("border-color","red");
$("#mobilel").html("invalid mobile");
$("#mobilel").css("color","red");
$("#mobiles").html("invalid mobile");
$("#mobiles").css("color","red");
result=false;
}
else
{
$("#mobile").css("border-color","#DDDDDD");
$("#mobilel").html("mobile");
$("#mobiles").html("");
$("#mobilel").css("color","#777777");
}


if(!result)
{
return false;
}
var myurl="user.php";
var mymethod="post";
var mydata="name="+name+"&mobile="+mobile+"&updateprofile=updateprofile";
$.ajax({
url:myurl,
method:mymethod,
data:mydata,
success:function(result)
{
if(result==1)
{
alert("Profile Updated");
$("#name").val("");
$("#mobile").val("");
}
else
{
alert(result);
}
}
});
return false;
});
});
</script>
</head>
<body>
<div class="page-container">
<div class="left-content">
<div class="inner-content">
<div class="header-section">
<?php //include"top-menu.php";?>
<div class="clearfix"></div>
</div>
<div class="outter-wp">
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="index.html">Home</a></li>
<li class="active">Blank Page</li>
</ol>
</div>
<div class="graph-visual tables-main">
<h2 class="inner-tittle">Blank Page</h2>
<div class="col-md-6 graph-2">
<div class="grid-1">
<div class="form-body">
<form class="form-horizontal" action='user.php' method='post'>
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label" id='namel'>Name</label>
<div class="col-sm-9">
<input type="text" class="form-control" name='name' id="name" placeholder="Name" value='<?php echo $name ?>'> </div>
<span id='names'></span>
</div>

<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label" id='mobilel'>Mobile</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="mobile" name='mobile' placeholder="Mobile" value='<?php echo $mobile ?>'> </div>
<span id='mobiles'></span>
</div>


<div class="col-sm-offset-2">
<input type="submit" class="btn btn-default" id='updateprofile' name='updateprofile' value='Update Profile'/>
</div>


</form>
</div>
</div></div>
</div>
</div>
<?php include"footer.php";?>
</div>
</div>
<?php include"side-menu.php";?>
<div class="clearfix"></div>
</div>
<?php include"footer-script.php";?>
</body>
</html>