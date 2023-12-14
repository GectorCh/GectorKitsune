<?php
    if($_POST){
        $id_lgbookpkg=$_POST['id_lgbookpkg'];
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
            echo "<script>alert('nama produk tidak boleh kosong');location.href='ubah_logbookpkg.php';</script>";
        } else {
            include "koneksi.php";
            $update=mysqli_query($conn,"update lgbookpkg set nama_pkg='".$nama_pkg."',nama_usernyapkg='".$nama_usernyapkg."',tlaporanpkg='".$tlaporanpkg."',batch_pkg='".$batch_pkg."',kem_pkg='".$kem_pkg."',dus_pkg='".$dus_pkg."',volume_pkg='".$volume_pkg."',shiftspkg='".$shiftspkg."', lcatatanpkg='".$lcatatanpkg."' where id_lgbookpkg = '".$id_lgbookpkg."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update laporan');location.href='tampil_logbookpkg.php';</script>";
            } else {
                echo "<script>alert('Gagal update laporan');location.href='ubah_logbookpkg.php?id_lgbook=".$id_lgbookpkg."';</script>";
            }
        } 
    }
?>
