<?php
    if($_POST){
        $id=$_POST['id_merek'];
        $jenis_merek=$_POST['jenis_merek'];
        $harga=$_POST['harga'];
        if(empty($jenis_merek)){
            echo "<script>alert('Jenis merek tidak boleh kosong');location.href='ubah_paket.php';</script>";
        } else {
            include "koneksi.php";
            $update=mysqli_query($conn,"update merek set jenis_merek='".$jenis_merek."', harga='".$harga."' where id_merek = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='ubah_paket.php?id_merek=".$id."';</script>";
            }
        } 
    }
?>
