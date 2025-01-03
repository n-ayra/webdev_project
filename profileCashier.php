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
  /* General Body Style */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Navbar Style */
.navbar {
    background-color: #2c3e50;
    border: none;
    border-radius: 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar li a {
    color: #ecf0f1 !important;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 600;
    padding: 15px 20px;
}

.navbar-nav li.active a {
    background-color: #e74c3c !important;
}

.navbar .navbar-brand {
    color: #ecf0f1;
    font-size: 24px;
    font-weight: bold;
}

/* Hero Section */
.container {
    background-color: #fff;
    padding: 40px 60px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 80px;
}

.container h4 {
    font-size: 26px;
    color: #e74c3c;
    margin-bottom: 20px;
    font-weight: 600;
}

.container .bg-1 {
    background-color: #34495e;
    color: #ecf0f1;
    padding: 30px;
    border-radius: 8px;
    text-align: center;
}

.container .bg-1 h3 {
    font-size: 28px;
    margin-bottom: 20px;
    font-weight: 700;
}

.container .bg-1 p {
    font-size: 16px;
    font-style: italic;
}

/* Profile Section */
.profile-header {
    text-align: center;
    margin-top: 40px;
}

.profile-header h1 {
    font-size: 36px;
    color: #2c3e50;
    margin-bottom: 10px;
    font-weight: 700;
}

.profile-header .profile-info {
    font-size: 18px;
    color: #7f8c8d;
    margin: 8px 0;
}

/* Buttons */
.btn {
    background-color: #e74c3c;
    color: #fff;
    padding: 12px 30px;
    border-radius: 25px;
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn:hover {
    background-color: #c0392b;
    transform: scale(1.05);
}

/* Table Styling */
.table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.table th, .table td {
    padding: 15px;
    text-align: left;
    font-size: 16px;
    color: #7f8c8d;
}

.table th {
    background-color: #e74c3c;
    color: white;
}

.table td {
    background-color: #ecf0f1;
}

.table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table tr:hover {
    background-color: #e6e6e6;
}

/* Modal Styling */
.modal-header {
    background-color: #2c3e50;
    color: #ecf0f1;
    text-align: center;
    padding: 20px;
}

.modal-body {
    padding: 30px;
    background-color: #f9f9f9;
}

.modal-footer {
    text-align: center;
    padding: 20px;
}

.modal-footer .btn {
    background-color: #2c3e50;
    color: #fff;
    padding: 10px 25px;
    font-weight: 600;
}

.modal-footer .btn:hover {
    background-color: #34495e;
}

/* Footer */
footer {
    background-color: #2c3e50;
    color: #ecf0f1;
    padding: 40px 20px;
    text-align: center;
}

footer a {
    color: #ecf0f1;
    font-size: 18px;
    text-decoration: none;
}

footer a:hover {
    color: #e74c3c;
}

/* Scroll to Top Button */
.up-arrow {
    font-size: 30px;
    color: #ecf0f1;
    cursor: pointer;
}

.up-arrow:hover {
    color: #e74c3c;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 30px 20px;
    }

    .navbar li a {
        font-size: 14px;
    }

    .profile-header h1 {
        font-size: 30px;
    }

    .profile-header .profile-info {
        font-size: 16px;
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
  <h4>PROFILE</h4>
<div id="order" class="bg-1">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <?php
  include 'connection.php'; 
  $username = $_SESSION['username'];
  

  $records = mysqli_query($conn, "SELECT * FROM user WHERE USERNAME='$username'");

  while($data = mysqli_fetch_array($records))
{
?>
  <br>
  <p class="title" style="font-size: 20px;color: black;">NAME:</p>
  <h1><?php echo $data['NAME']; ?></h1>
  <br>
  <p class="title" style="font-size: 20px;color: black;">ID:</p>
  <h1><?php echo $data['ID']; ?></h1>
  <br>
  <p style="font-size: 20px;color: black;">USERNAME:</p>
  <h1><?php echo $data['USERNAME']; ?></h1>
  <br>
  <p style="font-size: 20px;color: black;">ROLE:</p>
  <h1><?php echo $data['ROLE']; ?></h1>
  <br>
<?php
}
?>
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
