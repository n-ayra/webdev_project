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
}

h1 {
  margin: 20px;
  letter-spacing: 5px;
  font-size: 50px;
  color: #3436d3;
}

h4 {
  margin: 10px 0 30px 0;
  letter-spacing: 2px;
  font-size: 22px;
  color: #333;
}

.container {
    padding: 80px 120px;
    margin-left: auto;
    margin-right: auto;
  }

  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color:rgb(0, 0, 0);
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
  
.footer {
  background-color: #343a40;
  color: #d6d6d6;
  padding: 20px 0;
  text-align: center;
}

.footer a {
  color: #ffd700;
}

.footer a:hover {
  text-decoration: underline;
}

.btn {
  background-color: #3436d3;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 3px;
  transition: all 0.3s ease-in-out;
}

.btn:hover {
  background-color: #2c2fb1;
}

table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
  background-color: #fff;
}

th {
  background-color: #343a40;
  color: #fff;
  padding: 10px;
}

td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.thumbnail {
  padding: 15px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

.modal-header {
  background-color:rgb(181, 172, 242);
  color: #fff;
  font-size: 20px;
  padding: 15px;
}

.modal-body {
  background-color: #f9f9f9;
  padding: 20px;
}

.form-control {
  border-radius: 5px;
  border: 1px solid #ced4da;
}

textarea {
  resize: vertical;
  border-radius: 5px;
}

  </style>
</head>
<body id="flameAndFork" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include '../include/navbarChef.html'; ?>

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
