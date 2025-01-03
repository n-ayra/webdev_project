<?php 
include "connection.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Flame & Fork</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
body {
  font: 400 15px/1.8 'Lato', sans-serif;
  color: #444;
  background-color: #f9f9f9;
  margin: 0;
  padding: 0;
}

h1 {
  margin: 20px 0;
  letter-spacing: 5px;
  font-size: 50px;
  color: #3a3a3a;
  text-transform: uppercase;
  text-align: center;
}

h4 {
  margin: 20px 0;
  font-size: 24px;
  color: #555;
  text-align: center;
}

.container {
  padding: 60px 20px;
}

.navbar {
  font-family: 'Montserrat', sans-serif;
  background-color: #2b8057;
  border: none;
  border-radius: 0;
  margin-bottom: 0;
  letter-spacing: 1px;
}

.navbar li a, .navbar .navbar-brand {
  color: #fff !important;
  font-size: 16px;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  background-color: #45a049 !important;
  color: white !important;
}

.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #fff !important;
}

footer {
  background-color: #333;
  color: #f5f5f5;
  padding: 40px;
  text-align: center;
}

footer a {
  color: #f5f5f5;
  text-decoration: none;
}

footer a:hover {
  color: #4CAF50;
}

.btn {
  padding: 10px 20px;
  background-color: #000000;
  color: white;
  border: none;
  border-radius: 5px;
  transition: 0.3s;
}

.btn:hover {
  background-color:rgb(251, 0, 0);
  color: white;
}

.modal-header, .modal-body {
  padding: 20px;
}

.modal-header {
  background-color: #2b8057;
  color: white;
  border-bottom: 1px solid #ddd;
}

.modal-body {
  background-color: #f9f9f9;
}

.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  border-collapse: collapse;
  border: 1px solid #ddd;
}

.table th {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
}

.table td {
  padding: 10px;
  text-align: left;
}

input[type="text"], input[type="file"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  box-sizing: border-box;
  border: 1px solid #ddd;
  border-radius: 5px;
}

input[type="text"]:focus, input[type="file"]:focus {
  border-color: #4CAF50;
  outline: none;
}

textarea {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ddd;
  border-radius: 5px;
  resize: none;
}

textarea:focus {
  border-color: #4CAF50;
  outline: none;
}

@media (max-width: 768px) {
  .navbar-header {
    text-align: center;
  }

  h1 {
    font-size: 36px;
  }

  .container {
    padding: 40px 10px;
  }
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
    <li><a onclick="location.href='homepageCashier.php'">Homepage</a></li>
        <li><a onclick="location.href='profileCashier.php'">Profile</a></li>
        <li><a onclick="location.href='addMenu.php'">Add Menu</a></li>
        <li><a onclick="location.href='menu.php'">Edit Menu</a></li>
        <li><a onclick="location.href='custTable.php'">Payment</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Container (Red Panda Introduction) -->
<div id="about" class="container text-center">
<h4>ADD MENU</h4>
  <div id="order" class="bg-1">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <form action="inputMenu.php" method="post" role="form">
            <div class="form-group">
            
            <label for="psw" style="font-size: 20px;color: black;"><span class=""></span> NAME: </label>
            <input type="text" id="name" name="name" class="form-control">
            <label for="psw" style="font-size: 20px;color: black;"><span class=""></span> DESCRIPTION MENU:</label>
            <input type="text" id="desc" name="desc" class="form-control">
            <label for="psw" style="font-size: 20px;color: black;"><span class=""></span> PRICE:</label>
            <input type="text" id="price" name="price" class="form-control">
            <label for="psw" style="font-size: 20px;color: black;"><span class=""></span> IMAGE:</label>
            <input type="file" id="image" name="image" style="font-size: 15px;margin: auto;color: black;">
            </div>
              <button type="submit" name="send" class="btn btn-block"> 
                <span class="glyphicon glyphicon-plus"></span> Add Menu
              </button>
          </form>
          </div>
      </div>
    </div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#muoWestern" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
    
        // Get the modal

        var modalparent = document.getElementsByClassName("modal_multi");

        // Get the button that opens the modal

        var modal_btn_multi = document.getElementsByClassName("myBtn_multi");

        // Get the <span> element that closes the modal
        var span_close_multi = document.getElementsByClassName("close_multi");

        // When the user clicks the button, open the modal
        function setDataIndex() {

            for (i = 0; i < modal_btn_multi.length; i++)
            {
                modal_btn_multi[i].setAttribute('data-index', i);
                modalparent[i].setAttribute('data-index', i);
                span_close_multi[i].setAttribute('data-index', i);
            }
        }



        for (i = 0; i < modal_btn_multi.length; i++)
        {
            modal_btn_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "block";
            };

            // When the user clicks on <span> (x), close the modal
            span_close_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "none";
            };

        }

        for (i = 0; i < modal_btn_multi.length; i++)
        {
            modal_btn_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "block";
            };

            // When the user clicks on <span> (x), close the modal
            span_close_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "none";
            };

        }
        
        window.onload = function() {

            setDataIndex();
        };

        window.onclick = function(event) {
            if (event.target === modalparent[event.target.getAttribute('data-index')]) {
                modalparent[event.target.getAttribute('data-index')].style.display = "none";
            }

            // OLD CODE
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };

</script>

</body>
</html>
