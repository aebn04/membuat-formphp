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
		    <form method="post" action="data_mahasiswa.php" align="center">
	    		
	    				
	 						<tr><td>Nama Mahasiswa </td><td><input type="text" name="nama_mahasiswa" id="nama_mahasiswa" required></td></tr>
							<tr><td>NPM </td><td><input type="text" name="npm_mahasiswa" id="npm_mahasiswa" minlength="4" maxlength="20" required></td></tr>
						    <tr><td>Kelas </td><td><input type="text" name="kelas_mahasiswa" id="kelas_mahasiswa" required></td></tr>
							
	    <p>
		    <input type="submit" value="Simpan">
	<table align="center">
		      		<tr>
		        	<td>Copyright &copy; <?php echo date('Y'); ?> Akmal Najib </td>
		      		</tr>
		</table>
     </body>
     </html>