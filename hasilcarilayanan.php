<?php $kodelayanan=$_POST['kCari'];
$kon=mysqli_connect("localhost","root","","simtvkabel");
$sql="select * from layanan where kodelayanan like '%".$kodelayanan."%'";
$q=mysqli_query($kon,$sql);
$r=mysqli_fetch_array($q);
?>
<table>
  <thead>
    <tr>
      <th>Kode Layanan</th>
      <th>Jenis Layanan</th>
      <th>Aksi Rekord</th>
    </tr>
  </thead>
  <tbody><?php do { ?>
    <tr>
      <td><?php echo $r['kodelayanan'];?></td>
      <td><?php echo $r['jenislayanan'];?></td>
      <td>
        <a href="koreksilayanan.php?kodelayanan=<?php echo $r['kodelayanan'];?>">Koreksi</a>
        <a href="hapuslayanan.php?kodelayanan=<?php echo $r['kodelayanan'];?>" onclick="return confirm('Apakah yakin akan dihapus ?');">Hapus</a>
      </td>
    </tr><?php } while ($r=mysqli_fetch_array($q)); ?>
  </tbody>
</table>
