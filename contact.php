<?php
	include("header.php");
	include("conect.php");

	if(isset($_POST['submit_contact'])){
		$date = date('Y-m-d h:i:s');
		mysqli_query($koneksi,"INSERT INTO comments(name, email, subject, comment, dates) VALUES('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[comment]','$date')") or die(mysql_error());
	}
?>
</head>
<?php include("navbar.php"); ?>
<div class="container">
<article class="row">
	<section class="col-lg-8">
	<div class="jumbotron">
		<h2>Contact Us Form</h2><?php echo $date; ?>
	</div>
	<form class="form-horizontal" action="contact.php" method="post" role="form">
		<div class="form-group">
		 	<label for="name" class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="name" placeholder="Insert your Name" id="name">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email Addrres</label>
			<div class="col-sm-8">
				<input type="email" class="form-control" name="email" placeholder="Insert your Email" id="email">
			</div>
		</div>
		<div class="form-group">
			<label for="subject" class="col-sm-2 control-label">Subject</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="subject" placeholder="Subject" id="subject">
			</div>
		</div>
		<div class="form-group">
			<label for="comment" class="col-sm-2 control-label">Comment</label>
			<div class="col-sm-8">
				<textarea class="form-control" rows="10" name="comment" style="resize:none"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"></label>
			<div class="col-sm-8">
				<input type="submit" class="btn btn-block btn-danger" name="submit_contact">
			</div>
				</div>
			</form>
		</section>
		<aside class="col-lg-4">
			<?php 
				include("sidebar.php");
			 ?>
		
		</aside>
	</article>
	<?php include("footer.php"); ?>
</div>