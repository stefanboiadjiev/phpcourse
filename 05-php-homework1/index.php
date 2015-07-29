<?php


	for($i=0; $i <= 100; $i++)
	
	{
		
		if ( $i % 2 == 0 ) 
			{
				echo '<div style="background-color:blue">' . $i;
			}
			
		else
			{
				echo '<div style="background-color:green">' . $i;
			
			}
			
		if ( $i %7 == 0 && $i != 0 )
			{
				echo  "  "	.  "BINGO";
			}
	}
	
	
?>