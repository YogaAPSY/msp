<?php
	session_start();
	include("header.php");
	include("conect.php");
?>

</head>
<body>
	<?php include("navbar.php"); ?>
	<div class="container">
		<article class="row">
			<section class="col-lg-8">
				<?php

				$result = mysqli_query($koneksi , "SELECT * FROM posts WHERE id = '$_GET[post_id]' AND status='published'");
				$no = 1;
				while($row = mysqli_fetch_assoc($result)){ 
				if($row['status'] == 'published'){
						echo'
							<div class="panel panel-success">
							<div class="panel-heading">
								<h3>'.$row['tittle'].'</h3>
							</div>
								<div class="panel-body">
										<img src="'.$row['image'].'" width="100%">
										<p class="text-danger">'.date('Y-m-d h:i:s').' WIB - '.$row['author'].'</p>
										<p>
											'.$row['description'].'
										</p>
								</div>
							</div>	

						';
					}
					}
				?>	
				<hr />
				
 				<div class="page-header"><h1><i class="glyphicon glyphicon-comment"></i> Comment</h1></div>
				<form class="form-horizontal" action="comment.php" method="post" role="form">
					<div class="form-group">
       				 	<label for="nama">Nama</label>
        				<input type="text" id="nama" name="nama" class="form-control" placeholder="Insert your Name">
     				 </div>
     				 <div class="form-group">
       				 	<label for="email">Email Address</label>
        				<input type="email" id="email" name="email" class="form-control" placeholder="Insert your Email">
     				 </div>
     				  <div class="form-group">
       				 	<label for="subjek">Subjek</label>
        				<input type="text" id="subjek" name="subjek" class="form-control" placeholder="Insert your Subjek">
     				 </div>
     				 <div class="form-group">
       				 	<label for="email">Comment</label>
        				<textarea class="form-control" rows="10" name="comment" style="resize:none"></textarea>
     				 </div>
   				  <div class="form-group">
			        <label for="submit"></label>
			        <input type="submit" class="btn btn-block btn-danger" name="submit_comment" value="Comment">
			      </div>
              </form>
			</section>
			<aside class="col-lg-4">
			<?php 
				include("sidebar.php");
			 ?>
		
			</aside>
		</article>
		<div class="clearfix"></div>
		<div>
			
		</div>
	</div>
	<?php include("footer.php"); ?>
</body>
</html>