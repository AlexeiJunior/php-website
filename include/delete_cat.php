<table align="center" class="table table-striped"  bgcolor="#CD5C5C" width="70%">
	<tr>
		<td colspan="8" align="center" bgcolor="#B22222"><h3>View all categories here:</h3></td>
	</tr>
	<tr class="info">
		<td align="center">Id</td>
		<td align="center">Title</td>
		<td align="center">Delete</td>
	</tr>
	<?php
		$run_cat = mysqli_query($conexao ,"SELECT * FROM category") or die("Not Found");
		
		while($cat_row = mysqli_fetch_array($run_cat)){
			$cat_id = $cat_row['cat_id'];
			$cat_name = $cat_row['cat_name'];
			if($cat_id != 1){
	?>
				<tr>
					<td align="center"><?php echo $cat_id; ?></td>
					<td align="center"><?php echo $cat_name; ?></td>
					<td align="center"><a href="admin.php?delete_cat=<?php echo $cat_id; ?>">✘</a></td>
				</tr>
		<?php }
		} ?>
</table>
<?php
	if(isset($_GET['delete_cat'])){
		$delete_id = $_GET['delete_cat'];
		mysqli_query($conexao ,"DELETE FROM category WHERE cat_id='$delete_id'") or die("Not Found");
		echo "<script>window.open('admin.php','_self')</script>";
	}
?>