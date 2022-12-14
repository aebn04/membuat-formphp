<?php
    include "koneksi.php";
    ?>

<html>
<head>
    <title>Menghitung Luas Segitiga</title>
</head>
	<body>
		<form method="post" action="hitungsegitiga.php">
			<table>
				<tr><td>Alas Segitiga		: </td><td> </td><td><input type="text" name="alas" required></td></tr>
				<tr><td>Tinggi Segitiga		: </td><td> </td><td><input type="text" name="tinggi" required></td></tr>
            <tr>
			<td></td><td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
</body>
</html>