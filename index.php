<?php
  session_start();
  include("header.php");
  include("conect.php");
?>
<style type="text/css">

.navbar-brand{
  font-size: 1.8em;
}
#topContainer{
  background-image: url("image/unsridepan.jpg");
  height: 700px;
  width: 100%;
  background-size: cover;
}
#topDescription{
  margin-top: 170px;
  text-align: center;
  color: #f1c40f;
}
</style>
<script type="text/javascript">
  $("#topContainer").css("height".$(window).height());
</script>
<!-- Fixed navbar -->
  <header class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgba( 0 , 0 , 0 ,0.5);">
  <div class="container">
    <div class="navbar-header"> 
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="article.php" class="navbar-brand"><b>Ilkom Developer</b> <span class="label label-default">Beta</span></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
      <li role="presentation">
        <a href="#" class="a-menu " data-toggle="modal" data-target="#myModal">
          <b>Register</b>
        </a>
      </li>
      <li role="presentation">
        <a href="#" class="a-menu " data-toggle="modal" data-target="#myModal1">
          <b>Contact Us</b>
        </a>
      </li>
    </ul>
  </div>
</div>
</header>

<div id="topContainer">
<div class="row">
   <div class="col-md-6 col-md-offset-3" id="topDescription"  style="background-color: rgba( 0 , 0 , 0 ,0.4); padding:50px 50px 50px 50px;">
       <?php
          if(isset($_SESSION['terdaftar'])){
            echo'<div class="alert alert-success" role="alert">Anda Telah Berhasil Mendaftar</div><br>';
            unset($_SESSION['terdaftar']);
            } 
           elseif(isset($_SESSION['salah_password'])){
          echo'<div class="alert alert-danger" role="alert">Nim atau Password yang anda masukan salah</div><br>';
          unset($_SESSION['salah_password']);
        }
        ?>

      <h1><b>Selamat datang di Ilkom Developer</b></h1><br>

    <p style="font-size:20px;">Ilkom Developer adalah Badan Otonom di Fasilkom Unsri sebagai komuntias bagi para programer 
      fasilkom untuk berbagi dan mendapatkan pengalaman</p> </br>
    <form class="form-inline" action="login.php" method="post">
            <div class="form-group">
              <input type="text" placeholder="Nim" class="form-control" name="nim">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
  </div>
</div>
</div>

