
<?php
	$COLS = 4;
	$ROWS = 5;
	
	echo "<table>";
	
	for($i=1 ;$i < $ROWS; $i++)
	{
		echo '<tr>';
		for ($j=1; $j < $COLS; $j++)
			echo '<td>' . '$i' . '$j';
		
		
	}
	
 ?>