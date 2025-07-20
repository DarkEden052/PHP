<?php
$students = array(
    "Anubhav" => array(
        "Physics" => 97,
        "Chemistry" => 82,
        "Maths" => 94
    ),
    "Ahaana" => array(
        "Physics" => 83,
        "Chemisty" => 91,
        "Maths" => 72
    ),
    "Aman" => array(
        "Physics" => 81,
        "Chemistry" => 89,
        "Maths" => 91
    )
);
foreach($students as $student => $subjects){
    foreach($subjects as $subject => $mark){
        echo $student . " has Scored " . $mark." in " . $subject . "\n";
    }
}
?>