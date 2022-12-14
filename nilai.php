<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
  <html>
      <head>
         <title>Input Data</title>
      </head>
      <body>
	  <h1 align="center">Nilai</h1>	
	    <p>
		    <form method="post" action="simpan_nilai.php" align="center">
	    		
	    				
	 						<tr><td>Nama Mahasiswa </td><td><input type="text" name="nama_mahasiswa" id="nama_mahasiswa" required></td></tr>
							<tr><td>NPM </td><td><input type="text" name="npm_mahasiswa" id="npm_mahasiswa" minlength="2" maxlength="20" required></td></tr>
						    <tr><td>Mata Kuliah </td><td><input type="text" name="mata_kuliah" id="mata_kuliah" required></td></tr>
							<tr><td>Nilai </td><td><input type="text" name="nilai" id="nilai" required></td></tr>
							
	    <p>
		    <input type="submit" value="Simpan">
	<table align="center">
		      		<tr>
		        	<td>Copyright &copy; <?php echo date('Y'); ?> Akmal Najib </td>
		      		</tr>
		</table>
     </body>
     </html>