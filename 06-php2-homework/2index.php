<?php
$company = array("BMW"=>"http://www.bmw-autobavaria.bg/bg/bg/", "Mercedes"=>"http://www.balkanstar.com/bg", "Alfa"=>"http://www.alfaromeo.bg/", "sporttoto"=>"http://www.toto.bg" , "playonline" =>"https://www.toto.bg");
	echo "<ul>" ;
	foreach($company as $name => $site)
	{
	echo "<li>" .  "<a href='$site'>" . "$name" . "</a>" . "</li>";
	}
echo "</ul>" ;
?>

