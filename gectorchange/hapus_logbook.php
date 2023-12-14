<?php 
        if($_GET['id']){
            include "koneksi.php";
            $qry_hapus=mysqli_query($conn,"delete from lgbook where id_lgbook='".$_GET['id']."'");
            if($qry_hapus){
                echo "<script>alert('Sukses hapus laporan');location.href='tampil_logbook.php';</script>";
            } else {
                echo "<script>alert('Gagal hapus laporan');location.href='tampil_logbook.php';</script>";
            }
        }
?>