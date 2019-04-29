<?php
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://localhost:8080/PLATZER");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    $result_arr = json_decode($result, true);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Bar + Kneipen Guide</title>
<meta name="description" content="Kneipenplan der Hochschule Hannover">
<meta name="author" content=" Firas Shmit, Valerie Vaske, Nadine Fakih, Alina Knaak, Claudia Gierszendorf">

<!-- Bootstrap  Stylesheets-->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">

<!-- Stylesheets und die Schriftarten
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Kneipen Guide</a> </div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost/PLATZHALTER" class="page-scroll">Home</a></li>
           <li><a href="#about" class="page-scroll">Details</a></li>
          <li><a href="#restaurant-menu" class="page-scroll">Bars</a></li>


      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Bar + Kneipen Guide</h1>
            <p>in Hannover</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Details</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>  

<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="img/about.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2> Informationen</h2>
          <hr>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menü Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Hotspots</h2>
      <hr>
      <p>Erleben Sie eine echte Bar-Kultur in Hannover. Wir sagen Ihnen, wo man sie findet.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="menu-section">
          <h2 class="menu-section-title"> Finden Sie Bars in Ihrer Nähe</h2>
			<a href="#about" class="page-scroll">Suche</a>
        <form action="Bars.php" method="post">
              Postleitzahl: <input type="search" id="suche" name="plz">	
            <input type="Submit" value="suchen"/>
        </form> 
  
    </div>
  </div>
</div>    


<?php include 'footer.php'?>

</body>
</html>