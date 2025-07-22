<?php
$abc = "Hello World";
function a(){
    $GLOBALS['abc'] = "Hey Friends..";
    echo $GLOBALS['abc'];
}
a();
echo $abc;
?>