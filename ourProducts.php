<!DOCTYPE html>
<html>
<head>
  <title>Mallick Enterprises | Our Products</title>
  <link rel="stylesheet" type="text/css" href="css.css">  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
  .bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color: black;
    margin: 6px 0;
    transition: 0.4s;
}
@media(max-width: 500px){
  body{
    padding: 0px;
  }
}
@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}
@media (max-width: 500px) {
  .news {
    width: auto;
  }
}
@media (max-width: 500px) {
  img {
    width: 100%;
  }
}
</style>
</head>

<body>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <div class="container">
  <div style="height: 110px;">
    <div style="width: 20%; float: left;" align="center"><img src="images/Logo.jpg" alt="logo" width="80%"></div>
    <div style="width: 79%; float: right;border:3px dashed grey;height: 100%" align="center"><h2 style="padding-top: 25px">Mallick Enterprises</h2></div>
  </div>
  <hr>
  <nav class="navbar" data-offset-top="50">
  <button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="true">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </button>
  <div class="side collapse navbar-collapse" id="myNavbar">
      <aside>
        <ul>
              <li><a href="index.php">Introduction</a></li>
                <li><a href="ourSolutions.php">Our Solutions</a></li>
                <li><a class="active" href="#">Our Products</a></li>
                <li><a href="ourClient.php">Our Client List</a></li>
                <li><a href="contactUs.php">Contact Us</a></li>
            </ul>
        </aside>
    </div>
</nav>
    <div class="news">
        <h3>Our Products</h3>
<center><img src="images/ourProducts1.jpg">
<img src="images/ourProduct2.jpg"></center>




    </div>

    </div>
  
</body>
</html>