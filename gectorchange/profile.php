<?php
    include "header.php"
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
    <title>Document</title>
</head>
<style>
    .container{


    }
    .main{
        padding:15px;
    }
    .sidebar{
        background:#333;
        color:white;
        height:100%;
    }
    .sidebar a{
        margin-left:10px;
        display:block;
        color:white;
        padding-bottom:20px;
        font-size:15px;
        text-decoration:none;
    }
    .card{
        position: relative;
        display: flex;
        flex-direction: column;
        
    }
    .content{
        background: whitesmoke;
    }
    .admin{
        color: white;
    }
</style>
<body>
    
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img src="<?=$_SESSION['foto_user']?>" class="rounded-circle" width="150" alt="<?=$_SESSION['nama']?>">
                            <div class="mt-3">
                            <h5 class="admin"><?=$_SESSION['role']?></h5>
                            <h3><?=$_SESSION['nama']?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="n-3 pt-3">
                            Nama Lengkap
                        </h1>
                        <div class="col-md-9 text-secondary">
                            <?=$_SESSION['fullname_user']?> 
                        </div>
                        <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Email</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <?=$_SESSION['email_user']?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Nomor Hp</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <?=$_SESSION['nomorhp_user']?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Address</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <?=$_SESSION['alamat_user']?>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
      
</body>
</html>
