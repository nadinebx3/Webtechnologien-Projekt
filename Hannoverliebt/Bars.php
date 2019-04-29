
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<?php
	
	require('DBConnection.php');

	$plz = $_POST["plz"];
	$nr = 1;
	if($plz == ""){
		$db_result = mysqli_query($db_link,"SELECT `Name`, `Strasse`, `Postleitzahl`, `Stadt` FROM bars")
		or die("Fehler: " . mysqli_error($db_link));
	}else{
		$db_result = mysqli_query($db_link,"SELECT `Name`, `Strasse`, `Postleitzahl`, `Stadt` FROM bars WHERE Postleitzahl = $plz")
		or die("Fehler: " . mysqli_error($db_link));
	}

	echo ('<h1>' . "Bars in deiner Nähe: " . '</h1> <br>');
	while($row = mysqli_fetch_array($db_result)){

		echo ('<p>' . $nr .  '- ' . $row ['Name'] . ' ' . $row ['Strasse'] . ' ' . $row ['Postleitzahl'] . ' ' . $row ['Stadt'] . '</p>');
		$nr++;
	}

	include 'footer.php'
?>