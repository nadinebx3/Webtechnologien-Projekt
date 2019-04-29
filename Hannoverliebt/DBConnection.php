<?php
	$db_link = mysqli_connect('localhost','root','','WebTech');

	if(!$db_link){
		echo "Verbindung wurder nicht hergestellt!";
	}
?> 	