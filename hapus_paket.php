<?php 
        if($_GET['id_merek']){
            include "koneksi.php";
            $qry_hapus=mysqli_query($conn,"delete from merek where id_merek='".$_GET['id_merek']."'");
            if($qry_hapus){
                echo "<script>alert('Sukses hapus paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal hapus paket');location.href='tampil_paket.php';</script>";
            }
        }
?>
