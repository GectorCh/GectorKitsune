<?php 
    include "header.php";
?>

<!DOCTYPE html>
<html>  
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    
    <h2>Laporan Feeding</h2>
    <h7 style="margin-right:100px;">Currently login as : <?=$_SESSION['role']?></h7>
    <form action="proses_tambah_logbook.php" method="post">
         Nama Produk :
         <input type="text" name="nama_produk" value="" class="form-control">
         Nama :
         <input type="text" name="nama_usernya" value="<?=$_SESSION['fullname_user']?>" readonly class="form-control-plaintext">
         Tanggal Laporan :
         <input type="text" name="tlaporan" value="" class="form-control">
         Batch :
         <input type="text" name="batch" value="" class="form-control">
         Volume :
         <input type="text" name="volume" value="" class="form-control">
         Posisi :
         <input type="text" name="posisi" value="" class="form-control">

         Shift :
           <select name="shifts" class="form-control">
            <option>Select Shift</option>  
            <option value="pagi">Pagi</option>
            <option value="siang">Siang</option>
            <option value="sore">Sore</option>
            <option value="malam">Malam</option>
            <option value="normalday">Normal Day</option>

        </select>
         Keterangan :
          <select name="keterangan" class="form-control">
            <option>Select keterangan</option>  
            <option value="ok">OK</option>
            <option value="analisa">Analisa</option>
            <option value="inprogress">In Progress</option>
        </select>
        Catatan :
        <input type="text" name="lcatatan" value="" class="form-control">
        <input type="submit" name="simpan" value="Submit Laporan" class="btn btn-primary">
    </form>
    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

