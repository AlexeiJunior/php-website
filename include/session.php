<?php if(!isset($_COOKIE['user']) && !isset($_COOKIE['pass'])){
	echo ("<script>window.open('login.php','_self')</script>");	
}
?>