<?php 
  session_start();
  include("header.php");
  include("conect.php");

     if(isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['kelamin']) && isset($_POST['jurusan']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['about']) && isset($_POST['alamat']))
    {
      echo"ganteng";
      $nama1 = strip_tags($_POST['nama']);
      $nim1 = strip_tags($_POST['nim']);
      $email1 = strip_tags($_POST['email']);
      $password1 = md5(trim(htmlspecialchars($_POST['password'])));
      $jurusan1 = $_POST['jurusan'];
      $kelamin1 = $_POST['kelamin'];
      $about1 = $_POST['about'];
      $alamat1 = $_POST['alamat'];
    
    mysql_query("UPDATE data_mahasiswa SET Nama = '$nama1', Email = '$email1', Password = '$password1', Kelamin = '$kelamin1', Jurusan = '$jurusan1' ,About = '$about1', Alamat = '$alamat1' WHERE Nim = '$_GET[details]'");
    $_SESSION['edit'] = true;
    
  header("Location: profile.php?cat_name=Profile&details=".$_SESSION['nim']."");
  exit;
  }
 ?>