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
    
    <h2>Packing</h2>
    <form action="proses_tambah_logbookpkg.php" method="post">
         Nama Produk :
         <input type="text" name="nama_pkg" value="" class="form-control">
         Nama :
         <input type="text" name="nama_usernyapkg" value="<?=$_SESSION['fullname_user']?>" readonly class="form-control">
         Tanggal Laporan :
         <input type="text" name="tlaporanpkg" value="" class="form-control">
         Batch :
         <input type="text" name="batch_pkg" value="" class="form-control">
         Kem :
         <input type="text" name="kem_pkg" value="" class="form-control">
         DUS/JRG/DRUM :
         <input type="text" name="dus_pkg" value="" class="form-control">
         Volume :
         <input type="text" name="volume_pkg" value="" class="form-control">
         Catatan :
         <input type="text" name="lcatatanpkg" value="" class="form-control">
         Shift :
         <select name="shiftspkg" class="form-control">
            <option>Select Shift</option>  
            <option value="pagi">Pagi</option>
            <option value="siang">Siang</option>
            <option value="sore">Sore</option>
            <option value="malam">Malam</option>
            <option value="normalday">Normal Day</option>

         
        
        
        <input type="submit" name="simpan" value="Submit Laporan" class="btn btn-primary">
    </form>
    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

