<?php
	$post_id = $_GET['post'];
	$run_post = mysqli_query($conexao ,"SELECT * FROM post WHERE post_id = '$post_id'") or die("Not Found");
	
	while($post_row = mysqli_fetch_array($run_post)){
			$post_id = $post_row['post_id'];
			$post_title = $post_row['post_title'];
			$post_date = $post_row['post_date'];
			$post_author = $post_row['post_author'];
			$post_image = $post_row['post_image'];
			$post_content = $post_row['post_content'];
			$post_cat = $post_row['post_cat'];
			$post_desc = $post_row['post_desc'];
		
		echo ("
			<div class='row'>
				<div class='col-md-12'>
					<h1>$post_title</h1>
				</div>
			</div>
		");
		
		echo ("
			<div class='row'>
				<div class='col-md-12'>
					<span>$post_author<span>&nbsp&nbsp</span>$post_date</span>
				</div>
			</div>
		");
		
		if($post_image != ""){
			echo ("
				<div class='row'>
					<div class='col-md-12'>
						<img src='./user_img/$post_image' class='img-responsive center-block' alt='Responsive image'/>
					</div>
				</div>
				</br>
			");
		}
		
		if($post_content != "" && $post_content != "<br>"){
			echo ("
				<div class='row'>
					<div class='col-md-12'>
						<div class='well'>
							$post_content
						</div>
					</div>
				</div>
				</br>
			");
		}
		
		if($post_desc != "" && $post_desc != "<br>"){
			echo ("
				<div class='row'>
					<div class='col-md-4'>
						<h3>Description</h3>
						<div class='well'>
							$post_desc
						</div>
					</div>
					<div class='col-md-8'>
					</div>
				</div>
				</br>
			");
		}
	}
?>
<?php include './include/comment.php';?>
<?php include './include/publish_com.php';?>