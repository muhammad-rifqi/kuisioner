<?php
session_start();
include "config.php";
if(empty($_SESSION['id'])){
    echo "Akses Habis";
}else{


    if($_GET['act'] == 'tambahkota'){
        mysqli_query($koneksi,"insert into kota (nama_kota) values ('".$_POST['nama_kota']."')");
        header('location:dashboard.php?menu=kota');
    }
    if($_GET['act'] == 'editkota'){
        mysqli_query($koneksi,"update kota set nama_kota = '".$_POST['nama_kota']."' where id = '".$_POST['id']."'");
        header('location:dashboard.php?menu=kota');
    }
    if($_GET['act'] == 'hapuskota'){
        mysqli_query($koneksi,"delete from kota where id = '".$_GET['id_kota']."'");
        header('location:dashboard.php?menu=kota');
    }

}
?>