<form action="admin.php" method="post" enctype="multipart/form-data">
	</br>
	<table width="800" alegn="center">
		<tr>
			<td>Insert New Category:</td>
			<td><input type="text" class="form-control" name="cat_name" /></td>
			<td><input type="submit" name="new_cat" class="btn btn-link" value="Publish Now" /></td>
		</tr>
	</table>
	</br>
</form>
<?php
	if(isset($_POST['new_cat'])){
		$cat_name = $_POST['cat_name'];
		$insert_post = "INSERT INTO category (cat_name) VALUE ('$cat_name')";
		$run_post = mysqli_query($conexao,$insert_post);
		echo ("<script>alert('Complete');</script>");
		echo ("<script>window.open('admin.php','_self')</script>");
	}
?>