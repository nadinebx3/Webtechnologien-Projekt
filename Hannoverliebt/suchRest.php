  <?php     
    $url = "http://localhost:8080/barServices/webresources/web.bar/";
    $json = file_get_contents($url);
    $bars = json_decode($json, true);
?>

  <?php $input = $_POST["plz"]; ?>
        <?php if(empty($bars)): ?>
                 <p>Keine Einträge vorhanden</p>
            <?php else: ?>
              <?php foreach($bars as $bar): 
                    if($bar['plz'] == $input){
                       echo $bar['name'] . $bar['strasse'];
                    }
              endforeach; ?>
        <?php endif; 



        ?> 
        