<?php
	$run_com = mysqli_query($conexao ,"SELECT * FROM comment order by com_id") or die("Not Found");
	
	$comments = 0;
	while($com_row = mysqli_fetch_array($run_com)){
			$com_id = $com_row['com_id'];
			$com_post = $com_row['com_post'];
		
		if($com_post == $post_id){
			$comments++;
		}
	}
	echo ("<h1>Comments ($comments)</h1></br>");
	
	$run_com = mysqli_query($conexao ,"SELECT * FROM comment order by com_id") or die("Not Found");
	
	while($com_row = mysqli_fetch_array($run_com)){
			$com_id = $com_row['com_id'];
			$com_name = $com_row['com_name'];
			$com_avatar = $com_row['com_avatar'];
			$com_content = $com_row['com_content'];
			$com_post = $com_row['com_post'];
		
		if($com_post == $post_id){
			if($com_avatar != ""){ 
				echo ("
					<div class='row'>
						<div class='col-md-2'>
							<div class='webcolorlightgray pad_in'>
								<img src='./user_img/$com_avatar' class='img-responsive' alt='Responsive image' width='70%' heigth='60%'/>
							</div>
						</div>
						<div class='col-md-10'>
							<h1>$com_name</h1>
							<div class='well'>$com_content</div>
						</div>
					</div>
					</br>
				");
			}else{
				echo ("
					<div class='row'>
						<div class='col-md-2'>
							<div class='webcolorlightgray pad_in'>
								<img src='./user_img/no_avatar.png' class='img-responsive' alt='Responsive image' width='70%' heigth='60%'/>
							</div>
						</div>
						<div class='col-md-10'>
							<h1>$com_name</h1>
							<div class='well'>$com_content</div>
						</div>
					</div>
					</br>
				");
			}
		}
	}
	if($comments == 0) echo ("</br><h5 class='text-center'>no result</h5></br>");
?>