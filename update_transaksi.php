<?php 
    include "koneksi.php";
    $qry_histori=mysqli_query($conn,"select *,transaksi.id_transaksi AS id_transaksi from transaksi join user on transaksi.id_user = user.id_user where transaksi.id_transaksi = '".$_GET['id']."'");
    $dt_histori=mysqli_fetch_array($qry_histori);
    if($dt_histori['status']=='baru'){
        $update=mysqli_query($conn,"update transaksi set status = 'proses' where id_transaksi = '".$_GET['id']."'") or die(mysqli_error($conn));
    } elseif($dt_histori['status']=='proses'){
        $update=mysqli_query($conn,"update transaksi set status = 'selesai' where id_transaksi = '".$_GET['id']."'") or die(mysqli_error($conn));
    } elseif($dt_histori['status']=='selesai'){
        $update=mysqli_query($conn,"update transaksi set status = 'selamat' where id_transaksi = '".$_GET['id']."'") or die(mysqli_error($conn));
    }
    if($update){
        echo "<script>alert('Sukses update transaksi');location.href='histori_transaksi.php';</script>";
    } else {
        echo "<script>alert('Gagal update transaksi');location.href='histori_transaksi.php';</script>";
    }
?>