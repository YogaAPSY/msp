<?php 
session_start();

include("header.php");
?>
</head>
<?php
include("conect.php");
include("navbar.php");
?>

<?php

$sql = mysqli_query($koneksi,"SELECT * FROM data_mahasiswa WHERE Nama LIKE '%$_GET[search_rank]%' OR Nim like '%$_GET[search_rank]%'") or die (mysqli_error());
			echo "
			<div class='clearfix'></div>
			<div class='col-lg-12'>
			<h1 align='center'><b>Total Point Anggota IDev 2016</b></h1>
			<h4 class='text-danger' align='center'>".date('Y-m-d h:i:s')." WIB</h4>
			<hr>";

			if(isset($_GET['search_submit'])){
			echo'
			<div class="panel panel-default">
				<div class="panel-body">
					<h4>"'.mysqli_num_rows($sql).'" Pencarian untuk <b>"'.$_GET['search_rank'].'"</b></h4>
				</div>
			</div>
			';
			}

			echo'
				<div class="panel panel-default">
		    		<div class="panel-heading">
						<div class="col-md-3 pull-right">
							<form action="search_rank.php" role="form">
								<div class="input-group">
									<input type="search" name="search_rank" class="form-control" placeholder="Search Something">
									<div class="input-group-btn">
										<button name="search_submit" class="btn btn-default" type="submit">
										<i class="glyphicon glyphicon-search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="clearfix"></div>
		    		</div>
	   	  		<div class="panel-body">
			';

			echo"
			<table class='table table-striped' >
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Nim</th>
						<th>Kelamin</th>
						<th>Jurusan</th>
						<th>Point</th>
						<th>Detail</th>
					</tr>
				</thead> <tbody>";
					$no=1;
					while ($row = mysqli_fetch_array($sql)) {
					$_SESSION['Nama'] = $row['Nama'];
					$_SESSION['Nim'] = $row['Nim'];
					$_SESSION['Kelamin'] = $row['Kelamin'];
					$_SESSION['Jurusan'] = $row['Jurusan'];

				echo"
					<tr>
						<td>".$no."</td>
						<td>".$_SESSION['Nama']."</td>
						<td>".$_SESSION['Nim']."</td>
						<td>".$_SESSION['Kelamin']."</td>
						<td>".$_SESSION['Jurusan']."</td>
						<td>".$no."</td>
						<td><a class='btn btn-info btn-xs' href='profile.php?details=".$_SESSION['Nim']."'>Detail</a></td>
					</tr>
			";
			$no++;
		}
		echo "</tbody></table></div></div></div>
		";
		include("footer.php");
?>