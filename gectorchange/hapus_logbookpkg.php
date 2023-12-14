<?php 
        if($_GET['id']){
            include "koneksi.php";
            $qry_hapus=mysqli_query($conn,"delete from lgbookpkg where id_lgbookpkg='".$_GET['id']."'");
            if($qry_hapus){
                echo "<script>alert('Sukses hapus laporan');location.href='tampil_logbookpkg.php';</script>";
            } else {
                echo "<script>alert('Gagal hapus laporan');location.href='tampil_logbookpkg.php';</script>";
            }
        }
?>