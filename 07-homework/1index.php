<!DOCTYPE html>

<?php
	
	
	for($i = 0; $i <=10; $i++){
		$strana = rand(1, 50);
		$visochina = rand(1, 20);
		
		$area = lice($strana, $visochina);
		
		echo "<div>Лицето на триъгълник със страна и съответно височина към нея $strana cm. и $visochina cm. е равено на $area кв. см.</div>";
	}
	
	
	function lice($strana, $visochina) {
		$area = $strana * $visochina / 2;
		return $area;
	}
	
?>

</body>