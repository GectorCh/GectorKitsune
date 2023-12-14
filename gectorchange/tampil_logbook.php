<?php 
    include "header.php";
?>
<?php
    if($_SESSION['role'] == 'admin'){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3 style="background-color:rgb(255, 255, 255);">LogBook Feeding</h3>
    <h7 style="margin-right:100px;">Currently login as : <?=$_SESSION['role']?></h7>
    <a style="margin-right:10px;" href="tambah_logbook.php" class="btn btn-primary">+</a>
    <a href='cetak.php?id=".$data_lgbook['id_lgbook']."' class='btn btn-warning'>🖨️</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Nama</th>
                <th>Tanggal Laporan</th>
                <th>Batch</th>
                <th>Volume</th>
                <th>Posisi</th>
                <th>Keterangan</th>
                <th>Shift</th>
                <th>Catatan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_lgbook=mysqli_query($conn,"select * from lgbook");
            $no=0;
            while($data_lgbook=mysqli_fetch_array($qry_lgbook)){
                $no++;
                $button_cetak="<a href='cetak.php?id=".$data_lgbook['id_lgbook']."' class='btn btn-warning'>🖨️</a>";
                ?>

                <tr>              
                    <td><?=$no?></td>
                    
                    <td><?=$data_lgbook['nama_produk']?></td>
                    <td><?=$data_lgbook['nama_usernya']?></td>
                    <td><?=$data_lgbook['tlaporan']?></td>
                    <td><?=$data_lgbook['batch']?></td>
                    <td><?=$data_lgbook['volume']?></td>
                    <td><?=$data_lgbook['posisi']?></td>
                    <td><?=$data_lgbook['keterangan']?></td>
                    <td><?=$data_lgbook['shifts']?></td>
                    <td><?=$data_lgbook['lcatatan']?></td>
                    <td> <a href="ubah_logbook.php?id_lgbook=<?=$data_lgbook['id_lgbook']?>" class="btn btn-success">⚙️</a> 
                    <a style="margin-left:10px;" href="hapus_logbook.php?id=<?=$data_lgbook['id_lgbook']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">❎</a>
                    
                    </td>
                    </tr>
                <?php 
            }
            ?>
             
        </tbody>
    </table>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    }
?>
<?php
    if($_SESSION['role'] == 'karyawan'){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3 style="background-color:rgb(255, 255, 255);">LogBook Feeding</h3>
    <h7 style="margin-right:100px;">Currently login as : <?=$_SESSION['role']?></h7>
    <a style="margin-right:10px;" href="tambah_logbook.php" class="btn btn-primary">+</a>
    <a href='cetak.php?id=".$data_lgbook['id_lgbook']."' class='btn btn-warning'>🖨️</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Nama</th>
                <th>Tanggal Laporan</th>
                <th>Batch</th>
                <th>Volume</th>
                <th>Posisi</th>
                <th>Keterangan</th>
                <th>Shift</th>
                <th>Catatan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_lgbook=mysqli_query($conn,"select * from lgbook");
            $no=0;
            while($data_lgbook=mysqli_fetch_array($qry_lgbook)){
                $no++;
                $button_cetak="<a href='cetak.php?id=".$data_lgbook['id_lgbook']."' class='btn btn-warning'>🖨️</a>";
                ?>

                <tr>              
                    <td><?=$no?></td>
                    
                    <td><?=$data_lgbook['nama_produk']?></td>
                    <td><?=$data_lgbook['nama_usernya']?></td>
                    <td><?=$data_lgbook['tlaporan']?></td>
                    <td><?=$data_lgbook['batch']?></td>
                    <td><?=$data_lgbook['volume']?></td>
                    <td><?=$data_lgbook['posisi']?></td>
                    <td><?=$data_lgbook['keterangan']?></td>
                    <td><?=$data_lgbook['shifts']?></td>
                    <td><?=$data_lgbook['lcatatan']?></td>
                     
                    <td> <a href="ubah_logbook.php?id_lgbook=<?=$data_lgbook['id_lgbook']?>" class="btn btn-success">⚙️</a>
                    </td>
                </tr>
                
                <?php 
            }
            ?>
        </tbody>
    </table>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    }
?>