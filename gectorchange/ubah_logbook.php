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
    $qry_get_lgbook=mysqli_query($conn,"select * from lgbook where id_lgbook = '".$_GET['id_lgbook']."'");
    $data_lgbook=mysqli_fetch_array($qry_get_lgbook);
    ?>
    <h3>Ubah Laporan Feeding</h3>
    <form action="proses_ubah_logbook.php" method="post">
        <input type="hidden" name="id_lgbook" value= "<?=$data_lgbook['id_lgbook']?>">
        Nama Produk :
        <input type="text" name="nama_produk" value= "<?=$data_lgbook['nama_produk']?>"  class="form-control">
        Nama :
        <input type="text" name="nama_usernya" value= "<?=$_SESSION['fullname_user']?>" readonly class="form-control">
        Tanggal Laporan :
        <input type="text" name="tlaporan" value= "<?=$data_lgbook['tlaporan']?>" class="form-control">
        Batch :
        <input type="text" name="batch" value= "<?=$data_lgbook['batch']?>" class="form-control">
        Volume :
        <input type="text" name="volume" value= "<?=$data_lgbook['volume']?>" class="form-control">
        Posisi :
        <input type="text" name="posisi" value= "<?=$data_lgbook['posisi']?>" class="form-control">
        Shift :
          <?php 
        $arr_shifts=array('pagi'=>'Pagi','siang'=>'Siang','sore'=>'Sore','malam'=>'Malam','normalday'=>'Normal Day');
        ?>
        <select name="shifts" class="form-control">
            <option>Select Shift</option>
            <?php foreach ($arr_shifts as $key_shifts => $val_shifts):
                $selected = ($key_shifts == $data_lgbook['shifts']) ? 'selected' : '';
             ?>
                <option value="<?= $key_shifts ?>" <?= $selected ?>><?= $val_shifts ?></option>
            <?php endforeach ?>
        </select>
        Keterangan :
         <?php 
        $arr_keterangan=array('ok'=>'OK','analisa'=>'Siang','inprogress'=>'In Progress');
        ?>
        <select name="keterangan" class="form-control">
            <option>Select Keterangan</option>
            <?php foreach ($arr_keterangan as $key_keterangan => $val_keterangan):
                $selected = ($key_keterangan == $data_lgbook['keterangan']) ? 'selected' : '';
             ?>
                <option value="<?= $key_keterangan ?>" <?= $selected ?>><?= $val_keterangan ?></option>
            <?php endforeach ?>
        </select>
        Catatan : 
        <input type="text" name="lcatatan" value= "<?=$data_lgbook['lcatatan']?>" class="form-control">
       
        <input type="submit" name="simpan" value="Ubah Laporan" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    
?>
