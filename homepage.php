<?php
include_once "unset.php";
?>
<!DOCTYPE html>
<html lang="en">
include_once "db.php";
<head>
     <title>Wintec Cricket Academy - Login</title>
     <meta charset = "utf-8">
     <meta name = "viewport" content = "width=device-width, initial-scale=1">
     <link rel = "stylesheet" href = "css/bootstrap.min.css">
     <link rel = "stylesheet" href = "css/Login.css">
     <link rel = "stylesheet" href = "css/bootstrap-social.css">
     <link href = "css/font-awesome.css" rel = "stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script>
     window.history.forward();
     </script>
</head>
<body>
  <div id = "homeDIV">
      <nav class = "navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style = "height:40px;">
        <a class = "navbar-brand" href="#">
          <img src = "images/homepage.gif" class = "img-thumbnail" alt = "Logo" style = "width:100px; height:100px;">
        </a>
       <ul class = "navbar-nav">
        <li class = "nav-item">
         <a class = "nav-link" href="#"><?php
        $fname = $_SESSION['firstname'];
        $lname = $_SESSION['lastname'];
        $name = $fname." ".$lname;
        echo '<strong> Welcome </strong>'." ".$name;
         ?>
       </a>
        </li>
        <li class = "nav-item">
         <a class = "nav-link" href = "logout.php">
           Logout
         </a>
      </ul>
      </nav>
<br>
   <div class = "container" style = "margin-top:30px">
    <div class = "row">
      <div class = "col-sm-5 bg-dark">
        <center><h4>Thanks for Registering. We promise you for good coaching !</h4></center>
            <form name = "homepage" action = "#" method = "post">
              <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images\virat.jpg" alt="Los Angeles" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>The Cricket Legend</h3>
                      <p>We have trained Great Cricket Players</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images\dhoni.jpg" alt="Chicago" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>MS Dhoni</h3>
                      <p>Thank you Dhoni for the Support!</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images\kane.jpg" alt="New York" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Kane Williamson</h3>
                      <p>Thank you Kane !</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
        </div>
       </div>
     </div>
   </div>
               <nav class = "navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom" style = "height:40px;">
                 <ul class = "navbar-nav">
                   <li class = "nav-item">
                     <a class = "navbar-brand" href = "#"><img src = "images/icc.png" class = "img-thumbnail"  alt = "Logo" style = "width:40px;"></a>
                   </li>
                   <li class = "nav-item">
                     <a class = "navbar-brand" href = "#"><img src = "images/bcci.jpg" class = "img-thumbnail" alt = "Logo" style = "width:40px;"></a>
                   </li>
                   <li class = "nav-item">
                     <a class = "navbar-brand" href = "#"><img src = "images/nz.jpg" class = "img-thumbnail"s alt = "Logo" style = "width:40px;"></a>
                   </li>
                </ul>
        <h6>Copyright v1.0 @Maria.Susainathan<h6>
</nav>
</body>
</html>
