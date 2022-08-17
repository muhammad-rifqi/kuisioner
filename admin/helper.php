<?php
function kota($idkota){
include "config.php";
$sql = mysqli_query($koneksi,"select * from kota where id = '".$idkota."'");
$data = mysqli_fetch_array($sql);
return $data['nama_kota'];
}

function kecamatan($idkecamatan){
include "config.php";
$sql = mysqli_query($koneksi,"select * from kecamatan where id = '".$idkecamatan."'");
$data = mysqli_fetch_array($sql);
return $data['nama_kecamatan'];
}
?>