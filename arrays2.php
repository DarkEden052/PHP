//Associative array
//Use String or Text as thier Indices
<?php
$years = array("Anubhav"=> 2004,"Ahaana"=> 2005);
foreach($years as $year){
    echo $year." ";
}
$years["Sapna"]=2005;
echo $years["Sapna"];
?>