<?php 
    include "header.php";
?>
<h2>Selamat Datang <?=$_SESSION['nama']?> di cafe Kitsune</h2>
<h5>Anda Login Sebagai : <?=$_SESSION['role']?> </h5>
<style>
body {
  background-image: url('12.gif.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
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
