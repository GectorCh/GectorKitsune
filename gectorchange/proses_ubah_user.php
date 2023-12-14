<?php

    if($_POST){
        $id_user=$_POST['id_user'];
        $fullname_user=$_POST['fullname_user'];
        $nama=$_POST['nama'];
        $nomorhp_user=$_POST['nomorhp_user'];
        $alamat_user=$_POST['alamat_user'];
        $email_user=$_POST['email_user'];
        $username=$_POST['username'];
        $password=$_POST['password']; 
        $role=$_POST['role'];
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='ubah_user.php';</script>";
 
        } elseif(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='ubah_user.php';</script>";
        } else {
            include "koneksi.php";
            if(empty($password)){
                  $update = mysqli_query($conn, "update user set fullname_user='" . $fullname_user . "', nama='" . $nama . "', nomorhp_user='" . $nomorhp_user . "', alamat_user='" . $alamat_user . "', email_user='" . $email_user . "',  username='" . $username . "', password='" . md5($password) . "', role='" . $role . "' where id_user = '" . $id_user . "'") or die(mysqli_error($conn));

                if($update){
                    echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
                } else {
                    echo "<script>alert('Gagal update user');location.href='ubah_user.php?id=".$id_user."';</script>";
                }
            } else {
                 $update = mysqli_query($conn, "update user set fullname_user='" . $fullname_user . "', nama='" . $nama . "', nomorhp_user='" . $nomorhp_user . "', alamat_user='" . $alamat_user . "', email_user='" . $email_user . "',  username='" . $username . "', password='" . md5($password) . "', role='" . $role . "' where id_user = '" . $id_user . "'") or die(mysqli_error($conn));

                if($update){
                    echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
                } else {
                    echo "<script>alert('Gagal update user');location.href='ubah_user.php?id=".$id_user."';</script>";
                }
            }
        
        } 
    }

?>
