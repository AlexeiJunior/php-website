<form action="index.php?post=<?php echo($post_id); ?>" method="post" enctype="multipart/form-data">
	<table width="800" alegn="center">
		<tr>
			<td colspan="6"><h1>Insert New Comment</h1></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" class="form-control" name="com_name" /></td>
		</tr>
		<tr>
			<td>Mail:</td>
			<td><input type="text" class="form-control" name="com_mail" /></td>
		</tr>
		<tr>
			<td>Avatar:</td>
			<td><input type="file" class="form-control" name="com_avatar" /></td>
		</tr> 
		<tr>
			<td>Comment:</td>
			<td></br><textarea name="com_content" class="form-control" rows="20" cols="60"></textarea></br></td>
		</tr>
		<tr>
			<td><input type="submit" name="com_submit" class="btn alert alert-danger" value="Publish Now" /></td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['com_submit'])){
		$com_name = $_POST['com_name'];
		$com_mail = $_POST['com_mail'];
		$com_content = $_POST['com_content'];
		$com_avatar = $_FILES['com_avatar']['name'];
		$com_avatar_tmp = $_FILES['com_avatar']['tmp_name'];
		$com_post = $post_id;
		
		move_uploaded_file($com_avatar_tmp,"./user_img/$com_avatar");
		//id name content mail avatar post
		$insert_com = "INSERT INTO comment (com_name,com_content,com_mail,com_avatar,com_post) 
		VALUES ('$com_name','$com_content','$com_mail','$com_avatar','$com_post')";
		$run_com = mysqli_query($conexao,$insert_com);
		echo ("<script>alert('Complete');</script>");
		echo ("<script>window.open('index.php?post=$post_id','_self')</script>");
	}
?>