<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="index.css">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Login </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>
  </div>
</nav>
    <nav class="nav2">
           <img class="symbol" src="img2.png" alt="">
        <div class="menu">
            <a class="button" href="index.html">HOME</a>
            <a class="button" href="mailto:bbianstudy@gmail.com">CONTACT</a>
        </div>
       </nav>
       <div class="h-text">
        <h1>WELCOME <span>BBIANS</span></h1>
        <p>
            Our website is to provide daily notes, previous year question papers
        </p>
        <button class="bg-orange-500  rounded-2xl text-white hover:text-purple-900 hover:bg-white mx-2 hover:border-2 hover:border-purple-900 ">  COURSES</button>
        <button class="bg-orange-500  rounded-2xl text-white hover:text-purple-900 hover:bg-white mx-2 hover:border-2 hover:border-purple-900">  <a href="upi://pay?pa=8099139475@sbi&pn=Monoji&cu=IN">DONATE</a> </button>
       </div>
    </header>

    </body>
</html>
