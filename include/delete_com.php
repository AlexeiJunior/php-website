<table align="center" class="table table-striped"  bgcolor="#CD5C5C" width="70%">
	<tr>
		<td colspan="8" align="center" bgcolor="#B22222"><h3>View all comments here:</h3></td>
	</tr>
	<tr class="info">
		<td align="center">Id</td>
		<td align="center">Name</td>
		<td align="center">Mail</td>
		<td align="center">Avatar</td>
		<td align="center">Post</td>
		<td align="center">Delete</td>
	</tr>
	<?php
		$run_com = mysqli_query($conexao ,"SELECT * FROM comment") or die("Not Found");
		
		while($com_row = mysqli_fetch_array($run_com)){
			$com_id = $com_row['com_id'];
			$com_name = $com_row['com_name'];
			$com_mail = $com_row['com_mail'];
			$com_avatar = $com_row['com_avatar'];
			$com_post = $com_row['com_post'];
	?>
			<tr>
				<td align="center"><?php echo $com_id; ?></td>
				<td align="center"><?php echo $com_name; ?></td>
				<td align="center"><?php echo $com_mail; ?></td>
				<td align="center"><?php if($com_avatar != '') echo ("<img src='./user_img/$com_avatar' width='40' heigth='30'/>"); ?></td>
				<td align="center"><?php echo $com_post; ?></td>
				<td align="center"><a href="admin.php?delete_com=<?php echo $com_id; ?>">✘</a></td>
			</tr>
	<?php } ?>
</table>
<?php
	if(isset($_GET['delete_com'])){
		$delete_id = $_GET['delete_com'];
		mysqli_query($conexao ,"DELETE FROM comment WHERE com_id='$delete_id'") or die("Not Found");
		echo "<script>window.open('admin.php','_self')</script>";
	}
?>