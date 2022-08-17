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


    if($_GET['act'] == 'tambahpengguna'){
        mysqli_query($koneksi,"insert into pengguna (username,password,status_pengguna) values ('".$_POST['username']."','".md5($_POST['password'])."','".$_POST['status_pengguna']."')");
        header('location:dashboard.php?menu=pengguna');
    }
    if($_GET['act'] == 'editpengguna'){
        if(empty($_POST['password'])){ 
            mysqli_query($koneksi,"update pengguna set username = '".$_POST['username']."', status_pengguna='".$_POST['status_pengguna']."' where id = '".$_POST['id']."'");
        }else{
            mysqli_query($koneksi,"update pengguna set username = '".$_POST['username']."', password='".md5($_POST['password'])."',status_pengguna='".$_POST['status_pengguna']."' where id = '".$_POST['id']."'");
        }
        header('location:dashboard.php?menu=pengguna');
    }
    if($_GET['act'] == 'hapuspengguna'){
        mysqli_query($koneksi,"delete from pengguna where id = '".$_GET['id_pengguna']."'");
        header('location:dashboard.php?menu=pengguna');
    }

}
?>