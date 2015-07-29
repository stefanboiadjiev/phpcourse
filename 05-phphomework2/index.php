
<?php
	$COLS = 4;
	$ROWS = 5;
	
	echo '<table border="2" style="width:15%" >';
	
	for($i=1 ;$i <= $ROWS; $i++)
	{
		echo "<tr>" ;
		for ($j=1; $j <= $COLS; $j++)
		{
			echo "<td>" . "$i" . "  " . "$j" . "</td>";
		}
		echo "</tr>";
		}
	echo "</table>";
 ?>