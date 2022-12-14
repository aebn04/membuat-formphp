<?php
     include "koneksi.php";
     
     $nama_barang=$_POST['nama_barang'];
     $kode_barang=$_POST['kode_barang'];
     $tgl=$_POST['tgl'];
     $quantity=$_POST['quantity'];
     $harga=$_POST['harga'];
	 $harga_total=$harga*$quantity;
 
    $input=mysqli_query($con,"insert into inventory(nama_barang,kode_barang,tgl,quantity,harga,harga_total)
                    values('$nama_barang','$kode_barang','$tgl','$quantity','$harga','$harga_total')");

?>

<html>
	<head>
	<tittle>Entry Data Barang</tittle>
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
			<th>Harga</th>
			<th>Harga_total</th>
		</tr>
		<?php 
						
						$no = 0;
						$sql = "SELECT * FROM inventory";
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
								<td><?php echo @$data['harga'] ?></td>
								<td><?php echo @$data['harga_total'] ?></td>
								
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
			<form method="post" action="data.php">
				<input type='submit' value='Kembali'>
			</form>
	</body>
</html>