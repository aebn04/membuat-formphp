<?php
session_start();

include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];
$login=mysqli_query($con,"select * from user where username='$username' and password='$password'");
 
?>

<html>
    <head>
        <title>Beranda</title>
    </head>
    <body>
	<table align="center" border="3">
		  <tr>
				<td>
					<table align="center">
						<tr bgcolor="#FFA800" align="center"><td>Menu</td></tr>
					</table>
	 		 		<table border="3">
	  						<tr>
								<tr><td><a href="kliklogin.php">Beranda</a></td>
								</tr>
						  		<tr><td><a href="luassegitiga.php">Menghitung Luas Segitiga </a></td>
						  		</tr>
								<tr><td><a href="Tugas1.php">Menghitung Jari-Jari lingkaran </a></td>
								</tr>
								<tr><td><a href="bola.php">Menghitung Volume Bola </a></td>
								</tr>
								<tr><td><a href="latihaninput.php">Latihan Input </a></td>
								</tr>
								<tr><td><a href="data.php">Data Barang </a></td>
								</tr>
								<tr><td><a href="nilai.php">Logic Aritmatika </a></td>
								</tr>
								</tr>
								<tr><td><a href="vaksin.php">Pendataan Vaksin </a></td>
								</tr>
							</tr>
					</table>
				</td>
			</tr>
	  </table>
		<table align="center">
		    <tr>
		        <td>Copyright &copy; <?php echo date('Y'); ?> Akmal Najib </td>
		    </tr>
		</table>
    </body>
</html>