<!-- Register -->
<div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" style="margin-right:10px;">&times;</button>
                <h2 class="modal-title">Pendaftaran Anggota</h2>
              </div>           
              <div class="modal-body">
                <form action="register.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                  <table class="table">
                    <tr>
                      <td><b>Foto*</b></td>
                      <td>
                        <input type="file" id="image" name="image" class="btn btn-primary">
                      </td>
                    </tr>
                    <tr>
                      <td><b>NAMA* </b></td>
                <td>
                  <input type="text" name="nama" placeholder="Nama" class="form-control" style="margin-bottom:10px;" required>
                </td>
              </tr>
              <tr>
                <td><b>NIM* </b></td>
                <!--<td><b> : </b>&nbsp; &nbsp; &nbsp; &nbsp;</td>-->
                <td> <input type="text" name="nim" placeholder="Nim" class="form-control" style="margin-bottom:10px;" required> </td>
              </tr>
              <tr>
                <td><b>EMAIL* </b></td>
                <!--<td><b> :</B> &nbsp; &nbsp; &nbsp; &nbsp;</td>-->
                <td> <input type="email" name="email" placeholder="E-mail" class="form-control" style="margin-bottom:10px;" required> </td>
              </tr>
              <tr>
                <td><b>PASSWORD* </b></td>
                <!--<td><b> : </b>&nbsp; &nbsp; &nbsp; &nbsp;</td>-->
                <td> <input type="password" name="password" placeholder="Password" class="form-control" style="margin-bottom:10px;" required> </td>
              </tr>
              <tr>
                <td><b>JURUSAN</b> </td>
                <!--<td><b> : </b>&nbsp; &nbsp; &nbsp; &nbsp;</td>-->
                <td>
                  <select name="jurusan" class="form-control" style="margin-bottom:10px;" required>
                    <option values="Teknik Informatika">Teknik Informatika</option>
                    <option values="Sistem Informasi">Sistem Informasi</option>
                    <option values="Sistem Komputer">Sistem Komputer</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td><b>JENIS KELAMIN</b> </td>
                <!--<td><b> : </b>&nbsp;&nbsp; &nbsp; &nbsp;</td>-->
                <td>
                  <label class="radio-inline" style="margin-bottom:10px;">
                    <input type="radio" name="kelamin" value="Laki-Laki" checked>Laki - Laki
                  </label>
                  <label class="radio-inline" style="margin-bottom:10px;">
                    <input type="radio" name="kelamin" value="Perempuan">Perempuan
                  </label>
                </td>
              </tr>
              <tr>
                <td valign="top"><b>Tentang Saya</b> </td>
                <!--<td valign="top"><b> : </b></td>-->
                <td><textarea name="about" class="form-control" cols="25" rows="3" style="margin-bottom:10px;"></textarea> </td>
              </tr>
              <tr>
                <td valign="top"><b>Alamat</b> </td>
                <!--<td valign="top"><b> : </b></td>-->
                <td><textarea name="alamat" class="form-control" cols="25" rows="5" style="margin-bottom:10px;"></textarea> </td>
              </tr>
              <div class="modal-footer">
              <tr>
                <td>
                  <center>
                    <input type="submit" name="submit_value" class="btn btn-success active" value="Sign up">
                    <input type="reset" name="reset" class="btn btn-danger active">
                </center>
                </td>
              </tr>
            </div>
                </table>  
                      </div>
                    </div>

                  </div>
                </div>
</div>
</form>

<!-- Contact Us -->

<div id="myModal1" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="color:black;">
          <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal" style="margin-right:10px;">&times;</button>
            <h2 class="modal-title">Contact Us Form</h2>
          </div>           
          <div class="modal-body">
          <form class="form-horizontal" action="comment.php" method="post" role="form">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="nama" placeholder="Insert your Name" id="name">
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
                <input type="submit" class="btn btn-block btn-danger" name="submit_comment">
              </div>
                </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
</div>

      <hr class="featurette-divider">
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" >
      
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="image/azhary.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Dinas Riset</h2>
          <p>Dinas Riset adalah dinas yang melakukan berbagai Riset mengenai 
              Pemrograman sehingga bisa Menjadi Refrensi untuk membagikan
              Ilmu – ilmu yang telah mereka dapat ke Anggota lain.
              Jadi diRiset nanti Anggota nya akan di ajak untuk mempelajari
              Pemrograman lebih lanjut untuk bisa menentukan Silabus dan
              Membuat Modul untuk bahan Ajar pada pembelajaran kita tiap 
              minggu nya.
          </p>
          <p><a href="#" class="a-menu btn btn-info" data-toggle="modal" data-target="#myModal2">More Info &raquo;</a></p>
        </div>

        <!--- Riset -->

        <div class="col-lg-4">
          <img class="img-circle" src="image/yoga.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Dinas PSDM</h2>
          <p>Dinas PSDM adalah dinas yang bertujuan untuk mencari Strategi
              jitu untuk UP SKILL mahasiswa Fasilkom Unsri Dan membantu
              mengembangkan SOFT SKILL mereka ,mengajak Mahasiswa
              Fasilkom untuk lebih meningkatkan Skill Mereka, Mengajarkan
              Mahasiswa2 lain baik langsung maupun tidak langsung seperti 
              Dari Artikel ,Video dan lain sebagainya.
          </p>
          <p><a href="#" class="a-menu btn btn-danger" data-toggle="modal" data-target="#myModal3">More Info &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="image/fauzan.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Dinas Infokom</h2>
          <p>Dinas Infokom adalah dinas yang bertujuan untuk membagikan dan
             mencari informasi terkait Teknologi ,Menyebarkan 
             kegiatan-kegiatan IDev agar IDev dapat  dikenal di masyarakat Luar,
             Melakukan hal2 multimedia seperti Documentasi Kegiatan ,Design
             Poster dan lain – lain ,buat Video kegiatan dan lain sebagai nya.
          </p>
          <p><a href="#" class="a-menu btn btn-primary" data-toggle="modal" data-target="#myModal4">More Info &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <hr class="featurette-divider">

      <div id="myModal2" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="color:black;">
          <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal" style="margin-right:10px;">&times;</button>
            <h2 class="modal-title">Dinas Riset</h2>
          </div>           
          <div class="modal-body text-center">
            <div class="row-fluid">
                  <div class="span10 offset1">
                      <div id="modalTab">
                          <div class="tab-content">
                              <div class="tab-pane active" id="about">
    <img src="image/azhary.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
      <h3 class="media-heading">Azhary Arliansyah <small> Ketua Dinas Riset</small></h3>
                <span><strong>Skills: </strong></span>
                <span class="label label-warning">HTML5/CSS</span>
                <span class="label label-info">CodeIdnigter</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-success">JSON,AJAX,Jquery,AngularJS</span>
    </center>
    <hr>
    <center>
    <p class="text-left"><strong>Tentang: </strong><br>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
      <br>
      </center>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
          </div>
        </div>

      </div>
    </div>
