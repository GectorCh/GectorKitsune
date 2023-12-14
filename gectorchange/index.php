<?php 
    include "header.php";
?>
<?php
    if($_SESSION['role'] == 'admin'){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&family=Poppins:wght@100;300;500&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="favicon.ico">
    <title></title>
</head>


<div class="container">
        <div class="main">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            
                            <h5 class="admin"><?=$_SESSION['role']?></h5>
                            <h3>Selamat Datang <?=$_SESSION['nama']?>!</h3>
                            <?=$_SESSION['fullname_user']?>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<style>
 .container{
        
       
    }
    .main{
        padding:15px;
    }
    
    
    .card{
        position: relative;
        display: flex;
        flex-direction: column;
        z-index: -10;
    }
    .content{
        background: whitesmoke;
    }
</style>
<?php
    }
?>

<?php
    if($_SESSION['role'] == 'karyawan'){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&family=Poppins:wght@100;300;500&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="favicon.ico">
    <title></title>
</head>


<div class="container">
        <div class="main">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            
                            <h5 class="admin"><?=$_SESSION['role']?></h5>
                            <h3>Selamat Datang <?=$_SESSION['nama']?>!</h3>
                            <?=$_SESSION['fullname_user']?>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<style>
 .container{
        
       
    }
    .main{
        padding:15px;
    }
    
    
    .card{
        position: relative;
        display: flex;
        flex-direction: column;
        z-index: -10;
    }
    .content{
        background: whitesmoke;
    }
</style>
<?php
    }
?>