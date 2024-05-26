<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4games</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" type="text/css" href=".//css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body class="container webcolorgray">
	<?php include_once('./include/connection.php');?>
	<form method="post">
		 <br/>
		 <div class="form-group">
			<label for="textfield">Username:</label>
			<input type="text" class="form-control" id="nome" name="user" placeholder="Username">
		 </div>
		 <div class="form-group">
			<label for="textfield2">Password:</label>
			<input type="password" class="form-control" id="senha" name="pass" placeholder="Password">
		 </div>
		 <br/>
		 <button class="submit" type="submit" name="submit" class="btn">Login</button>
	</form>
</body>
</html>
<?php
	if(isset($_POST['user'])){
		$name = $_POST['user'];
		$mysenha = $_POST['pass'];
		$mysenha = md5($mysenha);
		
		if($mysenha == NULL || $name == NULL){
			echo("<script>alert('User or Password Undefined');</script>");
			echo ("<script>window.open('login.php','_self')</script>");	
		}
		if ($name!=NULL){
			$senha = mysqli_query($conexao ,"SELECT user_password FROM user WHERE user_name='$name'") or die("Not Found");
			$senha_num_rows = mysqli_num_rows($senha);
		}
		if($senha_num_rows!=0){
			$senha = mysqli_result($senha,$senha_num_rows);
			//echo("<script>alert('$mysenha')</script>");
			if(addslashes($mysenha) == addslashes($senha)){	
				setcookie('user', $name, false);
				setcookie('pass', $mysenha, false);
				echo ("<script>window.open('admin.php','_self')</script>");
			}else{
				echo("<script>alert('Wrong Password')</script>");
				echo ("<script>window.open('login.php','_self')</script>");			
			}
		}else{
			echo ("<script>alert('User Not Found')</script>");
			echo ("<script>window.open('login.php','_self')</script>");	
		}
		
		$conexao = mysqli_close($conexao);
	}
?>
<?php
	/*mysql old function*/
	function mysqli_result($res, $row, $field=0) { 
		$res->data_seek($row); 
		$datarow = $res->fetch_array(); 
		return $datarow[$field]; 
	}
?>