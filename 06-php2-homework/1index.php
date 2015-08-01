<!DOCTYPE html>
<?php
	$arr = array( );
	
	$arr [1] = "Mercedes-Bentz";
	$arr [2] = "BMW";
	$arr [3] = "infinity";
    $arr [4] = "Silvia";
	$arr [5] = "Masarati";
	$arr [6] = "Kioninsec";
	$arr [7] = "Porsche";
	
	for ($i=1; $i<=7; $i++)
	{
		echo "<p>" . "Искам да си купя" . "  " . "$arr[$i]" . "</p>";
		
	}
	
	unset($arr[7]);
	echo "</br>";
	
	for ($i=1; $i<=6; $i++)
	{
	echo "<p>" . "Ще си купя" . "  " . "$arr[$i]" . "</p>";
		
	}
	
	
	
	
?>


