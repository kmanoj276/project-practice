<?php
	require_once"dbconfig.php";
	if(isset($_SESSION['login']))
	{
	}
	else
	{
		header("Location:login.php");
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include"head-files.php"; ?>
		<script>
			$(document).ready(function()
			{
				$("#changepassword").click(function()
				{
					var oldpassword=$.trim($("#oldpassword").val());
					var password=$.trim($("#password").val());
				var cpassword=$.trim($("#cpassword").val());
				var result=true;
				if(password.length<6)
				{
				$("#password").css("border-color","red");
				$("#passwordl").html("invalid password");
				$("#passwordl").css("color","red");
				$("#passwords").html("invalid password");
				$("#passwords").css("color","red");
				result=false;
				}
				else
				{
				$("#password").css("border-color","#DDDDDD");
				$("#passwordl").html("password");
				$("#passwords").html("");
				$("#passwordl").css("color","#777777");
				}
				if(oldpassword.length<6)
				{
				$("#oldpassword").css("border-color","red");
				$("#oldpasswordl").html("invalid password");
				$("#oldpasswordl").css("color","red");
				$("#oldpasswords").html("invalid password");
				$("#oldpasswords").css("color","red");
				result=false;
				}
				else
				{
				$("#oldpassword").css("border-color","#DDDDDD");
				$("#oldpasswordl").html("password");
				$("#oldpasswords").html("");
				$("#oldpasswordl").css("color","#777777");
				}
				if(password!=cpassword)
				{
				$("#cpassword").css("border-color","red");
				$("#cpasswordl").html("invalid confirm password");
				$("#cpasswordl").css("color","red");
				$("#cpasswords").html("invalid confirm password");
				$("#cpasswords").css("color","red");
				result=false;
				}
				else
				{
				$("#cpassword").css("border-color","#DDDDDD");
				$("#cpasswordl").html("C-Password");
				$("#cpasswords").html("");
				$("#cpasswordl").css("color","#777777");
				}
				if(!result)
				{
				return false;
				}
				var myurl="user.php";
				var mymethod="post";
				var mydata="oldpassword="+oldpassword+"&password="+password+"&cpassword="+cpassword+"&changepassword=changepassword";
				$.ajax({
				url:myurl,
				method:mymethod,
				data:mydata,
				success:function(result)
				{
				if(result==1)
				{
				alert("Password Updated");
				$("#oldpassword").val("");
				$("#password").val("");
				$("#cpassword").val("");
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
				<label for="inputPassword3" class="col-sm-2 control-label" id='oldpasswordl'>Old Password</label>
				<div class="col-sm-9">
				<input type="password" class="form-control" id="oldpassword" name='oldpassword' placeholder="Old Password"> </div>
				<span id='oldpasswords'></span>
				</div>
				<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label" id='passwordl'>Password</label>
				<div class="col-sm-9">
				<input type="password" class="form-control" id="password" name='password' placeholder="Password"> </div>
				<span id='passwords'></span>
				</div>
				<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label" id="cpasswordl">C-Password</label>
				<div class="col-sm-9">
				<input type="password" class="form-control" id="cpassword" name='cpassword' placeholder="Confirm Password"> </div>
				<span id='cpasswords'></span>
				</div>
				<div class="col-sm-offset-2">
				<input type="submit" class="btn btn-default" id='changepassword' name='changepassword' value='Change Password'/>
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