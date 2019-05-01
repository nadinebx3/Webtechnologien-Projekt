<?php
  $id = $_GET["id"];
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://localhost:8080/Mensaapi/gerichte/".$id);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    $result_arr = json_decode($result, true);
    curl_close ($curl);
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Details der Speisekarte</title>
<meta name="description" content=" Speisekarten Details der Mensa Hannover">
<meta name="author" content="Nadine Fakih, Alina Knaak, Claudia Gierszendorf">

<!--  Verwendung von Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Aktuelle Stylesheets  -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



<!-- Navigation-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Mensa Speisekarte</a> </div>
    
  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost/MensaSpeisekarte" class="page-scroll">Home</a></li>
           <li><a href="#about" class="page-scroll">Details</a></li>
          <li><a href="http://localhost/MensaSpeisekarte/#restaurant-menu" class="page-scroll">Speiseplan</a></li>


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

<!-- Restaurant  und Menü Section -->
<div id="restaurant-menu">

  <div class="container">
    <div class="row">
        <div class="menu-section">
          <div id="about">
          <h2 class="menu-section-title"> Details: <?php echo $result_arr['gericht'];?></h2>

          <hr> <p> Bitte beachten Sie folgende Hinweise  :</p>
          
          <p>Allergen:  <?php echo $result_arr['allergen'];?>  </p> 
          <p> Gerichtsart : <?php echo $result_arr['art'];?></p> 
          <p>  Das Gericht gibt es bei uns für: <?php echo $result_arr['preis'];?> €</p>
          
  
    </div>
</div>
  </div>
</div>


<?php include("footer.php"); ?>

</body>
</html>
