<?php 
include "../database/connection.php";
session_start();

?>
<?php include '../include/headerinc.html'; ?>
  <style>
  body {
    font: 400 16px/1.8 'Lato', sans-serif;
    color: #555;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  h1 {
    margin: 20px;
    letter-spacing: 5px;
    font-size: 60px;
    color: #2b8057;
    text-align: center;
  }

  h4 {
    margin: 10px 0 30px;
    letter-spacing: 2px;
    font-size: 24px;
    text-align: center;
    color: #444;
  }

  .container {
    flex: 1; /* Ensures the container expands to take up available space */
    padding: 80px 120px;
    margin: 0 auto;
  }
  
   .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2b8057;
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
  
  .btn {
    background-color: #2b8057;
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    border: none;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .btn:hover, .btn:focus {
    background-color: #1f6a47;
    color: #fff;
  }

  footer {
    background-color: #2d2d30;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    margin-top: auto; /* Pushes the footer to the bottom */
  }

  footer a {
    color: #f1c40f;
    font-weight: 600;
  }

  footer a:hover {
    color: #fff;
    text-decoration: none;
  }

  .modal-header {
    background-color: #2b8057;
    color: #fff;
    font-size: 24px;
    text-align: center;
    border-bottom: 2px solid #ddd;
  }

  .modal-body {
    padding: 20px;
    background-color: #f7f7f7;
  }

  .table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .table th, .table td {
    padding: 15px;
    text-align: left;
    border: 1px solid #ddd;
  }

  .table th {
    background-color: #2b8057;
    color: #fff;
  }

  .thumbnail {
    border: none;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .thumbnail:hover {
    transform: scale(1.05);
  }

  .form-control {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
  }

  textarea {
    resize: vertical;
    border-radius: 5px;
    border: 1px solid #ddd;
  }

  @media (max-width: 768px) {
    .navbar {
      font-size: 14px;
    }

    h1 {
      font-size: 40px;
    }

    h4 {
      font-size: 18px;
    }

    .btn {
      padding: 8px 15px;
      font-size: 14px;
    }
  }
</style>

  </style>
</head>
<body id="flameAndFork" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include '../include/navbarCashier.html'; ?>

  >
<div id="about" class="container text-center">
<h4>Cashier Dashboard</h4>
  <div id="order" class="bg-1">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <a onclick="location.href='../pages/profileCashier.php'" class="btn btn-primary btn-lg btn-block"><span class="fa fa-user"> Profile</span></a><br>
            <a onclick="location.href='../pages/addMenu.php'" class="btn btn-primary btn-lg btn-block"><span class="fa fa-plus-circle"> Menu</span></a><br>
            <a onclick="location.href='../pages/menu.php'" class="btn btn-primary btn-lg btn-block"><span class="fa fa-pencil-square-o"> Edit Menu</span></a><br>
            <a onclick="location.href='../pages/custTable.php'" class="btn btn-primary btn-lg btn-block"><span class="fa fa-shopping-cart"> Payment</span></a><br>
            <a onclick="location.href='../actions/logout.php'" class="btn btn-primary btn-lg btn-block"><span class="fa fa-sign-out"> Log Out</span></a>
          </div>
      </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#flameAndFork" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
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
