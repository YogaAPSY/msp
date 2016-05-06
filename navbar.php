<?php
include("header.php");
include("conect.php");
?>
</head>
<body>
  <header class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header"> 
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="article.php" class="navbar-brand">Ilkom Developer <span class="label label-default">Beta</span></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
			<?php 
				if (isset($_GET['cat_name'])) {
						if ( $_GET['cat_name'] != 'Home'){
							$class = ' ';
						} else{
							$class = 'active';
						}
					} else{
						$class = 'active';
					}
					echo '<li class="'.$class.'"><a href="article.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>';
			?>

    		<li class="dropdown">
     		 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
     		 	Articles <span class="caret"></span></a>
      			<ul class="dropdown-menu">
        			<?php
						$sel_cat =  mysqli_query($koneksi ,"SELECT * FROM category") or die (mysqli_error());
						while ($row = mysqli_fetch_assoc($sel_cat)){
						echo'
							<li><a href="menu.php?cat_name='.$row['c_name'].'">'.ucfirst($row['c_name']).'</a></li>
							';
						}
					?>
      			</ul>
    		</li>

    		<?php
			
					if (isset($_GET['cat_name'])) {
						if ( $_GET['cat_name'] == 'Rangking'){
							$class = 'active';
						} else{
							$class = ' ';
						}
					} else{
						$class = '';
					}
					echo'
						<li class="'.$class.'"><a href="rangking.php?cat_name=Rangking">Rangking</a></li>
					';
				?>
			<?php
				if(isset($_SESSION['nama'])){
					echo'<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, '.$_SESSION['nama'].' <b class="caret"></b></a>';
				}
			?>
                <ul class="dropdown-menu">
                    <?php
                    	if(isset($_SESSION['nim'])){
						echo'
						<li><a href="profile.php?cat_name=Profile&details='.$_SESSION['nim'].'"><i class="icon-envelope"></i>Profile</a></li>
						';
					}
                    ?>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
                </ul>
            </li>
              
		</ul>
	</div>
</div>
</header><br><br><br>
