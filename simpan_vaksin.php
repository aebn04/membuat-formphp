<?php  
include 'koneksi.php';

$nama=$_POST['nama'];  
$no_ktp=$_POST['no_ktp'];
$alamat=$_POST['alamat'];
$vaksin1=$_POST['vaksin1'];
$vaksin2=$_POST['vaksin2'];
$vaksin3=$_POST['vaksin3'];

$input=mysqli_query($con,"insert into data_vaksin(no_ktp,nama,alamat,vaksin1,vaksin2,vaksin3)
                    values('$no_ktp','$nama','$alamat','$vaksin1','$vaksin2','$vaksin3')");

echo "Your Data Inserted";  
?>

<html>
	<head>
	<tittle>Entry Simpan Nilai</tittle>
	</head>
	<body>
	<table align="center" border="1">
		<tr>
			<th>No KTP</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Vaksin Ke-1</th>
			<th>Vaksin Ke-2</th>
            <th>Vaksin Ke-3</th>
		</tr>
		<?php 
						$sql = "SELECT * FROM data_vaksin";
                        $qury = mysqli_query($con,$sql);
						
						while (@$data = mysqli_fetch_array($qury)) {		
						?>
							<tr>
								<td><?php echo @$data['no_ktp'] ?></td>
								<td><?php echo @$data['nama'] ?></td>
								<td><?php echo @$data['alamat'] ?></td>
								<td><?php echo @$data['vaksin1'] ?></td>
								<td><?php echo @$data['vaksin2'] ?></td>
                                <td><?php echo @$data['vaksin3'] ?></td>
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
			<form method="post" action="vaksin.php">
				<input type='submit' value='Kembali'>
			</form>
	</body>
</html>