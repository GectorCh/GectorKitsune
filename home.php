<?php 
    include "header.php";
?>
<h2 style="color: lightgray;">Selamat Datang <?=$_SESSION['nama']?> di GCPetro</h2>
<h5>Anda Login Sebagai : <?=$_SESSION['role']?> </h5>
<style>
body {
  background-image: linear-gradient(rgba(0,80,0,0.65), rgba(0,80,0,0.65)), url('backhome.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

