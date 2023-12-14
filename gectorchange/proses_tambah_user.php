<?php
    if($_POST){
        $email_user=$_POST['email_user'];
        $fullname_user=$_POST['fullname_user'];
        $nama=$_POST['nama'];
        $foto_user=$_POST['foto_user'];
        $nomorhp_user=$_POST['nomorhp_user'];
        $alamat_user=$_POST['alamat_user'];
        $username=$_POST['username'];
        $password=$_POST['password']; 
        $role=$_POST['role'];
        if(empty($username)){
            echo "<script>alert('username user tidak boleh kosong');location.href='tambah_user.php';</script>";
            
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into user (email_user, fullname_user, nama, foto_user, nomorhp_user, alamat_user, username, password, role) value ('".$email_user."','".$fullname_user."','".$nama."','".$foto_user."','".$nomorhp_user."','".$alamat_user."','".$username."','".md5($password)."','".$role."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan user');location.href='tambah_user.php';</script>";
            }
        }
    }
    
?>
