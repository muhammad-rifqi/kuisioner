<?php
include "../admin/config.php";
?>
<select id="nama_kelurahan" placeholder="Nama Kelurahan" class="form-control" required>
<option value="--">Pilih Kelurahan </option>
<?php
$sql=mysqli_query($koneksi,"select * from kelurahan where id_kecamatan = '".$_GET['id']."'");
while($data = mysqli_fetch_array($sql)){
    ?>
        <option value="<?php echo $data['id']; ?>"> <?php echo $data['nama_kelurahan'];?> </option>
  
  <?php
}
?>
</select>