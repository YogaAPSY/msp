<?php 
include("header.php");
session_start();
?>
</head>
<?php
include("conect.php");

include("navbar.php");
?>

<?php
$sql = mysqli_query($koneksi,"SELECT * FROM data_mahasiswa");
			echo "
			<div class='clearfix'></div>
			<div class='col-lg-12'>
			<h1 align='center'><b>Total Point Anggota IDev 2016</b></h1>
			<h4 class='text-danger' align='center'>".date('Y-m-d h:i:s')." WIB</h4>
			<hr>";

			echo'
				<div class="panel panel-default">
		    		<div class="panel-heading">
						<div class="col-md-3 pull-right">
							<form action="search_rank.php" role="form">
								<div class="input-group">
									<input type="search" name="search_rank" class="form-control" placeholder="Search Something">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
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

			echo'
			<table class="table table-striped" >
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Nim</th>
						<th>Kelamin</th>
						<th>Jurusan</th>
						<th>Point</th>
						<th>Profile</th>
					</tr>
				</thead> <tbody>';
					$no=1;
					while ($row = mysqli_fetch_array($sql)) {

				echo'
					<tr>
						<td>'.$no.'</td>
						<td>'.$row['Nama'].'</td>
						<td>'.$row['Nim'].'</td>
						<td>'.$row['Kelamin'].'</td>
						<td>'.$row['Jurusan'].'</td>
						<td>'.$row['Points'].'</td>
						<td><a  href="profile.php?details='.$row['Nim'].'" class="btn btn-info btn-xs" data-to>Detail</a></td>
					
					</tr>
			';
			$no++;
		}
		echo '</tbody></table></div></div></div> <div class="clearfix"></div>
		<br><br><br><br><br><br><br><br><br>
		';

		include("footer.php");
?>