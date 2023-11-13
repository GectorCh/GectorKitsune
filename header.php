<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
 
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&family=Poppins:wght@100;300;500&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="favicon.ico">
    <title></title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    box-sizing
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
    width: 120px;
    height: 78px;
}
.pic{
    width: 35px;
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
          <img src="p02.png" class="logo">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="tampil_user.php">Tampil User</a></li>
            <li><a href="tampil_paket.php">Tampil Merk</a></li>
            <li><a href="gectorcloud/index.php">GectorCloud</a></li>
            <li><a href="logout.php">Logout</a></a></li>
        </ul>
        <img src="p01.jpg" class="pic" onclick="toggleMenu()">
        
        <div class="menu-wrap" id="menu">
            <div class="menu">
                <div class="user">
                    <img src="p01.jpg">
                    <h2><?=$_SESSION['nama']?></h2>
                    
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



