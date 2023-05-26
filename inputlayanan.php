<form name="frmcari" method="post" action="hasilcarilayanan.php">
  <input type="text" name="kCari" placeholder="Ketik kode jenis layanan yang dicari">
  <input type="submit" name="bCari" value="Cari">
</form>
<form name="frminput" method="post">
  <input type="text" name="jenislayanan" placeholder="ketik nama layanan">
  <input type="submit" name="bSimpan" value="Simpan">
</form>
<?php if (isset($_POST['bSimpan'])) {
  $jenislayanan=$_POST['jenislayanan'];
  $kon=mysqli_connect("localhost","root","","simtvkabel");
  $sql="insert into lya
