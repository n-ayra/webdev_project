<?php 
include "../database/connection.php";
session_start();
$db = new mysqli;
$db->connect('localhost','root','','flameandfork');

$price = $_GET['NAME'];

if(isset($_POST['send'])){
    
    $accNum = $_POST['accnumber'];
    $accName = $_POST['accname'];
    $amount = $_POST['amount'];
    
$sql = "INSERT INTO transaction VALUES ('', '$accNum', '$accName', '$amount')";
    
$val=$db->query($sql);
    
header("location:../actions/deleteOrder.php");
    
}
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
      color: #B62511;
          
    }

  h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 2px;      
    font-size: 20px;
  }
  .container {
    padding: 80px 120px;
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
    background-color: green;
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
.hideme
{
    display:none;
    visibility:hidden;
}
.showme
{
    display:inline;
    visibility:visible;
}  
  </style>
</head>
<body id="flameAndFork" data-spy="scroll" data-target=".navbar" data-offset="50">


<div id="about" class="container text-center">
 
    
<div id="order" class="bg-1">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4><span class="fa fa-exchange"></span> TRANSFER PAYMENT</h4>
        </div>
        <div class="modal-body">
          <form method="POST">
          <label for="psw"><span class="fa fa-credit-card"></span> Account Number:</label>
            <input type="text" id="accnumber" name="accnumber" class="form-control" value="">
            <label for="psw"><span class="fa fa-user-circle-o"></span> Account Name:</label>
            <input type="text" id="accname" name="accname" class="form-control" value="">
            <label for="psw"><span class="fa fa-credit-card"></span> Transfer To:</label>
            <input type="text" id="transfer" name="transfer" class="form-control" value="946589762145" readonly>
            <label for="psw"><span class="fa fa-user-circle-o"></span> Name:</label>
            <input type="text" id="transfername" name="transfername" class="form-control" value="Muhamad Akmal Irfan Bin Lokman" readonly>
              <label for="psw"><span class="fa fa-money"></span> Amount:</label>
              <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $price;?>" readonly>
              
              <br>
              <button type="submit" name="send" class="btn btn-block">
                <span class="fa fa-check-circle"> Submit </span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
            <a href="../pages/cart.php" class="btn btn-danger btn-default pull-left" style="background-color: red;"><span class="glyphicon glyphicon-remove" ></span> Cancel</a>
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

