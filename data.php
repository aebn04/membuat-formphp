<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
  <html>
      <head>
         <title>Input Data</title>
      </head>
      <body>
	  <h1 align="center">PENDATAAN BARANG</h1>	
	    <p>
		    <form method="post" action="simpan_data.php" align="center">
	    		
	    				
	 						<tr><td>Nama Barang </td><td><input type="text" name="nama_barang" id="nama_barang" required></td></tr>
							<tr><td>Kode Barang </td><td><input type="text" name="kode_barang" id="kode_barang" minlength="4" maxlength="20" required></td></tr>
						    <tr><td>Tanggal </td><td><input type="text" name="tgl" id="tgl" required></td></tr>
							<tr><td>Qty </td><td><input type="text" name="quantity" id="quantity" required></td></tr>
							<tr><td>Harga </td><td><input type="text" name="harga" id="harga" required></td></tr>
				
	    <p>
		    <input type="submit" value="Simpan">
	    </p>
			    
		    </form>

	    </p>
	<table align="center">
		      		<tr>
		        	<td>Copyright &copy; <?php echo date('Y'); ?> Akmal Najib </td>
		      		</tr>
		</table>
		<form method="post" action="kliklogin.php">
		<input type='submit' value='Kembali'>
		</form>
     </body>
     </html>