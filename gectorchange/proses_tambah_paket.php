<?php
    if($_POST){
        $nama_merek=$_POST['nama_merek'];
        $jenis_merek=$_POST['jenis_merek'];
        
        if(empty($jenis_merek)){
            echo "<script>alert('Jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into merek (nama_merek,jenis_merek) value ('".$nama_merek."','".$jenis_merek."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan merk');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan merk');location.href='tambah_paket.php';</script>";
            }
        }
    }
?>
