<?php
include "../admin/config.php";
?>
<select id="nama_kecamatan" placeholder="Nama Kecamatan"class="form-control" onchange="showKecamatan(this.value)" required>
<option value="--">Pilih Kecamatan </option>
<?php
$sql=mysqli_query($koneksi,"select * from kecamatan where id_kota = '".$_GET['id']."'");
while($data = mysqli_fetch_array($sql)){
    ?>
        <option value="<?php echo $data['id']; ?>"> <?php echo $data['nama_kecamatan'];?> </option>
  
  <?php
}
?>
</select>