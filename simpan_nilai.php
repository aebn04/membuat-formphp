<?php
     include "koneksi.php";
     
     $nama_mahasiswa=$_POST['nama_mahasiswa'];
     $npm_mahasiswa=$_POST['npm_mahasiswa'];
     $mata_kuliah=$_POST['mata_kuliah'];
     $nilai=$_POST['nilai'];
     if ($nilai > 90 ){
         $grade ='A+';
     } elseif($nilai > 80){
        $grade = "A";
    } elseif($nilai > 70){
        $grade = "B+";
    } elseif($nilai < 0){
        $grade = "B";
    } elseif($nilai > 50){
        $grade = "C+";
    } elseif($nilai > 40){
        $grade = "C";
    } elseif($nilai > 30){
        $grade = "D";
    } elseif($nilai > 20){
        $grade = "E";
    } else {
        $grade = "Nilai salah";
    }
 
    /*save file */
    
    $input=mysqli_query($con,"insert into nilai(nama_mahasiswa,npm_mahasiswa,mata_kuliah,nilai,grade)
                    values('$nama_mahasiswa','$npm_mahasiswa','$mata_kuliah','$nilai','$grade')");

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
						$sql = "SELECT * FROM nilai";
                        $qury = mysqli_query($con,$sql);
						
						while (@$data = mysqli_fetch_array($qury)) {		
						?>
							<tr>
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