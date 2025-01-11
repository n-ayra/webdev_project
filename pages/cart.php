<?php 
include "../database/connection.php";
session_start();
?>

<?php include '../include/headerinc.html'; ?>
<style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }

  h1 {
      margin: 20px;
      letter-spacing: 10px;
      font-size: 80px;
      color: #f1f1f1;
          
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
    background:rgb(134, 134, 134);
    color:rgb(0, 0, 0);
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
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color:rgb(0, 0, 0);
    color:rgb(255, 255, 255);
  }
  .modal-header, h4, .close {
    background-color: #000000;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #f1f1f1;
  }
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #000000;
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
    background-color: #f1f1f1 !important;
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
    color: white;
  }
  table, th, td {
    border: 5px solid #fff;
    width: 900px;
  }
  </style>
</head>
<body id="flameAndFork" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="../images/logo.jpg" alt="logo"
       style="height: 70px; width: 85px;">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
      <li><a onclick="location.href='../pages/homepageCust.php'">HOMEPAGE</a></li>
        <li><a onclick="location.href='../pages/about.php'">ABOUT US</a></li>
        <li><a onclick="location.href='../pages/tableCust.php'">MENU</a></li>
        <li><a onclick="location.href='../pages/cart.php'">CART</a></li>
      </ul>
    </div>
  </div>
</nav>

  >
<div id="about" class="container text-center">
  <h4>YOUR CART</h4>
</div> 
    
<!-- Container (Order) -->
<form action="../actions/update.php" method="get">
<div id="order" class="bg-1">
  <div class="container">
<table class="w3-table w3-striped">
  <tr>
    <th>Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  
  <tr>
    <?php 
    $records = mysqli_query($conn, "SELECT * FROM ".$_SESSION['table']);
    $newPrice = 0;
    while($data = mysqli_fetch_array($records))
    {
      ?>
      
    <td><?php echo $data['NAME'];?></td>
    <td><?php echo $data['QUANTITY'];?></td>     
    <td><?php echo $data['PRICE'];?></td>
    <td><a href="../actions/update.php?NAME=<?php echo $data['NAME'];?>" class="btn btn-success" >Edit</a></td>
    <td><a href="../actions/delete.php?Name=<?php echo $data['NAME'];?>" class="btn btn-danger" >Delete</a></td>
  </tr>
  
  <?php $newPrice = $newPrice + $data['PRICE']; ?>
  
  <?php
}
?>
  
</table>
<br>
<a href="../pages/payment.php?NAME=<?php echo $newPrice;?>" class="btn btn-danger" style="text-align: center; display: block;background-color: #b78561;">Payment</a>
  </div>
</div>
</form>

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
