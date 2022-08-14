<?php
session_start();
include"config.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = mysqli_query($koneksi,"select * from  pengguna where username = '".$username."' and password  ='".$password."'");
$data = mysqli_fetch_array($sql);
$cek = mysqli_num_rows($sql);
if($cek > 0){
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['status_pengguna'] = $data['status'];
    header('location:dashboard.php');
}else{
    header('location:index.php?response=error');
}
?>