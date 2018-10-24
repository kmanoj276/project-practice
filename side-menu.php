<div class="sidebar-menu">
<header class="logo">
<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo"> <h1>Augment</h1></span>
<!--<img id="logo" src="" alt="Logo"/>-->
</a>
</header>
<?php
if(isset($_SESSION['login']))
{
?>	
<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
<!--/down-->
<div class="down">
<a href="#"><img src="images/admin.jpg"></a>
<a href="#"><span class=" name-caret"><?php echo $_SESSION['name'];?></span></a>
<p>System Administrator in Company</p>
<ul>
<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
<li><a class="tooltips" href="change-password.php"><span>Change Password</span><i class="lnr lnr-cog"></i></a></li>
<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
<br/>


<br/>
<br/>
</ul>
</div>	
<?php	
}
else
{
	
	
}	

	
	
?>













<!--//down-->
<div class="menu">
<ul id="menu" >
<?php
if(isset($_SESSION['login']))
{
?>
<li><a href="account.php"><i class="fa fa-tachometer"></i> <span>Account</span></a></li>
<li><a href="add-friend.php"><i class="fa fa-tachometer"></i> <span>Add Friend</span></a></li>
	
<?php	
}
else
{
?>	
<li><a href="signup.php"><i class="fa fa-tachometer"></i> <span>Signup</span></a></li>
<li><a href="login.php"><i class="fa fa-tachometer"></i> <span>Login</span></a></li>
<li><a href="forget-password.php"><i class="fa fa-tachometer"></i> <span>Forget Password</span></a></li>
<?php	
}		
?>



</ul>
</div>
</div>