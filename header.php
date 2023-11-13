<!-- <?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<?php
    if($_SESSION['role'] == 'Admin'){
       
?> -->
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&family=Poppins:wght@100;300;500&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <title></title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    box-sizing
  }
  .hero{
    width: 100%;
    min-height: 100vh;
    background: #eceaff;
    color: #252525;
}
nav{
    background: #1a1a1a;
    width: 80%;
    padding: 10px 10%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
}
.logo{
    width: 100px;
    height: 40px;
}
.pic{
    width: 40px;
    border-radius: 50%;
    cursor: pointer;
    margin-left:  30px;
}
nav ul{
  width: 100%;
  text-align: right;
}
nav ul li{
    display: inline-block;
    list-style: none;
    margin: 10px 20px;
}
nav ul li a{
    color: #fff;
    text-decoration: none;
}
.menu-wrap{
    position: absolute;
    top: 100%;
    right: 10%;
    width: 320px;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0.5s;
}
.menu-wrap.open-menu{
    max-height: 400px;
}
.menu{
    background: white;
    margin: 10px;
    padding: 20px;
}
.user{
    display: flex;
    align-items: center;
}
.user h2{
    font-weight: 500;
}
.user img{
    width: 50px;
    border-radius: 50%;
    margin-right: 15px;
}
.menu hr{
    border: 0;
    height: 1px;
    width: 100%;
    background: #ccc;
    margin: 15px 0 10px;
}
.menu-link{
  display: flex;
  align-items: center;
  text-decoration: none;
  color: #525252;
  margin: 12px 0;
}
.menu-link img{
  width: 30px;
  border-radius: 50%;
  padding: 8px;
  background: #e5e5e5;
  margin-right: 15px;
}
.menu-link p{
    width: 100%;
    font-weight: 300px;
}
.menu-link span{
  font-size: 22px;
  transition: transform 0.5s;
}
.menu-link:hover span{
  transform: translateX(5px);
}
.menu-link:hover p{
    color: black;
}
</style>
<body>
<div class="hero">
        <nav>
          <img src="pics/Spoderman.jpg" class="logo">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">stuff</a></li>
            <li><a href="#">stuff2</a></li>
            <li><a href="#">stuff3</a></li>
        </ul>
        <img src="pics/Spoderman.jpg" class="pic" onclick="toggleMenu()">
        
        <div class="menu-wrap" id="menu">
            <div class="menu">
                <div class="user">
                    <img src="pics/Spoderman.jpg">
                    <h2>spider</h2>
                    
                </div>
                <hr>

                <a href="#"class="menu-link">
                  <img src="pics/profile.png">
                  <p>Profile Edit</p>
                  <span>></span>
                </a>
                <a href="#"class="menu-link">
                  <img src="pics/gear.png">
                  <p>settings</p>
                  <span>></span>
                </a>
                <a href="#"class="menu-link">
                  <img src="pics/logout.png">
                  <p>logout</p>
                  <span>></span>
                </a>

            </div>
        </div>
        </nav>
    </div>
    <script>
      let menu = document.getElementById("menu")

      function toggleMenu(params) {
        menu.classList.toggle("open-menu")
      }
    </script>
<?php 
    }

?>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px; ">
      <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="home.php">Coffee Time</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" style="text-size-adjust: 20px" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_user.php">Tampil User</a>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_menu.php">Tampil Menu</a>
            </li>
            <li>
              <a class="nav-link" aria-current="page" href="tampil_meja.php">Tampil Meja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tambah_user.php">Tambah User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tambah_menu.php">Tambah Menu</a>
            </li>
            <li>
              <a class="nav-link" aria-current="page" href="tambah_meja.php">Tambah Meja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="order_menu.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="histori_order.php">History</a>
            </li>
           
            
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="p-3 bg-success rounded-1" style="margin-top:20px"> -->

<!-- <?php
    if($_SESSION['role'] == 'Cashier'){
       
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Coffee Time</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_menu.php">Tampil Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tambah_menu.php">Tambah Menu</a>
            </li>
            <li>
              <a class="nav-link" aria-current="page" href="tampil_meja.php">Tampil Meja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="order_menu.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="histori_order.php">History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="p-3 bg-warning rounded-1" style="margin-top:20px">
  <?php 
    }

?>
 -->
