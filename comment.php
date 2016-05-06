<?php

	include("header.php");
	include("conect.php");
  	session_start();

		if(isset($_POST['submit_comment']))
		{echo"sassa";
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$subjek = $_POST['subjek'];
			$comment = $_POST['comment'];
			$date = date('Y-m-d h:i:s');
		mysqli_query($koneksi,"INSERT INTO comments(name, email, subject , comment , dates ) VALUES('$nama','$email','$subjek','$comment','$date')") or die(mysql_error());
		$_SESSION['update_comment'] = true;
		header("Location: article.php");
		}
?>