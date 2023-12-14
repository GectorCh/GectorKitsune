<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title></title>
</head>
<style>
body{
    width: 98%;
    height: 95vh;
    font-family: 'Poppins', sans-serif;
    background-image: linear-gradient(rgba(0,80,0,0.65), rgba(0,80,0,0.65)), url(Flamingo.jpg);
    background-size: cover;
    background-position: center;
    
}
.button{
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: black;
    text-decoration: none;
}
        
.button{
    padding: 9px 25px;
    background-color: rgba(0, 136, 169, 0.8);
    
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}
        
.button:hover{
    background-color: rgb(54, 186, 219);
}
.box{
    width: 400px;
    padding: 40px;
    border-radius: 18px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: black;
    text-align: center;
}
.box h1{
    color: rgb(255, 246, 246);
    font-weight: 500;
}
.box input[type = "text"],.box input[type = "email"],.box input[type = "password"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 16px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 20px;
    transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "email"]:focus,.box input[type = "password"]:focus{
    width: 280px;
    border-color: greenyellow;
}
.box input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid green;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 20px;
    transition: 0.25s;
    cursor: pointer;
}
.box input[type = "submit"]:hover{
    background: green;
}
</style>
<body>
    
    <form class="box" action="proses_login.php" method="post">
        <h1>Log in into PetroSida</h1>
        <div>
            <input type="text" name="username" value="" placeholder="Username">
        </div>
        <div>
            <input type="password" name="password" placeholder="Password">
        </div>
            
        <input type="submit" name="login" class="button" value="LOGIN">
    </form>
    
</body>
</html>