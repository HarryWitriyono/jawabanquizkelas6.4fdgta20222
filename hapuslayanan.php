<?php 
 $kodelayanan=$_GET['kodelayanan'];
 $kon=mysqli_connect("localhost","root","","simtvkabel");
 $sql="delete from layanan where kodelayanan='".$kodelayanan."'";
 $q=mysqli_query($kon,$sql);
 header("location:inputlayanan.php");
?>
