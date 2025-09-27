<?php

$sentence = null; 
$first = "In";
$second = "PHP";
$third = "Course";
//using(.=)
$sentence .= $first;     //  "In"
$sentence .= " ";        // "In "
$sentence .= $second;    // "In PHP"
$sentence .= " ";        // "In PHP "
$sentence .= $third;     // "In PHP Course"


echo "Q3 Concatenation: " . $sentence . "\n";

?>