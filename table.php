<?php
echo '<table border=1px ><tr>';  
   for ($row = 1; $row <= 8; $row++){
   		echo '<tr>';
   	for ($col=1; $col <=8; $col++) { 
   		 if (($row + $col + 1) % 2 == 0) {
   			echo '<td bgcolor="black" height=30px width=30px></td>';
   		}else{
   			echo '<td  height=30px width=30px></td>';
   		}

   		
   	}
	   echo '</<tr>';
   };

  echo '</table>';