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
    <h3 style="background-color:rgb(255, 255, 255);">Data Staff</h3>
    <h7 style="margin-right:100px;">Currently login as : <?=$_SESSION['role']?></h7>
    <a style="margin-right:50px;" href="tambah_user.php" class="btn btn-primary">+</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>EMAIL</th>
                <th>NAMA LENGKAP</th>
                <th>NAMA</th>
                <th>NOMOR HP</th>
                <th>ALAMAT</th>
                <th>USERNAME</th>
                <th>ROLE</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_user=mysqli_query($conn,"select * from user");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
                $no++;
                ?>
                <tr>              
                    <td><?=$no?></td>
                    <td><?=$data_user['email_user']?></td>
                    <td><?=$data_user['fullname_user']?></td>
                    <td><?=$data_user['nama']?></td>   
                    <td><?=$data_user['nomorhp_user']?></td>
                    <td><?=$data_user['alamat_user']?></td>
                    <td><?=$data_user['username']?></td>
                    <td><?=$data_user['role']?></td> 
                    <td><a href="ubah_user.php?id=<?=$data_user['id_user']?>" class="btn btn-success">⚙️</a></td>
                <?php 
            }
            ?>
        </tbody>
    </table>
    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   <?php 
    }
?>
</body>
</html>

<?php
    if($_SESSION['role'] == 'error'){
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
    <h3 style="background-color:rgb(255, 255, 255);">Data Staff</h3>
    <a style="margin-right:50px;" href="tambah_user.php" class="btn btn-primary">+</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>EMAIL</th>
                <th>NAMA LENGKAP</th>
                <th>NAMA</th>
                <th>NOMOR HP</th>
                <th>ALAMAT</th>
                <th>USERNAME</th>
                <th>ROLE</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_user=mysqli_query($conn,"select * from user");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
                $no++;
                ?>
                <tr>              
                    <td><?=$no?></td>
                    <td><?=$data_user['email_user']?></td>
                    <td><?=$data_user['fullname_user']?></td>
                    <td><?=$data_user['nama']?></td>   
                    <td><?=$data_user['nomorhp_user']?></td>
                    <td><?=$data_user['alamat_user']?></td>
                    <td><?=$data_user['username']?></td>
                    <td><?=$data_user['role']?></td> 
                    <td><a href="ubah_user.php?id=<?=$data_user['id_user']?>" class="btn btn-success">⚙️</a> 
                    <a style="margin-left:10px;" href="hapus_user.php?id=<?=$data_user['id_user']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">❎</a></td>
                <?php 
            }
            ?>
        </tbody>
    </table>
    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   <?php 
    }
?>
</body>
</html>
