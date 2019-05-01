  <?php     
    $url = "http://localhost:9090/barServices/webresources/web.bar/";
    $json = file_get_contents($url);
    $bars = json_decode($json, true);


   //Wurde das Suchfeld ausgefüllt? 
        $sent=isset($_POST['sent'])? $_POST['sent'] : '';
        $suche= isset($_POST['suchstring'])? $_POST['suchstring'] : '';
        
        if ($sent and $suche) {
 
             foreach ($bars as  $bar){

              echo "<div class='menu-item'>";


     echo "<div class='menu-item-name'>".$bar['name']." ,   ".$bar['strasse']. " , ".$bar['plz']."  ".$bar['ort']."</div>";
     echo " <div class='menu-item-price'> Telefon : 0511/". $bar['telefon']."</div>";
   echo "</div>";
     }
    

  

        }
?>

