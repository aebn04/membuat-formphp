<?php
     include "koneksi.php";
     
     $nama_mahasiswa=$_POST['nama_mahasiswa'];
     $npm_mahasiswa=$_POST['npm_mahasiswa'];
     $kelas_mahasiswa=$_POST['kelas_mahasiswa'];
 
    
    $input=mysqli_query($con,"insert into mahasiswa(nama_mahasiswa,npm_mahasiswa,kelas_mahasiswa)
                    values('$nama_mahasiswa','$npm_mahasiswa','$kelas_mahasiswa')");

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
			<th>Kelas</th>
		</tr>
		<?php 
						$sql = "SELECT * FROM mahasiswa";
                        $qury = mysqli_query($con,$sql);
						
						while (@$data = mysqli_fetch_array($qury)) {		
						?>
							<tr>
								<td><?php echo @$data['nama_mahasiswa'] ?></td>
								<td><?php echo @$data['npm_mahasiswa'] ?></td>
								<td><?php echo @$data['kelas_mahasiswa'] ?></td>
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
	</body>
</html>