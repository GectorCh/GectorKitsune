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
    <?php 
    include "koneksi.php";
    $qry_get_lgbookpkg=mysqli_query($conn,"select * from lgbookpkg where id_lgbookpkg = '".$_GET['id_lgbookpkg']."'");
    $data_lgbookpkg=mysqli_fetch_array($qry_get_lgbookpkg);
    ?>
    <h3>Ubah Laporan</h3>
    <h7 style="margin-right:100px;">Currently login as : <?=$_SESSION['role']?></h7>
    <form action="proses_ubah_logbookpkg.php" method="post">
        <input type="hidden" name="id_lgbookpkg" value= "<?=$data_lgbookpkg['id_lgbookpkg']?>">
        Nama Produk :
        <input type="text" name="nama_pkg" value= "<?=$data_lgbookpkg['nama_pkg']?>" class="form-control">
        Nama :
        <input type="text" name="nama_usernyapkg" value= "<?=$_SESSION['fullname_user']?>" readonly class="form-control">
        Tanggal Laporan :
        <input type="text" name="tlaporanpkg" value= "<?=$data_lgbookpkg['tlaporanpkg']?>" class="form-control">
        Batch :
        <input type="text" name="batch_pkg" value= "<?=$data_lgbookpkg['batch_pkg']?>" class="form-control">
        Kem :
        <input type="text" name="kem_pkg" value= "<?=$data_lgbookpkg['kem_pkg']?>" class="form-control">
        DUS/JRG/DRUM :
        <input type="text" name="dus_pkg" value= "<?=$data_lgbookpkg['dus_pkg']?>" class="form-control">
        Volume :
        <input type="text" name="volume_pkg" value= "<?=$data_lgbookpkg['volume_pkg']?>" class="form-control">
        Shift :
         <?php 
        $arr_shiftspkg=array('pagi'=>'Pagi','siang'=>'Siang','sore'=>'Sore','malam'=>'Malam','normalday'=>'Normal Day');
        ?>
        <select name="shiftspkg" class="form-control">
            <option>Select Shift</option>
            <?php foreach ($arr_shiftspkg as $key_shiftspkg => $val_shiftspkg):
                $selected = ($key_shiftspkg == $data_lgbookpkg['shiftspkg']) ? 'selected' : '';
             ?>
                <option value="<?= $key_shiftspkg ?>" <?= $selected ?>><?= $val_shiftspkg ?></option>
            <?php endforeach ?>
        </select>
        Catatan :
        <input type="text" name="lcatatanpkg" value= "<?=$data_lgbookpkg['lcatatanpkg']?>" class="form-control">
       
        <input type="submit" name="simpan" value="Ubah Laporan" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    
?>
