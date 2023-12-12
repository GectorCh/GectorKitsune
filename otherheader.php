<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&family=Poppins:wght@100;300;500&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    *{
        padding:0;
        margin:0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }
    body{
        font-family: "Poppins", sans-serif;
    }
    nav{
        background: blue;
        height: 80px;
        width: 100%;
        z-index: 1;
    }
    label.logo{
        color: white;
        font-size: 35px;
        line-height: 80px;
        padding: 0 100px;
        font-weight: bold;
    }
    nav ul{
        float: right;
        margin-right: 20px;
    }
    nav ul li{
        display: inline-block;
        line-height: 80px;
    }
    nav ul li a{
        color: white;
        font-size: 17px;
        padding: 7px 13px;
        text-transform: uppercase;
        text-decoration: none;
    }
    a.open, a:hover{
        background: #1b9bff;
        transition: .5s;
    }
    .pic{
        width: 40px;
        border-radius: 50%;
        cursor: pointer;
        margin-left: 30px;
    }
    .pic1{
        width: 40px;
        border-radius: 50%;
        margin-left: 30px;
    }
    .checkbtn{
        float: right;
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;
        display: none;
    }
    #check{
        display: none;
    }
    @media (max-width: 952px){
        label.logo{
            font-size: 30px;
            padding-left: 50px;
        }
        nav ul li a{
            font-size: 16;
        }        
        nav ul li img{
            display: none;
        }
    }
    @media (max-width: 858px){
        .checkbtn{
            display: block;
        }
        ul{
            position: fixed;
            width: 100%;
            height: 100vh;
            background: grey;
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
        }
        nav ul li{
            display: block;
        }
        nav ul li a{
            font-size: 20px;
        }

        a:hover, a.open{
            background: none;
            color: #0082e6;
        }
        #check:checked ~ ul{
            left: 0;
        }
    }
    section{
        background: url(cool-background.jpg) no-repeat; 
        background-size: cover;
        height: calc(100vh - 80px);
    }

</style>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i><img class="pic" src="pics/profile.png" alt="Puto"></i>
        </label>
        <label class="logo">Thing</label>
        
        <ul>
            <li><a href="#" class="open">Home</a></li>
            <li><a href="#">Pallate</a></li>
            <li><a href="#">Report</a></li>
            <li><a href="#">Profile</a></li>
        </ul>
    </nav>
    <section></section>
</body>
</html>
