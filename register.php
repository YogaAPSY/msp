<?php
	include("conect.php");
	session_start();

	if(isset($_POST['submit_value']))
	{
		$nama1 = strip_tags($_POST['nama']);
		$nim1 = strip_tags($_POST['nim']);
		$email1 = strip_tags($_POST['email']);
		$password1 = md5(trim(htmlspecialchars($_POST['password'])));
		$jurusan1 = $_POST['jurusan'];
		$kelamin1 = $_POST['kelamin'];
		$about1 = $_POST['about'];
		$alamat1 = $_POST['alamat'];
		if(isset($_FILES['image'])){

	    $image_name = $_FILES['image']['name'];
	    $image_tmp = $_FILES['image']['tmp_name'];
	    $image_size = $_FILES['image']['size'];
	    $image_ext = pathinfo($image_name , PATHINFO_EXTENSION);
	    $image_path = 'image/'.$image_name;
	    $image_db_path = 'image/'.$image_name;
	    
	    if($image_size < 100000000 ){
	      if($image_ext == 'jpg' || $image_ext == 'png' || $image_ext == 'gif'){
	        
	        if(move_uploaded_file($image_tmp, $image_path)){
			$ins_sql = "INSERT INTO data_mahasiswa(image,Nama, Nim, Email , Password , Kelamin , Jurusan ,About, Alamat)
			VALUES('$image_db_path','$nama1','$nim1','$email1','$password1','$kelamin1','$jurusan1','$about1','$alamat1')";
			if(mysqli_query($koneksi,$ins_sql)){
			$_SESSION['terdaftar'] = true;
			header("Location: index.php");
		}else{
            $error = die(mysql_error());
		}
	}
	 else{
          $error = '<div class"alert alert-danger">Maaf ,Gambar nya tidak bbisa di upload</div>';
        }
      }
      else{
        $error = '<div class"alert alert-danger">Format gambar tidak benar</div>';
      }
    }
    else{
      $error = '<div class"alert alert-danger">Ukuran gambar terlalu besar</div>';
    }
    }
	}
?>