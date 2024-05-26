<table align="center" class="table table-striped"  bgcolor="#CD5C5C" width="70%">
	<tr>
		<td colspan="8" align="center" bgcolor="#B22222"><h3>View all posts here:</h3></td>
	</tr>
	<tr class="info">
		<td align="center">Id</td>
		<td align="center">Title</td>
		<td align="center">Author</td>
		<td align="center">Image</td>
		<td align="center">Date</td>
		<td align="center">Category</td>
		<td align="center">Delete</td>
	</tr>
	<?php
		$run_cat = mysqli_query($conexao ,"SELECT * FROM post") or die("Not Found");
		
		while($cat_row = mysqli_fetch_array($run_cat)){
			$post_id = $cat_row['post_id'];
			$post_title = $cat_row['post_title'];
			$post_date = $cat_row['post_date'];
			$post_cat = $cat_row['post_cat'];
			$post_author = $cat_row['post_author'];
			$post_image = $cat_row['post_image'];
	?>
			<tr>
				<td align="center"><?php echo $post_id; ?></td>
				<td align="center"><?php echo $post_title; ?></td>
				<td align="center"><?php echo $post_author; ?></td>
				<td align="center"><?php if($post_image != '') echo ("<img src='./user_img/$post_image' width='40' heigth='30'/>"); ?></td>
				<td align="center"><?php echo $post_date; ?></td>
				<td align="center"><?php echo $post_cat; ?></td>
				<td align="center"><a href="admin.php?delete_post=<?php echo $post_id; ?>">✘</a></td>
			</tr>
	<?php } ?>
</table>
<?php
	if(isset($_GET['delete_post'])){
		$delete_id = $_GET['delete_post'];
		mysqli_query($conexao ,"DELETE FROM post WHERE post_id='$delete_id'") or die("Not Found");
		echo "<script>window.open('admin.php','_self')</script>";
	}
?>