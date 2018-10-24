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
		<?php
			include"head-files.php";
		?>
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
				<div class="graph">
				<div class="block-page">
				<!--
				##################################################
				-->
				</div>
				</div>
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