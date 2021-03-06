<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOWFLIX</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<style type="text/css">
#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 8px;
  text-decoration: none;
  border-radius: 26px;
  font-size: 14px;
}

#navbar a:hover {
  background-color: red;
  color: black;
}

#navbar a.active {
  background-color: red;
  color: black;
}
</style>
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo">SHOWFLIX</a></h1>
    <div class="social"> <span>FOLLOW US ON:</span>
      <ul>
        <li><a class="twitter" href="#">twitter</a></li>
        <li><a class="facebook" href="#">faebook</a></li>
        <li><a class="vimeo" href="#">vimeo</a></li>
        <li><a class="rss" href="#">rss</a></li>
      </ul>
    </div>

    <div id="navigation">
        <div id="navbar">
  		<a class="active" href="javascript:void(0)">MOVIES</a>
  		<a href="javascript:void(0)"><a href="tvshow.html">TV SHOWS</a></a>
  		<a href="javascript:void(0)"><a href="movierating.html">MOVIES RATING</a></a>
  		<a href="javascript:void(0)"><a href="rating.html">SERIES RATING</a></a>
  		<a href="javascript:void(0)"><a href="conatctus.html">CONTACT US</a></a>
  		<a href="javascript:void(0)"><a href="login.html">LOGIN</a></a>
		</div>
    </div>
    <div id="sub-navigation">
      	<div id="navbar">
  		<a href="javascript:void(0)"><a href="comingup.html">UP COMING</a></a>
  		<a href="javascript:void(0)"><a href="https://www.imdb.com/">IMDB</a></a>
  		</div>
      <div id="search">
        <form action="#" method="get" accept-charset="utf-8">
          <label for="search-field">SEARCH</label>
          <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
          <input type="submit" value="GO!" class="search-button" />
        </form>
      </div>
    </div>
  </div>
  <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
  <div id="main">
    <div id="content">
      <div class="box">
        <br><br>
        <div class="container">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="width: 1000px;height: 400px;border-radius: 26px;">
      <div class="item active">
        <img src="css/images/popcorn.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="css/images/coke.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="css/images/cinema.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="margin-left: 0px;color: red;">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" style="margin-right: 120px;color: red;">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><br><br>
        <div class="movie" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="xmen.html">X-MAN</span></span><img src="css/images/movie1.jpg" alt=""/></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="spiderman.html">SPIDER MAN 2</span></span><img src="css/images/movie2.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="seven.html">SEVEN</span></span><img src="css/images/seven.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="titanic.html">TITANIC</span></span><img src="css/images/titanic.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="inception.html">INCEPTION</span></span><img src="css/images/inception.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie last" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="iceage.html">ICE AGE</span></span><img src="css/images/movie6.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
      <div class="box">
        <div class="movie" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="avengers.html">AVENGERS</span></span><img src="css/images/avengers.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="sourcecode.html">SOURCE CODE</span></span><img src="css/images/sourcecode.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="kungfupanda.html">KUNG FU PANDA</span></span><img src="css/images/movie9.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="shawshank.html">SHAWSHANK REDEMPTION</span></span><img src="css/images/shawshank.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="nowuseeme.html">NOW YOU SEE ME</span></span><img src="css/images/nowuseeme.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie last" style="margin-left: 10px;padding: 10px;">
          <div class="movie-image"> <span class="play"><span class="name"><a href="imitationgame.html">IMITATION GAME</span></span><img src="css/images/imitationgame.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
  <div id="footer">
    <p class="lf">Copyright &copy; 2010 <a href="#">SHOWFLIX</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="http://chocotemplates.com/">SHOWFLIX.com</a></p>
    <div style="clear:both;"></div>
  </div>
</div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

<!-- END PAGE SOURCE -->
</body>
</html>