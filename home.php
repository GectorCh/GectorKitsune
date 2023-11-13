<?php 
    include "header.php";
?>
<div class= "box">
<h2 style="color: lightgray;">Selamat Datang <?=$_SESSION['nama']?> di GCPetro</h2>
<h5>Anda Login Sebagai : <?=$_SESSION['role']?> </h5>
</div>
<style>
body {
  background-image: linear-gradient(rgba(0,80,0,0.65), rgba(0,80,0,0.65)), url('backhome.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.box{
  width: 450px;
  padding: 30px;
  position: absolute;
  top: 20%;
  left: 20%;
  transform: translate(-50%,-50%);
  background: #222222;
  text-align: center;
}
.box h2, h5{
  font-weight: 500;
  font-family: "Montserrat", sans-serif;
}
</style>

