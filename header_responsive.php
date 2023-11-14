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

<?php 
    }

?>
<!-- <div class="hero">
        <nav class="navbar">
          <img src="pics/Spoderman.jpg" class="logo">
          <nav class="nav-menu">
            <input type="checkbox" id="menu-bar">
              <label for="menu-bar">
                <img src="pics/Spoderman.jpg" class="pic">
              </label>
        <ul>
          
            <li><a href="#">Home</a></li>
            <li><a href="#">stuff</a></li>
            <li><a href="#">stuff2</a></li>
            <li><a href="#">stuff3</a></li>
        </ul>        
          <img src="pics/Spoderman.jpg" class="pic">
        </nav>
      </nav>
    </div> test 1 fail-->
    
<!-- .hero{
    width: 100%;
    min-height: 100vh;
    color: #252525;
}
.navbar{
    background: #222222;
    width: 100%;
    padding: 10px 10%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
}

}
.pic{
    width: 40px;
    border-radius: 50%;
    cursor: pointer;
    margin-left:  30px;
}
.navbar ul{
  width: 100%;
  text-align: right;
}
.navbar ul li{
    display: inline-block;
    list-style: none;
    margin: 10px 20px;
}
.navbar ul li a{
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
#menu-bar{
  display: none;
  margin-left: 10%;
}

.nav-menu{
    width: 80%;
    
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
}
.nav-menu label{
  font-size: 20px;
  color: white;
  cursor: pointer;
  display: none;
}
@media (max-width:991px) {
  .navbar{
    padding: 20px;
  }
  .navbar label{
    display: initial;
  }
  .navbar .logo .nav-menu{
    position: absolute;
    top: absolute;
    left: 0;
    right: 0; 
    background: #222222;
    border-top: 1px solid rgba(0,0,0,0.1);
    display: none;
  }
   .nav-menu ul li{
    width: 100%;
  }
} -->

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
