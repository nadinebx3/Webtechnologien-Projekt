
<?php include 'header.php'?>
<!-- Über uns  Section -->
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
<!-- BAR Menü Section -->
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

        
          <h2 class="menu-section-title"> Finden Sie  die besten Bars in Ihrer Nähe</h2>
<!-- 			<a href="#about" class="page-scroll">Suche</a>
 -->        <!-- <form action="Bars.php" method="post">
              Postleitzahl: <input type="search" id="suche" name="plz">	
            <input type="Submit" value="suchen"/>
        </form>


        <form action="suchRest.php" method="post">
              Postleitzahl: <input type="search" id="suche" name="plz">
            <input type="Submit" value="suchen"/>
        </form> -->
          


 
        <form method="post" action="#suchee"> 
             <div class="container">
    <div class="row">
       <div class="menu-section">

          <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Geben Sie hier die Postleitzahl an</label>
    <input type="text" class="form-control" id="beispielplz" aria-describedby="plzhilfe" name=suchstring placeholder="Gib  hier eine Postleitzahl an">
    <small id="plzhilfe" class="form-text text-muted">Sei gespannt auf die besten Bars in deiner Nähe ;)</small>
  </div>

  <button type="submit" class="btn btn-primary" value="Senden">Suchen</button>
        <input type="hidden" name="sent" value="1">

</form>        <div id="suchee">

<!-- 
           Geben Sie die Postleitzahl an : <input type=text name=suchstring > <br />
       <input type="Submit" value="Absenden">
        <input type="hidden" name="sent" value="1"> -->

         </form>
       </div>
          <?php  include ("suchRest.php"); ?>

</div>
</div>
</div>

          </div>

    </div>
  </div>
</div>    



<?php include 'footer.php'?>

</body>
</html>
