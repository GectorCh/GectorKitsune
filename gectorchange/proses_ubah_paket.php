<?php
    if($_POST){
        $id_merek=$_POST['id_merek'];
        $nama_merek=$_POST['nama_merek'];
        $jenis_merek=$_POST['jenis_merek'];
        
        if(empty($jenis_merek)){
            echo "<script>alert('Jenis merek tidak boleh kosong');location.href='ubah_paket.php';</script>";
        } else {
            include "koneksi.php";
            $update=mysqli_query($conn,"update merek set nama_merek='".$nama_merek."',jenis_merek='".$jenis_merek."' where id_merek = '".$id_merek."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update merk');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update merk');location.href='ubah_paket.php?id_merek=".$id_merek."';</script>";
            }
        } 
    }
?>
