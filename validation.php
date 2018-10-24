<?php
	

function check_email($email)
{
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
return true;		
}
else
{
return false;
}	

	
}



function check_mobile($mobile)
{

if(strlen($mobile)==10 and is_numeric($mobile) and $mobile[0]>5)
{
return true;	
}
else
{
return false;;
}
	
	
	
}
	
	
	
?>