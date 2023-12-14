<?php
    if($_POST){
        $id_lgbook=$_POST['id_lgbook'];
        $nama_produk=$_POST['nama_produk'];
        $nama_usernya=$_POST['nama_usernya'];
        $tlaporan=$_POST['tlaporan'];
        $batch=$_POST['batch'];
        $volume=$_POST['volume'];
        $posisi=$_POST['posisi'];
        $keterangan=$_POST['keterangan'];
        $shifts=$_POST['shifts'];
        $lcatatan=$_POST['lcatatan'];
        if(empty($nama_produk)){
            echo "<script>alert('nama produk tidak boleh kosong');location.href='ubah_logbook.php';</script>";
        } else {
            include "koneksi.php";
            $update=mysqli_query($conn,"update lgbook set nama_produk='".$nama_produk."',nama_usernya='".$nama_usernya."',tlaporan='".$tlaporan."',batch='".$batch."',volume='".$volume."',posisi='".$posisi."',keterangan='".$keterangan."',shifts='".$shifts."', lcatatan='".$lcatatan."' where id_lgbook = '".$id_lgbook."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update laporan');location.href='tampil_logbook.php';</script>";
            } else {
                echo "<script>alert('Gagal update laporan');location.href='ubah_logbook.php?id_lgbook=".$id_lgbook."';</script>";
            }
        } 
    }
?>
