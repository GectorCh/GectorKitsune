<?php 
    include "header.php";
?>
<h2 style="background-color:rgb(255, 255, 255);">Selamat Datang Gector di GCPetro</h2>
<h5>Anda Login Sebagai : <?=$_SESSION['role']?> </h5>
<style>
body {
  background-image: url('backhome.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<?php
    if($_SESSION['role'] == 'owner'){
?>
<!DOCTYPE html>
<html>
<head>
    
    <title></title>
</head>

<body>
    <h5>=============================================</h5>
    <h6>Untuk Manager silahkan edit/melihat dari database(localhost/phpmyadmin)</h6>
    <h6>Anda juga bisa melihat riwayat transaksi di tab history</h6>
    <h5>=============================================</h5>
</body>
</html>
<?php
    }
?>
