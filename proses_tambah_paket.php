<?php
    if($_POST){
        $jenis_merek=$_POST['jenis_merek'];
        $harga_merek=$_POST['harga_merek'];
        if(empty($jenis_merek)){
            echo "<script>alert('Jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into merek (jenis_merek,harga_merek) value ('".$jenis_merek."','".$harga_merek."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
            }
        }
    }
?>
