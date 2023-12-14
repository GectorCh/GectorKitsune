<?php
    if($_POST){
        $nama_produk=$_POST['nama_produk'];
        $nama_usernya=$_POST['nama_usernya'];
        $tlaporan=$_POST['tlaporan'];
        $batch=$_POST['batch'];
        $volume=$_POST['volume'];
        $posisi=$_POST['posisi'];
        $shifts=$_POST['shifts'];
        $keterangan=$_POST['keterangan'];
        $lcatatan=$_POST['lcatatan'];

        
        if(empty($nama_produk)){
            echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_logbook.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into lgbook (nama_produk, nama_usernya, tlaporan, batch, volume, posisi, shifts, keterangan, lcatatan) value ('".$nama_produk."','".$nama_usernya."','".$tlaporan."','".$batch."','".$volume."','".$posisi."','".$shifts."','".$keterangan."','".$lcatatan."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan laporan');location.href='tampil_logbook.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan laporan');location.href='tambah_logbook.php';</script>";
            }
        }
    }
?>
