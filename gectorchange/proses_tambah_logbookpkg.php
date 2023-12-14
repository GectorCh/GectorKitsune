<?php
    if($_POST){
        $nama_pkg=$_POST['nama_pkg'];
        $nama_usernyapkg=$_POST['nama_usernyapkg'];
        $tlaporanpkg=$_POST['tlaporanpkg'];
        $batch_pkg=$_POST['batch_pkg'];
        $kem_pkg=$_POST['kem_pkg'];
        $dus_pkg=$_POST['dus_pkg'];
        $volume_pkg=$_POST['volume_pkg'];
        $shiftspkg=$_POST['shiftspkg'];
        $lcatatanpkg=$_POST['lcatatanpkg'];
        if(empty($nama_pkg)){
            echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_logbookpkg.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into lgbookpkg (nama_pkg, nama_usernyapkg, tlaporanpkg, batch_pkg, kem_pkg, dus_pkg, volume_pkg, shiftspkg, lcatatanpkg) value ('".$nama_pkg."','".$nama_usernyapkg."','".$tlaporanpkg."','".$batch_pkg."','".$kem_pkg."','".$dus_pkg."','".$volume_pkg."','".$shiftspkg."','".$lcatatanpkg."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan laporan');location.href='tampil_logbookpkg.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan laporan');location.href='tambah_logbookpkg.php';</script>";
            }
        }
    }
?>
