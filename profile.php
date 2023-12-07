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
        position: relative;
        z-index: 1;

    }
    .main{
        padding:15px;
    }
    .sidebar{
        background:#333;
        color:white;
        height:100%;
    }
    .sidebar ul{
        align-items: center;
        list-style: none;
        width: 100%;
    }
    .sidebar ul li{
        margin-right:25px;
        display: block;
        padding-bottom:20px;
        font-size:15px;
    }
    .sidebar ul li a{
        color: white;
        text-decoration:none;
    }
    .sidebar ul li a:hover{
        color: #437d6d;
        transition: 0.5s;
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
        color: darkred;
    }
</style>
<body>
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img src="soldier_cat.jpg" class="rounded-circle" width="150" alt="cat">
                            <div class="mt-3">
                            <h5 class="admin"><?=$_SESSION['role']?></h5>
                            <h3><?=$_SESSION['nama']?></h3>
                            <ul>
                                <li><a href="#" class="nav-link">Change Password</a></li>
                                <li><a href="#" class="nav-link">help</a></li>
                                <li><a href="#" class="nav-link">signout</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="n-3 pt-3">
                            Full name
                        </h1>
                        <div class="col-md-9 text-secondary">
                            James 
                        </div>
                        <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Email</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            Jackass@gmail.com
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>PN</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            08101019291019
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Address</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            your mom
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- <div class="card mb-3 content">
                <h1 class="n-3">Project</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Project name</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            Project desc
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div> 
<!-- container -->
</body>
</html>
