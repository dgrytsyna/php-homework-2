<?php
echo '<table align="left" border="1" cellpadding="3" cellspacing="0">';
for ($i=1; $i<=6; $i++){
    echo "<tr>";
    for($j=1; $j<=5; $j++){
        echo "<td>$i*$j=".$i*$j."</td>";
    };
    echo "</tr>";
};
echo "</table>";
?>