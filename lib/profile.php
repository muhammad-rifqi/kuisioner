<?php
include "../admin/config.php" ;
$sql = mysqli_query($koneksi,"insert into responden(
    nama_kota,
    nama_kecamatan,
    nama_kelurahan,
    nama_responden_terpilih,
    alamat_responden,
    jenis_kelamin,
    status_kk,
    jumlah_anggota_keluarga,
    no_hp,
    tanggal,
    nama_surveyor,
    token
)values(
    '".$_POST['kota']."',
    '".$_POST['kecamatan']."',
    '".$_POST['kelurahan']."',
    '".$_POST['namaresondenterpilih']."',
    '".$_POST['alamatresponden']."',
    '".$_POST['jeniskelamin']."',
    '".$_POST['statuskk']."',
    '".$_POST['jumlahanggotakeluarga']."',
    '".$_POST['nohp']."',
    '".$_POST['tanggal']."',
    '".$_POST['namasurveyor']."',
    '".$_POST['nokuisioner']."'
)");
if($sql){
    echo "success";
}else{
    echo "failed";
}

?>