</div>


      <div id="myModal4" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="color:black;">
          <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal" style="margin-right:10px;">&times;</button>
            <h2 class="modal-title">Dinas Infokom</h2>
          </div>           
          <div class="modal-body text-center">
            <div class="row-fluid">
                  <div class="span10 offset1">
                      <div id="modalTab">
                          <div class="tab-content">
                              <div class="tab-pane active" id="about">
    <img src="image/fauzan.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
      <h3 class="media-heading">Fauzan Rayadi <small> Ketua Dinas Infokom</small></h3>
                <span><strong>Skills: </strong></span>
                <span class="label label-warning">HTML5/CSS</span>
                <span class="label label-info">PHP</span>
                <span class="label label-info">Design</span>
                <span class="label label-success">C#/C/C++</span>
    </center>
    <hr>
    <center>
    <p class="text-left"><strong>Tentang: </strong><br>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
      <br>
      </center>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
          </div>
        </div>

      </div>
    </div>
</div>


      <div id="myModal3" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="color:black;">
          <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal" style="margin-right:10px;">&times;</button>
            <h2 class="modal-title">Dinas PSDM</h2>
          </div>           
          <div class="modal-body text-center">
            <div class="row-fluid">
                  <div class="span10 offset1">
                      <div id="modalTab">
                          <div class="tab-content">
                              <div class="tab-pane active" id="about">
    <img src="image/yoga.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
      <h3 class="media-heading">Yoga Anugrah Pratama.SY <small> Ketua Dinas PSDM</small></h3>
                <span><strong>Skills: </strong></span>
                <span class="label label-warning">HTML5/CSS</span>
                <span class="label label-info">PHP</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-success">Bootstrap</span>
    </center>
    <hr>
    <center>
    <p class="text-left"><strong>Tentang: </strong><br>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
      <br>
      </center>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
          </div>
        </div>

      </div>
    </div>
</div>

      <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="image/mobiledevelopment.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption" style="background-color: rgba( 0 , 0 , 0 ,0.5);">
              <h1>Mobile Development</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="image/gamedevelopment.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption" style="background-color: rgba( 0 , 0 , 0 ,0.5);">
              <h1>Game Development</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="image/webdevelopment.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption" style="background-color: rgba( 0 , 0 , 0 ,0.5);">
              <h1>Web Development</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>-->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
      <footer class="navbar">
        <p class="pull-right">
          <a href="#">
            <i style="font-size:4.5em" class="glyphicon glyphicon-chevron-up"></i>
          </a>
        </p>
          <p class="navbar-text pull-left">&copy; 2016 Yoga Anugrah Pratama.SY</p>
  </footer>
</body>


