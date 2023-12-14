<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>User Update</title>
</head>

<body>
    
    <?php 
    include "koneksi.php";
    $qry_get_user=mysqli_query($conn,"select * from user where id_user = '".$_GET['id']."'");
    $data_user=mysqli_fetch_array($qry_get_user);
    ?>
    <h3>Ubah User</h3>
    <form action="proses_ubah_user.php" method="post">
        <input type="hidden" name="id_user" value="<?=$data_user['id_user'] ?>">
        Nama Lengkap :
        <input type="text" name="fullname_user" value="<?=$data_user['fullname_user'] ?>" class="form-control">
        Nama user :
        <input type="text" name="nama" value="<?=$data_user['nama'] ?>" class="form-control">
        Email user :
        <input type="text" name="email_user" value="<?=$data_user['email_user'] ?>" class="form-control">
        Nomor Hp :
        <input type="text" name="nomorhp_user" value="<?=$data_user['nomorhp_user'] ?>" class="form-control">
        Alamat :
        <input type="text" name="alamat_user" value="<?=$data_user['alamat_user'] ?>" class="form-control">
        Role : 
        <?php 
        $arr_role=array('admin'=>'Admin','karyawan'=>'Karyawan');
        ?>
        <select name="role" class="form-control">
            <option>Select Role</option>
            <?php foreach ($arr_role as $key_role => $val_role):
                $selected = ($key_role == $data_user['role']) ? 'selected' : '';
             ?>
                <option value="<?= $key_role ?>" <?= $selected ?>><?= $val_role ?></option>
            <?php endforeach ?>
        </select>
       
        Username :
        <input type="text" name="username" value="<?= $data_user['username'] ?>" class="form-control">
        
        
        Password :
        <input type="password" name="password" value="" class="form-control">
        
        <input type="submit" name="simpan" value="Ubah User" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
