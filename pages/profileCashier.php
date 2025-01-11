<?php 
include "../database/connection.php";
session_start();
?>
<?php include '../include/headerinc.html'; ?>
  <style>
  /* General Body Style */
body {
    font-family: 'Lato', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Navbar Style */
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
  

/* Hero Section */
.container {
    background-color: #fff;
    padding: 40px 50px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-top: 80px;
}

.container h4 {
    font-size: 24px;
    color: #206142;
    margin-bottom: 20px;
    font-weight: 600;
}

.container .bg-1 {
    background-color:rgb(0, 0, 0);
    color: #fff;
    padding: 30px 40px;
    border-radius: 8px;
    text-align: center;
    margin-bottom: 40px;
}

.container .bg-1 h3 {
    font-size: 30px;
    margin-bottom: 20px;
    font-weight: 700;
}

.container .bg-1 p {
    font-size: 18px;
    font-style: italic;
    margin-bottom: 20px;
}

/* Profile Section */
.profile-header {
    text-align: center;
    margin-top: 40px;
}

.profile-header h1 {
    font-size: 36px;
    color: #206142;
    margin-bottom: 10px;
    font-weight: 700;
}

.profile-header .profile-info {
    font-size: 18px;
    color: #555;
    margin: 8px 0;
}

/* Table Styling */
.table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.table th, .table td {
    padding: 12px;
    text-align: left;
    font-size: 16px;
    color: #555;
}

.table th {
    background-color: #206142;
    color: white;
    font-weight: 700;
}

.table td {
    background-color: #f9f9f9;
}

.table tr:nth-child(even) {
    background-color: #f1f1f1;
}

.table tr:hover {
    background-color: #e1e1e1;
}

/* Button Styling */
.btn {
    background-color: #206142;
    color: #fff;
    padding: 12px 30px;
    border-radius: 25px;
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.3s ease;
    display: inline-block;
}

.btn:hover {
    background-color: #B62511;
    transform: scale(1.05);
}

/* Modal Styling */
.modal-header {
    background-color: #206142;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.modal-body {
    padding: 30px;
    background-color: #fff;
}

.modal-footer {
    text-align: center;
    padding: 20px;
}

.modal-footer .btn {
    background-color: #206142;
    color: #fff;
    padding: 10px 25px;
    font-weight: 600;
}

.modal-footer .btn:hover {
    background-color: #B62511;
}

/* Footer */
footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 40px 20px;
    text-align: center;
}

footer a {
    color: #f5f5f5;
    font-size: 18px;
    text-decoration: none;
}

footer a:hover {
    color: #777;
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
        font-size: 28px;
    }

    .profile-header .profile-info {
        font-size: 16px;
    }

    .table th, .table td {
        padding: 10px;
    }
}

  </style>
</head>
<body id="flameAndFork" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include '../include/navbarCashier.html'; ?>

  >
<div id="about" class="container text-center">
  <h4>PROFILE</h4>
<div id="order" class="bg-1">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <?php
  include '../database/connection.php'; 
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
  <a class="up-arrow" href="#flameAndFork" data-toggle="tooltip" title="TO TOP">
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
