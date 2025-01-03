<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>MUO Western XXL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }

  h1 {
      margin: 20px;
      letter-spacing: 10px;
      font-size: 80px;
      color: #B62511;
          
    }

  h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 2px;      
    font-size: 20px;
  }
  .container {
    padding: 80px 120px;
    margin-left: auto;
    margin-right: auto;
  }
  .container-fluid {
    margin-left: auto;
    margin-right: auto;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #D34426;
    color: #761401;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #560A02;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #8e1e07;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #B62511;
  }
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #741a0d;
    border: 0;
    font-size: 15px !important;
    letter-spacing: 6px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #B62511 !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  th {
    background-color: brown;
    color: black;
  }
  table, th, td {
    border: 5px solid #fff;
    width: 900px;
  }
  </style>
</head>
<body id="muoWestern" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="Image/logo.jpg" alt="logo"
       style="height: 70px; width: 85px;">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-left">
        <li><a onclick="location.href='homepageCust.php'">HOMEPAGE</a></li>
        <li><a onclick="location.href='about.php'">ABOUT US</a></li>
        <li><a onclick="location.href='tableCust.php'">MENU</a></li>
        <li><a onclick="location.href='cart.php'">CART</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Container (Red Panda Introduction) -->
<div id="about" class="container text-center">
  <h4>ABOUT FLAME & FORK</h4>
  <h2><em>About us</em></h2>
  <p>Flame and Fork specializes in a diverse range of Western cuisine, featuring signature dishes like Grilled Ribeye Steak, Herb-Crusted Lamb Chops, Classic Chicken Chop, Grilled Salmon Fillet, Beef Wellington, Spaghetti Carbonara, BBQ Beef Ribs, Fish and Chips, Cheesy Beef Burger, and the Mediterranean Grilled Veggie Platter. We pride ourselves on delivering flawless, flavorful, and irresistibly tasty meals by using only premium, high-quality ingredients. For meat-based dishes such as Lamb Chops and Cheesy Beef Burger, we source the finest imported meat from Australia. Pair your meal with our refreshing selection of Western drinks, including Iced Lemon Tea, Vanilla Milkshake, Iced Mocha, Sparkling Apple Cooler, and Strawberry Lemonade. Indulge in an unparalleled dining experience and savor the exceptional flavors that can only be found at Flame and Fork.</p>
  <br>
  <h2><em>Where To Find Us?<em></h2><br>
      <h3>61, Jalan Chengai, Taman Melodies, 80250 Johor Bahru, 80250 Johor, Johor Darul Ta'zim</h3><br>
      <img src="Image/Shop.JPG" width="600px" style="display: block; margin-left: auto; margin-right: auto;"><br>
      <a href="https://maps.app.goo.gl/R9k9S1WGb8S59Ta36" target="_blank">Google Maps Link</a>
</div>