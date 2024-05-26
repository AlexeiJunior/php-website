<?php
	if(!isset($_GET['post'])) $pagein = false;
	if(isset($_GET['post'])) $pagein = true;
?>
<div class="section">
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="webcolorlightgray pad_in">
				<?php
					if($pagein) include './include/post_inside.php';
					else include './include/post_outside.php';
				?>
			</div>
		</div>
	</div>
  </div>
</div>