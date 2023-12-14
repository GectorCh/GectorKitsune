<?php include "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
 
    <h3>Tambah User</h3>
    <form action="proses_tambah_user.php" method="post">
        Email :
        <input type="text" name="email_user" value="" class="form-control">
        
        
        Nama Lengkap :
        <input type="text" name="fullname_user" value="" class="form-control">
        Nama user :
        <input type="text" name="nama" value="" class="form-control">
        Nomer Hp :
        <input type="text" name="nomorhp_user" value="" class="form-control">
        Alamat :
        <input type="text" name="alamat_user" value="" class="form-control">
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Role : 
        <select name="role" class="form-control">
            <option></option>  
            <option value="admin">Admin</option>
            <option value="karyawan">Karyawan</option>
        </select>
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah User" class="btn btn-primary">
        Foto :
        <input type = "file" name = "upload" accept = "profilepicture/*" />

    </form>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
