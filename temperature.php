<?php
$month_temp = "78, 60, 62, 68, 71, 68,
73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
62, 62, 65, 64, 68, 73, 75, 79, 73
";
$temp_array = explode(',',$month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp){
    $tot_temp += $temp;}
    $avg_high_temp=$tot_temp/$temp_array_length;
    echo "Average Temperature is: ".round($avg_high_temp, 1)."";
    sort($temp_array);
    echo "<br>List of seven lowest temperatures:";
    for($i=0; $i<7; $i++){
        echo $temp_array[$i].",";
    };
    echo "<br>List of seven highest temperatures:";
    for($i=$temp_array_length-7; $i<($temp_array_length); $i++){
        echo $temp_array[$i].",";
    };

?>