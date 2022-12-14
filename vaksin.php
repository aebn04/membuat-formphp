<html>  
    <body>
        <center>  
            <form action="simpan_vaksin.php" method="post">  
                <table border="1">  
                <tr><td>Name</td>  
                <td><input type="text" name="nama"/></td>  
                </tr>
                <tr><td>Nomor KTP</td>  
                <td><input type="text" name="no_ktp"/></td>  
                </tr>
                <tr><td>Alamat</td>  
                <td><input type="text" name="alamat"/></td>  
                </tr>  
                <tr><td rowspan="2">Vaksin Ke-1</td>  
                <td><input type="radio" name="vaksin1" value="sudah"/>sudah</td>  
                <tr>  
                <td><input type="radio" name="vaksin1" value="belum"/>belum</td></tr>  
                </tr>
                <tr><td rowspan="2">Vaksin Ke-2</td>  
                <td><input type="radio" name="vaksin2" value="sudah"/>sudah</td>  
                <tr>  
                <td><input type="radio" name="vaksin2" value="belum"/>belum</td></tr>  
                </tr>
                <tr><td rowspan="2">Vaksin Ke-3</td>  
                <td><input type="radio" name="vaksin3" value="sudah"/>sudah</td>  
                <tr>  
                <td><input type="radio" name="vaksin3" value="belum"/>belum</td></tr>  
                </tr>
                <tr><td><input type="submit" name="submit" value="Submit"/></td></tr>  
                </table>  
            </form>  
        </center>  
    </body>  
</html> 