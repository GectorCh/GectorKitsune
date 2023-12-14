<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<?php
    if($_SESSION['role'] == 'admin'){
?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<lnk rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&family=Poppins:wght@100;300;500&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    box-sizing: border-box;
    text-transform: capitalize;
    text-decoration: none;
  }
  header{
    position: relative;
    width: 100%;
    background: #2d4d43;
    box-shadow: 0px 5px 10px rgba(0,0,0,0.1);
    padding: 10px 10%;
    display: flex;
    align-items: center;
    justify-content: space-between; 
    z-index: 1;
  }
  header .logo{
    width: 150px;
    height: 71px;
  }
  header .pic{
    width: 40px;
    border-radius: 50%;
    cursor: pointer;
    margin-left: 30px;
  }
  header .navbar ul{
    list-style: none;
    width: 100%;
    text-decoration:none;
  }
  header .navbar ul li{
    display: inline-block;
    position: relative;
    float: left;
    top: 9px;
    text-decoration:none;
  }
  header .navbar ul li a{
    font-size: 20px;
    padding: 10px;
    color: #f0f0f0;
    display: black
    text-decoration:none;
    
  }
  header .navbar ul li a:hover{
    color: #437d6d;
    transition: 0.5s;
    
  }
  #menu-bar{
    display:none;
  }
  header label{
    cursor: pointer;
    display: none;
  }


  @media (max-width:991px){
    header{
      padding:20px
    }
    header label{
      display: initial;
    }
    header .navbar{
      position: absolute;
      top:100%; left: 0; right: 0;
      background: #4c6156;
      border-top: 1px solid rgba(0,0,0,0.1);
      display: none;
    }
    header .navbar ul li {
      width: 100%;
      padding: 10px;
    }
    header .navbar img{
      display:none;
    }
    #menu-bar:checked ~ .navbar{
      display: initial;
    }
  }
</style>
<body>
<header>
  <img src="2eres.png" alt="PetroSida" class="logo">
  <input type="checkbox" id="menu-bar">
  <label for="menu-bar">
    <img src="306470.png" alt="User" class="pic">
  </label>

  <nav class="navbar">
      <ul>
        <li><a href="index.php"class="nav-link">Home</a></li>
        <li><a href="tampil_user.php"class="nav-link">🔑</a></li>
        <li><a href="tampil_paket.php"class="nav-link">📦</a></li>
        <li><a href="profile.php"class="nav-link">Profile</a></li>
        <li><a href="tampil_logbook.php"class="nav-link">LogBook Feeding</a></li>
        <li><a href="tampil_logbookpkg.php"class="nav-link">LogBook Packing</a></li>
        <li><a href="logout.php"class="nav-link">Logout</a></li> 
        
      </ul>
      
  </nav>
</header>

   <?php 
    }
?>
<?php
    if($_SESSION['role'] == 'karyawan'){
?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<lnk rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&family=Poppins:wght@100;300;500&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    box-sizing: border-box;
    text-transform: capitalize;
    text-decoration: none;
  }
  header{
    position: relative;
    width: 100%;
    background: #2d4d43;
    box-shadow: 0px 5px 10px rgba(0,0,0,0.1);
    padding: 10px 10%;
    display: flex;
    align-items: center;
    justify-content: space-between; 
    z-index: 1;
  }
  header .logo{
    width: 150px;
    height: 71px;
  }
  header .pic{
    width: 40px;
    border-radius: 50%;
    cursor: pointer;
    margin-left: 30px;
  }
  header .navbar ul{
    list-style: none;
    width: 100%;
    text-decoration:none;
  }
  header .navbar ul li{
    display: inline-block;
    position: relative;
    float: left;
    top: 9px;
    text-decoration:none;
  }
  header .navbar ul li a{
    font-size: 20px;
    padding: 10px;
    color: #f0f0f0;
    display: black
    text-decoration:none;
    
  }
  header .navbar ul li a:hover{
    color: #437d6d;
    transition: 0.5s;
    
  }
  #menu-bar{
    display:none;
  }
  header label{
    cursor: pointer;
    display: none;
  }


  @media (max-width:991px){
    header{
      padding:20px
    }
    header label{
      display: initial;
    }
    header .navbar{
      position: absolute;
      top:100%; left: 0; right: 0;
      background: #4c6156;
      border-top: 1px solid rgba(0,0,0,0.1);
      display: none;
    }
    header .navbar ul li {
      width: 100%;
      padding: 10px;
    }
    header .navbar img{
      display:none;
    }
    #menu-bar:checked ~ .navbar{
      display: initial;
    }
  }
</style>
<body>
<header>
  <img src="2eres.png" alt="PetroSida" class="logo">
  <input type="checkbox" id="menu-bar">
  <label for="menu-bar">
    <img src="306470.png" alt="User" class="pic">
  </label>

  <nav class="navbar">
      <ul>
        <li><a href="index.php"class="nav-link">Home</a></li>
        
        <li><a href="tampil_paket.php"class="nav-link">Product List</a></li>
        <li><a href="profile.php"class="nav-link">Profile</a></li>
        <li><a href="tampil_logbook.php"class="nav-link">LogBook Feeding</a></li>
        <li><a href="tampil_logbookpkg.php"class="nav-link">LogBook Packing</a></li>
        <li><a href="logout.php"class="nav-link">Logout</a></li> 
        
      </ul>
      
  </nav>
</header>

   <?php 
    }
?>
