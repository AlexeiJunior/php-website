<?php
	$run_post = mysqli_query($conexao ,"SELECT * FROM post order by post_id desc") or die("Not Found");
	if(isset($_GET['cat'])){
		$post_cat = $_GET['cat'];
		$run_post = mysqli_query($conexao ,"SELECT * FROM post WHERE post_cat = '$post_cat' order by post_id desc") or die("Not Found");
	}
	if(isset($_GET['src'])){
		$post_title = $_GET['src'];
		$run_post = mysqli_query($conexao ,"SELECT * FROM post WHERE post_title like '%$post_title%' OR post_key like '%$post_title%' order by post_id desc") or die("Not Found");
	} 
	if(mysqli_num_rows($run_post) == 0) echo ("</br><h5 class='text-center'>no result</h5></br>");
	
	while($post_row = mysqli_fetch_array($run_post)){
			$post_id = $post_row['post_id'];
			$post_title = $post_row['post_title'];
			$post_image = $post_row['post_image'];
			$post_content = $post_row['post_content'];
		
		echo ("
			<div class='row'>
				<div class='col-md-12'>
					<a href='index.php?post=$post_id'><h1>$post_title</h1></a>
				</div>
			</div>
		");
		
		if($post_image != "" && $post_content != "" && $post_content != "<br>"){ 
			echo ("
				<div class='row'>
					<div class='col-md-2'>
						<div class='webcolorlightgray pad_in'>
							<img src='./user_img/$post_image' class='img-responsive' alt='Responsive image' width='70%' heigth='60%'/>
						</div>
					</div>
					<div class='col-md-10'>
						<div class='well'>$post_content</div>
					</div>
				</div>
				</br>
			");
		}else{
			if($post_content != "" && $post_content != "<br>"){
				echo ("
					<div class='row'>
						<div class='col-md-12'>
							<div class='well'>$post_content</div>
						</div>
					</div>
					</br>
				");
			}else{
				echo ("
					<div class='row'>
						<div class='col-md-2'>
							<div class='webcolorlightgray pad_in'>
								<img src='./user_img/$post_image' class='img-responsive' alt='Responsive image' width='70%' heigth='60%'/>
							</div>
						</div>
						<div class='col-md-10'>
						</div>
					</div>
					</br>
				");
			}
		}
	}
?>