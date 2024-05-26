<header>
	<div class="container-fluid header">
		<div class="row">
			<div class="col-md-5 text-center">
				<div class="logo"><a href="index.php">
					<img src="./img/logo.png" class="img-responsive" alt="Responsive image">
				</a></div>
			</div>
			<div class="col-md-1 col-md-offset-3 text-center navbar-collapse collapse down"><a href="https://www.facebook.com/AlexeiAj">
				<img src="./img/facebook.png" class="img-responsive" alt="Responsive image">
			</a></div>
			<div class="col-md-1 text-center navbar-collapse collapse down"><a href="https://twitter.com/AlexeiAj">
				<img src="./img/twitter.png" class="img-responsive" alt="Responsive image">
			</a></div>
			<div class="col-md-1 text-center navbar-collapse collapse down"><a href="contato.php">
				<img src="./img/contato.png" class="img-responsive" alt="Responsive image">
			</a></div>
		</div>
	</div>
	<div class="container-fluid borderdown">
		<div class="menu">
			<ul class="nav navbar-nav">
				<?php
					$run_cat = mysqli_query($conexao ,"SELECT * FROM category") or die("Not Found");
					
					while($cat_row = mysqli_fetch_array($run_cat)){
						$cat_id = $cat_row['cat_id'];
						$cat_name = $cat_row['cat_name'];
						
						if($cat_id == "1"){
							echo ("<li><a href='index.php'>$cat_name</a></li>");
						}else{
							echo ("<li><a href='index.php?cat=$cat_id'>$cat_name</a></li>");
						}
					}
				?>
			</ul>
			<form class="navbar-form navbar-right navbar-collapse collapse">
				<input type="text" class="form-control" placeholder="Search" name="src">
				<button type="submit" class="btn btn-default">Search</button>
			</form>
		</div>
	</div>
</header>