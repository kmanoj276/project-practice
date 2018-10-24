<?php
	require_once"dbconfig.php";
	if(isset($_SESSION['login']))
	{
header("location:account.php");


	}
	else
	{
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include"head-files.php"; ?>
		<script>
			$(document).ready(function()
			{
				$("#login").click(function()
				{
					var email=$.trim($("#email").val());
					var password=$.trim($("#password").val());
					var result=true;
					if(email.length<10)
					{
						$("#email").css("border-color","red");
						$("#emaill").html("invalid email");
						$("#emaill").css("color","red");
						$("#emails").html("invalid email");
					$("#emails").css("color","red");
					result=false;
					}
					else
					{
					$("#email").css("border-color","#DDDDDD");
					$("#emaill").html("email");
					$("#emails").html("");
					$("#emaill").css("color","#777777");
					}
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
					if(!result)
					{
					return false;
					}
					var myurl="user.php";
					var mymethod="post";
					var mydata="email="+email+"&password="+password+"&login=login";
					$.ajax({
					url:myurl,
					method:mymethod,
					data:mydata,
					success:function(result)
					{
					if(result==1)
					{
					window.location="account.php";
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
					<label for="inputEmail3" class="col-sm-2 control-label" id='emaill'>Email</label>
					<div class="col-sm-9">
					<input type="text" class="form-control" name='email' id="email" placeholder="Email"> </div>
					<span id='emails'></span>
					</div>
					<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label" id='passwordl'>Password</label>
					<div class="col-sm-9">
					<input type="password" class="form-control" id="password" name='password' placeholder="Password"> </div>
					<span id='passwords'></span>
					</div>
					<div class="col-sm-offset-2">
					<input type="submit" class="btn btn-default" id='login' name='login' value='login'/>
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