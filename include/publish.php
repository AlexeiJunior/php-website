<form action="admin.php" method="post" enctype="multipart/form-data">
	<table width="800" alegn="center">
		<tr>
			<td colspan="6"><h1>Insert New Post</h1></td>
		</tr>
		<tr>
			<td>Post Title:</td>
			<td><input type="text" class="form-control" name="post_title" /></td>
		</tr>
		<tr>
			<td>Post Category:</td>
			<td>
			</br>
				<select name="cat">
					<option class="form">Select a Category</option>
					<?php
						$run_cat = mysqli_query($conexao ,"SELECT * FROM category") or die("Not Found");
						
						while($cat_row = mysqli_fetch_array($run_cat)){
							$cat_id = $cat_row['cat_id'];
							$cat_name = $cat_row['cat_name'];
							if($cat_id != 1){
								echo ("<option value='$cat_id'>$cat_name</option>");
							}
						}
					?>
				</select>
			</br></br>
			</td>
		</tr>
		<tr>
			<td>Post Author:</td>
			<td><input type="text"  class="form-control" name="post_author" /></td>
		</tr>  
		<tr>
			<td>Post Image:</td>
			<td><input type="file" class="form-control" name="post_image" /></td>
		</tr>  
		<tr>
			<td>Post Content:</td>
			<td></br><textarea name="post_content" class="form-control" rows="20" cols="60"></textarea></br></td>
		</tr>
		<tr>
			<td>Post Description:</td>
			<td></br><textarea name="post_desc" class="form-control" rows="20" cols="60"></textarea></br></td>
		</tr> 
		<tr>
			<td>Post Keywords:</td>
			<td><input type="text"  class="form-control" name="post_key" /></td>
		</tr> 		
		<tr>
			<td><input type="submit" name="submit" class="btn alert alert-danger" value="Publish Now" /></td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['submit'])){
		$post_title = $_POST['post_title'];
		$post_date = date('m-d-y');
		$post_cat = $_POST['cat'];
		$post_author = $_POST['post_author'];
		$post_image = $_FILES['post_image']['name'];
		$post_image_tmp = $_FILES['post_image']['tmp_name'];
		$post_content = $_POST['post_content'];
		$post_desc = $_POST['post_desc'];
		$post_key = $_POST['post_key'];
		
		move_uploaded_file($post_image_tmp,"./user_img/$post_image");
		//id title date author image content cat desc key
		$insert_post = "INSERT INTO post (post_title,post_date,post_author,post_image,post_content,post_cat,post_desc,post_key) 
		VALUES ('$post_title','$post_date','$post_author','$post_image','$post_content','$post_cat','$post_desc','$post_key')";
		$run_post = mysqli_query($conexao,$insert_post);
		echo ("<script>alert('Complete');</script>");
		echo ("<script>window.open('admin.php','_self')</script>");
	}
?>