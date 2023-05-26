<?php $kodelayanan=$_GET['kodelayanan'];
$kon=mysqli_connect("localhost","root","","simtvkabel");
$sql="select * from layanan where kodelayanan='".$kodelayanan."'";
$q=mysqli_query($kon,$sql);
$r=mysqli_fetch_array($q);
?>
<form method="post">
  <input type="hidden" name="kodelayanan" value="<?php echo $r['kodelayanan'];?>">
  <input type="text" name="jenislayanan" value="<?php echo $r['jenislayanan'];?>" title="ketik jenis layanan barunya disini">
  <input type="submit" name="bSimpan" value="Simpan">
</form>
<?php if (isset($_POST['bSimpan'])) {
  $kodelayanan=$_POST['kodelayanan'];
  $jenislayanan=$_POST['jenislayanan'];
  $sql="update layanan set jenislayanan='".$jenislayanan."' where kodelayanan='".$kodelayanan."'";
  $q=mysqli_query($kon,$sql);
  header('location:inputlayanan.php');
}
?>
