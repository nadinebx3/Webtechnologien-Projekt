<?php
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://localhost:8080/Mensaapi/gerichte/");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    $result_arr = json_decode($result, true);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MensaSpeisekarte</title>
<meta name="description" content="Speiseplan der Hochschule Hannover">
<meta name="author" content=" Nadine Fakih, Alina Knaak, Claudia Gierszendorf">

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
      <a class="navbar-brand page-scroll" href="#page-top">Mensa Speisekarte</a> </div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost/MensaSpeisekarte" class="page-scroll">Home</a></li>
           <li><a href="#about" class="page-scroll">Details</a></li>
          <li><a href="#restaurant-menu" class="page-scroll">Speiseplan</a></li>


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
            <h1>Mensa Speisekarte</h1>
            <p>Hausgemachte Spezialitäten</p>
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
          <h2> Über unsere Mensa</h2>
          <hr>
          
          <p>Durch den Anbau eines Küchentraktes, der Umgestaltung und der Erweiterung des Speiseraums, sowie einer Nutzfläche von ca. 1.168 m², können am Standort Linden, bis zu 1.500 Studenten  verpflegten werden.
Des Weiteren, darf der Speiseraum außerhalb der Essensausgabe auch als Fläche für das Selbststudium für Studierende genutzt werden.
Mit einem breiten Frühstücksangebot sowie zahlreichen Mittagsgerichten, erwartet Sie auf dem Campus der HS Hannover, ein gesundes, reichhaltiges und preiswertes Essen!
Die Speisekarte der Cafeteria, gibt das jeweilige Gesamtsortiment wieder.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menü Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Speiseplan</h2>
      <hr>
      <p>Ein breites Frühstücksangebot sowie zahlreiche Mittagsgerichte, erwartet Sie auf dem Campus der HS Hannover</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="menu-section">
          <h2 class="menu-section-title"> Hauptgerichte</h2>
          <hr>
             <?php 
             foreach ($result_arr as  $gericht){

              echo "<div class='menu-item'>";
     echo "<div class='menu-item-name'>".$gericht["id"].". ".$gericht["gericht"]."</div>";
     echo " <div class='menu-item-price'>". $gericht["preis"]." € <a href ='details.php?id=".$gericht["id"]."' >Details</a> </div>";
   echo "</div>";
     }
    ?> 

  
    </div>

  </div>
</div>    
<?php include("footer.php"); ?>


</body>
</html>
