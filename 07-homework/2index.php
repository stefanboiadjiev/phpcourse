<!DOCTYPE html>

<?php
	$chislo = 4 ;
	$duma = array('pencho', 'p', 'liutenica', 'mercedesbentz', 'kururuku', 'hranazakuchetaikotki');
	$size = count($duma);
	for ($i = 0;$i < $size;$i++)
		
		{
		
		$chislotest = test($chislo, $duma[$i]);
		echo "</br>";
		echo "чисото е" . " " . "$chislo" . " " . "Думата е  " . " " . "$duma[$i]" . " " . "След манипулацията числото е" . " " . "$chislotest";
		}
	function test ($chislo, $duma) 
	{
	$lenght = strlen($duma);
	if ($lenght%2 == 0)
		{
		$chislo = $chislo + 12;
		}
	else 
		{
		$chislo = $chislo - 3;
		}
 	if($chislo > 10)
		$chislo = $chislo - 22;
	elseif ( $chislo < 0 )
	{
		$chislo = $chislo + 14;
	
	
	}
	
	return $chislo;
	}
?>