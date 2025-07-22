<?php
//Global Variable
$abc = "Hello World !";
//Function
function a(){
    // Loacl Variable
    $abc="Hey";
    echo $abc;
}
function b(){
    echo $abc;
}
//function call
a();
b();
echo $abc;
?>