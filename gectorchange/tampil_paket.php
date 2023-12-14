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
    <h3 style="background-color:rgb(255, 255, 255);">Data Merk</h3>
    <a style="margin-right:50px;" href="tambah_paket.php" class="btn btn-primary">+</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                
                <th>Nama Merk</th>
                <th>Jenis Merk</th>
                
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_merek=mysqli_query($conn,"select * from merek");
            $no=0;
            while($data_merek=mysqli_fetch_array($qry_merek)){
                $no++;
                ?>
                <tr>              
                    <td><?=$no?></td>
                    
                    <td><?=$data_merek['nama_merek']?></td>
                    <td><?=$data_merek['jenis_merek']?></td> 
                     
                    <td><a href="ubah_paket.php?id_merek=<?=$data_merek['id_merek']?>" class="btn btn-success">⚙️</a><a style="margin-left:10px;" href="hapus_paket.php?id_merek=<?=$data_merek['id_merek']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">❎</a></td> 
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
    <h3 style="background-color:rgb(255, 255, 255);">Data Merk</h3>
    
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                
                <th>Nama Merk</th>
                <th>Jenis Merk</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_merek=mysqli_query($conn,"select * from merek");
            $no=0;
            while($data_merek=mysqli_fetch_array($qry_merek)){
                $no++;
                ?>
                <tr>              
                    <td><?=$no?></td>
                    
                    <td><?=$data_merek['nama_merek']?></td>
                    <td><?=$data_merek['jenis_merek']?></td> 
                     
                    
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