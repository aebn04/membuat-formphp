<?php
include "koneksi.php";
        if(isset($_POST['submit'])){
            $alas    =$_POST['alas'];
            $tinggi    =$_POST['tinggi'];
            
            // menghitung luas segitiga
            $luas_segitiga = 1/2 * $alas * $tinggi;
            $input=mysqli_query($con,"insert into hitungsegi(alas,tinggi,luas_segitiga)
                    values('$alas','$tinggi','$luas_segitiga')");
        }
    ?>