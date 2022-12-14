<?php
	include "koneksi.php";

?>
<!DOCTYPE html>
<html>
	<head>
	<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
	<table align="center" border="1">
		<tr>
			<th>No</th>
			<th>ID BARANG</th>
			<th>NAMA BARANG</th>
			<th>KODE BARANG</th>
			<th>TANGGAL</th>
			<th>QTY</th>
		</tr>
		<?php 
						
						$no = 0;
						$sql = "SELECT * FROM inventory=";
                        $qury = mysqli_query($con,$sql);
						
						while (@$data = mysqli_fetch_array($qury)) {	
							$no++;	
						?>
							<tr>
								<td><?php echo @$no ?></td>
								<td><?php echo @$data['id_inventory'] ?></td>
								<td><?php echo @$data['nama_barang'] ?></td>
								<td><?php echo @$data['kode_barang'] ?></td>
								<td><?php echo @$data['tgl'] ?></td>
								<td><?php echo @$data['quantity'] ?></td>
								
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
	<form method="post" action="kliklogin.php">
		<input type='submit' value='Kembali'>
	</form>
	</body>
</html>