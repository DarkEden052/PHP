<?php
//creating a function 
function add_two_numbers($num1 = 5,$num2=10){
    $sum = $num1 + $num2;
    return $sum;
}
//function calling 
$total = add_two_numbers(30,35);
echo $total;
?>