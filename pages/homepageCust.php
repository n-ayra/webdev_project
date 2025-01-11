<?php
include "../database/connection.php";

$db = new mysqli;
$db->connect('localhost','root','','flameandfork');


$sql = "SELECT * FROM MENU";    

$val=$db->query($sql);    
$rows=$val;
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

  h3, h4 {
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
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background:rgb(183, 178, 178);
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
    background-color: #000000;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .nav-tabs li a {
    color: #B62511;
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

<?php include '../include/navbarCust.html'; ?>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../images/background1.jpg" alt="redpanda1" height="700px" width="1200px">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="../images/background2.jpg" alt="redpanda2" height="700px" width="1200px">
        <div class="carousel-caption">
        </div>      
      </div>
    
      <div class="item">
        <img src="../images/background3.jpg" alt="redpanda3" height="700px" width="1200px">
        <div class="carousel-caption">
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

    
<!-- Container (Promo) -->
<div id="order" class="bg-1">
  <div class="container">
    <h4 class="text-center">PROMO PRICE</h4>
      <p class="text-center"><strong>Here we serve the best for you</strong><br><br>
    </p>
        
     <?php $row=$rows->fetch_assoc()?>   
    <div class="row text-center">
      <div>
        <div class="thumbnail">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['IMAGE']); ?>" style="height: 300px; width: 400px;"/>
          <p><strong><?php echo $row['NAME'];?></strong><span class="glyphicon glyphicon-fire"></span></p>
          <p>Price: RM <?php echo $row['PRICE'];?></p>
        <div style="text-align: center">
          
        </div>
        </div>
      </div>        
  </div>
  <?php $sql = "SELECT * FROM MENU WHERE NAME='SIGNATURE CHOCOMILK'";    

$val=$db->query($sql);    
$rows=$val;
 $row=$rows->fetch_assoc()?>  
  <div class="row text-center">
      <div>
        <div class="thumbnail">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['IMAGE']); ?>" style="height: 300px; width: 400px;"/>
          <p><strong><?php echo $row['NAME'];?></strong><span class="glyphicon glyphicon-fire"></span></p>
          <p>Price: RM <?php echo $row['PRICE'];?></p>
        <div style="text-align: center">
          
        </div>
        </div>
      </div>        
  </div>
  <?php $sql = "SELECT * FROM MENU WHERE NAME='SIGNATURE FRIES'";    

$val=$db->query($sql);    
$rows=$val;
 $row=$rows->fetch_assoc()?>  
  <div class="row text-center">
      <div>
        <div class="thumbnail">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['IMAGE']); ?>" style="height: 300px; width: 400px;"/>
          <p><strong><?php echo $row['NAME'];?></strong><span class="glyphicon glyphicon-fire"></span></p>
          <p>Price: RM <?php echo $row['PRICE'];?></p>
        <div style="text-align: center">
          
        </div>
        </div>
      </div>        
  </div>
<?php  ?>
</div>
</div>

<!-- Container (POPULAR ITEM) -->
<div id="order" class="bg-1">
  <div class="container">
    <h4 class="text-center">POPULAR ITEMS</h4>
      <p class="text-center"><strong>These are the top items that people adore.</strong><br><br>
    </p>
    <?php $sql = "SELECT * FROM MENU WHERE NAME='SIGNATURE FRIES'";    

$val=$db->query($sql);    
$rows=$val;
 $row=$rows->fetch_assoc()?>  
    <div class="row text-center">
      <div>
        <div class="thumbnail">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['IMAGE']); ?>" style="height: 300px; width: 400px;"/>
          <p><strong><?php echo $row['NAME'];?></strong><span class="glyphicon glyphicon-fire"></span></p>
          <p>Price: RM <?php echo $row['PRICE'];?></p>
        <div style="text-align: center">
          
        </div>
        </div>
      </div>        
  </div>
  <?php $sql = "SELECT * FROM MENU WHERE NAME='SIGNATURE SMASH BEEF BURGER'";    

$val=$db->query($sql);    
$rows=$val;
 $row=$rows->fetch_assoc()?>  
  <div class="row text-center">
      <div>
        <div class="thumbnail">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['IMAGE']); ?>" style="height: 300px; width: 400px;"/>
          <p><strong><?php echo $row['NAME'];?></strong><span class="glyphicon glyphicon-fire"></span></p>
          <p>Price: RM <?php echo $row['PRICE'];?></p>
        <div style="text-align: center">
          
        </div>
        </div>
      </div>        
  </div>
  <?php $sql = "SELECT * FROM MENU WHERE NAME='SIGNATURE CHEESE VOLCANO PIZZA'";    

$val=$db->query($sql);    
$rows=$val;
 $row=$rows->fetch_assoc()?>  
  <div class="row text-center">
      <div>
        <div class="thumbnail">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['IMAGE']); ?>" style="height: 300px; width: 400px;"/>
          <p><strong><?php echo $row['NAME'];?></strong><span class="glyphicon glyphicon-fire"></span></p>
          <p>Price: RM <?php echo $row['PRICE'];?></p>
        <div style="text-align: center">
          
        </div>
        </div>
      </div>        
  </div>
<?php  ?>
</div>
</div>

</script>

</body>
</html>
