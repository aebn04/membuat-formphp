<?php
include "koneksi.php";
?>

<html>
	<head>
	<tittle>Entry Simpan Nilai</tittle>
	</head>
	<body>
	<table align="center" border="1">
		<tr>
			<th>NAMA Mahasiswa</th>
			<th>NPM Mahasiswa</th>
			<th>Mata_kuliah</th>
			<th>Nilai</th>
			<th>Grade</th>
		</tr>
		<?php 
						
						$no = 0;
						$sql = "SELECT * FROM nilai";
                        $qury = mysqli_query($con,$sql);
						
						while (@$data = mysqli_fetch_array($qury)) {	
							$no++;	
						?>
							<tr>
								<td><?php echo @$no ?></td>
								<td><?php echo @$data['nama_mahasiswa'] ?></td>
								<td><?php echo @$data['npm_mahasiswa'] ?></td>
								<td><?php echo @$data['mata_kuliah'] ?></td>
								<td><?php echo @$data['nilai'] ?></td>
								<td><?php echo @$data['grade'] ?></td>
							</tr>
							<?php
						}

						 ?>	
					<table align="center">
			      		<tr>
			        	<td>Copyright &copy; <?php echo date('Y'); ?> Akmal Najib </td>
			      		</tr>
			    	</table>		
	</table>
			<form method="post" action="nilai.php">
				<input type='submit' value='Kembali'>
			</form>
	</body>
</html>