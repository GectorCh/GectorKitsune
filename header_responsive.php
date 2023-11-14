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
<lnk rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&family=Poppins:wght@100;300;500&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
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
  }
  header .logo{
    width: 100px;
    height: 40px;
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
  }
  header .navbar ul li{
    display: inline-block;
    position: relative;
    float: left;
    top: 9px;;
  }
  header .navbar ul li a{
    font-size: 20px;
    padding: 10px;
    color: #f0f0f0;
    display: black;
    
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
  <img src="pics/Spoderman.jpg" alt="spider" class="logo">
  <input type="checkbox" id="menu-bar">
  <label for="menu-bar">
    <img src="pics/Spoderman.jpg" alt="spider" class="pic">
  </label>

  <nav class="navbar">
      <ul>
        <li><a href="#">test</a></li>
        <li><a href="#">test2</a></li>
        <li><a href="#">test3</a></li>
        <li><a href="#">test4</a></li>
        <li><a href="#">test5</a></li> 
        <img src="pics/Spoderman.jpg" alt="spider" class="pic">
      </ul>
      
  </nav>
</header>


