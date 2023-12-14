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
    <h3 style="background-color:rgb(255, 255, 255);">LogBook Packing</h3>
    <h7 style="margin-right:100px;">Currently login as : <?=$_SESSION['role']?></h7>
    <a style="margin-right:10px;" href="tambah_logbookpkg.php" class="btn btn-primary">+</a>
    <a href='cetakpkg.php?id=".$data_lgbook['id_lgbook']."' class='btn btn-warning'>🖨️</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Nama</th>
                <th>Tanggal Laporan</th>
                <th>Batch</th>
                <th>Kem</th>
                <th>Dus</th>
                <th>Volume</th>
                <th>Shift</th>
                <th>Catatan</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_lgbookpkg=mysqli_query($conn,"select * from lgbookpkg");
            $no=0;
            while($data_lgbookpkg=mysqli_fetch_array($qry_lgbookpkg)){
                $no++;
                $button_cetak="<a href='cetakpkg.php?id=".$data_lgbookpkg['id_lgbookpkg']."' class='btn btn-warning'>🖨️</a>";
                ?>
                <tr>              
                    <td><?=$no?></td>
                    
                    <td><?=$data_lgbookpkg['nama_pkg']?></td>
                    <td><?=$data_lgbookpkg['nama_usernyapkg']?></td>
                    <td><?=$data_lgbookpkg['tlaporanpkg']?></td> 
                    <td><?=$data_lgbookpkg['batch_pkg']?></td>
                    <td><?=$data_lgbookpkg['kem_pkg']?></td>
                    <td><?=$data_lgbookpkg['dus_pkg']?></td>
                    <td><?=$data_lgbookpkg['volume_pkg']?></td>
                    <td><?=$data_lgbookpkg['shiftspkg']?></td>
                    <td><?=$data_lgbookpkg['lcatatanpkg']?></td>
                    <td> <a href="ubah_logbookpkg.php?id_lgbookpkg=<?=$data_lgbookpkg['id_lgbookpkg']?>" class="btn btn-success">⚙️</a>
                    <a style="margin-left:10px;" href="hapus_logbookpkg.php?id=<?=$data_lgbookpkg['id_lgbookpkg']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">❎</a></td>
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
    <h3 style="background-color:rgb(255, 255, 255);">LogBook Packing</h3>
    <h7 style="margin-right:100px;">Currently login as : <?=$_SESSION['role']?></h7>
    <a style="margin-right:10px;" href="tambah_logbookpkg.php" class="btn btn-primary">+</a>
    <a href='cetakpkg.php?id=".$data_lgbook['id_lgbook']."' class='btn btn-warning'>🖨️</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Nama</th>
                <th>Tanggal Laporan</th>
                <th>Batch</th>
                <th>Kem</th>
                <th>Dus</th>
                <th>Volume</th>
                <th>Shift</th>
                <th>Catatan</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_lgbookpkg=mysqli_query($conn,"select * from lgbookpkg");
            $no=0;
            while($data_lgbookpkg=mysqli_fetch_array($qry_lgbookpkg)){
                $no++;
                $button_cetak="<a href='cetakpkg.php?id=".$data_lgbookpkg['id_lgbookpkg']."' class='btn btn-warning'>🖨️</a>";
                ?>
                <tr>              
                    <td><?=$no?></td>
                    
                    <td><?=$data_lgbookpkg['nama_pkg']?></td>
                    <td><?=$data_lgbookpkg['nama_usernyapkg']?></td>
                    <td><?=$data_lgbookpkg['tlaporanpkg']?></td> 
                    <td><?=$data_lgbookpkg['batch_pkg']?></td>
                    <td><?=$data_lgbookpkg['kem_pkg']?></td>
                    <td><?=$data_lgbookpkg['dus_pkg']?></td>
                    <td><?=$data_lgbookpkg['volume_pkg']?></td>
                    <td><?=$data_lgbookpkg['shiftspkg']?></td>
                    <td><?=$data_lgbookpkg['lcatatanpkg']?></td>
                    <td> <a href="ubah_logbookpkg.php?id_lgbookpkg=<?=$data_lgbookpkg['id_lgbookpkg']?>" class="btn btn-success">⚙️</a>
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