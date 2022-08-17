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



    if($_GET['act'] == 'tambahkecamatan'){
        mysqli_query($koneksi,"insert into kecamatan (id_kota,nama_kecamatan) values ('".$_POST['id_kota']."','".$_POST['nama_kecamatan']."')");
        header('location:dashboard.php?menu=kecamatan');
    }

    if($_GET['act'] == 'editkecamatan'){
        mysqli_query($koneksi,"update kecamatan set id_kota='".$_POST['id_kota']."',nama_kecamatan = '".$_POST['nama_kecamatan']."' where id = '".$_POST['id']."'");
        header('location:dashboard.php?menu=kecamatan');
    }

    if($_GET['act'] == 'hapuskecamatan'){
        mysqli_query($koneksi,"delete from kecamatan where id = '".$_GET['id_kecamatan']."'");
        header('location:dashboard.php?menu=kecamatan');
    }
    
    if($_GET['act'] == 'tambahkelurahan'){
        mysqli_query($koneksi,"insert into kelurahan (id_kecamatan,nama_kelurahan) values ('".$_POST['id_kecamatan']."','".$_POST['nama_kelurahan']."')");
        header('location:dashboard.php?menu=kelurahan');
    }

    if($_GET['act'] == 'editkelurahan'){
        mysqli_query($koneksi,"update kelurahan set id_kecamatan='".$_POST['id_kecamatan']."',nama_kelurahan = '".$_POST['nama_kelurahan']."' where id = '".$_POST['id']."'");
        header('location:dashboard.php?menu=kelurahan');
    }

    if($_GET['act'] == 'hapuskelurahan'){
        mysqli_query($koneksi,"delete from kelurahan where id = '".$_GET['id_kelurahan']."'");
        header('location:dashboard.php?menu=kelurahan');
    }
    
}
?>