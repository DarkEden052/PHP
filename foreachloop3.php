<?php
$numbers = array(1,2,3,4,5,6,7,8,9,10);
$sum = 0;
foreach($numbers as $number){
    if($sum>20){
        continue;
    }
    $sum = $sum + $number;
}
echo $sum." ".$number;
?>